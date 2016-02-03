<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create New Slider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'status',
            'galley_name',

             ['class' => 'yii\grid\ActionColumn','header'=>'Actions',
			'buttons' => [
			'viewslides' =>function ($url, $model, $key) {
			$options = array_merge([
			'title' => Yii::t('yii', 'View Slides'),
			'aria-label' => Yii::t('yii', 'View Slides'),
			'data-pjax' => '0',
			], []);
			return Html::a('<span class="glyphicon glyphicon-folder-open"></span>', ['slider-images/viewslides','Slider_id'=>$model->id], $options);
			},
			],
			'template' => '{viewslides} {delete}{update}', 'contentOptions' => ['style' => 'width:160px;letter-spacing:10px;text-align:center'],
			],
        ],
    ]); ?>

</div>
