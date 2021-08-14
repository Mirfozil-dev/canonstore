<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'description_ru') ?>

    <?= $form->field($model, 'video_link') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'instock') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
