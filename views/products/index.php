<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'category_id',
            'description:ntext',
            'video_link',
//            'created_at',
//            'updated_at',
            //'price',
            //'instock',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
            [
                'attribute' => 'created_at',
                'value' => 'CreatedDate',
            ],
            [
                'attribute' => 'updated_at',
                'value' => 'UpdatedDate',
            ],
        ],
    ]); ?>


</div>
