<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
?>

<div class="sub-contents">
  <div id="meal_cancel_pay" class="sub">

    <div class="sub-title">
      <div class="container">
        <div class="t-box">
          <p class="f_SCore t1">급식 취소 내역</p>
        </div>
      </div>
    </div>

    <div class="meal-wrap">
      <div class="container">
        <div class="meal-sec">
          <div class="payment-box">
            <p class="f_SCore payment-tit">환불내역</p>
            <div class="payment-wrap">
              <div class="payment-item">
                <p class="k">식사일</p>
                <p class="v">2024/09/06</p>
              </div>
              <div class="payment-item">
                <p class="k">중식</p>
                <p class="v">XX 건</p>
              </div>
              <div class="payment-item">
                <p class="k">석식</p>
                <p class="v">XX 건</p>
              </div>
              <div class="payment-item">
                <p class="k">총 취소건수</p>
                <p class="v">XX 건</p>
              </div>
              <div class="payment-item">
                <p class="k">수수료(2.4%)</p>
                <p class="v"><b class="refund">-1,000</b>원</p>
              </div>
              <div class="payment-item">
                <p class="k">환불예정 금액</p>
                <p class="v"><b>1,000,000</b> 원</p>
              </div>
            </div>
          </div>
          <div class="payment-box">
            <p class="f_SCore payment-tit">학생명</p>
            <div class="payment-wrap">
              <div class="payment-item">
                <p class="k">성명</p>
                <p class="v name"><?php echo $member['mb_name']; ?></p>
              </div>
            </div>
          </div>
          <div class="payment-box">
            <p class="f_SCore payment-tit">환불계좌 정보</p>
            <div class="payment-wrap">
              <div class="payment-item">
                <p class="k">예금주</p>
                <p class="v name"><?php echo $member['mb_name']; ?></p>
              </div>
              <div class="payment-item">
                <p class="k">카카오뱅크</p>
                <p class="v name">3333-00-123456</p>
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