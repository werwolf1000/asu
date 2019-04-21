<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AvitolistlinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Список объявлений');
$this->params['breadcrumbs'][] = $this->title;
var_dump($get);
?>

<div class="avitolistlink-index">


    <div class="container-fluid ">

        <form action="/" method="get">



            <div class="row">
                <div class="col-md-2">
                    <div class="input-group">
                        <label>цена от</label>
                        <input type="text" class="form-control" placeholder="цена от" name="AvitolistlinkSearch[from_price]">
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="col-md-2">
                    <div class="input-group">
                        <label>цена до</label>
                        <input type="text" class="form-control" placeholder="цена до" name="AvitolistlinkSearch[to_price]">
                    </div><!-- /input-group -->
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <label>Об. двиг. от</label>
                        <input type="text" class="form-control" placeholder="цена до" name="AvitolistlinkSearch[from_engine_capacity]">
                    </div><!-- /input-group -->
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <label>Об. двиг. до</label>
                        <input type="text" class="form-control" placeholder="цена до" name="AvitolistlinkSearch[to_engine_capacity]">
                    </div><!-- /input-group -->
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <label>Мощн. двc от</label>
                        <input type="text" class="form-control" placeholder="цена до" name="AvitolistlinkSearch[from_engine_power]">
                    </div><!-- /input-group -->
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <label>Мощн. двc до</label>
                        <input type="text" class="form-control" placeholder="цена до" name="AvitolistlinkSearch[to_engine_power]">
                    </div><!-- /input-group -->
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <label>Год от</label>
                        <input type="text" class="form-control" placeholder="цена до" name="AvitolistlinkSearch[from_year_of_issue]">
                    </div><!-- /input-group -->
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <label>Год до</label>
                        <input type="text" class="form-control" placeholder="цена до" name="AvitolistlinkSearch[to_year_of_issue]">
                    </div><!-- /input-group -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <input type="submit" class="btn btn-primary" value="искать">
                </div>
            </div>
        </form>

    </div>
    <h3 class="text-center"><?= Html::encode($this->title) ?></h3>

    <!--    <p>
        <? /*= Html::a(Yii::t('app', 'Добавить объявление'), ['create'], ['class' => 'btn btn-success']) */ ?>
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
                'attribute' => 'dtcreate',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->dtcreate;
                },
                'label' => 'Дата созд.'
            ],

            [
                'attribute' => '',
                'value' => function ($data) {
                    //var_dump($data->avitoadverts);
                    $model = \app\models\Advertimages::find()->select(['host', 'image', 'small'])->where(['adver_id' => $data->avitoadverts[0]->id])->one();
                    //var_dump($model['host']);
                    return '<a href="/avitolistlink/view?id=' . $data->id . '"><img src="http://' . $model['host'] . '/' . $model['small'] . '/' . $model['image'] . '" alt=""></a>';
                },
                'label' => 'фото',
                'format' => 'html'
            ],
            [
                'attribute' => 'name',
                'value' => function ($data) {
                    return "<a href='https://www.avito.ru" . $data->link . "'>$data->name</a>";
                },
                'label' => 'марка',
                'format' => 'html'
            ],

            [
                'attribute' => 'price',
                'value' => function ($data) {

                    return number_format($data->avitoadverts[0]->price, 0, '', ' ');
                },
                'label' => 'Цена'

            ],

            [
                'attribute' => 'condition',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->condition;
                },
                'label' => 'состояние'
            ],
            [
                'attribute' => 'owners',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->owners;
                },
                'label' => 'Вл. по ПТС'
            ],
            [
                'attribute' => 'mileage',
                'value' => function ($data) {
                    return number_format($data->avitoadverts[0]->mileage, 0, '', ' ');
                },
                'label' => 'Пробег'
            ],
            [
                'attribute' => 'rudder',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->rudder;
                },
                'label' => 'Руль'
            ],
            [
                'attribute' => 'drive',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->drive;
                },
                'label' => 'Привод'
            ],
            [
                'attribute' => 'body_type',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->body_type;
                },
                'label' => 'Тип кузова'
            ],
            [

                //http://asu.localhost/?AvitolistlinkSearch%5Bname%5D=&AvitolistlinkSearch%5Bprice%5D=&AvitolistlinkSearch%5Bcondition%5D=&AvitolistlinkSearch%5Bowners%5D=&AvitolistlinkSearch%5Bmileage%5D=&AvitolistlinkSearch%5Brudder%5D=&AvitolistlinkSearch%5Bdrive%5D=&AvitolistlinkSearch%5Bbody_type%5D=&AvitolistlinkSearch%5Bcolor%5D=%D1%81%D0%B8%D0%BD%D0%B8%D0%B9&AvitolistlinkSearch%5Bengine_capacity%5D=&AvitolistlinkSearch%5Bmodel%5D=&AvitolistlinkSearch%5Byear_of_issue%5D=&AvitolistlinkSearch%5Bengine_type%5D=&AvitolistlinkSearch%5Btransmission%5D=&AvitolistlinkSearch%5Bengine_power%5D=&AvitolistlinkSearch%5Bnumber_of_doors%5D=&AvitolistlinkSearch%5Bvin%5D=&AvitolistlinkSearch%5Bphone%5D=&AvitolistlinkSearch%5Bregion%5D=&AvitolistlinkSearch%5Bdtcreate%5D=
                'attribute' => 'color',
                'value' => function ($data) {

                    //?AvitolistlinkSearch[color]=синий
                    return '<a href="/?AvitolistlinkSearch[color]=' . $data->avitoadverts[0]->color . '">' . $data->avitoadverts[0]->color . '</a>';
                },
                'format' => 'html',
                'label' => 'Цвет'
            ],
            [
                'attribute' => 'engine_capacity',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->engine_capacity;
                },
                'label' => 'Об. двиг.'
            ],
            [
                'attribute' => 'model',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->model;
                },
                'label' => 'Модель'
            ],
            [
                'attribute' => 'year_of_issue',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->year_of_issue;
                },
                'label' => 'Год'
            ],
            [
                'attribute' => 'engine_type',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->engine_type;
                },
                'label' => 'Тип двигателя'
            ],
            [
                'attribute' => 'transmission',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->transmission;
                },
                'label' => 'Кор. передач'
            ],
            [
                'attribute' => 'engine_power',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->engine_power;
                },
                'label' => 'Мощн. двc'
            ],
            [
                'attribute' => 'number_of_doors',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->number_of_doors;
                },
                'label' => 'Кол. дв.'
            ],
            [
                'attribute' => 'vin',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->vin;
                },
                'label' => 'VIN'
            ],
            [
                'attribute' => 'phone',
                'value' => function ($data) {
                    return $data->avitoadverts[0]->phone;
                },
                'label' => 'Телефон'
            ],
            'region:text:регион',

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
