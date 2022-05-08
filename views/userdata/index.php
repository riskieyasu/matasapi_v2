<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserdataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Data';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="userdata-index" style="text-align:center">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p style="text-align:center">
        <?= Html::a('Create Userdata', ['create'], ['class' => 'btn btn-danger']) ?>
    </p>
</div>
<div class="userdata-index" style= "width:50%; margin:auto;">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'email:email',
            
             [
                'header' => 'Action',
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            
           
        ],
    ]); ?>


</div>
