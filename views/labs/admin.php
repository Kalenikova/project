<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\bootstrap4\Button;
use yii\widgets\ActiveForm;


$this->title = 'Lab2';
?>
<div class="site-lab2">


<head>
    <title>Login V16</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/back.jpg');">

    <table class="table" style="background-color: #fff;">
        <thead>
            <tr>
                <th scope="col">Клиент</th>
            </tr>
        </thead>



        <tbody><?php foreach ($records as $record) : ?>
                <tr>
                    <td><?= Html::encode($record->FIO) ?></td></td>
                </tr>
        </tbody><?php endforeach; ?>
    </table>

</div>