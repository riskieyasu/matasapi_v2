<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datasapi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datasapi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namasapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rassapi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jeniskelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggallahir')->textInput() ?>

    <?= $form->field($model, 'beratbadan')->textInput() ?>

    <?= $form->field($model, 'lingkarbadan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
