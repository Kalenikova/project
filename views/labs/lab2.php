<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\bootstrap4\Button;

$this->title = 'Lab2';
?>
<div class="site-lab2">

    <div class="alert alert-success" role="alert">
        Лабораторная работа №2
    </div>

    <?= Html::a('Авторы', ['/labs/author'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Книги', ['/labs/books'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Жанры', ['/labs/genre'], ['class' => 'btn btn-success']) ?>

</div>