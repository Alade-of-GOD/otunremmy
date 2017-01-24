<?php include ('otun-admin/php/dbfunctions/post.select.from.php'); require_once ('otun-admin/php/dbfunctions/post.numview.php');
	$pid = $_GET['page_post_id'];
	$page = $_GET['currentpage'];
	if ($page < 1) {
		echo '<script type = "text/javascript">
				document.getElementById("linkprev").style.display="none";
				document.getElementById("linkprev").style.visibility="hidden";
				document.getElementById("linkprev").style.opacity=0;
			</script>
		';
	}
?>
<!DOCTYPE html>
<html lang="en-US"> <!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="otun-content/themes/voice/js/html5.js"></script>

	<title>otun writes &#8211; otunremmy blog</title>
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='vce_font_0-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400&amp;subset=latin%2Clatin-ext&amp;ver=2.2.1' type='text/css' media='screen' />
	<link rel='stylesheet' id='vce_font_1-css'  href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400&amp;subset=latin%2Clatin-ext&amp;ver=2.2.1' type='text/css' media='screen' />
	<link rel='stylesheet' id='minit-4095c27fa8cb580e7679123640640c3b-css'  href='otun-content/uploads/minit/4095c27fa8cb580e7679123640640c3b.css' type='text/css' media='all' />
	<script type='text/javascript'>
	/* <![CDATA[ */
		var mks_ep_settings = {"ajax_url":"http:\/\/otun\/blog\/otun-admin\/admin-ajax.php","action":"mks_open_popup"};
	/* ]]> */
	</script>
	<script type='text/javascript'>
	/* <![CDATA[ */
		var wpreview = {"ajaxurl":"http:\/\/otun\/blog\/otun-admin\/admin-ajax.php"};
	/* ]]> */
	</script>
	<script type='text/javascript'>
	/* <![CDATA[ */
		var vce_js_settings = {"sticky_header":"1","sticky_header_offset":"700","sticky_header_logo":"","logo":"http:\/\/demo.mekshq.com\/voice\/otun-content\/themes\/voice\/images\/voice_logo.png","logo_retina":"http:\/\/demo.mekshq.com\/voice\/otun-content\/uploads\/2015\/05\/voice_logo@2x.png","logo_mobile":"","logo_mobile_retina":"","rtl_mode":"0","ajax_url":"http:\/\/demo.mekshq.com\/voice\/otun-admin\/admin-ajax.php","ajax_mega_menu":"1","mega_menu_slider":"","mega_menu_subcats":"","lay_fa_grid_center":"","full_slider_autoplay":"","grid_slider_autoplay":"","fa_big_opacity":{"1":"0.5","2":"0.7"}};
	/* ]]> */
	</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-57179343-1', 'auto');
		ga('send', 'pageview');

	</script>
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
	<link rel="shortcut icon" href="otun-content/themes/voice/favicon.ico" type="image/x-icon" /><style type="text/css">body {background-color:#f0f0f0;}body,.mks_author_widget h3,.site-description,.meta-category a,textarea {font-family: 'Open Sans';font-weight: 400;}h1,h2,h3,h4,h5,h6,blockquote,.vce-post-link,.site-title,.site-title a,.main-box-title,.comment-reply-title,.entry-title a,.vce-single .entry-headline p,.vce-prev-next-link,.author-title,.mks_pullquote,.widget_rss ul li .rsswidget,#bbpress-forums .bbp-forum-title,#bbpress-forums .bbp-topic-permalink {font-family: 'Roboto Slab';font-weight: 400;}.main-navigation a,.sidr a{font-family: 'Roboto Slab';font-weight: 400;}.vce-single .entry-content,.vce-single .entry-headline,.vce-single .entry-footer{width: 600px;}.vce-lay-a .lay-a-content{width: 600px;max-width: 600px;}.vce-page .entry-content,.vce-page .entry-title-page {width: 600px;}.vce-sid-none .vce-single .entry-content,.vce-sid-none .vce-single .entry-headline,.vce-sid-none .vce-single .entry-footer {width: 600px;}.vce-sid-none .vce-page .entry-content,.vce-sid-none .vce-page .entry-title-page,.error404 .entry-content {width: 600px;max-width: 600px;}body, button, input, select, textarea{color: #444444;}h1,h2,h3,h4,h5,h6,.entry-title a,.prev-next-nav a,#bbpress-forums .bbp-forum-title, #bbpress-forums .bbp-topic-permalink,.woocommerce ul.products li.product .price .amount{color: #232323;}a,.entry-title a:hover,.vce-prev-next-link:hover,.vce-author-links a:hover,.required,.error404 h4,.prev-next-nav a:hover,#bbpress-forums .bbp-forum-title:hover, #bbpress-forums .bbp-topic-permalink:hover,.woocommerce ul.products li.product h3:hover,.woocommerce ul.products li.product h3:hover mark,.main-box-title a:hover{color: #cf4d35;}.vce-square,.vce-main-content .mejs-controls .mejs-time-rail .mejs-time-current,button,input[type="button"],input[type="reset"],input[type="submit"],.vce-button,.pagination-wapper a,#vce-pagination .next.page-numbers,#vce-pagination .prev.page-numbers,#vce-pagination .page-numbers,#vce-pagination .page-numbers.current,.vce-link-pages a,#vce-pagination a,.vce-load-more a,.vce-slider-pagination .owl-nav > div,.vce-mega-menu-posts-wrap .owl-nav > div,.comment-reply-link:hover,.vce-featured-section a,.vce-lay-g .vce-featured-info .meta-category a,.vce-404-menu a,.vce-post.sticky .meta-image:before,#vce-pagination .page-numbers:hover,#bbpress-forums .bbp-pagination .current,#bbpress-forums .bbp-pagination a:hover,.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce ul.products li.product .added_to_cart,.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover,.woocommerce ul.products li.product .added_to_cart:hover,.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.woocommerce span.onsale,.woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.comments-holder .navigation .page-numbers.current,.vce-lay-a .vce-read-more:hover,.vce-lay-c .vce-read-more:hover{background-color: #cf4d35;}#vce-pagination .page-numbers,.comments-holder .navigation .page-numbers{background: transparent;color: #cf4d35;border: 1px solid #cf4d35;}.comments-holder .navigation .page-numbers:hover{background: #cf4d35;border: 1px solid #cf4d35;}.bbp-pagination-links a{background: transparent;color: #cf4d35;border: 1px solid #cf4d35 !important;}#vce-pagination .page-numbers.current,.bbp-pagination-links span.current,.comments-holder .navigation .page-numbers.current{border: 1px solid #cf4d35;}.widget_categories .cat-item:before,.widget_categories .cat-item .count{background: #cf4d35;}.comment-reply-link,.vce-lay-a .vce-read-more,.vce-lay-c .vce-read-more{border: 1px solid #cf4d35;}.entry-meta div,.entry-meta div a,.comment-metadata a,.meta-category span,.meta-author-wrapped,.wp-caption .wp-caption-text,.widget_rss .rss-date,.sidebar cite,.site-footer cite,.sidebar .vce-post-list .entry-meta div,.sidebar .vce-post-list .entry-meta div a,.sidebar .vce-post-list .fn,.sidebar .vce-post-list .fn a,.site-footer .vce-post-list .entry-meta div,.site-footer .vce-post-list .entry-meta div a,.site-footer .vce-post-list .fn,.site-footer .vce-post-list .fn a,#bbpress-forums .bbp-topic-started-by,#bbpress-forums .bbp-topic-started-in,#bbpress-forums .bbp-forum-info .bbp-forum-content,#bbpress-forums p.bbp-topic-meta,span.bbp-admin-links a,.bbp-reply-post-date,#bbpress-forums li.bbp-header,#bbpress-forums li.bbp-footer,.woocommerce .woocommerce-result-count,.woocommerce .product_meta{color: #9b9b9b;}.main-box-title, .comment-reply-title, .main-box-head{background: #ffffff;color: #232323;}.main-box-title a{color: #232323;}.sidebar .widget .widget-title a{color: #232323;}.main-box,.comment-respond,.prev-next-nav{background: #f9f9f9;}.vce-post,ul.comment-list > li.comment,.main-box-single,.ie8 .vce-single,#disqus_thread,.vce-author-card,.vce-author-card .vce-content-outside,.mks-bredcrumbs-container,ul.comment-list > li.pingback{background: #ffffff;}.mks_tabs.horizontal .mks_tab_nav_item.active{border-bottom: 1px solid #ffffff;}.mks_tabs.horizontal .mks_tab_item,.mks_tabs.vertical .mks_tab_nav_item.active,.mks_tabs.horizontal .mks_tab_nav_item.active{background: #ffffff;}.mks_tabs.vertical .mks_tab_nav_item.active{border-right: 1px solid #ffffff;}#vce-pagination,.vce-slider-pagination .owl-controls,.vce-content-outside,.comments-holder .navigation{background: #f3f3f3;}.sidebar .widget-title{background: #ffffff;color: #232323;}.sidebar .widget{background: #f9f9f9;}.sidebar .widget,.sidebar .widget li a,.sidebar .mks_author_widget h3 a,.sidebar .mks_author_widget h3,.sidebar .vce-search-form .vce-search-input,.sidebar .vce-search-form .vce-search-input:focus{color: #444444;}.sidebar .widget li a:hover,.sidebar .widget a,.widget_nav_menu li.menu-item-has-children:hover:after,.widget_pages li.page_item_has_children:hover:after{color: #cf4d35;}.sidebar .tagcloud a {border: 1px solid #cf4d35;}.sidebar .mks_author_link,.sidebar .tagcloud a:hover,.sidebar .mks_themeforest_widget .more,.sidebar button,.sidebar input[type="button"],.sidebar input[type="reset"],.sidebar input[type="submit"],.sidebar .vce-button,.sidebar .bbp_widget_login .button{background-color: #cf4d35;}.sidebar .mks_author_widget .mks_autor_link_wrap,.sidebar .mks_themeforest_widget .mks_read_more{background: #f3f3f3;}.sidebar #wp-calendar caption,.sidebar .recentcomments,.sidebar .post-date,.sidebar #wp-calendar tbody{color: rgba(68,68,68,0.7);}.site-footer{background: #373941;}.site-footer .widget-title{color: #ffffff;}.site-footer,.site-footer .widget,.site-footer .widget li a,.site-footer .mks_author_widget h3 a,.site-footer .mks_author_widget h3,.site-footer .vce-search-form .vce-search-input,.site-footer .vce-search-form .vce-search-input:focus{color: #f9f9f9;}.site-footer .widget li a:hover,.site-footer .widget a,.site-info a{color: #cf4d35;}.site-footer .tagcloud a {border: 1px solid #cf4d35;}.site-footer .mks_author_link,.site-footer .mks_themeforest_widget .more,.site-footer button,.site-footer input[type="button"],.site-footer input[type="reset"],.site-footer input[type="submit"],.site-footer .vce-button,.site-footer .tagcloud a:hover{background-color: #cf4d35;}.site-footer #wp-calendar caption,.site-footer .recentcomments,.site-footer .post-date,.site-footer #wp-calendar tbody,.site-footer .site-info{color: rgba(249,249,249,0.7);}.top-header,.top-nav-menu li .sub-menu{background: #3a3a3a;}.top-header,.top-header a{color: #ffffff;}.top-header .vce-search-form .vce-search-input,.top-header .vce-search-input:focus,.top-header .vce-search-submit{color: #ffffff;}.top-header .vce-search-form .vce-search-input::-webkit-input-placeholder { color: #ffffff;}.top-header .vce-search-form .vce-search-input:-moz-placeholder { color: #ffffff;}.top-header .vce-search-form .vce-search-input::-moz-placeholder { color: #ffffff;}.top-header .vce-search-form .vce-search-input:-ms-input-placeholder { color: #ffffff;}.header-1-wrapper{height: 150px;padding-top: 15px;}.header-2-wrapper,.header-3-wrapper{height: 150px;}.header-2-wrapper .site-branding,.header-3-wrapper .site-branding{top: 15px;left: 0px;}.site-title a, .site-title a:hover{color: #232323;}.site-description{color: #aaaaaa;}.main-header{background-color: #ffffff;}.header-bottom-wrapper{background: #fcfcfc;}.vce-header-ads{margin: 30px 0;}.header-3-wrapper .nav-menu > li > a{padding: 65px 15px;}.header-sticky,.sidr{background: rgba(252,252,252,0.95);}.ie8 .header-sticky{background: #ffffff;}.main-navigation a,.nav-menu .vce-mega-menu > .sub-menu > li > a,.sidr li a,.vce-menu-parent{color: #4a4a4a;}.nav-menu > li:hover > a,.nav-menu > .current_page_item > a,.nav-menu > .current-menu-item > a,.nav-menu > .current-menu-ancestor > a,.main-navigation a.vce-item-selected,.main-navigation ul ul li:hover > a,.nav-menu ul .current-menu-item a,.nav-menu ul .current_page_item a,.vce-menu-parent:hover,.sidr li a:hover,.main-navigation li.current-menu-item.fa:before,.vce-responsive-nav{color: #cf4d35;}.nav-menu > li:hover > a,.nav-menu > .current_page_item > a,.nav-menu > .current-menu-item > a,.nav-menu > .current-menu-ancestor > a,.main-navigation a.vce-item-selected,.main-navigation ul ul,.header-sticky .nav-menu > .current_page_item:hover > a,.header-sticky .nav-menu > .current-menu-item:hover > a,.header-sticky .nav-menu > .current-menu-ancestor:hover > a,.header-sticky .main-navigation a.vce-item-selected:hover{background-color: #ffffff;}.search-header-wrap ul{border-top: 2px solid #cf4d35;}.vce-border-top .main-box-title{border-top: 2px solid #cf4d35;}.tagcloud a:hover,.sidebar .widget .mks_author_link,.sidebar .widget.mks_themeforest_widget .more,.site-footer .widget .mks_author_link,.site-footer .widget.mks_themeforest_widget .more,.vce-lay-g .entry-meta div,.vce-lay-g .fn,.vce-lay-g .fn a{color: #FFF;}.vce-featured-header .vce-featured-header-background{opacity: 0.5}.vce-featured-grid .vce-featured-header-background,.vce-post-big .vce-post-img:after,.vce-post-slider .vce-post-img:after{opacity: 0.5}.vce-featured-grid .owl-item:hover .vce-grid-text .vce-featured-header-background,.vce-post-big li:hover .vce-post-img:after,.vce-post-slider li:hover .vce-post-img:after {opacity: 0.8}#back-top {background: #323232}.sidr input[type=text]{background: rgba(74,74,74,0.1);color: rgba(74,74,74,0.5);}.meta-image:hover a img,.vce-lay-h .img-wrap:hover .meta-image > img,.img-wrp:hover img,.vce-gallery-big:hover img,.vce-gallery .gallery-item:hover img,.vce_posts_widget .vce-post-big li:hover img,.vce-featured-grid .owl-item:hover img,.vce-post-img:hover img,.mega-menu-img:hover img{-webkit-transform: scale(1.1);-moz-transform: scale(1.1);-o-transform: scale(1.1);-ms-transform: scale(1.1);transform: scale(1.1);}a.category-2, .sidebar .widget .vce-post-list a.category-2{ color: #61c436;}body.category-2 .main-box-title, .main-box-title.cat-2 { border-top: 2px solid #61c436;}.widget_categories li.cat-item-2 .count { background: #61c436;}.widget_categories li.cat-item-2:before { background:#61c436;}.vce-featured-section .category-2, .vce-post-big .meta-category a.category-2, .vce-post-slider .meta-category a.category-2{ background-color: #61c436;}.vce-lay-g .vce-featured-info .meta-category a.category-2{ background-color: #61c436;}.vce-lay-h header .meta-category a.category-2{ background-color: #61c436;}a.category-1, .sidebar .widget .vce-post-list a.category-1{ color: #f4b23f;}body.category-1 .main-box-title, .main-box-title.cat-1 { border-top: 2px solid #f4b23f;}.widget_categories li.cat-item-1 .count { background: #f4b23f;}.widget_categories li.cat-item-1:before { background:#f4b23f;}.vce-featured-section .category-1, .vce-post-big .meta-category a.category-1, .vce-post-slider .meta-category a.category-1{ background-color: #f4b23f;}.vce-lay-g .vce-featured-info .meta-category a.category-1{ background-color: #f4b23f;}.vce-lay-h header .meta-category a.category-1{ background-color: #f4b23f;}a.category-3, .sidebar .widget .vce-post-list a.category-3{ color: #46c49c;}body.category-3 .main-box-title, .main-box-title.cat-3 { border-top: 2px solid #46c49c;}.widget_categories li.cat-item-3 .count { background: #46c49c;}.widget_categories li.cat-item-3:before { background:#46c49c;}.vce-featured-section .category-3, .vce-post-big .meta-category a.category-3, .vce-post-slider .meta-category a.category-3{ background-color: #46c49c;}.vce-lay-g .vce-featured-info .meta-category a.category-3{ background-color: #46c49c;}.vce-lay-h header .meta-category a.category-3{ background-color: #46c49c;}a.category-4, .sidebar .widget .vce-post-list a.category-4{ color: #e54e7e;}body.category-4 .main-box-title, .main-box-title.cat-4 { border-top: 2px solid #e54e7e;}.widget_categories li.cat-item-4 .count { background: #e54e7e;}.widget_categories li.cat-item-4:before { background:#e54e7e;}.vce-featured-section .category-4, .vce-post-big .meta-category a.category-4, .vce-post-slider .meta-category a.category-4{ background-color: #e54e7e;}.vce-lay-g .vce-featured-info .meta-category a.category-4{ background-color: #e54e7e;}.vce-lay-h header .meta-category a.category-4{ background-color: #e54e7e;}a.category-5, .sidebar .widget .vce-post-list a.category-5{ color: #ca85ca;}body.category-5 .main-box-title, .main-box-title.cat-5 { border-top: 2px solid #ca85ca;}.widget_categories li.cat-item-5 .count { background: #ca85ca;}.widget_categories li.cat-item-5:before { background:#ca85ca;}.vce-featured-section .category-5, .vce-post-big .meta-category a.category-5, .vce-post-slider .meta-category a.category-5{ background-color: #ca85ca;}.vce-lay-g .vce-featured-info .meta-category a.category-5{ background-color: #ca85ca;}.vce-lay-h header .meta-category a.category-5{ background-color: #ca85ca;}a.category-6, .sidebar .widget .vce-post-list a.category-6{ color: #607ec7;}body.category-6 .main-box-title, .main-box-title.cat-6 { border-top: 2px solid #607ec7;}.widget_categories li.cat-item-6 .count { background: #607ec7;}.widget_categories li.cat-item-6:before { background:#607ec7;}.vce-featured-section .category-6, .vce-post-big .meta-category a.category-6, .vce-post-slider .meta-category a.category-6{ background-color: #607ec7;}.vce-lay-g .vce-featured-info .meta-category a.category-6{ background-color: #607ec7;}.vce-lay-h header .meta-category a.category-6{ background-color: #607ec7;}</style><style type="text/css">body.chrome { text-rendering:auto; } .vce-sticky, #back-top{ -webkit-transform: translateZ(0); transform: translateZ(0); }</style><script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="../../d36mw5gp02ykm5.cloudfront.net/yc/adrns_y55c5.js?v=6.10.492#p=wdcxwd5000lpvx-22v0tt0_wd-wx71a74fcktufcktu";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();
	</script>
</head>

<body class="home page page-id-207 page-template page-template-template-modules page-template-template-modules-php chrome vce-sid-right">

	<div id="vce-main">

		<header id="header" class="main-header">
			<div class="top-header">
				<div class="container">
					<div class="vce-wrap-right">
						<div class="menu-social-menu-container">
							<ul id="vce_social_menu" class="soc-nav-menu">
								<li id="menu-item-59" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-59"><a href="https://www.facebook.com/michael.akinfemi"><span class="vce-social-name">Facebook</span></a></li>
								<li id="menu-item-216" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-216"><a href="http://instagram.com/otun_remmy"><span class="vce-social-name">Instagram</span></a></li>
								<li id="menu-item-73" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-73"><a href="https://plus.google.com/michealakintola106.pog.gmail/posts"><span class="vce-social-name">Google Plus</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container header-1-wrapper header-main-area">
				<div class="vce-res-nav">
					<a class="vce-responsive-nav" href="#sidr-main"><i class="fa fa-bars"></i></a>
				</div>
				<div class="site-branding">
					<h1 class="site-title">
						<a href="index.php" title="otunwrites" class="has-logo"><label>otun writes</label></a>
					</h1>
					<span class="site-description">otunremmy blog</span>
				</div>
			</div>
			<div class="header-bottom-wrapper">
				<div class="container">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<ul id="vce_main_navigation_menu" class="nav-menu">
							<li id="menu-item-211" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="index.php">Home</a>
							</li>
							<li id="menu-item-338" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-338"><a href="#">Features</a>
								<ul class="sub-menu">
									<li id="menu-item-428" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-428"><a href="#">Amebo</a>
										<ul class="sub-menu">
											<li id="menu-item-430" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a href="otunwrites.post.php?cat=Education">Education</a>
											</li>
											<li id="menu-item-430" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a href="otunwrites.post.php?cat=Latest Discoveries">Latest Discoveries</a>
											</li>
											<li id="menu-item-430" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a href="otunwrites.post.php?cat=Nigeria">Nigeria</a>
											</li>
											<li id="menu-item-430" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-430"><a href="otunwrites.post.php?cat=Science and Technology">Science and Technology</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li id="menu-item-234"><a href="otunwrites.health.php">Health</a></li>
							<li id="menu-item-233" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-233 page_item page-item-207 menu-item-211"><a href="otunwrites.poem.php">Poems</a>
								<ul class="sub-menu">
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243"><a href="otunwrites.post.php?cat=End Time">End Time</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-237"><a href="otunwrites.post.php?cat=Grace">Grace</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-240"><a href="otunwrites.post.php?cat=Sacred">Sacred</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243"><a href="otunwrites.post.php?cat=Special">Special</a></li>
								</ul>
							</li>
							<li id="menu-item-212"><a href="otunwrites.inspirational.php">Inspirational</a></li>
							<li id="menu-item-212"><a href="otunwrites.about.php">About</a></li>
							<li id="menu-item-296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-296"><a href="contact.inc.php">Contact</a>
							</li>
							<li class="search-header-wrap"><a class="search_header" href="javascript:void(0)"><i class="fa fa-search"></i></a>
								<ul class="search-header-form-ul">
									<li>
										<form class="search-header-form" action="otunwrites.searchresult.php" method="post">
											<input type="hidden" name="todo" value="search">
											<input name="search_text" class="search-input" size="20" type="text" value="Type here to search..." onfocus="(this.value == 'Type here to search...') && (this.value = '')" onblur="(this.value == '') && (this.value = 'Type here to search...')" placeholder="Type here to search..." />
										</form>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<div id="main-wrapper">
			<div id="content" class="container site-content">
				<div id="primary" class="vce-main-content">
					<main id="main" class="main-box main-box-single">
						<article id="post-191" class="vce-single post-191 post type-post status-publish format-standard has-post-thumbnail hentry category-food tag-chocolates tag-food-2 tag-magazine tag-sugar tag-sweet">
							<header class="entry-header">
								<span class="meta-category">
									<a href="#" class="category-2"><?php echo $category; ?></a> &#8211;
									<a href="#" class="category-2"><?php echo $posttitle; ?></a>
								</span>
								<h1 class="entry-title"><?php echo $posttitle; ?></h1>
								<div class="entry-meta">
									<div class="meta-item date">
										<span class="updated"><?php echo $diff->format("%a days ago ").$posttime; ?></span>
									</div>
									<div class="meta-item comments">
										<a href="indexbbbf.html?p=191#comments"><?php echo $postnumcomment." comments"; ?> </a>
									</div>
									<div class="meta-item author">
										<span class="vcard author">
											<span class="fn">by <?php echo $postauthor ?></span>
										</span>
									</div>
									<div class="meta-item views"><?php echo $postview." views"; ?></div>
								</div>
							</header>
						 	<div class="meta-image">
								<img width="810" height="350" src="<?php echo "otun-content/post/feauturedimage/".$postimage; ?>" class="attachment-vce-lay-a size-vce-lay-a wp-post-image" alt="Mother Sick" sizes="(max-width: 810px) 100vw, 810px" />
							</div>
							<div class="entry-content">
								<p> <?php echo $postcontent; ?></p>
							</div>
							<div class="vce-share-bar">
								<span><a name="likeform" id="li" href="otun-admin/php/dbfunctions/post.like.increment.php?page_post_id=<?php echo $pid ?>"><button style="color: #EEE; text-align: left;">like<i class="fa fa-check"></i><l id="like" style="padding-left: 10px;"><?php echo $postlikes; ?></l></button></a></span>
							</div>
						</article>
					</main>
					<div id="comments" class="comments-main">
     					<div class="comments-holder main-box">
        					<h3 class="comment-title main-box-title"><?php echo $postnumcomment." comments"; ?></h3>
      						<div class="main-box-inside content-inside">
        						<ul class="comment-list">
                        			<?php include ('otun-admin/php/dbfunctions/posts.comments.user.php'); ?>
								</ul>
								<div style="float: right;">
									<a href="otunwrites.post.view.php?page_post_id=<?php echo $pid ?>&currentpage=<?php echo $page+1 ?>" style="margin-left: 50px;"><b id='linknext'>load more</b></a>
								</div>
					        </div>
            			</div>
            		</div>
					<div id="respond" class="comment-respond">
						<h3 id="reply-title" class="comment-reply-title">Post a Comment
							<small><a rel="nofollow" id="cancel-comment-reply-link" href="indexbbbf.html?p=191#respond" style="display:none;">X</a></small>
						</h3>
						<form action="otun-admin/php/dbfunctions/otun-admin.new.post.comment.driveform.php?page_post_id=<?php echo $urlpostid; ?>" method="post" id="commentform" class="comment-form">
							<p class="comment-form-author">
								<label for="author">Name<span style="color: #FF0000;" id="asName">&#x2731;</span></label>
								<input id="your-name" name="your-name" type="text" value="" size="30" onchange="valueEnterName()" />
							</p>
							<p class="comment-form-email">
								<label for="email">Email<span style="color: #FF0000;" id="asEmail">&#x2731;</span></label>
								<input id="your-email" name="your-email" type="text" value="" size="30" onchange="valueEnterEmail()" />
							</p>
							<p class="comment-form-url">
								<label for="url">Website</label>
								<input id="your-url" name="your-url" type="text" value="" size="30" />
							</p>
							<p class="comment-form-comment">
								<label for="comment">Comment<span style="color: #FF0000;" id="asComment">&#x2731;</span></label>
								<textarea id="your-comment" name="your-comment" cols="45" rows="8" onchange="valueEnterComment()"></textarea>
							</p>
							<p class="form-submit">
								<input id="checkBut" type="button" onclick="validateForm()" value="Submit"/>
								<input name="submitBut" type="submit" class="submit" value="Post Comment" id="submitBut" style="float: right; display: none;" />
							</p>
						</form>
					</div>
				</div>
				<aside id="sidebar" class="sidebar right">
					<div id="categories-3" class="widget widget_categories">
						<h4 class="widget-title">People Also Read</h4>
						<ul>

							<?php
								$sqlpost = "SELECT * FROM `otun_posts` ORDER BY `viewsofpost` DESC LIMIT 0, 6";
								if(!$result = $db->query($sqlpost)){
									die('There was an error running the query [' . $db->error . ']');
								}

								$i = 1;
								while ($row = $result->fetch_assoc()) {
									$postid = $row['idofpost'];
									$posttitle = $row['titleofpost'];
									$postimage = $row['imageofpost'];
									echo '
										<li class="cat-item cat-item-'.$i.'"><a href="" ><a href="#">'.$posttitle.'<span class="count"><span class="count-hidden"><img width="45" height="45" src="otun-content/post/feauturedimage/'.$postimage.'" class="attachment-vce-lay-d size-vce-lay-d wp-post-image"/></span></span></a>
										</li>
									';
									$i++;
								}
							?>
						</ul>
					</div>
					<div class="vce-sticky">
						<div id="mks_ads_widget-3" class="widget mks_ads_widget">
							<h4 class="widget-title">About the writer</h4>
							<div class="main-box-inside">
								<div class="data-image">
									<img src="<?php echo "otun-admin/authors/img/".$authorgravater; ?>" width="112" height="112" alt="PoG" class="avatar avatar-112 wp-user-avatar wp-user-avatar-112 alignnone photo" />
								</div>
								<div class="data-content">
									<h6 class="author-title"><?php echo $authoruname; ?></h6>
								</div>
							</div>
							<div class="data-entry-content">
								<p><?php echo $authornote; ?></p>
							</div>
						</div>
					</div>

				</aside>
			</div>
			<footer id="footer" class="site-footer">
			<?php include ('footer.html'); ?>
			</footer>
		</div>
	</div>
	<a href="top" id="back-top"><i class="fa fa-arrow-up"></i></a>
	<script type='text/javascript' src='otun-content/uploads/minit/1f2d1406dfcdb7726a01e87127a3ae74.js'></script>
	<script>
		//var i = false;
	    function valueEnterName()
	    {
	    	setInterval(function() {
	    			var edName = document.getElementById("your-name").value;
	    			if (edName.length  >= 4) {
			        	document.getElementById("asName").style.color = "#164ca3";
			        	document.getElementById("asName").innerHTML = "&#x2731;";
		        	}
		    		else if (edName == "") {
			        	document.getElementById("asName").style.color = "#FF0000";
					    document.getElementById("asName").innerHTML = "&#x2731;";
		        	}
		        	else {
			        	document.getElementById("asName").style.color = "#FF0000";
			        	document.getElementById("asName").innerHTML = "&#x2731;";
			        }
	    	 	},
	    	 	1000);
	    }

	    function valueEnterEmail()
	    {
	    	setInterval(function() {
			    	var edEmail = document.getElementById("your-email").value;
			        if (validateEmail(edEmail)) {
			        	document.getElementById("asEmail").style.color = "#164ca3";
			        	document.getElementById("asEmail").innerHTML = "&#x2731;";
			        }
			        else if (edEmail == "") {
			        	document.getElementById("asEmail").style.color = "#FF0000";
					    document.getElementById("asEmail").innerHTML = "&#x2731;";
			        }
			        else {
			        	document.getElementById("asEmail").style.color = "#FF0000";
			          	document.getElementById("asEmail").innerHTML = "&#x2731;";
			        }
			    },
			    1000);
	    }
	    function validateEmail(email) {
		  	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  			return re.test(email);
		}
		function valueEnterComment()
		{
			setInterval(function() {
					var edMessage = document.getElementById("your-comment").value;
					if (edMessage == "") {
						document.getElementById("asComment").style.color = "#FF0000";
						document.getElementById("asComment").innerHTML = "&#x2731;";
					}
					else {
						document.getElementById("asComment").style.color = "#164ca3";
						document.getElementById("asComment").innerHTML = "&#x2731;";
					}
				},
				1000);
		}
		function validateForm()
		{
			var edName = document.getElementById("your-name").value;
			var edEmail = document.getElementById("your-email").value;
			var edComment = document.getElementById("your-comment").value;
			if (edName != "" && edName.length >= 4 && edEmail != "" && validateEmail(edEmail) && edComment != "" && edComment.length > 0) {
				document.getElementById("submitBut").style.display = "block";
				document.getElementById("submitBut").style.visibility = "visible";
				document.getElementById("submitBut").style.opacity = 1;
				document.getElementById("checkBut").style.display = "none";
				document.getElementById("checkBut").style.visibility = "hidden";
				document.getElementById("checkBut").style.opacity = 0;
			} else {
				alert("cannot load form, some fields are empty");
			}
		}

		var show = false;
		function showRepBox() {
		    var repBox = document.getElementById("repBox");
		    if(!show) {

				show = true;
		    } else {
		        show = false;
		    }
		}
		// Get the modal
		var modal = document.getElementById('myModal');
		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		// When the user clicks the button, open the modal
		btn.onclick = function() {
		    modal.style.display = "block";
		}
		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		    modal.style.display = "none";
		}
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>
</body>
</html>
