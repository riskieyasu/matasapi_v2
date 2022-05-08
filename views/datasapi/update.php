<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datasapi */

$this->title = 'Update Datasapi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Datasapis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datasapi-update">
<div class="datasapi-create" style="background-color:white; width:70%; margin-left:100px; border-style: solid; border-color:black;">
    <br><h3 style="margin-bottom:-10px; margin-left:70px;color:black;"><?= Html::encode($this->title) ?></h3><hr><div style="width:50%; margin:auto; margin-left:120px; padding-bottom:10px;">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
</div>
