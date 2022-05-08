<style>
     .control-label{
        color:black;
        font-size:12px;
        margin-left:-60px;
        /* margin-bottom:10px; */
       
    }
    #vaksinasi-namavaksin{
        margin-top:-30px;
        margin-left:45px;
        margin-bottom:20px;
        border-color:black;
        
        
    }
    #vaksinasi-tanggalvaksin{
        margin-top:-30px;
        margin-left:45px;
        margin-bottom:20px;
        border-color:black;
    }
    #vaksinasi-pemberivaksin{
        margin-top:-30px;
        margin-left:45px;
        margin-bottom:20px;
        border-color:black;
    }
    #vaksinasi-keterangan{
        margin-top:-30px;
        margin-left:45px;
        margin-bottom:20px;
        border-color:black;
    }
    #vaksinasi-datasapi_id{
        margin-top:-30px;
        margin-left:45px;
        margin-bottom:20px;
        border-color:black;
    }
    .btn-success{
        margin-left:360px;
        margin-top:-15px;
    }
    .btn-primary{
        margin-left:510px;
        margin-top:-51px;
    }
    
    </style>




<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vaksinasi */

$this->title = 'Riwayat Vaksinasi';
$this->params['breadcrumbs'][] = ['label' => 'Vaksinasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 style="margin-left:20px;"><?= Html::encode($this->title) ?></h1>
<p style="margin-left:20px;">Pencatatan kesehatan tentang riwayat vaksinasi yang pernah diberikan kepada sapi.</p><br>
<div class="vaksinasi-create"  style="background-color:white; width:60%; margin-left:220px; border-style: solid; border-color:black;">

    <br><?= $this->render('_form', [
        'model' => $model,
    ])
    
     ?>
<?= Html::a('View Table', '#' ,array('onclick'=>'js:setTop()','class' => 'btn btn-primary')) ?>
</div>
<script>
     $("#vaksinasi-namavaksin")
    .replaceWith('<select  id="vaksinasi-namavaksin" class="form-control" name="Vaksinasi[namavaksin]" aria-required="true" aria-invalid="true">'+
    '<option value="Rhinovet">Rhinovet</option>'+
    '<option value="Aerosvak SE34">Aerosvak SE34</option>'+
    '<option value="Closvak">Closvak</option>'+
    '<option value="ETC">ETC</option>'+
  '</select>');
    let id = localStorage.getItem("id");
    document.getElementById("vaksinasi-tanggalvaksin").placeholder = "yyyy/mm/dd"; 
    document.getElementById("vaksinasi-datasapi_id").value= id; 


    function setTop(){
       let id_ = localStorage.getItem("id");
        window.location.href= "index.php?r=vaksinasi%2Findex&id="+id_+""
    }
</script>