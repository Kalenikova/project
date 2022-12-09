<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\bootstrap4\Button;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Serveses;


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
<div class="site-lab2">
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/back.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50" style="margin-top:5%">
                <span class="login100-form-title p-b-41">
                    Запись на услугу
                </span>

                <div class="page-feedback">

                    <?php $form = ActiveForm::begin([
                            'fieldConfig' => [
                                'options' => ['class' => 'login100-form validate-form p-b-33 p-t-5']
                            ],
                        ]); ?>
                    <div class="col-lg-12 login100-form validate-form p-b-33 p-t-5">
                        <?= $form->field($model, 'FIO')->label('ФИО'); ?>
                        <?= $form->field($model, 'telefone')->label('Телефон'); ?>
                        <?= $form->field($model, 'serves')->dropDownList(ArrayHelper::map(Serveses::find()->asArray()->all(), 'id', 'name_of_serves'))->label('Выберите услугу'); ?>
                        <?= $form->field($model, 'datetime')->widget(\kartik\datetime\DateTimePicker::className(),[])->label('Выберите дату'); ?>
                        <?= Html::submitButton('Записаться', ['class' => 'btn btn-primary']); ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>



            </div>