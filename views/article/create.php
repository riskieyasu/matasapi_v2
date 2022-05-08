<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Artikel */

$this->title = 'Create Artikel';
$this->params['breadcrumbs'][] = ['label' => 'Artikels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    label[for=artikel-isi]{
        display:none;

    }
    label[for=artikel-file]{
        display:none;

    }
    textarea {
    white-space: normal;
    text-align: justify;
    -moz-text-align-last: center; /* Firefox 12+ */
    text-align-last: left;
}
    .btn-success{
        margin-top:-20px;
        margin-left:780px;
    }
    #artikel-file{
        margin-left:450px;
    }
    </style>
<div class="artikel-create">

    <h1 style="text-align:center"><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
 
    <?= $form->field($model, 'judul')->textInput() ?>
    <?= $form->field($model, 'kategori')->textInput() ?>
    <?= $form->field($model,'file')->fileInput(); ?>  
    <div class="flex-containery">
    <div class="bcs-create" style="background-color:white; width:35px; margin:auto; border-style: solid;  border-width: thin; border-color:black;">
    <a style="font-size:16px; margin-left:8px;" href="#" data-command='subscript' data-toggle="tooltip" data-placement="top" title="Subscript"><i class='fa fa-subscript'></i></a>
</div>
<div class="bcs-create" style="background-color:white; width:35px; margin:auto; border-style: solid;  border-width: thin; border-color:black;">
<a style="font-size:16px;" href="#" data-command='bold' data-toggle="tooltip" data-placement="top" title="Bold"><i class='fa fa-bold'></i></a>
</div>
<div class="bcs-create" style="background-color:white; width:35px; margin:auto; border-style: solid;  border-width: thin; border-color:black;">
<a style="font-size:16px;" href="#" data-command='italic' data-toggle="tooltip" data-placement="top" title="Italic"><i class='fa fa-italic'></i></a>
</div>
<div class="bcs-create" style="background-color:white; width:35px; margin:auto; border-style: solid;  border-width: thin; border-color:black;">
<a style="font-size:16px;" href="#" data-command='underline' data-toggle="tooltip" data-placement="top" title="Underline"><i class='fa fa-underline'></i></a>
</div>
<div class="bcs-create" style="background-color:white; width:35px; margin:auto; border-style: solid;  border-width: thin; border-color:black;">
<a style="font-size:16px;" href="#" data-command='justifyLeft' data-toggle="tooltip" data-placement="top" title="Left align"><i class='fa fa-align-left'></i></a>
</div>
<div class="bcs-create" style="background-color:white; width:35px; margin:auto; border-style: solid;  border-width: thin; border-color:black;">
<a style="font-size:16px;" href="#" data-command='justifyCenter'><i class='fa fa-align-center' data-toggle="tooltip" data-placement="top" title="Center align"></i></a>
</div>
<div class="bcs-create" style="background-color:white; width:35px; margin:auto; border-style: solid;  border-width: thin; border-color:black;">
<a style="font-size:16px;" href="#" data-command='justifyRight' data-toggle="tooltip" data-placement="top" title="Right align"><i class='fa fa-align-right'></i></a>
</div>
<div class="bcs-create" style="background-color:white; width:35px; margin:auto; border-style: solid;  border-width: thin; border-color:black;">
<a style="font-size:16px;" href="#" data-command='justifyFull' data-toggle="tooltip" data-placement="top" title="Justify"><i class='fa fa-align-justify'></i></a>
</div>
</div>
</div>
        <?= $form->field($model, 'isi')->textInput() ?>

</div>

<div class="form-group" style="margin-top:-40px;">
       <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
   </div>
   <?php ActiveForm::end(); ?>

<?php
if(Yii::$app->user->isGuest){
    $script = <<< JS
  window.location.href="index.php";
    
JS;
    $this->registerJs($script);
   }

   else if(Yii::$app->user->identity->username=='Admin'){
    // if(Yii::$app->user->isGuest){
        $script = <<< JS
        $(".sapianda").css("display","none");
        $(".artikel").css("display","block");
    
    JS;
        $this->registerJs($script);
       }
       else{
        $script = <<< JS
        window.location.href="index.php";
          
      JS;
          $this->registerJs($script);
         }
       
?>
<script>

    $("#artikel-isi").replaceWith('<textarea id="artikel-isi" form="w0" class="form-control" name="Artikel[isi]" aria-required="true" aria-invalid="true" rows="10" cols="100" style="margin-left:180px;"></textarea>');
    // width: auto; 
    $("textarea").css("width","auto");

    $("#artikel-kategori")
    .replaceWith('<select  id="artikel-isi" class="form-control" name="Artikel[kategori]" aria-required="true" aria-invalid="true">'+
    '<option value="Kondisi Visual">Kondisi Visual</option>'+
    '<option value="BCS">BCS</option>'+
    '<option value="Riwayat Kesehatan">Riwayat Kesehatan</option>'+
    '<option value="Riwayat Vaksinasi">Riwayat Vaksinasi</option>'+
  '</select>');
    </script>

