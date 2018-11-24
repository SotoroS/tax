<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.11.2018
 * Time: 1:09
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <h3><?= Html::encode($this->title) ?></h3>
                <hr>

                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'login')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>