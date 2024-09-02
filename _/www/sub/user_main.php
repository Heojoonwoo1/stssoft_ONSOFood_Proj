<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
?>

<div class="sub-contents">
  <div id="user_main" class="sub">

    <div class="user_main-top">
      <div class="container">
        <div class="tab user_main-tab">
          <ul class="i-col-3 tab-ul">
            <li><a href="" class="tab-btn on">중식</a></li>
            <li><a href="" class="tab-btn">석식</a></li>
            <li><a href="" class="tab-btn">PLUS</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="user_main-menu-ct">
      <div class="container">
        <div class="user_main-menu-wrap">
          <div class="user_main-menu-top">
            <p class="f_corm main-title">TODAY’S MENU</p>
          </div>
          <div class="user_main-menu">
            <div class="menu-card-wrap">
              <div class="menu-card-top">
                <p class="date">6월 24일, 월요일</p>
                <a href="" class="more-view">주간메뉴 보러가기</a>
              </div>
              <div class="menu-card-list">
                <!-- item { -->
                <div class="menu-card">
                  <div class="card-thumb">
                    <img src="/source/img/menu-card-dthumb01.png" alt="">
                    <button class="card-thumb-btn">
                      <img src="/source/img/img-exp-btn.png" alt="확대하기">
                    </button>
                  </div>
                  <div class="card-info">
                    <p class="t1">
                      <span>MAIN MENU</span>
                    </p>
                    <p class="t2">왕돈까스</p>
                    <ul class="card-list">
                      <li>밥</li>
                      <li>국</li>
                      <li>반찬1</li>
                      <li>반찬2</li>
                      <li>반찬3</li>
                    </ul>
                  </div>
                </div>
                <!-- } item -->
              </div>
              <div class="menu-card-btn-wrap">
                <div class="menu-review">
                  <span class="point">4.0</span>
                  <div class="rv-star">
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star"></span>
                    <span class="star no"></span>
                  </div>
                </div>
                <a href="" class="btn">급식 후기 작성</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="user_main-notice-ct">
      <div class="container">
        <div class="user_main-notice-wrap">
          <div class="user_main-notice-top">
            <p class="f_corm main-title">NOTICE</p>
            <a href="" class="more-view">더보기</a>
          </div>
          <div class="user_main-notice-list">
            <!-- item { -->
            <a href="" class="user_main-notice-item">
              <span class="tag">일반공지</span>
              <p class="tit">4/20 시스템 점검으로 인한 서비스 중단 안내</p>
              <p class="date">2024.08.25</p>
            </a>
            <!-- } item -->
            <!-- item { -->
            <a href="" class="user_main-notice-item">
              <span class="tag">일반공지</span>
              <p class="tit">4/20 시스템 점검으로 인한 서비스 중단 안내</p>
              <p class="date">2024.08.25</p>
            </a>
            <!-- } item -->
            <!-- item { -->
            <a href="" class="user_main-notice-item">
              <span class="tag">일반공지</span>
              <p class="tit">4/20 시스템 점검으로 인한 서비스 중단 안내</p>
              <p class="date">2024.08.25</p>
            </a>
            <!-- } item -->
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include_once(G5_THEME_PATH.'/tail.php'); ?>