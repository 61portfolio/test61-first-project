<?php
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class Sidebar extends Widget
{
	public $page_id;
	public $sidebarmenu;
	public function run()
	{		
		return $this->render('sidebar', [
			'page_id' =>  $this->page_id,
			'sidebarmenu' =>  $this->sidebarmenu,
        ]);	
		
	}
}