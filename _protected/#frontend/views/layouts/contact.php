<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\PageAssetOne;
use frontend\widgets\Sidebar;
use frontend\widgets\Footer;


/* @var $this \yii\web\View */
/* @var $content string */

PageAssetOne::register($this);

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
		
		<?= $this->registerJsFile('@themes/js/browser.js',['depends' => [PageAssetOne::className()]]); ?>
	</head>

<body class="testing_view contact">
<?php $this->beginBody() ?>
<!-- Atmantan-wellness -->
<div class="">
	<div class="atmantan-about">
		<div class="atmantan-about-inner">
			<!-- menu-section -->
			<?= Sidebar::widget(['sidebarmenu'=> $this->params['sidebarmenu'] ]) ?>
			<!-- menu-section -->
				
			<!-- tagline-area -->
                <?= $content ?>
            <!-- menu-section -->
	            
		</div>
				
		<!-- footer-section -->
		<?= Footer::widget(['inner'=> 1]) ?>
		<!-- footer-section -->

	</div>
</div>


	
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
