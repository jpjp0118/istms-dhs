<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Documents */

$this->title = 'Create Documents';
$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<head>
	<style>
		.color{
			color:#F05F40;
		}
	</style>
</head>
<div class="documents-create">
	<center>
    <h1 class="color"><?= Html::encode($this->title) ?></h1>
    </center>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
