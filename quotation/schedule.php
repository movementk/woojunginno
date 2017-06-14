<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/quotation.css" rel="stylesheet">
</head>
<body class="sub promotional-info">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
	
	<!-- Sub Content Start -->
	<main id="content" class="quotation">
        <!-- Page Header -->
	    <div class="page-header">
            <div class="page-info">
                <h2 class="hidden-xs">INQUIRY</h2>
                <p>견적문의</p>
                <div class="btn-link-area">
                    <a href="/quotation/quote_write.php" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="/quotation/quote_write.php" class="btn-link next-btn" role="button">
                        <img src="/assets/images/sub/right_link_btn.png" alt="다음 페이지">
                        <span class="sr-only">다음 페이지</span>
                    </a>
                </div>
	        </div>
            <div class="lnb dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    RBDS 가능 일정보기
                    <i class="more-icon">
                        <span class="sr-only">더보기</span>
                    </i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/quotation/quote_inquiry.php">기술서비스 견적문의</a></li>
                    <li class="active"><a href="/quotation/schedule.php">RBDS 가능 일정보기</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="schedule">
            <div class="container">
                <div class="section-header">
                    <h3 class="page-title">RBDS 가능 일정보기</h3>
                    <p class="summary">
                        일정관 관련한 문의사항은<br class="visible-xs">
                        우정콜센터(1522-1277)로 연락바랍니다.
                    </p>
                </div>
                <div class="section-content">
                    <div class="table-wrap">
                        <h4 class="month">2017. 05</h4>
                        <div class="month-link">
                            <a href="#" class="pre-btn" role="button">
                                <p class="hidden-xs">이전달</p>
                            </a>
                            <a href="#" class="next-btn" role="button">
                                <p class="hidden-xs">다음달</p>
                            </a>
                        </div>
                        <!--
                            ## 클래스명
                                day: 일
                                past: 오늘 이전의 모든 날들
                                today: 오늘
                                available: 예약가능
                                impossible: 예약불가능
                        -->
                        <table class="table table-bordered table-calendar">
                            <thead>
                                <tr>
                                    <th>SUN</th>
                                    <th>MON</th>
                                    <th>TUE</th>
                                    <th>WED</th>
                                    <th>THU</th>
                                    <th>FRI</th>
                                    <th>SAT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="past">
                                        <span class="day"></span>
                                    </td>
                                    <td class="past">
                                        <span class="day">1</span>
                                        <p class="anniversary">근로자의날</p>
                                    </td>
                                    <td class="past">
                                        <span class="day">2</span>
                                    </td>
                                    <td class="past">
                                        <span class="day">3</span>
                                        <p class="anniversary">석가탄신일</p>
                                    </td>
                                    <td class="past">
                                        <span class="day">4</span>
                                    </td>
                                    <td class="past">
                                        <span class="day">5</span>
                                        <p class="anniversary">어린이날</p>
                                    </td>
                                    <td class="past">
                                        <span class="day">6</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="past">
                                        <span class="day">7</span>
                                    </td>
                                    <td class="past">
                                        <span class="day">8</span>
                                        <p class="anniversary">어버이날</p>
                                    </td>
                                    <td class="today">
                                        <span class="day">9</span>
                                        <p class="anniversary">제19대 대통령 선거</p>
                                    </td>
                                    <td class="impossible">
                                        <span class="day">10</span>
                                    </td>
                                    <td class="available">
                                        <span class="day">11</span>
                                    </td>
                                    <td class="available">
                                        <span class="day">12</span>
                                    </td>
                                    <td class="impossible">
                                        <span class="day">13</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="impossible">
                                        <span class="day">14</span>
                                    </td>
                                    <td class="available">
                                        <span class="day">15</span>
                                        <p class="anniversary">스승의날</p>
                                    </td>
                                    <td class="available">
                                        <span class="day">16</span>
                                    </td>
                                    <td class="available">
                                        <span class="day">17</span>
                                    </td>
                                    <td class="impossible">
                                        <span class="day">18</span>
                                        <p class="anniversary">5.18 민주화 운동</p>
                                    </td>
                                    <td class="available">
                                        <span class="day">19</span>
                                    </td>
                                    <td class="impossible">
                                        <span class="day">20</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="impossible">
                                        <span class="day">21</span>
                                    </td>
                                    <td class="available">
                                        <span class="day">22</span>
                                    </td>
                                    <td class="impossible">
                                        <span class="day">23</span>
                                    </td>
                                    <td class="available">
                                        <span class="day">24</span>
                                    </td>
                                    <td class="available">
                                        <span class="day">25</span>
                                    </td>
                                    <td class="available">
                                        <span class="day">26</span>
                                    </td>
                                    <td class="impossible">
                                        <span class="day">27</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="impossible">
                                        <span class="day">28</span>
                                    </td>
                                    <td class="available">
                                        <span class="day">29</span>
                                    </td>
                                    <td class="available">
                                        <span class="day">30</span>
                                    </td>
                                    <td class="impossible">
                                        <span class="day">31</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="square-list">
                            <li class="today">오늘</li>
                            <li class="available">가능</li>
                            <li class="impossible">불가능</li>
                        </ul>
                    </div>
                </div>
            </div>
	    </section>
	</main>
	<!-- //Sub Content End -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>