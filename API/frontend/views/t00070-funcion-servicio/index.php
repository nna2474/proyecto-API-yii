<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\T00070FuncionServicioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'T00070 Funcion Servicios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t00070-funcion-servicio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create T00070 Funcion Servicio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Co_Funcion_Servicio',
            'Co_Funcion',
            'Co_Servicio_Inicio',
            'Co_Servicio_Fin',
            'St_Opcional',
            //'Nu_Orden',
            //'Ti_Minimo',
            //'Ti_Maximo',
            //'St_Activo',
            //'Co_Auditoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
