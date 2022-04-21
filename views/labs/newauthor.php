<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\bootstrap4\Button;
use yii\widgets\ActiveForm;

$this->title = 'Добавьте нового автора';
?>
<div class="site-lab2">

    <div class="alert alert-success" role="alert">
        Лабораторная работа №2
    </div>

    <div>
        <?= Html::a('Лабораторная работа №2', ['/labs/lab2'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Книги', ['/labs/books'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Жанры', ['/labs/genre'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Авторы', ['/labs/author'], ['class' => 'btn btn-success']) ?>
    </div><br>



    <div class="page-feedback">
        <h1><?= Html::encode($this->title) ?></h1>

        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($mod, 'surname')->label('Фамилия автора'); ?>
        <?= $form->field($mod, 'name')->label('Имя автора'); ?>
        <?= $form->field($mod, 'midname')->label('Отчество автора'); ?>
        <?= $form->field($mod, 'date_born')->input('date')->label('Дата рождения'); ?>
        <?= $form->field($mod, 'date_die')->input('date')->label('Дата смерти'); ?>
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']); ?>
        <?php ActiveForm::end(); ?>
    </div>


</div>