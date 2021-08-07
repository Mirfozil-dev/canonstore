<?php

namespace app\controllers;

use app\models\Carousel;
use app\models\Categories;
use app\models\Discount;
use app\models\News;
use app\models\ProductCarousel;
use app\models\Products;
use Yii;
use yii\db\Expression;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Request;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
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
        $carousel = Carousel::find()->all();
        $discountProducts = Discount::find()->where(['status' => 1])->with('product.productOptions.option')->with('product.productImages')->all();
        $productCarousels = ProductCarousel::find()->where(['status' => 1])->with('category.products.discounts')->with('category.products.productImages')->all();
        $news = News::find()->orderBy('updated_at DESC')->limit(3)->all();
        return $this->render('index', [
            'carousel' => $carousel,
            'news' => $news,
            'discountProducts' => $discountProducts,
            'lang' => Yii::$app->language,
            'productCarousels' => $productCarousels
        ]);
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
        return $this->render('product');
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
}
