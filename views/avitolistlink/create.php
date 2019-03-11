<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Avitolistlink */

$this->title = Yii::t('app', 'Create Avitolistlink');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Avitolistlinks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avitolistlink-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
