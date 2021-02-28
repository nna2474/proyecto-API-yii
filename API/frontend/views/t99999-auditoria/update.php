<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T99999Auditoria */

$this->title = 'Update T99999 Auditoria: ' . $model->Co_Auditoria;
$this->params['breadcrumbs'][] = ['label' => 'T99999 Auditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Co_Auditoria, 'url' => ['view', 'id' => $model->Co_Auditoria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="t99999-auditoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
