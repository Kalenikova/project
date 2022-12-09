<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "type_of_serves".
 *
 * @property int $id
 * @property string|null $type
 *
 * @property Serveses[] $serveses
 */
class TypeOfServes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_of_serves';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
        ];
    }

    /**
     * Gets query for [[Serveses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServeses()
    {
        return $this->hasMany(Serveses::className(), ['type_of_serves' => 'id']);
    }
}
