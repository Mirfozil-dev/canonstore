<?php

use vova07\imperavi\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map($categories,'id','title_ru'), ['prompt' => 'Choose Category']) ?>

    <?= $form->field($model, 'description_ru')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'fullscreen',
            ],
        ],
    ]); ?>

    <?= $form->field($model, 'description_en')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'en',
            'minHeight' => 200,
            'plugins' => [
                'fullscreen',
            ],
        ],
    ]); ?>

    <?= $form->field($model, 'video_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'images[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'options[]')->dropDownList(ArrayHelper::map($options,'id','title_ru'), ['multiple'=>'multiple']) ?>

    <?= $form->field($model, 'instock')->radioList([0 => 'Not Available', 1 => 'In Stock']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
