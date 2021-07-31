<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OptionGroups */

$this->title = 'Create Option Groups';
$this->params['breadcrumbs'][] = ['label' => 'Option Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="option-groups-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categories' => $categories
    ]) ?>

</div>
