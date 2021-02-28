<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T00040Servicio */

$this->title = 'Update T00040 Servicio: ' . $model->Co_Servicio;
$this->params['breadcrumbs'][] = ['label' => 'T00040 Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Co_Servicio, 'url' => ['view', 'id' => $model->Co_Servicio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="t00040-servicio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
