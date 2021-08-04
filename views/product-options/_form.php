<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductOptions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-options-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->dropDownList(\yii\helpers\ArrayHelper::map($products, 'id', 'title'), ['prompt' => 'Choose Product']) ?>

    <?= $form->field($model, 'option_id')->dropDownList(\yii\helpers\ArrayHelper::map($options, 'id', 'title_ru'), ['prompt' => 'Choose Option']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
