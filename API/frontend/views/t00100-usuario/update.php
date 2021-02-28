<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T00100Usuario */

$this->title = 'Update T00100 Usuario: ' . $model->Co_Usuario;
$this->params['breadcrumbs'][] = ['label' => 'T00100 Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Co_Usuario, 'url' => ['view', 'id' => $model->Co_Usuario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="t00100-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
