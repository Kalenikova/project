<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Find extends Model
{
    public $title;    

    public function rules(){
        return[
            ['title', 'required'],
            ['title','string']
        ];
    }

    public static function tableName(){
        return 'books';
    }
}
