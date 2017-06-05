<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_main.php'); ?>
<link href="/assets/css/main.css" rel="stylesheet">
</head>
<body>

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/top-nav.php'); ?>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aside.php'); ?>
	
	<main id="content">
	
		<div id="main-container">
	
			<section id="introduce">
				<div class="intro-slider">
					<div class="intro-item intro-item-1">
						<div class="intro-content">
							intro #1
						</div>
					</div>
					<div class="intro-item intro-item-2">
						<div class="intro-content">
							intro #2
						</div>
					</div>
					<div class="intro-item intro-item-3">
						<div class="intro-content">
							intro #3
						</div>
					</div>
				</div>
			</section>
			
			<div class="inner-container">

				<section id="schedule">

				</section>

				<section id="products">

				</section>

				<section id="pr-video">

				</section>

				<section id="as">

				</section>

				<section id="estimate">

				</section>
			
			</div>
		
		</div>
		
		<section id="news">
			<div class="container">
				<h4>회사소식</h4>
				<div class="news-list">
					<ul>
						<li><a href="#">한화MGI스팩, 주총 소집 결의… 우정비에스씨 합병 안건 등 처리 한화MGI스팩, 주총 소집 결의… 우정비에스씨 합병 안건 등 처리</a></li>
						<li><a href="#">한화MGI스팩, 주총 소집 결의… 우정비에스씨 합병 안건 등 처리</a></li>
						<li><a href="#">한화MGI스팩, 주총 소집 결의… 우정비에스씨 합병 안건 등 처리</a></li>
						<li><a href="#">한화MGI스팩, 주총 소집 결의… 우정비에스씨 합병 안건 등 처리</a></li>
					</ul>
				</div>
			</div>
		</section>
		
	</main>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script src="/assets/jquery.bxslider/jquery.bxslider.min.js"></script>
	<script>
		(function($) {
			$('#introduce .intro-slider').bxSlider({
				mode: 'fade',
				controls: false
			});
			
			$('#news .news-list ul').bxSlider({
				mode: "vertical",
				pager: false,
				auto: true
			});
		})(jQuery);
	</script>
	
</body>
</html>