<?php
use yii\widgets\ListView;
?>

<section id="services" class="services">
      <div class="container">
      	<?php
		echo ListView::widget( [
			'dataProvider' => $dataProvider,
		            'summary' => false,
		            'layout' => '<div class="row">{items}</div>',
		            'itemOptions' => ['tag' => null],
		            'itemView' => '_item',

		] );
      	?>
      </div>
</section>
