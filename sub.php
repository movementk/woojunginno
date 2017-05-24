<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/main.css" rel="stylesheet">
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub">
	<nav id="top-nav" class="visible-lg">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					계열사 사이트
				</div>
				<div class="col-xs-6">
					빠른 메뉴
				</div>
			</div>
		</div>
	</nav>
	<header id="header">
<!--
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3">
					<button type="button" class="btn btn-link"><i class="icon-menu"></i></button>
					<h1><a href="/"><img src="/assets/images/logo.png" alt="우정비에스씨"></a></h1>
					<a class="btn btn-link" href="#"><i class="icon-wrench"></i></a>
				</div>
				<div class="hidden-xs col-md-9">
					<nav id="nav">
						<ul>
							<li>
								<a href="#">이노서비스</a>
								<ul>
									<li><a href="#">사업비전</a></li>
									<li><a href="#">홍보/영상</a></li>
								</ul>
							</li>
							<li>
								<a href="#">기술서비스상품</a>
								<ul>
									<li><a href="#">유지보수 서비스</a></li>
									<li><a href="#">과산화수소멸균 서비스</a></li>
									<li><a href="#">장비검교정 서비스</a></li>
									<li><a href="#">우정특성화 서비스</a></li>
								</ul>
							</li>
							<li>
								<a href="#">견적문의</a>
								<ul>
									<li><a href="#">기술서비스 견적문의</a></li>
									<li><a href="#">RBDS가능 알아보기</a></li>
								</ul>
							</li>
							<li>
								<a href="#">우정콜센터</a>
								<ul>
									<li><a href="#">공지사항</a></li>
									<li><a href="#">A/S현황 조회</a></li>
									<li><a href="#">검교정주기 조회</a></li>
									<li><a href="#">1:1 문의하기</a></li>
									<li><a href="#">고객 만족도 평가</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="row visible-lg">
				<div class="col-xs-3">1522-1277</div>
			</div>
		</div>
-->
	</header>
	<aside id="aside-nav">
		<div class="nav-content">
			<div class="nav-header">
				
			</div>
			<div class="nav-body">
				
			</div>
			<div class="nav-footer">
				
			</div>
		</div>
	</aside>
	
	<!-- Sub Content Start -->
	<main id="content">
<!--
	    <div class="page-header">
	        background-image 
	        Header Text 
	        Local Navigation Bar
	    </div>
-->
		<div class="container">
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
		                    <li><i class="num or">01</i>블로워 급/배기 fan</li>
		                    <li><i class="num or">02</i>유량센서</li>
		                    <li><i class="num or">03</i>케이지 클램프</li>
		                </ol>
		            </div>
		            <div class="col-xs-12 col-sm-4">
		                <h2 class="list-title re">세척기</h2>
		                <ol class="decimal-li">
		                    <li><i class="num re">01</i>가스켓류</li>
		                    <li><i class="num re">02</i>센서&amp;게이지</li>
		                    <li><i class="num re">03</i>솔레노이드 벨브</li>
		                </ol>
		            </div>
		            <div class="col-xs-12 col-sm-4">
                        <h2 class="list-title bl">AUTOCLAVE</h2>
		                <ol class="decimal-li">
		                    <li><i class="num bl">01</i>메인 벨브류</li>
		                    <li><i class="num bl">02</i>챔버 내부 Cleaning</li>
		                    <li><i class="num bl">03</i>솔레노이드 벨</li>
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
	
	
	<footer id="footer">
		
	</footer>
</body>
</html>