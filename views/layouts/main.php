<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;


AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title>Бюро красивых услуг</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<!-- on your view layout file HEAD section -->
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" crossorigin="anonymous"></script>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php $this->beginBody() ?>

    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3 ">
                        <div class="site-logo">
                            <a href="index.html" style="font-weight:bold;">Бюро красивых услуг</a>
                        </div>
                    </div>

                    <div class="col-9 text-right">


                        <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white">
                                <span class="icon-menu h3 text-white"></span></a></span>



                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation" style="font-weight:bold;">
                            

                                <?php
                                echo Nav::widget([
                                    'options' => ['class'=>'site-menu main-menu js-clone-nav ml-auto '],
                                    'items' => [
                                        ['label' => 'Главная страница', 'url' => ['/site/index']],
                                        ['label' => 'Услуги', 'url' => ['/site/serveses']],
                                        ['label' => 'Запись', 'url' => ['/site/record']],
                                        ['label' => 'О нас', 'url' => ['/site/about']],
                                        ['label' => 'Контакты', 'url' => ['/site/contact']],
                                        ['label' => 'Административная часть', 'url' => ['/admin/record'],'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->username == 'admin'],
                                        Yii::$app->user->isGuest
                                            ? ['label' => 'Вход', 'url' => ['/site/login']]
                                            : '<li>'
                                            . Html::beginForm(['/site/logout'], 'post')
                                            . Html::submitButton(
                                                'Выход (' . Yii::$app->user->identity->username . ')',
                                                ['class' => 'site-navigation nav-link btn btn-link logout ',
                                                'style'=>'font-weight:bold; padding: 20px 0px; margin: 3px 15px;']
                                            )
                                            . Html::endForm()
                                            . '</li>'
                                            ],
                                            'encodeLabels' => false,
                                ]);
                                
                                ?>
                        </nav>
                    </div>

                </div>
            </div>

        </header>

        <main>
        <div >
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid mb-5">
                        <h2 class="footer-heading mb-3" style="font-weight:bold;">О нас</h2>
                        <p>Профессиональные дипломированные мастера нашего салона красоты создадут для Вас любой образ на любой вкус и цвет, мы подчеркнем вашу привлекательность, индивидуальность и красоту.</p>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-6 ml-auto">
                                <h2 class="footer-heading mb-4">Быстрый переход</h2>
                                <ul class="list-unstyled">
                                    <li><?= Html::a('О нас', ['/site/about']) ?></li>
                                    <li><?= Html::a('Запись', ['/site/record']) ?></li>
                                    <li><?= Html::a('Услуги', ['/site/serveses']) ?></li>
                                    <li><?= Html::a('Контакты', ['/site/contact']) ?></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>