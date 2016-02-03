<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use common\models\Pages;



class PageController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex($slug)
    {

		$model = new Pages();

		$page = $model->find()->innerjoinwith('rel')->where(['slug'=>$slug])->one();
		
		$level = $page->rel->level;
		$sidebarmenu = $model->getMenu($page->id,$level);	
		if($level=="0"){
			$this->layout = 'level-1';
		}elseif($level=="1"){
			$this->layout = 'level-2';
		}elseif($level=="2"){
			$this->layout = 'level-3';
		}
		else{
			$this->layout = 'page';
		}
		if(!empty( $page->meta_desc ))
			Yii::$app->params['settings']['meta_desc'] = $page->meta_desc;
		if(!empty( $page->meta_keywords ))
			Yii::$app->params['settings']['meta_tag'] = $page->meta_keywords;
		
		Yii::$app->view->params['sidebarmenu'] = $sidebarmenu;
		Yii::$app->view->params['id'] = $page->id;						
        return $this->render('index', [
            'model' => $page,
			'page_id' =>  $page->id,			
			'sidebarmenu' =>  $sidebarmenu,
        ]);
    }

}
