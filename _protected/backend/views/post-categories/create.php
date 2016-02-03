<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PostCategories */

$this->title = 'Add New Post Category';
$this->params['breadcrumbs'][] = ['label' => 'All Post Category', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-categories-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
