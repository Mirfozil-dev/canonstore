<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\OrderProducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_id')->dropDownList(ArrayHelper::map($orders, 'id', 'id'), ['prompt' => 'Choose Order ID']) ?>

    <?= $form->field($model, 'product_id')->dropDownList(ArrayHelper::map($products, 'id', 'title'), ['prompt' => 'Choose Product']) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'sum')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
