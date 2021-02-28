<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T00040Servicio */

$this->title = 'Create T00040 Servicio';
$this->params['breadcrumbs'][] = ['label' => 'T00040 Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t00040-servicio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
