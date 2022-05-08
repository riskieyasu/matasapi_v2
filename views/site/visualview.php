<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Kondisi Visual';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 style="text-align:center; margin-bottom:-40px;"><?= Html::encode($this->title) ?></h1>

<div class="flex-containera" style="margin-left:180px;">

<p style="width:800px; color:black; font-size:26px;">  <span><i class='fa-solid fa-cow'  style='color:black; margin-left:5px; margin-top:-10px; font-size:22px;'></i></span> Kepala</p>

<div><br><a href="#" onclick="num()"  style="margin-left:2px; font-size:20px;">Hidung</a></div>

<div><br><a href='#' onclick="num_()" id = '$num' style="margin-left:4px; font-size:20px;">Mulut</a></div>
<div><br><a href='#' onclick="num__()" id = '$num' style="margin-left:5px; font-size:20px;">Mata</a></div>
<div><br><a href='#' onclick="num___()" id = '$num' style="margin-left:10px; font-size:20px;">Telinga</a></div>
</div>
<div class="flex-containera" style="margin-left:180px;">

<p style="width:800px; color:black; font-size:26px;">  <span><i class='fa-solid fa-cow'  style='color:black; margin-left:5px; margin-top:-10px; font-size:22px;'></i></span> Badan</p>



<div><br><a href='index.php?r=bcs%2Fcreate' id = '$num' style="margin-left:4px; font-size:20px;">Rusuk</a></div>
<div><br><a href='index.php?r=riwayatpenyakit%2Fcreate' id = '$num' style="margin-left:5px; font-size:20px;">Punggung</a></div>

</div><div class="flex-containera" style="margin-left:180px;">
<p style="width:800px; color:black; font-size:26px;">  <span><i class='fa-solid fa-cow'  style='color:black; margin-left:5px; margin-top:-10px; font-size:22px;'></i></span> Bawah</p>

<div><br><a href='#' id = '$num' style="margin-left:2px; font-size:20px;">Puting</a></div>

<div><br><a href='index.php?r=bcs%2Fcreate' id = '$num' style="margin-left:4px; font-size:20px;">Lutut</a></div>
<div><br><a href='index.php?r=riwayatpenyakit%2Fcreate' id = '$num' style="margin-left:5px; font-size:20px;">Kaki</a></div>
<div><br><a href='index.php?r=vaksinasi%2Fcreate' id = '$num' style="margin-left:10px; font-size:20px;">Kuku</a></div>
</div><div class="flex-containera" style="margin-left:180px;">
<p style="width:800px; color:black; font-size:26px;">  <span><i class='fa-solid fa-cow'  style='color:black; margin-left:5px; margin-top:-10px; font-size:22px;'></i></span> Buntut</p>

<div><br><a href='#' id = '$num' style="margin-left:2px; font-size:20px;">Buntut</a></div>
</div>



<div class="flex-containera" style="margin-left:180px;">
</div>
<script>
    function num(){
        
        id = localStorage.getItem("id");
        window.location.href= "index.php?r=hidung%2Findex&id="+id+""
    }
    function num_(){
        
        id = localStorage.getItem("id");
        window.location.href= "index.php?r=mulut%2Findex&id="+id+""
    }
    function num__(){
        
        id = localStorage.getItem("id");
        window.location.href= "index.php?r=mata%2Findex&id="+id+""
    }
    function num___(){
        
        id = localStorage.getItem("id");
        window.location.href= "index.php?r=telinga%2Findex&id="+id+""
    }
    </script>