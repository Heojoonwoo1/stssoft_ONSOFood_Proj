<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
?>

<div class="sub-contents">
  <div id="odList_paytotal" class="sub">

    <div class="sub-title">
      <div class="container">
        <div class="t-box">
          <p class="f_SCore t1">결제 내역</p>
        </div>
      </div>
    </div>

    <div class="order-wrap">
      <div class="container">
        <div class="order-list">
          <!-- item { -->
          <div class="order-li">
            <p class="order-row">
              <span class="t1">결제번호 : </span>
              <span class="t2">202409090002</span>
            </p>
            <p class="order-row">
              <span class="t1">결제일 : </span>
              <span class="t2">2024.09.09</span>
            </p>
            <div class="order-row">
              <div class="tag-wrap">
                <span class="tag type01">완료</span>
              </div>
              <div class="col-wrap">
                <span class="cmt">총 <b>2</b>건</span>
                <span class="price"><b>12,000</b>원</span>
              </div>
            </div>
          </div>
          <!-- } item -->
          <!-- item { -->
          <div class="order-li">
            <p class="order-row">
              <span class="t1">결제번호 : </span>
              <span class="t2">202409090001</span>
            </p>
            <p class="order-row">
              <span class="t1">결제일 : </span>
              <span class="t2">2024.09.09</span>
            </p>
            <div class="order-row">
              <div class="tag-wrap">
                <span class="tag type01">완료</span>
              </div>
              <div class="col-wrap">
                <span class="cmt">총 <b>7</b>건</span>
                <span class="price"><b>30,600</b>원</span>
              </div>
            </div>
          </div>
          <!-- } item -->
        </div>
      </div>
    </div>

  </div>
</div>

<?php include_once(G5_THEME_PATH.'/tail.php'); ?>