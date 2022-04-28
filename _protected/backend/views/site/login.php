<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
// $this->registerCssFile('@web/css/cahya.css');
?>

<!-- <div class="row  ">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="card mt-5 login-card">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <h6 class="card-subtitle text-muted">You can login here</h6>
            </div>
        </div>
    </div>
</div> -->

<div class="d-flex align-items-center">
    <div class="mt-5 offset-lg-4 col-lg-4">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card-body text-center">
            <h5 class="card-title font-weight-light text-uppercase">Login</h5>
            <h6 class="card-subtitle text-mute">You can login here</h6>
            <hr>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                // 'class' => 'text-center',
            ]); ?>

                <?= $form->field($model, 'username')->textInput([
                    'autofocus' => true,
                    'class' => 'form-control rounded-pill form-control-md',
                    'placeholder' => 'Username'
                ])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput([
                    'class' => 'form-control rounded-pill form-control-md',
                    'placeholder' => 'password'
                ])->label(false) ?>

                <div class="d-flex align-items-right">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', [
                        'class' => 'btn btn-primary btn-block rounded-pill mt-3', 
                        'name' => 'login-button'
                    ]) ?>
                </div>
                <p class="mt-3 font-weight-normal">You <?= Html::a('forgot password ?', ['site/forgetpassword'])?></p>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    </div>
</div>