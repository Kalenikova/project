<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id_b
 * @property string $title
 * @property int|null $date_writing
 * @property int|null $id_g
 * @property int|null $id_a
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }
    
    public function getAuthor(){
        return $this->hasOne(Author::className(), ['id_a' => 'id_a']);
    }

    public function getGenre(){
        return $this->hasOne(Genre::className(), ['id_g' => 'id_g']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['date_writing', 'id_g', 'id_a'], 'integer'],
            [['title'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_b' => 'Id',
            'title' => 'Название',
            'date_writing' => 'Дата написания',
            'id_g' => 'Жанр',
            'id_a' => 'Автор',
        ];
    }
}
