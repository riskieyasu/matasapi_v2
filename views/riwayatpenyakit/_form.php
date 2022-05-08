<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Riwayatpenyakit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riwayatpenyakit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namapenyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalsakit')->textInput() ?>

    <?= $form->field($model, 'tanggalsembuh')->textInput() ?>

    <?= $form->field($model, 'pendiagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sapi_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
