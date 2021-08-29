<!------------------- beginning of body --------------------->
<div class="product_top_space"></div>
<div class="catalog" style="padding: 0 40px; display: flex; justify-content: center;">
  <div class="container" style="max-width: 1200px; margin: 0;">

    <!-- ------------------------ beginning of navbar path ----------------------- -->
    <div class="about-wrapper">
      <ul class="breadcrumbs-list">
        <li><a href="/site">Главная</a></li>
        <?php if (isset($category['parent']['parent'])): ?>
        <li><?= $lang === 'ru' ? $category['parent']['parent']['title_ru'] : $category['parent']['parent']['title_en'] ?></li>
        <?php endif; ?>
        <?php if (isset($category['parent'])): ?>
          <li><?= $lang === 'ru' ? $category['parent']['title_ru'] : $category['parent']['title_en'] ?></li>
        <?php endif; ?>
        <?php if ($category): ?>
          <li><?= $lang === 'ru' ? $category['title_ru'] : $category['title_en'] ?></li>
        <?php endif; ?>
      </ul>
      <h1 class="page-title"><?= $lang === 'ru' ? $category['title_ru'] : $category['title_en'] ?></h1>
    </div>
    <!-- ------------------------ end of navbar path ----------------------- -->

    <!-- ------------------------ beginning of Catalog body ------------------------- -->
    <div class="catalog-body">


      <!-- ------------------------ beginning of left Filter ----------------------- -->
      <div id="catalog-body-left-id" class="catalog-body-left">
        <i id="cencel-btn" class="far fa-times-circle" ></i>
        <div id="catalog-mobile-drop-down" class="catalog-mobile-drop-down"><span>Фильтры</span><i class="fas fa-filter"></i></div>

        <form id="catalog-filter-form" class="catalog-filter-form" action="/site/catalog" method="GET">
            <?php if (isset($category['id'])): ?>
                <input type="number" hidden value="<?= $category['id'] ?>" name="category_id">
            <?php endif; ?>
          <div class="catalog-body-left-top">
            <div class="catalog-body-left-div-1">
              <div class="filter-up-down-sec filter-button">
                <h3>ЦЕНА:</h3>
                <div class="icon">
                  <i class="fas fa-caret-down"></i>
                </div>
              </div>
              <div style="visibility: hidden;height: 0;" class="catalog-filter">
                <div class="catalog-filter1-top">
                  <div class="filter1-price-box1">
                    <input type="text" id="filter-min-amount" name="price_min" class="filter-price-input1" placeholder="10090">
                  </div>
                  <div class="filter1-line"></div>
                  <div class="filter1-price-box2">
                    <input type="text" id="filter-max-amount" name="price_max" class="filter-price-input2"  placeholder="225490">
                  </div>
                  <div class="filter1-price-label">
                    Руб.
                  </div>
                </div>
                <div class="catalog-filter1-bottom">


                  <div id="slider-range"></div>

                </div>
              </div>
            </div>
            <?php foreach ($category['optionGroups'] as $optionGroup): ?>
            <div class="catalog-body-left-div-1">
              <div class="filter-up-down-sec filter-button">
                <h3><?= $lang === 'ru' ? $optionGroup['title_ru'] : $optionGroup['title_en'] ?></h3>
                <div class="icon">
                  <i class="fas fa-caret-down"></i>
                </div>
              </div>
              <div style="visibility: hidden;height: 0;" class="catalog-filter">
                  <?php foreach ($optionGroup->options as $option): ?>
                    <div class="catalog-filter2-box1 catalog-filter2-box1-1">
                        <span>
                          <input type="checkbox" name="options[]" value="<?= $option->id ?>">
                          <label for="ТИП-Беззеркальная"><?= $lang === 'ru' ? $option['title_ru'] : $option['title_en'] ?></label>
                        </span>
                      <div>(<?= count($option->productOptions) ?>)</div>
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>
            <?php endforeach; ?>
            <input type="text" hidden name="sort" id="sort">
          </div>
          <button type="submit" class="catalog-body-left-btn">
            Показать
          </button>
        </form>
      </div>
      <!-- ------------------------ End of navbar path ----------------------- -->




      <!-- ------------------------ Beginning of Body right ----------------------- -->
      <div class="calalog-body-right">


        <!-- ------------------------ Beginning of Body right Top ----------------------- -->
        <div class="catalog-body-right-top" style="display: flex; justify-content: space-between;">
          <div class="catalog-nav" style="@media screen and (max-width: 700px) {
                    .catalog-nav {
                      display: flex;
                      flex-direction: row;
                    }
                  }
                  ">
            <div id="filter-list-grid-btnContainer" class="filter-list-grid-btn-wrapper">
              <button class="fliter-bars-btn filter-list-btn" onclick="listView()"><i class="fa fa-bars"></i> List</button>
              <button class="fliter-bars-btn filter-grid-btn fliter-bars-btn-active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
            </div>
            <div class="catalog-nav-selector">


              <!-- ------------------------ Beginning of Select Dropdown --------------------------- -->
              <div class="custom-select-wrapper">
                <div class="custom-select">
                  <div class="custom-select__trigger"><span>По умолчанию</span>
                    <div class="arrow"></div>
                  </div>
                  <div class="custom-options">
                    <span class="custom-option selected" data-value="default">По умолчанию</span>
<!--                    <span class="custom-option" data-value="volvo">По популярности</span>-->
                    <span class="custom-option" data-value="new">Новинки</span>
                    <span class="custom-option" data-value="price_asc">По цене (по возрастанию)</span>
                    <span class="custom-option" data-value="price_desc">По цене (по убыванию)</span>
                  </div>
                </div>
              </div>
              <!-- ------------------------ End of Select Dropdown --------------------------- -->

            </div>
          </div>

        </div>
        <!-- ------------------------ End of Body right Top ----------------------- -->

        <!-- ------------------------ Beginning of Body right Bottom ----------------------- -->
        <div class="catalog-body-right-bottom">

          <!-- ------------------------ Beginning of Body right bottom card ----------------------- -->

          <!----------- Write your card pagination code here ---------->
          <div id="catalog_pagination_container" class="catalog-pagination-container" style='' >
            <div class="catalog-pagination-list-wrapper">
              <div class="catalog-grid-view">
              <?php if ($products): ?>
                <?php foreach ($products as $product): ?>
                  <a href="/site/product?id=<?= $product->id ?>" class="cat-card-link">
                  <div class="catalog-pagination-list-item catalog-pagination-grid-item">
                    <div class="cat-card-img-wrapper">
                        <?php if (count($product->productImages) > 0): ?>
                          <img style="width: 100%;object-fit: cover" src="<?=Yii::getAlias('@web').'/'.$product->productImages[0]->img?>" alt="">
                        <?php endif; ?>
                        <?php if (count($product->productImages) == 0 || $product->productImages == null): ?>
                          <img style="width: 100%;object-fit: cover" src="<?=Yii::getAlias('@web');?>/images/product_placeholder.png" alt="">
                        <?php endif; ?>
                      <?php if (count($product->discounts) > 0): ?>
                        <div class="cat-card-discount"><?= (($product->discounts[0]->discountPrice*100)/$product->price) - 100 ?>%</div>
                      <?php endif; ?>
                    </div>
                    <div class="cat-card-text-wrapper">
                      <div class="cat-card-info">
                        <div class="cat-card-info-pros">
                          <div class="cat-card-info-pro-1">Спеццена</div>
                            <?php if (count($product->discounts) > 0): ?>
                              <div class="cat-card-info-pro-1">В скидке</div>
                            <?php endif; ?>
                        </div>
                        <div class="cat-card-info-name"><?= $product->title ?></div>
                          <?php if ($product->instock == 1): ?>
                            <div class="cat-card-info-feature">В наличии</div>
                          <?php endif; ?>
                      </div>
                      <div class="car-card-price-wrapper">
                        <?php if (count($product->discounts) > 0): ?>
                        <div class="cat-card-price-old"><div class="cat-card-price-line"></div><p><?= $product->price ?></p></div>
                        <div class="cat-card-price-new"><?= $product->discounts[0]->discountPrice ?></div>
                        <?php else: ?>
                        <div class="cat-card-price-new"><?= $product->price ?></div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </a>
                <?php endforeach; ?>
              <?php endif; ?>
              </div>
            </div>
            <div id="catalog-pagination-pagination-container"></div>
          </div>




          <!------------------- list item ---------------------->
          <div id="catalog_pagination_container2" class="catalog-pagination-container2" style='' >
            <div class="catalog-pagination-list-wrapper2">

              <div class="catalog-list-view">
                  <?php if ($products): ?>
                      <?php foreach ($products as $product): ?>
                      <a href="/site/product?id=<?= $product->id ?>" class="cat-card-link-list list_product_info">
                        <div class="catalog-pagination-list-item2 catalog-pagination-grid-item">
                          <div class="cat-card-img-wrapper-list">
                              <?php if (count($product->productImages) > 0): ?>
                                <img style="height: 100%;object-fit: cover" src="<?=Yii::getAlias('@web').'/'.$product->productImages[0]->img?>" alt="">
                              <?php endif; ?>
                              <?php if (count($product->productImages) == 0 || $product->productImages == null): ?>
                                <img style="height: 100%;object-fit: cover" src="<?=Yii::getAlias('@web');?>/images/product_placeholder.png" alt="">
                              <?php endif; ?>
                              <?php if (count($product->discounts) > 0): ?>
                                <div class="cat-card-discount-list"><?= (($product->discounts[0]->discountPrice*100)/$product->price) - 100 ?>%</div>
                              <?php endif; ?>
                          </div>
                          <div class="cat-card-text-wrapper-list">
                            <div class="cat-card-info-list">
                              <div class="cat-card-info-pros-list">
                                <div class="cat-card-info-pro-1-list">Спеццена</div>
                                  <?php if (count($product->discounts) > 0): ?>
                                    <div class="cat-card-info-pro-1-list">В скидке</div>
                                  <?php endif; ?>
                              </div>
                              <div class="cat-card-info-name-list"><?= $product->title ?></div>
                              <?php if ($product->instock == 1): ?>
                              <div class="cat-card-info-feature-list">В наличии</div>
                              <?php endif; ?>
                              <p><?= $lang === 'ru' ? $product->description_ru : $product->description_en  ?></p>
                            </div>
                            <div class="car-card-price-wrapper-list">
                              <div class="cat-card-price-container">
                                  <?php if (count($product->discounts) > 0): ?>
                                    <div class="cat-card-price-old-list"><div class="cat-card-price-line-list"></div><p><?= $product->price ?></p></div>
                                    <div class="cat-card-price-new-list"><?= $product->discounts[0]->discountPrice ?></div>
                                  <?php else: ?>
                                    <div class="cat-card-price-new-list"><?= $product->price ?></div>
                                  <?php endif; ?>
                              </div>
                              <a href=""><div class="cat-card-cart-btn">В корзину</div></a>
                            </div>
                          </div>
                        </div>
                      </a>
                      <?php endforeach; ?>
                  <?php endif; ?>


              </div>

            </div>
            <div id="catalog-pagination-pagination-container2"></div>
          </div>

          <!-- ------------------------ Beginning of Body right bottom Card ----------------------- -->

        </div>
        <!-- ------------------------ End of Body right Bottom ----------------------- -->




        <!-- ------------------------ End of Body right ----------------------- -->
      </div>


      <!-- ------------------------ End of Body ----------------------- -->
    </div>


  </div>
</div>
<!------------------------- end of body ---------------------------->
<!-- ------------------------------ Select Dropdown ------------------------ -->
<script>
    document.querySelector('.custom-select-wrapper').addEventListener('click', function() {
        this.querySelector('.custom-select').classList.toggle('open');
    })

    for (const option of document.querySelectorAll(".custom-option")) {
        option.addEventListener('click', function() {
            if (!this.classList.contains('selected')) {
                console.log($(this).data().value)
                $('#sort').val($(this).data().value)
                this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
                this.classList.add('selected');
                this.closest('.custom-select').querySelector('.custom-select__trigger span').textContent = this.textContent;
            }
        })
    }
    window.addEventListener('click', function(e) {
        const select = document.querySelector('.custom-select')
        if (!select.contains(e.target)) {
            select.classList.remove('open');
        }
    });
</script>
<!-- ------------------------------ Select Dropdown 1 ------------------------ -->
<script>
    document.querySelector('.custom-select-wrapper1').addEventListener('click', function() {
        this.querySelector('.custom-select1').classList.toggle('open1');
    });

    for (const option of document.querySelectorAll(".custom-option1")) {
        option.addEventListener('click', function() {
            if (!this.classList.contains('selected')) {
                this.parentNode.querySelector('.custom-option1.selected1').classList.remove('selected');
                this.classList.add('selected');
                this.closest('.custom-select1').querySelector('.custom-select__trigger1 span').textContent = this.textContent;
            }
        })
    };

    window.addEventListener('click', function(e) {
        const select = document.querySelector('.custom-select1')
        if (!select.contains(e.target)) {
            select.classList.remove('open1');
        }
    });
</script>
<!-- ------------------------------ Select Dropdown 2 ------------------------ -->
<script>
    document.querySelector('.custom-select-wrapper2').addEventListener('click', function() {
        this.querySelector('.custom-select2').classList.toggle('open2');
    });

    for (const option of document.querySelectorAll(".custom-option2")) {
        option.addEventListener('click', function() {
            if (!this.classList.contains('selected')) {
                this.parentNode.querySelector('.custom-option2.selected2').classList.remove('selected');
                this.classList.add('selected');
                this.closest('.custom-select2').querySelector('.custom-select__trigger2 span').textContent = this.textContent;
            }
        })
    };

    window.addEventListener('click', function(e) {
        const select = document.querySelector('.custom-select2')
        if (!select.contains(e.target)) {
            select.classList.remove('open2');
        }
    });
</script>
<!-- ------------------------------ Select Dropdown 3 ------------------------ -->
<script>
    document.querySelector('.custom-select-wrapper3').addEventListener('click', function() {
        this.querySelector('.custom-select3').classList.toggle('open3');
    });

    for (const option of document.querySelectorAll(".custom-option3")) {
        option.addEventListener('click', function() {
            if (!this.classList.contains('selected')) {
                this.parentNode.querySelector('.custom-option3.selected3').classList.remove('selected');
                this.classList.add('selected');
                this.closest('.custom-select3').querySelector('.custom-select__trigger3 span').textContent = this.textContent;
            }
        })
    };
    window.addEventListener('click', function(e) {
        const select = document.querySelector('.custom-select3')
        if (!select.contains(e.target)) {
            select.classList.remove('open3');
        }
    });
</script>
<!-- ------------------------------ Select Dropdown 4 ------------------------ -->
<script>
    document.querySelector('.custom-select-wrapper4').addEventListener('click', function() {
        this.querySelector('.custom-select4').classList.toggle('open4');
    });

    for (const option of document.querySelectorAll(".custom-option3")) {
        option.addEventListener('click', function() {
            if (!this.classList.contains('selected')) {
                this.parentNode.querySelector('.custom-option4.selected4').classList.remove('selected');
                this.classList.add('selected');
                this.closest('.custom-select4').querySelector('.custom-select__trigger4 span').textContent = this.textContent;
            }
        })
    };

    window.addEventListener('click', function(e) {
        const select = document.querySelector('.custom-select4')
        if (!select.contains(e.target)) {
            select.classList.remove('open4');
        }
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js"></script>
<!--<script>-->
<!--    var items = $('.catalog-pagination-list-item');-->
<!--    var numItems = items.length;-->
<!--    var perPage = 9;-->
<!---->
<!--    items.slice(perPage).hide();-->
<!---->
<!--    $('#catalog-pagination-pagination-container').pagination({-->
<!--        items: numItems,-->
<!--        itemsOnPage: perPage,-->
<!--        prevText: "<",-->
<!--        nextText: ">",-->
<!--        onPageClick : function (pageNumber) {-->
<!--            var showFrom = perPage * (pageNumber - 1);-->
<!--            var showTo = showFrom + perPage;-->
<!--            items.hide().slice(showFrom, showTo).show();-->
<!--        }-->
<!--    });-->
<!--</script>-->
<!--<script>-->
<!--    var items2 = $('.catalog-pagination-list-item2');-->
<!--    var numItems2 = items2.length;-->
<!--    var perPage2 = 6;-->
<!---->
<!--    items2.slice(perPage2).hide();-->
<!---->
<!--    $('#catalog-pagination-pagination-container2').pagination({-->
<!--        items: numItems2,-->
<!--        itemsOnPage: perPage2,-->
<!--        prevText: "<",-->
<!--        nextText: ">",-->
<!--        onPageClick : function (pageNumber2) {-->
<!--            var showFrom2 = perPage2 * (pageNumber2 - 1);-->
<!--            var showTo2 = showFrom2 + perPage2;-->
<!--            items2.hide().slice(showFrom2, showTo2).show();-->
<!--        }-->
<!--    });-->
<!---->
<!--</script>-->
<!-- -------------------------- End of Pagination ---------------------------- -->

<!-- ------------------------------ Filter ------------------------ -->
<script>
    // Get the elements with class="column"
    var li_links = document.querySelectorAll('.fliter-bars-btn')
    li_links.forEach(function(link) {
        link.addEventListener('click', function(){
                li_links.forEach(function(item){
                    item.classList.remove('fliter-bars-btn-active');
                })

                link.classList.add('fliter-bars-btn-active');
            }
        )})
    // List View
    function listView() {
        const grid = document.getElementById("catalog_pagination_container")
        const list = document.getElementById("catalog_pagination_container2")
        grid.style.display = "none";
        list.style.display = 'block';

    }

    // Grid View
    function gridView() {
        const grid = document.getElementById("catalog_pagination_container")
        const list = document.getElementById("catalog_pagination_container2")
        grid.style.display = "block";
        list.style.display = 'none';
    }





    var faTimesCircle = document.getElementById('cencel-btn')
    var catalog_filter_form = document.getElementById('catalog-filter-form')
    var catalog_mobile_drop_down = document.getElementById('catalog-mobile-drop-down')
    var catalog_body_left = document.getElementById('catalog-body-left-id')

    catalog_mobile_drop_down.addEventListener('click', function() {
        if(catalog_filter_form.style.display == 'block'){
            catalog_filter_form.style.display = 'none'
            catalog_mobile_drop_down.style.display = 'block'

            catalog_body_left.style.paddingBottom = '0px'
            faTimesCircle.style.display = 'none';
        } else if(catalog_filter_form.style.display == 'none') {
            catalog_filter_form.style.display = 'block'
            catalog_mobile_drop_down.style.display = 'none'

            catalog_body_left.style.padding = '50px 18px 18px 18px'
            faTimesCircle.style.display = 'block';
        } else {
            catalog_filter_form.style.display = 'none'
        }
    })
    faTimesCircle.addEventListener('click', function(){
        if(catalog_filter_form.style.display == 'block'){
            catalog_filter_form.style.display = 'none'
            catalog_mobile_drop_down.style.display = 'block'

            catalog_body_left.style.padding = '0px 18px'
            faTimesCircle.style.display = 'none';
        } else if(catalog_filter_form.style.display == 'none') {
            catalog_filter_form.style.display = 'block'
            catalog_mobile_drop_down.style.display = 'none'

            catalog_body_left.style.padding = '18px 0'
        } else {
            catalog_filter_form.style.display = 'none'
        }
    })
</script>


<script>
    $( function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 75, 300 ],
            slide: function( event, ui ) {
                $( "#filter-min-amount" ).val(ui.values[ 0 ]);
                $( "#filter-max-amount" ).val(ui.values[ 1 ] );
            }
        });
        $( "#filter-min-amount" ).val($( "#slider-range" ).slider( "values", 0 ) );
        $( "#filter-max-amount" ).val($( "#slider-range" ).slider( "values", 1 ) );
    } );
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<style>
  .filter-active {
      transform: scaleY(-1);
  }
</style>