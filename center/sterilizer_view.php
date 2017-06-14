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
                    <a href="/center/as_search.php" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="/center/inquiry_list.php" class="btn-link next-btn" role="button">
                        <img src="/assets/images/sub/right_link_btn.png" alt="다음 페이지">
                        <span class="sr-only">다음 페이지</span>
                    </a>
                </div>
	        </div>
            <div class="lnb dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    검교정주기조회
                    <i class="more-icon">
                        <span class="sr-only">더보기</span>
                    </i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/center/notice_list.php">공지사항</a></li>
                    <li><a href="/center/as_search.php">A/S현황조회</a></li>
                    <li class="active"><a href="/center/sterilizer_inquiry.php">검교정주기조회</a></li>
                    <li><a href="/center/inquiry_list.php">1:1문의하기</a></li>
                    <li><a href="/center/satisfy.php">고객만족도평가</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="sterilizer sterilizer-view">
            <div class="container">
                <div class="section-header">
                    <h3 class="page-title">과산화수소증기 멸균기<br class="visible-xs"> 검교정 주기 조회</h3>
                    <p class="summary">
                        과산화수소증기 멸균기의 유지보수와 안전한<br class="visible-xs"> 사용을 위해 1년에 한번의<br class="visible-sm"> 검교정을 추천하고 있습니다.<br>
                        현재 보유하고 계신 장비의 현황과 검교정 예정일을<br class="visible-xs"> 안내드리오니,<br class="visible-sm"> 진행여부 결정하신 후<br class="visible-xs"> 희망 검교정<br class="hidden-xs">
                        예정일 6주 전에 문의주시면<br class="visible-xs"> 안내 드리도록 하겠습니다.
                    </p>
                </div>
                <div class="section-content">
                    <article class="result">
                        <h4>보유 장비 정보</h4>
                        <div class="sucess-list">
                            <div class="list-grid">
                                <dl>
                                    <dt>장비 모델명/SN#</dt>
                                    <dd>Bioquell Z  /  201108BZ21308</dd>
                                </dl>
                            </div>
                            <div class="list-grid">
                                <dl>
                                    <dt>마지막 검교정일</dt>
                                    <dd>2016년 07월 01일</dd>
                                </dl>
                            </div>
                            <div class="list-grid">
                                <dl>
                                    <dt>차기 검교정일</dt>
                                    <dd>2017년 06월 30일</dd>
                                </dl>
                            </div>
                            <div class="list-grid">
                                <dl>
                                    <dt>검교정 주기</dt>
                                    <dd>24개월</dd>
                                </dl>
                            </div>
                        </div>
                        <h4>문의처</h4>
                        <div class="sucess-list">
                            <div>
                                <dl>
                                    <dt>담당팀</dt>
                                    <dd>㈜우정비에스씨 기술부 벨리데이션팀 (팀장 이위승)</dd>
                                </dl>
                            </div>
                            <div>
                                <dl>
                                    <dt>제품명</dt>
                                    <dd>1522-1277 (우정콜센터)</dd>
                                </dl>
                            </div>
                        </div>
                    </article>
                    <dl class="attention">
                        <dt>검교정 완료 후 제출문서</dt>
                        <dd>교정 성적서, Test 결과 보고서</dd>
                    </dl>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-orange" role="button">확인</a>
                        </p>
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