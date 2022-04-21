<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Books;
use app\modules\admin\models\BooksSearch;
use app\modules\admin\models\Genre;
use app\modules\admin\models\Author;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BooksController implements the CRUD actions for Books model.
 */
class BooksController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Books models.
     *
     * @return string
     */
    public function actionIndex()
    {   
        $searchModel = new BooksSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);        
        


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    /**
     * Displays a single Books model.
     * @param int $id_b Id B
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_b)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_b),
        ]);
    }

    /**
     * Creates a new Books model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Books();

        $modelGenre = Genre::find()->orderBy('name_genre ASC')->all();
        foreach ($modelGenre as $value) {
            $arrGenre[$value->id_g] = $value->name_genre;
        }

        $modelAuthor = Author::find()->orderBy('surname ASC')->all();
        foreach ($modelAuthor as $value) {
            $arrAuthor[$value->id_a] = $value->surname;
        }

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_b' => $model->id_b]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'arrGenre' => $arrGenre,
            'arrAuthor' => $arrAuthor,
        ]);
    }

    /**
     * Updates an existing Books model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_b Id B
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_b)
    {
        $model = $this->findModel($id_b);

        $modelGenre = Genre::find()->orderBy('name_genre ASC')->all();
        foreach ($modelGenre as $value) {
            $arrGenre[$value->id_g] = $value->name_genre;
        }

        $modelAuthor = Author::find()->orderBy('surname ASC')->all();
        foreach ($modelAuthor as $value) {
            $arrAuthor[$value->id_a] = $value->surname;
        }

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_b' => $model->id_b]);
        }

        return $this->render('update', [
            'model' => $model,
            'arrGenre' => $arrGenre,
            'arrAuthor' => $arrAuthor,
        ]);
    }

    /**
     * Deletes an existing Books model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_b Id B
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_b)
    {
        $this->findModel($id_b)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Books model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_b Id B
     * @return Books the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_b)
    {
        if (($model = Books::findOne(['id_b' => $id_b])) !== null) {   
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
