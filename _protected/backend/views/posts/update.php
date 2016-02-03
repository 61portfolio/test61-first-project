<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Posts */

$this->title = 'Update Post: ' . ' ' . $model->post_id;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posts-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
