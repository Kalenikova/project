<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ServesesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Serveses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serveses-index" style="margin-top: 10rem;">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Serveses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_of_serves',
            'price',
            'type_of_serves',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
