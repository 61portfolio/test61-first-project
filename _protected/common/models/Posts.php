<?php

namespace common\models;

use Yii;
use yii\helpers\Url;
use yii\imagine\Image;
use kartik\file\FileInput;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use common\models\PostCategories;

/**
 * This is the model class for table "posts".
 *
 * @property integer $post_id
 * @property string $post_title
 * @property integer $cat_id
 * @property string $short_description
 * @property string $description
 * @property string $featured_image
 * @property integer $status
 * @property string $author
 * @property string $created_at
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title', 'description','slug','author'], 'required'],
            [['cat_id', 'status'], 'integer'],
            [['description'], 'string'],
            [['post_title','slug', 'featured_image'], 'string', 'max' => 1000],
            [['author', 'created_at'], 'string', 'max' => 100],
			[['slug'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_title' => 'Post Title',
            'slug' => 'Slug',
            'cat_id' => 'Select Category',
            'description' => 'Description',
            'featured_image' => 'Featured Image',
            'status' => 'Status',
            'author' => 'Author',
        ];
    }
	
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentCat()
    {
        return $this->hasOne(PostCategories::className(), ['id' => 'cat_id']);
    }	
	
	public function upcreated_atImage($image,$path)
    {
		$imagine = new Image();		
		Yii::$app->params['uploadPath'] = 'uploads/';
		Yii::$app->params['uploadThumbs'] = 'uploads/post/thumbs/';
		Yii::$app->params['uploadLarge'] = 'uploads/post/large/';
		Yii::$app->params['uploadMedium'] = 'uploads/post/medium/';
	
		$mimage = $image->name;
		$himage = $image->name;
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
			
			$imageObj3->effects()->grayscale();
			$imageObj3->save($huploadPath);	
			
			//$imageObj->resize($imageObj->getSize()->widen(1000))->save($uploadLarge);				
			//$imageObj1->resize($imageObj1->getSize()->widen(100))->save($uploadThumbs);	
			
			$imageObj2->resize($imageObj2->getSize()->widen(500))->save($uploadMedium);
			
				
			
			return $mimage;
		}else{
			return false;
		}
    }	
	public function updateImage($image,$path)
    {
		$imagine = new Image();		
		Yii::$app->params['uploadPath'] = 'uploads/';
		Yii::$app->params['uploadThumbs'] = 'uploads/post/thumbs/';
		Yii::$app->params['uploadLarge'] = 'uploads/post/large/';
		Yii::$app->params['uploadMedium'] = 'uploads/post/medium/';
	
		$mimage = $image->name;
		$himage = $image->name;
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
			
			$imageObj3->effects()->grayscale();
			$imageObj3->save($huploadPath);	
			
			//$imageObj->resize($imageObj->getSize()->widen(1000))->save($uploadLarge);				
			//$imageObj1->resize($imageObj1->getSize()->widen(100))->save($uploadThumbs);	
			
			$imageObj2->resize($imageObj2->getSize()->widen(500))->save($uploadMedium);
			
				
			
			return $mimage;
		}else{
			return false;
		}
    }
	public function getCategory()
	{
		$programs = PostCategories::find()->where('id != 0')->orderBy('cat_name')->all();
		$arr = array();

		$merge =  ArrayHelper::map($programs,'id','cat_name');

		return $merge;
	}
	public function getFeaturedImage($ids)
	{
		$programs = Posts::find('featured_image')->where(['post_id'=>$ids])->one();
		return $programs;
	}
	
	
}
