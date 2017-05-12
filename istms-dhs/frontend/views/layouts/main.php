<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang='<?= Yii::$app->language ?>'>
<head>
    <meta charset='<?= Yii::$app->charset ?>'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="img/defult_text.ico">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <style>
        .navbar-default{
            background-color: #fff;
        }

    </style>
        <style>
@import url('https://fonts.googleapis.com/css?family=Baloo');
</style>
    <?php $this->head() ?>

     
</head>
<body>
<?php $this->beginBody() ?>
    <?php
     NavBar::begin([
        'brandLabel' => 'ISTMS - DHS',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default navbar-fixed-top navbar top-nav-collapse affix','id' => 'mainNav',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-left navbar-border'],
        'items' => [

             ['label'=>'Home', 'url'=>['site/index']],
             ['label'=>'Documents', 'url'=>['document/index']],
             ['label' => 'Services', 'url' => '#services',],
             ['label'=>'About Us', 'url'=>'#about'],
             ['label' => 'Sign Up', 'url' => ['index']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['#'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
               

        ],
    ]);
     NavBar::end();
    ?>

    <?php
   
    ?>
   
 
        
        <?= Breadcrumbs::widget([

            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            

        ]) ?>
               <?= $content ?>
        <?= Alert::widget()  ?>
         
 
  <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
        <div class="footer-bottom">
           
            <div class="row">

                    <div class="col-sm-4 col-xs-12">

                        
                      
                    </div>
                    <div class="col-sm-4 col-xs-12 text-center">
                    <h3>ISTMS - DHS</h3><br>
                    <i class="fa fa-copyright"></i> copyrights <?= date('Y-m-d') ?>
                    </div>

                    


                  </div>

        </div>
        <footer>
            
        <div class='container'>
        <p class='pull-right'><?= Yii::powered() ?></p>

    </div>
        </footer>
    </footer> <!-- main-footer -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
