<?php

namespace app\controllers;

use app\models\ComForm;
use app\models\Author;
use app\models\Genre;
use app\models\Books;
use app\models\NewAuthor;
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

    public function actionLab1()
    {
        $model = new ComForm();
        return $this->render('lab1', ['model' => $model]);
    }

    public function actionLab2()
    {
        return $this->render('lab2');
    }

    public function actionLab3()
    {
        return $this->render('lab3');
    }

    public function actionAuthor()
    {
        $model = new Delete();
        $del = null;
        $authors = author::find()->all();
        if ($model->load(Yii::$app->request->post())) {
            $del = author::deleteAll('id_a = :id_a', [':id_a' => $model->id_a]);
            $this->refresh();
        }
        return $this->render('author', ['authors' => $authors, 'model' => $model, 'del' => $del]);
    }

    public function actionGenre()
    {
        $genres = genre::find()->all();
        return $this->render('genre', ['genres' => $genres]);
    }

    public function actionBooks()
    {

        $books = books::find()->all();
        $centery = books::find()->where(['between', 'date_writing', '1900', '2001'])->orderby('date_writing')->all();
        $countb = books::find()->select(['COUNT(title) AS cnt', 'id_a'])->groupBy('id_a')->all();
        return $this->render('books', ['books' => $books, 'centery' => $centery, 'countb' => $countb]);


        /*$model = new Find();
        if ($model->load(Yii::$app->request->post())) {
            $books = books::find()->where(['like', 'title', $model->title])->all();
        } else {
            $books = books::find()->all();
        }
        return $this->render('books', ['books' => $books, 'centery' => $centery, 'countb' => $countb, 'model' => $model]);*/
    }



    public function actionNewauthor()
    {
        $mod = new NewAuthor();
        if ($mod->load(Yii::$app->request->post()) && $mod->save()) {
            return $this->redirect(['labs/author']);
        } else {
            return $this->render('newauthor', [
                'mod' => $mod,
            ]);
        }
    }

    public function actionFind()
    {
        $model = new Find();
        if($model->load(Yii::$app->request->post())){
        $books = books::find()->where(['like','title',$model->title])->all();
    } else {
        $books=books::find()->all();
    }
        return $this->render('find', ['model'=>$model, 'books'=>$books]);
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
}
