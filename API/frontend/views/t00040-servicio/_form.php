<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\T00040Servicio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t00040-servicio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nb_Servicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_App_Id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_URL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_Password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_Inquilino')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Co_IP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'St_Activo')->textInput() ?>

    <?= $form->field($model, 'Co_Auditoria')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
