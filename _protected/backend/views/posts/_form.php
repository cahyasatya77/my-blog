<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card-body">
        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'id_categories')->textInput() ?>

        <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="card-footer">
        <?= Html::a('Back', ['index'], ['class' => 'btn btn-outline-danger'])?>
        <?= Html::submitButton('Save', ['class' => 'btn btn-success float-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
