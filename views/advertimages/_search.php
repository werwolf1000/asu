<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdvertimagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advertimages-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'adver_id') ?>

    <?= $form->field($model, 'host') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'small') ?>

    <?php // echo $form->field($model, 'big') ?>

    <?php // echo $form->field($model, 'dtcreate') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
