<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\T99999Auditoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t99999-auditoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nb_Tabla')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_Fila')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_Tipo_Operacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tx_Sentencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tx_Error')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_Auditoria_Auditoria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_Usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_MAC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_IP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fe_Ins')->textInput() ?>

    <?= $form->field($model, 'St_Error')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
