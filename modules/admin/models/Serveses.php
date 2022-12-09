<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "serveses".
 *
 * @property int $id
 * @property string|null $name_of_serves
 * @property int|null $price
 * @property int $type_of_serves
 *
 * @property Record[] $records
 * @property TypeOfServes $typeOfServes
 */
class Serveses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serveses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'type_of_serves'], 'integer'],
            [['type_of_serves'], 'required'],
            [['name_of_serves'], 'string', 'max' => 255],
            [['type_of_serves'], 'exist', 'skipOnError' => true, 'targetClass' => TypeOfServes::className(), 'targetAttribute' => ['type_of_serves' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_of_serves' => 'Name Of Serves',
            'price' => 'Price',
            'type_of_serves' => 'Type Of Serves',
        ];
    }

    /**
     * Gets query for [[Records]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['serves' => 'id']);
    }

    /**
     * Gets query for [[TypeOfServes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTypeOfServes()
    {
        return $this->hasOne(TypeOfServes::className(), ['id' => 'type_of_serves']);
    }
}
