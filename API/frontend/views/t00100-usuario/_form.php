<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\T00100Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t00100-usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nb_Usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tx_Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nu_Movil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tx_Clave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tx_Patron')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nu_Intentos')->textInput() ?>

    <?= $form->field($model, 'Fe_Recuperacion')->textInput() ?>

    <?= $form->field($model, 'St_Bloqueo')->textInput() ?>

    <?= $form->field($model, 'St_Activo')->textInput() ?>

    <?= $form->field($model, 'Co_Auditoria')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
