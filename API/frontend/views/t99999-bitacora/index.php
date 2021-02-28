<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\T99999BitacoraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'T99999 Bitacoras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t99999-bitacora-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create T99999 Bitacora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Co_Bitacora',
            'Co_Bitacora_Previo',
            'Co_Usuario',
            'Fe_Ins',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
