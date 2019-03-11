<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Avitoadvert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avitoadvert-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_link')->textInput() ?>

    <?= $form->field($model, 'condition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owners')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mileage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rudder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drive')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'engine_capacity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_of_issue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'engine_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transmission')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'engine_power')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_of_doors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'dtcreate')->textInput() ?>

    <?= $form->field($model, 'timechange')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
