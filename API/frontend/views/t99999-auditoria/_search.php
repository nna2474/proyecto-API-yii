<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\T99999AuditoriaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t99999-auditoria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Co_Auditoria') ?>

    <?= $form->field($model, 'Nb_Tabla') ?>

    <?= $form->field($model, 'Co_Fila') ?>

    <?= $form->field($model, 'Co_Tipo_Operacion') ?>

    <?= $form->field($model, 'Tx_Sentencia') ?>

    <?php // echo $form->field($model, 'Tx_Error') ?>

    <?php // echo $form->field($model, 'Co_Auditoria_Auditoria') ?>

    <?php // echo $form->field($model, 'Co_Usuario') ?>

    <?php // echo $form->field($model, 'Co_MAC') ?>

    <?php // echo $form->field($model, 'Co_IP') ?>

    <?php // echo $form->field($model, 'Fe_Ins') ?>

    <?php // echo $form->field($model, 'St_Error') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
