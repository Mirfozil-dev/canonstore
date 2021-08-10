<?php

namespace app\controllers;

use Yii;
use app\models\Products;
use app\models\Cart;
use app\models\Discount;
use app\models\ProductImages;

class CartController extends \yii\web\Controller
{
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $quantity = Yii::$app->request->get('quantity');
        return json_encode(["id"=> $id, "quantity" => $quantity]);
    }

}