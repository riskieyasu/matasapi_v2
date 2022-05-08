<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userdata */

$this->title = 'Create Userdata';
$this->params['breadcrumbs'][] = ['label' => 'Userdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-create">

    <h1 style ="text-align:center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
