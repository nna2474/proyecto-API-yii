<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\T99999Auditoria */

$this->title = $model->Co_Auditoria;
$this->params['breadcrumbs'][] = ['label' => 'T99999 Auditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="t99999-auditoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Co_Auditoria], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Co_Auditoria], [
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
            'Co_Auditoria',
            'Nb_Tabla',
            'Co_Fila',
            'Co_Tipo_Operacion',
            'Tx_Sentencia',
            'Tx_Error',
            'Co_Auditoria_Auditoria',
            'Co_Usuario',
            'Co_MAC',
            'Co_IP',
            'Fe_Ins',
            'St_Error',
        ],
    ]) ?>

</div>
