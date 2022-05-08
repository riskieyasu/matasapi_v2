<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BcsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bcs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tulangbelakang') ?>

    <?= $form->field($model, 'tulangiga') ?>

    <?= $form->field($model, 'lemakdada') ?>

    <?= $form->field($model, 'lemakekor') ?>

    <?php // echo $form->field($model, 'penyusutanotot') ?>

    <?php // echo $form->field($model, 'fisiksapi') ?>

    <?php // echo $form->field($model, 'sapi_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
