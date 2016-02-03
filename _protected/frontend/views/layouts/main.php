<?php
use frontend\assets\SiteAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;


/* @var $this \yii\web\View */
/* @var $content string */

SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
	<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta name="viewport" zoom="0" content="width=device-width, initial-scale=1, maximum-scale=1">		
		<?= Html::csrfMetaTags() ?>
		<title>Title</title>
		
		<?php $this->head() ?>
	</head>

	<body>	
		<?php $this->beginBody() ?>
			<div class="fullbody activateAppearAnimation"  data-offset="150">
			
				<!-- header part -->
			<?= $this->render('header.php')?>
				<!-- header part -->
		<div class="swiper-container">
			 <div class="swiper-wrapper">
				<!-- content part -->
				<?= $content ?>
				<!-- content part -->
				
				<!-- footer part -->
				<?= $this->render('../layouts/footer.php')?>
					
			</div>
        <!-- Add Pagination -->
			<div class="swiper-pagination2 swiper-pagination"></div>
		</div>
				<!-- footer part -->
			</div>
		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>