<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T00060Funcion */

$this->title = 'Create T00060 Funcion';
$this->params['breadcrumbs'][] = ['label' => 'T00060 Funcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t00060-funcion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
