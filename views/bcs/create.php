<style>
     .control-label{
        color:black;
        font-size:12px;
        margin-left:-40px;
        margin-top:20px;
        
        /* margin-bottom:10px; */
       
    }

    #bcs-tulangbelakang{
        margin-top:-30px;
        margin-left:250px;
        margin-bottom:20px;
        border-color:black;
        width:80%;
    }
    #bcs-tulangiga{
        margin-top:-30px;
        margin-left:250px;
        margin-bottom:20px;
        border-color:black;
        width:80%;
    }
    #bcs-lemakdada{
        margin-top:-30px;
        margin-left:250px;
        margin-bottom:20px;
        border-color:black;
        width:80%;
    }
    #bcs-lemakekor{
        margin-top:-30px;
        margin-left:250px;
        margin-bottom:20px;
        border-color:black;
        width:80%;
    }
    #bcs-penyusutanotot{
        margin-top:-30px;
        margin-left:250px;
        margin-bottom:20px;
        border-color:black;
        width:80%;
    }
    #bcs-fisiksapi{
        margin-top:-30px;
        margin-left:250px;
        margin-bottom:20px;
        border-color:black;
        width:80%;
    }
    #bcs-sapi_id{
        margin-top:-30px;
        margin-left:250px;
        margin-bottom:20px;
        border-color:black;
        width:80%;
    }
    .btn-success{
        margin-left:512px;
        margin-top:-15px;
    }
    .btn-primary{
        margin-left:400px;
        margin-top:-51px;
    }
</style>
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bcs */

$this->title = 'Create Bcs';
$this->params['breadcrumbs'][] = ['label' => 'Bcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<h1 style="margin-left:100px;"><?= Html::encode($this->title) ?></h1><br>

<div class="bcs-create" style="background-color:white; width:75%; margin-left:100px; border-style: solid; border-color:black;">
    <br><h3 style="margin-bottom:-10px; margin-left:70px;color:black;">Bantuan</h3><hr><br><img style="margin-left:250px; margin-top: -25px; margin-bottom: 10px;" id ="img" src="../web/uploads/aweeee.jpg" alt="Girl in a jacket" width="300" height="200">
</div>
<br><br>
<div class="bcs-create" style="background-color:white; width:75%; margin-left:100px; border-style: solid; border-color:black;">
    <br><h3 style="margin-bottom:-10px; margin-left:70px;color:black;">Pilihan BCS</h3><hr><div style="width:50%; margin:auto; margin-left:120px; padding-bottom:10px;">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
 <?= Html::a('View Table', '#' ,array('onclick'=>'js:setTop()','class' => 'btn btn-primary')) ?>
</div>
</div>
<script>
function setTop(){
     let id_ = localStorage.getItem("id");
    //     window.location.href= "index.php?r=vaksinasi%2Findex&id="+id_+""
    window.location.href= "index.php?r=bcs%2Findex&id="+id_+""
    // window.location.href= "index.php?r=bcs%2Findex"
    }
    $("#bcs-tulangbelakang")
    .replaceWith('<select  id="bcs-tulangbelakang" class="form-control" name="Bcs[tulangbelakang]" aria-required="true" aria-invalid="true">'+
    '<option value="Ya">Ya</option>'+
    '<option value="Tidak">Tidak</option>'+
    '<option value="Sebagian">Sebagian</option>'+
  '</select>');
  $("#bcs-tulangiga")
    .replaceWith('<select  id="bcs-tulangiga" class="form-control" name="Bcs[tulangiga]" aria-required="true" aria-invalid="true">'+
    '<option value="Ya">Ya</option>'+
    '<option value="Tidak">Tidak</option>'+
    '<option value="Sebagian">Sebagian</option>'+
  '</select>');
  $("#bcs-lemakdada")
    .replaceWith('<select  id="bcs-lemakdada" class="form-control" name="Bcs[lemakdada]" aria-required="true" aria-invalid="true">'+
    '<option value="Ya">Ya</option>'+
    '<option value="Tidak">Tidak</option>'+
    '<option value="Sebagian">Sebagian</option>'+
  '</select>');
  $("#bcs-lemakekor")
    .replaceWith('<select  id="bcs-lemakekor" class="form-control" name="Bcs[lemakekor]" aria-required="true" aria-invalid="true">'+
    '<option value="Ya">Ya</option>'+
    '<option value="Tidak">Tidak</option>'+
    '<option value="Sebagian">Sebagian</option>'+
  '</select>');
  $("#bcs-penyusutanotot")
    .replaceWith('<select  id="bcs-penyusutanotot" class="form-control" name="Bcs[penyusutanotot]" aria-required="true" aria-invalid="true">'+
    '<option value="Ya">Ya</option>'+
    '<option value="Tidak">Tidak</option>'+
    '<option value="Sebagian">Sebagian</option>'+
  '</select>');
  $("#bcs-fisiksapi")
    .replaceWith('<select  id="bcs-fisiksapi" class="form-control" name="Bcs[fisiksapi]" aria-required="true" aria-invalid="true">'+
    '<option value="Ya">Ya</option>'+
    '<option value="Tidak">Tidak</option>'+
    '<option value="Sebagian">Sebagian</option>'+
  '</select>');
    var id_ = localStorage.getItem("id");
    // document.getElementById("vaksinasi-tanggalvaksin").placeholder = "yyyy/mm/dd"; 
    document.getElementById("bcs-sapi_id").value= id_; 
    </script>