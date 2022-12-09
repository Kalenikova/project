<?php

namespace app\controllers;

use app\models\ComForm;
use app\models\Author;
use app\models\Genre;
use app\models\Books;
use app\models\Record;
use app\models\Find;
use app\models\Delete;
use app\models\Reg;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\db\ActiveRecord;

class LabsController extends Controller
{



    public function actionInfo()
    {
        return $this->render('info');
    }


    public function actionReg(){
        $mod = new Reg();

        if ($mod->load(Yii::$app->request->post()) && $mod->save()) {
            return $this->redirect(['/site/login']);
        } else {
            return $this->render('reg', [
                'mod' => $mod,
            ]);
        }
        
    }


    /*public function actionRole(){
            $admin = Yii::$app->authManager->createRole('admin');
            $admin->description = 'Администратор';
            Yii::$app->authManager->add($admin);
    
            $client = Yii::$app->authManager->createRole('client');
            $client->description = 'Клиент';
            Yii::$app->authManager->add($client);
    
            $permit = Yii::$app->authManager->createPermission('canAdmin');
            $permit->description = 'Право входа в админку';
            Yii::$app->authManager->add($permit);
    
            $role = Yii::$app->authManager->getRole('admin');
            $permit= Yii::$app->authManager->getPermission('canAdmin');
            Yii::$app->authManager->addChild($role, $permit);
    
            $userRole = Yii::$app->authManager->getRole('admin');
            Yii::$app->authManager->assign($userRole, 1);

            $userRole = Yii::$app->authManager->getRole('client');
            Yii::$app->authManager->assign($userRole, 2);
            $userRole = Yii::$app->authManager->getRole('client');
            Yii::$app->authManager->assign($userRole, 4);
    
            return 123124;
        }*/
}
