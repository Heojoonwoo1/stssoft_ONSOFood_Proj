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

        <!-- 회원가입결과 시작 { -->
        <div class="login-box">
          <div class="t-box join-res-box">
            <div class="icon">
              <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <h3>
              <b><?php echo get_text($mb['mb_name']); ?></b>님,<br>
              회원가입을 진심으로 축하합니다!
            </h3>
            <?php if (is_use_email_certify()) {  ?>
            <p class="t1">
                회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.<br>
                발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.
            </p>
            <div id="result_email">
                <span>아이디</span>
                <strong><?php echo $mb['mb_id'] ?></strong><br>
                <span>이메일 주소</span>
                <strong><?php echo $mb['mb_email'] ?></strong>
            </div>
            <p class="t1">
              이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.
            </p>
            <?php }  ?>
            <p class="t1">
              회원님의 비밀번호는 <br>아무도 알 수 없는 암호화 코드로 <br>저장되므로 안심하셔도 좋습니다.
            </p>
            <p class="t1">
              아이디, 비밀번호 분실시에는 <br>회원가입시 입력하신 이메일 주소를 이용하여 <br>찾을 수 있습니다.
            </p>
            <p class="t1">
              회원 탈퇴는 언제든지 가능하며 <br>일정기간이 지난 후, 회원님의 정보는 <br>삭제하고 있습니다.
            </p>
            <p class="t1">감사합니다.</p>
          </div>

          <div class="i-col-1 btn-wrap">
            <div class="btn-item">
              <a href="<?php echo G5_URL ?>/" class="btn type02">메인으로</a>
            </div>
          </div>
        </div>
        <!-- } 회원가입결과 끝 -->

      </div>

    </div>
  </div>
</div>