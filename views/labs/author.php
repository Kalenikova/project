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

    <div>
        <?= Html::a('Лабораторная работа №2', ['/labs/lab2'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Книги', ['/labs/books'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Жанры', ['/labs/genre'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Добавить автора', ['/labs/newauthor'], ['class' => 'btn btn-success']) ?>
    </div><br>


    <?php $form = ActiveForm::begin(); ?>
    <h3><?= $form->field($model, 'id_a')->label('Введите id автора') ?></h3>
    <?= Html::submitButton('Удалить', ['class' => 'btn btn-success']); ?>

    <?php ActiveForm::end(); ?><br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Имя</th>
                <th scope="col">Отчество</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Дата смерти</th>

            </tr>
        </thead>

        <tbody><?php foreach ($authors as $author) : ?>
                <tr>
                    <td><?= Html::encode($author->id_a) ?></td>
                    <td><?= Html::encode($author->surname) ?></td>
                    <td><?= Html::encode($author->name) ?></td>
                    <td><?= Html::encode($author->midname) ?></td>
                    <td><?= Html::encode($author->date_born) ?></td>
                    <td><?= Html::encode($author->date_die) ?></td>
        </tbody><?php endforeach; ?>
    </table>

</div>