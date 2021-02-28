<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\T00100Usuario */

$this->title = 'Create T00100 Usuario';
$this->params['breadcrumbs'][] = ['label' => 'T00100 Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="t00100-usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
