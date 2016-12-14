<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reparto */
/* @var $form ActiveForm */
?>
<div class="repartos-gestionar">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ficha_id') ?>
        <?= $form->field($model, 'persona_id') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- repartos-gestionar -->
