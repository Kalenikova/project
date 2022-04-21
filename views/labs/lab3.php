<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Lab3';
?>
<div class="site-lab3">

    <div class="alert alert-success" role="alert">
        Лабораторная  работа №3
    </div>

    <?= Html::a('Войти в Административную часть', ['/site/login'], ['class' => 'btn btn-success']) ?>

</div>