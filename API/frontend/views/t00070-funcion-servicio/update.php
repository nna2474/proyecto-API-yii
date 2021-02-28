<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T00070FuncionServicio */

$this->title = 'Update T00070 Funcion Servicio: ' . $model->Co_Funcion_Servicio;
$this->params['breadcrumbs'][] = ['label' => 'T00070 Funcion Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Co_Funcion_Servicio, 'url' => ['view', 'id' => $model->Co_Funcion_Servicio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="t00070-funcion-servicio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
