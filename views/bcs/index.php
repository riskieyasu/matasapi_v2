<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BcsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bcs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bcs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bcs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tulangbelakang',
            'tulangiga',
            'lemakdada',
            'lemakekor',
            //'penyusutanotot',
            //'fisiksapi',
            //'sapi_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Bcs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
