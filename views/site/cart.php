<?php //echo '<pre>';print_r($cartItems);die();?>
<!-- Body -->

<!-- Like Address -->
<div class="product_top_space"></div>
<div class="container-sm">
    <div class="scale" style="position: relative;">
        <div class="product-wrapper">
            <ul class="breadcrumbs-list">
                <li>
                    <a href="/">Главная</a>
                </li>
                <li>Корзина</li>
            </ul>
            <h1 class="page-title">
                МОЯ Корзина</h1>
        </div>
    </div>
</div>

<div class="container-sm cart_body" style="top:0;">
    <div class="cart_left_box">
        <div class="delivery">
            <i class="fas fa-truck"></i>
            <p style="margin: 0 20px;">
                        <span style="font-weight: bold; margin: 0 5px 0 0;">Внимание!
                        </span>
                Мы доставим Ваши товары бесплатно. Смелее переходите к оформлению заказа.</p>
        </div>

        <h6 style="margin-top: 50px;">ДОСТУПНО ДЛЯ ЗАКАЗА:</h6><br><br>
        <!-- offer div -->
        <?php foreach ($cartItems as $cartItem): ?>
        <div class="cart_offer">
            <div class="cart_like-times-wrapper cart_like-times-wrapper-mobile">
                <div class="like_btn like_btn-mobile">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="cart_delete_btn delete_btn delete_btn-mobile" data-id="<?= $cartItem['id'] ?>">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="img_place py-0 ">
              <?php if ($cartItem['product']['productImages'] && count($cartItem['product']['productImages']) > 0): ?>
                <img
                    class="img_place_item"
                    src="<?=Yii::getAlias('@web').'/'.$cartItem['product']['productImages'][0]['img'] ?>"
                    alt=""
                    style="height: 100%;object-fit: contain"
                    width="100%">
              <?php endif; ?>
              <?php if (count($cartItem['product']['productImages']) == 0 || $cartItem['product']['productImages'] == null): ?>
              <img
                  class="img_place_item"
                  src="<?=Yii::getAlias('@web') ?>/images/product_placeholder.png"
                  alt=""
                  style="height: 100%;object-fit: cover"
                  width="100%">
              <?php endif; ?>
            </div>
            <div class="offer_details">
                <h6 style="font-size: 16px; font-weight: 700;"><?= $cartItem['product']['title'] ?></h6>
                <div class="plus_minus_box">
                    <div class="minus cart-minus-quantity" data-id="<?= $cartItem['id'] ?>">
                        <i class="fas fa-minus"></i>
                    </div>
                    <div class="order_status"><?= $cartItem['quantity'] ?></div>
                    <div class="plus cart-plus-quantity" data-id="<?= $cartItem['id'] ?>">
                        <i class="fas fa-plus"></i>
                    </div>
                </div><br><br>
<!--                <div class="saved_box">-->
<!--                    <div class="bank_icon">-->
<!--                        <i class="fas fa-piggy-bank"></i>-->
<!--                    </div>-->
<!--                    <p class="piggy_title">За покупку Вы получаете от 2550 бонусных баллов</p>-->
<!--                </div>-->
            </div>
            <div class="price_order">
                <?php if (count($cartItem['product']['discounts']) > 0): ?>
                  <h6 class="cart_cost"><?= $cartItem['product']['discounts']['discount_price'] ?></h6>
                <?php endif; ?>
                <?php if (count($cartItem['product']['discounts']) == 0):?>
                  <h6 class="cart_cost"><?= $cartItem['product']['price'] ?></h6>
                <?php endif; ?>

                <p>за штуку</p>
<!--                <div class="skitka_place">-->
<!--                    <i class="fas fa-percent precentt"></i>-->
<!--                    <p class="skitka_type">Доступен в кредит</p>-->
<!--                </div>-->

            </div>

            <div class="price_order_big">
                <div class="close_and_like">
                    <div class="cart_like-times-wrapper">
                        <div class="like_btn">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="cart_delete_btn delete_btn" data-id="<?= $cartItem['id'] ?>">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                </div>
                <div class="cart_price">
                    <span>
                <?php if (count($cartItem['product']['discounts']) > 0): ?>
                <?= $cartItem['product']['discounts'][0]['discount_price'] ?>
                <?php endif; ?>
                <?php if (count($cartItem['product']['discounts']) == 0):?>
                 <?= $cartItem['product']['price'] ?>
                <?php endif; ?>
                    </span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>



        <!-- offer div end --><br>

        <!-- Don't Edit -->
    </div>
    <div class="cart_right_box">
        <h3 class="cart_right_box_header">ЗАКАЗ</h3>
<!--        <input type="text" class="cart_input" placeholder="Скидочный купон">-->
<!--        <a href="#" class="btn_send">Применить</a>-->
        <div class="summ">
            <div class="summ_name">Общая сумма</div>
            <div class="summ_cost">
                <?= $totalSum ?>
            </div>
        </div>
        <div class="delivery_cart">
            <div class="delivery_name">Доставка бесплатно</div>
            <div class="delivery_cost">Да</div>
        </div>
        <div class="order_btn">
            <a href="/site/order">Оформить заказ</a>
        </div>
        <p id="order_info">Быстрый заказ</p>

        <div class="line"></div>
        <div class="cart_popups">
            <div id="cart_popup">
                <i class="fas fa-calendar-day" style="font-size: 24px; margin-right: 20px;"></i>
            </div>
            <div id="cart_popup1" class="cart_popup_text">Подробнее о рассрочке</div>
            <div id="cart_popup">
                <i class="fas fa-percent" style="font-size: 24px; margin-right: 20px;"></i>
            </div>
            <div id="cart_popup2" class="cart_popup_text">Подробнее об условиях кредита
            </div>
            <div id="cart_popup">
                <i class="fas fa-wallet" style="font-size: 24px; margin-right: 20px;"></i>
            </div>
            <div id="cart_popup3" class="cart_popup_text">Варианты оплаты
            </div>
            <div id="cart_popup">
                <i class="fas fa-truck" style="font-size: 24px; margin-right: 20px;"></i>
            </div>
            <div id="cart_popup4" class="cart_popup_text">Варианты доставки
            </div>
            <div id="cart_popup">
                <i class="far fa-check-circle" style="font-size: 24px; margin-right: 20px;"></i>
            </div>
            <div id="cart_popup5" class="cart_popup_text">Гарантия производителя
            </div>

        </div>
    </div>
    <!-- Don't Edit End -->
</div>

<!-- Popups -->

<!-- Your Info -->
<div class="container-fluit">
    <div class="popup_your_info" id="cart_popup">
        <div class="info_popup_content">

            <div class="close_popup_cart">
                <i class="fas fa-times"></i>
            </div>

            <div class="popup_header_up">
                Личные данные
            </div>

            <form action="">
                <p class="which_sitys">Ваш город<span class="star">*</span>:</p>
                <input type="radio" name="" id="">
                <span class="which_city">Россия - Московская область - Москва</span><br>
                <input type="radio" name="" id="">
                <span class="which_city">Россия - Нижегородская область - Нижний Новгород</span><br>
                <input type="radio" name="" id="">
                <span class="which_city">Россия - Ленинградская область - Санкт-Петербург</span><br>
                <input type="radio" name="" id="">
                <span class="which_city">другой (ввести руками):</span><br><br>
                <input
                    type="text"
                    class="enter_input"
                    value="Москва, Московская область, Россия"><br>
                <label class="lebal_text" for="summ_name">Фамилия:</label>
                <input type="text" class="enter_input" id="surname" placeholder=""><br>
                <label class="lebal_text" for="name">Имя
                    <span class="star">*</span>:</label>
                <input type="text" class="enter_input" id="name" placeholder=""><br>
                <label class="lebal_text" for="email">Email
                    <span class="star">*</span>:</label>
                <input type="text" class="enter_input" id="email" placeholder=""><br>
                <label class="lebal_text" for="number">Контактный телефон<span class="star">*</span>:</label>
                <input
                    type="text"
                    class="enter_input"
                    id="number"
                    placeholder="+7(9__)___-__-__"><br>
                <label class="lebal_text" for="comment">Комментарий:</label>
                <textarea name="" id="comment" cols="30" rows="5" class="enter_textarea"></textarea><br>
                <label class="lebal_text" for=""><span class="star">*</span> Обязательные поля для заполнения</label><br><br>
                <div class="submit_box">
                    <input type="checkbox" name="" id="">
                    <p class="submit_text">Я принимаю условия Политикио конфиденциальности.</p><br>
                </div>
                <div class="submit_btn_box">
                    <button class="submit_btn">Купить</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Your Info End -->

<!-- Buy Popup -->
<div class="container-fluit">
    <div class="popup_your_buy" id="cart_popup1">
        <div class="info_popup_content">

            <div id="close_cart_popup_buy" class="close_popup_cart">
                <i class="fas fa-times"></i>
            </div>

            <div class="popup_header_up">
                Покупка в рассрочку
            </div>

            <p class="text_card_popup">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sunt ducimus
                quam animi beatae deserunt natus nihil! Aliquam delectus perspiciatis illum
                cumque? Quis sunt sed quasi officiis culpa esse, sint aliquid? Sequi ea voluptas
                officia ab, provident autem ipsum eaque eum culpa? Incidunt vero possimus veniam
                necessitatibus iste, mollitia nisi sapiente reiciendis cupiditate! Accusamus
                distinctio quod dolore nihil fugit mollitia qui quidem ratione modi molestias
                cupiditate tenetur atque provident, sed iure fugiat nemo, debitis ducimus
                facere, est sapiente alias? Modi nam magnam dolore ut reiciendis harum eligendi
                ea autem, accusantium, delectus quos commodi sunt, voluptate labore omnis in
                nulla facilis illum adipisci aut dolor
            </p>
        </div>
    </div>
</div>

<!-- Buy Popup End -->

<!-- 3 Popup -->
<!-- <div class="container-fluit">
    <div class="popup_your_3" id="cart_popup2">
        <div class="info_popup_content">

            <div id="close_cart_popup_3" class="close_popup_cart">
                <i class="fas fa-times"></i>
            </div>

            <div class="popup_header_up">
                Покупка в рассрочку
            </div>

            <p class="text_card_popup">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sunt ducimus
                quam animi beatae deserunt natus nihil! Aliquam delectus perspiciatis illum
                cumque? Quis sunt sed quasi officiis culpa esse, sint aliquid? Sequi ea voluptas
                officia ab, provident autem ipsum eaque eum culpa? Incidunt vero possimus veniam
                necessitatibus iste, mollitia nisi sapiente reiciendis cupiditate! Accusamus
                distinctio quod dolore nihil fugit mollitia qui quidem ratione modi molestias
                cupiditate tenetur atque provident, sed iure fugiat nemo, debitis ducimus
                facere, est sapiente alias? Modi nam magnam dolore ut reiciendis harum eligendi
                ea autem, accusantium, delectus quos commodi sunt, voluptate labore omnis in
                nulla facilis illum adipisci aut dolor
            </p>
        </div>
    </div>
</div> -->

<!-- 3 Popup End -->

<!-- 4 Popup -->
<!-- <div class="container-fluit">
    <div class="popup_your_3" id="cart_popup1">
        <div class="info_popup_content">

            <div id="close_cart_popup_buy" class="close_popup_cart">
                <i class="fas fa-times"></i>
            </div>

            <div class="popup_header_up">
                Покупка в рассрочку
            </div>

            <p class="text_card_popup">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sunt ducimus
                quam animi beatae deserunt natus nihil! Aliquam delectus perspiciatis illum
                cumque? Quis sunt sed quasi officiis culpa esse, sint aliquid? Sequi ea voluptas
                officia ab, provident autem ipsum eaque eum culpa? Incidunt vero possimus veniam
                necessitatibus iste, mollitia nisi sapiente reiciendis cupiditate! Accusamus
                distinctio quod dolore nihil fugit mollitia qui quidem ratione modi molestias
                cupiditate tenetur atque provident, sed iure fugiat nemo, debitis ducimus
                facere, est sapiente alias? Modi nam magnam dolore ut reiciendis harum eligendi
                ea autem, accusantium, delectus quos commodi sunt, voluptate labore omnis in
                nulla facilis illum adipisci aut dolor
            </p>
        </div>
    </div>
</div> -->

<!-- 4 Popup End -->

<!-- 5 Popup -->
<!-- <div class="container-fluit">
    <div class="popup_your_5" id="cart_popup1">
        <div class="info_popup_content">

            <div id="close_cart_popup_buy" class="close_popup_cart">
                <i class="fas fa-times"></i>
            </div>

            <div class="popup_header_up">
                Покупка в рассрочку
            </div>

            <p class="text_card_popup">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sunt ducimus
                quam animi beatae deserunt natus nihil! Aliquam delectus perspiciatis illum
                cumque? Quis sunt sed quasi officiis culpa esse, sint aliquid? Sequi ea voluptas
                officia ab, provident autem ipsum eaque eum culpa? Incidunt vero possimus veniam
                necessitatibus iste, mollitia nisi sapiente reiciendis cupiditate! Accusamus
                distinctio quod dolore nihil fugit mollitia qui quidem ratione modi molestias
                cupiditate tenetur atque provident, sed iure fugiat nemo, debitis ducimus
                facere, est sapiente alias? Modi nam magnam dolore ut reiciendis harum eligendi
                ea autem, accusantium, delectus quos commodi sunt, voluptate labore omnis in
                nulla facilis illum adipisci aut dolor
            </p>
        </div>
    </div>
</div> -->

<!-- 5 Popup End -->

<!-- Popups End -->

<!-- Body End -->