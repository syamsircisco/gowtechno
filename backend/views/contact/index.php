<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jabatan_contact',
            'nama_contact',
            'no_hp_contact',
            // 'foto_contact',
            [
                            'attribute' => 'foto_contact',
                             'contentOptions' => ['style' => 'text-align:center'],
                            'value' => function ($model) {
                                return Html::a(Html::img(Yii::getAlias('@web') . '/uploads/' . $model->foto_contact, ['alt' => 'some', 'class' => 'fancy-box', 'height' => '60px', 'width' => '60px','text-align'=>'center']));
                            },
                            'format' => ['raw'],
                        ],
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn','header'=>"More Action"],
        ],
    ]); ?>


</div>
