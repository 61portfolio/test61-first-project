<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Homepage */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Homepages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="homepage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'slider',
            'second_image_back',
            'second_image_content:ntext',
            'second_feature_image',
            'third_image_back',
            'third_image_content:ntext',
            'third_feature_image',
            'fourth_image_back',
            'fifth_image_back',
            'our_story-content:ntext',
        ],
    ]) ?>

</div>
