<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\T99999BitacoraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t99999-bitacora-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Co_Bitacora') ?>

    <?= $form->field($model, 'Co_Bitacora_Previo') ?>

    <?= $form->field($model, 'Co_Usuario') ?>

    <?= $form->field($model, 'Fe_Ins') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
