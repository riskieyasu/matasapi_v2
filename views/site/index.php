<?php
use yii\helpers\Html;
/** @var yii\web\View $this */


?>

<div class="site-index">
<div class="jumbotron text-center" style="margin-top:10px;">
        <h1 id ="h1" style="font-size:40px;">Selamat Datang Di Mata Sapi</h1>
    <br>
      
      
    </div>

    <div class="flex-container_">
<div><span><h3 style="margin-top:-10px">Jumlah Sapi :</h3></span><br><a href='#' id = 'num' style="margin-left:2px; font-size:20px;">Kondisi Visual</a></div>

<div><span><h3 style="margin-top:-10px">Sapi Jantan :</h3></span><br><a href='#' onclick="setTop(2)" id = 'jantan_' style="margin-left:4px;font-size:20px;">BCS</a></div>
<div id="admin"><span><h3 style='margin-top:-10px'>Jumlah Peternak :</h3></span><br><a href='#' id = 'numa' style='margin-left:2px; font-size:20px;'>Kondisi Visual</a></div>
<div id="login"><span><i class='fas fa-cow'  style='color:black; margin-left:-5px; margin-top:10px; font-size:52px;'></i></span><br><p id="login" style="fon-size:12px;margin-bottom:-20px;" ><?= Html::a('New Entry', "index.php?r=datasapi%2Fcreate") ?></p></div>

<div id="guest"><span><i class='fas fa-cow'  style='color:black; margin-left:-5px; margin-top:10px; font-size:52px;'></i></span><br><p id="login" style="fon-size:12px;margin-bottom:-20px;" ><?= Html::a('New Entry', "index?r=site%2Flogin") ?></p></div>
<div><span><h3 style="margin-top:-10px">Sapi Betina :</h3></span><br><a href='#' onclick="setTop(4)" id = 'betina_' style="margin-left:10px;font-size:20px;">Riwayat Vaksinasi</a></div>
</div>
   
</div>
<?php
$query=new \yii\db\Query(); 

$rows=$query->select(['jeniskelamin']) //specify required columns in an array
             ->from('datasapi') //specify table name
             ->all(); 

$number = 0;
$a = count($rows);
foreach ($rows as $row) {
            $number +=1;
            
            if ($number ==  $a){
                echo "<p style='display:none'>$number : ".$row['jeniskelamin']."</p><p id='number' style='display:none' value='$number'>$number</p>" ;
            }
        }

$row4=$query->select(['username'])
->from('newuser') //specify table name
->count();
 echo "<p id='peternak' style='display:none'> ".$row4."</p>" ;


 $rows_=$query->select(['namasapi'])
 ->from('datasapi') //specify table name
 ->where(['jeniskelamin' => 'Jantan'])
 ->count();

    
        echo "<p id='jantan' style='display:none'> ".$rows_."</p>" ;
    
 $rows__=$query->select(['namasapi'])
 ->from('datasapi') //specify table name
 ->where(['jeniskelamin' => 'Betina'])
 ->count();
 echo "<p id='betina' style='display:none'> ".$rows__."</p>" ;

 if(Yii::$app->user->isGuest){
    $script = <<< JS
    document.getElementById("login").style.display="none";
    document.getElementById("admin").style.display="none";
    $("#jantan_").text('none');
    $("#betina_").text('none');
    $("#num").text('none');
    // $(".artikel").empty();
    $(".sapianda").css("display","block");
    $(".flex-container_").css("display","none");
    $("#h1").text('Tidak Diizinkan');    
JS;
    $this->registerJs($script);
   }
 else if(Yii::$app->user->identity->username=='Admin'){
// if(Yii::$app->user->isGuest){
    $script = <<< JS
    
    document.getElementById("guest").style.display="none";
    document.getElementById("login").style.display="none";
    $(".sapianda").css("display","none");
    $(".artikel").css("display","block");
    // $("#jantan_").text('none');
    
    // $("#admin").empty().append("<span><h3 style='margin-top:-10px'>Jumlah Peternak :</h3></span><br><a href='#' id = 'numa' style='margin-left:2px; font-size:20px;'>Kondisi Visual</a>");
    // $("#login").empty().append('<span><h3 style="margin-top:-10px">Jumlah Sapi :</h3></span><br><a href='#' id = 'num' style="margin-left:2px; font-size:20px;">Kondisi Visual</a>');
    
JS;
    $this->registerJs($script);
   }
  
   
   else{
    $script_1 = <<< JS
    document.getElementById("guest").style.display="none";
    document.getElementById("admin").style.display="none";
    $(".sapianda").css("display","block");
    
    
JS;
    $this->registerJs($script_1);
   }
?>
<!-- <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script> -->
<script>
   
    $(document).ready(function() {
    var cek = $("#number").text();
    var jantan = $("#jantan").text();
    var betina = $("#betina").text();
    var peternak = parseInt($("#peternak").text())-1;
    console.log(cek);
    console.log(jantan);
    $("#num").text(cek);
    $("#numa").text(peternak);
    $("#jantan_").text(jantan);
    $("#betina_").text(betina);

    });
    </script>