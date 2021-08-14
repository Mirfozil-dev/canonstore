<?php

namespace app\controllers;

use app\models\Compare;
use Yii;
use yii\web\Request;

class CompareController extends \yii\web\Controller
{
    public function actionAdd(Request $request)
    {
        $id = $request->get('id');
        $account = $_SESSION['account'];
        if (!isset($account) || empty($account)) {
            return json_encode(['status' => 'unauthorized']);
        }
        $userCompare = Compare::findOne(['user_id' => $account['client_id'], 'product_id' => $id]);
        if (!$userCompare || empty($userCompare)) {
            $newCompare = new Compare();
            $newCompare->user_id = $account['client_id'];
            $newCompare->product_id = $id;
            $newCompare->save();
        }
        $totalQuantity = Compare::find()->where(['user_id' => $account['client_id']])->count();
        return json_encode(['status' => 'success', 'quantity' => $totalQuantity]);
    }

    public function actionDelete()
    {
        $id = Yii::$app->request->get('id');
        if (isset($id)) {
            $compareItem = Compare::findOne($id);
            $compareItem->delete();
            return json_encode(['status' => 'success']);
        }
    }

}
