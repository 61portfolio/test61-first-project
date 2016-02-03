<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\file\FileInput;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SliderImages */
/* @var $form yii\widgets\ActiveForm */
$video = Yii::$app->request->get('Slider_id');
if($model->image_path != ''){
		$image = \Yii::$app->request->baseUrl . $model->image_path;
		$title = $model->Image_name;
		if($model->type == 'image'){
			$initialPreview[] = '<img class="file-preview-image" src="'.$image.'" alt="'.$title.'" title="'.$title.'">';
		}
		else{
			$initialPreview[] = '<div class="vid"><video  loop="" autoplay="" width="100%"><source src="'.$image.'" type="video/mp4">Your browser does not support the video tag.</video></div>';
		}
		
}else{
		$title = 'None';
		$image = '/atmantan/web/images/user.jpg';
		$initialPreview[] = '<img class="file-preview-image" src="'.$image.'" alt="'.$title.'" title="'.$title.'">';
}
?>

<div class="Slider-images-form">
<?php if(isset($video) && !empty($video)){ 
			 $sd = $video; ?>
		<?php }
		else{ 
			  $sd =$model->Slider_id ?>
	<?php	} ?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
	<div class="form-group field-videos-video_title required">
		<label class="control-label" for="videos-video_title">Slider Id</label>
		<div class="form-control"><?php echo  $sd;?></div>
		<div class="help-block"></div>
	</div>
	<?= $form->field($model, 'Image_name')->widget(CKEditor::className(), [
		'options' => ['rows' => 6],
		'preset' => 'full',
		'clientOptions' => [
		'filebrowserBrowseUrl' => Url::to(['uploadfile/browse']),
		'filebrowserUploadUrl' => Url::to(['uploadfile/url'])
		]
	]) ?>
	<?php
		// Usage with ActiveForm and model
		echo $form->field($model, 'image_path')->widget(FileInput::classname(), 
		[
			'options' => ['accept' => 'image/video','multiple' => true],    
			'pluginOptions' => [
				'showCaption' => false,
				'showRemove' => true,
				'showUpload' => false,
				 'initialPreview'=> $initialPreview,
			]
		]);
	?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
