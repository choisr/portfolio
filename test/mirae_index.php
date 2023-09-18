
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=medium-dpi , width=1200">
<meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1">
<title>미래아이엔씨</title>
<link rel="stylesheet" href="http://moden937.gabia.io/css/default.css?ver=171223">
<link rel="stylesheet" href="http://moden937.gabia.io/skin/latest/basic/style.css?ver=171223">
<!--[if lte IE 8]>
<script src="http://moden937.gabia.io/js/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "http://moden937.gabia.io";
var g5_bbs_url   = "http://moden937.gabia.io/bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
</script>
<script src="http://moden937.gabia.io/js/jquery-1.8.3.min.js"></script>
<script src="http://moden937.gabia.io/js/jquery.menu.js?ver=171223"></script>
<script src="http://moden937.gabia.io/js/common.js?ver=171223"></script>
<script src="http://moden937.gabia.io/js/wrest.js?ver=171223"></script>
<script src="http://moden937.gabia.io/js/placeholders.min.js"></script>
<link rel="stylesheet" href="http://moden937.gabia.io/js/font-awesome/css/font-awesome.min.css">
<script src="http://moden937.gabia.io/js/jquery.bxslider.js"></script>
</head>
<body>
<link rel="stylesheet" href="../css/swiper.min.css">
<script src="../js/swiper.min.js"></script>
<style>
#wrap {width: 100%;max-width: 1920px;min-width: 1200px;overflow: hidden;}

#header {height: 95px;width: 100%;border-bottom: 1px solid #575656;position: fixed;top: 0;left: 50%;transform:translateX(-50%);z-index:100;}
#header.on {background: #000;}
.inner {width: 1200px;margin: 0 auto;position: relative;}
#logo {padding-top: 14px;}
.menu_bar {position: absolute;right: 0;top: 21px;}
#header .right {float: right;margin-right: 96px;}
#header .right ul li {float: left;padding-top: 47px;margin-left: 12px;}
#header .right ul li:nth-child(-n+2) {padding-top: 48px;}

#nav {width: 100%;background: rgba(12,96,169,0.95);position: fixed;top: 100%;left: 0;z-index:999;overflow: hidden;display: none;opacity: 0;}
.menu_close {position: absolute;right: 0px;top: 21px;}
#nav .inner > div {margin-bottom: 40px;overflow: hidden;}
#nav .inner > div:first-of-type {padding-top: 105px;}
#nav .inner > div:after {content: '';display: block;clear: both;}
#nav .inner > div h2 {text-align: center;font-size: 32px;color: #fff;letter-spacing: -0.025em;font-weight: 600;position: relative;top: 100%;opacity: 0;}
#nav .inner > div h2 a {color: #fff;}
#nav .inner > div ul {margin: 20px auto 0;}
#nav .inner > div:nth-of-type(1) ul {width: 301px;}
#nav .inner > div:nth-of-type(2) ul {width: 520px;}
#nav .inner > div:nth-of-type(3) ul {width: 300px;}
#nav .inner > div:nth-of-type(6) ul {width: 166px;}
#nav .inner > div ul li {color: #3c8fd7;font-size: 16px;float: left;position: relative;top: 50%;opacity: 0;}
#nav .inner > div ul li a {font-size: 20px;color: #8fc3f1;position: relative;top: 100%;opacity: 0;}
#nav .inner > div ul li span {position: relative;top: -2px;display: inline-block;margin: 0 20px;}
.container:after {content: '';display: block;clear: both;}
</style>
<div id="wrap">
<!-- 상단 시작 { -->
<div id="header">
	<div class="inner">
		<h1 id="logo"><a href="/"><img src="/images/logo.png" alt="MiRae i&C"></a></h1>
		<div class="menu_bar"><a href="javascript:;"><img src="/images/menu_bar.png" alt="메뉴 버튼"></a></div>
		<div class="right">
			<ul>
				<li><a href="https://www.facebook.com/MiraeAD" target="_blank"><img src="/images/facebook.png" alt="페이스북"></a></li>
				<li><a href="https://blog.naver.com/miraead_post" target="_blank"><img src="/images/blog.png" alt="블로그"></a></li>
				<li><a href="/mirae.pdf" target="_blank"><img src="/images/com_pdf.png" alt="회사소개서pdf 다운"></a></li>
			</ul>
		</div>
	</div>
</div>
<div id="nav">
	<div class="inner">
		<p class="menu_close"><a href="javascript:;"><img src="/images/menu_close.png" alt="메뉴 닫기 버튼"></a></p>
		<div>
			<h2>About Us</h2>
			<ul>
				<li><a href="/1_1.php">About us</a><span>|</span></li>
				<li><a href="/1_2.php">History</a><span>|</span></li>
				<li><a href="/1_3.php">Awards</a></li>		
			</ul>
		</div>
		<div>
			<h2>Marketing</h2>
			<ul>
				<li><a href="/2_1.php">Digital Performance Marketing</a><span>|</span></li>
				<li><a href="/3_1.php">Contents Marketing</a></li>
			</ul>
		</div>
		<div>
			<h2>Mirae I&C Solution</h2>
			<ul>
				<li><a href="/4_1.php">Mirae I&C Solution</a><span>|</span></li>
				<li><a href="/4_2.php">Data Lab</a></li>
			</ul>
		</div>
		<div>
			<h2><a href="/bbs/board.php?bo_table=portfolio">Portfolio</a></h2>
		</div>
		<div>
			<h2><a href="/bbs/write.php?bo_table=recruit">Recruit</a></h2>
		</div>
		<div>
			<h2>Customer Service</h2>
			<ul>
				<li><a href="/bbs/board.php?bo_table=notice">Notice</a><span>|</span></li>
				<li><a href="/bbs/write.php?bo_table=inquiry">Inquiry</a></li>
			</ul>
		</div>
	</div>
</div>
<script>
var h = $(window).height();
$('#nav').height(h);
$('.menu_bar').on('click',function(){
	$('#nav').show().stop().animate({'top':'0','opacity':'1'},300,function(){
		$('#nav .inner > div h2').animate({'top':'0','opacity':'1'},1000);
		$('#nav .inner > div ul li').animate({'top':'0','opacity':'1'},1000);
		$('#nav .inner > div ul li a').animate({'top':'0','opacity':'1'},1000);
	});
	$("html,body").css({overflowY:"hidden"})
})
$('.menu_close').on('click',function(){
	$('#nav').stop().animate({'top':'100%','opacity':'0'},300,function(){
		$('#nav').hide();
		$('#nav .inner > div h2').animate({'top':'100%','opacity':'0'},100);
		$('#nav .inner > div ul li').animate({'top':'100%','opacity':'0'},100);
		$('#nav .inner > div ul li a').animate({'top':'100%','opacity':'0'},100);
	});
	$("html,body").css({overflowY:"auto"})
})
console.log(h);
</script>
<!-- } 상단 끝  -->
<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<style>
.visual .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {bottom: 26px;}
.visual .swiper-pagination-bullet {width: 16px;height: 16px;background: #fff;margin-right: 16px;}
.visual .swiper-pagination-bullet:last-of-child {margin-right: 0;}
.visual .swiper-pagination-bullet-active {background: #7e7e7e;}

.container:after {content: '';display: block;clear: both;}
.sch_wrap {width: 100%;height: 500px;background-repeat: no-repeat;background-position: 50% 50%;background-image: url(/images/re/sch_bg.jpg);text-align: center;}
.sch_wrap .inner > span {display: block;font-size: 20px;color: #fff;letter-spacing: 1.0em;line-height: 1;padding-top: 67px;font-weight: 100;}
.sch_wrap p {font-size: 52px;line-height: 1;color: #fff;font-weight: 100;letter-spacing: -0.055em;}
.sch_wrap p strong {font-weight: 600;color: #0c60a9;}
.sch_wrap p:nth-of-type(1) {margin-top: 38px;}
.sch_wrap p:nth-of-type(2) {margin-top: 12px;}
.sch_wrap p:nth-of-type(2) strong {color: #fff;font-weight: 600;}
.sch_wrap p:nth-of-type(3) {font-size: 15px;letter-spacing: -0.055em;margin-top: 25px;line-height: 20px;}
.sch_wrap p:nth-of-type(3) span {font-size: 15px;letter-spacing: -0.055em;line-height: 20px;color: #a8aebb;padding-top: 0;}
.sch {position: absolute;left: 50%;transform:translateX(-50%);top: 364px;width: 710px;}
.sch input {width: 615px;height: 66px;background: transparent;border: 2px solid #0c60a9;font-size: 20px;text-indent: 25px;outline:none;color: #fff;float: left;letter-spacing: -0.055em;}
input::placeholder {color: #fff;}
.sch button {width: 93px;height: 66px;float: left;background-repeat: no-repeat;background-position: 50% 50%;background-image: url(/images/sch_icon.jpg);border: none;}

.con1:after {content: '';display: block;clear: both;}
.con1 > div {width: 100%;height: 460px;background-repeat: no-repeat;background-position: 50% 50%;}
.con1 .sub_inner {width: 600px;position: relative;}
.con1 img {position: absolute;top: 0;left: 50%;transform:translateX(-50%);}
.con1 .con1_title {font-size: 40px;color: #0c60a9;font-weight: bold;letter-spacing: -0.0;line-height: 42px;text-transform: uppercase;margin-bottom: 30px;}
.con1 span {display: block;font-size: 18px;color: #767a80;letter-spacing: -0.055em;line-height: 1;margin-bottom: 18px;}
.con1 p {font-size: 18px;color: #333;letter-spacing: -0.055em;line-height: 28px;font-weight: 500;margin-bottom: 28px;}
.con11 .left {float: left;width: 50%;overflow: hidden;position: relative;height: 460px;}
.con12 .sub_inner {float: right;padding-left: 35px;}
.con11 .right {float: left;width: 50%;background: #f6fafe;height: 460px;padding-left: 35px;padding-top: 65px;}
.con12 .left {float: left;width: 50%;height: 460px;padding-top: 65px;}
.con12 .right {float: left;width: 50%;height: 460px;overflow: hidden;position: relative;}
.con13 .left {float: left;width: 50%;overflow: hidden;height: 460px;position: relative;}
.con13 .right {float: left;width: 50%;background: #f6fafe;height: 460px;padding-left: 35px;padding-top: 65px;}
.con1 .move {display: block;width: 115px;height: 36px;position: absolute;top: 315px;background: #0c60a9;background-repeat: no-repeat;background-position: 70px 50%;background-image: url(/images/re/move_icon.png);font-size: 16px;color: #fff;letter-spacing: -0.0;text-indent:20px;line-height: 36px;}
.con11,.con12,.con13 {position: relative;top: 20px;opacity: 0;}

.con2 {width: 100%;height: 1200px;background-repeat: no-repeat;background-position: 50% 50%;background-image: url(/images/re/con2_bg.jpg);}
.con2_title {text-align: center;position: relative;top: 20px;opacity: 0;}
.con2_title:after {content: '';display: inline-block;clear: both;width: 34px;height: 2px;background: #fff;text-align: center;margin-top: 35px;}
.con2_title h2 {font-size: 40px;letter-spacing: -0.0;color: #fff;text-transform: uppercase;line-height: 1;padding-top: 75px;margin-bottom: 18px;}
.con2_title h2 strong {color: #156cb7;}
.con2_title p {font-size: 18px;color: #fff;letter-spacing: -0.055em;line-height: 1;}
.con2 ul {padding: 49px 40px 0;}
.con2 ul li {float: left;margin-bottom: 40px;opacity: 0;position: relative;top: 20px;}
.con2 ul li:nth-child(even) {float: right;}
.con2 ul li a {display: block;width: 540px;height: 160px;border-radius: 5px;background: #0c60a9;background-repeat: no-repeat;background-position: 43px 50%;padding-top: 1px;}
.con2 ul li:nth-child(1) a {background-image: url(/images/re/con2_1_icon.png);background-position: 48px 50%;}
.con2 ul li:nth-child(2) a {background-image: url(/images/re/con2_2_icon.png);}
.con2 ul li:nth-child(3) a {background-image: url(/images/re/con2_3_icon.png);background-position: 42px 50%;}
.con2 ul li:nth-child(4) a {background-image: url(/images/re/con2_4_icon.png);background-position: 41px 50%;}
.con2 ul li:nth-child(5) a {background-image: url(/images/re/con2_5_icon.png);}
.con2 ul li:nth-child(6) a {background-image: url(/images/re/con2_6_icon.png);background-position: 44px 50%;}
.con2 ul li:nth-child(7) a {background-image: url(/images/re/con2_7_icon.png);}	
.con2 ul li a .right {width: 379px;height: 158px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;background: #fff;margin-left: 160px;padding-top: 23px;padding-left: 20px;}
.con2 ul li a .long {width: 960px;height: 158px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;background: #fff;margin-left: 160px;padding-top: 23px;padding-left: 20px;}	
.con2 ul li:last-child a .right {padding-top: 13px;}
.con2 ul li:last-child a .long {padding-top: 13px;}	
.con2 ul li a .right h3 {font-size: 20px;color: #0c60a9;letter-spacing: -0.0;line-height: 1;margin-bottom: 15px;}
.con2 ul li a .right p {font-size: 17px;color: #333;letter-spacing: -0.055em;line-height: 1.2;margin-bottom: 18px;font-weight: 600;}
.con2 ul li a .right span {font-size: 15px;color: #818181;letter-spacing: -0.055em;}
.con2 ul li a .long h3 {font-size: 20px;color: #0c60a9;letter-spacing: -0.0;line-height: 1;margin-bottom: 15px;}
.con2 ul li a .long p {font-size: 17px;color: #333;letter-spacing: -0.055em;line-height: 1.2;margin-bottom: 18px;font-weight: 600;}
.con2 ul li a .long span {font-size: 15px;color: #818181;letter-spacing: -0.055em;}	
.con2 .move {display: block;width: 115px;height: 36px;position: absolute;top: 1100px;background: #0c60a9;background-repeat: no-repeat;background-position: 70px 50%;background-image: url(/images/re/move_icon.png);font-size: 16px;color: #fff;letter-spacing: -0.0;text-indent:20px;line-height: 36px;left: 50%;transform:translateX(-50%);opacity: 0;}

.con3 {width: 100%;height: 421px;background: #f6fafe;}
.con3 .con3_title {text-align: center;}
.con3 .con3_title h2 {font-size: 40px;letter-spacing: -0.0;color: #000;text-transform: uppercase;line-height: 1;padding-top: 53px;margin-bottom: 18px;}
.con3 .con3_title h2 strong {color: #156cb7;}
.con3 .con3_title p {font-size: 18px;letter-spacing: -0.055em;margin-bottom: 57px;}
.con3 .logo_slide {width: 1121px;margin: 0 auto;}
.con3 .swiper-button-next, .swiper-button-prev {width: 12px;height: 24px;background-size: cover;margin-top: 0;top: 217px;}
.con3 .swiper-button-next {background-image: url(/images/logo_next.png);right: 0;}
.con3 .swiper-button-prev {background-image: url(/images/logo_prev.png);left: 0;}
.con3 a {display: block;width: 115px;height: 36px;position: absolute;background: #0c60a9;background-repeat: no-repeat;background-position: 70px 50%;background-image: url(/images/re/move_icon.png);font-size: 16px;color: #fff;letter-spacing: -0.0;text-indent:20px;line-height: 36px;top: 325px;left: 50%;transform:translateX(-50%);}

.con4 {width: 100%;height: 1002px;}
.con4 .con4_title {text-align: center;}
.con4 .con4_title h2 {font-size: 40px;letter-spacing: -0.0;color: #000;text-transform: uppercase;line-height: 1;padding-top: 72px;margin-bottom: 18px;}

.wrap_controllers {display: none;}
.con5 {width: 100%;height: 800px;position: relative;}
.con5 .map {}
.con5 .map li {position: absolute;left: 50%;top: 50%;transform:translate(-50%, -50%);}
.con5 .map li:first-child {z-index:10;}
.con5 .map_screen {width: 100%;height: 100%;position: absolute;left: 0;top: 0;z-index:20;display: none;}
.addr_info {position: absolute;left: 0;top: 92px;width: 420px;height: 560px;background: #fff;z-index:30;padding-top: 52px;padding-left: 40px;}
.addr_info .con5_title h2 {font-size: 40px;letter-spacing: -0.0;color: #333;line-height: 1;margin-bottom: 46px;}
.addr_info .addr_tab:after {content: '';display: block;clear: both;}
.addr_info .addr_tab li {float: left;margin-right: 8px;}
.addr_info .addr_tab li a {display: block;width: 160px;height: 46px;background: #fff;font-size: 18px;text-align: center;line-height: 46px;color: #0c60a9;letter-spacing: -0.055em;border: 1px solid #0c60a9;}
.addr_info .addr_tab li.on a {background: #0c60a9;color: #fff;}
.addr_info .addr_tab li:hover a {background: #0c60a9;color: #fff;}
.addr_info h3 {color: #0c60a9;font-size: 24px;letter-spacing: -0.0;font-weight: 500;}
.addr_info h3:after {content: '';display: inline-block;clear: both;width: 82px;height: 1px;background: #0c60a9;position: relative;top: -9px;margin-left: 10px;}
.addr_info .con5_addr {margin-top: 44px;height: 100px;}
.addr_info .con5_addr div {font-size: 18px;letter-spacing: -0.055em;line-height: 28px;font-weight: 500;}
.addr_info .con5_tel {margin-top: 14px;}
.addr_info .con5_tel div {font-size: 18px;letter-spacing: -0.055em;line-height: 28px;font-weight: 500;}

.busan .roughmap_maker_label .roughmap_lebel_text {font-size: 12px;padding: 6px 8px 5px;}
.screen {display: none;width: 100%;height: 100%;background: rgba(0,0,0,0.5);position: fixed;top: 0;left: 0;z-index:1000;}
#work_page {position: fixed;top: 50%;left: 50%;transform:translate(-50%,-50%);z-index:1001;}
.gall_text_href {letter-spacing: -0.055em;}
</style>
<div class="visual">
	<div class="swiper-container main_slide">
		<div class="swiper-wrapper">
																<div class="main_visual swiper-slide"><img src="http://moden937.gabia.io/data/file/main_visual/thumb-3555222028_VbogzLBi_c8a7bc4fbb847e490e4e01a5b89554e85440e38d_1920x650.png" alt=""></div>					
																						<div class="main_visual swiper-slide"><img src="http://moden937.gabia.io/data/file/main_visual/thumb-3555222028_Py7q6gCV_f3d128451774b20f882610acab4f5468d7515ef5_1920x650.jpg" alt=""></div>					
																						<div class="main_visual swiper-slide"><img src="http://moden937.gabia.io/data/file/main_visual/thumb-3555222028_JAq7TKUZ_5a8da15f396486c691430968559a24add9e0a440_1920x650.jpg" alt=""></div>					
											</div>
		<div class="swiper-pagination"></div>
	</div>
</div>
<div class="container">
	<div class="content">
		<div class="sch_wrap">
			<div class="inner">
				<span>TREND SEARCH</span>
				<p><strong>광고주님!</strong></p>
				<p><strong>검색어 트렌드</strong> 한번에 확인해보세요!</p>
				<p>궁금한 주제어를 설정하고, 하위 주제어에 해당하는 검색어를 콤마(,)로 구분 입력해 주세요.</br>
입력한 단어의 추이를 하나로 합산하여 해당 주제가 네이버에서 얼마나 검색되는지 관련 데이터를 제공합니다.<br/>
<span>예) 주제어 캠핑 : 캠핑, Camping, 캠핑용품, 겨울캠핑, 캠핑장, 글랩핑, 오토캠핑, 캠핑카, 텐트, 캠핑요리</span></p>
				<div class="sch">
					<form name="frmsearch1" action="" onsubmit="return search_submit(this);">

					<label for="sch_str" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
					<input type="text" name="q" value="" id="sch_str" required placeholder="주제어를 입력하세요">
					<button type="submit" id="sch_submit"><span class="sound_only">검색</span></button>

					</form>
				</div>
			</div>
		</div>
		<div class="con1">
			<div class="con11">
				<div class="left"><img src="/images/re/con1_1.jpg" alt="ABOUT US"></div>
				<div class="right">
					<div class="sub_inner">
						<div class="con1_title">ABOUT US</div>
						<p>차별화된 전략과, 전문 마케터로 구성되어<br/>탄탄한 조직력과 Big Data를 활용한 솔루션을 제공합니다.</p>
						<p>(주)미래아이엔씨는 2000년 9월 디지털퍼포먼스마케팅 전문 대행사로 </br>출범 이후 광고주 만족이라는 기본이지만 가장 중요한 경영방침으로 <br/>지금까지 광고주의 성원 아래 디지털퍼포먼스마케팅 시장을 주도하는<br/>위치까지 오게 되었습니다.</p>
						<a href="/1_1.php" class="move">move</a>
					</div>
				</div>
			</div>
			<div class="con12">			
				<div class="left">
					<div class="sub_inner">
						<span>디지털 퍼포먼스 마케팅</span>
						<div class="con1_title">Digital Performance<br/>Marketing</div>
						<p>풍부한 경험, 최신기술과 인사이트<br/>우리는 디지털 퍼포먼스 <br/>그 이상을 추구 합니다.</p>
						<a href="/2_1.php" class="move">move</a>
					</div>
				</div>
				<div class="right"><img src="/images/re/con1_2.jpg" alt="Digital Performance Marketing"></div>
			</div>
			<div class="con13">
				<div class="left"><img src="/images/re/con1_3.jpg" alt="contents Marketing"></div>
				<div class="right">
					<div class="sub_inner">
						<span>컨텐츠 마케팅</span>
						<div class="con1_title">contents<br/>Marketing</div>
						<p>기존 텍스트,이미지 기반의 콘텐츠보다 높은 도달률과<br/>반응률을 보이고 있으며 브랜드 캠페인,홍보영상 제품리뷰 등<br/>다양한 분야에 사용되고 있습니다.</p>
						<a href="/3_1.php" class="move">move</a>
					</div>
				</div>
			</div>
		</div>
		<div class="con2">
			<div class="inner">
				<div class="con2_title">
					<h2>Mirae I & C <strong>Solution</strong></h2>
					<p>미래아이엔씨 광고주라면 누구나 자체 개발 솔루션을 무료로 제공받을 수 있습니다.</p>
				</div>
				<ul>
					<li>
						<a href="/4_1.php#con1">
							<div class="right">
								<h3>Automatic Report</h3>
								<p>제공하는 모든 데이터는</br>언제,어디서든 확인 검토가 가능합니다.</p>
								<span>#자동보고서 #비교분석 #광고진단(키워드추천)</span>
							</div>
						</a>
					</li>
					<li>
						<a href="/4_1.php#con2">
							<div class="right">
								<h3>Log Analysis</h3>
								<p>마케팅 최적화를 위해 기술력으로<br/>자체 개발한 하이퀼리티 솔루션!</p>
								<span>#퍼포먼스극대화 #최적의순위제공 #PC/Mobile데이터</span>
							</div>
						</a>
					</li>
					<li>
						<a href="/4_1.php#con3">
							<div class="right">
								<h3>Click Through Protection System</h3>
								<p>쿠키삭제를 하며 악질적인<br/>부정클릭까지 잡아내는!</p>
								<span>#실시간감시 #사용자고유값구분 #감시아이콘</span>
							</div>
						</a>
					</li>
					<li>
						<a href="/4_1.php#con4">
							<div class="right">
								<h3>MAP</h3>
								<p>상담요청 또는 견적요청에 대한<br/>고객관리 프로그램을 제공!</p>
								<span>#실시간고객응대 #간편한문의</span>
							</div>
						</a>
					</li>
					<li>
						<a href="/4_1.php#con5">
							<div class="right">
								<h3>Design Center</h3>
								<p>복잡한 스크립트 설치부터 각종 이벤트,<br/>다양한 매체 광고배너까지 무료제작지원!</p>
								<span>#광고배너 #스크립트설치</span>
							</div>
						</a>
					</li>
					<li>
						<a href="/4_1.php#con6">
							<div class="right">
								<h3>Product Update</h3>
								<p>쇼핑몰 업종에 특화 된 ‘상품’ 정보 제공<br/>상품 경쟁력을 높일 수 있도록 쇼핑몰 내 상품을 집중 분석하여 데이터를 제공 합니다.</p>
								<span>#상품관리 #빠른응대 #고객대응</span>
							</div>
						</a>
					</li>
					<li>
						<a href="/4_1.php#con7">
							<div class="long">
								<h3>Mirae Talk</h3>
								<p>네이버톡톡, 카카오채팅, 웹채팅을 한번에 관리 할 수있는 웹체팅 서비스 오픈!</p>
								<span>#미톡 #웹체팅 #빠른응</span>
							</div>
						</a>
					</li>
				</ul>
				<a href="/4_1.php" class="move">move</a>
			</div>
		</div>
		<div class="con3">
			<div class="inner">
				<div class="con3_title">
					<h2>PATNER & <strong>CLIENT</strong></h2>
					<p>미래아이엔씨와 함께하는 파트너 사와 클라이언트를 소개합니다.</p>
				</div>
				<div class="logos">
					<div class="swiper-container logo_slide">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="/images/logo_1.jpg" alt="삼성"></div>
							<div class="swiper-slide"><img src="/images/logo_2.jpg" alt="오리온"></div>
							<div class="swiper-slide"><img src="/images/logo_3.jpg" alt="gs라테일"></div>
							<div class="swiper-slide"><img src="/images/logo_4.jpg" alt="11번가"></div>
							<div class="swiper-slide"><img src="/images/logo_5.jpg" alt="에듀윌"></div>
							<div class="swiper-slide"><img src="/images/logo_6.jpg" alt="imbc"></div>
							<div class="swiper-slide"><img src="/images/logo_7.jpg" alt="sbs"></div>
							<div class="swiper-slide"><img src="/images/logo_8.jpg" alt="ibk기업은행"></div>
							<div class="swiper-slide"><img src="/images/logo_9.jpg" alt="수협"></div>
							<div class="swiper-slide"><img src="/images/logo_10.jpg" alt="금호생명"></div>
							<div class="swiper-slide"><img src="/images/logo_11.jpg" alt="한국장학재단"></div>
							<div class="swiper-slide"><img src="/images/logo_12.jpg" alt="카카오"></div>
						</div>
					</div>
					<div class="logo-button-next swiper-button-next"></div>
					<div class="logo-button-prev swiper-button-prev"></div>
				</div>
				<a href="/1_1.php#partners" class="move">move</a>
			</div>
		</div>
		<div class="con4">
			<div class="inner">
				<div class="con4_title"><h2>PORTFOLIO</h2></div>
				<style>
.gall_text_href { padding:20px 15px; height: 128px; overflow:hidden;white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis;-ms-text-overflow:ellipsis; display:block; word-wrap: break-word; white-space: normal;border: 1px solid #f3f3f3;border-top: none;font-size: 18px;color: #333;font-weight: 600;}
.gall_text_href .cate {display: block !important;color: #0c60a9;margin-top: 15px;}
.lat > ul > li:hover {-webkit-box-shadow: 0px 0px 5px 3px #ddd;
-moz-box-shadow: 0px 0px 5px 3px #ddd;
box-shadow: 0px 0px 5px 3px #ddd;}
</style>
<div class="lat">
    
    <ul>
            <li>
		<a href="javascript:;" onclick="hak('36')">
			<ul class="gall_con" style="width:px;">
                <li class="gall_href">
					<img src="http://moden937.gabia.io/data/file/portfolio/thumb-3555222027_C6fwrPzZ_b49325cf637c2de7ad2537af99e2199a10dc389a_360x240.jpg" alt="" width="360" style="border:0px solid #dcdcdc;" height="240">                </li>
				<li class="gall_text_href" >
					SNS 홍보 및 대학생 기자단 운영 사례	
					<span class="cate">SNS AD</span>                </li>
			</ul>
		</a>
        </li>
            <li>
		<a href="javascript:;" onclick="hak('35')">
			<ul class="gall_con" style="width:360px;">
                <li class="gall_href">
					<img src="http://moden937.gabia.io/data/file/portfolio/thumb-3555222027_i0Bh3c6d_d9d88d33167c272b8364d26f49ae997b5eb7b95a_360x240.jpg" alt="" width="360" style="border:0px solid #dcdcdc;" height="240">                </li>
				<li class="gall_text_href" >
					2017~2018년 한국장학재단 뉴미디어 온라인 홍보 사례	
					<span class="cate">SNS AD</span>                </li>
			</ul>
		</a>
        </li>
            <li>
		<a href="javascript:;" onclick="hak('34')">
			<ul class="gall_con" style="width:360px;">
                <li class="gall_href">
					<img src="http://moden937.gabia.io/data/file/portfolio/thumb-3555222027_vGAUZcdK_d9a8f9964a8faccd4ee36585564c89ba5f8c6b76_360x240.jpg" alt="" width="360" style="border:0px solid #dcdcdc;" height="240">                </li>
				<li class="gall_text_href" >
					2019년 기획재정부 소셜미디어 운영 용역 사례	
					<span class="cate">SNS AD</span>                </li>
			</ul>
		</a>
        </li>
            <li>
		<a href="javascript:;" onclick="hak('33')">
			<ul class="gall_con" style="width:360px;">
                <li class="gall_href">
					<img src="http://moden937.gabia.io/data/file/portfolio/thumb-3555222027_lsvGRZSw_95fe003df748eed439b84db318a8c81e8d27b60e_360x240.jpg" alt="" width="360" style="border:0px solid #dcdcdc;" height="240">                </li>
				<li class="gall_text_href" >
					2017~2018년 온라인 종합 홍보 용역 사례	
					<span class="cate">SNS AD</span>                </li>
			</ul>
		</a>
        </li>
            <li>
		<a href="javascript:;" onclick="hak('32')">
			<ul class="gall_con" style="width:360px;">
                <li class="gall_href">
					<img src="http://moden937.gabia.io/data/file/portfolio/thumb-3555222027_mf2Jp8Pi_1dc2b650133b73df704d6c1e5472d26405e52129_360x240.jpg" alt="" width="360" style="border:0px solid #dcdcdc;" height="240">                </li>
				<li class="gall_text_href" >
					2018 K-water 온라인 미디어 운영 용역 사례	
					<span class="cate">SNS AD</span>                </li>
			</ul>
		</a>
        </li>
            <li>
		<a href="javascript:;" onclick="hak('31')">
			<ul class="gall_con" style="width:360px;">
                <li class="gall_href">
					<img src="http://moden937.gabia.io/data/file/portfolio/thumb-3555222027_JOLXKjAi_9bf4a99a3ecc226be271f549735100320fcd6189_360x240.jpg" alt="" width="360" style="border:0px solid #dcdcdc;" height="240">                </li>
				<li class="gall_text_href" >
					2015~2018 서울교육 소셜미디어 운영 및 콘텐츠제작 용역 사례	
					<span class="cate">SNS AD</span>                </li>
			</ul>
		</a>
        </li>
            </ul>
    <a href="http://moden937.gabia.io/bbs/board.php?bo_table=portfolio" class="lt_more">move</a>

</div>
			</div>
		</div>
		<div class="con5">
			<div class="inner">
				<div class="addr_info">
					<div class="con5_title"><h2>CONTACT US</h2></div>
					<ul class="addr_tab">
						<li class="on"><a href="javascript:;">서울지점</a></li>
						<li><a href="javascript:;">부산지점</a></li>
					</ul>
					<div class="con5_addr">
						<h3>Address</h3>
						<div class="s_addr">서울시 금천구 디지털로 9길 68 </br>대륭포스트타워 5차 1801호 ~ 1805호</div>
						<div class="b_addr">부산광역시 부산진구 중앙대로 631</br>선문빌딩 8층</div>
					</div>
					<div class="con5_tel">
						<h3>TEL</h3>
						<div class="s_tel">02 - 6233 - 4750</div>
						<div class="b_tel">02 - 2633 - 9070</div>
					</div>
				</div>
			</div>
			<div class="map_screen"></div>
			<ul class="map">
				<li class="seoul">
					<!-- * 카카오맵 - 지도퍼가기 -->
					<!-- 1. 지도 노드 -->
					<div id="daumRoughmapContainer1560822185560" class="root_daum_roughmap root_daum_roughmap_landing"></div>

					<!-- 3. 실행 스크립트 -->
					<script charset="UTF-8">
						new daum.roughmap.Lander({
							"timestamp" : "1560822185560",
							"key" : "txqq",
							"mapWidth" : "1920",
							"mapHeight" : "800"
						}).render();
					</script>
				</li>
				<li class="busan">
					<!-- * 카카오맵 - 지도퍼가기 -->
					<!-- 1. 지도 노드 -->
					<div id="daumRoughmapContainer1560822251256" class="root_daum_roughmap root_daum_roughmap_landing"></div>

					<!-- 3. 실행 스크립트 -->
					<script charset="UTF-8">
						new daum.roughmap.Lander({
							"timestamp" : "1560822251256",
							"key" : "txqs",
							"mapWidth" : "1920",
							"mapHeight" : "800"
						}).render();
					</script>
				</li>
			</ul>
		</div>
	</div>
</div>
<div id="work_page">
	
</div>
<div class="screen"></div>
<script type="text/javascript">
function hak(a1) {
	$.ajax({
		 url: "/hak_ajax.php",
		 type : "GET", 
		 data: {"hakajax":a1},
		 success: function(msg){
		  $("#work_page").html(msg);
		 }
	});
}

$('.lat ul li a').on('click',function(){
	$('.screen').show();
	$('html, body').css('overflow','hidden');
})
</script>
<script>
var mySwiper = new Swiper('.main_slide', {
    speed: 400,
    spaceBetween: 0,
	loop:true,
	autoplay:{
		delay:4000,	
		disableOnInteraction:false,
	},
	pagination: {
        el: '.swiper-pagination',
		type: 'bullets',
			clickable:true,
    },
});
$('.addr_info .con5_addr div').eq(1).hide();
$('.addr_info .con5_tel div').eq(1).hide();
$('.addr_info .addr_tab li').on('click',function(){
	var cnt = $(this).index();
	$('.addr_info .con5_addr div').hide();
	$('.addr_info .con5_tel div').hide();
	$('.addr_info .con5_addr div').eq(cnt).show();
	$('.addr_info .con5_tel div').eq(cnt).show();
	$('.map li').hide();
	$('.map li').eq(cnt).show();
	$('.addr_info .addr_tab li').removeClass('on');
	$(this).addClass('on');
})
var h = 200;
var h2 = h + 600;
var h3 = h + 1000;
$(window).scroll(function(){
	var posT = $(this).scrollTop();
	if(posT > h){
		$('.con11').animate({'opacity':'1','top':'0'},800);
	}
	if(posT > h2){
		$('.con12').animate({'opacity':'1','top':'0'},800);
	}
	if(posT > h3){
		$('.con13').animate({'opacity':'1','top':'0'},800);
	}
})
var h4 = $('.con1 .con12').offset().top + 200;
var h5 = h4 + 400;
var h6 = h4 + 600;
$(window).scroll(function(){
	var posT = $(this).scrollTop();
	if(posT > h4){
		$('.con2_title').animate({'opacity':'1','top':'0'},800);
	}
	if(posT > h5){
		$('.con2 ul li').animate({'opacity':'1','top':'0'},800);
	}
	if(posT > h6){
		$('.con2 .move').animate({'opacity':'1','top':'1100px'},800);
	}
})
var mySwiper = new Swiper('.logo_slide', {
	slidesPerView: 6,
    speed: 400,
	width: 1120,
	loop:true,
	autoplay:{
		delay:4000,	
		disableOnInteraction:false,
	},
    spaceBetween: 16,
	navigation : { // 네비게이션
        nextEl : '.logo-button-next', // 오른쪽(다음) 화살표
        prevEl : '.logo-button-prev', // 왼쪽(이전) 화살표
    },
});
</script>
<style>
#footer {width: 100%;background: #000;padding-bottom: 18px;}
.ft_inquiry {width: 100%;height: 70px;border-bottom: 1px solid #888;padding-top: 14px;}
.ft_inquiry input[type='text'] {width: 180px;height: 40px;text-indent: 10px;font-size: 14px;color: #333;margin-right: 3px;}
.ft_inquiry input[type='submit'] {float: right;width: 138px;height: 40px;background: none;background-repeat: no-repeat;background-position: 50% 50%;background-image: url(/images/send.png);text-indent: -9999em;font-size: 0;border: none;}
.ft_inquiry input[name='wr_content'] {width: 300px;}
.ft_inquiry input[type="checkbox"] {margin-right: 2px;margin-left: 10px;}
input::placeholder {color: #a3a3a3;}
.ft_inquiry select {width: 180px;height: 40px;text-indent: 10px;color: #333;margin-right: 3px;}
.ft_inquiry label {font-size: 14px;color: #fff;letter-spacing: -0.04em;}
.ft_inquiry label a {margin-left: 3px;color: #fff;}

.ft_nav:after {content: '';display: block;clear: both;}
.ft_nav ul li {float: left;color: #fff;font-size: 14px;padding-top: 15px;margin-bottom: 12px;}
.ft_nav ul li a {color: #fff;font-size: 14px;font-weight: 600;}
.ft_info span {display: inline-block;color: #a8a8a9;font-size: 14px;margin-bottom: 5px;letter-spacing: -0.04em;}
</style>
<!-- 하단 시작 { -->
<div id="footer">
	<div class="ft_inquiry">
		<div class="inner">
			<form action="/bbs/write_update1.php" method="post" name="fwrite" id="form-inquiry" onsubmit="return fwrite_submit2(this);">
				<input type="hidden" name="bo_table" value="inquiry">
				<input type="hidden" name="wr_subject" value="빠른문의입니다.">
				<fieldset>
					<legend>Quick Inquiry</legend>
					<label for="wr_name"></label>
					<input type="text" id="wr_name" name="wr_name" placeholder="고객명"/>
					<label for="phoneNum"></label>
					<input type="text" class="num1" id="phoneNum" name="wr_1" placeholder="연락처" />
					<label for="ca_name"></label>
					<select name="ca_name" id="ca_name" required >
						<option value="">선택하세요</option>
					<option value="광고상품">광고상품</option>
<option value="기타">기타</option>
					
					</select>
					<label for="wr_content"></label>
					<input type="text" id="wr_content" name="wr_content" placeholder="문의내용" />
					<input type="checkbox" id="privacy" name="privacy" required><label for="privacy">개인정보보호정책<a href="/bbs/content.php?co_id=privacy">[보기]</a></label>
					<input type="submit" value="빠른문의" accesskey="s" class="quick_submit">
				</fieldset>
			</form>
			<script>
			function fwrite_submit2(f)
			{
				var tel = f.wr_1.value.replace(/[0-9\-]/g, "");
				if(tel.length > 0) {
					alert("전화번호는 숫자, - 으로만 입력해 주십시오.");
					return false;
				}
				if (!f.quick_chk.checked) {
					alert("개인정보취급방침 내용에 동의해주세요.");
					f.quick_chk.focus();
					return false;
				}
				return true;
			}
			</script>
		</div>
	</div>
	<div class="inner">
		<div class="ft_nav">
			<ul>
				<li><a href="">개인정보취급방침</a>&nbsp;&nbsp; | &nbsp;&nbsp;</li>
				<li><a href="">이메일무단수집거부</a></li>
			</ul>
		</div>
		<div class="ft_info">
			<span>업체명 : (주)미래아이엔씨 | </span>
			<span>주소 : 서울시 금천구 디지털로 9길 68 대륭포스트타워 5차 1801호 ~ 1805호 | </span>
			<span>대표자 : 박승운 | 사업자등록번호 : 106-81-93204 | </span>
			<span>통신판매업 : 제18-22051호</span><br>
			<span>부산지사 : 부산광역시 부산진구 중앙대로 631 선문빌딩 8층 | </span>
			<span>TEL : 02-6233-4700 | </span>
			<span>FAX : 02-701-5000 | </span>
			<span>E : km.kyung@toup.net | </span>
			<span>COPYRIGHT (주)미래아이엔씨 ALL RIGHTS RESERVED</span>
		</div>
	</div>
</div>
<button type="button" id="top_btn"><span class="sound_only">상단으로</span></button>
<!-- } 하단 끝 -->
</div>
<script>
$("#top_btn").hide();
$(window).scroll(function(){
	var h = $(this).scrollTop();
	if(h == 0){
		$('#header').removeClass('on')
	}else if(h > 0){
		$('#header').addClass('on')
	}
	if(h > 200){		
		$("#top_btn").show();
	}
})

$(function() {
	$("#top_btn").on("click", function() {
		$("html, body").animate({scrollTop:0}, '500');
		return false;
	});
});
</script>


<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

</body>
</html>
