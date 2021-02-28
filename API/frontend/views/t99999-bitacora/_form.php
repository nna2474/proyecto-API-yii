<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\T99999Bitacora */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t99999-bitacora-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Co_Bitacora_Previo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_Usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fe_Ins')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
