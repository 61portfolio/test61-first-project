<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\PageAssetThree;
use frontend\widgets\Sidebar;
use frontend\widgets\Footer;

/* @var $this \yii\web\View */
/* @var $content string */

PageAssetThree::register($this);

if(isset($this->params['id'])){
	$searchevent = $this->params['id'];
	//echo $searchevent;
}



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
		<?= $this->registerJsFile('@themes/js/jquery.js',['depends' => [PageAssetThree::className()]]); ?>
		<?= $this->registerJsFile('@themes/js/jquery.event.move.js',['depends' => [PageAssetThree::className()]]); ?>
		<?= $this->registerJsFile('@themes/js/responsive-slider.js',['depends' => [PageAssetThree::className()]]); ?>

	</head>

	<body class="testing_view">
	<?php $this->beginBody() ?>
	<div class="">
		<div class="atmantan-about">
			<div class="atmantan-about-inner">
				<!-- menu-section -->
				<?= Sidebar::widget(['page_id'=> $searchevent,'sidebarmenu'=> $this->params['sidebarmenu'] ]) ?>
				<!-- menu-section -->

				<!-- content-section -->
					<?= $content ?>
				<!-- content-section -->

				<!-- footer-section -->
				<?= Footer::widget(['inner'=> 1]) ?>
				<!-- footer-section -->
			</div>
		</div>
	</div>

	<?php $this->endBody() ?>
		
	</body>
</html>
<?php $this->endPage() ?>
