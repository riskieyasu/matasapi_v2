<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RiwayatpenyakitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riwayat Penyakit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayatpenyakit-index">

    <h1 style="text-align:center"><?= Html::encode($this->title) ?></h1>

    <p style="text-align:center">
        <?= Html::a('Create New Entry', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'sapi_id',
            'namapenyakit',
            'tanggalsakit',
            'tanggalsembuh',
            'pendiagnosa',
            'id',
            //'keterangan',
            //'sapi_id',
            [
                'header' => 'Action',
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index) {
                    return Url::toRoute([$action, 'id' => 8]);
                 }
            ],
        ],
    ]); ?>


</div>
