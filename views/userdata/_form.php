<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userdata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userdata-form">

    <?php $form = ActiveForm::begin(); ?>
    <br>
    <div style ="width:50%; margin:auto">
    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
</div>
<div style ="width:50% ; margin:auto">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="form-group" style="width:50% ;margin:auto">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Kembali', ['/userdata'],['class' => 'btn btn-warning']) ?>
    </div>
    
   
 

    <?php ActiveForm::end(); ?>

</div>
