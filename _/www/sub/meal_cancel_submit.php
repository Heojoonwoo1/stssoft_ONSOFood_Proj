<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
?>

<div class="sub-contents">
  <div id="meal_cancel_submit" class="sub">

    <div class="sub-title">
      <div class="container">
        <div class="t-box">
          <p class="f_SCore t1">급식 취소 증빙자료 첨부</p>
        </div>
      </div>
    </div>

    <div class="meal-wrap">
      <div class="container">
        <div class="meal-sec">
          <div class="info-list">
            <div class="info-item">
              <div class="k">급식취소 사유 <span class="star">*</span></div>
              <div class="v">
                <div class="input-wrap">
                  <div class="radio_list">
                    <div class="radio_wrap">
                      <input type="radio" id="reason01" name="reason[]">
                      <label for="reason01">학원측의 강제퇴원(즉시 환불)</label>
                    </div>
                    <div class="radio_wrap">
                      <input type="radio" id="reason02" name="reason[]">
                      <label for="reason02">자진퇴소(취소/환불규정 준수)</label>
                    </div>
                    <div class="radio_wrap">
                      <input type="radio" id="reason03" name="reason[]">
                      <label for="reason03">학원측과 협의된 급식 불가사유</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="info-item">
              <div class="k">취소 사유</div>
              <div class="v">
                <div class="input-wrap">
                  <textarea name="" id="" placeholder="취소 사유를 적어주세요."></textarea>
                </div>
              </div>
            </div>
            <div class="info-item">
              <div class="k">증빙 자료 첨부</div>
              <div class="v">
                <div class="input-wrap">
                  <input type="file">
                </div>
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