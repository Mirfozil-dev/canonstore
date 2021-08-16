<?php

namespace app\controllers;

use Yii;
use app\models\Wishlist;
use yii\web\Request;

class WishlistController extends \yii\web\Controller
{
    public function actionAdd(Request $request)
    {
        $id = $request->get('id');
        $account = $_SESSION['account'];
        if (!isset($account) || empty($account)) {
            return json_encode(['status' => 'unauthorized']);
        }
        $wishlistItem = Wishlist::findOne(['user_id' => $account['client_id'], 'product_id' => $id]);
        if (!$wishlistItem || empty($wishlistItem)) {
            $newWishlist = new Wishlist();
            $newWishlist->user_id = $account['client_id'];
            $newWishlist->product_id = $id;
            $newWishlist->save();
        }
        $totalQuantity = Wishlist::find()->where(['user_id' => $account['client_id']])->count();
        return json_encode(['status' => 'success', 'quantity' => $totalQuantity]);
    }

    public function actionDelete()
    {
        $id = Yii::$app->request->get('id');
        if (isset($id)) {
            $wishlistItem = Wishlist::findOne($id);
            $wishlistItem->delete();
            return json_encode(['status' => 'success']);
        }
    }

}
