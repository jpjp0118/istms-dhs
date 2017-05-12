<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       
      
        'css/qweqwe.css',
        'css/site.css',   
    ];


   public $js = [
         'vendor/vendor/bootstrap/js/bootstrap.min.js',
          'vendor/js/sadlife.js',
           'vendor/vendor/scrollreveal/scrollreveal.min.js',
            'vendor/vendor/magnific-popup/jquery.magnific-popup.min.js',
             'vendor/js/creative.min.js',
    ];

    public $depends = [
       'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',

    ];
    public $publishOptions = [
        'forceCopy' => true,
         //you can also make it work only in debug mode: 'forceCopy' => YII_DEBUG
    ];

  
}
