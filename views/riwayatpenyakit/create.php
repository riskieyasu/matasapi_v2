<style>
    .control-label{
        color:black;
        font-size:12px;
        margin-left:30px;
        margin-top:20px;
        
        /* margin-bottom:10px; */
       
    }
    #riwayatpenyakit-namapenyakit{
        margin-top:-30px;
        margin-left:200px;
        margin-bottom:20px;
        border-color:black;
        width:60%;
    }
    #riwayatpenyakit-tanggalsakit{
        margin-top:-30px;
        margin-left:200px;
        margin-bottom:20px;
        border-color:black;
        width:60%;
    }
    #riwayatpenyakit-tanggalsembuh{
        margin-top:-30px;
        margin-left:200px;
        margin-bottom:20px;
        border-color:black;
        width:60%;
    }
    #riwayatpenyakit-pendiagnosa{
        margin-top:-30px;
        margin-left:200px;
        margin-bottom:20px;
        border-color:black;
        width:60%;
    }
    #riwayatpenyakit-keterangan{
        margin-top:-30px;
        margin-left:200px;
        margin-bottom:20px;
        border-color:black;
        width:60%;
    }
    #riwayatpenyakit-sapi_id{
        margin-top:-30px;
        margin-left:200px;
        margin-bottom:20px;
        border-color:black;
        width:60%;
    }

    .btn-success{
        margin-left:360px;
        margin-top:-15px;
    }
    .btn-primary{
        margin-left:430px;
        margin-top:-51px;
    }
    </style>


<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Riwayatpenyakit */

$this->title = 'Entry Riwayat Penyakit';
$this->params['breadcrumbs'][] = ['label' => 'Riwayatpenyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 style="text-align:center"><?= Html::encode($this->title) ?></h1>
<p style="text-align:center">Pencatatan kesehatan tentang riwayat vaksinasi yang pernah diberikan kepada sapi.</p><br>
<div class="riwayatpenyakit-create"  style="background-color:white; width:60%; margin-left:220px; border-style: solid; border-color:black;">

    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
<?= Html::a('View Table', '#' ,array('onclick'=>'js:setTop()','class' => 'btn btn-primary')) ?>
</div>
<script>
    document.getElementById("riwayatpenyakit-tanggalsakit").placeholder = "yyyy/mm/dd"; 
    document.getElementById("riwayatpenyakit-tanggalsembuh").placeholder = "yyyy/mm/dd"; 
    $("#riwayatpenyakit-namapenyakit")
    .replaceWith('<select  id="riwayatpenyakit-namapenyakit" class="form-control" name="Riwayatpenyakit[namapenyakit]" aria-required="true" aria-invalid="true">'+
    '<option value="Brucellosis">Brucellosis</option>'+
    '<option value="Radang Hati Nekrotik">Radang Hati Nekrotik</option>'+
    '<option value="Leptospirosis">Leptospirosis</option>'+
    '<option value="Salmonellosis">Salmonellosis</option>'+
    '<option value="Antraks">Antraks</option>'+
    '<option value="Penyakit Jembrana">Penyakit Jembrana</option>'+
    '<option value="PMK">PMK</option>'+
    '<option value="BVD">BVD</option>'+
    '<option value="Sapi Gila(BSE)">Sapi Gila(BSE)</option>'+
  '</select>');
  $("#riwayatpenyakit-pendiagnosa")
    .replaceWith('<select  id="riwayatpenyakit-pendiagnosa" class="form-control" name="Riwayatpenyakit[pendiagnosa]" aria-required="true" aria-invalid="true">'+
    '<option value="Peternak">Peternak</option>'+
    '<option value="Non Peternak">Non Peternak</option>'+
  '</select>');
    function setTop(){
       let id_ = localStorage.getItem("id");
    //     window.location.href= "index.php?r=vaksinasi%2Findex&id="+id_+""
    window.location.href= "index.php?r=riwayatpenyakit%2Findex&id="+id_+""
    }
    
    let id = localStorage.getItem("id");
    document.getElementById("riwayatpenyakit-sapi_id").value= id; 


    </script>