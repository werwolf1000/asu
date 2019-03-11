<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Avitoadvert */

$this->title = Yii::t('app', 'Create Avitoadvert');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Avitoadverts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avitoadvert-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
