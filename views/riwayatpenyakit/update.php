<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Riwayatpenyakit */

$this->title = 'Update Riwayatpenyakit: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayatpenyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayatpenyakit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
