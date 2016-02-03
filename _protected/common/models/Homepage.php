<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use yii\imagine\Image;
use kartik\file\FileInput;

use common\models\Slider; 

/**
 * This is the model class for table "homepage".
 *
 * @property integer $id
 * @property integer $slider
 * @property string $second_image_back
 * @property string $second_image_content
 * @property string $second_feature_image
 * @property string $third_image_back
 * @property string $third_image_content
 * @property string $third_feature_image
 * @property string $fourth_image_back
 * @property string $fifth_image_back
 * @property string $our_story_content
 */
class Homepage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'homepage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
          
            [['id', 'slider'], 'integer'],
            [['second_image_content', 'third_image_content', 'our_story_content'], 'string'],
            [['second_image_back', 'second_feature_image', 'third_image_back', 'third_feature_image', 'fourth_image_back', 'fifth_image_back'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slider' => 'Select Header Slider',
            'second_image_back' => 'Second Image BackGround',
            'second_image_content' => 'Second Image Content',
            'second_feature_image' => 'Second Feature Image',
            'third_image_back' => 'Third Image BackGround',
            'third_image_content' => 'Third Image Content',
            'third_feature_image' => 'Third Feature Image',
            'fourth_image_back' => 'Fourth Image BackGround',
            'fifth_image_back' => 'Fifth Image BackGround',
            'our_story_content' => 'Our Story Content',
        ];
    }
		public function updateImage($image,$id,$path,$typ)
    {
		$imagine = new Image();		
		Yii::$app->params['uploadPath'] = 'uploads/home/';
		Yii::$app->params['uploadThumbs'] = 'uploads/home/';
		Yii::$app->params['uploadLarge'] = 'uploads/home/';
		Yii::$app->params['uploadMedium'] = 'uploads/home/';
	
		$mimage = $typ.'.'. $image->extension;
		$himage = $typ.'.'. $image->extension;
		$uploadPath = Yii::$app->params['uploadPath'] .$path.'/'. $mimage;
		$huploadPath = Yii::$app->params['uploadPath'] .$path.'/'. $himage;
		
		$uploadLarge = Yii::$app->params['uploadLarge'] .$path.'/'. $mimage;
		$uploadThumbs = Yii::$app->params['uploadThumbs'] .$path.'/'. $mimage;
		$uploadMedium = Yii::$app->params['uploadMedium'] .$path.'/'. $mimage;
		
		if (!file_exists(Yii::$app->params['uploadPath'] .$path)) {
			mkdir(Yii::$app->params['uploadPath'] .$path, 0777, true);
		}
		if (!file_exists(Yii::$app->params['uploadLarge'] .$path)) {
			mkdir(Yii::$app->params['uploadLarge'] .$path, 0777, true);
		}
		if (!file_exists(Yii::$app->params['uploadThumbs'] .$path)) {
			mkdir(Yii::$app->params['uploadThumbs'] .$path, 0777, true);
		}
		if (!file_exists(Yii::$app->params['uploadMedium'] .$path)) {
			mkdir(Yii::$app->params['uploadMedium'] .$path, 0777, true);
		}				
		if($image->saveAs($uploadPath)){
		
			$imagineObj =  yii\imagine\Image::getImagine();
			$imageObj = $imagineObj->open($uploadPath);
			$imageObj1 = $imagineObj->open($uploadPath);
			$imageObj2 = $imagineObj->open($uploadPath);
			$imageObj3 = $imagineObj->open($uploadPath);
			
			//$imageObj3->effects()->grayscale();
			$imageObj3->save($huploadPath);	
			
			//$imageObj->resize($imageObj->getSize()->widen(1000))->save($uploadLarge);				
			//$imageObj1->resize($imageObj1->getSize()->widen(100))->save($uploadThumbs);	
			/* if($typ=="fevicon"){
				$imageObj2->resize($imageObj2->getSize()->widen(16))->save($uploadMedium);

			}elseif($typ=="logo"){
				$imageObj2->resize($imageObj2->getSize()->widen(170))->save($uploadMedium);

			}elseif($typ=="innerlogo"){
				$imageObj2->resize($imageObj2->getSize()->widen(112))->save($uploadMedium);

			}
			else{
				$imageObj2->resize($imageObj2->getSize()->widen(500))->save($uploadMedium);

			} */
				
			
			return $mimage;
		}else{
			return false;
		}
    }
	public function updateVideo($video,$id,$path,$typ)
    {
			
		Yii::$app->params['uploadPath'] = 'uploads/Video';
		$videos = $typ.'.'. $video->extension;
		$himage = $typ.'.'. $video->extension;
		$uploadPath = Yii::$app->params['uploadPath'] .$path.'/'. $videos;
		$huploadPath = Yii::$app->params['uploadPath'] .$path.'/'. $himage;
		if (!file_exists(Yii::$app->params['uploadPath'] .$path)) {
			mkdir(Yii::$app->params['uploadPath'] .$path, 0777, true);
		}
						
		if($video->saveAs($uploadPath)){
			return $videos;
		}else{
			return false;
		}
    }
	public function getContent()
    {
        $logo  = $this->find()->where(['id'=>1])->all();
        return $logo;
    }
	public function getHomeslider()
	{
		$programs = Slider::find()->orderBy('id')->all();
		return ArrayHelper::map($programs,'id','galley_name');
	}
}
