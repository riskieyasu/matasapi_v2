<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Artikel */

$this->title = 'Update Artikel: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Artikels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="artikel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php
if(Yii::$app->user->isGuest){
    $script = <<< JS
  window.location.href="index.php";
    
JS;
    $this->registerJs($script);
   }

   else if(Yii::$app->user->identity->username=='Admin'){
    // if(Yii::$app->user->isGuest){
        $script = <<< JS
        $(".sapianda").css("display","none");
        $(".artikel").css("display","block");
    
    JS;
        $this->registerJs($script);
       }
       else{
        $script = <<< JS
        window.location.href="index.php";
          
      JS;
          $this->registerJs($script);
         }
       
?>