<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;

class NewAuthor extends ActiveRecord
{
    public static function tableName(){
        return 'author';
    }

    public function rules(){
        return[
            [['surname','name','midname'],'required'],
            [['date_born','date_die'],'date','format'=>'php:Y-m-d']
        ];
    }
}
