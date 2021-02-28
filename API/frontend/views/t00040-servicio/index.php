<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\T00040ServicioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'T00040 Servicios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t00040-servicio-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create T00040 Servicio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Co_Servicio',
            'Nb_Servicio',
            'Co_App_Id',
            'Co_URL:url',
            'Co_Password',
            //'Co_Inquilino',
            //'Co_IP',
            //'St_Activo',
            //'Co_Auditoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
