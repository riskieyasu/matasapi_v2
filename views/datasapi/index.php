<?php

use app\models\Datasapi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatasapiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datasapis';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="datasapi-index">

    <h1 style="text-align:center" id="tes"><?= Html::encode($this->title) ?></h1>

    <h2 style="text-align:center" id="h2">Tidak Diizinkan!</h2>

  
    </div>



<?php



if(Yii::$app->user->isGuest){
    $script = <<< JS
    document.getElementById("data").style.display="none";
    
    
JS;
    $this->registerJs($script);
   }
   else{
    $script_1 = <<< JS
    document.getElementById("h2").style.display="none";
    $(".sapianda").css("display","block");
    // $(".flex-container_").css("display","none");
    
    
JS;
    $this->registerJs($script_1);
   }
?>

