<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Avitolistlink */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Avitolistlinks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="avitolistlink-view container">

    <h1><?= Html::encode($this->title) ?></h1>
    <img src="" alt="">
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'image',
                'value' => function($data){
                    $images = '';
                    foreach($data->avitoadverts[0]->advertimages as $img){
                        $images .=   "<img src='http://".$img->host."/".$img->small."/".$img->image."'' alt=''>&nbsp;";
                    }
                    return $images;
                },
                'label' => '',
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
            'region:text:регион',
            [
                'attribute' => 'addr',
                'value' => function($data){
                    return $data->avitoadverts[0]->addr;
                },
                'label' => 'адрес'
            ],
            [
                'attribute' => 'price',
                'value' => function($data){
                    return $data->avitoadverts[0]->price;
                },
                'label' => 'Цена'

            ],

        ],
    ]) ?>

</div>
