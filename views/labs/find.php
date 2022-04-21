<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\bootstrap4\Button;
use yii\widgets\ActiveForm;

$this->title = 'Lab2';
?>
<div class="site-lab2">

    <div class="alert alert-success" role="alert">
        Лабораторная работа №2
    </div>


    <?= Html::a('Лабораторная работа №2', ['/labs/lab2'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Авторы', ['/labs/author'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Жанры', ['/labs/genre'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Книги', ['/labs/books'], ['class' => 'btn btn-success']) ?>


    <?php $form = ActiveForm::begin(); ?>
    <h3><?= $form->field($model, 'title')->label('Название книги') ?></h3>
    <?= Html::submitButton('Найти', ['class' => 'btn btn-success']); ?>

    <?php ActiveForm::end(); ?><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Название</th>
                <th scope="col">Дата публикации</th>
                <th scope="col">Жанр</th>
                <th scope="col">Автор</th>
            </tr>
        </thead>



        <tbody><?php foreach ($books as $book) : ?>
                <tr>
                    <td><?= Html::encode($book->id_b) ?></td>
                    <td><?= Html::encode($book->title) ?></td>
                    <td><?= Html::encode($book->date_writing) ?></td>
                    <td><?= Html::encode($book->genre->name_genre) ?></td>
                    <td><?= Html::encode($book->author->surname) ?></td>
                </tr>
        </tbody><?php endforeach; ?>
    </table>

</div>