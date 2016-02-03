<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\PageAssetOne;
use frontend\widgets\MainPageSidebar;
use frontend\widgets\Footer;

/* @var $this \yii\web\View */
/* @var $content string */

PageAssetOne::register($this);

if(isset($this->params['id'])){
	$searchevent = $this->params['id'];
}

$cls = "";
if($searchevent==10){
	$cls = "spa-inner";
}elseif($searchevent==7){
	$cls = "wellness-inner";
}elseif($searchevent==2){
	$cls = "about-inner";
}elseif($searchevent==13){
	$cls = "retreat-inner wellnes-scrol";
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
		
		<?= $this->registerJsFile('@themes/js/browser.js',['depends' => [PageAssetOne::className()]]); ?>
	</head>
	<body class="testing">
		<?php $this->beginBody() ?>

		<div class="cd-fold-content single-page">
			<div class="atmantan-about">
				<div class="atmantan-<?php echo $cls; ?>">

					<!-- menu-section -->
					<?php if($searchevent==13){ echo'<div class="wellness-top-section" ><div class="left-menu-sec">'; } ?>
					<?= MainPageSidebar::widget(['page_id'=> $searchevent,'sidebarmenu'=> $this->params['sidebarmenu'] ]) ?>
					<?php if($searchevent==13){ echo'</div></div>'; } ?>
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
