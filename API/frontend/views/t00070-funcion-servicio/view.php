<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\T00070FuncionServicio */

$this->title = $model->Co_Funcion_Servicio;
$this->params['breadcrumbs'][] = ['label' => 'T00070 Funcion Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="t00070-funcion-servicio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Co_Funcion_Servicio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Co_Funcion_Servicio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Co_Funcion_Servicio',
            'Co_Funcion',
            'Co_Servicio_Inicio',
            'Co_Servicio_Fin',
            'St_Opcional',
            'Nu_Orden',
            'Ti_Minimo',
            'Ti_Maximo',
            'St_Activo',
            'Co_Auditoria',
        ],
    ]) ?>

</div>
