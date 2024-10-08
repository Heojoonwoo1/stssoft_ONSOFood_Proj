<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
?>

<div class="sub-contents">
  <div id="meal_unpaid_complete" class="sub">

    <div class="sub-title">
      <div class="container">
        <div class="t-box">
          <p class="f_SCore t1">미결제 급식신청 완료</p>
        </div>
      </div>
    </div>

    <div class="meal-wrap">
      <div class="container">
        <div class="meal-sec">
          <div class="meal-complete-box">
            <div class="icon">
              <img src="/source/img/icon-checked.svg" alt="완료">
            </div>
            <p class="t1">
              급식 신청 결제가 완료 되었습니다.<br>
              감사합니다.
            </p>
          </div>
          <div class="meal-complete-btn-wrap">
            <div class="i-col-2 btn-wrap">
              <div class="btn-item">
								<a href="" class="btn type02">메인으로</a>
              </div>
              <div class="btn-item">
								<a href="" class="btn type01">내 신청정보 조회</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include_once(G5_THEME_PATH.'/tail.php'); ?>