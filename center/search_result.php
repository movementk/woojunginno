<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/center.css" rel="stylesheet">
</head>
<body class="sub">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
	
	<!-- Sub Content Start -->
	<main id="content" class="center">
        <!-- Page Header -->
	    <div class="page-header">
            <div class="page-info">
                <h2 class="hidden-xs">CALL CENTER</h2>
                <p>우정콜센터</p>
                <div class="btn-link-area">
                    <a href="#" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="#" class="btn-link next-btn" role="button">
                        <img src="/assets/images/sub/right_link_btn.png" alt="다음 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                </div>
	        </div>
            <div class="lnb dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    A/S 현황조회
                    <i class="more-icon">
                        <span class="sr-only">더보기</span>
                    </i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/center/notice_list.php">공지사항</a></li>
                    <li class="active"><a href="/center/as_search.php">A/S현황조회</a></li>
                    <li><a href="#">검교정주기조회</a></li>
                    <li><a href="#">1:1문의하기</a></li>
                    <li><a href="#">고객만족도평가</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="search-result">
            <div class="section-header">
                <h3 class="page-title">A/S 현황조회</h3>
                <p class="summary">
                    (주)우정비에스씨 이노서비스는 장비 판매에서<br>
                    더 나아가 A/S까지도 책임지는 서비스를<br class="visible-xs">
                    제공하겠습니다.
                </p>
            </div>
            <div class="section-content">
                <article class="step-list">
                    <figure>
                       <img src="/assets/images/center/as_step_list_xs.png" class="img-responsive visible-xs" alt="a/s 처리 목록">
                       <img src="/assets/images/center/as_step_list_sm.png" class="img-responsive visible-sm visible-md" alt="a/s 처리 목록">
                       <img src="/assets/images/center/as_step_list_lg.png" class="img-responsive visible-lg" alt="a/s 처리 목록">
                        <figcaption class="sr-only">
                            <ol>
                                <li>
                                    <h6>STEP 01</h6>
                                    콜센터 A/S 접수
                                </li>
                                <li>
                                    <h6>STEP 02</h6>
                                    1차 상담 및 엔지니어 배정
                                </li>
                                <li>
                                    <h6>STEP 03</h6>
                                    A/S 방문 및 완료
                                </li>
                                <li>
                                    <h6>STEP 04</h6>
                                    A/S 리포트 발송
                                </li>
                                <li>
                                    <h6>STEP 05</h6>
                                    고객 만족도 조사 및 사후관리
                                </li>
                            </ol>
                        </figcaption>
                    </figure>
                </article>
                <article class="result">
                    <div class="container">
                        <h4>접수 완료내역</h4>
                        <div class="sucess-list">
                            <div>
                                <dl>
                                    <dt>접수처</dt>
                                    <dd>서울대학교 신약개발센터(NDDC)</dd>
                                </dl>
                            </div>
                            <div>
                                <dl>
                                    <dt>제품명</dt>
                                    <dd>PRIMUS 멸균기</dd>
                                </dl>
                            </div>
                            <div>
                                <dl>
                                    <dt>접수번호</dt>
                                    <dd>WJ-312-175-23</dd>
                                </dl>
                            </div>
                            <div>
                                <dl>
                                    <dt>접수일</dt>
                                    <dd>2017년 3월 20일</dd>
                                </dl>
                            </div>
                            <div>
                                <dl class="problem-list">
                                    <dt>접수내용</dt>
                                    <dd>
                                        <ul>
                                            <li>사이드 B 도어가 중간에 걸려 닫혀지지 않음</li>
                                            <li>사이드 B 도어가 중간에 걸려 닫혀지지 않음2</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-orange" role="button">확인</a>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
	    </section>
	</main>
	<!-- //Sub Content End -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>