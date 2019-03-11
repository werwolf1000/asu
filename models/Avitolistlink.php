<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "avitolistlink".
 *
 * @property int $id
 * @property string $link
 * @property string $name
 * @property string $year
 * @property string $region
 * @property string $dtcreate
 * @property string $timechange
 * @property int $process
 *
 * @property Avitoadvert[] $avitoadverts
 */
class Avitolistlink extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avitolistlink';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'dtcreate', 'timechange'], 'safe'],
            [['process'], 'integer'],
            [['link'], 'string', 'max' => 500],
            [['name', 'region'], 'string', 'max' => 100],
            [['link'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'link' => Yii::t('app', 'Link'),
            'name' => Yii::t('app', 'Name'),
            'year' => Yii::t('app', 'Year'),
            'region' => Yii::t('app', 'Region'),
            'dtcreate' => Yii::t('app', 'Dtcreate'),
            'timechange' => Yii::t('app', 'Timechange'),
            'process' => Yii::t('app', 'Process')
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvitoadverts()
    {
        return $this->hasMany(Avitoadvert::className(), ['id_link' => 'id']);
    }


}
