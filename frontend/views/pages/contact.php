<?php
use yii\widgets\ListView;
?>

<section id="team" class="team section-bg">
  <div class="container">
     <div class="portfolio-container aos-init aos-animate" data-aos="fade-up">
      <div class="row">
      	<?php
		echo ListView::widget( [
			'dataProvider' => $dataProvider,
            'summary' => false,
            // 'layout' => '<div class="row">{items}</div>',
            'itemOptions' => ['tag' => null],
            'itemView' => '_contact',

		] );
      	?>
      </div>
      </div>
  </div>
</section>
