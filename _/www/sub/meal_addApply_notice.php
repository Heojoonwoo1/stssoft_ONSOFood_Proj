<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
?>

<div class="sub-contents">
  <div id="meal_addApply_notice" class="sub">

    <div class="sub-title">
      <div class="container">
        <div class="t-box">
          <p class="f_SCore t1">급식 추가 신청 안내문</p>
        </div>
      </div>
    </div>

    <div class="meal-wrap">
      <div class="container">
        <div class="meal-sec">
          <div class="consent-notice-wrap">
            <div class="consent-notice-img">
              <img src="/source/img/terms-img.jpg" alt="급식 신청 안내문">
            </div>
          </div>
          <div class="consent-notice-terms">
            <p class="t1">
              <b>[<?php echo $member['mb_name']; ?>]</b> 님은 위 내용을 정확히 숙지하고 이해 하였습니다. <br>
              이에 동의합니다.
            </p>
            <div class="check-row">
              <p class="date">
                날짜 : <span>2024/09/06</span>
              </p>
              <div class="check_wrap">
                <input type="checkbox" id="check01">
                <label for="check01"><b>[<?php echo $member['mb_name']; ?>]</b> 동의</label>
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
								<a href="" class="btn type01">다음</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include_once(G5_THEME_PATH.'/tail.php'); ?>