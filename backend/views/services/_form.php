<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model backend\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'judul_services')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'isi_services')->widget(TinyMce::className(), [
	    'options' => ['rows' => 6],
	    'language' => 'en',
	    'clientOptions' => [
	        'plugins' => [
	            "advlist autolink lists link charmap print preview anchor",
	            "searchreplace visualblocks code fullscreen",
	            "insertdatetime media table contextmenu paste"
	        ],
	        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	    ]
	]);?>
  
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
