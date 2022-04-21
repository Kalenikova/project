<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $id_a
 * @property string|null $surname
 * @property string|null $name
 * @property string|null $midname
 * @property string|null $date_born
 * @property string|null $date_die
 * @property int|null $countbooks
 */
class Author extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_born', 'date_die'], 'safe'],
            [['countbooks'], 'integer'],
            [['surname', 'midname'], 'string', 'max' => 30],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_a' => 'Id',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'midname' => 'Отчесвто',
            'date_born' => 'Дата рождения',
            'date_die' => 'Дата смерти',
            //'countbooks' => 'Countbooks',
        ];
    }
}
