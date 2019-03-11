<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AvitolistlinkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avitolistlink-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'dtcreate') ?>

    <?php // echo $form->field($model, 'timechange') ?>

    <?php // echo $form->field($model, 'process') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
