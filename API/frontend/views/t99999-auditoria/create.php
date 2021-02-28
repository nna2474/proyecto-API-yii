<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T99999Auditoria */

$this->title = 'Create T99999 Auditoria';
$this->params['breadcrumbs'][] = ['label' => 'T99999 Auditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t99999-auditoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
