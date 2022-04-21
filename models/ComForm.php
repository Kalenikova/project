<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ComForm extends Model
{
    public $name;
    public $email;    
    public $age;
    public $date;
    public $kitchen;
    public $recomend;
    public $comment;

    public function rules()
    {
        return[
            [['name', 'email', 'age', 'date', 'kitchen', 'recomend', 'comment'], 'required', 'message'=>'Поле не может быть пустым'],
            ['name', 'string','length'=>[5,30]],
            ['email', 'email'],
            ['date','date'],
            [['age'], 'integer'],
            ['age', 'compare', 'compareValue' => 18, 'operator' => '>'],
            ['age', 'compare', 'compareValue' => 100, 'operator' => '<='],
            ['comment', 'trim']
        ];
    }
}
