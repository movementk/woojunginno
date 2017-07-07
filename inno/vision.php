<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/inno.css" rel="stylesheet">
</head>
<body class="sub promotional-info">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
	
	<!-- Sub Content Start -->
	<main id="content" class="inno">
        <!-- Page Header -->
	    <div class="page-header">
            <div class="page-info">
                <h2 class="hidden-xs">INNO SERVICE</h2>
                <p>이노서비스</p>
                <div class="btn-link-area">
                    <a href="/inno/promotional.php" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="/inno/promotional.php" class="btn-link next-btn" role="button">
                        <img src="/assets/images/sub/right_link_btn.png" alt="다음 페이지">
                        <span class="sr-only">다음 페이지</span>
                    </a>
                </div>
	        </div>
            <div class="lnb dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    사업비전
                    <i class="more-icon">
                        <span class="sr-only">더보기</span>
                    </i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="active"><a href="/inno/vision.php">사업비전</a></li>
                    <li><a href="/inno/promotional.php">홍보/영상</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="vision">
            <div class="section-header">
                <h3 class="page-title">사업비전</h3>
                <p class="summary">
                    <span class="quotation-first"><img src="/assets/images/inno/quotation_first.gif" alt="따옴표"></span>
                    우정비에스씨 이노서비스가<br>
                    진정한 고객가치의 실현을<br class="visible-xs">
                    위해 앞장서고 있습니다
                    <span class="quotation-last"><img src="/assets/images/inno/quotation_last.gif" alt="따옴표"></span>
                </p>
            </div>
            <div class="section-content">
                <div class="container">
                    <p class="figure">
                        <img src="/assets/images/inno/vision_xs_img.png" class="img-responsive visible-xs" alt="">
                        <img src="/assets/images/inno/vision_sm_img.png" class="img-responsive visible-sm visible-md" alt="">
                        <img src="/assets/images/inno/vision_lg_img.png" class="img-responsive visible-lg" alt="">
                    </p>
                    <div class="details sr-only">
                        <ul>
                            <li>
                                <h4>신속한 응대</h4>
                                1분 1초가 시급한 연구환경, 가장 신속한 서비스만이 정답입니다.
                            </li>
                            <li>
                                <h4>정확한 진단</h4>
                                정확한 진단을 통해 합리적인 가격을 제시해 드립니다
                            </li>
                            <li>
                                <h4>프리미엄 기술서비스</h4>
                                분야별 전문교육을 이수한 엔지니어가 최적화된 맞춤형 서비스를 제공해 드립니다

                            </li>
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