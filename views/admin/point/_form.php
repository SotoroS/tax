<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\point\Point */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="point-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'x')->textInput() ?>

    <?= $form->field($model, 'y')->textInput() ?>

    <?= $form->field($model, 'route_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
