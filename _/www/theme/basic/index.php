<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- Main 시작 { -->
<div id="main" class="contents_wrap">
  
  <!-- main section { -->
  <div class="main-section">
    <div class="main-visual">
      <div class="main-visual-img">
        <img src="/source/img/main-visual01.png" alt="">
      </div>
    </div>
  </div>
  <!-- } main section -->

  <?php if(!$is_member){ ?>
  <!-- main section { -->
  <div class="main-section main-beforeLogin-section">
    <div class="container">
      <div class="main-before-login">
        <a href="<?php echo G5_BBS_URL ?>/login.php" class="login-btn">로그인</a>
        <p class="f_corm before-login-txt">
          GO LIGHT<br>
          GO FRESH.
        </p>
      </div>
    </div>
  </div>
  <!-- } main section -->
  <?php }else{ ?>
  <!-- main section { -->
  <div class="main-section main-notice-section">
    <div class="main-notice-box">
      <div class="container">
        <div class="main-notice-top">
          <p class="f_corm main-title">NOTICE</p>
          <a href="" class="more-view">더보기</a>
        </div>
      </div>
      <div class="main-notice-sl">
        <div class="container">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <!-- item { -->
              <div class="swiper-slide main-notice-slide">
                <a href="" class="link">
                  <span class="tag">일반공지</span>
                  <p class="tit">4/20 시스템 점검으로 인한 서비스 중단 안내</p>
                  <p class="date">2024.08.25</p>
                </a>
              </div>
              <!-- } item -->
              <!-- item { -->
              <div class="swiper-slide main-notice-slide">
                <a href="" class="link">
                  <span class="tag">일반공지</span>
                  <p class="tit">4/20 시스템 점검으로 인한 서비스 중단 안내</p>
                  <p class="date">2024.08.25</p>
                </a>
              </div>
              <!-- } item -->
              <!-- item { -->
              <div class="swiper-slide main-notice-slide">
                <a href="" class="link">
                  <span class="tag">일반공지</span>
                  <p class="tit">4/20 시스템 점검으로 인한 서비스 중단 안내</p>
                  <p class="date">2024.08.25</p>
                </a>
              </div>
              <!-- } item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- } main section -->
  <?php } ?>

  <!-- main section { -->
  <div class="main-section main-partners-section">
    <div class="main-partners-box">
      <div class="container">
        <div class="main-partners-top">
          <p class="f_corm main-title">PARTNERS</p>
          <div class="main-partners-ctr-box swiper-ctr-box">
            <button type="button" class="btn-prev"></button>
            <button type="button" class="btn-next"></button>
          </div>
        </div>
      </div>
      <div class="main-partners-sl">
        <div class="container">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <!-- item { -->
              <div class="swiper-slide main-partners-slide">
                <a href="" class="link">
                  <p class="t1">ONSO 서울은 더 나은 가치를 위한 푸드스타일을 제공합니다. <br>푸드를 넘어 즐거운 감각적 경험을 만들어갑니다.</p>
                  <div class="img-wrap">
                    <img src="/source/img/partners-thumb01.png" alt="">
                  </div>
                  <p class="loc">압구정 본점</p>
                </a>
              </div>
              <!-- } item -->
              <!-- item { -->
              <div class="swiper-slide main-partners-slide">
                <a href="" class="link">
                  <p class="t1">ONSO 서울은 더 나은 가치를 위한 푸드스타일을 제공합니다. <br>푸드를 넘어 즐거운 감각적 경험을 만들어갑니다.</p>
                  <div class="img-wrap">
                    <img src="/source/img/partners-thumb01.png" alt="">
                  </div>
                  <p class="loc">압구정 본점</p>
                </a>
              </div>
              <!-- } item -->
              <!-- item { -->
              <div class="swiper-slide main-partners-slide">
                <a href="" class="link">
                  <p class="t1">ONSO 서울은 더 나은 가치를 위한 푸드스타일을 제공합니다. <br>푸드를 넘어 즐거운 감각적 경험을 만들어갑니다.</p>
                  <div class="img-wrap">
                    <img src="/source/img/partners-thumb01.png" alt="">
                  </div>
                  <p class="loc">압구정 본점</p>
                </a>
              </div>
              <!-- } item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- } main section -->

  <!-- main-section { -->
  <div class="main-section main-help-section">
    <div class="main-help-box">
      <p class="f_corm main-title">HELP</p>
      <ul class="main-help-info-ul">
        <li>평일 09:00 - 17:00</li>
        <li>주말 및 공휴일 휴무</li>
      </ul>
      <a href="tel:1588-0000" class="main-help-num">1588-0000</a>
      <a href="" class="more-view"></a>
    </div>
  </div>
  <!-- } main-section -->

</div>
<!-- } Main 시작 -->

<?php
include_once(G5_THEME_PATH.'/tail.php');