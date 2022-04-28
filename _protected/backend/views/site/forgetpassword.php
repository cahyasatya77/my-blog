<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\PasswordReset $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Forget Password';
?>

<div class="d-flex align-items-center">
    <div class="mt-5 offset-lg-4 col-lg-4">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-body text-center">
                <h5 class="card-title font-weight-light text-uppercase">forget password</h5>
                <hr>
                <?php $form = ActiveForm::begin([
                    'id' => 'forget-password-form',
                ])?>
                    <?= $form->field($model, 'email')->textInput([
                        'autofocus' => true,
                        'class' => 'form-control rounded-pill form-control-md',
                        'placeholder' => 'Email'
                    ])->label(false) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Send', [
                            'class' => 'btn btn-primary btn-block rounded-pill mt-3', 
                            'name' => 'login-button'
                        ]) ?>
                    </div>
                <?php ActiveForm::end();?>

                <p class="mt-3 font-weight-normal">Please fill out your email. A link to reset password will be sent there. <br> Go back to <?= Html::a('Login', ['site/login']);?></p>
            </div>
        </div>
    </div>
</div>