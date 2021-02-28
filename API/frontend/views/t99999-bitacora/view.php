<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\T99999Bitacora */

$this->title = $model->Co_Bitacora;
$this->params['breadcrumbs'][] = ['label' => 'T99999 Bitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="t99999-bitacora-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Co_Bitacora], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Co_Bitacora], [
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
            'Co_Bitacora',
            'Co_Bitacora_Previo',
            'Co_Usuario',
            'Fe_Ins',
        ],
    ]) ?>

</div>
