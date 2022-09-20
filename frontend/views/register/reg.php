<?php

$js = <<< JS
$('form').on('submit', function (e) {
  e.preventDefault();
  $.ajax({
    url: '/register/check-email',
    data: $(this).serialize(),
    type: 'POST',
    dataType: 'JSON',
  }).done(function (rsp) {
    console.log(rsp);
  })
})
JS;
$this->registerJs($js);
?>
<div style="max-width: 500px; margin: 0 auto;">
  <form>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">UserName</label>
      <div class="col-sm-10">
        <input name="username" type="text" class="form-control" id="inputEmail3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input name="email" type="email" class="form-control" id="inputEmail3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input name="password" type="password" class="form-control" id="inputPassword3">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div>