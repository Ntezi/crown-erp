<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<div class="blankpage-form-field">
    <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
        <a href="javascript:void(0)" class="d-flex align-items-center">
            <span class="page-logo-text mr-1"><?php echo Yii::$app->name ?></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <div style="background-color: white;opacity: 0.9;"
         class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <div class="form-group">
            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => Yii::t('app', 'Username')])->label('Username'); ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('app', 'Password')])->label('Password'); ?>
        </div>
        <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn btn-primary float-right', 'name' => 'login-button']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>
