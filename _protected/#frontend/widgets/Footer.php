<?php
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\Cmenus;

class Footer extends Widget
{
	public $inner;
	public function run()
	{	
		$model = new Cmenus();
		$leftmenu = $model->getMenu(2);
		$rightmenu = $model->getMenu(3);

		$view = ($this->inner == 0 ? 'footer' : 'inner_footer');
		
		return $this->render($view, [
			'leftmenu' =>  $leftmenu,
			'rightmenu' =>  $rightmenu,

        ]);	
		
	}
}