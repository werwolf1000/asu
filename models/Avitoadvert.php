<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "avitoadvert".
 *
 * @property int $id
 * @property int $id_link
 * @property string $condition состояние
 * @property string $owners Владельцев по ПТС
 * @property string $mileage Пробег
 * @property string $rudder Руль
 * @property string $drive Привод
 * @property string $color Цвет
 * @property string $engine_capacity Объём двигателя
 * @property string $model Модель
 * @property string $mark Марка
 * @property string $year_of_issue Год выпуска
 * @property string $body_type Тип кузова
 * @property string $engine_type Тип двигателя
 * @property string $transmission Коробка передач
 * @property string $engine_power Мощность двигателя
 * @property string $number_of_doors Количество дверей
 * @property string $vin VIN или номер кузова
 * @property string $addr адрес
 * @property double $price
 * @property string $dtcreate
 * @property string $timechange
 *
 * @property Advertimages[] $advertimages
 * @property Avitolistlink $link
 */
class Avitoadvert extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avitoadvert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_link'], 'integer'],
            [['price'], 'number'],
            [['dtcreate', 'timechange'], 'safe'],
            [['condition', 'owners', 'mileage', 'rudder', 'drive', 'color', 'engine_capacity', 'model', 'mark', 'year_of_issue', 'body_type', 'engine_type', 'transmission', 'engine_power', 'number_of_doors', 'vin'], 'string', 'max' => 100],
            [['addr'], 'string', 'max' => 500],
            [['id_link'], 'exist', 'skipOnError' => true, 'targetClass' => Avitolistlink::className(), 'targetAttribute' => ['id_link' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_link' => Yii::t('app', 'Id Link'),
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
            'price' => Yii::t('app', 'Price'),
            'dtcreate' => Yii::t('app', 'Dtcreate'),
            'timechange' => Yii::t('app', 'Timechange'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvertimages()
    {
        return $this->hasMany(Advertimages::className(), ['adver_id' => 'id']);
    }





    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLink()
    {
        return $this->hasOne(Avitolistlink::className(), ['id' => 'id_link']);
    }
}
