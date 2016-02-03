<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\widgets\Alert;
use frontend\widgets\Footer;
use frontend\assets\AppAsset;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" zoom="0" content="width=device-width, initial-scale=1, maximum-scale=1">	
		<?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<meta name="keywords" content="<?= Yii::$app->params['settings']['meta_tag'] ?>">
		<meta name="description" content="<?= Yii::$app->params['settings']['meta_desc'] ?>">	
		<?php $this->head() ?>
		
		<?= $this->registerJsFile('@themes/js/browser.js',['depends' => [AppAsset::className()]]); ?>
	</head>

	<body class="home">

		<?php $this->beginBody() ?>

			<div class="fullbody cd-main">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 total_height">
				<!-- landing-page -->
					<div class="home-fullbody">
						<!-- Alert-section -->
						<?= Alert::widget() ?>
						<!-- Alert-section -->
						
						<!-- Content-section -->
						<?= $content ?>
						<!-- Content-section -->
						
						<!-- footer-section -->
						<?= Footer::widget() ?>
						<!-- footer-section -->
					</div>
				<!-- landing-page -->
				</div>
			</div>
			<div class="cd-folding-panel">
					
				<div class="fold-left"></div> <!-- this is the left fold -->
				
				<div class="fold-right"></div> <!-- this is the right fold -->
				
				<div class="cd-fold-content">
					<!-- content will be loaded using javascript -->
				</div>

				<a class="cd-close" href="#0"></a>
			</div>

		<?php $this->endBody() ?>

	</body>
</html>
<?php $this->endPage() ?>
