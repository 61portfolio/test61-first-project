<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * -----------------------------------------------------------------------------
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 * -----------------------------------------------------------------------------
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';
    
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
		'http://code.jquery.com/jquery-migrate-1.2.1.min.js',
		'js/modernizr.js',
		'js/bootstrap.min.js',
		'js/custom.js',
		'js/main.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}

