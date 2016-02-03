<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\PageAsset;
use app\models\Menus;
use frontend\widgets\Sidebar;
use common\models\Globalsetting;

/* @var $this \yii\web\View */
/* @var $content string */

PageAsset::register($this);

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
	
	<?= $this->registerJsFile('@themes/js/browser.js',['depends' => [PageAsset::className()]]); ?>
</head>

<body class="testing_view">

	<?php $this->beginBody() ?>

	<!-- Atmantan-wellness -->
	<div class="">
		<div class="atmantan-about">
			<div class="atmantan-about-inner">
				
				<!-- menu-section -->
				<?= Sidebar::widget(['sidebarmenu'=> $this->params['sidebarmenu'] ]) ?>
				
				<!-- atm box -->
		   
				<div class="atm_box">
					<div class="phill_div">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dirctr-headng"> 				
									<?= $content ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
					
			<!-- footer-section -->
				<?= $this->render('footer.php')?>
			<!-- footer-section -->
		</div>
	</div>

        <!-- Atmantan-wellness -->

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
