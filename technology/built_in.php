<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/technology.css" rel="stylesheet">
</head>
<body class="sub film-build-info">
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
                    <a href="/technology/calibration.php" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="/technology/maintenance.php" class="btn-link next-btn" role="button">
                        <img src="/assets/images/sub/right_link_btn.png" alt="다음 페이지">
                        <span class="sr-only">다음 페이지</span>
                    </a>
                </div>
	        </div>
            <div class="lnb dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    우정특성화 서비스
                    <i class="more-icon">
                        <span class="sr-only">더보기</span>
                    </i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/technology/maintenance.php">유지보수 서비스</a></li>
                    <li><a href="/technology/peroxide.php">과산화수소멸균 서비스</a></li>
                    <li><a href="/technology/calibration.php">장비검교정 서비스</a></li>
                    <li class="active"><a href="/technology/organism.php">우정특성화 서비스</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="built-in">
            <div class="section-header">
                <h3 class="page-title">우정특성화 서비스</h3>
            </div>
            <div class="section-content">
                <div class="container">
                    <nav class="nav-tabs tab-link-list type-2">
                        <ul>
                            <li>
                                <a href="/technology/organism.php">생물안정작업대 통합관리</a>
                            </li>
                            <li>
                                <a href="/technology/film_build.php">필름시공</a>
                            </li>
                            <li class="active">
                                <a href="/technology/built_in.php">빌트인 장비 이전 설치</a>
                            </li>
                        </ul>
                    </nav>
                    <article class="service">
                        <div class="article-header">
                            <h4 class="content-title">빌트인 장비 이전 설치 및<br class="visible-xs"> 리노베이션 서비스</h4>
                            <hr>
                        </div>
                        <div class="article-content">
                            <div class="service-list">
                                <ul class="row">
                                    <li class="col-xs-12 col-sm-4">
                                        <div class="researcher">
                                            <div class="fig-box">
                                                <p class="figure">
                                                    <img src="/assets/images/technology/researcher_img01.gif" alt="연구원">
                                                </p>
                                                <p class="figcaption bl-txt">연구원 A</p>
                                            </div>
                                            <p class="summary bl">
                                                연구실을 옮겨야 하는데...<br>
                                                빌트인 장비도 옮길 수 있을까?
                                            </p>
                                        </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-4">
                                        <div class="researcher">
                                            <div class="fig-box">
                                                <p class="figure">
                                                    <img src="/assets/images/technology/researcher_img02.gif" alt="연구원">
                                                </p>
                                                <p class="figcaption or-txt">연구원 B</p>
                                            </div>
                                            <p class="summary or">
                                                깔끔하게 장비를 보관해야<br>
                                                앞으로도 오래 쓸 수 있을텐데…<br>
                                                장비를 손 볼 수는 없을까?
                                            </p>
                                        </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-4">
                                        <div class="researcher">
                                            <div class="fig-box">
                                                <p class="figure">
                                                    <img src="/assets/images/technology/researcher_img03.gif" alt="연구원">
                                                </p>
                                                <p class="figcaption gr-txt">연구원 C</p>
                                            </div>
                                            <p class="summary gr">
                                                장비가 너무 노후 되었는데<br>
                                                새로 구입 할 수는 없고,<br>
                                                재탄생 시킬 수는 없을까?
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <p class="attention"></p>
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