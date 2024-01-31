<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>뉴고려병원</title>
	<link rel="stylesheet" href="/resource/font/notosanskr/style.css">
	<link rel="stylesheet" href="/resource/css/style.css">
	<script type="text/javascript" src="/resource/js/jquery-1.12.2.min.js"></script>
	<script type="text/javascript" src="/resource/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/resource/js/swiper.min.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="/resource/js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="/resource/js/html5shiv.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="/resource/js/ui.js"></script>
</head>
<body>

	<div id="wrap">
		<header id="header">
			<h1><a href="/"><img src="/resource/images/img_logo.png" alt="인봉의료재단 뉴고려 병원"></a></h1>
			<button type="button" class="btnMenu" onclick="$('html').toggleClass('menuOn');"><span>메뉴</span></button>
			<button type="button" class="btnSearch" onclick="$('html').addClass('searchOn');">검색</button>

			<div id="gnb">
				<div class="gnbTop">
					
					<!-- <p class="state">로그인이 필요합니다.</p>
					<a href="#" class="btn">로그인</a>
					<a href="#" class="btn">회원가입</a> -->
	
					<p class="state login"><span class="name">우미정</span> 회원님 안녕하세요.</p>
					<a href="#" class="btn">로그아웃</a>
					<a href="#" class="btn1">마이페이지</a>
	
					<a href="#"  class="btnReserv">간편예약</a>
				</div>
				<nav class="menuNav">
					<div class="linkWrap">
						<a href="#" class="link1">전화문의</a>
						<a href="#" class="link2">전문의상담</a>
						<a href="#" class="link3">의료진소개</a>
						<a href="#" class="link4">오시는 길</a>
					</div>
					<ul class="menuList">
						<li><a href="#">서비스이용안내 <span>(13)</span></a>
							<ul class="subMenu">
								<li class="open"><a href="#" onclick="subMenu(this); return false;">예약/발급 <span>(3)</span></a>
									<ul class="subMenu2">
										<li><a href="#">진료예약</a></li>
										<li><a href="#">검진예약</a></li>
										<li class="active"><a href="#">진료예약</a></li>
									</ul>
								</li>
								<li><a href="#" onclick="subMenu(this); return false;">진료안내 <span>(3)</span></a>
									<ul class="subMenu2">
										<li><a href="#">외래진료안내</a></li>
										<li><a href="#">응급진료안내</a></li>
										<li><a href="#">비급여진료 안내</a></li>
									</ul>
								</li>
								<li><a href="#" onclick="subMenu(this); return false;">입/퇴원 안내 <span>(3)</span></a>
									<ul class="subMenu2">
										<li><a href="#">입/퇴원 안내</a></li>
										<li><a href="#">입원생활안내</a></li>
										<li><a href="#">면회안내</a></li>
									</ul>
								</li>
								<li><a href="#" onclick="subMenu(this); return false;">병원안내 <span>(4)</span></a>
									<ul class="subMenu2">
										<li><a href="#">병원둘러보기</a></li>
										<li><a href="#">오시는길</a></li>
										<li><a href="#">장례식장</a></li>
										<li><a href="#">전화번호 안내</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#">진료과/의료진<span>(44)</span></a>
							<ul class="subMenu">
								<li><a href="#" onclick="subMenu(this); return false;">전문센터 <span>(12)</span></a>
									<ul class="subMenu2 typeDiv">
										<li><a href="#">관절센터</a></li>
										<li><a href="#">척추센터</a></li>
										<li><a href="#">외상센터</a></li>
										<li><a href="#">뇌혈관센터</a></li>
										<li><a href="#">심혈관센터</a></li>
										<li><a href="#">소화기센터</a></li>
										<li><a href="#">신장센터</a></li>
										<li><a href="#">소아청소년센터</a></li>
										<li><a href="#">통증센터</a></li>
										<li><a href="#">재활치료센터</a></li>
										<li><a href="#">응급의료센터</a></li>
										<li><a href="#">평생건강증진센터</a></li>
									</ul>
								</li>
								<li><a href="#" onclick="subMenu(this); return false;">진료과 <span>(22)</span></a>
									<ul class="subMenu2 typeDiv">
										<li><a href="#">정형외과</a></li>
										<li><a href="#">신경외과</a></li>
										<li><a href="#">일반외과</a></li>
										<li><a href="#">소화기내과</a></li>
										<li><a href="#">순환기내과</a></li>
										<li><a href="#">신장내과</a></li>
										<li><a href="#">호흡기내과</a></li>
										<li><a href="#">내분비내과</a></li>
										<li><a href="#">신경과</a></li>
										<li><a href="#">소아청소년과</a></li>
										<li><a href="#">산부인과</a></li>
										<li><a href="#">이비인후과</a></li>
										<li><a href="#">피부비뇨의학과</a></li>
										<li><a href="#">정신건강의학과</a></li>
										<li><a href="#">재활의학과</a></li>
										<li><a href="#">치과</a></li>
										<li><a href="#">영상의학과</a></li>
										<li><a href="#">마취통증의학과</a></li>
										<li><a href="#">진단검사의학과</a></li>
										<li><a href="#">가정의학과</a></li>
										<li><a href="#">직업환경의학과</a></li>
										<li><a href="#">응급의학과</a></li>
									</ul>
								</li>
								<li><a href="#" onclick="subMenu(this); return false;">특수클리닉 <span>(7)</span></a>
									<ul class="subMenu2">
										<li><a href="#">하지정맥류 클리닉</a></li>
										<li><a href="#">요실금 클리닉</a></li>
										<li><a href="#">비만 클리닉</a></li>
										<li><a href="#">갑상선 클리닉</a></li>
										<li><a href="#">복강경 클리닉</a></li>
										<li><a href="#">당뇨 클리닉</a></li>
										<li><a href="#">맘모톰 클리닉</a></li>
									</ul>
								</li>
								<li><a href="#" onclick="subMenu(this); return false;">의료진소개 <span>(3)</span></a>
									<ul class="subMenu2">
										<li><a href="#">전문센터</a></li>
										<li><a href="#">진료과</a></li>
										<li><a href="#">특수클리닉</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#">뉴고려커뮤니티 <span>(11)</span></a>
							<ul class="subMenu">
								<li><a href="#" onclick="subMenu(this); return false;">소통/공감 <span>(5)</span></a>
									<ul class="subMenu2">
										<li><a href="#">병원소식</a></li>
										<li><a href="#">건강정보</a></li>
										<li><a href="#">전문의상담</a></li>
										<li><a href="#">칭찬합시다</a></li>
										<!-- <li><a href="#">고객의 소리함</a></li> -->
									</ul>
								</li>
								<li><a href="#" onclick="subMenu(this); return false;">뉴고려소개 <span>(6)</span></a>
									<ul class="subMenu2">
										<li><a href="#">병원소개</a></li>
										<li><a href="#">인사말</a></li>
										<li><a href="#">연혁</a></li>
										<li><a href="#">미션,비젼,핵심가치</a></li>
										<li><a href="#">채용정보</a></li>
										<li><a href="#">협력병원 및 기관</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<div class="btnSns">
						<a href="#" class="blog">Blog</a>
						<a href="#" class="facebook">facebook</a>
						<a href="#" class="youtube">Youtube</a>
						<a href="#" class="kakao">kakao TV</a>
					</div>
					<small class="copy">&copy; 2019 NEW Korea Hospital  All right reserved.</small>
				</nav>
			</div>
		</header>

		<div class="layerSearch">
			<fieldset>
				<legend>검색어 입력</legend>
				<div class="search">
					<input type="text" class="inputTxt" placeholder="입력해 주세요.">
					<button class="btn">검색</button>
				</div>
				<p class="txt">
					뉴고려병원 모바일은 질환 및 치료법을 영상으로 제작하여 더 좋은 의료 정보를 제공하는 영상기반 플랫폼 입니다.<br>
					검색을 통해 필요한 정보를 영상으로 만나보세요.
				</p>
			</fieldset>
			<button type="button" class="btnClose" onclick="$('html').removeClass('searchOn');">검색창 닫기</button>
		</div>