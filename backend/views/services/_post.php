<?php
use yii\helpers\Html;
use yii\helpers\Url;

?><div class="col-md-4">
    <div class="card border border-primary">
        <div class="card-header">
            <strong class="card-title"><?= $model->judul_services ?></strong>
        </div>
        <div class="card-body" style="text-align: justify;">
            <p class="card-text"><?= substr(substr($model->isi_services, 0, 201),0,strrpos(substr($model->isi_services, 0,201), ' ')) ?></p>
        </div>
        <div class="card-footer">
            <?=
                Html::a(' Edit', ['update', 'id' => $model->id], ['class' => 'fa fa-edit']); 
            ?>
            <?=
                Html::a(' Delete', ['delete', 'id' => $model->id], ['class' => 'fa fa-trash float-right']);  
            ?>
        </div>
    </div>
</div>