<!-- Body -->

<!-- Like Address -->
<div style="height: 180px;"></div>
<div class="container">
    <div class="scale" style="position: relative;">
        <div class="product-wrapper">
            <ul class="breadcrumbs-list">
                <li>
                    <a href="/">Главная</a>
                </li>
                <li>
                    <a href="/personal.html">Мой кабинет</a>
                </li>
                <li>Избранные товары</li>
            </ul>
            <h1 class="page-title">
                МОЯ ТЕХНИКА CANON</h1>
        </div>
<!--        <div class="discount_menu" style="margin: 0;">-->
<!--            <a href="#" class="discount_href">Личные данные</a>-->
<!--            <a href="#" class="discount_href1">История заказов</a>-->
<!--            <a href="#" class="discount_href2 active">Избранные товары</a>-->
<!--            <a href="#" class="discount_href3">Управление подписками</a>-->
<!--            <div href="#" class="drop_discount_hiddens"><img-->
<!--                        src="--><?//= Yii::getAlias('@web'); ?><!--/images/line-angle-right.png"-->
<!--                        width="10px"-->
<!--                        style="transform: rotate(90deg);"-->
<!--                        alt="">-->
<!--                <div class="hidden_items">-->
<!--                    <div class="hidden_item1">-->
<!--                        <a href="#" class="hidden_item_a1">История заказов</a>-->
<!--                    </div>-->
<!--                    <div class="hidden_item2">-->
<!--                        <a href="#" class="hidden_item_a2">Избранные товары</a>-->
<!--                    </div>-->
<!--                    <div class="hidden_item3">-->
<!--                        <a href="#" class="hidden_item_a3">Управление подписками</a>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>

<div class="container" style="">
    <div class="img_container_carusel_like">
        <?php
            if (isset($wishlistItems) and !empty($wishlistItems)){
                foreach ($wishlistItems as $item){ ?>
                    <div class="img_carusel_like">
                        <button data-id="<?= $item['id'] ?>" class="btn btn-danger position-absolute rounded-circle p-0 wishlist_delete_btn" style="width: 35px; height: 35px;right: -15px;top: -35px;">
                          <i class="fas fa-times fa-2x"></i>
                        </button>
                        <?php if (count($item['product']['productImages']) > 0): ?>
                          <img style="width: 100%;height: 260px; object-fit: cover" src="<?=Yii::getAlias('@web').'/'.$item['product']['productImages'][0]['img'] ?>" alt="">
                        <?php endif; ?>
                        <?php if (count($item['product']['productImages']) == 0 || $item['product']['productImages'] == null): ?>
                          <img style="width: 100%;height: 260px; object-fit: cover" src="<?=Yii::getAlias('@web'); ?>/images/product_placeholder.png" alt="">
                        <?php endif; ?>
                        <?php if (count($item['product']['discounts']) > 0): ?>
                          <div class="skitka">
                            <div class="skitka_item">В скидке</div>
                          </div>
                        <?php endif; ?>
                        <div class="offer_name"><?= $item['product']['title'] ?></div>
                        <?php if ($item['product']['instock'] == 1): ?>
                          <div class="offer_status">В наличии</div>
                        <?php endif; ?>
                        <?php if (count($item['product']['discounts']) > 0): ?>
                          <div class="offer_cost"><?= $item['product']['discounts']['discount_price'] ?></div>
                        <?php endif; ?>
                        <?php if (count($item['product']['discounts']) == 0): ?>
                          <div class="offer_cost"><?= $item['product']['price'] ?></div>
                        <?php endif; ?>
                      <a href="#" data-id="<?= $item['product']['id'] ?>" class="offer_to_cart add_to_cart">В корзину</a>
                    </div>
                <?php }
            }
        ?>
        <?php if (!$wishlistItems || empty($wishlistItems)): ?>
          <h3>Нет избранных товаров</h3>
        <?php endif; ?>
    </div>
</div>

<!-- Like Address End -->

<!-- Body End -->