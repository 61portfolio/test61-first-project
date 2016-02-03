<?php
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class SliderWid extends Widget
{
	public $page_id;
	public $imggallery;
	public function run()
	{		
		return $this->render('sliderwid', [
			'page_id' =>  $this->page_id,
			'imggallery' =>  $this->imggallery,
        ]);	
		
	}
}