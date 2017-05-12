<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
/* @var $this yii\web\View */
/* @var $model app\models\Documents */

$this->title = 'View: ' . $model->reference_no;
$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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

<div class="documents-view" style="padding-left: 100px; padding-right: 100px; ">
<center>
    <h1 style="color:#F05F40;"><?= Html::encode($this->title) ?></h1>
</center>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->reference_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->reference_no], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'reference_no',
            'subject',
            'doc_date',
            'doc_for',
            'doc_from',
            'drawer_id',
            'doc_name',
            'doc_file',
        ],
    ]) ?>

</div>
