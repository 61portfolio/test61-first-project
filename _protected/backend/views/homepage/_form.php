<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\file\FileInput;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Homepage */
/* @var $form yii\widgets\ActiveForm */

	if( $model->second_image_back != "")	
	{	$second_image_back = \Yii::$app->request->baseUrl . $model->second_image_back; }
	else
	{	$second_image_back = \Yii::$app->request->baseUrl . '/uploads/698e5f964ad4daf11a8079065e34036a.jpg'; }
	if( $model->second_feature_image != "")	
	{	$second_feature_image = \Yii::$app->request->baseUrl . $model->second_feature_image; }
	else
	{	$second_feature_image = \Yii::$app->request->baseUrl . '/uploads/698e5f964ad4daf11a8079065e34036a.jpg'; }
	if( $model->third_image_back != "")	
	{	$third_image_back = \Yii::$app->request->baseUrl . $model->third_image_back; }
	else
	{	$third_image_back = \Yii::$app->request->baseUrl . '/uploads/698e5f964ad4daf11a8079065e34036a.jpg'; }
	if( $model->third_feature_image != "")	
	{	$third_feature_image = \Yii::$app->request->baseUrl . $model->third_feature_image; }
	else
	{	$third_feature_image = \Yii::$app->request->baseUrl . '/uploads/698e5f964ad4daf11a8079065e34036a.jpg'; }
	if( $model->fourth_image_back != "")	
	{	$fourth_image_back = \Yii::$app->request->baseUrl . $model->fourth_image_back; }
	else
	{	$fourth_image_back = \Yii::$app->request->baseUrl . '/uploads/698e5f964ad4daf11a8079065e34036a.jpg'; }
	if( $model->fifth_image_back != "")	
	{	$fifth_image_back = \Yii::$app->request->baseUrl . $model->fifth_image_back; }
	else
	{	$fifth_image_back = \Yii::$app->request->baseUrl . '/uploads/698e5f964ad4daf11a8079065e34036a.jpg'; }
if( isset($_GET['save']) && $_GET['save']=='yes'){
	echo"<h2>Your Settings has been saved successfully.</h2>";
}
?>

    <div class="tab-content">

   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
	<div class="tab-pane active" id="tab_1">
	<?= $form->field($model, 'slider')->dropDownList($model->homeslider,(['prompt'=>'Select Slider','class'=>'form-control select2'])); ?>
	<?php
		// Usage with ActiveForm and model
		echo $form->field($model, 'second_image_back')->widget(FileInput::classname(), 
		[
			'options' => ['accept' => 'image/*', 'value' => $model->second_image_back],    
			'pluginOptions' => [
				'showCaption' => false,
				'showRemove' => true,
				'showUpload' => false,
				 'initialPreview'=>[
					Html::img($second_image_back, ['class'=>'file-preview-images', 'alt'=>'', 'title'=>'' , 'style' => 'max-width:300px;max-height:200px;']),				
				], 
			]
		]);
	?>
	<?= $form->field($model, 'second_image_content')->widget(CKEditor::className(), [
		'options' => ['rows' => 6],
		'preset' => 'full',
		'clientOptions' => [
		'filebrowserBrowseUrl' => Url::to(['uploadfile/browse']),
		'filebrowserUploadUrl' => Url::to(['uploadfile/url'])
		]
	]) ?>
		<?php
		// Usage with ActiveForm and model
		echo $form->field($model, 'second_feature_image')->widget(FileInput::classname(), 
		[
			'options' => ['accept' => 'image/*', 'value' => $model->second_feature_image],    
			'pluginOptions' => [
				'showCaption' => false,
				'showRemove' => true,
				'showUpload' => false,
				 'initialPreview'=>[
					Html::img($second_feature_image, ['class'=>'file-preview-images', 'alt'=>'', 'title'=>'' , 'style' => 'max-width:300px;max-height:200px;']),				
				], 
			]
		]);
	?>
	</div>
	<div class="tab-pane " id="tab_2">
		<?php
		// Usage with ActiveForm and model
		echo $form->field($model, 'third_image_back')->widget(FileInput::classname(), 
		[
			'options' => ['accept' => 'image/*', 'value' => $model->third_image_back],    
			'pluginOptions' => [
				'showCaption' => false,
				'showRemove' => true,
				'showUpload' => false,
				 'initialPreview'=>[
					Html::img($third_image_back, ['class'=>'file-preview-images', 'alt'=>'', 'title'=>'' , 'style' => 'max-width:300px;max-height:200px;']),				
				], 
			]
		]);
	?>

	<?= $form->field($model, 'third_image_content')->widget(CKEditor::className(), [
		'options' => ['rows' => 6],
		'preset' => 'full',
		'clientOptions' => [
		'filebrowserBrowseUrl' => Url::to(['uploadfile/browse']),
		'filebrowserUploadUrl' => Url::to(['uploadfile/url'])
		]
	]) ?>
	<?php
		// Usage with ActiveForm and model
		echo $form->field($model, 'third_feature_image')->widget(FileInput::classname(), 
		[
			'options' => ['accept' => 'image/*', 'value' => $model->third_feature_image],    
			'pluginOptions' => [
				'showCaption' => false,
				'showRemove' => true,
				'showUpload' => false,
				 'initialPreview'=>[
					Html::img($third_feature_image, ['class'=>'file-preview-images', 'alt'=>'', 'title'=>'' , 'style' => 'max-width:300px;max-height:200px;']),				
				], 
			]
		]);
	?>
	</div>
	<div class="tab-pane " id="tab_3">
<?php
		// Usage with ActiveForm and model
		echo $form->field($model, 'fourth_image_back')->widget(FileInput::classname(), 
		[
			'options' => ['accept' => 'image/*', 'value' => $model->fourth_image_back],    
			'pluginOptions' => [
				'showCaption' => false,
				'showRemove' => true,
				'showUpload' => false,
				 'initialPreview'=>[
					Html::img($fourth_image_back, ['class'=>'file-preview-images', 'alt'=>'', 'title'=>'' , 'style' => 'max-width:300px;max-height:200px;']),				
				], 
			]
		]);
	?>
<?php
		// Usage with ActiveForm and model
		echo $form->field($model, 'fifth_image_back')->widget(FileInput::classname(), 
		[
			'options' => ['accept' => 'image/*', 'value' => $model->fifth_image_back],    
			'pluginOptions' => [
				'showCaption' => false,
				'showRemove' => true,
				'showUpload' => false,
				 'initialPreview'=>[
					Html::img($fifth_image_back, ['class'=>'file-preview-images', 'alt'=>'', 'title'=>'' , 'style' => 'max-width:300px;max-height:200px;']),				
				], 
			]
		]);
	?>

	<?= $form->field($model, 'our_story_content')->widget(CKEditor::className(), [
		'options' => ['rows' => 6],
		'preset' => 'full',
		'clientOptions' => [
		'filebrowserBrowseUrl' => Url::to(['uploadfile/browse']),
		'filebrowserUploadUrl' => Url::to(['uploadfile/url'])
		]
	]) ?>
	</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
<style>

.tab-pane{
	display:none;
}
.active{
	display:block;
}
</style>
