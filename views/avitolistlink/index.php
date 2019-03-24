<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AvitolistlinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Список объявлений');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avitolistlink-index">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

<!--    <p>
        <?/*= Html::a(Yii::t('app', 'Добавить объявление'), ['create'], ['class' => 'btn btn-success']) */?>
    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-striped table-bordered asu-table',

        ],

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => '',
                'value' => function($data){
                    //var_dump($data->avitoadverts);
                    $model = \app\models\Advertimages::find()->select(['host', 'image','small'])->where(['adver_id' => $data->avitoadverts[0]->id])->one();
                    //var_dump($model['host']);
                    return '<img src="http://'.$model['host'].'/'.$model['small'].'/'.$model['image'].'" alt="">';
                },
                'label' => 'фото',
                'format' => 'html'
            ],
            [
                'attribute' => 'name',
                'value' => function($data){
                    return "<a href='https://www.avito.ru".$data->link."'>$data->name</a>";
                },
                'label' => 'марка',
                'format' => 'html'
            ],

            [
                'attribute' => 'price',
                'value' => function($data){

                    return number_format($data->avitoadverts[0]->price, 0, '', ' ' );
                },
                'label' => 'Цена'

            ],

            [
                'attribute' => 'condition',
                'value' => function($data){
                    return $data->avitoadverts[0]->condition;
                },
                'label' => 'состояние'
            ],
            [
                'attribute' => 'owners',
                'value' => function($data){
                    return $data->avitoadverts[0]->owners;
                },
                'label' => 'Вл. по ПТС'
            ],
            [
                'attribute' => 'mileage',
                'value' => function($data){
                    return $data->avitoadverts[0]->mileage;
                },
                'label' => 'Пробег'
            ],
            [
                'attribute' => 'rudder',
                'value' => function($data){
                    return $data->avitoadverts[0]->rudder;
                },
                'label' => 'Руль'
            ],
            [
                'attribute' => 'drive',
                'value' => function($data){
                    return $data->avitoadverts[0]->drive;
                },
                'label' => 'Привод'
            ],
            [
                'attribute' => 'body_type',
                'value' => function($data){
                    return $data->avitoadverts[0]->body_type;
                },
                'label' => 'Тип кузова'
            ],
            [
                'attribute' => 'color',
                'value' => function($data){
                    return $data->avitoadverts[0]->color;
                },
                'label' => 'Цвет'
            ],
            [
                'attribute' => 'engine_capacity',
                'value' => function($data){
                    return $data->avitoadverts[0]->engine_capacity;
                },
                'label' => 'Об. двиг.'
            ],
            [
                'attribute' => 'model',
                'value' => function($data){
                    return $data->avitoadverts[0]->model;
                },
                'label' => 'Модель'
            ],
            [
                'attribute' => 'year_of_issue',
                'value' => function($data){
                    return $data->avitoadverts[0]->year_of_issue;
                },
                'label' => 'Год'
            ],
            [
                'attribute' => 'engine_type',
                'value' => function($data){
                    return $data->avitoadverts[0]->engine_type;
                },
                'label' => 'Тип двигателя'
            ],
            [
                'attribute' => 'transmission',
                'value' => function($data){
                    return $data->avitoadverts[0]->transmission;
                },
                'label' => 'Кор. передач'
            ],
            [
                'attribute' => 'engine_power',
                'value' => function($data){
                    return $data->avitoadverts[0]->engine_power;
                },
                'label' => 'Мощн. двc'
            ],
            [
                'attribute' => 'number_of_doors',
                'value' => function($data){
                    return $data->avitoadverts[0]->number_of_doors;
                },
                'label' => 'Кол. дв.'
            ],
            [
                'attribute' => 'vin',
                'value' => function($data){
                    return $data->avitoadverts[0]->vin;
                },
                'label' => 'VIN'
            ],
            [
                'attribute' => 'phone',
                'value' => function($data){
                    return $data->avitoadverts[0]->phone;
                },
                'label' => 'Телефон'
            ],
            'region:text:регион',
            [
                'attribute' => 'dtcreate',
                'value' => function($data){
                    return $data->avitoadverts[0]->dtcreate;
                },
                'label' => 'Дата созд.'
            ],
/*            [
                'attribute' => 'addr',
                'value' => function($data){
                    return $data->avitoadverts[0]->addr;
                },
                'label' => 'адрес'
            ],*/


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);

    ?>
</div>
