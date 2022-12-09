<?php

/** @var yii\web\View $this */

use yii\widgets\LinkPager;
use yii\bootstrap4\Button;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>

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
        <div class="wrap-login100 p-t-30 p-b-50" style="margin-top:5%">
            <span class="login100-form-title p-b-41">
                Регистрация
            </span>
            <h1><?= Html::encode($this->title) ?></h1>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-12 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                    'options' => ['class' => 'login100-form validate-form p-b-33 p-t-5']
                ],
            ]); ?>
            <div class="col-lg-12 login100-form validate-form p-b-33 p-t-5">

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <?= $form->field($mod, 'username')->label('Логин'); ?>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <?= $form->field($mod, 'FIO')->label('ФИО'); ?>
                </div>

                <?= $form->field($mod, 'password')->label('Пароль')->passwordInput(); ?>

                <div class="form-group">
                    <div class="offset-lg-1 col-lg-11">
                        <?= Html::submitButton('Зарегестрироваться', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>


        </div>