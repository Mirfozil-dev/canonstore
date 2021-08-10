<!---------------------------- Body ---------------------------------->
<div class="product" style="position: relative; top: 180px;">
  <div class="container">
    <div class="product-wrapper">
      <ul class="breadcrumbs-list">
        <li>
          <a href="/">Главная</a>
        </li>
        <li>
          <a href="/site/catalog?category_id=<?= $product['category']['parent']['parent']['id'] ?>"><?= $lang == 'ru' ? $product['category']['parent']['parent']['title_ru'] : $product['category']['parent']['parent']['title_en'] ?></a>
        </li>
        <li>
          <a href="/site/catalog?category_id=<?= $product['category']['parent']['id'] ?>"><?= $lang == 'ru' ? $product['category']['parent']['title_ru'] : $product['category']['parent']['title_en'] ?></a>
        </li>
        <li>
          <a href="/site/catalog?category_id=<?= $product['category']['id'] ?>"><?= $lang == 'ru' ? $product['category']['title_ru'] : $product['category']['title_en'] ?></a>
        </li>
        <li><?= $product['title'] ?></li>
      </ul>
      <h1 class="page-title"><?= $product['title'] ?></h1>
    </div>
    <div class="product-wrapper-2">

      <div class="product-left">
        <!----------------------- Swiper --------------------------->
        <!-- Swiper -->
        <div class="swiperContainer">
          <div
              style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
              class="swiper-container mySwiper2"
          >
            <div class="swiper-wrapper">
              <?php foreach ( $product['productImages'] as $image ): ?>
                <div class="swiper-slide">
                  <img src="<?=Yii::getAlias('@web').'/'.$image['img'] ?>" />
                </div>
              <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div thumbsSlider="" class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                <?php foreach ( $product['productImages'] as $image ): ?>

                  <div class="swiper-slide">
                    <img src="<?=Yii::getAlias('@web').'/'.$image['img'] ?>" />
                  </div>
                <?php endforeach; ?>

            </div>
          </div>
        </div>
        <!----------------------- Swiper --------------------------->
      </div>

      <div class="product-right">
        <div class="rating-section">
          <div class="rating-sec-left">
            <div class="rating-star-icon">
              <?php if ($rating == 5):?>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              <? endif; ?>
              <?php if($rating == 4):?>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <? endif; ?>
              <?php if($rating == 3):?>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <? endif; ?>
              <?php if($rating == 2):?>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <? endif; ?>
              <?php if($rating == 1):?>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <? endif; ?>
              <?php if($rating == 0):?>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <? endif; ?>
            </div>
            <div class="rating-num">(<?= $reviewsCount ?>)</div>
            <div class="rating-link">
              <a href="#review-popup">
                Оставить отзыв
              </a>
            </div>
          </div>
          <div class="rating-sec-right">
            <div class="rating-sec-right-div">
              <i class="far fa-heart"></i>
              <i class="fas fa-heart fasheart"></i>
            </div>
            <div class="rating-sec-right-div">
              <i class="fas fa-balance-scale"></i>
              <div class="speech-bubble1">Сравнение</div>
            </div>
          </div>
        </div>
        <div class="product-status-text">
          <?php if ($product['instock'] == 1): ?>
            <div class="product-status">
              <span>В наличии</span>
            </div>
          <?php endif; ?>
          <?php if ($product['instock'] == 0): ?>
            <div class="product-status-red">
              <span>Нет в наличии</span>
            </div>
          <?php endif; ?>
        </div>
        <div class="product-price">
          <span><?= count($product['discounts']) > 0 ? $product['discounts'][0]['discount_price'] : $product['price'] ?></span>
        </div>
        <div class="product-buy-sec-left">
          <div class="product-buy-sec-left-btn product-buy-sec-left-top-btn">
            <a href="#product-in-cart">
              <button>В корзину</button>
            </a>
          </div>
          <div class="product-buy-sec-left-btn product-buy-sec-left-bottom-btn">
            <a href="#fast-buy-popup">
              <button>Заказ в 1 клик</button>
            </a>
          </div>
        </div>
        <div class="product-delivery">
          <div class="product-deliv-top">
            <i class="fas fa-truck"></i>
            <ul class="delivery-ul">
              <li class="delivery-li">Курьер: 0 руб., 1-2 дня</li>
              <li class="delivery-li">Самовывоз: 0 руб., в любой день работы магазина</li>
            </ul>
            <div class="product-delivery-more">
              <a href="#delivery-popup">Подробнее о доставке</a>
            </div>
          </div>
          <a class="delivery-wallet-a" href="#payment-popup">
            <div class="product-deliv-bottom">
              <i class="fas fa-wallet"></i>
              <span>Варианты оплаты</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!------------------ Body End ------------------>
<!-- ------------------------ Beginning of Video Section ---------------------------- -->
<div class="productVideoWrapper">
  <div class="productVideoNavbar">
    <div class="productVideoNavbarWrapper">
      <ul>
        <div><a href="product.html#productVideoVideo"><li>ВИДЕО</li></a></div>
        <div><a href="product.html#productVideoTable"><li>ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</li></a></div>
        <div><a href="product.html#productSimilarProducts"><li>ПОХОЖИЕ ТОВАРЫ</li></a></div>
        <div><a href="product.html#productRatingWrapper"><li>ОТЗЫВЫ</li></a></div>
      </ul>
    </div>
  </div>

  <div class="productVideoVideo" id="productVideoVideo">
    <h3>ПРИМЕРЫ ВИДЕО</h3>
    <div class="productVideoUnderscore"></div>
    <div class="productVideoiFrame">
      <?php if ($product['video_link'] !== null): ?>
        <iframe width="960" height="540" src="<?= $product['video_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <?php endif; ?>
    </div>
  </div>

  <div class="productVideoTable" id="productVideoTable">
    <h3>ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</h3>
    <div class="productVideoDetailUnderscore"></div>
    <div class="productVideoDetailTAble">
      <?php foreach ($optionGroups as $optionGroup): ?>
        <div class="productTableL">
          <div class="productTableLine">
            <div class="productTableEl1"><?= $lang == 'ru' ? $optionGroup['title_ru'] : $optionGroup['title_en'] ?></div>
            <div class="d-flex">
              <?php foreach ($optionGroup['options'] as $option): ?>
                <div class="productTableEl2" ><?= $lang == 'ru' ? $option['title_ru'] : $option['title_en'] ?></div>
                <?= $option == end($optionGroup['options'])  ? '' : ', ' ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <div class="productShowMoreBtn" onclick="showBtn()">Все характеристики</div>
  </div>



  <!-- Discount -->
  <div class="container-xl" style="margin-bottom: 100px;" id="productSimilarProducts">
    <div class="discount" style="display: flex; ">
      <div class="discount_header" style="margin-top: 0; display: flex; align-items: center; width: auto;">
        К ЭТОМУ ТОВАРУ ПОДХОДЯТ
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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
          <a href="./product.html" class="offer_to_cart">В корзину</a>
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

  <div class="productRatingWrapper" id="productRatingWrapper">
    <div class="productRating">
      <div class="productRating1">
        <div class="productRating1Heading">ОТЗЫВЫ</div>
        <div class="productRating1StarDiv">
          <div class="productRating1Stars">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <div class="productRating1Link"><a href="">Оставить отзыв</a></div>
        </div>
      </div>
      <div class="productRating2">Пока нет отзывов. Вы можете добавить свой.</div>
      <div class="productRating3">
        <div class="productRatingBtn">Оставить отзыв</div>
      </div>
    </div>
  </div>

</div>
<!-- ------------------------ End of Video Section ---------------------------- -->
<!-- Initialize Swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
<script>
    const productVideoDetailTAble = document.querySelector(".productVideoDetailTAble");
    const productShowMoreBtn = document.querySelector(".productShowMoreBtn");

    productShowMoreBtn.addEventListener("click", e => {
        if(productVideoDetailTAble.style.height == "260px") {
            productVideoDetailTAble.style.height = "100%";
        } else {
            productVideoDetailTAble.style.height = '260px';
        }
    });
</script>