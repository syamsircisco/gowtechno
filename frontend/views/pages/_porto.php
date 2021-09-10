<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
			<?php 
	        	if (is_null($model->foto_portovolio)||($model->foto_portovolio=="")) {
	        		echo Html::img('@img/no-image.png',['alt'=>"logo",'class'=>"img-fluid"]);
	        	}
	        	else{
	        		echo Html::img('@img/'.$model->foto_portovolio,['alt'=>"logo",'class'=>"img-fluid"]);
	        	}
	        ?>

            <div class="portfolio-info">
              <h4><?= $model->judul_portovolio ?></h4>
              <p>...</p>
              <a href="<?= Yii::getAlias('@img/').$model->foto_portovolio?>" data-gall="portfolioGallery" class="venobox preview-link vbox-item" title="<?= $model->judul_portovolio ?>"><i class="bx bx-plus"></i></a>
              <a href="" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
 