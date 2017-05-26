<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
	
	<!-- Sub Content Start -->
	<main id="content">
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
                        <span class="sr-only">이전 페이지</span>
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
                    <li><a href="#">사업비전</a></li>
                    <li class="active"><a href="#">홍보/영상</a></li>
                </ul>
            </div>
	    </div>
	    <!-- //Page Header -->
	    
		<div class="container">
            <h1 class="style-title">Section Title &amp; article Title</h1>
            <section>
                <div class="section-header">
                    <h2 class="page-title">홍보/영상</h2>
                    <p class="summary">
                        (주)우정비에스씨 이노서비스는 장비 판매에서<br>
                        더 나아가 A/S까지도 책임지는 서비스를 제공하겠습니다.
                    </p>
                </div>
            </section>
            <article>
                <div class="article-header">
                    <h3 class="content-title">엔지니어 소개</h3>
                    <hr>
                    <p class="summary">
                        실험동물 센터 내 모든 장비를 대상으로 하며,
                        제조사와상관없이최상의 A/S를 제공하고 있습니다.
                        A/S 접수 전용 핫라인(<i class="or-txt">우정콜센터 1522-1277</i>)을
                        구축 및 운영하여 더욱 신속하고 편리한 A/S
                        진행이 가능합니다.
                        장비 판매에서 더 나아가 A/S까지도 책임지는
                        서비스를 제공하겠습니다.
                    </p>
                </div>
            </article>
            
            <h1 class="style-title">탭 리스트</h1>
            <nav class="nav-tabs tab-link-list">
                <ul>
                    <li>
                        <a href="#">과산화수소증기멸균</a>
                    </li>
                    <li class="active">
                        <a href="#">공간멸균서비스</a>
                    </li>
                    <li>
                        <a href="#">멸균공정개발서비스</a>
                    </li>
                    <li>
                        <a href="#">멸균자동화 설비 공사</a>
                    </li>
                </ul>
            </nav>
            
            <h1 class="style-title">검색폼</h1>
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
           
            <h1 class="style-title">table type</h1>
            <div class="table-wrap">
                <!-- type1 -->
                <table class="table">
                    <colgroup>
                        <col style="width: 30%;">
                        <col style="width: 70%;">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>접수처</th>
                            <td>서울대학교 신약개발센터(NDDC)</td>
                        </tr>
                        <tr>
                            <th>제품명</th>
                            <td>PRIMUS 멸균기</td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="padding: 20px 0;"></div>
                
                <!-- type2 -->
                <table class="table table-write">
                    <colgroup>
                        <col style="width: 30%">
                        <col style="width: 70%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th><label for="u-name">이름</label></th>
                            <td>
                                <div class="form-group">
                                    <input type="text" id="u-name" class="form-control">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="padding: 20px 0;"></div>
                
                <!-- type3 -->
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>검증내용</th>
                            <th>과산화수소 증기</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>멸균제</td>
                            <td>과산화수소 30%~35%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
		    
		    <h1 class="style-title">리스트 타입</h1>
		    <div class="decimal-list">
		        <div class="row">
		            <div class="col-xs-12 col-sm-4">
		                <h2 class="list-title or">개별환기사육시스템</h2>
		                <ol class="decimal-li">
		                    <li><i class="circle-num or">01</i>블로워 급/배기 fan</li>
		                    <li><i class="circle-num or">02</i>유량센서</li>
		                    <li><i class="circle-num or">03</i>케이지 클램프</li>
		                </ol>
		            </div>
		            <div class="col-xs-12 col-sm-4">
		                <h2 class="list-title re">세척기</h2>
		                <ol class="decimal-li">
		                    <li><i class="circle-num re">01</i>가스켓류</li>
		                    <li><i class="circle-num re">02</i>센서&amp;게이지</li>
		                    <li><i class="circle-num re">03</i>솔레노이드 벨브</li>
		                </ol>
		            </div>
		            <div class="col-xs-12 col-sm-4">
                        <h2 class="list-title bl">AUTOCLAVE</h2>
		                <ol class="decimal-li">
		                    <li><i class="circle-num bl">01</i>메인 벨브류</li>
		                    <li><i class="circle-num bl">02</i>챔버 내부 Cleaning</li>
		                    <li><i class="circle-num bl">03</i>솔레노이드 벨</li>
		                </ol>
		            </div>
		        </div>
		    </div>
		    
		    <h1 class="style-title">버튼 영역</h1>
		    <div class="btn-area">
		        <p>
		            <a href="#" class="btn btn-gray" role="button">수정하기</a>
		            <a href="#" class="btn btn-gray" role="button">삭제하기</a>
		            <a href="#" class="btn btn-orange" role="button">목록으로</a>
		        </p>
		    </div>
       
            <h1 class="style-title">페이징</h1>
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
	</main>
	<!-- //Sub Content End -->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>