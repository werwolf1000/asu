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

                    $images = '<div class="slider">';

                    foreach($data->avitoadverts[0]->advertimages as $k => $img){
                        $images .= "<div class='item'>
                                        <img src='http://".$img->host."/".$img->big."/".$img->image."' alt='".$img->image."'>
                                        <div class='slideText'></div>
                                    </div>";
                    }

                    $images .= '<a class="prev" onclick="minusSlide()">&#10094;</a>';
                    $images .= '<a class="next" onclick="plusSlide()">&#10095;</a>';

                    $images .= '<div class="slider-dots">';
                    foreach($data->avitoadverts[0]->advertimages as $k => $img){
                        $images .= '<span class="slider-dots_item" onclick="currentSlide('.($k + 1).')"></span> ';
                    }
                    $images .= '</div>';


                   /* $images = '<div id="myCarousel" class="carousel slide" data-ride="carousel">';

                    $images .= ' <ol class="carousel-indicators">';
                    foreach($data->avitoadverts[0]->advertimages as $k => $img){
                        if(!$k){
                            $images .= '<li data-target="#myCarousel" data-slide-to="'.$k.'" class="active"></li>';
                        }else{
                            $images .= '<li data-target="#myCarousel" data-slide-to="2" ></li>';
                        }
                    }

                    //$images .= ' </ol>';
                    $images .=  '  <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                  </ol>';
                    $images .= '<div class="carousel-inner">';
                                
                                

                    foreach($data->avitoadverts[0]->advertimages as $k => $img){

                        if(!$k){
                            $images .=  " <div class='item active 1'>
                                      <img src='http://".$img->host."/".$img->big."/".$img->image."' alt='".$k."'>
                                    </div>";
                        }
                        else{
                            $images .=  " <div class='item'>
                                      <img src='http://".$img->host."/".$img->big."/".$img->image."' alt='".$k."'>
                                    </div>";
                        }
                    }
                    $images .=   '
                                </div>
                                <!-- Left and right controls -->
                                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>';*/
                    return $images;
                },
                'label' => '',
                'format' => 'raw'
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
