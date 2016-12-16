<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Ficha */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Fichas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ficha-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'titulo',
            'anyo',
            'duracion',
            'director.nombre',
        ],
    ]) ?>

    <h2>Reparto</h2>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'persona.nombre',
        ],
    ]) ?>

    <div class="repartos-crear">

        <?php $form = ActiveForm::begin([
            'method' => 'get',
            'action' => ['repartos/create'],
        ]); ?>

            <?= Html::activeHiddenInput($model, 'id') ?>

            <div class="form-group">
                <?= yii\helpers\Html::submitButton('Añadir actor', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>

    </div>

</div>
