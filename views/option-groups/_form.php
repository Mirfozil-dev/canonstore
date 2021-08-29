<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\OptionGroups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="option-groups-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categories[]')->dropDownList(ArrayHelper::map($categories, 'id', 'title_ru'), ['multiple' => 'multiple']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
