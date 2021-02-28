<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\T00060Funcion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t00060-funcion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nb_Funcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fe_Inicio')->textInput() ?>

    <?= $form->field($model, 'Fe_Fin')->textInput() ?>

    <?= $form->field($model, 'St_Activo')->textInput() ?>

    <?= $form->field($model, 'Co_Auditoria')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
