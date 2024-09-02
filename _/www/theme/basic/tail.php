<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
</div><!-- header.php : #contents_dom -->
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 푸터 시작 { -->
<div class="footer">
  <div class="container">
    <div class="ft-wrap">
      <div class="ft-top">
        <div class="ft-logo">
          <a href="/"><img src="/source/img/logo.png" alt="ONSO FOOD & SERVICE"></a>
        </div>
      </div>
      <div class="ft-bot">
        <div class="ft-link-wrap">
          <div class="ft-link-box">
            <p class="t1">페이지 바로가기</p>
            <ul class="ft-link-ul">
              <li><a href="">About Us</a></li>
              <li><a href="">News</a></li>
              <li><a href="">FAQ</a></li>
              <li><a href="">HELP</a></li>
            </ul>
          </div>
          <div class="ft-link-box">
            <p class="t1">SNS 바로가기</p>
            <ul class="ft-link-ul">
              <li><a href="">Youtube</a></li>
              <li><a href="">Instagram</a></li>
              <li><a href="">Naver Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- } 푸터 끝 -->

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");