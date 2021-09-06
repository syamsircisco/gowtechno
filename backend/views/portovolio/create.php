<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Portovolio */

$this->title = 'Create Portofolio';
$this->params['breadcrumbs'][] = ['label' => 'Portofolio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portovolio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
