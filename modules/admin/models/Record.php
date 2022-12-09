<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "record".
 *
 * @property int $id
 * @property string|null $FIO
 * @property int|null $telefone
 * @property int|null $serves
 * @property string|null $date
 * @property string|null $confirmation
 *
 * @property Serveses $serves0
 */
class Record extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'record';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['telefone', 'serves'], 'integer'],
            [['date'], 'safe'],
            [['FIO', 'confirmation'], 'string', 'max' => 255],
            [['serves'], 'exist', 'skipOnError' => true, 'targetClass' => Serveses::className(), 'targetAttribute' => ['serves' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FIO' => 'ФИО',
            'telefone' => 'Телефон',
            'serves' => 'Услуга',
            'date' => 'Дата',
            'time' => 'Время',
            'confirmation' => 'Подтверждение',
        ];
    }

    /**
     * Gets query for [[Serves0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServeses()
    {
        return $this->hasOne(Serveses::className(), ['id' => 'serves']);
    }
}
