<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T00060Funcion */

$this->title = 'Update T00060 Funcion: ' . $model->Co_Funcion;
$this->params['breadcrumbs'][] = ['label' => 'T00060 Funcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Co_Funcion, 'url' => ['view', 'id' => $model->Co_Funcion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="t00060-funcion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
