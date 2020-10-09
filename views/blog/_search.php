<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BlogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['manage'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'header') ?>

    <?= $form->field($model, 'short_info') ?>


    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'is_delete') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
