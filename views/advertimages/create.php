<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Advertimages */

$this->title = Yii::t('app', 'Create Advertimages');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Advertimages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertimages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
