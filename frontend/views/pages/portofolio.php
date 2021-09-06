<?php
use yii\widgets\ListView;
?>

<section id="portofolio" class="portofolio">
	<div class="container">
     <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" style="position: relative; height: 877.47px;">
      	<?php
		echo ListView::widget( [
			'dataProvider' => $dataProvider,
            'summary' => false,
            // 'layout' => '<div class="row">{items}</div>',
            'itemOptions' => ['tag' => null],
            'itemView' => '_porto',

		] );
      	?>
      </div>
  </div>
</section>
