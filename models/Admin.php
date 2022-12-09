<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;

class Record extends ActiveRecord
{
    public function getServeses(){
        return $this->hasOne(Serveses::className(), ['id' => 'serves']);
    }

    public static function tableName(){
        return 'record';
    }

}
