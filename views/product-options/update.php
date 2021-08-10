<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductOptions */

$this->title = 'Update Product Options: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Product Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-options-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'options' => $options,
        'products' => $products
    ]) ?>

</div>
