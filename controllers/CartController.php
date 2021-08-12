<?php

namespace app\controllers;

use Yii;
use app\models\Cart;

class CartController extends \yii\web\Controller
{
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $quantity = Yii::$app->request->get('quantity');
        $account = $_SESSION['account'];
        if (!isset($account) || empty($account)) {
            return json_encode(['status' => 'unauthorized']);
        }
        $userCart = Cart::findOne(['user_id' => $account['client_id'], 'product_id' => $id]);
        if ($userCart) {
            $userCart->quantity += $quantity;
            $userCart->save();
        } else {
            $newCart = new Cart();
            $newCart->user_id = $account['client_id'];
            $newCart->product_id = $id;
            $newCart->quantity = $quantity;
            $newCart->save();
        }
        $totalQuantity = Cart::find()->where(['user_id' => $account['client_id']])->count();
        return json_encode(['status' => 'success', 'quantity' => $totalQuantity]);
    }

    public function actionDelete()
    {
        $id = Yii::$app->request->get('id');
        if (isset($id)) {
            $cartItem = Cart::findOne($id);
            $cartItem->delete();
            return json_encode(['status' => 'success']);
        }
    }

    public function actionMinusQuantity()
    {
        $id = Yii::$app->request->get('id');
        if (isset($id)) {
            $cartItem = Cart::findOne($id);
            $cartItem->quantity -= 1;
            $cartItem->save();
            return json_encode(['status' => 'success']);
        }
    }

    public function actionPlusQuantity()
    {
        $id = Yii::$app->request->get('id');
        if (isset($id)) {
            $cartItem = Cart::findOne($id);
            $cartItem->quantity += 1;
            $cartItem->save();
            return json_encode(['status' => 'success']);
        }
    }

}