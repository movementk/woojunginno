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
                    <a href="/center/satisfy.php" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="/center/as_search.php" class="btn-link next-btn" role="button">
                        <img src="/assets/images/sub/right_link_btn.png" alt="다음 페이지">
                        <span class="sr-only">다음 페이지</span>
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
                    <li><a href="/center/as_search.php">A/S현황조회</a></li>
                    <li><a href="#">검교정주기조회</a></li>
                    <li><a href="/center/inquiry_list.php">1:1문의하기</a></li>
                    <li><a href="/center/satisfy.php">고객만족도평가</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="notice-list">
            <div class="container">
                <div class="section-header">
                    <h3 class="page-title">공지사항</h3>
                    <p class="summary">
                        우정BSC의 새로운 소식 및 공지사항을<br class="visible-xs">
                        알려드립니다.
                    </p>
                </div>
                <div class="section-content">
                    <div class="search-form">
                        <form action="#">
                            <select class="form-control">
                                <option>전체</option>
                            </select>
                            <div class="form-group">
                                <label for="search" class="sr-only">검색</label>
                                <input type="text" id="search" class="form-control">
                                <button class="btn-search">
                                    <i class="icon-search">
                                        <span class="sr-only">검색하기</span>
                                    </i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="reaction-list">
                        <ul class="dt-list">
                            <li>번호</li>
                            <li>제목</li>
                            <li>작성일</li>
                            <li>조회수</li>
                        </ul>
                        <div class="list-content">
                            <ul class="dd-list">
                                <li>
                                    <ul>
                                        <li class="num">123</li>
                                        <li class="subject">
                                            <a href="#">공고합병 및 주권제출공고</a>
                                        </li>
                                        <li class="date">2017-04-01</li>
                                        <li class="count">123</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="num">123</li>
                                        <li class="subject">
                                            <a href="#">합병승인 임시주주총회 소집통지 공고</a>
                                        </li>
                                        <li class="date">2017-04-01</li>
                                        <li class="count">123</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="num">123</li>
                                        <li class="subject">
                                            <a href="#">주주명부폐쇄 기준일 공고</a>
                                        </li>
                                        <li class="date">2017-04-01</li>
                                        <li class="count">123</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="num">123</li>
                                        <li class="subject">
                                            <a href="#">결과분석에서 논문데이터까지 단 한번의 실험으로 해결하세요!</a>
                                        </li>
                                        <li class="date">2017-04-01</li>
                                        <li class="count">123</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="num">123</li>
                                        <li class="subject">
                                            <a href="#">CROWISE 효능/안전성 평가</a>
                                        </li>
                                        <li class="date">2017-04-01</li>
                                        <li class="count">123</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="num">123</li>
                                        <li class="subject">
                                            <a href="#">CROWISE 유전독성시험서비스(Genetic Toxicology)</a>
                                        </li>
                                        <li class="date">2017-04-01</li>
                                        <li class="count">123</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="num">123</li>
                                        <li class="subject">
                                            <a href="#">CROWISE 위탁사육관리</a>
                                        </li>
                                        <li class="date">2017-04-01</li>
                                        <li class="count">123</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="num">123</li>
                                        <li class="subject">
                                            <a href="#">CROWISE 비만효력시험</a>
                                        </li>
                                        <li class="date">2017-04-01</li>
                                        <li class="count">123</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="num">123</li>
                                        <li class="subject">
                                            <a href="#">CROWISE 병리평가</a>
                                        </li>
                                        <li class="date">2017-04-01</li>
                                        <li class="count">123</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li class="num">123</li>
                                        <li class="subject">
                                            <a href="#">CROWISE 당뇨 효력시험</a>
                                        </li>
                                        <li class="date">2017-04-01</li>
                                        <li class="count">123</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="stp">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-double-left"></i>
                                </a>
                            </li>
                            <li class="stp stm-right">
                                <a href="#" aria-label="Previous">
                                    <i class="icon-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="hidden-xs"><a href="#">6</a></li>
                            <li class="hidden-xs"><a href="#">7</a></li>
                            <li class="hidden-xs"><a href="#">8</a></li>
                            <li class="hidden-xs"><a href="#">9</a></li>
                            <li class="hidden-xs"><a href="#">10</a></li>
                            <li class="stp stm-left">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                            <li class="stp">
                                <a href="#" aria-label="Next">
                                    <i class="icon-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
	        </div>
	    </section>
	</main>
	<!-- //Sub Content End -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>