<style>
    #w0{
        color:black;
      width :50%;
      
      margin-left:300px;
      margin-top:-190px;
    }
    #img{
        padding-top:60px;
        margin-left:50px;
    }
  .username{
      color:black;
      margin-left:-10px;
     
  }
  .update{
      color:black;
      margin-left:480px;

     
  }
    </style>
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Datasapi */

$this->title = $model->namasapi;


$this->params['breadcrumbs'][] = ['label' => 'Datasapis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="datasapi-view">
    <h1 style="text-align:center">Data Kesehatan Sapi</h1>
    <h1 id="id" style="display:none"><?= Html::encode($model->id) ?></h1>
    
    <p style="text-align:center">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Data Entry', '#' ,array('onclick'=>'js:setTop_()','class' => 'btn btn-success')) ?>
       
    </p>

    
    <div class="datasapi-create" style="background-color:white; width:70%; margin-left:150px; border-style: solid; border-color:black;">
    <?= Html::label('terakhir diupdate :' , 'username', ['class' => 'label update']) ?>
        <?= Html::label($model->date , 'username', ['class' => 'label username']) ?><br><img id ="img" src="../web/uploads/<?php echo Html::encode($this->title) ?>.jpg" alt="<?php echo Html::encode($this->title) ?>" width="200" height="200"> <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'namasapi',
            'rassapi',
            'jeniskelamin',
            'tanggallahir',
            'beratbadan',
            'lingkarbadan',
            
        ]
    ]) ?>
  

<div class="flex-containera">
<div><span><i class='fas fa-cow'  style='color:black; margin-left:-15px; margin-top:-10px; font-size:52px;'></i></span><br><a href='#' onclick="setTop(1)" id = '$num' style="margin-left:2px;">Kondisi Visual</a></div>

<div><span><i class="fas fa-gauge" style='color:black; margin-left:-5px; margin-top:-10px; font-size:52px;'></i></span><br><a href='#' onclick="setTop(2)" id = '$num' style="margin-left:4px;">BCS</a></div>
<div><span><i class='fas fa-briefcase-medical'  style='color:black; margin-left:-5px; margin-top:-10px; font-size:52px;'></i></span><br><a href='#' onclick="setTop(3)" id = '$num' style="margin-left:5px;">Riwayat Kesehatan</a></div>
<div><span><i class='fas fa-syringe'  style='color:black; margin-left:5px; margin-top:-10px; font-size:52px;'></i></span><br><a href='#' onclick="setTop(4)" id = '$num' style="margin-left:10px;">Riwayat Vaksinasi</a></div>
</div>
<br>
<br>
<br>
<br>



<script>
    function setTop(num){
        let id = document.getElementById('id').textContent;
        localStorage.setItem("id", id);
        if (num==1){
        window.location.href= "index.php?r=site%2Fvisualview"
}    
        if (num==2){
        window.location.href= "index.php?r=bcs%2Findex&id="+id+""
}    
if (num==3){
        window.location.href= "index.php?r=riwayatpenyakit%2Findex&id="+id+""
}    
if (num==4){
        window.location.href= "index.php?r=vaksinasi%2Findex&id="+id+""
}    
}
    function setTop_(){
        // let id = document.getElementById('id').textContent;
        let id = $("#id").text();
        localStorage.setItem("id", id);

    window.location.href= "index.php?r=site%2Fcatat"
    }
    </script>