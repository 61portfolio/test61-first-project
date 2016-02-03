<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\file\FileInput;

use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Posts */
/* @var $form yii\widgets\ActiveForm */

if($model->featured_image != ''){
		$image = \Yii::$app->request->baseUrl . $model->featured_image;
}else{
		$image = \Yii::$app->request->baseUrl . '/uploads/gal.png';
}

?>

<div class="posts-form">

   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'post_title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'cat_id')->dropDownList($model->category,['prompt'=>'Select category','class'=>'form-control select2']); ?>

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
	<?php
		// Usage with ActiveForm and model
		echo $form->field($model, 'featured_image')->widget(FileInput::classname(), 
		[
			'options' => ['accept' => 'image/*', 'value' => $model->featured_image],    
			'pluginOptions' => [
				'showCaption' => false,
				'showRemove' => true,
				'showUpload' => false,
				 'initialPreview'=>[
					Html::img($image, ['class'=>'file-preview-images', 'alt'=>'', 'title'=>'' , 'style' => 'max-width:300px;max-height:200px;']),				
				], 
			]
		]);
	?>
	<?= $form->field($model, 'status')->dropDownList(['1' => 'Publish','0' => 'Unpublish']); ?>
	
	<?= $form->field($model, 'author')->dropDownList(['Bamboo' => 'Bamboo','Mused' => 'Mused']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
