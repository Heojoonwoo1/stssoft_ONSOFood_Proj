<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<!-- fullcalendar css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<!-- fullcalendar 언어 설정관련 script -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>

<div class="sub-contents">
  <div id="meal_apply" class="sub">

    <div class="sub-title">
      <div class="container">
        <div class="t-box">
          <p class="f_SCore t1">급식 신청</p>
        </div>
      </div>
    </div>

    <div class="meal-wrap">
      <div class="container">
        <div class="meal-sec">
          <div class="cal-caption">
            <div class="cal-caption-item">
              <div class="square lunch"></div>
              <p>중식</p>
            </div>
            <div class="cal-caption-item">
              <div class="square dinner"></div>
              <p>석식</p>
            </div>
          </div>

          <div class="calendar-top">
            <button class="btn prevMonth">
              <img src="/source/img/icon-prev.svg" alt="">
            </button>
            <p class="calendar-title">
              <span class="year">2024</span>년 <span class="month">9</span>월
            </p>
            <button class="btn nextMonth">
              <img src="/source/img/icon-next.svg" alt="">
            </button>
          </div>
          <div id="calendar"></div>

          <div class="meal-btn-wrap">
            <div class="i-col-5 btn-wrap">
              <div class="btn-item">
								<button class="btn type02">중식 선택</button>
              </div>
              <div class="btn-item">
								<button class="btn type02">석식 선택</button>
              </div>
              <div class="btn-item">
								<button class="btn type02">중·석식 선택</button>
              </div>
              <div class="btn-item">
								<button class="btn type02">선택 해제</button>
              </div>
              <div class="btn-item">
								<button class="btn type01 all-delete">전체 선택해제</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  let calendarEl = document.getElementById('calendar');

  let isFirstLoad = true; // 첫번째 로딩
  let today = new Date(); // 오늘 날짜
  let threeDaysLater = new Date(today);
  threeDaysLater.setDate(today.getDate() + 3);
  let mealData = {}; // 날짜별 중식, 석식 선택 상태를 저장할 객체

  let calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth', // 초기 로드 될때 보이는 캘린더 화면(기본 설정: 달)
    headerToolbar: { // 헤더에 표시할 툴 바
      start: 'prev next today',
      center: 'title',
      end: false
    },
    titleFormat: function(date) {
      return date.date.year + '년 ' + (parseInt(date.date.month) + 1) + '월';
    },
    selectable: true, // 달력 일자 드래그 설정가능
    droppable: true,
    editable: true,
    nowIndicator: true, // 현재 시간 마크
    locale: 'ko', // 한국어 설정
    contentHeight: "auto",
    datesSet: function(arg) {
      let currentDate;

      if (isFirstLoad) {
        currentDate = today; // 첫 로딩 시에는 오늘 날짜를 사용
        isFirstLoad = false;
      } else {
        currentDate = calendar.getDate(); // 그 이후에는 현재 달력의 중앙 날짜를 사용
      }

      $('.calendar-title .year').text(currentDate.getFullYear());
      $('.calendar-title .month').text(currentDate.getMonth() + 1);

      updateCalendar(); // 날짜 변경 시 상태 업데이트
    },
    dateClick: function(info) {
      let clickedDate = new Date(info.dateStr);
      if (clickedDate < today || clickedDate < threeDaysLater) {
        alert('오늘부터 3일 이후까지는 선택할 수 없습니다.');
        return;
      }
      handleDateClick(info.dateStr, info.dayEl);
    },
    dayCellDidMount: function(info) {
      let cellDate = new Date(info.date);

      // 3일 이후 이전의 날짜에 no-selected 클래스 추가
      if (cellDate < threeDaysLater) {
        info.el.classList.add('no-selected');
      }
    },
  });

  calendar.render();

  // 날짜 클릭 시 상태를 변경하는 함수
  function handleDateClick(dateStr, element) {
    let currentState = mealData[dateStr] || 'none';

    switch (currentState) {
      case 'none': // 현재 선택 없음 -> 중식 선택
        mealData[dateStr] = 'lunch';
        $(element).addClass('lunch-selected').removeClass('dinner-selected both-selected');
        break;
      case 'lunch': // 현재 중식 선택 -> 석식 선택
        mealData[dateStr] = 'dinner';
        $(element).addClass('dinner-selected').removeClass('lunch-selected both-selected');
        break;
      case 'dinner': // 현재 석식 선택 -> 중식 + 석식 선택
        mealData[dateStr] = 'both';
        $(element).addClass('both-selected').removeClass('lunch-selected dinner-selected');
        break;
      case 'both': // 중식 + 석식 선택 -> 선택 해제
        mealData[dateStr] = 'none';
        $(element).removeClass('lunch-selected dinner-selected both-selected');
        break;
    }
  }

  // 전체 선택 해제 버튼 클릭 시 모든 날짜 선택 해제
  $(".all-delete").on('click', function() {
    mealData = {}; // 모든 날짜 선택 상태 초기화
    updateCalendar(); // 캘린더 업데이트
  });

  // 캘린더 상태 업데이트 함수
  function updateCalendar() {
    $(".fc-daygrid-day").each(function() {
      let dateStr = $(this).attr('data-date'); // 날짜 문자열 가져오기
      if (mealData[dateStr]) {
        // 날짜 상태에 따라 클래스를 적용
        $(this).addClass(mealData[dateStr] + '-selected');
      } else {
        $(this).removeClass('lunch-selected dinner-selected both-selected');
      }
    });
  }

});

$(document).ready(function() {
  $(".prevMonth").on('click', function() {
    $(".fc-prev-button").trigger('click');
  });
  $(".nextMonth").on('click', function() {
    $(".fc-next-button").trigger('click');
  });
});
</script>

<?php include_once(G5_THEME_PATH.'/tail.php'); ?>