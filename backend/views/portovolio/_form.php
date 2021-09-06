<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Portovolio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="portovolio-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'judul_portovolio')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'foto_portovolio')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
