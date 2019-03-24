<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Avitoadvert;

/**
 * AvitoadvertSearch represents the model behind the search form of `app\models\Avitoadvert`.
 */
class AvitoadvertSearch extends Avitoadvert
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_link'], 'integer'],
            [['condition', 'owners', 'mileage', 'rudder', 'drive', 'color', 'engine_capacity', 'model', 'mark', 'year_of_issue', 'body_type', 'engine_type', 'transmission', 'engine_power', 'number_of_doors', 'vin', 'addr', 'phone', 'dtcreate', 'timechange'], 'safe'],
            [['price'], 'number'],
        ];
    }

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
        $query = Avitoadvert::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
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
            'id_link' => $this->id_link,
            'price' => $this->price,
            'dtcreate' => $this->dtcreate,
            'timechange' => $this->timechange
        ]);

        $query->andFilterWhere(['like', 'condition', $this->condition])
            ->andFilterWhere(['like', 'owners', $this->owners])
            ->andFilterWhere(['like', 'mileage', $this->mileage])
            ->andFilterWhere(['like', 'rudder', $this->rudder])
            ->andFilterWhere(['like', 'drive', $this->drive])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'engine_capacity', $this->engine_capacity])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'mark', $this->mark])
            ->andFilterWhere(['like', 'year_of_issue', $this->year_of_issue])
            ->andFilterWhere(['like', 'body_type', $this->body_type])
            ->andFilterWhere(['like', 'engine_type', $this->engine_type])
            ->andFilterWhere(['like', 'transmission', $this->transmission])
            ->andFilterWhere(['like', 'engine_power', $this->engine_power])
            ->andFilterWhere(['like', 'number_of_doors', $this->number_of_doors])
            ->andFilterWhere(['like', 'vin', $this->vin])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
