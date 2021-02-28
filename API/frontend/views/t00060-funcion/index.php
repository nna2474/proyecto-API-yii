<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\T00060FuncionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'T00060 Funcions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t00060-funcion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create T00060 Funcion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Co_Funcion',
            'Nb_Funcion',
            'Fe_Inicio',
            'Fe_Fin',
            'St_Activo',
            //'Co_Auditoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
