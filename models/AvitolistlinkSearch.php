<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Avitolistlink;

/**
 * AvitolistlinkSearch represents the model behind the search form of `app\models\Avitolistlink`.
 */
class AvitolistlinkSearch extends Avitolistlink
{

    public $price;
    public $condition;
    public $owners;
    public $mileage;
    public $rudder;
    public $drive;
    public $color;
    public $engine_capacity;
    public $model;
    public $mark;
    public $year_of_issue;
    public $body_type;
    public $engine_type;
    public $transmission;
    public $engine_power;
    public $number_of_doors;
    public $vin;
    public $addr;
    public $phone;
    public $from_price;
    public $to_price;
    public $from_engine_capacity;
    public $to_engine_capacity;
    public $from_engine_power;
    public $to_engine_power;
    public $from_year_of_issue;
    public $to_year_of_issue;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'process'], 'integer'],
            [
                [
                    'link',
                    'name',
                  //  'year',
                    'region',
                    'dtcreate',
                    'timechange',
                    'condition',
                    'owners',
                    'mileage',
                    'rudder',
                    'drive',
                    'color',
                  //  'engine_capacity',
                    'model',
                    'mark',
                    'year_of_issue',
                    'body_type',
                    'engine_type',
                    'transmission',
                   // 'engine_power',
                    'number_of_doors',
                    'vin',
                    'addr',
                    //'price',
                    'from_price',
                    'to_price',
                    'phone',
                    'dtcreate',
                    'from_engine_capacity',
                    'to_engine_capacity',
                    'from_engine_power',
                    'to_engine_power',
                    'from_year_of_issue',
                    'to_year_of_issue'
                ], 'safe'],
        ];
    }

    /*
     'condition' => Yii::t('app', 'состояние'),
'owners' => Yii::t('app', 'Владельцев по ПТС'),
'mileage' => Yii::t('app', 'Пробег'),
'rudder' => Yii::t('app', 'Руль'),
'drive' => Yii::t('app', 'Привод'),
'color' => Yii::t('app', 'Цвет'),
'engine_capacity' => Yii::t('app', 'Объём двигателя'),
'model' => Yii::t('app', 'Модель'),
'mark' => Yii::t('app', 'Марка'),
'year_of_issue' => Yii::t('app', 'Год выпуска'),
'body_type' => Yii::t('app', 'Тип кузова'),
'engine_type' => Yii::t('app', 'Тип двигателя'),
'transmission' => Yii::t('app', 'Коробка передач'),
'engine_power' => Yii::t('app', 'Мощность двигателя'),
'number_of_doors' => Yii::t('app', 'Количество дверей'),
'vin' => Yii::t('app', 'VIN или номер кузова'),
'addr' => Yii::t('app', 'адрес'),
     * */


    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {

        $query = Avitolistlink::find()->joinWith(['avitoadverts']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 100,
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }



        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'year' => $this->year,
            'timechange' => $this->timechange,
            'process' => $this->process
        ]);

        $query->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'region', $this->region]);

        $query->andFilterWhere(['like','avitoadvert.condition',$this->condition]);
        $query->andFilterWhere(['like','avitoadvert.owners',$this->owners]);
        $query->andFilterWhere(['like','avitoadvert.mileage',$this->mileage]);
        $query->andFilterWhere(['like','avitoadvert.rudder',$this->rudder]);
        $query->andFilterWhere(['like','avitoadvert.drive',$this->drive]);
        $query->andFilterWhere(['like','avitoadvert.color',$this->color]);
        $query->andFilterWhere(['like','avitoadvert.engine_capacity',$this->engine_capacity]);
        $query->andFilterWhere(['like','avitoadvert.model',$this->model]);
        $query->andFilterWhere(['like','avitoadvert.mark',$this->mark]);
        $query->andFilterWhere(['like','avitoadvert.year_of_issue',$this->year_of_issue]);
        $query->andFilterWhere(['like','avitoadvert.body_type',$this->body_type]);
        $query->andFilterWhere(['like','avitoadvert.engine_type',$this->engine_type]);
        $query->andFilterWhere(['like','avitoadvert.transmission',$this->transmission]);
        $query->andFilterWhere(['like','avitoadvert.engine_power',$this->engine_power]);
        $query->andFilterWhere(['like','avitoadvert.number_of_doors',$this->number_of_doors]);
        $query->andFilterWhere(['like','avitoadvert.vin',$this->vin]);
        $query->andFilterWhere(['like','avitoadvert.addr',$this->addr]);
        $query->andFilterWhere(['like','avitoadvert.price', $this->price]);
        $query->andFilterWhere(['between','avitoadvert.price',$this->from_price, $this->to_price]);
        $query->andFilterWhere(['like','avitoadvert.phone', $this->phone]);
        $query->andFilterWhere(['like','avitoadvert.dtcreate', $this->dtcreate]);

        $query->andFilterWhere(['between','avitoadvert.engine_capacity',$this->from_engine_capacity, $this->to_engine_capacity]);
        $query->andFilterWhere(['between','avitoadvert.engine_power',$this->from_engine_power, $this->to_engine_power]);
        $query->andFilterWhere(['between','avitoadvert.year_of_issue',$this->from_year_of_issue, $this->to_year_of_issue]);

        return $dataProvider;
    }




}
