<?php

namespace app\controllers;

<<<<<<< HEAD

=======
>>>>>>> 22b2151df545945e7907bac25ca68adf4fecbe12
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

    public function init()
    {
        parent::init();
        $this->layout = 'site';
        $this->categories = Categories::find()->where(['status' => 1, 'parent_id' => null])->with('categories.categories')->all();
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
        $session = Yii::$app->session;
        $session->open();
        $cart = [];

        if ($session->has('cart')) {
            $cart = $session->has('cart');
        }
        return $this->render('cart', [
            'session' => $session
        ]);
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
