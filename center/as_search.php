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
	    <section class="as-search">
            <div class="container">
                <div class="section-header">
                    <h3 class="page-title"> A/S 현황조회</h3>
                    <p class="summary">
                       (주)우정비에스씨 이노서비스는 장비 판매에서<br>
                        더 나아가 A/S까지도 책임지는 서비스를<br class="visible-xs">
                        제공하겠습니다.
                    </p>
                </div>
                <div class="section-content">
                    <p class="summary">
                        이메일로 받으신 A/S번호를 입력하여<br>
                        A/S현황을 조회하실 수 있습니다.
                    </p>
                    <div class="confirm">
                        <form action="#">
                            <div class="form-group">
                                <label for="u-pw" class="sr-only">비밀번호 확인</label>
                                <input type="password" id="u-pw" class="form-control">
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-orange">
                                        A/S현황 조회하기
                                    </button>
                                </p>
                            </div>
                        </form>
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