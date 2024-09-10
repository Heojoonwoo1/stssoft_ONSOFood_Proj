<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
?>

<div class="sub-contents">
  <div id="meal_unpaid_pay" class="sub">

    <div class="sub-title">
      <div class="container">
        <div class="t-box">
          <p class="f_SCore t1">미결제 급식 내역</p>
        </div>
      </div>
    </div>

    <div class="meal-wrap">
      <div class="container">
        <div class="meal-sec">
          <div class="payment-box">
            <p class="f_SCore payment-tit">미결제 예정금액</p>
            <div class="payment-wrap">
              <div class="payment-item">
                <p class="k">식사일</p>
                <p class="v">3일</p>
              </div>
              <div class="payment-item">
                <p class="k">1식 비용</p>
                <p class="v"><b>6,000</b> 원</p>
              </div>
              <div class="payment-item">
                <p class="k">연체 비용</p>
                <p class="v"><b>400</b> 원</p>
              </div>
              <div class="payment-item">
                <p class="k">총 결제금액</p>
                <p class="v"><b>18,400</b> 원</p>
              </div>
            </div>
          </div>
        </div>
        <div class="meal-sec">
          <div class="meal-step-btn-wrap">
            <div class="btn-wrap">
              <div class="btn-item">
                <a href="" class="btn type01">이전</a>
              </div>
              <div class="btn-item">
								<a href="" class="btn type01">결제하기</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include_once(G5_THEME_PATH.'/tail.php'); ?>