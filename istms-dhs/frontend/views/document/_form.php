<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;



/* @var $this yii\web\View */
/* @var $model app\models\Documents */
/* @var $form yii\widgets\ActiveForm */
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
            'class' => 'navbar navbar-default navbar-fixed-top navbar',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav navbar-left navbar-border'],
        'items' => [

             ['label'=>'Home', 'url'=>['site/index']],
             ['label'=>'Documents', 'url'=>['document/index']],    

        ],
    ]);
     NavBar::end();
    ?>
<div class="documents-form" style="padding-left: 100px;">

       <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'reference_no')->textInput(['style'=>'width:500px']) ?>
    <?= $form->field($model, 'subject')->textInput(['maxlength'=>true,'style'=>'width:500px']) ?>
    <?= $form->field($model, 'doc_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => true, 
         // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
    <?= $form->field($model, 'doc_for')->textInput(['maxlength'=>true,'style'=>'width:500px']) ?>
    <?= $form->field($model, 'doc_from')->textInput(['maxlength'=>true,'style'=>'width:500px']) ?>
    <?= $form->field($model, 'drawer_id')->textInput(['maxlength'=>true,'style'=>'width:500px']) ?>
    <?= $form->field($model, 'doc_name')->textInput(['maxlength'=>true,'style'=>'width:500px']) ?>
    <?= $form->field($model, 'doc_file')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

      </div>