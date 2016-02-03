<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PostCategories */

$this->title = 'Update Post Categories: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'All Post Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-categories-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
