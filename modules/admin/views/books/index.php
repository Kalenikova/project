<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Книги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить новую книгу', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Назад', ['/admin'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_b',
            'title',
            'date_writing',
            [
                'attribute' => 'id_a',
                'value' => function($data){
                    return $data->author->surname;
                }
            ],
            [
                'attribute' => 'id_g',
                'value' => function($data){
                    return $data->genre->name_genre;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_b' => $model->id_b]);
                 }
            ],
        ],
    ]); ?>


</div>
