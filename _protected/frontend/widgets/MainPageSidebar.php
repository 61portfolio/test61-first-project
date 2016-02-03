<?php
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\Globalsetting;
use common\models\Cmenus;

class MainPageSidebar extends Widget
{
	public $sidebarmenu;
	public $type;
	public function run()
	{			$Globalsetting = new Globalsetting();			
				$modelmenu = new Cmenus();			
				$sidebarmenus = array();			
				$sidebarmenus = $modelmenu->getMenuTop($this->sidebarmenu,$this->type);			
				$settings = $Globalsetting->getLogoFevicon();			
				foreach($settings as $asdlogo1 ){				
				$logo = \Yii::$app->request->baseUrl.$asdlogo1->logo;
				$title = $asdlogo1->site_title;			
				}
				return $this->render('mainpagesidebar', [
				'sidebarmenus' =>  $sidebarmenus,
				'logo' =>  $logo,			
				'title' =>  $title,
			]);
		
	}
}