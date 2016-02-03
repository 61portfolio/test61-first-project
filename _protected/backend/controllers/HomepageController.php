<?php

namespace backend\controllers;

use Yii;
use common\models\Homepage;
use common\models\HomepageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;
use kartik\file\FileInput;

/**
 * HomepageController implements the CRUD actions for Homepage model.
 */
class HomepageController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Homepage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HomepageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		return $this->redirect(['update', 'id' => 1 ]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Homepage model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
		return $this->redirect(['update', 'id' => 1 ]);
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Homepage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Homepage();
		$second_image_back = UploadedFile::getInstance($model, 'second_image_back');
		$second_feature_image = UploadedFile::getInstance($model, 'second_feature_image');
		$third_image_back = UploadedFile::getInstance($model, 'third_image_back');
		$third_feature_image = UploadedFile::getInstance($model, 'third_feature_image');
		$fourth_image_back = UploadedFile::getInstance($model, 'fourth_image_back');
		$fifth_image_back = UploadedFile::getInstance($model, 'fifth_image_back');
        if ($model->load(Yii::$app->request->post())) {
			
			$path = '';
			 $asdlogo = $model->getContent();
			foreach($asdlogo as $asdlogo1 ){
				$second_image_backs = $asdlogo1->second_image_back;
				$second_feature_images = $asdlogo1->second_feature_image;
				$third_image_backs = $asdlogo1->third_image_back;
				$third_feature_images = $asdlogo1->third_feature_image;
				$fourth_image_backs = $asdlogo1->fourth_image_back;
				$fifth_image_backs = $asdlogo1->fifth_image_back;
			} 
				if($second_image_back != '')
				{
					$imagine = new Image();		
					$mimage= $model->updateImage($second_image_back, 1,$path,'second_image_back');
					$model->second_image_back = "/uploads/".$mimage;	
				}
				else{
					$model->second_image_back = $second_image_backs;
				}
				if($second_feature_image != '')
				{
					$mimage1= $model->updateImage($second_feature_image, 1,$path,'second_feature_image');
					$model->second_feature_image = "/uploads/site/medium/".$mimage1;	
				}
				else{
					$model->second_feature_image = $second_feature_images;
				}		
				if($third_image_back != '')
				{
					$mimage2= $model->updateImage($third_image_back, 1,$path,'third_image_back');
					$model->third_image_back = "/uploads/site/medium/".$mimage2;
				}
				else{
					$model->third_image_back = $third_image_backs;
				}
				if($third_feature_image != '')
				{
					$mimage2= $model->updateImage($third_feature_image, 1,$path,'third_feature_image');
					$model->third_feature_image = "/uploads/site/medium/".$mimage2;
				}
				else{
					$model->third_feature_image = $third_feature_images;
				}
				if($fourth_image_back != '')
				{
					$mimage2= $model->updateImage($fourth_image_back, 1,$path,'fourth_image_back');
					$model->fourth_image_back = "/uploads/site/medium/".$mimage2;
				}
				else{
					$model->fourth_image_back = $fourth_image_backs;
				}
				if($fifth_image_back != '')
				{
					$mimage2= $model->updateImage($fifth_image_back, 1,$path,'fifth_image_back');
					$model->fifth_image_back = "/uploads/site/medium/".$mimage2;
				}
				else{
					$model->fifth_image_back = $fifth_image_backs;
				}


				$model->save();				
				//$imagine->thumbnail($uploadLarge, 1000, 400)->save($filename, ['quality' => 80]);				
						
            return $this->redirect(['update', 'id' => $model->id , 'save' => 'yes']);
        } else {
           return $this->redirect(['update', 'id' => 1 ]);
        }
    }

    /**
     * Updates an existing Homepage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$second_image_back = UploadedFile::getInstance($model, 'second_image_back');
		$second_feature_image = UploadedFile::getInstance($model, 'second_feature_image');
		$third_image_back = UploadedFile::getInstance($model, 'third_image_back');
		$third_feature_image = UploadedFile::getInstance($model, 'third_feature_image');
		$fourth_image_back = UploadedFile::getInstance($model, 'fourth_image_back');
		$fifth_image_back = UploadedFile::getInstance($model, 'fifth_image_back');
        if ($model->load(Yii::$app->request->post())) {
			
			$path = '';
			$asdlogo = $model->getContent();
			foreach($asdlogo as $asdlogo1 ){
				$second_image_backs = $asdlogo1->second_image_back;
				$second_feature_images = $asdlogo1->second_feature_image;
				$third_image_backs = $asdlogo1->third_image_back;
				$third_feature_images = $asdlogo1->third_feature_image;
				$fourth_image_backs = $asdlogo1->fourth_image_back;
				$fifth_image_backs = $asdlogo1->fifth_image_back;
			} 
				if($second_image_back != '')
				{
					$imagine = new Image();		
					$mimage= $model->updateImage($second_image_back, 1,$path,'second_image_back');
					$model->second_image_back = "/uploads/home/".$mimage;	
				}
				else{
					$model->second_image_back = $second_image_backs;
				}
				if($second_feature_image != '')
				{
					$mimage1= $model->updateImage($second_feature_image, 1,$path,'second_feature_image');
					$model->second_feature_image = "/uploads/home/".$mimage1;	
				}
				else{
					$model->second_feature_image = $second_feature_images;
				}		
				if($third_image_back != '')
				{
					$mimage2= $model->updateImage($third_image_back, 1,$path,'third_image_back');
					$model->third_image_back = "/uploads/home/".$mimage2;
				}
				else{
					$model->third_image_back = $third_image_backs;
				}
				if($third_feature_image != '')
				{
					$mimage2= $model->updateImage($third_feature_image, 1,$path,'third_feature_image');
					$model->third_feature_image = "/uploads/home/".$mimage2;
				}
				else{
					$model->third_feature_image = $third_feature_images;
				}
				if($fourth_image_back != '')
				{
					$mimage2= $model->updateImage($fourth_image_back, 1,$path,'fourth_image_back');
					$model->fourth_image_back = "/uploads/home/".$mimage2;
				}
				else{
					$model->fourth_image_back = $fourth_image_backs;
				}
				if($fifth_image_back != '')
				{
					$mimage2= $model->updateImage($fifth_image_back, 1,$path,'fifth_image_back');
					$model->fifth_image_back = "/uploads/home/".$mimage2;
				}
				else{
					$model->fifth_image_back = $fifth_image_backs;
				}


				$model->save();				
				//$imagine->thumbnail($uploadLarge, 1000, 400)->save($filename, ['quality' => 80]);				
						
            return $this->redirect(['update', 'id' => $model->id , 'save' => 'yes']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Homepage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Homepage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Homepage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Homepage::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
