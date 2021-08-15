<div style="height: 180px;"></div>
<form class="container col-12 row">
  <div class="col-6">
    <div class="form-group">
      <label for="city">City</label>
      <select id="city" name="city" class="form-control">
        <option disabled="disabled" value="-">Выберите город</option>
        <option value="1">Андижан</option>
        <option value="2">Бухара</option>
        <option value="3">Джизак</option>
        <option value="4">Карши</option>
        <option value="5">Наманган</option>
        <option value="6">Навои</option>
        <option value="7">Самарканд</option>
        <option value="8">Термез</option>
        <option value="9">Гулистан</option>
        <option value="10">Коканд</option>
        <option value="11">Фергана</option>
        <option value="12">Ургенч</option>
        <option value="13">Нукус</option>
        <option value="14">Маргилан</option>
        <option value="20">Чирчик</option>
        <option value="27">Ташкент</option>
        <option value="">Другой город</option>
      </select>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" id="address" name="address" class="form-control">
    </div>
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="address_comment">Address Comment</label>
      <textarea id="address_comment" name="address_comment" class="form-control" style="height: 151px;resize: none"></textarea>
    </div>
  </div>
  <button type="submit" style="border: none !important;" class="btn btn-danger">Submit</button>
</form>