<?php

namespace app\controllers;

use app\models\Cart;
use app\models\Users;
use app\models\Carousel;
use app\models\Categories;
use app\models\Discount;
use app\models\News;
use app\models\OptionGroups;
use app\models\ProductCarousel;
use app\models\Products;
use Yii;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Request;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;
use PHPMailer\PHPMailer\PHPMailer;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public $layout;
    public $categories;
    public $cartItems = 0;

    public function init()
    {
        parent::init();
        $this->layout = 'site';
        $this->categories = Categories::find()->where(['status' => 1, 'parent_id' => null])->with('categories.categories')->all();


        if ($_SESSION['account']) {
            $this->cartItems = Cart::find()->where(['user_id' => $_SESSION['account']['client_id']])->count();
        }
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $carousel = Carousel::find()->limit(5)->all();
        $discountProducts = Discount::find()->where(['status' => 1])->with('product.productOptions.option')->with('product.productImages')->limit(15)->all();
        $productCarousels = ProductCarousel::find()->where(['status' => 1])->with('category.products.productOptions.option')->with('category.products.discounts')->with('category.products.productImages')->all();
        $news = News::find()->orderBy('updated_at DESC')->limit(3)->all();
        $newProducts = Products::find()->where(['status' => 1])->with('productOptions.option')->with('productImages')->with('discounts')->orderBy('updated_at DESC')->limit(15)->all();
        return $this->render('index', [
            'carousel' => $carousel,
            'news' => $news,
            'discountProducts' => $discountProducts,
            'lang' => Yii::$app->language,
            'productCarousels' => $productCarousels,
            'newProducts' => $newProducts
        ]);
    }

    public function actionRegistration()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $error = false;

            if (!(isset($_GET['name']) and !empty($_GET['name']))) {
                $error = true;
                return [
                    'status' => 'error_name',
                ];
            }

            if (!(isset($_GET['surname']) and !empty($_GET['surname']))) {
                $error = true;
                return [
                    'status' => 'error_surname',
                ];
            }
//            pre($_GET);

            if (!(isset($_GET['email']) and !empty($_GET['email']))) {
                $error = true;
                return [
                    'status' => 'error_email',
                ];
            } else {
                if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
                    $error = true;
                    return [
                        'status' => 'error_email_format',
                    ];
                }
            }

            if (!(isset($_GET['phone']) and !empty($_GET['phone']))) {
                $error = true;
                return [
                    'status' => 'error_phone',
                ];
            } else {
                if (isset($_GET['code']) and !empty($_GET['code'])){
                    $code = $_GET['code'];
                    if ($code == "UZ"){
                        if (!preg_match("/^(\+?998)?(6[125-79]|7[1-69]|88|[1-9]\d)\d{7}$/",$_GET['phone'])){
                            return [
                                'status' => 'error_code',
                            ];
                        }
                    }
                    else if ($code == "RU"){
                        if (!preg_match("^\+?7(\d{10})$",$_GET['phone'])){
                            return [
                                'status' => 'error_code',
                            ];
                        }
                    }
                    else if ($code == "KZ"){
                        if (!preg_match("^\+?77(\d{9})$",$_GET['phone'])){
                            return [
                                'status' => 'error_code',
                            ];
                        }
                    }
                }
            }

            if (!(isset($_GET['password']) and !empty($_GET['password']))) {
                $error = true;
                return [
                    'status' => 'error_password',
                ];
            }

            if (!(isset($_GET['password_confirm']) and !empty($_GET['password_confirm']))) {
                $error = true;
                return [
                    'status' => 'error_password_confirm',
                ];
            }

            if ($_GET['password'] != $_GET['password_confirm']) {
                $error = true;
                return [
                    'status' => 'error_same',
                ];
            }

            if (!$error){
                $name = $_GET['name'];
                $surname = $_GET['surname'];
                $email = $_GET['email'];
                $phone = $_GET['phone'];
                $password = $_GET['password'];

                $user = new Users();
                $user->name = $name;
                $user->surname = $surname;
                $user->email = $email;
                $user->phone = $phone;
                $user->password = $password;
                $user->status = 1;
                if ($user->save()) {
                    $_SESSION['account'] = [
                        'client_id' => $user->id,
                        'phone' => $user->phone,
                        'name' => $user->name,
                        'pass' => $user->password,
                    ];
                    return [
                        'status' => 'success'
                    ];
                } else {
                    pre($user->errors);
                }
            }
        }
    }

//    /**
//     * Login action.
//     *
//     * @return Response|string
//     */
//    public function actionLogin()
//    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        }
//
//        $model->password = '';
//        return $this->render('login', [
//            'model' => $model,
//        ]);
//    }
//
//    /**
//     * Logout action.
//     *
//     * @return Response
//     */
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCart()
    {
        if (!$_SESSION['account']) {
            Yii::$app->session->setFlash('notification','Вы не авторизованы!');
            return $this->redirect(['site/index']);
        }

        $cartItems = Cart::find()->where(['product_id' => $_SESSION['account']['client_id']])->with('product.discounts')->with('product.productImages')->all();

        $totalSum = 0;
        foreach ($cartItems as $item) {
            $totalSum += $item['product']['discounts'] ? $item['product']['discounts'][0]['discount_price'] * $item['quantity'] : $item['product']['price'] * $item['quantity'];
        }
        return $this->render('cart', ['cartItems' => $cartItems, 'totalSum' => $totalSum]);
    }

    public function actionCatalog(Request $request)
    {
        $category_id = $request->get('category_id');
        $category = Categories::find()->where(['id' => $category_id])->with(['parent.parent', 'optionGroups.options.productOptions'])->one();
        if (!empty($request->get('sort'))) {
            switch ($request->get('sort')) {
                case 'new':
                    $products = Products::find()->where(['status' => 1, 'category_id' => $category_id])->with(['discounts', 'productImages', 'productOptions'])->orderBy(['updated_at' => SORT_DESC,])->all();
                break;
                case 'price_asc':
                    $products = Products::find()->where(['status' => 1, 'category_id' => $category_id])->with(['discounts', 'productImages', 'productOptions'])->all();
                    for ($outer = 0; $outer < count($products); $outer++) {
                        for ($inner = 0; $inner < count($products); $inner++) {
                            if (!empty($products[$inner]['discounts'])) {
                                if (!empty($products[$outer]['discounts'])) {
                                    if ($products[$outer]['discounts']['discount_price'] < $products[$inner]['discounts']['discount_price']) {
                                        $tmp = $products[$outer];
                                        $products[$outer] = $products[$inner];
                                        $products[$inner] = $tmp;
                                    }
                                } else {
                                    if ($products[$outer]['price'] < $products[$inner]['discounts']['discount_price']) {
                                        $tmp = $products[$outer];
                                        $products[$outer] = $products[$inner];
                                        $products[$inner] = $tmp;
                                    }
                                }
                            } else {
                                if (!empty($products[$outer]['discounts'])) {
                                    if ($products[$outer]['discounts']['discount_price'] < $products[$inner]['price']) {
                                        $tmp = $products[$outer];
                                        $products[$outer] = $products[$inner];
                                        $products[$inner] = $tmp;
                                    }
                                } else {
                                    if ($products[$outer]['price'] < $products[$inner]['price']) {
                                        $tmp = $products[$outer];
                                        $products[$outer] = $products[$inner];
                                        $products[$inner] = $tmp;
                                    }
                                }
                            }

                        }
                    }
                break;
                case 'price_desc':
                    $products = Products::find()->where(['status' => 1, 'category_id' => $category_id])->with(['discounts', 'productImages', 'productOptions'])->all();
                    for ($outer = 0; $outer < count($products); $outer++) {
                        for ($inner = $outer + 1; $inner < count($products); $inner++) {
                            if (!empty($products[$inner]['discounts'])) {
                                if (!empty($products[$outer]['discounts'])) {
                                    if ($products[$outer]['discounts']['discount_price'] > $products[$inner]['discounts']['discount_price']) {
                                        $tmp = $products[$outer];
                                        $products[$outer] = $products[$inner];
                                        $products[$inner] = $tmp;
                                    }
                                } else {
                                    if ($products[$outer]['price'] > $products[$inner]['discounts']['discount_price']) {
                                        $tmp = $products[$outer];
                                        $products[$outer] = $products[$inner];
                                        $products[$inner] = $tmp;
                                    }
                                }
                            } else {
                                if (!empty($products[$outer]['discounts'])) {
                                    if ($products[$outer]['discounts']['discount_price'] < $products[$inner]['price']) {
                                        $tmp = $products[$outer];
                                        $products[$outer] = $products[$inner];
                                        $products[$inner] = $tmp;
                                    }
                                } else {
                                    if ($products[$outer]['price'] < $products[$inner]['price']) {
                                        $tmp = $products[$outer];
                                        $products[$outer] = $products[$inner];
                                        $products[$inner] = $tmp;
                                    }
                                }
                            }

                        }
                    }
                break;
            }
        } else {
            $products = Products::find()->where(['status' => 1, 'category_id' => $category_id])->with(['discounts', 'productImages', 'productOptions'])->all();
        }

        if (!empty($request->get())) {
            if (!empty($request->get('options'))) {
                foreach ($products as $key => $product) {
                    $hasOption = false;
                    foreach ($product->productOptions as $option) {
                        if (in_array($option->option_id, $request->get('options'))) {
                            $hasOption = true;
                        }
                    }
                    if (!$hasOption) {
                        unset($products[$key]);
                    }
                }
            }
            if (!empty($request->get('price_min'))) {
                foreach ($products as $key => $product) {
                    if (count($product->discounts) > 0) {
                        if ($product->discounts->discountPrice < $request->get('price_min')) {
                            unset($products[$key]);
                        }
                    } else {}
                    if ($product->price < $request->get('price_min')) {
                        unset($products[$key]);
                    }
                }
            }
            if (!empty($request->get('price_max'))) {
                foreach ($products as $key => $product) {
                    if (count($product->discounts) > 0) {
                        if ($product->discounts->discountPrice > $request->get('price_max')) {
                            unset($products[$key]);
                        }
                    } else {}
                    if ($product->price > $request->get('price_max')) {
                        unset($products[$key]);
                    }
                }
            }
        }
        return $this->render('catalog', [
            'category' => $category,
            'products' => $products,
            'lang' => Yii::$app->language,
        ]);
    }

    public function actionCompare()
    {
        return $this->render('compare');
    }

    public function actionDelivery()
    {
        return $this->render('delivery');
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionNews()
    {
        return $this->render('news');
    }

    public function actionProduct()
    {
        $id = Yii::$app->request->get('id');
        $product = Products::find()->where(['id' => $id, 'status' => 1])->with('category.parent.parent')->with('reviews')->with('productOptions.option.optionGroup')->with('productImages')->with('discounts')->one();
        $reviewsCount = count($product['reviews']);
        $totalRating = 0;
        $rating = $totalRating == 0 ? 0 : $totalRating/$reviewsCount;
        foreach ($product['reviews'] as $review) {
            $totalRating += $review['rating'];
        };
        $optionGroupsIds = [];
        foreach ($product['productOptions'] as $option) {
            $optionGroupsIds[] = $option['option']['optionGroup']['id'];
        }
        $query = OptionGroups::find()->with('options')->where(['status' => 1, 'id' => $optionGroupsIds])->all();
        $optionGroups = [];
        $i = 0;
        foreach ($query as $optionGroup) {
            $optionGroups[$i]['id'] = $optionGroup['id'];
            $optionGroups[$i]['title_ru'] = $optionGroup['title_ru'];
            $optionGroups[$i]['title_en'] = $optionGroup['title_en'];
            $optionGroups[$i]['category_id'] = $optionGroup['category_id'];
            $optionGroups[$i]['status'] = $optionGroup['status'];
            $result = [];

            foreach ($product['productOptions'] as $productOption) {
                $result[] = $productOption['option'];
            }
            $optionGroups[$i]['options'] = $result;
            $i++;
        }
        return $this->render('product', [
            'product' => $product,
            'optionGroups' => $optionGroups,
            'lang' => Yii::$app->language,
            'reviewsCount' => $reviewsCount,
            'rating' => $rating,
        ]);
    }

    public function actionWarranty()
    {
        return $this->render('warranty');
    }

    public function actionWishlist()
    {
        return $this->render('wishlist');
    }
    public function actionSendEmail(Request $request) {
        if (isset($request['email'])) {
//            $name = $request['name'];
            $email = $request['email'];
//            $subject = $request['subject'];
//            $body = $request['body'];

            require_once "../vendor/PHPMailer/phpmailer/src/PHPMailer.php";
            require_once "../vendor/PHPMailer/phpmailer/src/SMTP.php";
            require_once "../vendor/PHPMailer/phpmailer/src/Exception.php";

            $mail = new PHPMailer();

            //smtp settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            //  EMAIL YOZW KERE
            $mail->Username = "myexample897@gmail.com";
            //  EMAIL PAROL
            $mail->Password = 'Mypass123';
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";

            //email settings
            $mail->isHTML(true);
            $mail->setFrom($email);
            //  QAYSI EMAILGA BORWI KERE
            $mail->addAddress("mirfozil48@gmail.com");
            $mail->Subject = ("Canonstore");
            $mail->Body = $email;

            if ($mail->send()) {
                return 'Email sent!';
            } else {
                return $mail->ErrorInfo;
            }
        }
    }
    public function actionSearchProduct() {
        $query = Yii::$app->request->get('query');
        if (isset($query)) {
            try {
                $products = Yii::$app->db->createCommand("SELECT products.id, products.price, products.instock, products.title, product_images.img, discount.discount_price FROM products LEFT JOIN product_images on products.id = product_images.product_id LEFT JOIN discount on products.id = discount.product_id where lower(title) like '%".strtolower($query)."%'")->queryAll();
            } catch (Exception $e) {
                return json_encode($e);
            }

            return json_encode($products);
        }
    }
}