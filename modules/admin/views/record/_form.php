<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Record */
/* @var $form yii\widgets\ActiveForm */
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
        <div class="wrap-login100 p-t-30 p-b-50">

            <div class="col-lg-12 login100-form validate-form p-b-33 p-t-5 ">


                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'FIO')->textInput(['maxlength' => true])->label('ФИО') ?>

                <?= $form->field($model, 'telefone')->textInput()->label('Номер телефона') ?>

                <?= $form->field($model, 'serves')->dropDownList($arrServeses)->label('Услуга') ?>

                <?= $form->field($model, 'date')->textInput()->label('Дата') ?>

                <?= $form->field($model, 'time')->dropDownList([
                    '10:00' => '10:00',
                    '10:30' => '10:30',
                    '11:00' => '11:00',
                    '11:30' => '11:30',
                    '12:00' => '12:00',
                    '12:30' => '12:30',
                    '13:00' => '13:00',
                    '13:30' => '13:30',
                    '14:00' => '14:00',
                    '14:30' => '14:30',
                    '15:00' => '15:00',
                    '15:30' => '15:30',
                    '16:00' => '16:00',
                    '16:30' => '16:30',
                    '17:00' => '17:00',
                    '17:30' => '17:30',
                    '18:00' => '18:00',
                    '18:30' => '18:30',
                ])->label('Время') ?>

                <?= $form->field($model, 'confirmation')->dropDownList([
                    'Да' => 'Да',
                    'Нет' => 'Нет'
                ])->label('Подтверждение') ?>

                <div class="form-group">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Назад', ['/admin/record'], ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>