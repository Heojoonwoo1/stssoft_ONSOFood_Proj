<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<div class="sub-contents">
  <div id="register" class="sub">
    <div class="container">

      <div class="login-wrap">
        <div class="login-top">
          <p class="f_corm login-title">MEMBERSHIP</p>
        </div>

        <!-- 회원가입약관 동의 시작 { -->
        <form  name="fregister" id="fregister" action="<?php echo $register_action_url ?>" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">

          <div class="login-box">

            <!-- <div class="t-box">
              <p class="t2">
                회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.
              </p>
            </div> -->

            <div class="info-list terms-list">
              <div class="info-item">
                <div class="k">회원가입약관 <span class="star">*</span></div>
                <div class="v">
                  <div class="input-wrap">
                    <textarea readonly><?php echo get_text($config['cf_stipulation']) ?></textarea>
                  </div>
                </div>
              </div>
              <div class="info-item">
                <div class="v">
                  <div class="input-wrap">
                    <div class="check_wrap">
                      <input type="checkbox" name="agree" value="1" id="agree11" class="selec_chk">
                      <label for="agree11">회원가입약관의 내용에 동의합니다.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="info-list terms-list">
              <div class="info-item">
                <div class="k">개인정보 수집 및 이용 <span class="star">*</span></div>
                <div class="v">
                  <div class="input-wrap">
                    <textarea readonly><?php echo get_text($config['cf_privacy']) ?></textarea>
                  </div>
                </div>
              </div>
              <div class="info-item">
                <div class="v">
                  <div class="input-wrap">
                    <div class="check_wrap">
                      <input type="checkbox" name="agree2" value="1" id="agree21" class="selec_chk">
                      <label for="agree21">개인정보 수집 및 이용의 내용에 동의합니다.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="t-box">
              <div class="check_wrap">
                <input type="checkbox" name="chk_all" id="chk_all" class="selec_chk">
                <label for="chk_all">회원가입 약관에 모두 동의합니다</label>
              </div>
            </div>

            <div class="i-col-2 btn-wrap">
              <div class="btn-item">
                <a href="<?php echo G5_URL ?>" class="btn type01">취소</a>
              </div>
              <div class="btn-item">
                <button type="submit" class="btn type02">회원가입</button>
              </div>
            </div>

          </div>
          
          <?php
          // 소셜로그인 사용시 소셜로그인 버튼
          @include_once(get_social_skin_path().'/social_register.skin.php');
          ?>

        </form>
        <!-- } 회원가입 약관 동의 끝 -->

      </div>

    </div>
  </div>
</div>

<script>
  function fregister_submit(f)
  {
      if (!f.agree.checked) {
          alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
          f.agree.focus();
          return false;
      }

      if (!f.agree2.checked) {
          alert("개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
          f.agree2.focus();
          return false;
      }

      return true;
  }
  
  jQuery(function($){
      // 모두선택
      $("input[name=chk_all]").click(function() {
          if ($(this).prop('checked')) {
              $("input[name^=agree]").prop('checked', true);
          } else {
              $("input[name^=agree]").prop("checked", false);
          }
      });
  });
</script>