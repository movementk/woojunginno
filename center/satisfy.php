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
                    고객만족도평가
                    <i class="more-icon">
                        <span class="sr-only">더보기</span>
                    </i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/center/notice_list.php">공지사항</a></li>
                    <li><a href="/center/as_search.php">A/S현황조회</a></li>
                    <li><a href="#">검교정주기조회</a></li>
                    <li><a href="#">1:1문의하기</a></li>
                    <li class="active"><a href="#">고객만족도평가</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="satisfy">
            <div class="container">
                <div class="section-header">
                    <h3 class="page-title">고객만족도평가</h3>
                    <p class="summary">
                        더 좋은 서비스를 제공하기 위해서 고객 만족도 조사<br class="visible-xs">
                        를 실시하고 있습니다.<br class="hidden-xs"> 응답해주시는 내용은<br class="visible-xs">
                        <i>서비스 개선을 위한 자료로만 사용</i>되며,<br class="hidden-xs"> 이는<br class="visible-xs">
                        우정비에스씨의 발전에 큰 도움이 될 것입니다.
                    </p>
                </div>
                <div class="section-content">
                    <article class="survey">
                        <p class="header-figure">
                            <img src="/assets/images/center/satisfy_top_img.png" alt="">
                        </p>
                        <header>
                            <h4>
                                <small>우정비에스씨 콜센터</small><br>
                                <b><i>2016</i>년 고객만족도 조사</b>
                            </h4>
                        </header>
                        <div class="article-content">
                            <p class="summary">
                                조사에 참여해주시는 분들께는 <i>LED 미니 가습기,<br class="visible-xs">
                                CGV 영화 예매권 2매(택1)</i>를 선물로 드리고 있습니다.<br>
                                설문조사 첫 번째 문항에서 사은품을 선택을 하실 수<br class="visible-xs">
                                있사오니 많은 관심과 참여 부탁드립니다.
                            </p>
                            <p class="attention">
                                사은품은 12월 2일 설문조사 마감 후<br class="visible-xs">
                                일괄적으로 12월 둘째주에 배송 예정
                            </p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-orange" role="button">
                                        고객 만족도 조사 참여하기
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="article-footer">
                            <p>
                                설문 진행 중 질의사항이 있으실 경우 아래<br class="visible-xs">
                                연락처로 연락주시면 성실히 답변드리겠습니다
                            </p>
                            <ul>
                                <li>
                                    (주)우정비에스씨 <a href="tel:15221277">1522-1277</a>
                                </li>
                                <li>
                                    <a href="mailto:cscenter@woojungbsc.co.kr">cscenter@woojungbsc.co.kr</a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
	        </div>
	    </section>
	</main>
	<!-- //Sub Content End -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>