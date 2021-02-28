<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T00070FuncionServicio */

$this->title = 'Create T00070 Funcion Servicio';
$this->params['breadcrumbs'][] = ['label' => 'T00070 Funcion Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t00070-funcion-servicio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
