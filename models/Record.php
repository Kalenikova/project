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

    public function rules(){
        return[
            [['FIO','telefone','serves'],'required'],
            [['serves','date', 'time'], 'unique', 'targetAttribute' => ['date', 'time','serves'], 'message'=>'Выбранное Вами время на данную услугу занято. Пожалуйста, выберете другое время или дату']
        ];
    }
}
