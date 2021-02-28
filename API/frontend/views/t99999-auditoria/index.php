<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\T99999AuditoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'T99999 Auditorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t99999-auditoria-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create T99999 Auditoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Co_Auditoria',
            'Nb_Tabla',
            'Co_Fila',
            'Co_Tipo_Operacion',
            'Tx_Sentencia',
            //'Tx_Error',
            //'Co_Auditoria_Auditoria',
            //'Co_Usuario',
            //'Co_MAC',
            //'Co_IP',
            //'Fe_Ins',
            //'St_Error',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
