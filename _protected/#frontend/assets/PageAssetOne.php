<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PageAssetOne extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';

    public $css = [

        'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800',
        'css/bootstrap.min.css',
        'css/style.css',
        'css/responsive.css',
        'css/jquery.mCustomScrollbar.css',
       
    ];

	 public $js = [
        'http://code.jquery.com/jquery-migrate-1.2.1.min.js',
		'js/modernizr.js',		
		'js/bootstrap.min.js',		

		'js/custom.js',
		'js/jquery.mCustomScrollbar.js',
    ];
	 public $depends = [
        'yii\web\YiiAsset',
    ];
}
