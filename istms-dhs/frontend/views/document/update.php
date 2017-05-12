<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Documents */

$this->title = 'Update Document: ' . $model->reference_no;
$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reference_no, 'url' => ['view', 'id' => $model->reference_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<head>
	<style>
		.color{
			color:#F05F40;
		}
	</style>
</head>
<div class="documents-update">
	<center>
    <h1 class="color"><?= Html::encode($this->title) ?></h1>
    </center>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
