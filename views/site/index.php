<!-- Carusel Section -->

<div
    id="carouselExampleIndicators"
    class="container-fluid carousel slide"
    data-bs-ride="carousel">
  <div class="carousel-indicators">
      <?php
      foreach ($carousel as $key => $item) {
      ?>
        <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="<?= $key ?>"
            class="<?php if ($carousel[0] === $item) echo 'active'?>"
            aria-current="<?php if ($carousel[0] === $item) echo 'true'?>"
            aria-label="<?= $item['title'] ?>"></button>
      <?php
      }
      ?>
  </div>
  <div class="carousel-inner">
    <?php
    if (count($carousel) > 0) {
        foreach ($carousel as $item) {
            ?>
              <div class="carousel-item <?php if ($carousel[0] === $item) echo 'active'?>">
                <img src="<?=Yii::getAlias('@web'); ?>/<?= $item['img'] ?>" class="d-block w-100" alt="...">
                <div class="carusel-items">
                  <p class="carusel_header1"><?= $item['title'] ?></p>
                  <p class="caruse_name1"><?= $item['body'] ?></p>
                  <a class="carusel_btn1" href="/site/product/<?= $item['product_id'] ?>">Подробнее</a>
                </div>
              </div>
            <?php
        }
    } else {
      ?>
        <div class="carousel-item active">
          <img src="<?=Yii::getAlias('@web'); ?>/images/carousel_bg.jpg" class="d-block w-100" alt="...">
        </div>
      <?php
    }
    ?>
  </div>
  <?php if (count($carousel) > 0) { ?>
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  <?php
  }
  ?>
</div>

<!-- Carusel Section End -->

<!-- Discount -->
<div class="container-xl">
  <div class="discount">
    <div class="discount_header">
      АКЦИИ И СКИДКИ
    </div>
    <button class="choose_tovars_btn1">
      все товары
      <span class="icon_down">
                    <i class="fas fa-chevron-down"></i>
                </span>
      <ul id="" class="choose_tovars">
        <li class="choose_tovar">
          <a href="#">все товары</a>
        </li>
        <li class="choose_tovar">
          <a href="#">Фотокамеры</a>
        </li>
        <li class="choose_tovar">
          <a href="#">Спортивная оптика</a>
        </li>
        <li class="choose_tovar">
          <a href="#">Объективы</a>
        </li>
      </ul>
    </button>
    <div class="discount_menu">
      <a href="#" class="discount_href active">Все товары</a>
      <a href="#" class="discount_href1">Фотокамеры</a>
      <a href="#" class="discount_href2">Спортивная оптика</a>
      <a href="#" class="discount_href3">Объективы</a>
      <div href="#" class="drop_discount_hiddens"><img
            src="<?=Yii::getAlias('@web'); ?>/images/line-angle-right.png"
            width="10px"
            style="transform: rotate(90deg);"
            alt="">
        <div class="hidden_items">
          <div class="hidden_item1">
            <a href="#" class="hidden_item_a1">Фотокамеры</a>
          </div>
          <div class="hidden_item2">
            <a href="#" class="hidden_item_a2">Спортивная оптика</a>
          </div>
          <div class="hidden_item3">
            <a href="#" class="hidden_item_a3">Объективы</a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container_carusel">
    <div class="img_container_carusel" id="images_carusel">
      <!-- 1 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 2 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 3 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 4 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 5 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 6 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 7 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 8 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 9 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 10 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 11 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>
      <!-- 12 offer -->
      <div class="img_carusel">
        <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
        <a href="/site/product" class="offer_to_cart">В корзину</a>
      </div>

    </div>
  </div>
  <div class="buttons_container_carusel">
    <div class="btn_carusel" id="left_carusel" onclick="minusOffer()">
      <i class="fa fa-arrow-left"></i>
    </div>
    <p class="offerNum" style="margin-left: 30px;" id="offerNum">1</p>
    <span class="offerNum" style="margin-right: 30px;">/ 12</span>
    <div class="btn_carusel" id="right_carusel" onclick="plusOffer()">
      <i class="fa fa-arrow-right"></i>
    </div>
  </div>

</div>

<!-- Discount End -->

<!-- Photocamera -->
<div class="container-xl" style="margin-top: 100px;">
  <div class="discount">
    <div class="discount_header">
      ФОТОКАМЕРЫ CANON
    </div>
    <button class="choose_tovars_btn1">
      все товары
      <span class="icon_down">
                    <i class="fas fa-chevron-down"></i>
                </span>
      <ul id="" class="choose_tovars">
        <li class="choose_tovar">
          <a href="#">все товары</a>
        </li>
        <li class="choose_tovar">
          <a href="#">#выгодное_предложение</a>
        </li>
        <li class="choose_tovar">
          <a href="#">#отличный_подарок</a>
        </li>
        <li class="choose_tovar">
          <a href="#">Объективы</a>
        </li>
      </ul>
    </button>
    <div class="discount_menu">
      <a href="#" class="discount_href active">Все товары</a>
      <a href="#" class="discount_href1">#выгодное_предложение</a>
      <a href="#" class="discount_href2">#отличный_подарок</a>
      <a href="#" class="discount_href3">#люди_и_события</a>
      <div href="#" class="drop_discount_hiddens"><img
            src="<?=Yii::getAlias('@web'); ?>/images/line-angle-right.png"
            width="10px"
            style="transform: rotate(90deg);"
            alt="">
        <div class="hidden_items">
          <div class="hidden_item1">
            <a href="#" class="hidden_item_a1">#выгодное_предложение</a>
          </div>
          <div class="hidden_item2">
            <a href="#" class="hidden_item_a2">#отличный_подарок</a>
          </div>
          <div class="hidden_item3">
            <a href="#" class="hidden_item_a3">#люди_и_события</a>
          </div>
          <div class="hidden_item">
            <a href="#" class="hidden_item_a">#дом_и_семья</a><br>
          </div>
          <div class="hidden_item">
            <a href="#" class="hidden_item_a">#фоторепортаж</a><br>
          </div>
          <div class="hidden_item">
            <a href="#" class="hidden_item_a">#видеосъемка</a><br>
          </div>
          <div class="hidden_item">
            <a href="#" class="hidden_item_a">#коммерческая фотография</a><br>
          </div>
        </div>
      </div>
    </div>

    <div class="container_carusel">
      <div class="img_container_carusel" id="images_carusel1">
        <!-- 1 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 2 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 3 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 4 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 5 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 6 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 7 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 8 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 9 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 10 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 11 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 12 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 13 offer -->
        <div class="img_carusel1">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>

      </div>
    </div>
    <div class="buttons_container_carusel">
      <div class="btn_carusel" id="left_carusel1" onclick="minusOffer1()">
        <i class="fa fa-arrow-left"></i>
      </div>
      <p class="offerNum" style="margin-left: 30px;" id="offerNum1">1</p>
      <span class="offerNum" style="margin-right: 30px;">/ 13</span>
      <div class="btn_carusel" id="right_carusel1" onclick="plusOffer1()">
        <i class="fa fa-arrow-right"></i>
      </div>
    </div>
    <div class="buttons_container_carusel">
      <a href="/site/product" class="obective_href">Все ФОТОКАМЕРЫ
      </a>
    </div>

  </div>
</div>

<!-- Photocamera End -->

<!-- Obective -->

<div class="container-xl" style="margin-top: 100px;">
  <div class="discount">
    <div class="discount_header">
      ОБЪЕКТИВЫ CANON
    </div>
    <div class="discount_menu">
      <a href="#" class="discount_href active">Все товары</a>
      <a href="#" class="discount_href1">#выгодное_предложение</a>
      <a href="#" class="discount_href2">#отличный_подарок</a>
      <a href="#" class="discount_href3">#люди_и_события</a>
      <div href="#" class="drop_discount_hiddens"><img
            src="<?=Yii::getAlias('@web'); ?>/images/line-angle-right.png"
            width="10px"
            style="transform: rotate(90deg);"
            alt="">
        <div class="hidden_items">
          <div class="hidden_item1">
            <a href="#" class="hidden_item_a1">#выгодное_предложение</a>
          </div>
          <div class="hidden_item2">
            <a href="#" class="hidden_item_a2">#отличный_подарок</a>
          </div>
          <div class="hidden_item3">
            <a href="#" class="hidden_item_a3">#люди_и_события</a>
          </div>
          <div class="hidden_item">
            <a href="#" class="hidden_item_a">#дом_и_семья</a><br>
          </div>
          <div class="hidden_item">
            <a href="#" class="hidden_item_a">#фоторепортаж</a><br>
          </div>
          <div class="hidden_item">
            <a href="#" class="hidden_item_a">#видеосъемка</a><br>
          </div>
          <div class="hidden_item">
            <a href="#" class="hidden_item_a">#коммерческая фотография</a><br>
          </div>
        </div>
      </div>
    </div>

    <div class="container_carusel">
      <div class="img_container_carusel" id="images_carusel2">
        <!-- 1 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 2 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 3 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 4 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 5 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 6 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 7 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 8 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 9 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 10 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 11 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 12 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>
        <!-- 13 offer -->
        <div class="img_carusel2">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
          <a href="/site/product" class="offer_to_cart">В корзину</a>
        </div>

      </div>
    </div>
    <div class="buttons_container_carusel">
      <div class="btn_carusel" id="left_carusel2" onclick="minusOffer2()">
        <i class="fa fa-arrow-left"></i>
      </div>
      <p class="offerNum" style="margin-left: 30px;" id="offerNum2">1</p>
      <span class="offerNum" style="margin-right: 30px;">/ 13</span>
      <div class="btn_carusel" id="right_carusel2" onclick="plusOffer2()">
        <i class="fa fa-arrow-right"></i>
      </div>
    </div>
    <div class="buttons_container_carusel">
      <a href="/site/product" class="obective_href">Все объективы
      </a>
    </div>

  </div>
</div>
<!-- Obektive End -->

<!-- CHOOSE ACCESSORIES -->
<div class="container-xl">

  <div class="row">
    <div class="col-md-4 add_product">
      <div class="discount_header">
        ПОДБЕРИТЕ АКСЕССУАРЫ
      </div>
      <div class="choose_product_add">
        <h6 class="choose_product_add_header">Укажите вашу технику:</h6>
        <div class="choose_product_add_input"><input type="text" placeholder="Поиск">
          <span class="choose_product_add_icon">
                            <i class="fas fa-search"></i>
                        </span>
        </div>
        <div class="choose_product_add_img">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel/img_corusel.png" alt="" width="100%">
        </div>
        <h5>D850 Body (без объектива)</h5>
        <div class="choose_product_add_img">
          <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/add_img.png" alt="" width="50%">
        </div>
        <div class="product_info">
          <a href="/site/product" class="product_info_href">Подробнее о товаре</a>
        </div>
      </div>
    </div>

    <div class="col-md-8 add_products">
      <div class="dropdown_div">
        <button class="choose_tovars_btn">
          Категории
          <span class="icon_down">
                            <i class="fas fa-chevron-down"></i>
                        </span>
          <ul id="" class="choose_tovars">
            <li class="choose_tovar">
              <a href="#">все товары</a>
            </li>
            <li class="choose_tovar">
              <a href="#">Аксессуары для визирования</a>
            </li>
            <li class="choose_tovar">
              <a href="#">Аксессуары для макро съемки</a>
            </li>
            <li class="choose_tovar">
              <a href="#">Аксессуары для подключения</a>
            </li>
            <li class="choose_tovar">
              <a href="#">Защита фотокамер</a>
            </li>
            <li class="choose_tovar">
              <a href="#">Карты памяти</a>
            </li>
            <li class="choose_tovar">
              <a href="#">Насадки и фильтры</a>
            </li>
            <li class="choose_tovar">
              <a href="#">Питание фотокамер</a>
            </li>
            <li class="choose_tovar">
              <a href="#">Управление фотокамерами</a>
            </li>
            <li class="choose_tovar">
              <a href="#">Штативы, моноподы</a>
            </li>
          </ul>
        </button>
      </div>
      <div class="container_carusel3">
        <div class="img_container_carusel" id="images_carusel3">
          <!-- 1 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 2 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 3 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 4 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 5 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 6 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 7 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 8 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 9 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 10 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 11 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 12 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 13 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 14 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 15 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <!-- 16 offer -->
          <div class="img_carusel3">
            <img src="<?=Yii::getAlias('@web'); ?>/images/home_img/carusel_item.jpg" alt="">
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
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>

        </div>
      </div>
      <div class="buttons_container_carusel">
        <div class="btn_carusel" id="left_carusel3" onclick="minusOffer3()">
          <i class="fa fa-arrow-left"></i>
        </div>
        <p class="offerNum" style="margin-left: 30px;" id="offerNum3">1</p>
        <span class="offerNum" style="margin-right: 30px;">/ 16</span>
        <div class="btn_carusel" id="right_carusel3" onclick="plusOffer3()">
          <i class="fa fa-arrow-right"></i>
        </div>
      </div>

    </div>
    <div class="buttons_container_carusel">
      <a href="/site/product" class="obective_href">Все аксессуары
      </a>
    </div>
  </div>
</div><br><br>

<!-- CHOOSE ACCESSORIES End -->

<!-- Photo Section -->

<div class="container-xl">
  <div class="discount_header">
    ВДОХНОВЛЯЙТЕСЬ МОМЕНТАМИ, СНЯТЫМИ NIKON!
    <br><br>
    <h6>Отмечайте @nikonrussia на фото, сделанных с Nikon, и мы разместим ваше фото
      на сайте. Чтобы узнать подробнее о модели фотоаппарата или сделать заказ,
      кликайте по фото.</h6> </div>
  <div class="row" style="margin-left: 0px; padding: 0;" >
    <div class="col-sm-4">
      <div class="photo_img" style="background-image: url(<?=Yii::getAlias('@web'); ?>/images/home_img/carusel/photo_section3_files/photo_img.jpg);">
                        <span class="photo_img_after"><br><br>
                            @photo_dary...<br><br>
                            <i class="far fa-heart icon_heart"></i>14 <i class="far fa-comment-alt"></i>2<br><br>
                            <div class="bag_icon">
                                <i class="fas fa-shopping-bag"></i>
                            </div>

                        </span>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="photo_img" style="background-image: url(<?=Yii::getAlias('@web'); ?>/images/home_img/carusel/photo_section3_files/photo_img1.jpg);">
                    <span class="photo_img_after"><br><br>
                        @tatti_dary...<br><br>
                        <i class="far fa-heart icon_heart"></i>100 <i class="far fa-comment-alt"></i>20<br><br>
                        <div class="bag_icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>

                    </span>
      </div>
    </div>
    <div class="col-sm-4" >
      <div class="photo_img" style="background-image: url(<?=Yii::getAlias('@web'); ?>/images/home_img/carusel/photo_section3_files/photo_img2.jpg);">
                        <span class="photo_img_after"><br><br>
                            @sowuschka...<br><br>
                            <i class="far fa-heart icon_heart"></i>31 <i class="far fa-comment-alt"></i>5<br><br>
                            <div class="bag_icon">
                                <i class="fas fa-shopping-bag"></i>
                            </div>

                        </span>
      </div>
    </div>
  </div>

  <div class="buttons_container_carusel">
    <a href="/site/product" class="obective_href">
      Все фото
    </a>
  </div>
</div>


<!-- Photo Section End -->

<!-- Все новости Section -->

<?php if (count($news) > 0): ?>
  <div class="container-xl">
    <div class="discount_header">
      #CANONSTORE
      <br><br> </div>
    <div class="row" style="margin-left: 0px; padding: 0;" >
        <?php foreach ($news as $item): ?>
          <div class="col-sm-4">
            <div class="photo_img" style="background-image: url(<?=Yii::getAlias('@web').'/'.$item['img'] ?>);">
        <span class="photo_img_after1">
            <span class="tangle_top"></span>
            <br>
            <p><br><br>
                <?= $item['title'] ?></p>
            <span class="tangle_bottom"></span>
        </span>
            </div>
          </div>
        <?php endforeach; ?>
    </div>

    <div class="buttons_container_carusel">
      <a href="/site/news" class="obective_href">
        Все новости
      </a>
    </div>
  </div><br><br><br><br>
<?php endif; ?>

<!-- Все новости Section End -->
