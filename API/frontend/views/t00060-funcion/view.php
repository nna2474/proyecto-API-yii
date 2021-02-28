<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\T00060Funcion */

$this->title = $model->Co_Funcion;
$this->params['breadcrumbs'][] = ['label' => 'T00060 Funcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="t00060-funcion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Co_Funcion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Co_Funcion], [
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
            'Co_Funcion',
            'Nb_Funcion',
            'Fe_Inicio',
            'Fe_Fin',
            'St_Activo',
            'Co_Auditoria',
        ],
    ]) ?>

</div>
