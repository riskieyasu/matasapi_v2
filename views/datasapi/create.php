<style>
    h1{
        color:black;
    }
    .control-label{
        color:black;
        font-size:12px;
        /* margin-bottom:10px; */
       
    }
    #datasapi-namasapi{
        margin-top:-30px;
        margin-left:105px;
        margin-bottom:20px;
        border-color:black;
        
        
    }
    #datasapi-rassapi{
        margin-top:-30px;
        margin-left:105px;
        margin-bottom:20px;
        border-color:black;
    }
    #datasapi-jeniskelamin{
        margin-top:-30px;
        margin-left:105px;
        margin-bottom:20px;
        border-color:black;
    }
    #datasapi-tanggallahir{
        margin-top:-30px;
        margin-left:105px;
        margin-bottom:20px;
        border-color:black;
    }
    #datasapi-beratbadan{
        margin-top:-30px;
        margin-left:105px;
        margin-bottom:20px;
        border-color:black;
    }
    #datasapi-lingkarbadan{
        margin-top:-30px;
        margin-left:105px;
        margin-bottom:20px;
        border-color:black;
    }
    .btn-success{
        margin-left:420px;
    }
    hr { 
        width:80%;
  display: block;
  border-style: inset;
  border-width: 1px;
} 
    </style>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use yii\widgets\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\Datasapi */

$this->title = 'Pencatatan Data Sapi';
$this->params['breadcrumbs'][] = ['label' => 'Datasapis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<h1 style="margin-left:100px;"><?= Html::encode($this->title) ?></h1><br>
<div class="datasapi-create" style="background-color:white; width:70%; margin-left:100px; border-style: solid; border-color:black;">
    <br><h3 style="margin-bottom:-10px; margin-left:70px;color:black;">Data Ternak</h3><hr><div style="width:50%; margin:auto; margin-left:120px; padding-bottom:10px;">
    
   
  
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
 
   <?= $form->field($model, 'namasapi')->textInput() ?>
 
   <?= $form->field($model, 'rassapi')->textInput() ?>
 
   <?= $form->field($model, 'jeniskelamin')->textInput(['maxlength' => true]) ?>
 
   <?= $form->field($model, 'tanggallahir')->textInput(['maxlength' => true]) ?>
 
   <?= $form->field($model, 'beratbadan')->textInput() ?>
   <?= $form->field($model, 'lingkarbadan')->textInput() ?>
   <?= $form->field($model,'file')->fileInput(); ?>
 
  
 
   <div class="form-group">
       <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
   </div>
 
   <?php ActiveForm::end(); ?>
    


</div>
</div>



<script>
    
    $("#datasapi-rassapi")
    .replaceWith('<select  id="datasapi-rassapi" class="form-control" name="Datasapi[rassapi]" aria-required="true" aria-invalid="true">'+
    '<option value="Mongoloid">Mongoloid</option>'+
    '<option value="Kaukasoid">Kaukasoid</option>'+
  '</select>');
  $("#datasapi-jeniskelamin")
    .replaceWith('<select  id="datasapi-jeniskelamin" class="form-control" name="Datasapi[jeniskelamin]" aria-required="true" aria-invalid="true">'+
    '<option value="Jantan">Jantan</option>'+
    '<option value="Betina">Betina</option>'+
  '</select>');
    document.getElementById("datasapi-tanggallahir").placeholder = "yyyy/mm/dd"; 
    
</script>

