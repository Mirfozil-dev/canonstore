<!-- Scale Body -->
<!-- Scale Address -->
<div class="scale" style="position: relative; top: 180px;margin-bottom: 180px;">
    <!-- Scale Address End -->
    <!-- Main -->
          <?php if ($compareItems && count($compareItems) > 0): ?>
            <div class="container main_scale" style="min-height: 700px; overflow-y: scroll;height: 100%;">
              <div class="scale_top_details">
                <div style="height: 100%;" class="property_list">
                  <div class="product_properties" style="margin-top: 104px;margin-right:10px;">
                    <?php foreach ($optionGroups as $optionGroup): ?>
                      <p class="product_properties_info"><?= $lang == 'ru' ? $optionGroup['title_ru'] : $optionGroup['title_en'] ?></p>
                    <?php endforeach; ?>
                  </div>


              </div>
              </div>
                <?php foreach ($compareItems as $compareItem): ?>
                  <div class="product_box">
                    <div class="img_carusel_scale">
                      <button data-id="<?= $compareItem['id'] ?>" class="btn btn-danger position-absolute rounded-circle p-0 compare_delete_btn" style="width: 35px; height: 35px;right: -15px;top: -35px;">
                        <i class="fas fa-times fa-2x"></i>
                      </button>
                        <?php if (count($compareItem['product']['productImages']) > 0): ?>
                          <img style="width: 100%;height: 260px; object-fit: cover" src="<?=Yii::getAlias('@web').'/'.$compareItem['product']['productImages'][0]['img'] ?>" alt="">
                        <?php endif; ?>
                        <?php if (count($compareItem['product']['productImages']) == 0 || $compareItem['product']['productImages'] == null): ?>
                          <img style="width: 100%;height: 260px; object-fit: cover" src="<?=Yii::getAlias('@web'); ?>/images/product_placeholder.png" alt="">
                        <?php endif; ?>
                        <?php if (count($compareItem['product']['discounts']) > 0): ?>
                          <div class="skitka">
                            <div class="skitka_item">В скидке</div>
                          </div>
                        <?php endif; ?>
                      <div class="offer_name"><?= $compareItem['product']['title'] ?></div>
                        <?php if ($compareItem['product']['instock'] == 1): ?>
                          <div class="offer_status">В наличии</div>
                        <?php endif; ?>
                        <?php if (count($compareItem['product']['discounts']) > 0): ?>
                          <div class="offer_cost"><?= $compareItem['product']['discounts']['discount_price'] ?></div>
                        <?php endif; ?>
                        <?php if (count($compareItem['product']['discounts']) == 0): ?>
                          <div class="offer_cost"><?= $compareItem['product']['price'] ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="product_properties_products">

                          <?php foreach ($optionGroups as $optionGroup): ?>
                            <p class="product_properties_info1">
                              <?php foreach ($optionGroup['options'][$compareItem['product']['id']] as $options): ?>
                                <?php foreach ($options as $option): ?>
                                  <?= $lang == 'ru' ? $option['title_ru'] : $option['title_en'] ?>
                                <?php endforeach; ?>
                              <?php endforeach; ?>
                            </p>
                          <?php endforeach; ?>

                    </div>
                  </div>
                <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if (!$compareItems || count($compareItems) == 0): ?>
            <div class="container main_scale" style="height: max-content;">
              <p class="text-center w-100 mt-5">
                Не добавлено товаров для сравнения
              </p>
            </div>
          <?php endif; ?>
</div>
<!-- Main End -->
<!-- Scale Body End -->