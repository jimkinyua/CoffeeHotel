<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

  

    <?php $form = ActiveForm::begin(['id' => 'form-signup', 'class'=> "form-horizontal"]); ?>
   
        <fieldset class="form-group position-relative has-icon-left">
             <?= $form->field($model, 'email')->textInput(['maxlength' => 255, 'class' => 'form-control']); ?>

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
         

        <div class="form-group">
                    <?= Html::submitButton('Register', ['class' => 'btn btn-outline-info btn-block', 'name' => 'signup-button']) ?>
                    <a href="/site/login" class="btn btn-outline-success btn-block"><i class="ft-user"></i> Login Instead</a>

         </div>


    <?php ActiveForm::end(); ?>

