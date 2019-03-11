<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "advertimages".
 *
 * @property int $id
 * @property int $adver_id
 * @property string $host
 * @property string $image
 * @property string $small
 * @property string $big
 * @property string $dtcreate
 *
 * @property Avitoadvert $adver
 */
class Advertimages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advertimages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adver_id'], 'integer'],
            [['dtcreate'], 'safe'],
            [['host', 'image', 'small', 'big'], 'string', 'max' => 100],
            [['adver_id'], 'exist', 'skipOnError' => true, 'targetClass' => Avitoadvert::className(), 'targetAttribute' => ['adver_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'adver_id' => Yii::t('app', 'Adver ID'),
            'host' => Yii::t('app', 'Host'),
            'image' => Yii::t('app', 'Image'),
            'small' => Yii::t('app', 'Small'),
            'big' => Yii::t('app', 'Big'),
            'dtcreate' => Yii::t('app', 'Dtcreate'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdver()
    {
        return $this->hasOne(Avitoadvert::className(), ['id' => 'adver_id']);
    }
}
