<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AvitoadvertSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Avitoadverts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avitoadvert-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Avitoadvert'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_link',
            'condition',
            'owners',
            'mileage',
            //'rudder',
            //'drive',
            //'color',
            //'engine_capacity',
            //'model',
            //'mark',
            //'year_of_issue',
            //'body_type',
            //'engine_type',
            //'transmission',
            //'engine_power',
            //'number_of_doors',
            //'vin',
            //'addr',
            //'price',
            //'dtcreate',
            //'timechange',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
