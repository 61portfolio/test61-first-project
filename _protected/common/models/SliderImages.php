<?php

namespace common\models;
use common\models\Slider;
use Yii;
use yii\imagine\Image;
use kartik\file\FileInput;
use yii\web\UploadedFile;

/**
 * This is the model class for table "Slider_images".
 *
 * @property integer $id
 * @property integer $Slider_id
 * @property string $Image_name
 * @property string $image_path
 *
 * @property Slider $Slider
 */
class SliderImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Slider_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Slider_id', 'Image_name'], 'required'],
            [['Slider_id'], 'integer'],
			[['image_path'], 'file', 'extensions' => 'png, jpg, gif, mp4, mkv, avi'],
            [['Image_name'], 'string', 'max' => 1000],
            [['type'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Slider_id' => 'Slider ID',
            'Image_name' => 'Image Content',
            'image_path' => 'Image Path',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlider()
    {
        return $this->hasOne(Slider::className(), ['id' => 'Slider_id']);
    }
	
	public function updateVideo($video,$path)
    {
		$imagine = new Image();
		Yii::$app->params['uploadPath'] = 'uploads/Video';
		$type = array('video/mp4','video/mkv','video/avi');
		$videos = $video->name;
		$himage = $video->name;
		$uploadPath = Yii::$app->params['uploadPath'] .$path.'/'. $videos;
		
		if (!file_exists(Yii::$app->params['uploadPath'] .$path)) {
			mkdir(Yii::$app->params['uploadPath'] .$path, 0777, true);
		}	
		
		if($video->saveAs($uploadPath)){
			if(in_array($video->type , $type)){
				return $videos;
			}else{
				$imagineObj =  yii\imagine\Image::getImagine();	
				$imageObj = $imagineObj->open($uploadPath);
				$imageObj1 = $imagineObj->open($uploadPath);
				$imageObj2 = $imagineObj->open($uploadPath);
				$imageObj3 = $imagineObj->open($uploadPath);
				$imageObj3->effects()->grayscale();
				$imageObj2->resize($imageObj2->getSize()->widen(500))->save($uploadPath);
				return $videos;
			}
			
			
			//$imageObj->resize($imageObj->getSize()->widen(1000))->save($uploadLarge);				
			//$imageObj1->resize($imageObj1->getSize()->widen(100))->save($uploadThumbs);	
		}else{
			return false;
		}
    }
	public function getSlidepath($ids)
    {
        $vide  = $this->find()->where(['id'=>$ids])->all();
        return $vide;
    }
}
