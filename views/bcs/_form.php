<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bcs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bcs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tulangbelakang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tulangiga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lemakdada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lemakekor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyusutanotot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fisiksapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sapi_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
