<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HomepageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="homepage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'slider') ?>

    <?= $form->field($model, 'second_image_back') ?>

    <?= $form->field($model, 'second_image_content') ?>

    <?= $form->field($model, 'second_feature_image') ?>

    <?php // echo $form->field($model, 'third_image_back') ?>

    <?php // echo $form->field($model, 'third_image_content') ?>

    <?php // echo $form->field($model, 'third_feature_image') ?>

    <?php // echo $form->field($model, 'fourth_image_back') ?>

    <?php // echo $form->field($model, 'fifth_image_back') ?>

    <?php // echo $form->field($model, 'our_story-content') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
