<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);


/* @var $this yii\web\View */
/* @var $searchModel app\models\DocumentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Document Handling System';
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
<div class="documents-index" id="index">
    <center>
    <h1 style="color:#F05F40">Document Handling System</h1>
    </center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Documents', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?=GridView::widget([
         'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'reference_no',
            'subject',
            'doc_date',
            'doc_for',
            'doc_from',
            'drawer_id',
            'doc_name',
            'doc_file',
        [
        'class'    => 'yii\grid\ActionColumn',
        ],
        ['attribute'=>'',
        'format'=>'raw',
        'value' => function($data)
        {
        return
        Html::a('', ['document/download', 'id' => $data->reference_no],['class' => 'fa fa-download']);

        }
        ],
            ]
]); ?>
</div>
