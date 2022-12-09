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

<div class="container-login100" style="background-image: url('images/back.jpg');">
    <div style="margin-top:5%">


        <div class="container site-section">
            <div class="row justify-content-center  mb-5">
                <div class="col-md-12 text-center">
                    <h3 class="scissors text-center">Услуги &amp; Прайс</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="nonloop-block-13 owl-carousel d-flex">

                    <div class="item-1 h">
                            <img src="images/photo_2022-10-20_21-02-39.jpg" alt="Image" class="img-fluid">
                            <div class="item-1-contents">
                                <h3><strong>Женские прически</strong></h3>
                                <ul>
                                    <li class="d-flex"><span>Женская стрижка</span> <span class="price ml-auto">1000₽</span></li>
                                    <li class="d-flex"><span>Стрижка кончиков</span><span class="price ml-auto">700₽</span></li>
                                    <li class="d-flex"><span>Десткая стрижка(девочки)</span><span class="price ml-auto">500₽</span></li>
                                    <li class="d-flex"><span>Челка/окантовка</span><span class="price ml-auto">500₽</span></li>
                                    <li class="d-flex"><span>Окрашивание корней</span><span class="price ml-auto">1500₽</span></li>
                                    <li class="d-flex"><span>Тонирование</span><span class="price ml-auto">2500₽</span></li>
                                    <li class="d-flex"><span>Мелирование</span><span class="price ml-auto">4500₽</span></li>
                                    <li class="d-flex"><span>Наращивание волос</span><span class="price ml-auto">10000₽</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item-1 h">
                            <img src="images/photo_2022-10-20_21-09-34.jpg" alt="Image" class="img-fluid">
                            <div class="item-1-contents">
                                <h3><strong>Маникюр</strong></h3>
                                <ul>
                                    <li class="d-flex"><span>Маникюр + покрытие гель-лаком</span> <span class="price ml-auto">1000₽</span></li>
                                    <li class="d-flex"><span>Маникюр + покрытие гель-лаком</span><span class="price ml-auto">1200₽</span></li>
                                    <li class="d-flex"><span>Укрепление гель-лаком</span><span class="price ml-auto">1600₽</span></li>
                                    <li class="d-flex"><span>SPA для рук</span><span class="price ml-auto">300₽</span></li>
                                    <li class="d-flex"><span>Фрэнч</span><span class="price ml-auto">1250₽</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item-1 h">
                            <img src="images/photo_2022-10-20_21-02-37.jpg" alt="Image" class="img-fluid">
                            <div class="item-1-contents">
                                <h3><strong>Мужские прически</strong></h3>
                                <ul>
                                    <li class="d-flex"><span>Стрижка</span> <span class="price ml-auto">1000₽</span></li>
                                    <li class="d-flex"><span>Детская стрижка(мальчики с 8 до 13 лет)</span><span class="price ml-auto">500₽</span></li>
                                    <li class="d-flex"><span>Королевскае брите лица</span><span class="price ml-auto">1500₽</span></li>
                                    <li class="d-flex"><span>Стрижка головы шейвером</span><span class="price ml-auto">400₽</span></li>
                                    <li class="d-flex"><span>Стрижка насадкой</span><span class="price ml-auto">1000₽</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item-1 h">
                            <img src="images/photo_2022-10-20_21-02-35.jpg" alt="Image" class="img-fluid">
                            <div class="item-1-contents">
                                <h3><strong>Уход за бородой</strong></h3>
                                <ul>
                                    <li class="d-flex"><span>Моделирование бороды</span> <span class="price ml-auto">1500₽</span></li>
                                    <li class="d-flex"><span>Убрать бороду машинкой</span><span class="price ml-auto">400₽</span></li>
                                    <li class="d-flex"><span>Удаление волос воском</span><span class="price ml-auto">350₽</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>