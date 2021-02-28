<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\T00100Usuario */

$this->title = $model->Co_Usuario;
$this->params['breadcrumbs'][] = ['label' => 'T00100 Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="t00100-usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Co_Usuario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Co_Usuario], [
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
            'Co_Usuario',
            'Nb_Usuario',
            'Tx_Email:email',
            'Nu_Movil',
            'Tx_Clave',
            'Tx_Patron',
            'Nu_Intentos',
            'Fe_Recuperacion',
            'St_Bloqueo',
            'St_Activo',
            'Co_Auditoria',
        ],
    ]) ?>

</div>
