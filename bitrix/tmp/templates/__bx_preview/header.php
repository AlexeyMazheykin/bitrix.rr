<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?php
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<!--Тег section используется везде гдк есть заголовки, а где не то используем ДИВЫ-->
<html lang="ru-RU">
<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>

    <?php

        Asset::getInstance()->addCss(SET_TEMPLATE_PATH)
       

    ?>

<!--     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->

    
    
    <!--favicon start-->
<!--     <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="./img/favicon/site.webmanifest" />
    <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="./img/favicon/favicon.ico" /> -->
    <!--favicon end-->
<!--     <meta name="description" content="Все виды геодезических и кадастровых работ в городах: Балашиха, Железнодорожный, пос.Заря, Купавна. Виды работ: геодезия, межевание, топографическая съемка" />
    <meta name="msapplication-TileColor" content="#ffc40d" />
    <meta name="msapplication-config" content="./img/favicon/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" /> -->
    <!--Open graph start-->
<!--     <meta property="og:type" content="website" />
    <meta property="og:url" content="http://xn--c1accbk3b.xn--p1acf" />
    <meta property="og:title" content="Геодезические работы в Москве и Московской области" />
    <meta property="og:image" content="http://xn--c1accbk3b.xn--p1acf/stroyka-min.jpg" />
    <meta property="og:description" content="Все виды геодезических и кадастровых работ в городах: Балашиха, Железнодорожный, пос.Заря, Купавна. Виды работ: геодезия, межевание, топографическая съемка" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:site_name" content="геодез.рус" /> -->
    <!--Open graph end-->
</head>

<body id="body">
    <header class="header">
        <div class="wrapper">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="#!" class="header__logo-link">
                        <img src="./img/svg/geodez-1.svg" alt="logo" class="header__logo-pic">
                    </a>
                </div>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="#intro" class="header__link js-scroll">Главная</a>
                        </li>
                        <li class="header__item">
                            <a href="#types" class="header__link js-scroll">Услуги</a>
                        </li>
                        <li class="header__item">
                            <a href="#video" class="header__link js-scroll">Видео</a>
                        </li>
                        <li class="header__item">
                            <a href="#contacts" class="header__link js-scroll">Контакты</a>
                        </li>
                    </ul>
                    <div class="header__nav-close">
                        <span class="header__nav-close-line"></span>
                        <span class="header__nav-close-line"></span>
                    </div>
                </nav>
                <div class="header__burger burger">
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                </div>
            </div>
        </div>
    </header>