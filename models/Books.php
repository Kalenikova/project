<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;

class Books extends ActiveRecord
{
    public $cnt;
    public function getAuthor(){
        return $this->hasOne(Author::className(), ['id_a' => 'id_a']);
    }

    public function getGenre(){
        return $this->hasOne(Genre::className(), ['id_g' => 'id_g']);
    }
}
