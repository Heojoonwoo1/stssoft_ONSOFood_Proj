<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
?>

<div class="sub-contents">
  <div id="odList_unpaid" class="sub">

    <div class="sub-title">
      <div class="container">
        <div class="t-box">
          <p class="f_SCore t1">미결제 내역</p>
        </div>
      </div>
    </div>

    <div class="order-wrap">
      <div class="container">
        <div class="order-list">
          <!-- item { -->
          <div class="order-li">
            <p class="order-row">
              <span class="t1">미결제번호 : </span>
              <span class="t2">202409090002</span>
            </p>
            <p class="order-row">
              <span class="t1">미결제일 : </span>
              <span class="t2">2024.09.09</span>
            </p>
            <p class="order-row">
              <span class="t1">미결제사유 : </span>
              <span class="t2">개인 사정</span>
            </p>
            <div class="order-row">
              <div class="tag-wrap">
                <span class="tag type03">미결제</span>
              </div>
              <div class="col-wrap">
                <span class="price unpaid"><b>12,000</b>원</span>
              </div>
            </div>
          </div>
          <!-- } item -->
          <!-- item { -->
          <div class="order-li">
            <p class="order-row">
              <span class="t1">미결제번호 : </span>
              <span class="t2">202409090002</span>
            </p>
            <p class="order-row">
              <span class="t1">미결제일 : </span>
              <span class="t2">2024.09.09</span>
            </p>
            <p class="order-row">
              <span class="t1">미결제사유 : </span>
              <span class="t2">개인 사정</span>
            </p>
            <div class="order-row">
              <div class="tag-wrap">
                <span class="tag type03">미결제</span>
              </div>
              <div class="col-wrap">
                <span class="price unpaid"><b>12,000</b>원</span>
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