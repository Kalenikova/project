<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Record */


$this->params['breadcrumbs'][] = ['label' => 'Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
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
        <div class="wrap-login100" style="margin-top:5%;padding-top:5%">
            <span class="login100-form-title">
                <?= $this->title = 'Клиент ' . $model->FIO; ?>
            </span>

            <?= $this->render('_form', [
        'model' => $model,
        'arrServeses' => $arrServeses,
    ]) ?>
        </div>
    </div>
</div>