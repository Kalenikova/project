<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

?>

<div class="admin-default-index">
    <h1>Административная часть</h1>
    <h4>Выберите таблицу</h4>
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <?= Html::a('Авторы', ['/admin/author'], ['class' => 'navbar-brand']) ?>
    <?= Html::a('Книги', ['/admin/books'], ['class' => 'navbar-brand']) ?>
    <?= Html::a('Жанры', ['/admin/genre'], ['class' => 'navbar-brand']) ?>
  </div>
</nav>
</div>
