<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vaksinasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vaksinasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namavaksin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalvaksin')->textInput() ?>

    <?= $form->field($model, 'pemberivaksin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datasapi_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
