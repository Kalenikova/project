<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use app\models\Genre;
use yii\widgets\LinkPager;
use yii\bootstrap4\Button;

$this->title = 'Lab2';
?>
<div class="site-lab2">

    <div class="alert alert-success" role="alert">
        Лабораторная работа №2
    </div>

    <div>
    <?= Html::a('Лабораторная работа №2', ['/labs/lab2'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Книги', ['/labs/books'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Авторы', ['/labs/author'], ['class' => 'btn btn-success']) ?>
    </div><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Жанр</th>
                <th scope="col">Количество книг</th>
            </tr>
        </thead>



        <tbody><?php foreach ($genres as $genre) : ?>
                <tr>
                    <td><?= Html::encode($genre->id_g) ?></td>
                    <td><?= Html::encode($genre->name_genre) ?></td>
                    <td><?= Html::encode($genre->countbooks) ?></td>
                </tr>
        </tbody><?php endforeach; ?>
    </table>

</div>