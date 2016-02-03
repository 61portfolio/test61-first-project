<?php
use yii\helpers\Html;
use common\models\Pages;
use common\models\Globalsetting;

$keys = array_keys($rootpages);
$first = $rootpages[$keys[0]];
$second = $rootpages[$keys[1]];
$third = $rootpages[$keys[2]];
$four = $rootpages[$keys[3]];
?>

<div class="logo-mobile">
	<a href="index.html"><img src="<?= Yii::$app->view->theme->baseUrl ?>/<?= Yii::$app->params['settings']['logo'] ?>" alt="Atmantan" title="Atmantan" /></a>
</div>

<div class="services-home cd-gallery">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="atmantan-service">
			<div class="container fill">
				<div id="myCarousel" class="carousel slide">
				  <div class="carousel-inner">
					<div class="active item">
					  <div class="fill">
						<div class="atmantan-painting flip_custom"></div>
					  </div>
					</div>
				</div>
				</div>
			</div>

			<ul class="sub-menu home_menu">
				<?php foreach($first['child'] as $cpages){ ?>
					<li>
						<?= Html::a($cpages->name, $cpages->slug.".html" , $options = ['title' => $cpages->name] ); ?>
					</li>
				<?php } ?>
			</ul>

		 <div class="service-heading">
			<div class="inner_box">
				<h1><a class="atmantan_one" href="<?= $first['slug'] ?>.html"><?= $first['name'] ?></a></h1>
				<div class="all_over"></div>
			</div>
		</div>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

		<div class="atmantan-service wellness_div">
			<div class="container fill">
				<div id="myCarousel" class="carousel slide">
				  <div class="carousel-inner">
					<div class="active item">
					  <div class="fill">
						<div class="atmantan-wellness"></div>
					  </div>
					</div>
				</div>
				</div>
			</div>

			<ul class="sub-menu home_menu">

				<?php foreach($second['child'] as $cpages){ ?>
					<li>
						<?= Html::a($cpages->name, $cpages->slug.".html" , $options = ['title' => $cpages->name] ); ?>
					</li>
				<?php } ?>

			</ul>

			<div class="service-heading">

				<div class="inner_box">

					<h2><a class="atmantan_two" href="<?= $first['slug'] ?>.html" ><?= $second['name'] ?></a></h2>

						

					<div class="all_over"></div>

				</div>

			</div>

		</div>

	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

		<div class="atmantan-service">
			<div class="container fill">
				<div id="myCarousel" class="carousel slide">
				  <div class="carousel-inner">
					<div class="active item">
					  <div class="fill">
						 <div class="atmantan-spa"></div>
					  </div>
					</div>
					</div>
				</div>
			</div>	

		   <ul class="sub-menu home_menu">
		   
				<?php foreach($third['child'] as $cpages){ ?>
					<li>
						<?= Html::a($cpages->name, $cpages->slug.".html" , $options = ['title' => $cpages->name] ); ?>
					</li>
				<?php } ?>

			</ul>

			<div class="service-heading">

				<div class="inner_box">

					<h3><a class="atmantan_three" href="<?= $third['slug'] ?>.html"><?= $third['name'] ?></a></h3>

						

					<div class="all_over"></div>

				</div>

			</div>

		</div>

	</div>

	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

		<div class="atmantan-service">
				<div class="container fill">
				<div id="myCarousel" class="carousel slide">
				  <div class="carousel-inner">
					<div class="active item">
					  <div class="fill">
						  <div class="atmantan-retreat"></div>
					  </div>
					</div>
					</div>
				</div>
			</div>

			<ul class="sub-menu home_menu">
				<?php 
				$i = 0;
				foreach($four['child'] as $cpages){ 
					$class = '';
					if($i == 0 || ($i == count($four['child']) - 1))
						$class = "class='regular-font'";
					?>
					<li <?= $class ?>>
						<?= Html::a($cpages->name, $cpages->slug.".html" , $options = ['title' => $cpages->name] ); ?>
					</li>
				<?php 
					$i++;
					} ?>
			</ul>

			 <div class="service-heading">

				<div class="inner_box">

					<h4><a class="atmantan_four" href="<?= $four['slug'] ?>.html"><?= $four['name'] ?></a></h4>

					<div class="all_over"></div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="logo-area">
   <div class="logo-full">
		 <a href="index.html"><img src="<?= Yii::$app->view->theme->baseUrl ?>/<?= Yii::$app->params['settings']['logo'] ?>" alt="Atmantan" title="Atmantan" /></a>

	</div>

</div>