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
                    <a href="#" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="#" class="btn-link next-btn" role="button">
                        <img src="/assets/images/sub/right_link_btn.png" alt="다음 페이지">
                        <span class="sr-only">다음 페이지</span>
                    </a>
                </div>
	        </div>
            <div class="lnb dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    홍보/영상
                    <i class="more-icon">
                        <span class="sr-only">더보기</span>
                    </i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/technology/maintenance.php">사업비전</a></li>
                    <li class="active"><a href="/technology/peroxide.php">홍보/영상</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="promotional">
            <div class="section-header">
                <h3 class="page-title">홍보/영상</h3>
                <p class="summary">
                    (주)우정비에스씨 이노서비스는 장비 판매에서<br>
                    더 나아가 A/S까지도 책임지는 서비스를<br class="visible-xs">
                    제공하겠습니다.
                </p>
            </div>
            <div class="section-content">
                <div class="container">
                    <ul class="row">
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" data-toggle="modal" data-target="#modal-video">
                                <div class="figure">
                                    <img src="/assets/images/inno/promotional_list_img01.jpg" class="img-responsive" alt="">
                                    <div class="hover-box">
                                        <i class="play-icon" role="button">
                                            <span class="sr-only">동영상 플레이</span>
                                        </i>
                                    </div>
                                </div>
                                <div class="figcaption">
                                    <h4>이노서비스 홍보영상 제목01</h4>
                                    <p class="date">2017.05.01</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" data-toggle="modal" data-target="#modal-video">
                                <div class="figure">
                                    <img src="/assets/images/inno/promotional_list_img02.jpg" class="img-responsive" alt="">
                                    <div class="hover-box">
                                        <i class="play-icon" role="button">
                                            <span class="sr-only">동영상 플레이</span>
                                        </i>
                                    </div>
                                </div>
                                <div class="figcaption">
                                    <h4>이노서비스 홍보영상 제목02</h4>
                                    <p class="date">2017.05.01</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" data-toggle="modal" data-target="#modal-video">
                                <div class="figure">
                                    <img src="/assets/images/inno/promotional_list_img03.jpg" class="img-responsive" alt="">
                                    <div class="hover-box">
                                        <i class="play-icon" role="button">
                                            <span class="sr-only">동영상 플레이</span>
                                        </i>
                                    </div>
                                </div>
                                <div class="figcaption">
                                    <h4>이노서비스 홍보영상 제목03</h4>
                                    <p class="date">2017.05.01</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" data-toggle="modal" data-target="#modal-video">
                                <div class="figure">
                                    <img src="/assets/images/inno/promotional_list_img04.jpg" class="img-responsive" alt="">
                                    <div class="hover-box">
                                        <i class="play-icon" role="button">
                                            <span class="sr-only">동영상 플레이</span>
                                        </i>
                                    </div>
                                </div>
                                <div class="figcaption">
                                    <h4>이노서비스 홍보영상 제목04</h4>
                                    <p class="date">2017.05.01</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-gray" role="button">홍보영상 더 보기</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Modal **modal-video** -->
            <div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-videoLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IojGQErD5dQ" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Modal End -->
            
            <article class="engineer">
                <div class="container">
                    <div class="article-header">
                        <h5 class="content-title">엔지니어 소개</h5>
                        <hr>
                    </div>
                    <div class="article-content">
                        Content 내용 없음 대기.
                    </div>
                </div>
            </article>
	    </section>
	</main>
	<!-- //Sub Content End -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>