<div style="height: 180px;"></div>
<div class="container">
    <div class="d-flex" style="margin-right: -10px; margin-left: -10px">
        <?php foreach ($cartItems as $cartItem): ?>
          <div style="height: 250px;margin-right: 10px; margin-left: 10px" class="cart_offer w-50">
            <div class="img_place py-0">
                <?php if ($cartItem['product']->getImages() && count($cartItem['product']->getImages()) > 0): ?>
                  <img
                      class="img_place_item"
                      src="<?=Yii::getAlias('@web').'/'.$cartItem['product']->getImages()[0] ?>"
                      alt=""
                      style="height: 100%;object-fit: cover"
                      width="100%">
                <?php endif; ?>
                <?php if (count($cartItem['product']->getImages()) == 0 || $cartItem['product']->getImages() == null): ?>
                  <img
                      class="img_place_item"
                      src="<?=Yii::getAlias('@web') ?>/images/product_placeholder.png"
                      alt=""
                      style="height: 100%;object-fit: cover"
                      width="100%">
                <?php endif; ?>
            </div>
            <div class="offer_details">
              <h6 style="font-size: 16px; font-weight: 700;"><?= $cartItem['product']['title'] ?></h6><br><br>
                <?php if (count($cartItem['product']['discounts']) > 0): ?>
                  <h6 class="cart_cost"><?= $cartItem['product']['discounts']['discount_price'] ?></h6>
                <?php endif; ?>
                <?php if (count($cartItem['product']['discounts']) == 0):?>
                  <h6 class="cart_cost"><?= $cartItem['product']['price'] ?></h6>
                <?php endif; ?><p>за штуку</p><br>
              <h3><?= $cartItem['quantity'] ?> штук</h3>
            </div>
          </div>
        <?php endforeach; ?>
    </div>
    <div class="summ mb-5">
      <div class="summ_name">Общая сумма</div>
      <div class="summ_cost">
          <?= $totalSum ?>
      </div>
    </div>
</div>

<form class="container col-12 row" method="GET" action="/site/create-order">
  <div class="col-6">
    <div class="form-group">
      <label for="city">Город</label>
      <select id="city" name="city" class="form-control">
        <option disabled="disabled" value="-">Выберите город</option>
        <option value="Andijon">Андижан</option>
        <option value="Bukhara">Бухара</option>
        <option value="Jizzax">Джизак</option>
        <option value="Qarshi">Карши</option>
        <option value="Namangan">Наманган</option>
        <option value="Navoi">Навои</option>
        <option value="Samarqand">Самарканд</option>
        <option value="Termez">Термез</option>
        <option value="Gulistan">Гулистан</option>
        <option value="Kokand">Коканд</option>
        <option value="Fergana">Фергана</option>
        <option value="Urgench">Ургенч</option>
        <option value="Nukus">Нукус</option>
        <option value="Margilan">Маргилан</option>
        <option value="Chirchiq">Чирчик</option>
        <option value="Toshkent">Ташкент</option>
        <option value="Other">Другой город</option>
      </select>
    </div>
    <div class="form-group">
      <label for="address">Адресс</label>
      <input type="text" id="address" name="address" class="form-control">
    </div>
    <div class="btn-group" role="group">
      <input type="radio" class="btn-check" name="pay_method" id="cash" autocomplete="off" checked>
      <label class="btn btn-outline-danger" for="cash">Наличными</label>

      <input type="radio" class="btn-check" name="pay_method" id="click" autocomplete="off">
      <label class="btn btn-outline-danger" for="click">Click</label>

      <input type="radio" class="btn-check" name="pay_method" id="payme" autocomplete="off">
      <label class="btn btn-outline-danger" for="payme">Payme</label>
    </div>
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="address_comment">Комментарий к адрессу</label>
      <textarea id="address_comment" name="address_comment" class="form-control" style="height: 151px;resize: none"></textarea>
    </div>
  </div>
  <button type="submit" style="border: none !important;background-color: #ff1920;" class="btn btn-danger">Подтвердить</button>
</form>