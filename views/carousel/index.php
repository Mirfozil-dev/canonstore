<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CarouselSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carousels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carousel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Carousel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'body',
            'product_id',
            'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
