<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HomepageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Homepages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="homepage-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Homepage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'slider',
            'second_image_back',
            'second_image_content:ntext',
            'second_feature_image',
            // 'third_image_back',
            // 'third_image_content:ntext',
            // 'third_feature_image',
            // 'fourth_image_back',
            // 'fifth_image_back',
            // 'our_story-content:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
