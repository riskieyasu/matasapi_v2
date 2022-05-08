<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VaksinasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vaksinasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'namavaksin') ?>

    <?= $form->field($model, 'tanggalvaksin') ?>

    <?= $form->field($model, 'pemberivaksin') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'datasapi_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
