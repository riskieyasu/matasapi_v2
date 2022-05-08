<div class="site-index">
<div class="jumbotron text-center" style="margin-top:10px;">
        <h1 style="font-size:40px;">Kumpulan Artikel Riwayat Vaksinasi</h1>
    <br>
      
    <?php
$query=new \yii\db\Query(); 

$rows=$query->select(['id','judul','isi','foto']) //specify required columns in an array
             ->from('artikel') //specify table name
             ->where(['kategori' => 'Riwayat Vaksinasi'])
             ->all(); 
            
             foreach ($rows as $row) {
                 $cek = $row['id'];
             echo '<div class="bcs-create" style="background-color:white; width:105%; margin:auto; border-style: solid; border-width:1px; border-color:black;">';
             echo "<p id='peternak' style='display:block; margin-top:10px;' > ".$row['judul']."</p>" ;
             echo "<img src='../web/uploads/Riwayat Vaksinasi-$cek.jpg' alt='Italian Trulli' width='440' height='230'>';";
             echo "<p id='peternak' style='display:block; margin-left:10px; margin-right:10px; margin-top:30px; text-indent: 30px;font-size:14px; color:black; text-align: justify; text-justify: inter-word;'> ".$row['isi']."</p>" ;
            echo '</div><br><br>';
            }
             ?>
    </div>

    <?php
    if(Yii::$app->user->isGuest){
        $script = <<< JS
        $(".sapianda").css("display","block");
        
    JS;
        $this->registerJs($script);
       }
     else if(Yii::$app->user->identity->username=='Admin'){
    
        $script = <<< JS
        $(".sapianda").css("display","none");
        $(".artikel").css("display","block");
    JS;
        $this->registerJs($script);
    }
       else{
        $script_1 = <<< JS
        $(".sapianda").css("display","block");  
    JS;
        $this->registerJs($script_1);
       }
    ?>