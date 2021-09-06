<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PortovolioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Portofolio';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <h2><?= Html::encode($this->title) ?></h2>
                <p>
                    <?= Html::a('Create Portofolio', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'judul_portovolio',
                        // 'foto_portovolio',
                        [
                            'attribute' => 'foto_portovolio',
                             'contentOptions' => ['style' => 'text-align:center'],
                            'value' => function ($model) {
                                return Html::a(Html::img(Yii::getAlias('@web') . '/uploads/' . $model->foto_portovolio, ['alt' => 'some', 'class' => 'fancy-box', 'height' => '60px', 'width' => '60px','text-align'=>'center']));
                            },
                            'format' => ['raw'],
                        ],
                        'slug_portovolio',
                        [
                            'attribute' =>'created_at',
                            'format' => ['date', 'php:d/m/Y H:i'],
                        ],
                        //'updated_at',

                        ['class' => 'yii\grid\ActionColumn','header'=>"More Action"],
                    ],
                ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
