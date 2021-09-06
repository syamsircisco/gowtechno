<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>  

<div class="col-lg-4 col-md-6">
    <div class="icon-box aos-init aos-animate" data-aos="fade-up">
      <a href="<?= Url::to(['pages/readblog','id' => $model->id]) ?>"><div class="icon"><i class="icofont-computer"></i></div></a>
      <h4 class="title"><a href="<?= Url::to(['pages/readblog','id' => $model->id]) ?>"><?=$model->judul_services;?> </a></h4>
      <?= substr(substr($model->isi_services, 0, 101),0,strrpos(substr($model->isi_services, 0,101), ' ')) ?>
    </div>
  </div>
