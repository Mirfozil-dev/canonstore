<?php

namespace app\controllers;

use Yii;
use app\models\Wishlist;

class WishlistController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionWishlistCount()
    {
        $wishlistCount = Wishlist::find()->where(['user_id' => $_SESSION['account']['client_id']])->count();
        return json_encode(['status' => 'success', 'count' => $wishlistCount]);
    }

    public function actionInsert()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            if (!isset($_SESSION['account'])) {
                Yii::$app->session->setFlash('notification','Вы не авторизованы!');
                return $this->redirect(Yii::$app->request->referrer);
            }

            $error = false;
            if (!(isset($_GET['product']) and !empty($_GET['product']) and $_GET['product'] > 0)){
                $error = true;
                return ['status' => 'fail'];
            }

            if (!$error){
                $model = new Wishlist();
                $model->user_id = $_SESSION['account']['client_id'];
                $model->product_id = $_GET['product'];
                if ($model->save()){
                    $wishlistCount = Wishlist::find()->where(['user_id' => $_SESSION['account']['client_id']])->count();
                    return ['status' => 'success', 'count' => $wishlistCount];
                } else {
                    pre($model->errors);
                }
            }
        }
    }

}
