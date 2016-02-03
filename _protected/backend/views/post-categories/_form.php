<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\file\FileInput;
use dosamigos\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PostCategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
	<!--?= $form->field($model, 'description')->widget(\yii\redactor\widgets\Redactor::className(), [
    'clientOptions' => [
        'imageManagerJson' => ['/redactor/upload/image-json'],
		'uploadDir' => '@webroot/uploads/test',
		'uploadUrl' => '@web/uploads/test',
        'plugins' => ['imagemanager']
    ]
	])?-->
	<?= $form->field($model, 'description')->widget(CKEditor::className(), [
		'options' => ['rows' => 6],
		'preset' => 'full',
		'clientOptions' => [
		'filebrowserBrowseUrl' => Url::to(['uploadfile/browse']),
		'filebrowserUploadUrl' => Url::to(['uploadfile/url'])
		]
	]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
