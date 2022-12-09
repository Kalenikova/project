<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Record */

$this->title = $model->FIO;
$this->params['breadcrumbs'][] = ['label' => 'Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/site.css">

</head>
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/back.jpg');">
        

            <div class="col-lg-12 login100-form validate-form p-b-33 p-t-5 ">
            <span class="login100-form-title">
            <h1><?= Html::encode($this->title) ?></h1>
            </span>
<div class="record-view">

    

    <p>
        <?= Html::a('Обновить информацию', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Назад', ['/admin/record'], ['class' => 'btn btn-primary']) ?>
    </p><br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'FIO',
            'telefone',
            [
                'attribute' => 'serves',
                'value' => function($model){
                    return $model->serveses->name_of_serves;
                }
            ],
            'date',
            'confirmation',
        ],
    ]) ?>

</div>
