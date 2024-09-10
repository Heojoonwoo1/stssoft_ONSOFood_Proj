<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 회원만 접속 허용 (비회원 접속 막음)
if(!$is_member){
  alert('회원만 접속 가능합니다.','/');
}
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
            <div class="i-col-3 btn-wrap">
              <div class="btn-item">
								<button class="btn type02 lunch-selBtn">중식 선택</button>
              </div>
              <div class="btn-item">
								<button class="btn type02 dinner-selBtn">석식 선택</button>
              </div>
              <div class="btn-item">
								<button class="btn type02 both-selBtn">중·석식 선택</button>
              </div>
              <div class="btn-item">
								<button class="btn type01 deselBtn">선택 해제</button>
              </div>
              <div class="btn-item">
								<button class="btn type01 all-delete">전체 선택해제</button>
              </div>
            </div>
          </div>
        </div>
        <div class="meal-sec">
          <div class="meal-recipt-box">
            <div class="t-box">
              <!-- <p class="t1">2024년 9월</p> -->
              <p class="t2">급식 신청 결제 예정금액</p>
            </div>
            <div class="meal-recipt-cont">
              <ul class="meal-recipt-ul">
                <li class="lunch">
                  <div class="t1">
                    <p>중식</p>
                    <p class="price">
                      <span>6,000</span>원
                    </p>
                  </div>
                  <div class="calc-wrap">
                    <p class="cnt">
                      <span>20</span>식
                    </p>
                  </div>
                </li>
                <li class="dinner">
                  <div class="t1">
                    <p>석식</p>
                    <p class="price">
                      <span>6,000</span>원
                    </p>
                  </div>
                  <div class="calc-wrap">
                    <p class="cnt">
                      <span>20</span>식
                    </p>
                  </div>
                </li>
                <!-- 급식 신청 취소시에 수수료 노출 -->
                <!-- <li class="commission">
                  <div class="t1">
                    <p>수수료</p>
                    <p class="price">
                      <span>2.5</span> %
                    </p>
                  </div>
                  <div class="calc-wrap">
                    <p class="cnt">
                      <span>-20,000</span> 원
                    </p>
                  </div>
                </li> -->
              </ul>
              <div class="meal-price-amount">
                <p class="t1">합계 : </p>
                <p class="t2">
                  <span>36,000</span> 원
                </p>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
  let calendarEl = document.getElementById('calendar');
  let isFirstLoad = true;
  let today = new Date();
  let dayD3 = new Date(today);
  dayD3 = dayD3.setDate(today.getDate() + 3);
  let mealData = {}; // 날짜별 중식, 석식 선택 상태를 저장할 객체
  let selectedDates = []; // 선택된 날짜 배열

  let calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    contentHeight: "auto",
    longPressDelay : 1, // 터치할 때 누르는 시간 조절
    headerToolbar: {
      start: 'prev next today',
      center: 'title',
      end: false
    },
    selectable: true, // 드래그로 선택 가능
    dateClick: function(info) {
      if (info.dateStr < new Date(dayD3)) {
        alert('당일로부터 +3일 이전의 날짜는 선택할 수 없습니다.');
        return;
      }

      // 단일 날짜 클릭 시 처리
      selectedDates = [info.dateStr]; // 단일 날짜는 배열로 저장
      console.log(selectedDates);
    },
    select: function(info) {
      // 드래그로 선택된 날짜 범위 처리 (종료 날짜에서 하루를 뺌)
      selectedDates = []; // 배열 초기화
      let startDate = new Date(info.startStr);
      let endDate = new Date(info.endStr);

      // 드래그로 선택된 날짜 범위 확인
      if (startDate < new Date(dayD3) || endDate < new Date(dayD3)) {
        alert('당일로부터 +3일 이전의 날짜는 선택할 수 없습니다.');
        calendar.unselect(); // 선택 해제
        return;
      }
      
      endDate.setDate(endDate.getDate() - 1);

      let current = startDate;
      
      // 선택된 날짜 범위를 배열에 저장
      while (current <= endDate) {
        selectedDates.push(current.toISOString().split('T')[0]); // YYYY-MM-DD 형식으로 저장
        current.setDate(current.getDate() + 1);
      }

      console.log(selectedDates);
    },
    datesSet: function(arg) {
      let currentDate;
      if (isFirstLoad) {
        currentDate = today;
        isFirstLoad = false;
      } else {
        currentDate = calendar.getDate();
      }

      $('.calendar-title .year').text(currentDate.getFullYear());
      $('.calendar-title .month').text(currentDate.getMonth() + 1);

      // 달력 렌더링 후 mealData에 따라 선택 상태 복원
      restoreMealSelections();
      markNoSelectableDates();
    },
  });

  calendar.render();

  // 중식 선택 버튼 클릭
  $(".lunch-selBtn").on('click', function() {
    if (selectedDates.length > 0) {
      selectedDates.forEach(function(date) {
        let dateEl = $("td[data-date='" + date + "']");
        dateEl.addClass('lunch-selected');

        // mealData에 중식 선택 저장
        if (!mealData[date]) {
          mealData[date] = {};
        }
        mealData[date].lunch = true;
      });

      console.log(mealData);
    }
  });

  // 석식 선택 버튼 클릭
  $(".dinner-selBtn").on('click', function() {
    if (selectedDates.length > 0) {
      selectedDates.forEach(function(date) {
        let dateEl = $("td[data-date='" + date + "']");
        dateEl.addClass('dinner-selected');

        // mealData에 석식 선택 저장
        if (!mealData[date]) {
          mealData[date] = {};
        }
        mealData[date].dinner = true;
      });

      console.log(mealData);
    }
  });

  // 중·석식 선택 버튼 클릭
  $(".both-selBtn").on('click', function() {
    if (selectedDates.length > 0) {
      selectedDates.forEach(function(date) {
        let dateEl = $("td[data-date='" + date + "']");
        dateEl.addClass('lunch-selected dinner-selected');

        // mealData에 중·석식 선택 저장
        if (!mealData[date]) {
          mealData[date] = {};
        }
        mealData[date].lunch = true;
        mealData[date].dinner = true;
      });

      console.log(mealData);
    }
  });

  // 선택 해제 버튼 클릭
  $(".deselBtn").on('click', function() {
    if (selectedDates.length > 0) {
      selectedDates.forEach(function(date) {
        let dateEl = $("td[data-date='" + date + "']");
        dateEl.removeClass('lunch-selected dinner-selected');

        // mealData에서 해당 날짜 제거
        delete mealData[date];
      });

      console.log(mealData);
    }
  });

  // 전체 선택 해제 버튼 클릭
  $(".all-delete").on('click', function() {
    $("td").removeClass('lunch-selected dinner-selected');
    mealData = {}; // 모든 데이터 초기화

    console.log(mealData);
  });

  // 이전/다음 버튼 클릭 처리
  $(".prevMonth").on('click', function() {
    $(".fc-prev-button").trigger('click');
  });
  $(".nextMonth").on('click', function() {
    $(".fc-next-button").trigger('click');
  });

  // mealData에 저장된 데이터를 바탕으로 선택 상태 복원
  function restoreMealSelections() {
    // mealData의 모든 날짜를 순회하면서 렌더링된 캘린더에서 매칭되는 날짜에 클래스 추가
    for (let date in mealData) {
      let dateEl = $("td[data-date='" + date + "']");

      if (mealData[date].lunch) {
        dateEl.addClass('lunch-selected');
      }
      if (mealData[date].dinner) {
        dateEl.addClass('dinner-selected');
      }
    }
  }

  // 오늘 날짜 이전의 날짜를 비활성화
  function markNoSelectableDates() {
    let allDates = document.querySelectorAll('.fc-daygrid-day');
    allDates.forEach(function(day) {
      let dateStr = day.getAttribute('data-date');
      let date = new Date(dateStr);
      if (date < new Date(dayD3)) {
        day.classList.add('no-selected');
      }
    });
  }
});
</script>

<?php include_once(G5_THEME_PATH.'/tail.php'); ?>