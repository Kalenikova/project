<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property int $id_g
 * @property string|null $name_genre
 * @property int|null $countbooks
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_g'], 'required'],
            [['id_g', 'countbooks'], 'integer'],
            [['name_genre'], 'string', 'max' => 20],
            [['id_g'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_g' => 'Id G',
            'name_genre' => 'Name Genre',
            //'countbooks' => 'Countbooks',
        ];
    }
}
