<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T99999Bitacora */

$this->title = 'Update T99999 Bitacora: ' . $model->Co_Bitacora;
$this->params['breadcrumbs'][] = ['label' => 'T99999 Bitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Co_Bitacora, 'url' => ['view', 'id' => $model->Co_Bitacora]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="t99999-bitacora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
