<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\T00040ServicioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t00040-servicio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Co_Servicio') ?>

    <?= $form->field($model, 'Nb_Servicio') ?>

    <?= $form->field($model, 'Co_App_Id') ?>

    <?= $form->field($model, 'Co_URL') ?>

    <?= $form->field($model, 'Co_Password') ?>

    <?php // echo $form->field($model, 'Co_Inquilino') ?>

    <?php // echo $form->field($model, 'Co_IP') ?>

    <?php // echo $form->field($model, 'St_Activo') ?>

    <?php // echo $form->field($model, 'Co_Auditoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
