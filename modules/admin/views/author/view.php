<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Author */

$this->title = $model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="author-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить информацию', ['update', 'id_a' => $model->id_a], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить автора', ['delete', 'id_a' => $model->id_a], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверенны, что хотите удалить данного автора?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_a',
            'surname',
            'name',
            'midname',
            'date_born',
            'date_die',
            //'countbooks',
        ],
    ]) ?>

</div>
