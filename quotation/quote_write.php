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
	    <section class="quote-write write">
            <div class="container">
                <div class="section-header">
                    <h3 class="page-title">과산화수소 증기멸균<br class="visible-xs"> 대행 서비스 견적문의</h3>
                    <p class="summary">
                        궁금하신 사항이 있으시다면 문의해주세요!<br>
                        빠르고 친절하게 답변드리겠습니다.
                    </p>
                </div>
                <div class="section-content">
                    <form action="#">
                        <div class="table-wrap">
                            <table class="table table-write">
                                <tbody>
                                    <tr>
                                        <th><label for="u-name">이름</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="institution">기관 및 지역</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="institution" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="phone">연락처</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="phone" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="e-mail">이메일</label></th>
                                        <td class="email">
                                            <div class="form-group">
                                                <input type="email" id="e-mail" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="area">멸균희망구역</th>
                                        <td class="hope-area">
                                            <div class="form-group">
                                                <label for="area-name">구역명</label>
                                                <select id="area-name" class="form-control">
                                                    <option>선택하세요</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="extent">면적(M2)</label>
                                                <input type="text" id="extent" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="floor-height">층고(M)</label>
                                                <input type="text" id="floor-height" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="subject">문의제목</label></th>
                                        <td class="subject">
                                            <div class="form-group">
                                                <input type="text" id="subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="content"><label for="u-content">문의내용</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" id="u-content"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>파일첨부</th>
                                        <td class="file">
                                            <div class="form-group">
                                                <input type="file" id="file" class="form-control">
                                                <label for="file">찾아보기</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-orange">등록하기</button>
                                <a href="#" class="btn btn-gray" role="button">취소하기</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
	    </section>
	</main>
	<!-- //Sub Content End -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>