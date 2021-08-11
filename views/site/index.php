<?php
use yii\helpers\Url;
?>
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

<?php if ($discountProducts): ?>
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
      <?php foreach ($discountProducts as $discountProduct): ?>
        <div style="width: 300px" class="img_carusel">
          <a href="/site/product?id=<?= $discountProduct['product']['id'] ?>">
              <?php if (count($discountProduct['product']['productImages']) > 0): ?>
                <img style="width: 100%;height: 100%; object-fit: cover" src="<?=Yii::getAlias('@web').'/'.$discountProduct['product']['productImages'][0]['img'] ?>" alt="">
              <?php endif; ?>
              <?php if (count($discountProduct['product']['productImages']) == 0 || $discountProduct['product']['productImages'] == null): ?>
                <img src="<?=Yii::getAlias('@web');?>/images/product_placeholder.jpg" alt="">
              <?php endif; ?>
          </a>
          <div class="skitka mt-2">
            <div class="skitka_item">В скидке</div>
          </div>
          <div class="offer_name"><?= $discountProduct['product']['title']?></div>
          <ul class="offer_infos">
            <?php foreach ($discountProduct['product']['productOptions'] as $option): ?>
              <li class="offer_info"><?= $lang === 'ru' ? $option['option']['title_ru'] : $option['option']['title_en'] ?></li>
            <?php endforeach; ?>
          </ul>
          <?php if ($discountProduct['product']['instock'] === 1): ?>
            <div class="offer_status">В наличии</div>
          <?php endif; ?>
          <div class="d-flex">
            <div class="offer_cost mt-0"><?= $discountProduct['discount_price'] ?></div>
            <p class="text-muted px-3" style="text-decoration: line-through"><?= $discountProduct['product']['price'] ?></p>
          </div>
          <a href="<?= Url::to(['cart/add', 'id' => $discountProduct['product']['id']]) ?>" data-id="<?= $discountProduct['product']['id'] ?>" class="offer_to_cart add_to_cart">В корзину</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="buttons_container_carusel">
    <div class="btn_carusel" id="left_carusel" onclick="minusOffer()">
      <i class="fa fa-arrow-left"></i>
    </div>
    <p class="offerNum" style="margin-left: 30px;" id="offerNum">1</p>
    <span class="offerNum" style="margin-right: 30px;">/ <?= count($discountProducts) ?></span>
    <div class="btn_carusel" id="right_carusel" onclick="plusOffer()">
      <i class="fa fa-arrow-right"></i>
    </div>
  </div>

</div>
<!-- Discount End -->
<?php endif; ?>

<?php if ($newProducts): ?>
<!-- New Products -->
<div class="container-xl">
  <div class="discount">
    <div class="discount_header">
      Новинки
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
        <?php foreach ($newProducts as $newProduct): ?>
          <div style="width: 300px" class="img_carusel">
            <a href="/site/product?id=<?= $newProduct['id'] ?>">
                <?php if (count($newProduct['productImages']) > 0): ?>
                  <img style="width: 100%;height: 100%; object-fit: cover" src="<?=Yii::getAlias('@web').'/'.$newProduct['productImages'][0]['img'] ?>" alt="">
                <?php endif; ?>
                <?php if (count($newProduct['productImages']) == 0 || $newProduct['productImages'] == null): ?>
                  <img src="<?=Yii::getAlias('@web');?>/images/product_placeholder.jpg" alt="">
                <?php endif; ?>
            </a>
              <?php if (count($newProduct['discounts']) > 0): ?>
                <div class="skitka mt-2">
                  <div class="skitka_item">В скидке</div>
                </div>
              <?php endif; ?>
            <div class="offer_name"><?= $newProduct['title']?></div>
            <ul class="offer_infos">
                <?php foreach ($newProduct['productOptions'] as $option): ?>
                  <li class="offer_info"><?= $lang === 'ru' ? $option['option']['title_ru'] : $option['option']['title_en'] ?></li>
                <?php endforeach; ?>
            </ul>
              <?php if ($newProduct['instock'] === 1): ?>
                <div class="offer_status">В наличии</div>
              <?php endif; ?>
            <div class="d-flex">
                <?php if (count($newProduct['discounts']) > 0): ?>
                <div class="d-flex">
                  <div class="offer_cost m-0"><?= $newProduct['discounts'][0]['discount_price'] ?></div>
                  <p class="text-muted px-3" style="text-decoration: line-through"><?= $newProduct['price'] ?></p>
                </div>
                <?php endif; ?>
                <?php if (count($newProduct['discounts']) == 0):?>
                  <div class="offer_cost"><?= $newProduct['price'] ?></div>
                <?php endif; ?>
            </div>
            <a href="<?= Url::to(['cart/add', 'id' => $newProduct['id']]) ?>" data-id="<?= $newProduct['id'] ?>" class="offer_to_cart add_to_cart">В корзину</a>
          </div>
        <?php endforeach; ?>
    </div>
  </div>
  <div class="buttons_container_carusel">
    <div class="btn_carusel" id="left_carusel" onclick="minusOffer()">
      <i class="fa fa-arrow-left"></i>
    </div>
    <p class="offerNum" style="margin-left: 30px;" id="offerNum">1</p>
    <span class="offerNum" style="margin-right: 30px;">/ <?= count($newProducts) ?></span>
    <div class="btn_carusel" id="right_carusel" onclick="plusOffer()">
      <i class="fa fa-arrow-right"></i>
    </div>
  </div>

</div>
<!-- New Products End -->
<?php endif; ?>

<?php if ($productCarousels): ?>
<!-- Category Products -->
<?php foreach ($productCarousels as $productCarousel): ?>
  <div class="container-xl" style="margin-top: 100px;">
    <div class="discount">
      <div class="discount_header">
        <?= $lang === 'ru' ? $productCarousel['category']['title_ru'] : $productCarousel['category']['title_en'] ?>
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
        <div class="img_container_carusel" id="images_carusel">
          <?php foreach ($productCarousel['category']['products'] as $product): ?>
          <div style="width: 300px" class="img_carusel">
            <a href="/site/product?id=<?= $product['id'] ?>">
                <?php if (count($product['productImages']) > 0): ?>
                  <img style="width: 100%;height: 100%; object-fit: cover" src="<?=Yii::getAlias('@web').'/'.$product['productImages'][0]['img']; ?>" alt="">
                <?php endif; ?>
                <?php if (count($product['productImages']) == 0 || $product['productImages'] == null): ?>
                  <img style="width: 100%;height: 100%; object-fit: cover" src="<?=Yii::getAlias('@web');?>/images/product_placeholder.jpg" alt="">
                <?php endif; ?>
            </a>
            <div class="skitka">
                <?php if (count($product['discounts']) > 0): ?>
                  <div class="skitka_item">В скидке</div>
                <?php endif; ?>
            </div>
            <div class="offer_name"><?= $product['title'] ?></div>
            <ul class="offer_infos">
                <?php foreach ($product['productOptions'] as $option): ?>
                  <li class="offer_info"><?= $lang === 'ru' ? $option['option']['title_ru'] : $option['option']['title_en'] ?></li>
                <?php endforeach; ?>
            </ul>
            <?php if ($product['instock'] === 1): ?>
              <div class="offer_status">В наличии</div>
            <?php endif; ?>
            <?php if (count($product['discounts']) > 0): ?>
            <div class="d-flex">
              <div class="offer_cost m-0"><?= $product['discounts'][0]['discount_price'] ?></div>
              <p class="text-muted px-3" style="text-decoration: line-through"><?= $product['price'] ?></p>
            </div>
            <?php endif; ?>
            <?php if (count($product['discounts']) == 0):?>
              <div class="offer_cost"><?= $product['price'] ?></div>
            <?php endif; ?>
            <a href="/site/product" class="offer_to_cart">В корзину</a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="buttons_container_carusel">
        <div class="btn_carusel" id="left_carusel1" onclick="minusOffer1()">
          <i class="fa fa-arrow-left"></i>
        </div>
        <p class="offerNum" style="margin-left: 30px;" id="offerNum1">1</p>
        <span class="offerNum" style="margin-right: 30px;">/ <?= count($productCarousel['category']['products']) ?></span>
        <div class="btn_carusel" id="right_carusel1" onclick="plusOffer1()">
          <i class="fa fa-arrow-right"></i>
        </div>
      </div>
      <div class="buttons_container_carusel">
        <a href="/site/catalog?category_id=<?= $productCarousel['category']['id'] ?>" class="obective_href">Все <?= $lang === 'ru' ? $productCarousel['category']['title_ru'] : $productCarousel['category']['title_en'] ?>
        </a>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<?php endif; ?>

<!-- Category Products End -->

<!-- CHOOSE ACCESSORIES -->
<!--<div class="container-xl">-->
<!---->
<!--  <div class="row">-->
<!--    <div class="col-md-4 add_product">-->
<!--      <div class="discount_header">-->
<!--        ПОДБЕРИТЕ АКСЕССУАРЫ-->
<!--      </div>-->
<!--      <div class="choose_product_add">-->
<!--        <h6 class="choose_product_add_header">Укажите вашу технику:</h6>-->
<!--        <div class="choose_product_add_input"><input type="text" placeholder="Поиск">-->
<!--          <span class="choose_product_add_icon">-->
<!--                            <i class="fas fa-search"></i>-->
<!--                        </span>-->
<!--        </div>-->
<!--        <div class="choose_product_add_img">-->
<!--          <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel/img_corusel.png" alt="" width="100%">-->
<!--        </div>-->
<!--        <h5>D850 Body (без объектива)</h5>-->
<!--        <div class="choose_product_add_img">-->
<!--          <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/add_img.png" alt="" width="50%">-->
<!--        </div>-->
<!--        <div class="product_info">-->
<!--          <a href="/site/product" class="product_info_href">Подробнее о товаре</a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!---->
<!--    <div class="col-md-8 add_products">-->
<!--      <div class="dropdown_div">-->
<!--        <button class="choose_tovars_btn">-->
<!--          Категории-->
<!--          <span class="icon_down">-->
<!--                            <i class="fas fa-chevron-down"></i>-->
<!--                        </span>-->
<!--          <ul id="" class="choose_tovars">-->
<!--            <li class="choose_tovar">-->
<!--              <a href="#">все товары</a>-->
<!--            </li>-->
<!--            <li class="choose_tovar">-->
<!--              <a href="#">Аксессуары для визирования</a>-->
<!--            </li>-->
<!--            <li class="choose_tovar">-->
<!--              <a href="#">Аксессуары для макро съемки</a>-->
<!--            </li>-->
<!--            <li class="choose_tovar">-->
<!--              <a href="#">Аксессуары для подключения</a>-->
<!--            </li>-->
<!--            <li class="choose_tovar">-->
<!--              <a href="#">Защита фотокамер</a>-->
<!--            </li>-->
<!--            <li class="choose_tovar">-->
<!--              <a href="#">Карты памяти</a>-->
<!--            </li>-->
<!--            <li class="choose_tovar">-->
<!--              <a href="#">Насадки и фильтры</a>-->
<!--            </li>-->
<!--            <li class="choose_tovar">-->
<!--              <a href="#">Питание фотокамер</a>-->
<!--            </li>-->
<!--            <li class="choose_tovar">-->
<!--              <a href="#">Управление фотокамерами</a>-->
<!--            </li>-->
<!--            <li class="choose_tovar">-->
<!--              <a href="#">Штативы, моноподы</a>-->
<!--            </li>-->
<!--          </ul>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="container_carusel3">-->
<!--        <div class="img_container_carusel" id="images_carusel3">-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!---->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--          <div class="img_carusel3">-->
<!--            <img src="--><?//=Yii::getAlias('@web'); ?><!--/images/home_img/carusel_item.jpg" alt="">-->
<!--            <div class="skitka">-->
<!--              <div class="skitka_item">Скидка на комплект</div>-->
<!--              <div class="skitka_item">В кредит</div>-->
<!--            </div>-->
<!--            <div class="offer_name">Z50 Blogger Kit</div>-->
<!--            <ul class="offer_infos">-->
<!--              <li class="offer_info">Все самое необходимое уже в комплекте</li>-->
<!--              <li class="offer_info">Сенсорный откидной экран для селфи</li>-->
<!--              <li class="offer_info">11 кадров в секунду, 4K UHD видео.-->
<!--              </li>-->
<!--              <li class="offer_info">Компактный объектив Nikkor Z</li>-->
<!--              <li class="offer_info">Поддержка объективов Nikkor F</li>-->
<!--            </ul>-->
<!--            <div class="offer_status">В наличии</div>-->
<!--            <div class="offer_cost">84 999 ₽</div>-->
<!--            <a href="/site/product" class="offer_to_cart">В корзину</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="buttons_container_carusel">-->
<!--        <div class="btn_carusel" id="left_carusel3" onclick="minusOffer3()">-->
<!--          <i class="fa fa-arrow-left"></i>-->
<!--        </div>-->
<!--        <p class="offerNum" style="margin-left: 30px;" id="offerNum3">1</p>-->
<!--        <span class="offerNum" style="margin-right: 30px;">/ 16</span>-->
<!--        <div class="btn_carusel" id="right_carusel3" onclick="plusOffer3()">-->
<!--          <i class="fa fa-arrow-right"></i>-->
<!--        </div>-->
<!--      </div>-->
<!---->
<!--    </div>-->
<!--    <div class="buttons_container_carusel">-->
<!--      <a href="/site/product" class="obective_href">Все аксессуары-->
<!--      </a>-->
<!--    </div>-->
<!--  </div>-->
<!--</div><br><br>-->

<!-- CHOOSE ACCESSORIES End -->

<!-- Photo Section -->

<div class="container-xl pt-5">
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

<?php if ($news && count($news) > 0): ?>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).on('click','.sign_up_user',function(){
        var name = $('.sign_up_name').val()
        var surname = $('.sign_up_surname').val()
        var email = $('.sign_up_email').val()
        var code = $('#country_code').val()
        var phone = $('.sign_up_number').val()
        var password = $('.sign_up_pass').val()
        var password_confirm = $('.sign_up_pass2').val()
        $.ajax({
            url: '/web/site/registration',
            type: 'GET',
            dataType: 'json',
            data: {
                name: name,
                surname: surname,
                email: email,
                phone: phone,
                password: password,
                password_confirm: password_confirm,
                code: code
            },
            success: function(response){
                if (response.status == 'success'){
                    window.location.reload()
                }
                if (response.status == 'error_name'){
                    $('.sign_up_name').addClass('input_border')
                    $('.error_name').removeClass('hidden');
                }
                if (response.status == 'error_surname'){
                    $('.sign_up_surname').addClass('input_border')
                    $('.error_surname').removeClass('hidden');
                }
                if (response.status == 'error_name'){
                    $('.sign_up_name').addClass('input_border')
                    $('.error_email').removeClass('hidden');
                }
            },
            error: function (request, status, error) {
                console.log(error);
            }
        });
    })
</script>