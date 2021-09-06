<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jabatan_contact')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'nama_contact')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'no_hp_contact')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email_contact')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'foto_contact')->fileInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
