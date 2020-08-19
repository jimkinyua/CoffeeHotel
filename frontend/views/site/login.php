<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    
    
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <fieldset class="form-group position-relative has-icon-left">
                <?= $form->field($model, 'username')->textInput(['maxlength' => 255, 'class' => 'form-control']); ?>

                <!-- <div class="form-control-position">
                    <i class="ft-mail"></i>
                </div> -->
            </fieldset>

            <fieldset class="form-group position-relative has-icon-left">
                <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255, 'class' => 'form-control']); ?>

                <!-- <div class="form-control-position">
                    <i class="la la-key"></i>
                </div> -->
            </fieldset> 

            
                <fieldset>
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    <label for="remember-me"> Remember Me</label>
                </fieldset>
               

               

                <!-- <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div> -->

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-outline-danger btn-block', 'name' => 'login-button']) ?>
                </div>

                <!-- <div class="card-body"> -->
                     <a href="/site/signup" class="btn btn-outline-success btn-block"><i class="ft-user"></i> Register</a>
                 <!-- </div> -->

            <?php ActiveForm::end(); ?>
    
</div>
