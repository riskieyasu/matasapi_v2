<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewUser */
/* @var $form ActiveForm */
$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container" style="width:50%">
<div class="site-register" style="color:grey;text-align:center;">
    <h1><?= Html::encode($this->title) ?></h1><br>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-2 col-form-label mr-md-1'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
    ]); ?>

        <?= $form->field($model, 'username') ->textInput()?>
        <?= $form->field($model, 'email') ->textInput()?>
        <?= $form->field($model, 'password')-> passwordInput() ?>
     
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-register -->
</div>