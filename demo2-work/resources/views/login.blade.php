<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>谢胜伟欢迎登录</title>
<link rel="icon" href="//www.jd.com/favicon.ico"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<script src="js/jquery-1.12.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/fontawesome-all.min.css">

<!-- <link rel="stylesheet" type="text/css" href="css/magnific-popup.css"> -->
<link rel="stylesheet" href="css/magnific-popup.css">
<!-- <link rel="stylesheet" type="text/css" href="css/slick.css"> -->
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/slick-theme.css">
<!-- <link rel="stylesheet" type="text/css" href="css/slick-theme.css"> -->
<!-- <link rel="stylesheet" href="css/tooplate-style.css"> -->
<link rel="stylesheet" href="css/tooplate-style.css">
<link rel="stylesheet" href="css/login.css">

<script>
	var renderPage = true;

if(navigator.userAgent.indexOf('MSIE')!==-1
	|| navigator.appVersion.indexOf('Trident/') > 0){
	/* Microsoft Internet Explorer detected in. */
	alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
	renderPage = false;
}
</script>

</head>
<body>
<!-- Loader -->
<div id="loader-wrapper">
	<div id="loader"></div>
	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>
</div>

<!-- Page Content -->
<div class="container-fluid tm-main">
	<div class="row tm-main-row">

		<!-- Sidebar -->
		<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

			<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

			<div class="inner">
				<nav id="tmMainNav" class="tm-main-nav">
					<ul>
						<li>
							<a href="#intro" id="tmNavLink1" class="scrolly active" data-bg-img="" data-page="#tm-section-1">
								<i class="fas fa-home tm-nav-fa-icon"></i>
								<span>欢迎登录</span>
							</a>
						</li>
						<li>
							<a href="#products" id="tmNavLink2" class="scrolly" data-bg-img="" data-page="#tm-section-2" data-page-type="carousel">
								<i class="fas fa-map tm-nav-fa-icon"></i>
								<span>欢迎入驻</span>
							</a>
						</li>							
						<!-- <li>
							<a href="#company" class="scrolly" data-bg-img="constructive_bg_03.jpg" data-page="#tm-section-3">
								<i class="fas fa-users tm-nav-fa-icon"></i>
								<span>Our Company</span>
							</a>
						</li> -->
						<li>
							<a href="#contact" class="scrolly" data-bg-img="" data-page="#tm-section-4">
								<i class="fas fa-comments tm-nav-fa-icon"></i>
								<span>  返回主页</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

				<!-- section 1 -->
				<section id="tm-section-1" class="tm-section">
					<div class="tm-bg-transparent-black tm-contact-box-pad">
						<div class="row mb-4">
							<div class="col-sm-12">
								<header><h2 class="tm-text-shadow">用户登录</h2></header>
							</div>
						</div>
						<div class="row tm-page-4-content">
							<div class="col-md-6 col-sm-12 tm-contact-col">
								<div class="contact_message">
									<form action="/logincheck" method="post" id="form1" name="form1" class="contact-form">
										<div class="form-group">
											<input type="text" id="contact_name" name="username" class="form-control" placeholder="请输入用户名" required="">
										</div>
										<div class="form-group">
											<input type="password" id="contact_name" name="password" class="form-control" placeholder="请输入密码" required="">
										</div>
										
										
										<button type="submit" class="btn tm-btn-submit tm-btn ml-auto" id="sub" name="sub">登录</button>
										<div class="qitafanshi">
											<div class="qq">
												<svg t="1684933981011" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3755" width="18" height="18"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64z m210.5 612.4c-11.5 1.4-44.9-52.7-44.9-52.7 0 31.3-16.2 72.2-51.1 
													101.8 16.9 5.2 54.9 19.2 45.9 34.4-7.3 12.3-125.6 7.9-159.8 4-34.2 3.8-152.5 8.3-159.8-4-9.1-15.2 28.9-29.2 45.8-34.4-35-29.5-51.1-70.4-51.1-101.8 0 0-33.4 54.1-44.9 52.7-5.4-0.7-12.4-29.6 9.4-99.7 10.3-33 22-60.5 40.2-105.8-3.1-116.9 45.3-215 160.4-215 113.9 0 163.3 96.1 160.4 215 18.1 45.2 29.9 72.8
													 40.2 105.8 21.7 70.1 14.6 99.1 9.3 99.7z" p-id="3756" fill="#1296db"></path></svg>
												qq
											</div>
											<div class="weixin">
												<svg t="1684934366895" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5936" width="18" height="18"><path d="M972.8 624.64c0-143.36-138.24-261.12-291.84-261.12-163.84 0-291.84 117.76-291.84 261.12s128 261.12 291.84 261.12c30.72 0 66.56-10.24 102.4-20.48l92.16 56.32-25.6-92.16c71.68-51.2 122.88-122.88 122.88-204.8z m-384 0c-25.6 0-51.2-20.48-51.2-51.2 0-25.6 20.48-51.2 51.2-51.2s51.2 20.48 51.2 51.2-20.48 51.2-51.2 51.2z m204.8 0c-25.6 0-51.2-20.48-51.2-51.2 0-25.6 20.48-51.2 51.2-51.2s51.2 20.48 51.2 51.2-20.48 51.2-51.2 51.2z" fill="#4FB674" p-id="5937"></path><path d="M353.28 640c0-163.84 143.36-296.96 317.44-296.96h15.36C650.24 204.8 517.12 102.4 363.52 102.4 194.56 102.4 51.2 235.52 51.2 404.48c0 97.28 46.08 174.08 128 240.64l-30.72 107.52L256 691.2c25.6 10.24 76.8 15.36 107.52 20.48-5.12-20.48-10.24-46.08-10.24-71.68z m112.64-394.24c35.84 0 66.56 30.72 66.56 66.56s-30.72 66.56-66.56 66.56-66.56-30.72-66.56-66.56 30.72-66.56 66.56-66.56zM256 378.88c-35.84 0-66.56-30.72-66.56-66.56s30.72-66.56 66.56-66.56 66.56 30.72 66.56 66.56-30.72 66.56-66.56 66.56z" fill="#4FB674" p-id="5938"></path></svg>
												微信
											</div>
											<div class="lijizhuce">立即注册</div>
										</div>
										{{csrf_field()}}
									</form>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 tm-contact-col">
								<div class="tm-address-box">
									<p>请输入用户名【必填】</p>
									<p>请输入密码【必填】</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- section 2 -->
				<section id="tm-section-2" class="tm-section tm-section-carousel">
					<div>
						<header class="mb-4"><h2 class="tm-text-shadow">欢迎入驻</h2></header>		            
						<div class="tm-img-container">
							<div class="tm-img-slider">
								<a href="img/gallery-img-01.jpg" class="tm-slider-img"><img src="img/gallery-img-01-tn.jpg" alt="Image" class="img-fluid">商家开店</a>
								<a href="img/gallery-img-02.jpg" class="tm-slider-img"><img src="img/gallery-img-02-tn.jpg" alt="Image" class="img-fluid">自营合作</a>
								<a href="img/gallery-img-03.jpg" class="tm-slider-img"><img src="img/gallery-img-03-tn.jpg" alt="Image" class="img-fluid">POP商家</a>
								<a href="img/gallery-img-04.jpg" class="tm-slider-img"><img src="img/gallery-img-04-tn.jpg" alt="Image" class="img-fluid">伊人健康</a>
								<a href="img/gallery-img-05.jpg" class="tm-slider-img"><img src="img/gallery-img-05-tn.jpg" alt="Image" class="img-fluid">伊人合作</a>
								<a href="img/gallery-img-06.jpg" class="tm-slider-img"><img src="img/gallery-img-06-tn.jpg" alt="Image" class="img-fluid">伊人工业</a>
							</div>
						</div>		            		          
					</div>       		          	
				</section>

				<!-- section 3 -->
				<!-- <section id="tm-section-3" class="tm-section">						
					<div class="row mb-4">
						<header class="col-xl-12"><h2 class="tm-text-shadow">Our Company</h2></header>		
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
							<div class="media tm-bg-transparent-black tm-border-white">
								<i class="fab fa-apple tm-icon-circled tm-icon-media"></i>
								<div class="media-body">
									<h3>HTML Templates</h3>
									<p>We provide a variety of templates for you at no cost. Please spread a word about <a href="javascript:;" target="_parent">Tooplate</a> website. Thank you.</p>	
								</div>
							</div>
						</div>	
						<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
							<div class="media tm-bg-transparent-black tm-border-white">
								<i class="fas fa-map-pin mr-4 tm-icon-circled tm-icon-media"></i>	
								<div class="media-body">
									<h3>Free Images</h3>
									<p>Photos by <a href="javascript:;" target="_blank">Unsplash.com</a> website, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>	
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
							<div class="media tm-bg-transparent-black tm-border-white">
								<i class="fab fa-fly mr-4 tm-icon-circled tm-icon-media"></i>
								<div class="media-body">
									<h3>Phasellus eleifend</h3>
									<p>Phasellus feugiat scelerisque sapien, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>		
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
							<div class="media tm-bg-transparent-black tm-border-white">
								<i class="fab fa-linode mr-4 tm-icon-circled tm-icon-media"></i>
								<div class="media-body">
									<h3>Phasellus eleifend</h3>
									<p>Phasellus feugiat scelerisque sapien, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>	
								</div>
							</div>
						</div>			          		
					</div>						               
				</section> -->

				<!-- section 4 -->
				<section id="tm-section-4" class="tm-section">
					
					<div class="ml-auto">
						<header class="mb-4"><h1 class="">伊人名妆欢迎你</h1></header>
						<p class="mb-5 tm-font-big"></p>
						<a href="/index" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink2">点击返回主页...</a> 
						<!-- data-nav-link holds the ID of nav item, which means this link should behave the same as that nav item  -->
					</div>
				</section>					
			</div>	<!-- .tm-content -->							
			<footer class="footer-link">
			</footer>
		</div>	<!-- row -->			
	</div>
	

	<!-- <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> -->
    <script src="js/jquery.magnific-popup.min.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.backstretch.min.js"></script> -->
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/slick.min.js"></script> <!-- Slick Carousel -->

	<script>

	var sidebarVisible = false;
	var currentPageID = "#tm-section-1";

	// Setup Carousel
	function setupCarousel() {

		// If current page isn't Carousel page, don't do anything.
		if($('#tm-section-2').css('display') == "none") {
		}
		else {	// If current page is Carousel page, set up the Carousel.

			var slider = $('.tm-img-slider');
			var windowWidth = $(window).width();

			if (slider.hasClass('slick-initialized')) {
				slider.slick('destroy');
			}

			if(windowWidth < 640) {
				slider.slick({
					dots: true,
					infinite: false,
					slidesToShow: 1,
					slidesToScroll: 1
				});
			}
			else if(windowWidth < 992) {
				slider.slick({
					dots: true,
					infinite: false,
					slidesToShow: 2,
					slidesToScroll: 1
				});
			}
			else {
				// Slick carousel
				slider.slick({
					dots: true,
					infinite: false,
					slidesToShow: 3,
					slidesToScroll: 2
				});
			}

			// Init Magnific Popup
			$('.tm-img-slider').magnificPopup({
			  delegate: 'a', // child items selector, by clicking on it popup will open
			  type: 'image',
			  gallery: {enabled:true}
			  // other options
			});
		}
	}

	// Setup Nav
	function setupNav() {
		// Add Event Listener to each Nav item
		$(".tm-main-nav a").click(function(e){
			e.preventDefault();
			
			var currentNavItem = $(this);
			changePage(currentNavItem);
			
			setupCarousel();
			setupFooter();

			// Hide the nav on mobile
			$("#tmSideBar").removeClass("show");
		});	    
	}

	function changePage(currentNavItem) {
		// Update Nav items
		$(".tm-main-nav a").removeClass("active");
		currentNavItem.addClass("active");

		$(currentPageID).hide();

		// Show current page
		currentPageID = currentNavItem.data("page");
		$(currentPageID).fadeIn(1000);

		// Change background image
		var bgImg = currentNavItem.data("bgImg");
		$.backstretch("img/" + bgImg);		    	
	}

	// Setup Nav Toggle Button
	function setupNavToggle() {

		$("#tmMainNavToggle").on("click", function(){
			$(".sidebar").toggleClass("show");
		});
	}

	// If there is enough room, stick the footer at the bottom of page content.
	// If not, place it after the page content
	function setupFooter() {
		
		var padding = 100;
		var footerPadding = 40;
		var mainContent = $("section"+currentPageID);
		var mainContentHeight = mainContent.outerHeight(true);
		var footer = $(".footer-link");
		var footerHeight = footer.outerHeight(true);
		var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
		var windowHeight = $(window).height();		

		if(totalPageHeight > windowHeight){
			$(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
			footer.css("bottom", footerHeight + "px");  			
		}
		else {
			$(".tm-content").css("margin-bottom", "0");
			footer.css("bottom", "20px");  				
		}  			
	}

	// Everything is loaded including images.
	$(window).on("load", function(){

		// Render the page on modern browser only.
		if(renderPage) {
			// Remove loader
			$('body').addClass('loaded');

			// Page transition
			var allPages = $(".tm-section");

			// Handle click of "Continue", which changes to next page
			// The link contains data-nav-link attribute, which holds the nav item ID
			// Nav item ID is then used to access and trigger click on the corresponding nav item
			var linkToAnotherPage = $("a.tm-btn[data-nav-link]");
			
			if(linkToAnotherPage != null) {
				
				linkToAnotherPage.on("click", function(){
					var navItemToHighlight = linkToAnotherPage.data("navLink");
					$("a" + navItemToHighlight).click();
				});
			}
			
			// Hide all pages
			allPages.hide();

			$("#tm-section-1").fadeIn();

			// Set up background first page
			var bgImg = $("#tmNavLink1").data("bgImg");
			
			$.backstretch("img/" + bgImg, {fade: 500});

			// Setup Carousel, Nav, and Nav Toggle
			setupCarousel();
			setupNav();
			setupNavToggle();
			setupFooter();

			// Resize Carousel upon window resize
			$(window).resize(function() {
				setupCarousel();
				setupFooter();
			});
		}	      	
	});

	</script>
</body>
</html>