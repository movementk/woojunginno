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
                    <a href="/center/notice_list.php" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="/center/sterilizer_inquiry.php" class="btn-link next-btn" role="button">
                        <img src="/assets/images/sub/right_link_btn.png" alt="다음 페이지">
                        <span class="sr-only">다음 페이지</span>
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
                    <li><a href="/center/inquiry_list.php">1:1문의하기</a></li>
                    <li><a href="/center/satisfy.php">고객만족도평가</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="as-list">
            <div class="container">
                <div class="section-header">
                    <h3 class="page-title">A/S 현황조회</h3>
                    <p class="summary">
                        (주)우정비에스씨 이노서비스는 장비 판매에서<br>
                        더 나아가 A/S까지도 책임지는 서비스를<br class="visible-xs">
                        제공하겠습니다.
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
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>접수번호</th>
                                    <th>제품명</th>
                                    <th>접수내용</th>
                                    <th>접수처</th>
                                    <th>최초접수일</th>
                                    <th>접수상태</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="num"><a href="#">WJ-312-175-74</a></td>
                                    <td>PRIMUS 멸균기</td>
                                    <td class="symptom">컨트롤러부분 불빛 발생 및 장비 가동불가 상태</td>
                                    <td>
                                        서울 대학교 시스템<br>
                                        면역의학연구소(홍천)
                                    </td>
                                    <td>2017년 6월 1일</td>
                                    <td class="success">A/S 완료</td>
                                </tr>
                                <tr>
                                    <td class="num"><a href="#">WJ-312-175-74</a></td>
                                    <td>CLARUS C</td>
                                    <td class="symptom">컨트롤러부분 불빛 발생 및 장비 가동불가 상태</td>
                                    <td>
                                        가톡릭대학교 의과대학
                                    </td>
                                    <td>2017년 6월 1일</td>
                                    <td class="success">A/S 완료</td>
                                </tr>
                                <tr>
                                    <td class="num"><a href="#">WJ-312-175-74</a></td>
                                    <td>PRIMUS 오토클레이브</td>
                                    <td class="symptom">GASSING INJECTION RATE LOW알람발생</td>
                                    <td>
                                        농림축산검역본부(QIA)
                                    </td>
                                    <td>2017년 6월 1일</td>
                                    <td class="">A/S 접수완료</td>
                                </tr>
                                <tr>
                                    <td class="num"><a href="#">WJ-312-175-74</a></td>
                                    <td>PRIMUS 멸균기</td>
                                    <td class="symptom">
                                        멸균 도중 오버템퍼라고 뜨고, 온도가 높아서 그런지<br>
                                        멸균 후 Y백이 살짝 녹는 현상이 발생함
                                    </td>
                                    <td>
                                        농림축산검역본부(QIA)
                                    </td>
                                    <td>2017년 6월 1일</td>
                                    <td class="">A/S 방문일자 확정</td>
                                </tr>
                                <tr>
                                    <td class="num"><a href="#">WJ-312-175-74</a></td>
                                    <td>PRIMUS 멸균기</td>
                                    <td class="symptom">
                                        컨트롤러부분 불빛 발생 및 장비 가동불가 상태
                                    </td>
                                    <td>
                                        농림축산검역본부(QIA)
                                    </td>
                                    <td>2017년 6월 1일</td>
                                    <td class="">A/S 접수완료</td>
                                </tr>
                                <tr>
                                    <td class="num"><a href="#">WJ-312-175-74</a></td>
                                    <td>PRIMUS 멸균기</td>
                                    <td class="symptom">컨트롤러부분 불빛 발생 및 장비 가동불가 상태</td>
                                    <td>
                                        서울 대학교 시스템<br>
                                        면역의학연구소(홍천)
                                    </td>
                                    <td>2017년 6월 1일</td>
                                    <td class="success">A/S 완료</td>
                                </tr>
                                <tr>
                                    <td class="num"><a href="#">WJ-312-175-74</a></td>
                                    <td>CLARUS C</td>
                                    <td class="symptom">컨트롤러부분 불빛 발생 및 장비 가동불가 상태</td>
                                    <td>
                                        가톡릭대학교 의과대학
                                    </td>
                                    <td>2017년 6월 1일</td>
                                    <td class="success">A/S 완료</td>
                                </tr>
                                <tr>
                                    <td class="num"><a href="#">WJ-312-175-74</a></td>
                                    <td>PRIMUS 오토클레이브</td>
                                    <td class="symptom">GASSING INJECTION RATE LOW알람발생</td>
                                    <td>
                                        농림축산검역본부(QIA)
                                    </td>
                                    <td>2017년 6월 1일</td>
                                    <td class="">A/S 접수완료</td>
                                </tr>
                                <tr>
                                    <td class="num"><a href="#">WJ-312-175-74</a></td>
                                    <td>PRIMUS 멸균기</td>
                                    <td class="symptom">
                                        멸균 도중 오버템퍼라고 뜨고, 온도가 높아서 그런지<br>
                                        멸균 후 Y백이 살짝 녹는 현상이 발생함
                                    </td>
                                    <td>
                                        농림축산검역본부(QIA)
                                    </td>
                                    <td>2017년 6월 1일</td>
                                    <td class="">A/S 방문일자 확정</td>
                                </tr>
                                <tr>
                                    <td class="num"><a href="#">WJ-312-175-74</a></td>
                                    <td>PRIMUS 멸균기</td>
                                    <td class="symptom">
                                        컨트롤러부분 불빛 발생 및 장비 가동불가 상태
                                    </td>
                                    <td>
                                        농림축산검역본부(QIA)
                                    </td>
                                    <td>2017년 6월 1일</td>
                                    <td class="">A/S 접수완료</td>
                                </tr>
                            </tbody>
                        </table>
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