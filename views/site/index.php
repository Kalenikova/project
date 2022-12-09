<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

use yii\helpers\Html;
?>

<head>


  <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>
<div class="site-wrap" id="home-section">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/back.jpg'); width:100%">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-3" style="font-weight:bold;">Больше, чем просто стрижка</h1>
            <p><?= Html::a('Услуги', ['/site/serveses'], ['class' => 'btn btn-primary', 'style' => 'font-weight:bold;']) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="img-years">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="year">
              <span>3 <span>года <br>безупречного обслуживания</span></span>
            </div>
          </div>

        </div>
        <div class="col-lg-5 ml-auto pl-lg-5 text-center">
          <h3 class="scissors text-center"><strong>Добро пожаловать в Бюро красивых услуг!</h3></strong>
          <p class="mb-5 lead">С первых секунд пребывания в салоне вы окунетесь в атмосферу заботы и доброжелательности.
            Почувствуйте себя свободными от повседневной суеты, открыв новые ощущения и удовольствие от виртуозного мастерства наших специалистов!</p>
        </div>
      </div>
    </div>
  </div>



  <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_2.jpg');">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2 class="text-white scissors primary-color-icon text-center" style="font-weight:bold;">Больше о сервисе</h2>
          <p class="lead text-white" style="font-weight:bold;">Мы используем только проверенные инструменты и косметические средства. С нами вы можете не переживать о своем здоровье!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="flaticon-bald"></span>
            </span>
            <div class="service-1-contents" style="font-weight:bold;">
              <h3 style="font-weight:bold;">Косметика для волос</h3>
              <p>Шампуни Kapous, RR Line, Studio Caring<br>
                Бальзам Mood Color<br>
                Кондиционер Kapous<br>
                Маски Elgon Argan, RR Line, Truffle</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="flaticon-beard"></span>
            </span>
            <div class="service-1-contents" style="font-weight:bold;">
              <h3 style="font-weight:bold;">Уход за бородой</h3>
              <p>Масло для бороды Elgon<br>
                Шампунь и бальзам Elgon</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="flaticon-scissors"></span>
            </span>
            <div class="service-1-contents" style="font-weight:bold;">
              <h3 style="font-weight:bold;">Стрижка</h3>
              <p>Филировочные ножницы Dewai<br>
                Машинка для стрижки Dewai<br>
                Машинка для стрижки Moser<br>
                Бритвка Moser</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="flaticon-hair-spray"></span>
            </span>
            <div class="service-1-contents" style="font-weight:bold;">
              <h3 style="font-weight:bold;">Что можно преобрести у нас</h3>
              <p>Питание для сухих волос Inebrya<br>
                Мужской набор Kapous<br>
                Набор ддля восстановления Mood<br>
                Набор для питания волос RR Line</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="flaticon-hair"></span>
            </span>
            <div class="service-1-contents" style="font-weight:bold;">
              <h3 style="font-weight:bold;">Укладка</h3>
              <p>Термозащита Elgon<br>
                Паста фиксации Inebrya<br>
                Воск для волос Kapous<br>
                Фен, шипцы, плойка Dewai</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="flaticon-barber-shop"></span>
            </span>
            <div class="service-1-contents" style="font-weight:bold;">
              <h3 style="font-weight:bold;">Маникюр</h3>
              <p>Базы: Bloom, Grattol, Uno, Serebro<br>
                Гель-лаки: Monami, Haryama, X-gel
                Топы: TNL, Klio, Serebro
                Гель: Cosmoprofi, Runail, Gratol, TNL</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>





</div>