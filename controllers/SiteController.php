<?php

namespace app\controllers;

use app\models\Users;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public $layout;

    public function init()
    {
    parent::init();
        $this->layout = 'site';
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
        return $this->render('index');
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
        return $this->render('cart');
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
}
