<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InputClient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="input-client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hospcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kpi_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
