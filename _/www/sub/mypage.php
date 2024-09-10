<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
?>

<div class="sub-contents">
  <div id="mypage" class="sub">

    <div class="sub-title">
      <div class="container">
        <div class="t-box">
          <p class="f_SCore t1">마이페이지</p>
        </div>
      </div>
    </div>

    <div class="my-wrap">
      <div class="container">
        <div class="my-sec">
          <div class="my-info-box">
            <p class="t1">
              <b><?php echo $member['mb_name']; ?></b>님, 환영합니다!
            </p>
            <a href="<?php echo G5_BBS_URL ?>/logout.php" class="logout">로그아웃</a>
          </div>
        </div>
        <div class="my-sec">
          <div class="my-icon-list">
            <ul class="my-icon-ul">
              <li>
                <a href="">
                  <span class="icon"><img src="/source/img/icon-my01.png" alt=""></span>
                  <span class="t1">급식신청 내역</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="icon"><img src="/source/img/icon-my02.png" alt=""></span>
                  <span class="t1">식단 평가하기</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="icon"><img src="/source/img/icon-my03.png" alt=""></span>
                  <span class="t1">의견 남기기</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="my-sec">
          <div class="menu-list-wrap">
            <ul class="depth1-ul">
              <li>
                <p class="depth1-txt">회원정보</p>
                <ul class="depth2-ul">
                  <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php">회원정보 수정</a></li>
                  <li><a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=member_leave.php" onclick="return member_leave();">회원탈퇴</a></li>
                </ul>
              </li>
              <li>
                <p class="depth1-txt">식단조회</p>
                <ul class="depth2-ul">
                  <li><a href="">이번주 메뉴 보기</a></li>
                  <li><a href="">이번달 메뉴 보기</a></li>
                </ul>
              </li>
              <li>
                <p class="depth1-txt">고객의 소리</p>
                <ul class="depth2-ul">
                  <li><a href="/opinion/write">의견 남기기</a></li>
                  <li><a href="/opinion">내 의견내역</a></li>
                  <li><a href="/review/write">급식 후기 작성</a></li>
                  <li><a href="/review">내 급식후기 내역</a></li>
                </ul>
              </li>
              <li>
                <p class="depth1-txt">급식 주문내역 조회</p>
                <ul class="depth2-ul">
                  <li><a href="">급식 결제 내역 조회</a></li>
                  <li><a href="">급식일 변경 내역 조회</a></li>
                  <li><a href="">급식일 미결제 내역 조회</a></li>
                  <li><a href="">급식일 취소 내역 조회</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
  function member_leave(){
    return confirm('정말 회원에서 탈퇴 하시겠습니까?')
  }
</script>

<?php include_once(G5_THEME_PATH.'/tail.php'); ?>