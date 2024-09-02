<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);

if($config['cf_cert_use'] && ($config['cf_cert_simple'] || $config['cf_cert_ipin'] || $config['cf_cert_hp'])) { ?>
  <script src="<?php echo G5_JS_URL ?>/certify.js?v=<?php echo G5_JS_VER; ?>"></script>    
<?php } ?>

<div class="sub-contents">
  <div id="lost" class="sub">
    <div class="container">

      <div class="login-wrap">
        <div class="login-top">
          <p class="f_corm login-title">FIND ID/PW</p>
        </div>
        <form name="fpasswordlost" action="<?php echo $action_url ?>" onsubmit="return fpasswordlost_submit(this);" method="post" autocomplete="off">
          <input type="hidden" name="cert_no" value="">

          <div class="login-box">
            <fieldset id="info_fs">
              <div class="t-box">
                <h3>이메일로 찾기</h3>
                <p class="t1">
                  회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
                  해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
                </p>
              </div>
              <div class="info-list lost-table">
                <div class="info-item">
                  <div class="k">E-Mail <span class="star">*</span></div>
                  <div class="v">
                    <div class="input-wrap">
                      <label for="mb_email" class="sound_only">E-mail 주소<strong class="sound_only">필수</strong></label>
                      <input type="text" name="mb_email" id="mb_email" required class="required frm_input full_input email" size="30" placeholder="E-mail 주소">
                    </div>
                  </div>
                </div>
                <div class="info-item">
                  <div class="k">자동등록방지 <span class="star">*</span></div>
                  <div class="v">
                    <div class="input-wrap">
                      <?php echo captcha_html();  ?>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>

            <div class="i-col-1 btn-wrap">
              <div class="btn-item">
                <button type="submit" class="btn_submit btn type02">인증메일 보내기</button>
              </div>
            </div>
          </div>

          <?php if($config['cf_cert_use'] != 0 && $config['cf_cert_find'] != 0) { ?>
          <div class="login-box">
            <div class="t-box">
              <h3>본인인증으로 찾기</h3>
              <p class="t1">
                본인인증 정보를 입력해 주세요.
              </p>
            </div>

            <div class="i-col-1 btn-wrap">
              <div class="btn-item">
                <?php if(!empty($config['cf_cert_simple'])) { ?>
                <button type="button" id="win_sa_kakao_cert" class="btn_submit win_sa_cert btn_submit btn type02" data-type="">간편인증</button>
                <?php } if(!empty($config['cf_cert_hp']) || !empty($config['cf_cert_ipin'])) { ?>
                  <?php if(!empty($config['cf_cert_hp'])) { ?>
                  <button type="button" id="win_hp_cert" class="btn_submit btn_submit btn type02">휴대폰 본인확인</button>
                  <?php } if(!empty($config['cf_cert_ipin'])) { ?>
                  <button type="button" id="win_ipin_cert" class="btn_submit btn_submit btn type02">아이핀 본인확인</button>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php } ?>

        </form>
      </div>

    </div>
  </div>
</div>
<!-- 회원정보 찾기 시작 { -->
<!-- <div id="find_info" class="new_win<?php if($config['cf_cert_use'] != 0 && $config['cf_cert_find'] != 0) { ?> cert<?php } ?>">
    <div class="new_win_con">
        <form name="fpasswordlost" action="<?php echo $action_url ?>" onsubmit="return fpasswordlost_submit(this);" method="post" autocomplete="off">
          <input type="hidden" name="cert_no" value="">
          <h3>이메일로 찾기</h3>
          <fieldset id="info_fs">
              <p>
                  회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
                  해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
              </p>
              <label for="mb_email" class="sound_only">E-mail 주소<strong class="sound_only">필수</strong></label>
              <input type="text" name="mb_email" id="mb_email" required class="required frm_input full_input email" size="30" placeholder="E-mail 주소">
          </fieldset>
          <?php echo captcha_html();  ?>

          <div class="win_btn">
              <button type="submit" class="btn_submit">인증메일 보내기</button>
          </div>
        </form>
    </div>
    <?php if($config['cf_cert_use'] != 0 && $config['cf_cert_find'] != 0) { ?> 
    <div class="new_win_con find_btn">
        <h3>본인인증으로 찾기</h3>
        <div class="cert_btn">
        <?php if(!empty($config['cf_cert_simple'])) { ?>
            <button type="button" id="win_sa_kakao_cert" class="btn_submit win_sa_cert" data-type="">간편인증</button>
        <?php } if(!empty($config['cf_cert_hp']) || !empty($config['cf_cert_ipin'])) { ?>
            <?php if(!empty($config['cf_cert_hp'])) { ?>
            <button type="button" id="win_hp_cert" class="btn_submit">휴대폰 본인확인</button>
            <?php } if(!empty($config['cf_cert_ipin'])) { ?>
            <button type="button" id="win_ipin_cert" class="btn_submit">아이핀 본인확인</button>
            <?php } ?>
        <?php } ?>
        </div>
    </div>
    <?php } ?>
</div> -->
<script>    
$(function() {
    $("#reg_zip_find").css("display", "inline-block");
    var pageTypeParam = "pageType=find";

	<?php if($config['cf_cert_use'] && $config['cf_cert_simple']) { ?>
	// TOSS 간편인증
	var url = "<?php echo G5_INICERT_URL; ?>/ini_request.php";
	var type = "";    
    var params = "";
    var request_url = "";
    
	
	$(".win_sa_cert").click(function() {
		type = $(this).data("type");
		params = "?directAgency=" + type + "&" + pageTypeParam;
        request_url = url + params;
        call_sa(request_url);
	});
    <?php } ?>
    <?php if($config['cf_cert_use'] && $config['cf_cert_ipin']) { ?>
    // 아이핀인증
    var params = "";
    $("#win_ipin_cert").click(function() {
        params = "?" + pageTypeParam;
        var url = "<?php echo G5_OKNAME_URL; ?>/ipin1.php"+params;
        certify_win_open('kcb-ipin', url);
        return;
    });

    <?php } ?>
    <?php if($config['cf_cert_use'] && $config['cf_cert_hp']) { ?>
    // 휴대폰인증
    var params = "";
    $("#win_hp_cert").click(function() {
        params = "?" + pageTypeParam;
        <?php     
        switch($config['cf_cert_hp']) {
            case 'kcb':                
                $cert_url = G5_OKNAME_URL.'/hpcert1.php';
                $cert_type = 'kcb-hp';
                break;
            case 'kcp':
                $cert_url = G5_KCPCERT_URL.'/kcpcert_form.php';
                $cert_type = 'kcp-hp';
                break;
            case 'lg':
                $cert_url = G5_LGXPAY_URL.'/AuthOnlyReq.php';
                $cert_type = 'lg-hp';
                break;
            default:
                echo 'alert("기본환경설정에서 휴대폰 본인확인 설정을 해주십시오");';
                echo 'return false;';
                break;
        }
        ?>
        
        certify_win_open("<?php echo $cert_type; ?>", "<?php echo $cert_url; ?>"+params);
        return;
    });
    <?php } ?>
});
function fpasswordlost_submit(f)
{
    <?php echo chk_captcha_js();  ?>

    return true;
}
</script>
<!-- } 회원정보 찾기 끝 -->