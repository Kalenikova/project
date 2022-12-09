<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class AppAdminController extends Controller{
    public function behaviors(){
        return[
            'access'=>[
                'class' => AccessControl::className(),
                'rules' =>[
                    [
                        'actions' => ['record'],
                        'allow' => true,
                        'roles'=>['admin'],
                    ],
                    [
                        'actions' => ['record'],
                        'allow' => false,
                        'roles'=>['*'],
                    ],
                ]
            ]
        ];
    }
}
?>