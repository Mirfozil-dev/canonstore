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
use app\models\Wishlist;
use http\Client;
use Yii;
use yii\db\Exception;
use yii\filters\AccessControl;
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
                $password = sha1($_GET['password']);

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

    public function actionSignInUser()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $error = false;

            if (!(isset($_GET['email']) and !empty($_GET['email']))) {
                $error = true;
                return ['status' => 'error_email'];
            } else {
                if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
                    $error = true;
                    return ['status' => 'error_email_format'];
                }
            }

            if (!(isset($_GET['password']) and !empty($_GET['password']))) {
                $error = true;
                return ['status' => 'error_password'];
            }

            $pass = sha1($_GET['password']);
            $model = Users::find()
            ->where([
                'email' => $_GET['email'],
                'status' => 1
            ])
            ->one();

            if (!isset($model) || $model->password != $pass) {
                return ['status' => 'fail'];
            }

            $_SESSION['account'] = [
                'client_id' => $model->id,
                'phone' => $model->phone,
                'name' => $model->name,
                'pass' => $model->password,
            ];

            if (!$error){
                if (isset($_SESSION['account']) && !empty($_SESSION['account'])) {
                    return ['status' => 'success'];
                }
            }
        }
    }

    public function actionExit()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            if (isset($_SESSION['account'])) {
                unset($_SESSION['account']);

                return ['status' => 'success'];
            }
            else{
                return ['status' => 'failure'];
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
            return $this->redirect(['/site/index']);
        }

        $cartItems = Cart::find()->where(['product_id' => $_SESSION['account']['client_id']])->with('product.discounts')->with('product.productImages')->all();

        $totalSum = 0;
        foreach ($cartItems as $item) {
            $totalSum += $item['product']['discounts'] ? $item['product']['discounts'][0]['discount_price'] * $item['quantity'] : $item['product']['price'] * $item['quantity'];
        }
        return $this->render('cart', ['cartItems' => $cartItems, 'totalSum' => $totalSum]);
    }

    public function actionCatalog()
    {
        return $this->render('catalog');
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
        if (!$_SESSION['account']) {
            Yii::$app->session->setFlash('notification', 'Вы не авторизованы!');
                return $this->redirect(['/web/site/index']);
        }
        $client_id = $_SESSION['account']['client_id'];
        $sql = "
            SELECT 
                   w.id, 
                   w.user_id, 
                   w.product_id, 
                   i.img, p.title, 
                   p.category_id, 
                   p.price, 
                   p.status 
            FROM wishlist AS w 
            INNER JOIN product_images AS i ON w.product_id = i.product_id
            INNER JOIN products AS p ON w.product_id = p.id
            WHERE p.status = 1 and w.user_id = ".$client_id;
        $selectProducts = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('wishlist', [
            'model' => $selectProducts,
        ]);

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