<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reparto */

$this->title = 'Añadir actor';
$this->params['breadcrumbs'][] = ['label' => 'Repartos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reparto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <h3><?= Html::encode($titulo->titulo) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'id' => $ficha_id,
    ]) ?>

</div>
