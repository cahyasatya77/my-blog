<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Categories */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="categories-view">
    <div class="card card-outline card-info">
        <div class="card-header">
            <div class="card-title">View</div>
        </div>
        <div class="card-body p-0">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'categori',
                    'created_at:date',
                    'updated_at:date',
                ],
            ]) ?>
        </div>
        <div class="card-footer">
            <?= Html::a('Back', ['index'], ['class' => 'btn btn-outline-danger'])?>
        </div>
    </div>
</div>
