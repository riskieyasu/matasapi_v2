<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Artikel */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Artikels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="artikel-view">

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
            'judul',
            'kategori',
            'isi',
        ],
    ]) ?>

</div>
<br>
<br>
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