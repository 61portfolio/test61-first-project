<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\GalleryImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gallery Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-images-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
	<?php if(isset($video) && !empty($video)){ ?>
			   <?= Html::a('Add Slider Image', ['create', 'Slider_id' => $video->id], ['class' => 'btn btn-success']) ?>
		<?php

		$video_id = $video->id;
		}
		else{ ?>
			   <?= Html::a('Add Slider Image', ['create'], ['class' => 'btn btn-success']) ?>
	<?php $video_id = 0;	} ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Slider_id',
            'Image_name',
            'image_path',

             ['class' => 'yii\grid\ActionColumn','header'=>'Actions',
			'buttons' => [
			'update' =>function ($url, $model, $key) {
			$options = array_merge([
			'title' => Yii::t('yii', 'Update Slide'),
			'aria-label' => Yii::t('yii', 'Update Slide'),
			'data-pjax' => '0',
			], []);
			return Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['slider-images/update','id'=> $model->id , 'Slider_id'=> $model->Slider_id], $options);
			},
			],
			'template' => '{update} {delete}', 'contentOptions' => ['style' => 'width:160px;letter-spacing:10px;text-align:center'],
			],
        ],
    ]); ?>

</div>
