<?php

use yii\helpers\Url;
use \yii\helpers\Html;

/** @var yii\web\View $this */
$this->title = 'ADS.Force';
$this->registerCssFile(Url::to(['css/profile-performer/profile-seetings.css']), ['depends' => ['frontend\assets\ProfileCustomerAsset']]);
$this->registerCssFile(Url::to(['css/profile-performer/profile-left-nav.css']), ['depends' => ['frontend\assets\ProfileCustomerAsset']]);
$js = <<< JS
let statusClient = false;
$('.your-click').click(function(){
    statusClient = false;
    $('.phiz-click').removeClass('active-button');
    $('.phiz-fase').fadeOut(300);
    $('.add-payer-form-show').find('img').css({'transform':'rotate(0deg) '})
    $('.your-click').addClass('active-button');
    $('.your-fase').fadeOut(300);
});
$('.phiz-click').click(function(){
    statusClient = true;
    $('.phiz-click').addClass('active-button');
    $('.your-click').removeClass('active-button');
    $('.add-payer-form-show').find('img').css({'transform':'rotate(0deg) '})
    $('.phiz-fase').fadeOut(300);
    $('.your-fase').fadeOut(300);
})
$('.add-payer-form-show').click(function(){
    if(statusClient){
    if($('.phiz-fase').css('display') == "none"){
        $('.phiz-fase').fadeIn(300);
        $('.add-payer-form-show').find('img').css({'transform':'rotate(-180deg) '})
    }
    else{
        $('.phiz-fase').fadeOut(300);
        $('.add-payer-form-show').find('img').css({'transform':'rotate(0deg) '})
    }
    }
    else{
        if($('.your-fase').css('display') == "none"){
            $('.your-fase').fadeIn(300);
            $('.add-payer-form-show').find('img').css({'transform':'rotate(-180deg) '})
        }
        else{
            $('.your-fase').fadeOut(300);
            $('.add-payer-form-show').find('img').css({'transform':'rotate(0deg) '})
        }
    }
})
$('.select__photo').on('input', function() {
    var form = new FormData();
    form.append('file', $(this)[0].files[0])
    $.ajax({
      url: '/profile-customer/save-photo',
      type: 'POST',
      dataType: 'JSON',
      data: form,
      contentType: false, 
      processData: false,
    }).done(function(r) {
      if (r.status){
          location.reload()
      } else {
          $('.alert-danger .alert__text').text(r.message);
          $('.alert-danger').fadeIn(300);
      }
    })
})
$('.profile__info').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: '/profile-customer/save-profile',
        type: 'POST',
        dataType: 'JSON',
        data: $(this).serialize(),
    }).done(function(r) {
        if (r.status){
            location.reload();
        } else {
            $('.alert-danger .alert__text').text(r.message);
            $('.alert-danger').fadeIn(300);
        }
    })
});
$('.change__password').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: '/profile-customer/change-password',
        type: 'POST',
        dataType: 'JSON',
        data: $(this).serialize(),
    }).done(function(r) {
        if (r.status){
            $('input[name="password"]').val('');
            $('.alert-success .alert__text').text(r.message);
            $('.alert-success').fadeIn(300);
        } else {
            $('.alert-danger .alert__text').text(r.message);
            $('.alert-danger').fadeIn(300);
        }
    })
})
$('.phiz-fase').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: '/profile-customer/save-fiz-info',
        type: 'POST',
        dataType: 'JSON',
        data: $(this).serialize(),
    }).done(function(r) {
        if (r.status){
            $('.alert-success .alert__text').text(r.message);
            $('.alert-success').fadeIn(300);
        } else {
            $('.alert-danger .alert__text').text(r.message);
            $('.alert-danger').fadeIn(300);
        }
    })
})
$('.your-fase').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: '/profile-customer/save-jur-info',
        type: 'POST',
        dataType: 'JSON',
        data: $(this).serialize(),
    }).done(function(r) {
        if (r.status){
            $('.alert-success .alert__text').text(r.message);
            $('.alert-success').fadeIn(300);
        } else {
            $('.alert-danger .alert__text').text(r.message);
            $('.alert-danger').fadeIn(300);
        }
    })
})
$('.close__alert').on('click', function() {
  $('.alert').fadeOut(300);
})
$('#copy').on('change', function() {
  $('#put').val($('#take').val());
});
$('#put').on('input', function() {
  $('#copy').prop('checked', false);
})
JS;
$this->registerJs($js);

?>
<div class="rigth-column">
    <div class="alert alert-danger">
        <p class="alert__title">????????????</p>
        <p class="alert__text">?????????? ????????????</p>
        <button class="close__alert">&times;</button>
    </div>
    <div class="alert alert-success">
        <p class="alert__title">??????????</p>
        <p class="alert__text">?????????? ????????????</p>
        <button class="close__alert">&times;</button>
    </div>
    <h2 class="main_color_text Font-size24">???????? ????????????</h2>
    <div class="you-data-change">
        <div class="change-photo">
            <p class="main_color_text Font-size18"><b>??????????????????????</b> jpeg, png</p>
            <div class="change-photo-img">
                <?php if (!empty($info['photo'])): ?>
                    <img src="<?= Url::to([$info['photo']]) ?>" alt="">
                <?php else: ?>
                    <img src="<?= Url::to(['img/index/Freelancer.png']) ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="change-photo-text">
                <label>
                    <a>???????????????? ????????</a>
                    <input class="select__photo" name="photo" accept=".jpg, .jpeg, .png" type="file">
                    <p>???????? ???? ????????????</p>
                </label>
                <!--                <a href="-->
                <? //= Url::to(['profile-pro']) ?><!--" class="button-pro">?????????? PRO</a>-->
            </div>
        </div>
        <div class="change-input">
            <?= Html::beginForm('', 'post', ['class' => 'profile__info']) ?>
            <div class="input-form-change">
                <label for="">?????? ????????????????????????</label>
                <div class="input-relative">
                    <input placeholder="?????? ????????????????????????" value="<?= !empty($info['fio']) ? $info['fio'] : '' ?>"
                           class="main_color_text" name="fio" type="text">

                </div>
            </div>
            <div class="input-form-change">
                <label for="">?????????? ????????????????</label>
                <div class="input-relative">
                    <input placeholder="?????????? ????????????????" value="<?= !empty($info['phone']) ? $info['phone'] : '' ?>"
                           class="main_color_text" name="phone" type="tel">

                </div>
            </div>
            <div class="input-form-change">
                <label for="">?????????????????????? ??????????</label>
                <div class="input-relative">
                    <input placeholder="?????????????????????? ??????????" value="<?= !empty($info['email']) ? $info['email'] : '' ?>"
                           class="main_color_text" name="email" type="email">

                </div>
            </div>
            <?php if (empty($info['phone']) && empty($info['fio'])): ?>
                <div class="form-button">
                    <button>??????????????????</button>
                </div>
            <?php endif; ?>
            <?= Html::endForm(); ?>
            <!--            <div class="identification-email">-->
            <!--                <p class="error-email">?????????? ???? ????????????????????????</p>-->
            <!--                <a class="identification-email-button white_color_bg">?????????????????? ????????????</a>-->
            <!--            </div>-->
            <?= Html::beginForm('', 'post', ['class' => 'change__password']) ?>
            <p class="main_color_text">?????????? ????????????</p>
            <div class="input-form-change">
                <label for="">????????????</label>
                <div class="input-relative">
                    <input placeholder="????????????" class="main_color_text" name="password" type="password">
                </div>
            </div>
            <div class="form-button">
                <button>???????????????? ????????????</button>
            </div>
            <?= Html::endForm(); ?>

        </div>
    </div>
    <div class="payment-form">
        <div class="payment-title">
            <h2 class="main_color_text">????????????</h2>
            <div class="payment-buttons">
                <button class="active-button main_color_text your-click">?????????????????????? ????????</button>
                <button class="main_color_text phiz-click">???????????????????? ????????</button>
            </div>
        </div>
        <div class="add-payer">
            <p class="main_color_text">???????????? ?????????????????????? ???????????????????? ?????? ???????????? ?????????? ?????????????? ?????? ???????????????????? ??????????????
                ?????????? ???????????????????? ?????????? ?????? ?????????????????????? ??????????????</p>
            <div class="add-payer-form-show">
                <h2>???????????????? ??????????????????????</h2>
                <img src="<?= Url::to(['img/profile/private-profile/arrow-mobile.svg']) ?>" alt="">
            </div>
        </div>
        <?= Html::beginForm('', 'post', ['class' => 'your-fase', 'style' => 'display:none']) ?>
        <?php $jur = !empty($info['jur_payment_info']) ? json_decode($info['jur_payment_info'], 1) : '' ?>
        <div class="input-form-change">
            <label for="">???????????? ???????????????? ??????????????????????</label>
            <div class="input-relative">
                <input value="<?= !empty($jur['organization']) ? $jur['organization'] : '' ?>"
                       placeholder="???????????? ???????????????? ??????????????????????" name="organization" class="main_color_text"
                       type="text">
            </div>
        </div>
        <div class="input-form-change">
            <label for="">?????????????????????? ????????????????</label>
            <div class="input-relative">
                <input value="<?= !empty($jur['director']) ? $jur['director'] : '' ?>"
                       placeholder="?????????????????????? ????????????????" name="director" class="main_color_text" type="text">
            </div>
        </div>
        <div class="input-form-change">
            <label for="">?????????????????????? ??????????</label>
            <div class="input-relative">
                <input id="take" value="<?= !empty($jur['jurAddress']) ? $jur['jurAddress'] : '' ?>"
                       placeholder="?????????????????????? ??????????" name="jurAddress" class="main_color_text" type="text">
            </div>
        </div>
        <div class="input-form-change">
            <label for="">?????????????????????? ??????????</label>
            <div class="input-relative">
                <input id="put" value="<?= !empty($jur['realAddress']) ? $jur['realAddress'] : '' ?>"
                       placeholder="?????????????????????? ??????????" name="realAddress" class="main_color_text" type="text">
                <label class="custom-checkbox">
                    <input <?= $jur['jurAddress'] == $jur['realAddress'] ? 'checked' : '' ?> class="change_filter"
                                                                                             type="checkbox" id="copy">
                    <span class="Font-size18 main_color_text">?????????????????? ?? ??????????????????????</span>
                </label>
            </div>
        </div>
        <div class="input-form-change">
            <label for="">??????</label>
            <div class="input-relative">
                <input value="<?= !empty($jur['inn']) ? $jur['inn'] : '' ?>" placeholder="??????" class="main_color_text"
                       name="inn" type="text">
            </div>
        </div>
        <div class="input-form-change">
            <label for="">??????</label>
            <div class="input-relative">
                <input value="<?= !empty($jur['kpp']) ? $jur['kpp'] : '' ?>" placeholder="??????" class="main_color_text"
                       name="kpp" type="text">
            </div>
        </div>
        <div class="input-form-change">
            <label for="">????????</label>
            <div class="input-relative">
                <input value="<?= !empty($jur['ogrn']) ? $jur['ogrn'] : '' ?>" placeholder="????????"
                       class="main_color_text" name="ogrn" type="text">
            </div>
        </div>
        <div class="input-form-change">
            <label for="">??????</label>
            <div class="input-relative">
                <input value="<?= !empty($jur['bik']) ? $jur['bik'] : '' ?>" placeholder="??????" class="main_color_text"
                       name="bik" type="text">
            </div>
        </div>
        <div class="input-form-change">
            <label for="">?????????????????? ????????</label>
            <div class="input-relative">
                <input value="<?= !empty($jur['check']) ? $jur['check'] : '' ?>" placeholder="?????????????????? ????????"
                       class="main_color_text" name="check" type="text">
            </div>
        </div>
        <?php if (empty($info['jur_payment_info'])): ?>
            <div style="max-width: 300px" class="form-button">
                <button>?????????????????? ????????????????????????</button>
            </div>
        <?php endif; ?>
        <?= Html::endForm(); ?>

        <?= Html::beginForm('', 'post', ['class' => 'phiz-fase', 'style' => 'display:none']) ?>
        <?php $fiz = !empty($info['fiz_payment_info']) ? json_decode($info['fiz_payment_info'], 1) : '' ?>
        <div class="input-form-change">
            <label for="">???????? ??????????????</label>
            <div class="input-relative">
                <input value="<?= !empty($fiz['f']) ? $fiz['f'] : '' ?>" placeholder="???????? ??????????????"
                       class="main_color_text" name="f" type="text">
            </div>
        </div>
        <div class="input-form-change">
            <label for="">???????? ??????</label>
            <div class="input-relative">
                <input value="<?= !empty($fiz['i']) ? $fiz['i'] : '' ?>" placeholder="???????? ??????" class="main_color_text"
                       name="i" type="text">
            </div>
        </div>
        <div class="input-form-change">
            <label for="">???????? ???????????????? (???????? ????????)</label>
            <div class="input-relative">
                <input value="<?= !empty($fiz['o']) ? $fiz['o'] : '' ?>" placeholder="???????? ???????????????? (???????? ????????)"
                       class="main_color_text" name="o" type="text">
            </div>
        </div>
        <div class="input-form-change">
            <label for="">?????????? ??????????????????????</label>
            <div class="input-relative">
                <input value="<?= !empty($fiz['addr']) ? $fiz['addr'] : '' ?>" placeholder="?????????? ??????????????????????"
                       class="main_color_text" name="addr" type="text">
            </div>
        </div>
        <?php if (empty($info['fiz_payment_info'])): ?>
            <div style="max-width: 300px" class="form-button">
                <button>?????????????????? ????????????????????????</button>
            </div>
        <?php endif; ?>

        <?= Html::endForm(); ?>
        <div class="payer-list">
            <?php if (!empty($info['fiz_payment_info'])): ?>
                <div class="payer-item">
                    <div class="payer-text">
                        <p class="main_color_text"><?= $fiz['f'] . ' ' . $fiz['i'] . ' ' . $fiz['o'] ?></p>
                        <p class="main_color_text"><?= $fiz['addr'] ?></p>
                        <p class="main_color_text"><?= $info['phone'] ?></p>
                        <p class="main_color_text"><?= $info['email'] ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($info['jur_payment_info'])): ?>
                <div class="payer-item">
                    <div class="payer-text">
                        <p class="main_color_text"><?= $jur['organization'] ?></p>
                        <p class="main_color_text"><?= $jur['director'] ?></p>
                        <p class="main_color_text"><?= $jur['jurAddress'] ?></p>
                        <p class="main_color_text"><?= $jur['check'] ?></p>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
<!--    <div class="message-user">-->
<!--        <div class="message-title">-->
<!--            <h2 class="main_color_text">??????????????????????</h2>-->
<!--        </div>-->
<!--        <div class="message-checkbox-list">-->
<!--            <div class="message-checkbox-item">-->
<!--                <h2 class="main_color_text">Email-??????????????????????:</h2>-->
<!--                <ul>-->
<!--                    <li>-->
<!--                        <label class="custom-checkbox">-->
<!--                            <input class="change_filter" name="" type="checkbox" value="">-->
<!--                            <span class="Font-size18 main_color_text">??????????????</span>-->
<!--                        </label>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label class="custom-checkbox">-->
<!--                            <input class="change_filter" name="" type="checkbox" value="">-->
<!--                            <span class="Font-size18 main_color_text">?????????????????? ?????????????? ????????????</span>-->
<!--                        </label>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label class="custom-checkbox">-->
<!--                            <input class="change_filter" name="" type="checkbox" value="">-->
<!--                            <span class="Font-size18 main_color_text">?????????????????? ?????????????? ???? ??????????????</span>-->
<!--                        </label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="message-checkbox-item">-->
<!--                <h2 class="main_color_text">Email-??????????????????????:</h2>-->
<!--                <ul>-->
<!--                    <li>-->
<!--                        <label class="custom-checkbox">-->
<!--                            <input class="change_filter" name="" type="checkbox" value="">-->
<!--                            <span class="Font-size18 main_color_text">??????????????</span>-->
<!--                        </label>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label class="custom-checkbox">-->
<!--                            <input class="change_filter" name="" type="checkbox" value="">-->
<!--                            <span class="Font-size18 main_color_text">?????????????????? ?????????????? ????????????</span>-->
<!--                        </label>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <label class="custom-checkbox">-->
<!--                            <input class="change_filter" name="" type="checkbox" value="">-->
<!--                            <span class="Font-size18 main_color_text">?????????? ??????????????????</span>-->
<!--                        </label>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <button class="save-changes-button">?????????????????? ??????????????????</button>-->
<!--    </div>-->
</div>