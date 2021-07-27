<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php Yii::$app->language ?>">
<head>
    <meta charset="<?php Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="icon" href="./images/logo_navbar.png">
    <title><?php Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Start Navbar -->

<div class="navbar-for-scroll" id="navbar-for-scroll">
    <div class="container-sm">
        <div class="top_menu">
            <div class="left_nav">
                <a href="./" style="text-decoration: none;">
                    <div class="logo_text" id="logo">Canon Store</div>
                </a>

            </div>
            <div class="right_nav" id="right_nav">

                <div class="nav_items_search">
                    <i class="fas fa-search"></i>
                </div>

                <a href="/compare">
                    <div class="nav_items">
                        <img src="./images/scale.png" alt="" width="30px">
                        <span class="number_offer">0</span>
                    </div>
                </a>
                <a href="/wishlist">
                    <div class="nav_items">
                        <img src="./images/heart.png" alt="" width="32px">
                        <span class="number_offer">0</span>
                    </div>
                </a>
                <a href="./cart.html">
                    <div class="nav_items_cart">
                        <img src="./images/cart.png" alt="" width="30px">
                        <span class="number_offer">0</span>
                    </div>
                </a>
                <a href="./#popup">
                    <div class="nav_items_user" id="contact">
                        <img src="./images/username.png" alt="" width="30px">
                    </div>
                </a>
                <a href="cart.html#click_navbar">
                    <div class="nav_items_bar">
                        <img src="./images/bar.png" alt="" width="30px">
                    </div>
                </a>
            </div>
        </div>

        <div class="catalog-mobile">
            <h5 style="font-size: 16px; font-weight: 400; color: #fff;">КАТАЛОГ

                <div class="drop_down_catalog_items">
                    <div class="drop_down_catalog_item">
                        <img src="./images/drop_down_items/percentage.png" alt="" width="16px"><a class="href_catalog" href="./catalog.html">АКЦИЯ</a>
                    </div>
                    <div class="drop_down_catalog_item" id="camera_navbar">
                        <img src="./images/drop_down_items/black-camera.png" alt="" width="16px"><a class="href_catalog" href="./catalog.html">ФОТОКАМЕРЫ</a>
                        <img
                            class="angle-right"
                            src="./images/line-angle-right.png"
                            alt=""
                            width="6px"
                            style="position: absolute; right: 1px;">

                        <div class="drop_camera_scroll row">
                            <div class="drop_camera_item_scroll col-md-5">
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">ЗЕРКАЛЬНЫЕ ФОТОКАМЕРЫ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Для начинающих</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для любителей</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для профессионалов</a></p>
                            </div>

                            <div class="drop_camera_item_scroll col-md-7">
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">БЕЗЗЕРКАЛЬНЫЕ ФОТОКАМЕРЫ NIKON Z</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Для любителей</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для профессионалов</a></p>
                            </div>

                            <div class="drop_camera_item_scroll col-md-6">
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">КОМПАКТНЫЕ ФОТОКАМЕРЫ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Компактные</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Супер-Зум</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Водозащищенные</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="drop_down_catalog_item" id="obective_navbar">
                        <img src="./images/drop_down_items/obektive.png" alt="" width="17px"><a class="href_catalog" href="./catalog.html">ОБЪЕКТИВЫ</a>
                        <img
                            class="angle-right"
                            src="./images/line-angle-right.png"
                            alt=""
                            width="6px"
                            style="position:absolute; right: 1px;">
                        <div class="drop_obektive_scroll row">
                            <div class="drop_camera_item_scroll col-md-6">
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">ОБЪЕКТИВЫ ДЛЯ DX</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Универсальные</p>
                                <p><a class="href_catalog1" href="./catalog.html">Широкоугольные</p>
                                <p><a class="href_catalog1" href="./catalog.html">Телеобъективы</p>
                                <p><a class="href_catalog1" href="./catalog.html">Макро</p>
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">ОБЪЕКТИВЫ ДЛЯ FX</a></h6>
                            </div>

                            <div class="drop_camera_item_scroll col-md-6">
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">ОБЪЕКТИВЫ NIKKOR Z</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Универсальные</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Широкоугольные</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Телеобъективы</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Специальные</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Макро</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Телеконверторы</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="drop_down_catalog_item" id="accessory_navbar">
                        <img src="./images/drop_down_items/briefcase.png" alt="" width="17px"><a class="href_catalog" href="./catalog.html">АКСЕССУАРЫ</a><img
                            class="angle-right"
                            src="./images/line-angle-right.png"
                            alt=""
                            width="6px"
                            style="position:absolute; right: 1px;">
                        <div class="drop_accessory_scroll row">
                            <div class="drop_camera_item_scroll col-md-6">
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">ДЛЯ ФОТОКАМЕРЫ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Карты памяти</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Питание фотокамер</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Штативы, моноподы</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Сумки, рюкзаки, чехлы, ремни</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Защита фотокамер</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Управление фотокамерами</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Аксессуары для подключения</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Аксессуары для визирования</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Аксессуары для видеосъемки</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Программное обеспечение</a></p>
                            </div>

                            <div class="drop_camera_item_scroll col-md-6">
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">ДЛЯ ОБЪЕКТИВОВ NIKKOR</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Крышки, фильтры</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Чехлы</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Средства для чистки оптики</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Прочее</a></p>
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">ДЛЯ СПОРТИВНОЙ ОПТИКИ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Конверторы</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Окуляры</a></p>
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">ДЛЯ ЭКШН-КАМЕР</a></h6>
                            </div>

                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">ДЛЯ ВИДЕО</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="drop_down_catalog_item">
                        <img src="./images/drop_down_items/spark.png" alt="" width="17px"><a class="href_catalog" href="./catalog.html">ВСПЫШКИ</a>
                    </div>
                    <div class="drop_down_catalog_item">
                        <img
                            src="./images/drop_down_items/shirt.png"
                            alt=""
                            width="23px"
                            style="margin-right: 14px;"><a class="href_catalog" href="./catalog.html">СУВЕНИРНАЯ ПРОДУКЦИЯ</a>
                    </div>
                    <div class="drop_down_catalog_item" id="sport_navbar">
                        <img
                            src="./images/drop_down_items/jump.png"
                            alt=""
                            width="23px"
                            style="margin-right: 14px;"><a class="href_catalog" href="./catalog.html">СПОРТИВНАЯ ОПТИКА</a><img
                            class="angle-right"
                            src="./images/line-angle-right.png"
                            alt=""
                            width="6px"
                            style="position:absolute; right: 1px;">
                        <div class="drop_sport_scroll row">
                            <div class="drop_camera_item_scroll col-md-6">
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">ЗЕРКАЛЬНЫЕ ФОТОКАМЕРЫ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Для начинающих</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для любителей</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для профессионалов</a></p>
                            </div>

                            <div class="drop_camera_item_scroll col-md-6">
                                <h6 class="camera_heade_scrollr"><a class="href_catalog1" href="./catalog.html">БЕЗЗЕРКАЛЬНЫЕ ФОТОКАМЕРЫ NIKON Z</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Для любителей</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для профессионалов</a></p>
                            </div>

                            <div class="drop_camera_item_scroll col-md-6">
                                <h6 class="camera_header_scroll"><a class="href_catalog1" href="./catalog.html">КОМПАКТНЫЕ ФОТОКАМЕРЫ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Компактные</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Супер-Зум</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Водозащищенные</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </h5> <span class="img_angle"><i class="fas fa-angle-right line-angle-right"></i> </span>
        </div>
    </div>
</div>

<div class="click_navbar" id="click_navbar">
    <div class="container-xl">
        <div class="right_nav">
            <div class="click_left">
                <a href="/wishlist">
                    <div class="nav_items_like">
                        <img src="./images/like.png" alt="" width="30px">
                    </div>
                </a>
                <a href="/compare">
                    <div class="nav_items_scale">
                        <img src="./images/scale.png" alt="" width="30px">
                        <span class="number_offer">0</span>
                    </div>
                </a>
                <a href="/wishlist">
                    <div class="nav_items_heart">
                        <img src="./images/heart.png" alt="" width="32px">
                        <span class="number_offer">0</span>
                    </div>
                </a>
                <a href="./#popup">
                    <div class="nav_items_user" id="contact2">
                        <img src="./images/username.png" alt="" width="30px">
                    </div>
                </a>
            </div>

            <div class="click_right" style="padding-right: 0px;">
                <div class="nav_items_close">
                    <img src="./images/close.png" alt="" width="30px">
                </div>
            </div>

        </div>
        <div class="click_cotalog">КАТАЛОГ
            <img src="./images/line-angle-right.png" alt=""></div>
        <div class="row click_cotalog_row">
            <div class="col-md-12 click_cotalog_item">
                <img
                    src="./images/drop_down_items/percentage.png"
                    alt=""
                    width="16px"
                    style="margin-right: 14px;"><a class="href_catalog" href="./catalog.html">АКЦИЯ</a></div>
            <div class="col-md-12 click_cotalog_item"><img
                    src="./images/drop_down_items/black-camera.png"
                    alt=""
                    width="16px"
                    style="margin-right: 14px;"><a class="href_catalog" href="./catalog.html">ФОТОКАМЕРЫ</a></div>
            <div class="col-md-12 click_cotalog_item">
                <img
                    src="./images/drop_down_items/obektive.png"
                    alt=""
                    width="17px"
                    style="margin-right: 14px;"><a class="href_catalog" href="./catalog.html">ОБЪЕКТИВЫ</a></div>
            <div class="col-md-12 click_cotalog_item">
                <img
                    src="./images/drop_down_items/spark.png"
                    alt=""
                    width="17px"
                    style="margin-right: 14px;"><a class="href_catalog" href="./catalog.html">ВСПЫШКИ</a></div>
            <div class="col-md-12 click_cotalog_item">
                <img
                    src="./images/drop_down_items/briefcase.png"
                    alt=""
                    width="17px"
                    style="margin-right: 14px;"><a class="href_catalog" href="./catalog.html">АКСЕССУАРЫ</a></div>
            <div class="col-md-12 click_cotalog_item">
                <img
                    src="./images/drop_down_items/shirt.png"
                    alt=""
                    width="23px"
                    style="margin-right: 10px;"><a class="href_catalog" href="./catalog.html">СУВЕНИРНАЯ ПРОДУКЦИЯ</a></div>
            <div class="col-md-12 click_cotalog_item">
                <img
                    src="./images/drop_down_items/jump.png"
                    alt=""
                    width="23px"
                    style="margin-right: 10px;"><a class="href_catalog" href="./catalog.html">СПОРТИВНАЯ ОПТИКА</a></div>
        </div>
        <div class="click_info"><a class="href_catalog" href="./catalog.html">ИНФОРМАЦИЯ</a>
            <img
                src="./images/line-angle-right.png"
                alt=""
                style="transform: rotate(90deg);"
                width="10px"></div>
        <div class="row click_info_row">
            <div class="col-md-12 click_cotalog_item"><a class="href_catalog1" href="./about.html">О магазине</a></div>
            <div class="col-md-12 click_cotalog_item"><a class="href_catalog1" href="./news.html">Новости</a></div>
            <div class="col-md-12 click_cotalog_item"><a class="href_catalog1" href="./delivery_payments.html">Доставка и оплата</a></div>
            <div class="col-md-12 click_cotalog_item"><a class="href_catalog1" href="./warranty.html">Гарантия и сервис</a></div>
            <div class="col-md-12 click_cotalog_item"><a class="href_catalog1" href="./contact.html">Контакты</a></div>
            <div class="col-md-12 click_cotalog_item"><a class="href_catalog1" href="./faq.html">FAQ</a></div>
        </div>
    </div>
</div>

<div class="navbar" id="navbar">
    <div class="container-sm">
        <div class="top_menu">
            <div class="left_nav">
                <a href="./" style="text-decoration: none;">
                    <div class="logo_name" id="logo">Canon Store</div>
                    <p class="head_text" id="head_text">ФИРМЕННЫЙ МАГАЗИН</p>
                </a>
            </div>
            <div class="right_nav" id="right_nav">

                <div class="nav_items_search1">
                    <i class="fas fa-search"></i>
                </div>

                <a href="/compare">
                    <div class="nav_items">
                        <img src="./images/scale.png" alt="" width="30px">
                        <span class="number_offer">0</span>
                    </div>
                </a>
                <a href="/wishlist">
                    <div class="nav_items">
                        <img src="./images/heart.png" alt="" width="32px">
                        <span class="number_offer">0</span>
                    </div>
                </a>
                <a href="./cart.html">
                    <div class="nav_items_cart">
                        <img src="./images/cart.png" alt="" width="30px">
                        <span class="number_offer">0</span>
                    </div>
                </a>
                <a href="#popup">
                    <div class="nav_items_user" id="contact3">
                        <img src="./images/username.png" alt="" width="32px">
                    </div>
                </a>

                <a href="index.html#click_navbar">
                    <div class="nav_items_bar1">
                        <img src="./images/bar.png" alt="" width="30px">
                    </div>
                </a>
            </div>
        </div>
        <div class="bottom_menu" id="bottom_menu">
            <div class="drop_down" style="color: #fff;">
                КАТАЛОГ
                <span class="img_angle"><i class="fas fa-angle-right line-angle-right"></i> </span>
                <div class="dropDownItems" id="dropDownItems">
                    <div class="dropDownItem">
                        <img src="./images/drop_down_items/percentage.png" alt="" width="16px"><a class="href_catalog" href="./catalog.html">АКЦИЯ</a>
                    </div>

                    <div class="dropDownItem2">
                        <img src="./images/drop_down_items/black-camera.png" alt="" width="16px"><a class="href_catalog" href="./catalog.html">ФОТОКАМЕРЫ</a>
                        <img
                            src="./images/line-angle-right.png"
                            alt=""
                            width="6px"
                            style="position: absolute; right: 1px;">
                        <div class="drop_camera row">
                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">ЗЕРКАЛЬНЫЕ ФОТОКАМЕРЫ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Для начинающих</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для любителей</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для профессионалов</a></p>
                            </div>

                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">БЕЗЗЕРКАЛЬНЫЕ ФОТОКАМЕРЫ NIKON Z</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Для любителей</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для профессионалов</a></p>
                            </div>

                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">КОМПАКТНЫЕ ФОТОКАМЕРЫ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Компактные</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Супер-Зум</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Водозащищенные</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="dropDownItem3">
                        <img src="./images/drop_down_items/obektive.png" alt="" width="17px"><a class="href_catalog" href="./catalog.html">ОБЪЕКТИВЫ</a>
                        <img
                            src="./images/line-angle-right.png"
                            alt=""
                            width="6px"
                            style="position:absolute; right: 1px;">
                        <div class="drop_obektive row">
                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">ОБЪЕКТИВЫ ДЛЯ DX</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Универсальные</p>
                                <p><a class="href_catalog1" href="./catalog.html">Широкоугольные</p>
                                <p><a class="href_catalog1" href="./catalog.html">Телеобъективы</p>
                                <p><a class="href_catalog1" href="./catalog.html">Макро</p>
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">ОБЪЕКТИВЫ ДЛЯ FX</a></h6>
                            </div>

                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">ОБЪЕКТИВЫ NIKKOR Z</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Универсальные</p>
                                <p><a class="href_catalog1" href="./catalog.html">Широкоугольные</p>
                                <p><a class="href_catalog1" href="./catalog.html">Телеобъективы</p>
                                <p><a class="href_catalog1" href="./catalog.html">Специальные</p>
                                <p><a class="href_catalog1" href="./catalog.html">Макро</p>
                                <p><a class="href_catalog1" href="./catalog.html">Телеконверторы</p>
                            </div>
                        </div>
                    </div>

                    <div class="dropDownItem">
                        <img src="./images/drop_down_items/spark.png" alt="" width="17px"><a class="href_catalog" href="./catalog.html">ВСПЫШКИ</a>
                    </div>

                    <div class="dropDownItem4">
                        <img src="./images/drop_down_items/briefcase.png" alt="" width="17px"><a class="href_catalog" href="./catalog.html">АКСЕССУАРЫ</a><img
                            src="./images/line-angle-right.png"
                            alt=""
                            width="6px"
                            style="position:absolute; right: 1px;">
                        <div class="drop_accessory row">
                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">ДЛЯ ФОТОКАМЕР</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Карты памяти</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Питание фотокамер</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Штативы, моноподы</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Сумки, рюкзаки, чехлы, ремни</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Защита фотокамер</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Управление фотокамерами</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Аксессуары для подключения</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Аксессуары для визирования</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Аксессуары для видеосъемки</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Программное обеспечение</a></p>
                            </div>

                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">ДЛЯ ВИДЕО</a></h6>
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">ДЛЯ ОБЪЕКТИВОВ NIKKOR</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Крышки, фильтры</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Бленды</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Чехлы</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Средства для чистки оптики</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Прочее</a></p>
                            </div>

                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">ДЛЯ СПОРТИВНОЙ ОПТИКИ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Конверторы</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Окуляры</a></p>
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">ДЛЯ ЭКШН-КАМЕР</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="dropDownItem">
                        <img
                            src="./images/drop_down_items/shirt.png"
                            alt=""
                            width="23px"
                            style="margin-right: 14px;"><a class="href_catalog" href="./catalog.html">СУВЕНИРНАЯ ПРОДУКЦИЯ</a>
                    </div>

                    <div class="dropDownItem5">
                        <img
                            src="./images/drop_down_items/jump.png"
                            alt=""
                            width="23px"
                            style="margin-right: 14px;"><a class="href_catalog" href="./catalog.html">СПОРТИВНАЯ ОПТИКА</a><img
                            src="./images/line-angle-right.png"
                            alt=""
                            width="6px"
                            style="position:absolute; right: 1px;">
                        <div class="drop_sport row">
                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">ЗЕРКАЛЬНЫЕ ФОТОКАМЕРЫ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Для начинающих</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для любителей</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для профессионалов</a></p>
                            </div>

                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">БЕЗЗЕРКАЛЬНЫЕ ФОТОКАМЕРЫ NIKON Z</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Для любителей</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Для профессионалов</a></p>
                            </div>

                            <div class="drop_camera_item col-md-6">
                                <h6 class="camera_header"><a class="href_catalog1" href="./catalog.html">КОМПАКТНЫЕ ФОТОКАМЕРЫ</a></h6>
                                <p><a class="href_catalog1" href="./catalog.html">Компактные</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Супер-Зум</a></p>
                                <p><a class="href_catalog1" href="./catalog.html">Водозащищенные</a></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="info_middle" id="info_middle">
                <div class="info_left">Ваши бонусы: Войти
                </div>
                <div class="info_right">
                    <img src="./images/like.png" alt="" width="24px"><a class="href_catalog" href="./catalog.html"></a>Оставить отзыв
                </div>
            </div>
            <div class="info" id="info">
                <a class="href_catalog" href="./catalog.html">ИНФОРМАЦИЯ</a>
                <img
                    src="./images/line-angle-right.png"
                    alt=""
                    width="6px"
                    style="transform: rotate(90deg);">

                <div class="info-drop-down">
                    <div class="info-drop-down-item"><a class="href_catalog" href="./about.html">О магазине</a></div>
                    <div class="info-drop-down-item"><a class="href_catalog" href="./news.html">Новости</a></div>
                    <div class="info-drop-down-item"><a class="href_catalog" href="./delivery_payments.html">Доставка и оплата</a></div>
                    <div class="info-drop-down-item"><a class="href_catalog" href="./warranty.html">Гарантия и сервис</a></div>
                    <div class="info-drop-down-item"><a class="href_catalog" href="./contact.html">Контакты</a></div>
                    <div class="info-drop-down-item"><a class="href_catalog" href="./faq.html">FAQ</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Navbar -->

<!-- Popup Contact -->

<div class="container-fluit">
    <div class="popup" id="popup">

        <div class="popup-content">
            <img
                class="close_popup"
                id="close_popup"
                src="./images/close.png"
                alt=""
                width="30px">
            <div class="row">
                <div class="col-md-6 contact-left" style="border-right: solid 1px #ccc;">
                    <div class="contact-left-header">Войти на сайт</div>
                    <input type="email" name="" id="" placeholder="E-mail*" class="contact-input">
                    <input
                        type="password"
                        name=""
                        id=""
                        placeholder="Пароль*"
                        class="contact-input">
                    <input type="checkbox" name="" id="" class="contact-checkbox">
                    <span class="checkeds">
                                Я принимаю условия Политики о конфиденциальности.</span>
                    <a href="#" class="popup-submit">Войти</a><br>
                    <div class="logout">
                        <span class="forget-password" id="forget-password">Восстановить пароль</span><span class="sign-up" id="sign-up">Зарегистрироваться</span>
                    </div>

                </div>
                <div class="col-md-6 contact-right">
                    <div class="contact-right-header">Единая авторизация Nikon</div>
                    <div class="contact-right-title">Для вашего удобства мы разработали систему единой авторизации на сайтах:</div>
                    <div class="img_contact" style="margin: 10px;"><img src="./images/pop up/popup.png" alt="" width="100%"></div>
                    <div class="contact-left-footer">Теперь вход в личный кабинет возможен под одним и тем же паролем.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluit">
    <div class="popup1">
        <div class="popup-content1">
            <img
                class="close_popup1"
                id="close_popup1"
                src="./images/close.png"
                alt=""
                width="30px">
            <div class="row">
                <div class="col-md-12 contact-left">
                    <div class="contact-left-header">Войти на сайт</div>
                    <input type="email" name="" id="" placeholder="E-mail*" class="contact-input">
                    <a href="#" class="popup-submit">Войти</a><br>
                    <div class="logout">
                        <span class="forget-password" id="contact4">Войти</span><span class="sign-up" id="sign-up1">Зарегистрироваться</span>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
<div class="container-fluit">
    <div class="popup2">

        <div class="popup-content2">
            <img
                class="close_popup2"
                id="close_popup2"
                src="./images/close.png"
                alt=""
                width="30px">
            <div class="row">
                <div class="col-md-6 contact-left">
                    <div class="contact-left-header">Войти на сайт</div>
                    <input type="text" name="" id="" placeholder="Имя*" class="contact-input">
                    <input type="text" name="" id="" placeholder="Фамилия*" class="contact-input">
                    <input type="email" name="" id="" placeholder="E-mail*" class="contact-input">
                </div>
                <div class="col-md-6 contact-right">
                    <div class="contact-right-header">Единая авторизация Nikon</div>
                    <div class="choose-flag">
                        <select name="" id="" class="choose-flag-items">
                            <option value="RU"><!--<img src="./images/contact/ru.png" alt="" width="1000px">-->RU</option>
                            <option value="UZ"><!--<img src="./images/contact/uz.jpg" alt="" width="20px">-->UZ</option>
                            <option value="KZ"><!--<img src="./images/contact/kz.jpg" alt="" width="20px">-->KZ</option>
                        </select>
                        <input type="text" name="" id="" placeholder="Телефон*" class="contact-input">
                    </div>
                    <input
                        type="password"
                        name=""
                        id=""
                        placeholder="Пароль*"
                        class="contact-input">
                    <input
                        type="password"
                        name=""
                        id=""
                        placeholder="Подтверждение пароля*"
                        class="contact-input">
                </div>
            </div>
            <div class="sign_up_box">
                <input type="checkbox" name="" id="" class="contact-checkbox">
                <span class="checkeds">
                            Я принимаю условия Политики о конфиденциальности.</span>
                <a href="#" class="popup-submit">Войти</a><br>
                <div class="logout">
                    <span class="forget-password" id="forget-password2">Восстановить пароль</span><span class="sign-up" id="contact5">Войти</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Popup Contact End -->

<!----------------------- Beginning of Search ------------------------->
<div class="search-wrapper">
    <div class="search-container">

        <div class="search-close-icon">&times;</div>

        <div class="search-div">
            <input type="text" placeholder="Поиск" class="search-input" id="search-input" onkeyup="searchItem()" title="name" >
            <i class="fas fa-search search-side"></i>
        </div>

        <!-- <table id="tableRecord">
          <thead>
            <tr>
              <th>Title</th>
              <th>Post</th>
            </tr>
            <tbody>
              <tr>
                <td>Post One</td>
                <td>This is Post One</td>
              </tr>
              <tr>
                <td>Post Two</td>
                <td>This is Post Two</td>
              </tr>
              <tr>
                <td>Post Three</td>
                <td>This is Post Three</td>
              </tr>
              <tr>
                <td>Post Four</td>
                <td>This is Post Four</td>
              </tr>
              <tr>
                <td>Post Five</td>
                <td>This is Post Five</td>
              </tr>
            </tbody>
          </thead>
        </table> -->

        <!-- 1 offer -->


        <table id="tableRecord">
            <thead>
            <tr>

            </tr>
            <tbody>
            <tr>
                <td>
                    <div class="img_carusel">
                        <img src="./images/home_img/carusel_item.jpg" alt="">
                        <div class="skitka">
                            <div class="skitka_item">Скидка на комплект</div>
                            <div class="skitka_item">В кредит</div>
                        </div>
                        <div class="offer_name">Z50 Blogger Kit</div>
                        <ul class="offer_infos">
                            <li class="offer_info">Все самое необходимое уже в комплекте</li>
                            <li class="offer_info">Сенсорный откидной экран для селфи</li>
                            <li class="offer_info">11 кадров в секунду, 4K UHD видео.
                            </li>
                            <li class="offer_info">Компактный объектив Nikkor Z</li>
                            <li class="offer_info">Поддержка объективов Nikkor F</li>
                        </ul>
                        <div class="offer_status">В наличии</div>
                        <div class="offer_cost">84 999 ₽</div>
                        <a href="./product.html" class="offer_to_cart">В корзину</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="img_carusel">
                        <img src="./images/home_img/carusel_item.jpg" alt="">
                        <div class="skitka">
                            <div class="skitka_item">Скидка на комплект</div>
                            <div class="skitka_item">В кредит</div>
                        </div>
                        <div class="offer_name">Z50 Blogger Kit</div>
                        <ul class="offer_infos">
                            <li class="offer_info">Все самое необходимое уже в комплекте</li>
                            <li class="offer_info">Сенсорный откидной экран для селфи</li>
                            <li class="offer_info">11 кадров в секунду, 4K UHD видео.
                            </li>
                            <li class="offer_info">Компактный объектив Nikkor Z</li>
                            <li class="offer_info">Поддержка объективов Nikkor F</li>
                        </ul>
                        <div class="offer_status">В наличии</div>
                        <div class="offer_cost">84 999 ₽</div>
                        <a href="./product.html" class="offer_to_cart">В корзину</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Post Three</td>
                <td>This is Post Three</td>
            </tr>

            </tbody>
            </thead>
        </table>













        <!-- <table id="tableRecord">
            <thead>
                <div class="img_carusel">
                    <img src="./images/home_img/carusel_item.jpg" alt="">
                    <div class="skitka">
                        <div class="skitka_item">Скидка на комплект</div>
                        <div class="skitka_item">В кредит</div>
                    </div>
                    <div class="offer_name">Z50 Blogger Kit</div>
                    <ul class="offer_infos">
                        <li class="offer_info">Все самое необходимое уже в комплекте</li>
                        <li class="offer_info">Сенсорный откидной экран для селфи</li>
                        <li class="offer_info">11 кадров в секунду, 4K UHD видео.
                        </li>
                        <li class="offer_info">Компактный объектив Nikkor Z</li>
                        <li class="offer_info">Поддержка объективов Nikkor F</li>
                    </ul>
                    <div class="offer_status">В наличии</div>
                    <div class="offer_cost">84 999 ₽</div>
                    <a href="./product.html" class="offer_to_cart">В корзину</a>
                </div>

                <div class="img_carusel">
                    <img src="./images/home_img/carusel_item.jpg" alt="">
                    <div class="skitka">
                        <div class="skitka_item">Скидка на комплект</div>
                        <div class="skitka_item">В кредит</div>
                    </div>
                    <div class="offer_name">Z50 Blogger Kit</div>
                    <ul class="offer_infos">
                        <li class="offer_info">Все самое необходимое уже в комплекте</li>
                        <li class="offer_info">Сенсорный откидной экран для селфи</li>
                        <li class="offer_info">11 кадров в секунду, 4K UHD видео.
                        </li>
                        <li class="offer_info">Компактный объектив Nikkor Z</li>
                        <li class="offer_info">Поддержка объективов Nikkor F</li>
                    </ul>
                    <div class="offer_status">В наличии</div>
                    <div class="offer_cost">84 999 ₽</div>
                    <a href="./product.html" class="offer_to_cart">В корзину</a>
                </div>
            </thead>
        </table> -->





        <br>

        <!-- 2 offer -->
        <div class="img_carusel">
            <img src="./images/home_img/carusel_item.jpg" alt="">
            <div class="skitka">
                <div class="skitka_item">Скидка на комплект</div>
                <div class="skitka_item">В кредит</div>
            </div>
            <div class="offer_name">Z50 Blogger Kit</div>
            <ul class="offer_infos">
                <li class="offer_info">Все самое необходимое уже в комплекте</li>
                <li class="offer_info">Сенсорный откидной экран для селфи</li>
                <li class="offer_info">11 кадров в секунду, 4K UHD видео.
                </li>
                <li class="offer_info">Компактный объектив Nikkor Z</li>
                <li class="offer_info">Поддержка объективов Nikkor F</li>
            </ul>
            <div class="offer_status">В наличии</div>
            <div class="offer_cost">84 999 ₽</div>
            <a href="./product.html" class="offer_to_cart">В корзину</a>
        </div>



    </div>
</div>
<!-- ----------------------- End of Search ------------------------- -->
<?php echo $content;?>

<!-- ----------------  beginning of Footer  ------------------- -->
<footer class="footer">
    <div class="footer-container1">
        <div class="footer_top">
            <div class="footer-subscribe-section col-7">
                <div class="footer-subscribe-title footer-top-title footer-first-column col-4">Подпишитесь: новинки, скидки, полезные статьи</div>
                <div class="footer-subscribe-form col-8" id="footer-sender-subscribe">
                    <form  class="footer-subscribe-form1">
                        <input type="email" class="footer-subscribe-form-input" placeholder="Введите ваш e-mail">
                        <button class="footer-subscribe-form-btn">Подписаться</button>
                    </form>
                    <div class="footer-subscribe-form-check">
                        <input type="checkbox" id="footer-checkbox" />
                        <label for="footer-checkbox" class="footer-check-label">Я принимаю условия Политики о конфиденциальности.</label>
                    </div>
                </div>
            </div>
            <div class="footer-school-section col-4">
                <div class="footer-school-section-title">
                    Пройдите обучение на курсах фотографии в нашей школе
                </div>
                <div class="footer-school-section-logo">
                    <img src="images/logo-footer.png" class="footer-school-section-logo-img" alt="" />
                </div>
            </div>
        </div>
    </div>


    <div class="container2">
        <div class="footer_main">

            <div class="footer-main-1">
                <ul class="footer-ul">
                    <li class="footer-menu-item"><a target="_blank" href="" >Доставка</a></li>
                    <li class="footer-menu-item"><a target="_blank" href="" >О магазине</a></li>
                    <li class="footer-menu-item"><a target="_blank" href="" >Гарантия</a></li>
                    <li class="footer-menu-item"><a target="_blank" href="" >Контакты</a></li>
                </ul>
                <div class="footer-contacts">
                    <div class="footer-title">Свяжитесь с нами</div>
                    <div class="footer-contacts-row footer-mob-flex">
                        <div class="footer-mob-left">
                            <a class="footer-phone" href="tel:+78007007305" >8(800)700-73-05</a>
                            <div class="footer-info-free">Бесплатно по России</div>
                        </div>
                        <div class="footer-info-time">
                            Пн.-Вс. 10:00-20:00
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col"></div>

            <div class="footer-main-2 col-xl-auto">
                <div class="footer-title">Canon в соцсетях</div>
                <div class="footer-mob-flex">
                    <div class="social-list">
                        <a class="social-link" href="" target="_blank" rel="nofollow"><i class="fab fa-facebook-square"></i></a>
                        <a class="social-link" href="" target="_blank" rel="nofollow"><i class="fab fa-odnoklassniki-square"></i></a>
                        <a class="social-link" href="" target="_blank" rel="nofollow"><i class="fab fa-twitter-square"></i></a>
                        <a class="social-link" href="" target="_blank" rel="nofollow"><i class="fab fa-youtube"></i></a>
                        <a class="social-link" href="" target="_blank" rel="nofollow"><i class="fab fa-instagram-square"></i></a>
                    </div>
                    <div class="footer-mob-right">
                        <a class="ya-market-link" href=""><i class="fas fa-star"></i>
                            Мы на Яндекс Маркет</a>
                    </div>
                </div>
            </div>

            <div class="col"></div>

            <div class="footer-main-3 col-xl-auto">
                <div class="footer-title footer-title1"><span>Другие проекты Nikon</span></div>
                <a class="footer-projects-link" href="" target="_blank"><img src="images/my-nikon.png" alt width="175"></a>
                <a class="footer-projects-link img-nps" href="" target="_blank"><img src="images/nps.png" alt width="160"></a>

                <div class="canon-school-section">
                    <a class="canon-school-logo" href="" target="_blank"><img src="images/nikon-school.png" alt width="100"></a>
                    <div class="canon-school-section__title">Пройдите обучение курсам фотографии в нашей школе </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container3">
        <div class="footer_bottom">
            <div class="ns-footer_bottom-holder">

                <div class="ns-footer_bottom-left">
                    <div class="ns-footer_bottom-left-top">
                        <span class="footer-copyright footer-first-column">Canon Россия © 2021</span>
                        <div class="footer-other-links">
                            <a class href="">Политика конфиденциальности</a>
                            <a class href="/">Публичная оферта</a>
                            <a class="footer-map-link" href="">Карта сайта</a>
                        </div>
                    </div>
                </div>

                <div class="ns-footer_bottom-right">
                    <div class="footer-info-text">
                        Все цены указаны в рублях и включают в себя все налоги и сборы. Кол-во товара ограничено. Предложения действительны, при наличии товара на складе </div>
                    <div class="footer-info-age"> 18+ </div>
                </div>

                <!-- <div class="div-18">
                    18 +
                </div> -->
            </div>

            <div class="ns-footer_infospice">
                Разработка сайта -
                <a href="https://www.infospice.ru/" target="_blank">infospice.ru
                    <img src="images/infospise-icon.png" alt="img">
                </a>
            </div>

        </div>
    </div>
</footer>
<!-- ----------------  end of Footer  ------------------------ -->
<div>
    <div class="openDraw" id="showUp" style="display: none;">
        <section class="showItem1"
                 data-toggle="modal"  id="myBtn">
            <svg class="b24-crm-button-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 28">
                <path class="b24-crm-button-webform-icon" fill=" #000000" fill-rule="evenodd"
                      d="M815.406703,961 L794.305503,961 C793.586144,961 793,961.586144 793,962.305503 L793,983.406703 C793,984.126062 793.586144,984.712206 794.305503,984.712206 L815.406703,984.712206 C816.126062,984.712206 816.712206,984.126062 816.712206,983.406703 L816.712206,962.296623 C816.703325,961.586144 816.117181,961 815.406703,961 L815.406703,961 Z M806.312583,979.046143 C806.312583,979.454668 805.975106,979.783264 805.575462,979.783264 L796.898748,979.783264 C796.490224,979.783264 796.161627,979.445787 796.161627,979.046143 L796.161627,977.412044 C796.161627,977.003519 796.499105,976.674923 796.898748,976.674923 L805.575462,976.674923 C805.983987,976.674923 806.312583,977.0124 806.312583,977.412044 L806.312583,979.046143 L806.312583,979.046143 Z M813.55946,973.255747 C813.55946,973.664272 813.221982,973.992868 812.822339,973.992868 L796.889868,973.992868 C796.481343,973.992868 796.152746,973.655391 796.152746,973.255747 L796.152746,971.621647 C796.152746,971.213122 796.490224,970.884526 796.889868,970.884526 L812.813458,970.884526 C813.221982,970.884526 813.550579,971.222003 813.550579,971.621647 L813.550579,973.255747 L813.55946,973.255747 Z M813.55946,967.45647 C813.55946,967.864994 813.221982,968.193591 812.822339,968.193591 L796.889868,968.193591 C796.481343,968.193591 796.152746,967.856114 796.152746,967.45647 L796.152746,965.82237 C796.152746,965.413845 796.490224,965.085249 796.889868,965.085249 L812.813458,965.085249 C813.221982,965.085249 813.550579,965.422726 813.550579,965.82237 L813.550579,967.45647 L813.55946,967.45647 Z"
                      transform="translate(-793 -961)"></path>
            </svg></section>
        <section class="showItem2">
            <img class="telegramImg" src="./images/telegram.png" alt="">
        </section>
    </div>
    <button type="menu" class="gButton" id="btn" onclick="openBox()">
        <svg class="b24-crm-button-icon b24-crm-button-icon-active" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
             viewBox="0 0 28 29">
            <path class="b24-crm-button-chat-icon" fill="#000000" fill-rule="evenodd"
                  d="M878.289968,975.251189 L878.289968,964.83954 C878.289968,963.46238 876.904379,962 875.495172,962 L857.794796,962 C856.385491,962 855,963.46238 855,964.83954 L855,975.251189 C855,976.924031 856.385491,978.386204 857.794796,978.090729 L860.589592,978.090729 L860.589592,981.876783 L860.589592,983.76981 L861.521191,983.76981 C861.560963,983.76981 861.809636,982.719151 862.45279,982.823297 L866.179185,978.090729 L875.495172,978.090729 C876.904379,978.386204 878.289968,976.924031 878.289968,975.251189 Z M881.084764,971.465135 L881.084764,976.197702 C881.43316,978.604561 879.329051,980.755508 876.426771,980.93027 L868.042382,980.93027 L866.179185,982.823297 C866.400357,983.946455 867.522357,984.94992 868.973981,984.716324 L876.426771,984.716324 L879.221567,988.502377 C879.844559,988.400361 880.153166,989.448891 880.153166,989.448891 L881.084764,989.448891 L881.084764,987.555864 L881.084764,984.716324 L882.947962,984.716324 C884.517696,984.949819 885.742758,983.697082 885.742758,981.876783 L885.742758,974.304675 C885.742659,972.717669 884.517597,971.465135 882.947962,971.465135 L881.084764,971.465135 Z"
                  transform="translate(-855 -962)"></path>
        </svg>
    </button>
    <!-- Modal -->


    <!-------------------------------- Beginning of  Modal ----------------------------------->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="b24-form-header b24-form-padding-side">
                <div class="header-title">Обратная связь</div>
                <div class="header-description">Поделитесь мнением о нашей работе или задайте нам любой интересующий вас вопрос в поле комментарий</div>
            </div>
            <div class="inputBlock">
                <input class="inputBtn1" type="text" placeholder="Имя">
                <input class="inputBtn1" type="text" placeholder="Фамилия">
                <input class="inputBtn1" type="text" placeholder="Телефон">
                <input class="inputBtn1" type="text" placeholder="E-mail">
                <textarea name="" class="modal-popup-textarea inputBtn1" placeholder="Чем мы можем помочь?" cols="50" rows="50"></textarea>
                <section class="checkboxPopup" id="popUpShow" onclick="secondOpenBox()">
                    <input type="checkbox" id="showRatings" name="showRatings" class="checkboxItemModal" checked required>
                    <span class="checkboxLabel"><span style=" margin-right: 30px;"></span> Нажимая кнопку «Отправить», я даю свое согласие на обработку <br> моих
                персональных данных, в соответствии с Федеральным законом<br> от 27.07.2006 года №152-ФЗ «О персональных данных», на
                условиях и для целей,определенных в Согласии на обработку персональных данных</span>
                </section>
                <button type="submit" class="yellowBtnPopup">
                    Отправить
                </button>
            </div>
        </div>
    </div>
</div>
<!-------------------------------- End of  Modal ----------------------------------->
<!-------------------------------- Beginning of  Modal ----------------------------------->
<!-- <button id="myBtn">Open Modal</button> -->

<!-- The Modal -->
<div id="mySecondModal" class="secondModal">

    <!-- Modal content -->
    <div class="secondModal-content">
        <span class="secondClose">&times;</span>
        <div style="overflow: scroll;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo placeat natus eius sed atque earum unde quisquam quia? Dicta ullam nam consequuntur incidunt in, aperiam ipsum laborum nobis. Est alias magni eum a distinctio dolorem quod modi necessitatibus vitae fugiat, nobis, nemo et neque praesentium, sunt veniam dolore rem? Veniam sed pariatur porro reprehenderit animi fugit, modi a laboriosam alias nesciunt ipsum, fuga provident iusto nobis tenetur earum aliquam? Soluta autem excepturi possimus maiores nisi nemo fugit beatae molestias, temporibus deserunt, voluptatum libero illo dolores earum iure vel reprehenderit ipsum quasi quo placeat ex vero eveniet! Nulla harum dolorum ducimus? Earum omnis esse dolorum suscipit natus. Perferendis doloremque placeat eaque cupiditate nobis atque nostrum, vitae laborum voluptate. Laboriosam maxime fuga aspernatur nam neque perferendis, autem vel quisquam eius. Sunt quia error minima repellendus, eveniet iste doloribus, tempora praesentium dolores, excepturi ea labore quos? Ipsam dolores quis beatae fugit. Harum, itaque.


        </div>
    </div>

</div>

<!-------------------------------- End of  Modal ----------------------------------->



<script>
    var secondModal = document.getElementById("mySecondModal");

    var popUpBtn = document.getElementById("popUpShow");

    var secondClose = document.getElementsByClassName("secondClose")[0];

    popUpBtn.onclick = function () {
        secondModal.style.display = "block";
    }

    secondClose.onclick = function () {
        secondModal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            secondModal.style.display = "none";
        }
    }


    function openBox() {
        var x = document.getElementById("showUp");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }



    var modal = document.getElementById("myModal");
    var x = document.getElementById("showUp");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        modal.style.display = "block";
        x.style.display = "none";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


</script>




<!-- --------------------- Beginning of Search ---------------------- -->
<script>

</script>
<!-- --------------------- End of Search ---------------------- -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>