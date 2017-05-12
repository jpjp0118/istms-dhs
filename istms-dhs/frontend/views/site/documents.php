<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model app\models\Documents */
/* @var $form ActiveForm */
?> 

<head>
    
  <!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="css/qweqwe.css" rel="stylesheet" type="text/css">
   
    <!-- Plugin CSS -->

    <!-- Theme CSS -->
</head>
       <?php
     NavBar::begin([
        'brandLabel' => 'ISTMS - DHS',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-left navbar-border'],
        'items' => [

             ['label'=>'Home', 'url'=>['site/index']],
             ['label'=>'Documents', 'url'=>['site/documents']],
          

        ],
    ]);
     NavBar::end();
    ?>
    
    </br>
    </br>
    </br>
    </br>
<div class="container">
            <div class="row">
                <div class="">
<div class="documents-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'reference_no') ->textInput(['maxlength'=>10,'style'=>'width:500px']);?>
        <?= $form->field($model, 'subject') ->textInput(['maxlength'=>10,'style'=>'width:500px']);?>
        <?= $form->field($model, 'doc_date') ->textInput(['maxlength'=>10,'style'=>'width:500px']); ?>
        <?= $form->field($model, 'doc_for') ->textInput(['maxlength'=>10,'style'=>'width:500px']); ?>
        <?= $form->field($model, 'doc_from') ->textInput(['maxlength'=>10,'style'=>'width:500px']); ?>
        <?= $form->field($model, 'doc_file') ->textInput(['maxlength'=>10,'style'=>'width:500px']); ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary'], ['url' => ['site/documents']] ) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- documents -->
</div>
</div>
