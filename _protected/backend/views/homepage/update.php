<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Homepage */

$this->title = 'Homepage Settings: ';
$this->params['breadcrumbs'][] = ['label' => 'Homepages', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
				<li class="active"><a href="#tab_1" data-toggle="tab">Slider & Second Image</a></li>
				<li><a href="#tab_2" data-toggle="tab">Third Image </a></li>
				<li><a href="#tab_3" data-toggle="tab">Fourth &  Fifth Image & Our Story Content</a></li>
            </ul>


		<?= $this->render('_form', [
			'model' => $model,
		]) ?>

</div>
