<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\T00100UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'T00100 Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t00100-usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create T00100 Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Co_Usuario',
            'Nb_Usuario',
            'Tx_Email:email',
            'Nu_Movil',
            'Tx_Clave',
            //'Tx_Patron',
            //'Nu_Intentos',
            //'Fe_Recuperacion',
            //'St_Bloqueo',
            //'St_Activo',
            //'Co_Auditoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
