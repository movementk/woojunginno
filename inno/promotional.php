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
                    <a href="/inno/vision.php" class="btn-link pre-btn" role="button">
                        <img src="/assets/images/sub/left_link_btn.png" alt="이전 페이지">
                        <span class="sr-only">이전 페이지</span>
                    </a>
                    <a href="/inno/vision.php" class="btn-link next-btn" role="button">
                        <img src="/assets/images/sub/right_link_btn.png" alt="다음 페이지">
                        <span class="sr-only">다음 페이지</span>
                    </a>
                </div>
	        </div>
            <div class="lnb dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    홍보센터
                    <i class="more-icon">
                        <span class="sr-only">더보기</span>
                    </i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="/inno/vision.php">사업비전</a></li>
                    <li class="active"><a href="/inno/promotional.php">홍보센터</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    <section class="promotional">
            <div class="section-header">
                <h3 class="page-title">홍보센터</h3>
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
                            <a href="#" data-toggle="modal" data-target="#promotion-popup01">
                                <div class="figure">
                                    <img src="/assets/images/inno/promotional_list_img01.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="figcaption">
                                    <h4>우정 InnoService 상품</h4>
                                    <p class="date">2017.05.01</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" data-toggle="modal" data-target="#promotion-popup02">
                                <div class="figure">
                                    <img src="/assets/images/inno/promotional_list_img02.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="figcaption">
                                    <h4>10년 된 노후장비 그대로 방치하실건가요?</h4>
                                    <p class="date">2017.05.01</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" data-toggle="modal" data-target="#promotion-popup03">
                                <div class="figure">
                                    <img src="/assets/images/inno/promotional_list_img03.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="figcaption">
                                    <h4>우정 콜센터 오픈</h4>
                                    <p class="date">2017.05.01</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" data-toggle="modal" data-target="#promotion-popup04">
                                <div class="figure">
                                    <img src="/assets/images/inno/promotional_list_img04.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="figcaption">
                                    <h4>우정비에스씨 ALL in ONE SERVICE</h4>
                                    <p class="date">2017.05.01</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-gray" role="button">뉴스레터 더 보기</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Modal **modal-video** -->
            <div class="modal fade" id="promotion-popup01" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span class="sr-only">닫기</span> 
                            </button>
                        </div>
                        <div class="modal-body">
                            <figure>
                                <img src="/assets/images/inno/promotion_modal_img01.jpg" class="img-responsive" alt="이노서비스 홍보 이미지">
                                <figcaption class="sr-only">
                                    칼라스전단지
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="promotion-popup02" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span class="sr-only">닫기</span> 
                            </button>
                        </div>
                        <div class="modal-body">
                            <figure>
                                <img src="/assets/images/inno/promotion_modal_img02.jpg" class="img-responsive" alt="이노서비스 홍보 이미지">
                                <figcaption class="sr-only">
                                    노후장비 뉴스레터
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="promotion-popup03" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span class="sr-only">닫기</span> 
                            </button>
                        </div>
                        <div class="modal-body">
                            <figure>
                                <img src="/assets/images/inno/promotion_modal_img03.jpg" class="img-responsive" alt="이노서비스 홍보 이미지">
                                <figcaption class="sr-only">
                                    안내메일
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="promotion-popup04" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span class="sr-only">닫기</span> 
                            </button>
                        </div>
                        <div class="modal-body">
                            <figure>
                                <img src="/assets/images/inno/promotion_modal_img04.jpg" class="img-responsive" alt="이노서비스 홍보 이미지">
                                <figcaption class="sr-only">
                                    all in one copy
                                </figcaption>
                            </figure>
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
                        <ul class="engineer-list">
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_img01.jpg" class="img-responsive" alt="동물실 파트 윤종규">
                                    <figcaption>
                                        <h6>윤종규</h6>
                                        <p>동물실 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_img02.jpg" class="img-responsive" alt="기술팀 김대환">
                                    <figcaption>
                                        <h6>김대환</h6>
                                        <p>기술팀</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_img03.jpg" class="img-responsive" alt="동물실 파트 김용택">
                                    <figcaption>
                                        <h6>김용택</h6>
                                        <p>동물실 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_img04.jpg" class="img-responsive" alt="감염방지 파트 문정내">
                                    <figcaption>
                                        <h6>문정내</h6>
                                        <p>감염방지 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_img05.jpg" class="img-responsive" alt="고객서비스 파트 오승택">
                                    <figcaption>
                                        <h6>오승택</h6>
                                        <p>고객서비스 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_img06.jpg" class="img-responsive" alt="감염방지 파트 이문용">
                                    <figcaption>
                                        <h6>이문용</h6>
                                        <p>감염방지 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_img07.jpg" class="img-responsive" alt="제약사 파트 이위승">
                                    <figcaption>
                                        <h6>이위승</h6>
                                        <p>제약사 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_img08.jpg" class="img-responsive" alt="감염방지 파트 이재원">
                                    <figcaption>
                                        <h6>이재원</h6>
                                        <p>감염방지 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_img09.jpg" class="img-responsive" alt="감염방지 파트 장민석">
                                    <figcaption>
                                        <h6>장민석</h6>
                                        <p>감염방지 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_none_img.jpg" class="img-responsive" alt="동물실 파트 김정훈">
                                    <figcaption>
                                        <h6>김정훈</h6>
                                        <p>동물실 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_none_img.jpg" class="img-responsive" alt="동물실 파트 김재영">
                                    <figcaption>
                                        <h6>김재영</h6>
                                        <p>동물실 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_none_img.jpg" class="img-responsive" alt="동물실 파트 박관혁">
                                    <figcaption>
                                        <h6>박관혁</h6>
                                        <p>동물실 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_none_img.jpg" class="img-responsive" alt="고객서비스 파트 이창훈">
                                    <figcaption>
                                        <h6>이창훈</h6>
                                        <p>고객서비스 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_none_img.jpg" class="img-responsive" alt="고객서비스 파트 임유진">
                                    <figcaption>
                                        <h6>임유진</h6>
                                        <p>고객서비스 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_none_img.jpg" class="img-responsive" alt="제약사 파트 송치완">
                                    <figcaption>
                                        <h6>송치완</h6>
                                        <p>제약사 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                            
                            <li>
                                <figure>
                                    <img src="/assets/images/inno/engineer_none_img.jpg" class="img-responsive" alt="제약사 파트 박상혼">
                                    <figcaption>
                                        <h6>박상혼</h6>
                                        <p>제약사 파트</p>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
	    </section>
	</main>
	<!-- //Sub Content End -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script src="/assets/jquery.bxslider/jquery.bxslider.min.js"></script>
	<script>
        (function($) {
            var engSliderOpt = {
                pager: false,
                slideWidth: 170,
                minSlides: 1,
                maxSlides: 1,
                moveSlides: 1,
                slideMargin: 10
            };
            var engSlider = $('.engineer-list').bxSlider(engSliderOpt);
            
            $(window).on('load resize', function() {
                var conWidth = $('.container:eq(0)').outerWidth();
//                console.log(conWidth);
                engSlider.reloadSlider(engSliderOpt);
                if ( conWidth >= 750 ) {
                    engSlider.reloadSlider({
                        pager: false,
                        slideWidth: 200,
                        minSlides: 3,
                        maxSlides: 3,
                        moveSlides: 1,
                        slideMargin: 10
                    });
                }
                if ( conWidth >= 970 ) {
                    engSlider.reloadSlider({
                        pager: false,
                        slideWidth: 200,
                        minSlides: 4,
                        maxSlides: 4,
                        moveSlides: 1,
                        slideMargin: 10
                    });
                }
                if ( conWidth >= 1200 ) {
                    engSlider.reloadSlider({
                        pager: false,
                        slideWidth: 200,
                        minSlides: 5,
                        maxSlides: 5,
                        moveSlides: 1,
                        slideMargin: 10
                    });
                }
            });
        })(jQuery);
    </script>
</body>
</html>