<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <div class="member aos-init aos-animate" data-aos="fade-up">
      	<div class="member-img">
        <?php 
        	if (is_null($model->foto_contact)||($model->foto_contact=="")) {
        		echo Html::img('@img/default.jpg',['alt'=>"logo",'class'=>"img-fluid"]);
        	}
        	else{
        		echo Html::img('@img/'.$model->foto_contact,['alt'=>"logo",'class'=>"img-fluid"]);
        	}
        ?>
	        <div class="social">
	          <a href=""><i class="icofont-email"></i><?= $model->email_contact ?></a>
	          <a href=""><i class="icofont-phone"></i><?= $model->no_hp_contact ?></a>
	        </div>
      	</div>
	    <div class="member-info">
	        <h4><?= $model->nama_contact?></h4>
	        <span><?= $model->jabatan_contact?></span>
	    </div>
    </div>
</div>   

