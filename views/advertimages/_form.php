<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Advertimages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advertimages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adver_id')->textInput() ?>

    <?= $form->field($model, 'host')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'small')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'big')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtcreate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
