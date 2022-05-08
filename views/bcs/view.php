<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bcs */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bcs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tulangbelakang',
            'tulangiga',
            'lemakdada',
            'lemakekor',
            'penyusutanotot',
            'fisiksapi',
            'sapi_id',
        ],
    ]) ?>

</div>
<div class="gauge">
  <div class="gauge__body">
    <div class="gauge__fill"></div>
    <div class="gauge__cover"></div>
  </div>
</div>
<br>
<br>



<script>
    var num = 0;
    jQuery('table tr td').each( function( cmp ) { 
    num+=1
    // console.log( jQuery(this).text() ); 
    localStorage.setItem('a'+num, jQuery(this).text());
} );


const gaugeElement = document.querySelector(".gauge");

function setGaugeValue(gauge, value) {
  if (value < 0 || value > 1) {
    return;
  }

  gauge.querySelector(".gauge__fill").style.transform = `rotate(${
    value / 2
  }turn)`;
  gauge.querySelector(".gauge__cover").textContent = `${Math.round(
    value * 10
  )} BCS Score`;
}

// setGaugeValue(gaugeElement, 0.6);


function getBCS(){
  let tulang_belakang = localStorage.getItem("a2");
  let tulang_iga = localStorage.getItem("a3");
  let lemak_dada = localStorage.getItem("a4");
  let lemak_ekor = localStorage.getItem("a5");
  let penyusutan_otot = localStorage.getItem("a6");
  let fisik_sapi = localStorage.getItem("a7");

  if (tulang_belakang == 'Ya' && tulang_iga == 'Ya' && lemak_dada =='Tidak' && lemak_ekor == 'Tidak' && penyusutan_otot == 'Ya' && fisik_sapi == 'Ya'){
  // console.log(tulang_belakang,tulang_iga,lemak_dada,lemak_ekor,penyusutan_otot,fisik_sapi);
  setGaugeValue(gaugeElement, 0.1);
  }
  if (tulang_belakang == 'Ya' && tulang_iga == 'Ya' && lemak_dada =='Tidak' && lemak_ekor == 'Tidak' && penyusutan_otot == 'Ya' && fisik_sapi == 'Tidak'){
  // console.log(tulang_belakang,tulang_iga,lemak_dada,lemak_ekor,penyusutan_otot,fisik_sapi);
  setGaugeValue(gaugeElement, 0.2);
  }
  if (tulang_belakang == 'Ya' && tulang_iga == 'Ya' && lemak_dada =='Tidak' && lemak_ekor == 'Tidak' && penyusutan_otot == 'Sebagian' && fisik_sapi == 'Tidak'){
  // console.log(tulang_belakang,tulang_iga,lemak_dada,lemak_ekor,penyusutan_otot,fisik_sapi);
  setGaugeValue(gaugeElement, 0.3);
  }
  if (tulang_belakang == 'Sebagian' && tulang_iga == 'Sebagian' && lemak_dada =='Tidak' && lemak_ekor == 'Tidak' && penyusutan_otot == 'Tidak' && fisik_sapi == 'Tidak'){
  // console.log(tulang_belakang,tulang_iga,lemak_dada,lemak_ekor,penyusutan_otot,fisik_sapi);
  setGaugeValue(gaugeElement, 0.4);
  }
  if (tulang_belakang == 'Tidak' && tulang_iga == 'Sebagian' && lemak_dada =='Tidak' && lemak_ekor == 'Tidak' && penyusutan_otot == 'Tidak' && fisik_sapi == 'Tidak'){
  // console.log(tulang_belakang,tulang_iga,lemak_dada,lemak_ekor,penyusutan_otot,fisik_sapi);
  setGaugeValue(gaugeElement, 0.5);
  }
  if (tulang_belakang == 'Tidak' && tulang_iga == 'Tidak' && lemak_dada =='Sebagian' && lemak_ekor == 'Tidak' && penyusutan_otot == 'Tidak' && fisik_sapi == 'Tidak'){
  // console.log(tulang_belakang,tulang_iga,lemak_dada,lemak_ekor,penyusutan_otot,fisik_sapi);
  setGaugeValue(gaugeElement, 0.6);
  }
  if (tulang_belakang == 'Tidak' && tulang_iga == 'Tidak' && lemak_dada =='Ya' && lemak_ekor == 'Tidak' && penyusutan_otot == 'Tidak' && fisik_sapi == 'Tidak'){
  // console.log(tulang_belakang,tulang_iga,lemak_dada,lemak_ekor,penyusutan_otot,fisik_sapi);
  setGaugeValue(gaugeElement, 0.7);
  }
  if (tulang_belakang == 'Tidak' && tulang_iga == 'Tidak' && lemak_dada =='Ya' && lemak_ekor == 'Sebagian' && penyusutan_otot == 'Tidak' && fisik_sapi == 'Tidak'){
  // console.log(tulang_belakang,tulang_iga,lemak_dada,lemak_ekor,penyusutan_otot,fisik_sapi);
  setGaugeValue(gaugeElement, 0.8);
  }
  if (tulang_belakang == 'Tidak' && tulang_iga == 'Tidak' && lemak_dada =='Ya' && lemak_ekor == 'Ya' && penyusutan_otot == 'Tidak' && fisik_sapi == 'Tidak'){
  // console.log(tulang_belakang,tulang_iga,lemak_dada,lemak_ekor,penyusutan_otot,fisik_sapi);
  setGaugeValue(gaugeElement, 0.9);
  }
  
}
getBCS();
    </script>