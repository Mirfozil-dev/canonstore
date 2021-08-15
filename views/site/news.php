<!------------------- beginning of body --------------------->
<div style="height: 180px;"></div>
<div class="news">
    <div class="container">
        <div class="news-wrapper">
            <div class="nav-tag-panel">
                <ul class="nav-tags-list">
                    <li><a class="nav-tag" href="/site/about">О Магазине </a></li>
                    <li class="tag-active"><a class=" nav-tag tag1" href="/site/news">Новости</a></li>
                    <li><a class="nav-tag tag2" href="/site/delivery">Доставка и оплата</a></li>
                    <li><a class="nav-tag tag3" href="/site/warranty">Гарантия и сервис</a></li>
                    <li><a class="nav-tag tag4" href="/site/contact">Контакты</a></li>
                    <li><a class="nav-tag tag5" href="/site/faq">FAQ</a></li>



                    <li class="flexMenu-viewMore">
                        <a href="#" title="View More"><i class="fas fa-chevron-down"></i></a>
                        <ul class="flexMenu-popup">
                            <li class="tag11"><a class="nav-tag tag11" href="/site/delivery">Доставка и оплата</a></li>
                            <li class="tag22"><a class="nav-tag tag22" href="/site/warranty">Гарантия и сервис</a></li>
                            <li class="tag33"><a class="nav-tag tag33" href="/site/contact">Контакты</a></li>
                            <li class="tag44"><a class="nav-tag tag44" href="/site/faq">FAQ</a></li>


                        </ul>
                    </li>
                </ul>
            </div>

            <?php if ($news && count($news) > 0): ?>
              <div class="container-xl">
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
              </div><br><br><br><br>
            <?php endif; ?>

        </div>
    </div>
</div>
<!------------------ end of body ---------------------------->