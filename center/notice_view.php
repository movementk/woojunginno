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
                    공지사항
                    <i class="more-icon">
                        <span class="sr-only">더보기</span>
                    </i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="active"><a href="/center/notice_list.php">공지사항</a></li>
                    <li><a href="#">A/S현황조회</a></li>
                    <li><a href="#">검교정주기조회</a></li>
                    <li><a href="#">1:1문의하기</a></li>
                    <li><a href="#">고객만족도평가</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="notice-view">
            <div class="container">
                <div class="section-header">
                    <h3 class="page-title">공지사항</h3>
                    <p class="summary">
                        우정BSC의 새로운 소식 및 공지사항을<br class="visible-xs">
                        알려드립니다.
                    </p>
                </div>
                <div class="section-content">
                    <div class="view">
                        <h4 class="title">공고합병 및 주권제출공고</h4>
                        <div class="content">
                            <ul class="list-info">
                                <li>2017-04-04</li>
                                <li>
                                    <dl>
                                        <dt>조회수</dt>
                                        <dd>356</dd>
                                    </dl>
                                </li>
                            </ul>
                            <div class="view-content">
                                <p>
                                    한화엠지아이기업인수목적 주식회사(갑)는 2017년 3월 7일 개최한 임시 주주총회에서<br>
                                    주식회사 우정비에스씨(을)은 2017년 3월 7일 개최한 임시 주주총회에서 각각 합병을 결의하고 그 결과로<br>
                                    (갑)은 (을)을 합병하여 그 권리의무를 승계하고, (갑)은 존속하며 (을)은 해산하기로 결의하였으므로,<br>
                                    이 합병에 대하여 이의가 있는 채권자는 이 공고일 익일부터 1개월 이내에 관계회사에<br>
                                    이의를 제출하시고 주권을 가지고 있는 분은 관계회사에 주권을 제출하여 주시기 바라와 이에 공고 합니다.
                                </p>
                                <img src="/assets/images/center/notice_view_img.jpg" class="img-responsive" alt="합병 및 주권제출공고">
                                <dl class="attach">
                                    <dt class="sr-only">첨부파일</dt>
                                    <dd>
                                        <a href="#">20170510_181656_687.jpg</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <ul class="next-link">
                        <li>
                            <dl>
                                <dt>다음글</dt>
                                <dd>
                                    <a href="#">다음글이 없습니다.</a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>이전글</dt>
                                <dd>
                                    <a href="#">[2017.02.17] 합병승인 임시주주총회 소집통지 공고 </a>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-gray" role="button">삭제하기</a>
                        <a href="#" class="btn btn-gray" role="button">수정하기</a>
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