<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<div class="row">
        <div class="col-md-12">
			<div class="box">
                <div class="box-body table-responsive">

				<p class="pull-right">
					<?= Html::a('Create New Post', ['create'], ['class' => 'btn btn-primary']) ?>
				</p>
				<?php Pjax::begin() ?>
				<?= GridView::widget([
					'dataProvider' => $dataProvider,
					'filterModel' => $searchModel,
					'columns' => [
						['class' => 'yii\grid\SerialColumn', 'header' => 'S.No.'],

						'post_title',
						'slug',
					   // 'cat_id',
						[
						'label' =>'Featured Image',
						'value' => function($model){
							return "<img src='".\Yii::$app->request->baseUrl .$model->featured_image."' style='width:100px;height:50px;'>";
						},
						'format' =>'raw',
						],
						// 'featured_image',
						[
							'attribute' => 'status',
							'value' => function ($model) {
								if ($model->status) {
									return Html::a(Yii::t('app', 'Active'), ['status', 'id' => $model->post_id], [
										'class' => 'btn btn-success',
										'data-method' => 'post',
										'data-confirm' => Yii::t('app', 'Are you sure you want to unpublish this post?'),
									]);
								} else {
									return Html::a(Yii::t('app', 'Inactive'), ['status', 'id' => $model->post_id], [
										'class' => 'btn btn-danger',
										'data-method' => 'post',
										'data-confirm' => Yii::t('app', 'Are you sure you want to publish this post?'),
									]);
								}
							},
							'contentOptions' => ['style' => 'width:160px;text-align:center'],
							'format' => 'raw',
							'filter'=>array("1"=>"Active","0"=>"Inactive"),
						],
						// 'author',
						// 'date',

						['class' => 'yii\grid\ActionColumn','header'=>'Actions',
						'template' => '{delete}{update}', 'contentOptions' => ['style' => 'width:160px;letter-spacing:10px;text-align:center'],
						],
					],
				]); ?>
				<?php Pjax::end() ?>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row --> 
</div>
