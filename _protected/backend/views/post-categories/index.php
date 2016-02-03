<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PostCategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'All Post Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-categories-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<div class="row">
        <div class="col-md-12">
			<div class="box">
                <div class="box-body table-responsive">

				<p class="pull-right">
					<?= Html::a('Add New Post Category', ['create'], ['class' => 'btn btn-primary']) ?>
				</p>
				<?php Pjax::begin() ?>

				<?= GridView::widget([
					'dataProvider' => $dataProvider,
					'filterModel' => $searchModel,
					'columns' => [
						['class' => 'yii\grid\SerialColumn', 'header' => 'S.No.'],

						//'id',
						'cat_name',
						'slug',

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
