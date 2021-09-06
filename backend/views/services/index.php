<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\BaseStringHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2><?= Html::encode($this->title) ?></h2>
                    <p>
                        <?= Html::a('Create Services', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>
        <?php // echo $this->render('_search', ['model' => $searchModel]); 
        echo ListView::widget([
            'dataProvider' => $dataProvider,
            'summary' => false,
            'layout' => '<div class="row">{items}</div>',
            'itemOptions' => ['tag' => null],
            'itemView' => '_post',
        ]);
    ?>
    </div>
</div>
</div></div></div>

