<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\T00070FuncionServicio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="t00070-funcion-servicio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Co_Funcion')->textInput() ?>

    <?= $form->field($model, 'Co_Servicio_Inicio')->textInput() ?>

    <?= $form->field($model, 'Co_Servicio_Fin')->textInput() ?>

    <?= $form->field($model, 'St_Opcional')->textInput() ?>

    <?= $form->field($model, 'Nu_Orden')->textInput() ?>

    <?= $form->field($model, 'Ti_Minimo')->textInput() ?>

    <?= $form->field($model, 'Ti_Maximo')->textInput() ?>

    <?= $form->field($model, 'St_Activo')->textInput() ?>

    <?= $form->field($model, 'Co_Auditoria')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
