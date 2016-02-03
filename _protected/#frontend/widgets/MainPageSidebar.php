<?php
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class MainPageSidebar extends Widget
{
	public $page_id;
	public $sidebarmenu;
	public function run()
	{

			return $this->render('mainpagesidebar', [
			'page_id' =>  $this->page_id,
			'sidebarmenu' =>  $this->sidebarmenu,
        ]);
		
	}
}