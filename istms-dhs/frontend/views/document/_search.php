<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documents-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'reference_no') ?>

    <?= $form->field($model, 'subject') ?>

    <?= $form->field($model, 'doc_date') ?>

    <?= $form->field($model, 'doc_for') ?>

    <?= $form->field($model, 'doc_from') ?>

     <?= $form->field($model, 'doc_name') ?>

    <?php echo $form->field($model, 'drawer_id') ?>



    <?php echo $form->field($model, 'doc_file') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
