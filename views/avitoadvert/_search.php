<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AvitoadvertSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avitoadvert-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_link') ?>

    <?= $form->field($model, 'condition') ?>

    <?= $form->field($model, 'owners') ?>

    <?= $form->field($model, 'mileage') ?>

    <?php // echo $form->field($model, 'rudder') ?>

    <?php // echo $form->field($model, 'drive') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'engine_capacity') ?>

    <?php // echo $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'mark') ?>

    <?php // echo $form->field($model, 'year_of_issue') ?>

    <?php // echo $form->field($model, 'body_type') ?>

    <?php // echo $form->field($model, 'engine_type') ?>

    <?php // echo $form->field($model, 'transmission') ?>

    <?php // echo $form->field($model, 'engine_power') ?>

    <?php // echo $form->field($model, 'number_of_doors') ?>

    <?php // echo $form->field($model, 'vin') ?>

    <?php // echo $form->field($model, 'addr') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'dtcreate') ?>

    <?php // echo $form->field($model, 'timechange') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
