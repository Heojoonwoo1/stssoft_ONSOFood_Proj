<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

include ONSO_INCLUDE_PATH.'/menus.php';
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
  include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}

// 메인 페이지일 경우
if($_SERVER['PHP_SELF'] == '/index.php'){
  $is_intro = true;
}

// 메인 컬러 헤더 적용
if($_SERVER['PHP_SELF'] == '/sub/user_main.php'){
  $main_color = 'main-color';
}
?>

<!-- 헤더 시작 { -->
<div class="header <?php echo $main_color; ?>">
  <div class="container">
    <div class="hd-wrap">
      <h1 class="logo">
        <a href="/">
          <img class="point" src="/source/img/logo.png" alt="ONSO FOOD & SERVICE">
          <img class="white" src="/source/img/logo-w.png" alt="ONSO FOOD & SERVICE">
        </a>
      </h1>
      <div class="rnb">
        <ul class="rnb-ul">
          <li>
            <a href="" class="my-btn point">
              <img src="/source/img/icon-my.png" alt="마이페이지">
            </a>
            <a href="" class="my-btn white">
              <img src="/source/img/icon-my-w.png" alt="마이페이지">
            </a>
          </li>
          <li>
            <button type="button" class="all-menu-btn">
              <span></span>
            </button>
          </li>
        </ul>
      </div>
    </div>
    <?php if($is_member && $is_intro){ ?>
    <div class="btn-wrap">
      <a href="/sub/user_main.php" class="point-go-btn">
        <span class="icon"><img src="/source/img/icon-point-loc.png" alt=""></span>
        <span>내 지점 이동</span>
        <span class="icon"><img src="/source/img/point-arr-right.png" alt=""></span>
      </a>
    </div>
    <?php } ?>
  </div>
  <?php if ($is_member && !$is_intro){ ?>
  <div class="login-info">
    <div class="container">
      <div class="login-info-txt">
        <p class="loc">러셀 대구</p>
        <p class="t1"><b><?php echo $member['mb_name']; ?></b>님, 합격을 기원합니다!</p>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<!-- } 헤더 끝 -->

<div class="pop-dim"></div>

<!-- 전체 메뉴 { -->
<div class="all-menu-wrap">
  <div class="menu-top">
    <?php if($is_member){ ?>
    <div class="name-wrap">
      <p class="name">
        <b><?php echo $member['mb_name']; ?></b> 님
      </p>
      <a href="" class="my-btn">
        <img src="/source/img/icon-my-w.png" alt="마이페이지">
      </a>
    </div>
    <p class="member-location">러셀 대구</p>
    <?php }else{ ?>
    <div class="name-wrap">
      <a href="<?php echo G5_BBS_URL ?>/login.php" class="name">로그인</a>
    </div>
    <?php } ?>
  </div>
  <div class="menu-list-wrap">
    <ul class="depth1-ul">
      <li>
        <button type="button" class="depth1-btn">급식관리</button>
        <ul class="depth2-ul">
          <li><a href="">급식 신청</a></li>
          <li><a href="">급식 추가 신청</a></li>
          <li><a href="">급식일 변경</a></li>
          <li><a href="" class="new">미결제 급식 납부</a></li>
        </ul>
      </li>
      <li>
        <button type="button" class="depth1-btn">식단조회</button>
        <ul class="depth2-ul">
          <li><a href="">이번주 메뉴 보기</a></li>
          <li><a href="">이번달 메뉴 보기</a></li>
        </ul>
      </li>
      <li>
        <button type="button" class="depth1-btn">고객의 소리</button>
        <ul class="depth2-ul">
          <li><a href="">의견 남기기</a></li>
          <li><a href="">내 의견내역</a></li>
          <li><a href="">급식 후기 작성</a></li>
          <li><a href="">내 급식후기 내역</a></li>
        </ul>
      </li>
      <li>
        <button type="button" class="depth1-btn">급식 주문내역 조회</button>
        <ul class="depth2-ul">
          <li><a href="">급식 결제 내역 조회</a></li>
          <li><a href="">급식일 변경 내역 조회</a></li>
          <li><a href="">급식일 미결제 내역 조회</a></li>
          <li><a href="">급식일 취소 내역 조회</a></li>
        </ul>
      </li>
      <li>
        <button type="button" class="depth1-btn">기타</button>
        <ul class="depth2-ul">
          <li><a href="">EVENT 참여</a></li>
          <li><a href="">마켓 이용</a></li>
        </ul>
        <?php if($is_member){ ?>
        <a href="<?php echo G5_BBS_URL ?>/logout.php" class="logout-btn">로그아웃</a>
        <?php } ?>
      </li>
    </ul>
  </div>
</div>
<!-- } 전체 메뉴 -->

<!-- 콘텐츠 시작 { -->
<div id="contents_dom" class="<?php echo $is_member ? 'login-main':''; ?>">