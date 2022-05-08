<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArtikelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artikels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artikel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Artikel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'judul',
            'kategori',
            'isi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
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

</div>
