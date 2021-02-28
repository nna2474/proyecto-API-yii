<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\T00100UsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t00100-usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Co_Usuario') ?>

    <?= $form->field($model, 'Nb_Usuario') ?>

    <?= $form->field($model, 'Tx_Email') ?>

    <?= $form->field($model, 'Nu_Movil') ?>

    <?= $form->field($model, 'Tx_Clave') ?>

    <?php // echo $form->field($model, 'Tx_Patron') ?>

    <?php // echo $form->field($model, 'Nu_Intentos') ?>

    <?php // echo $form->field($model, 'Fe_Recuperacion') ?>

    <?php // echo $form->field($model, 'St_Bloqueo') ?>

    <?php // echo $form->field($model, 'St_Activo') ?>

    <?php // echo $form->field($model, 'Co_Auditoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
