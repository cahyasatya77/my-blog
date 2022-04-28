<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\PasswordResetForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

// $this->title = 'Reset Password';
// $this->params['breadcrumbs'][] = $this->title;
?>

<div class="d-flex align-itmes-center">
    <div class="mt-5 offset-lg-4 col-lg-4">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-body text-center">
                <h5 class="card-title font-weight-light text-uppercase">Reset Password</h5>
                <h6 class="card-subtitle text-mute">Please choose your new password</h6>
                <hr>
                <?php $form = ActiveForm::begin([
                    'id' => 'forget-password-form',
                ])?>
                    <?= $form->field($model, 'password')->passwordInput([
                        'autofocus' => true,
                        'class' => 'form-control rounded-pill form-control-md',
                        'placeholder' => 'Passwords'
                    ])->label(false) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Save', [
                            'class' => 'btn btn-primary btn-block rounded-pill mt-3', 
                            'name' => 'login-button'
                        ]) ?>
                    </div>
                <?php ActiveForm::end();?>
            </div>
        </div>
    </div>
</div>