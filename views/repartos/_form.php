<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reparto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reparto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ficha_id')->hiddenInput([
        'value' => $ficha_id,
        ])->label(false) ?>

    <?= $form->field($model, 'persona_id')->dropDownList($nombres) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
