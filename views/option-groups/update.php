<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OptionGroups */

$this->title = 'Update Option Groups: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Option Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="option-groups-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categories' => $categories
    ]) ?>

</div>
