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
                    <a href="/quotation/schedule.php" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="/quotation/schedule.php" class="btn-link next-btn" role="button">
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
                    <li class="active"><a href="/quotation/quote_inquiry.php">기술서비스 견적문의</a></li>
                    <li><a href="/quotation/schedule.php">RBDS 가능 일정보기</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="quote-view">
            <div class="container">
                <div class="section-header">
                    <h3 class="page-title">과산화수소 증기멸균<br class="visible-xs"> 대행 서비스 견적문의</h3>
                    <p class="summary">
                        궁금하신 사항이 있으시다면 문의해주세요!<br>
                        빠르고 친절하게 답변드리겠습니다.
                    </p>
                </div>
                <div class="section-content">
                    <div class="reaction-view">
                        <h4 class="title">제품견적관련 문의드립니다.</h4>
                        <div class="content">
                            <ul class="list-info">
                                <li>
                                    <i class="icon-user">
                                        <span class="sr-only">작성자</span>
                                    </i>
                                    홍길동
                                </li>
                                <li>
                                    <i class="icon-phone">
                                        <span class="sr-only">전화번호</span>
                                    </i>
                                    010-1234-5678
                                </li>
                                <li>
                                    <i class="icon-mail-alt">
                                        <span class="sr-only">E-mail</span>
                                    </i>
                                    mk_manager@mkdesign.co.kr
                                </li>
                            </ul>
                            <div class="view-content">
                                <p>
                                    1:1문의와 관련된 내용이 노출되는 영역입니다.제품 견적관련 문의드립니다. 1:1문의와 관련된 내용이 노출되는 영역입니다.<br>
                                    1:1문의와 관련된 내용이 노출되는 영역입니다.
                                </p>
                                <img src="/assets/images/center/inquiry_view_img.jpg" class="img-responsive" alt="">
                                <dl class="attach">
                                    <dt class="sr-only">첨부파일</dt>
                                    <dd>
                                        <a href="#">20170510_181656_687.jpg</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="reply">
                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-lg-3">
                                <h5 class="logo">
                                    <img src="/assets/images/center/logo_foot.jpg" class="img-responsive" alt="우정비에스씨 로고">
                                </h5>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-lg-9">
                                <p class="adm-reply">
                                    안녕하세요, 무브먼트케이 고객님!<br>
                                    저희 우정비에스씨 제품을 이용해주셔서 매우 감사드립니다.<br>
                                    문의주신 사항은 우정 콜센터 (1588-1588)로 문의
                                    주시면 상세히 답변 드리겠습니다.<br>
                                    감사합니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-gray" role="button">삭제</a>
                        <a href="#" class="btn btn-gray" role="button">수정</a>
                        <a href="#" class="btn btn-orange" role="button">목록으로</a>
                    </p>
                </div>
            </div>
	    </section>
	</main>
	<!-- //Sub Content End -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>