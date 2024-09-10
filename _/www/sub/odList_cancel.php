<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
?>

<div class="sub-contents">
  <div id="odList_cancel" class="sub">

    <div class="sub-title">
      <div class="container">
        <div class="t-box">
          <p class="f_SCore t1">결제 취소 내역</p>
        </div>
      </div>
    </div>

    <div class="order-wrap">
      <div class="container">
        <div class="order-list">
          <!-- item { -->
          <div class="order-li">
            <p class="order-row">
              <span class="t1">취소번호 : </span>
              <span class="t2">202409090002</span>
            </p>
            <p class="order-row">
              <span class="t1">취소신청일 : </span>
              <span class="t2">2024.09.09</span>
            </p>
            <p class="order-row">
              <span class="t1">취소사유 : </span>
              <span class="t2">개인사정</span>
            </p>
            <p class="order-row">
              <span class="t1">담당자 : </span>
              <span class="t2">허준우</span>
            </p>
            <div class="order-row">
              <div class="tag-wrap">
                <span class="tag type04">취소완료</span>
              </div>
              <div class="col-wrap">
                <span class="date">취소일 <b>2024.09.09</b></span>
              </div>
            </div>
          </div>
          <!-- } item -->
          <!-- item { -->
          <div class="order-li">
            <p class="order-row">
              <span class="t1">취소번호 : </span>
              <span class="t2">202409090002</span>
            </p>
            <p class="order-row">
              <span class="t1">취소신청일 : </span>
              <span class="t2">2024.09.09</span>
            </p>
            <p class="order-row">
              <span class="t1">취소사유 : </span>
              <span class="t2">개인사정</span>
            </p>
            <p class="order-row">
              <span class="t1">담당자 : </span>
              <span class="t2">허준우</span>
            </p>
            <div class="order-row">
              <div class="tag-wrap">
                <span class="tag type04">취소완료</span>
              </div>
              <div class="col-wrap">
                <span class="date">취소일 <b>2024.09.09</b></span>
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