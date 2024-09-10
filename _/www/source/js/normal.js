$(document).ready(function(){
  // [메인] 파트너 슬라이드
  const mainPartnerSlide = new Swiper('.main-partners-sl .swiper-container', {
    slidesPerView: 1.1,
    spaceBetween: 18,
    // autoplay: {
    //   delay: 2500,
    // },
  });

  // [메인] 공지사항 슬라이드
  const mainNoticeSlide = new Swiper('.main-notice-sl .swiper-container', {
    slidesPerView: 1.1,
    spaceBetween: 16,
    // autoplay: {
    //   delay: 2500,
    // },
  });

  // [공통] 메뉴 버튼
  let popDim = $('.pop-dim');
  let menu = $('.all-menu-wrap');
  let body = $('body, html');

  $('.all-menu-btn').on('click',function(){
    popDim.show();
    body.addClass('no-scr');
    menu.addClass('open');
  });

  $(document).mouseup(function (e){
    let allMenu = $('.all-menu-wrap');
    
    if (e.target === document.documentElement) {
      return;
    }

    if(allMenu.has(e.target).length === 0){
      popDim.fadeOut();
      body.removeClass('no-scr');
      menu.removeClass('open');
    }
  });

  // [지점 메인] 상품 상세 팝업
  let mealExpPop = $('.card-thumb-exp-wrap');

  $('.card-thumb-btn').on('click',function(){
    let imgSrc = $(this).siblings('img').attr('src');

    popDim.show();
    body.addClass('no-scr');
    mealExpPop.find('.card-thumb-exp-img img').attr('src',imgSrc);
    mealExpPop.fadeIn();
  });

  $('.card-thumb-exp-close').on('click',function(){
    popDim.fadeOut();
    body.removeClass('no-scr');
    mealExpPop.fadeOut();
  });

  // [공통] 메뉴 1뎁스 클릭
  $('.depth1-btn').on('click', function () {
    let $this = $(this);

    $('.depth1-btn').siblings('.depth2-ul').slideUp();
    $this.siblings('.depth2-ul').slideDown();

    $('.depth1-btn').removeClass('on');
    $this.addClass('on');
  });
});