<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Delete extends Model
{
    public $id_a;    

    public function rules(){
        return[
            ['id_a', 'required'],
            //['id_a','integer']
        ];
    }

    public static function tableName(){
        return 'author';
    }
}
