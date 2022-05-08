<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Pencatatan Kesehatan Sapi';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 style="text-align:center;"><?= Html::encode($this->title) ?></h1>

<div class="flex-containera" style="margin-left:180px;">
<div><span><i class='fas fa-cow'  style='color:black; margin-left:-15px; margin-top:-10px; font-size:52px;'></i></span><br><a href='index.php?r=site%2Fvisual' id = '$num' style="margin-left:2px;">Kondisi Visual</a></div>

<div><span><i class="fas fa-gauge" style='color:black; margin-left:-5px; margin-top:-10px; font-size:52px;'></i></span><br><a href='index.php?r=bcs%2Fcreate' id = '$num' style="margin-left:4px;">BCS</a></div>
<div><span><i class='fas fa-briefcase-medical'  style='color:black; margin-left:-5px; margin-top:-10px; font-size:52px;'></i></span><br><a href='index.php?r=riwayatpenyakit%2Fcreate' id = '$num' style="margin-left:5px;">Riwayat Kesehatan</a></div>
<div><span><i class='fas fa-syringe'  style='color:black; margin-left:5px; margin-top:-10px; font-size:52px;'></i></span><br><a href='index.php?r=vaksinasi%2Fcreate' id = '$num' style="margin-left:10px;">Riwayat Vaksinasi</a></div>
</div>


