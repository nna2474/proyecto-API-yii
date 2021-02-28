<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\T00070FuncionServicioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t00070-funcion-servicio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Co_Funcion_Servicio') ?>

    <?= $form->field($model, 'Co_Funcion') ?>

    <?= $form->field($model, 'Co_Servicio_Inicio') ?>

    <?= $form->field($model, 'Co_Servicio_Fin') ?>

    <?= $form->field($model, 'St_Opcional') ?>

    <?php // echo $form->field($model, 'Nu_Orden') ?>

    <?php // echo $form->field($model, 'Ti_Minimo') ?>

    <?php // echo $form->field($model, 'Ti_Maximo') ?>

    <?php // echo $form->field($model, 'St_Activo') ?>

    <?php // echo $form->field($model, 'Co_Auditoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
