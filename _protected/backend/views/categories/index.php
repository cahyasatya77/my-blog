<?php

use common\models\Categories;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-title">Categories</div>
            <?= Html::a('Create', ['create'], ['class' => 'btn btn-success btn-sm float-right']) ?>
        </div>
        <div class="card-body p-0">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                // 'filterModel' => $searchModel,
                'layout' => '{items}{pager}',
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'categori',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Categories $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        },
                        'template' => '{view}{update}'
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
