<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/technology.css" rel="stylesheet">
</head>
<body class="sub process-info">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
	
	<!-- Sub Content Start -->
	<main id="content" class="technology">
        <!-- Page Header -->
	    <div class="page-header">
            <div class="page-info">
                <h2 class="hidden-xs">SERVICE</h2>
                <p>기술서비스 상품</p>
                <div class="btn-link-area">
                    <a href="/technology/maintenance.php" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="/technology/calibration.php" class="btn-link next-btn" role="button">
                        <img src="/assets/images/sub/right_link_btn.png" alt="다음 페이지">
                        <span class="sr-only">다음 페이지</span>
                    </a>
                </div>
	        </div>
            <div class="lnb dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    과산화수소멸균 서비스
                    <i class="more-icon">
                        <span class="sr-only">더보기</span>
                    </i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/technology/maintenance.php">유지보수 서비스</a></li>
                    <li class="active"><a href="/technology/peroxide.php">과산화수소멸균 서비스</a></li>
                    <li><a href="/technology/calibration.php">장비검교정 서비스</a></li>
                    <li><a href="/technology/organism.php">우정특성화 서비스</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="process">
            <div class="section-header">
                <h3 class="page-title">과산화수소멸균 서비스</h3>
            </div>
            <div class="section-content">
                <div class="container">
                    <nav class="nav-tabs tab-link-list">
                        <ul>
                            <li>
                                <a href="/technology/peroxide.php">과산화수소증기멸균</a>
                            </li>
                            <li>
                                <a href="/technology/space.php">공간멸균서비스</a>
                            </li>
                            <li class="active">
                                <a href="/technology/process.php">멸균공정개발서비스</a>
                            </li>
                            <li>
                                <a href="/technology/automation.php">멸균자동화 설비 공사</a>
                            </li>
                        </ul>
                    </nav>
                    <article class="sterilization">
                        <div class="article-header">
                            <h4 class="content-title">멸균공정개발서비스</h4>
                            <hr>
                            <p class="summary">
                                멸균공정개발 서비스는 우정비에스씨의 우수한<br class="visible-xs">
                                기술력을 바탕으로 멸균 구역에 대한<br class="hidden-xs"> 적합성 평가를 통해<br class="visible-xs">
                                최적화된 멸균 시간을 찾아내는 시험 서비스입니다.<br>
                                이는 성능적격성검사(Performance Qualification,<br class="visible-xs">
                                PQ)의 기준표로 사용됩니다. 
                            </p>
                        </div>
                    </article>
                </div>
                <article class="field-work">
                    <div class="container">
                        <div class="article-header">
                            <h4 class="content-title">과산화수소 증기 멸균 공정<br class="visible-xs"> 개발 서비스 작업 현장</h4>
                            <hr>
                            <p class="summary">
                                과산화수소 증기 멸균 공정 개발 서비스를 통하여<br class="visible-xs">
                                멸균 실패의 위험성을 최소화 하여 공정작업 등을<br class="visible-xs">
                                원활하게<br class="visible-sm"> 진행하실 수 있으며,<br class="visible-md visible-lg"> 멸균 구역의 정확한 온<br class="visible-xs"> 
                                습도 및 부피 측정 등 멸균 서비스에 최적화 된전문<br class="visible-xs">
                                기술자들이 멸균 구역의<br class="visible-sm"> 적합한 공정 개발 사이클을<br class="visible-xs">
                                확인하실 수 있습니다.
                            </p>
                        </div>
                        <div class="article-content">
                            <ul class="work-list">
                                <li>
                                    <figure>
                                        <img src="/assets/images/technology/work_list_img01.jpg" class="img-responsive" alt="온습도 측정">
                                        <figcaption>온습도 측정</figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/assets/images/technology/work_list_img02.jpg" class="img-responsive" alt="부피측정">
                                        <figcaption>부피측정</figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/assets/images/technology/work_list_img03.jpg" class="img-responsive" alt="GCD 작업 준비">
                                        <figcaption>GCD 작업 준비</figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/assets/images/technology/work_list_img04.jpg" class="img-responsive" alt="장비 가동">
                                        <figcaption>장비 가동</figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/assets/images/technology/work_list_img05.jpg" class="img-responsive" alt="교정 보고서 작성">
                                        <figcaption>교정 보고서 작성</figcaption>
                                    </figure>
                                </li>
                            </ul>
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