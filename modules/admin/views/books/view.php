<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Books */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="books-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить информацию', ['update', 'id_b' => $model->id_b], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить книгу', ['delete', 'id_b' => $model->id_b], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить книгу?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_b',
            'title',
            'date_writing',
            [
                'attribute' => 'id_g',
                'value' => function($model){
                    return $model->genre->name_genre;
                }
            ],
            [
                'attribute' => 'id_a',
                'value' => function($model){
                    return $model->author->surname;
                }
            ],
            
        ],
    ]) ?>

</div>
