<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>21C Hana Medical Clinic</title>
<link rel="stylesheet" type="text/css" href="jquery-mobile/jquery.mobile.theme-1.4.5.min.css">
<link rel="stylesheet" type="text/css" href="jquery-mobile/jquery.mobile.structure-1.4.5.css">
<link rel="stylesheet" type="text/css" href="jquery-mobile/jquery.mobile.inline-svg-1.4.5.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="jquery-mobile/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
</head>

<body>
<div data-role="page" id="home">
	<div data-role="header" data-position="fixed" data-tap-toggle="false">
		<h1><a href="index.php" class="head_title"><img src="images/logoFull.png" height="30" alt="21세기하나내과의원 로고"/></a></h1>
		<a href="login.php" class="ui-btn ui-btn-right ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-power">Logout</a>
	</div>
	<div data-role="content" class="homeBG">
		<p class="ment_z">최고의 의료진들이 모여<br/><span style="font-size:1.2em;"><span style="color:#237CC5;">고객의 건강</span>만을</span><br/><span style="font-size:1.2em;">최우선으로 생각합니다.</span></p>
		<div class="user_info">
			<h2>수검자 정보</h2>
			<table width="100%">
				<tr>
					<th width="100">단체명</th>
					<td>(주) 율도국</td>
				</tr>
				<tr>
					<th>성함</th>
					<td>홍길동</td>
				</tr>
				<tr>
					<th>생년월일</th>
					<td>870727</td>
				</tr>
				<tr>
					<th>검진일</th>
					<td>20160109</td>
				</tr>
				<tr>
					<th>연락처</th>
					<td>010-5432-9876</td>
				</tr>
				<tr>
					<th>부서(코드)</th>
					<td></td>
				</tr>
			</table>
		</div>
		
		<h2 class="h2_title">국가5대암검진 목록</h2>
		<ul data-role="listview" data-inset="true" class="cataBox">
			<li><a href="catapage01.php" data-ajax="false">
				<img src="images/cata_icon_01.png" alt="전문의 종합 진단 소견"/>
				<h2>전문의 종합 진단 소견</h2>
				<p>전문의 종합 진단 소견</p></a>
			</li>
			<li><a href="catapage16.php" data-ajax="false">
				<img src="images/cata_icon_01s.png" alt="계측검사"/>
				<h2>계측검사</h2>
				<p>비만, 고혈압, 시각이상, 청각이상</p></a>
			</li>
			<li><a href="catapage29.php" data-ajax="false">
				<img src="images/cata_icon_02.png" alt="혈액 검사"/>
				<h2>혈액 검사</h2>
				<p>빈혈, 당뇨병, 이상지질혈증, 신장질환, 간장질환</p></a>
			</li>
			<li><a href="catapage17.php" data-ajax="false">
				<img src="images/cata_icon_21.png" alt="요검사"/>
				<h2>요검사</h2>
				<p>신장질환</p></a>
			</li>
			<li><a href="catapage18.php" data-ajax="false">
				<img src="images/cata_icon_07.png" alt="영상"/>
				<h2>영상</h2>
				<p>폐결핵, 흉부질환</p></a>
			</li>
			<li><a href="catapage19.php" data-ajax="false">
				<img src="images/cata_icon_17.png" alt="진찰 문진표"/>
				<h2>진찰 문진표</h2>
				<p>과거병력진단, 생활습관, 일반상태</p></a>
			</li>
			<li><a href="catapage20.php" data-ajax="false">
				<img src="images/cata_icon_18.png" alt="건강위험"/>
				<h2>건강위험 평가결과</h2>
				<p>건강위험요인 알아보기, 조절하기, 인지기능장애</p></a>
			</li>
			<li><a href="catapage21.php" data-ajax="false">
				<img src="images/cata_icon_11.png" alt="위암 검진"/>
				<h2>위암 검진결과</h2>
				<p>위내시경검사, 심전도검사</p></a>
			</li>
			<li><a href="catapage22.php" data-ajax="false">
				<img src="images/cata_icon_16.png" alt="대장암 검진"/>
				<h2>대장암 검진결과</h2>
				<p>대변잠혈검사</p></a>
			</li>
			<li><a href="catapage23.php" data-ajax="false">
				<img src="images/cata_icon_08.png" alt="간암 검진"/>
				<h2>간암 검진결과</h2>
				<p>상반기, 하반기</p></a>
			</li>
			<li><a href="catapage24.php" data-ajax="false">
				<img src="images/cata_icon_19.png" alt="유방암 검진"/>
				<h2>유방암 검진결과</h2>
				<p>방사선 유방촬영 검사</p></a>
			</li>
			<li><a href="#" data-ajax="false">
				<img src="images/cata_icon_15.png" alt="기타 추가 검사"/>
				<h2>기타 추가 검사</h2>
				<p>종합검진 안내 페이지 이동</p></a>
			</li>
			<li><a href="#" data-ajax="false">
				<img src="images/cata_icon_20.png" alt="구강검진"/>
				<h2>구강검진</h2>
				<p>치과 안내 및 검사 공고</p></a>
			</li>
			<li><a href="#" data-ajax="false">
				<img src="images/cata_icon_12.png" alt="자궁경부암"/>
				<h2>자궁경부암 검진</h2>
				<p>산부인과 안내 및 검사 공고</p></a>
			</li>
		</ul>
		
	</div>
	<div data-role="footer">
		<p>전남 목포시  상동 828번지 | 상담전화 : 061-280-2800<br/>COPYRIGHT (C) 21세기하나내과의원</p>
	</div>
</div>

</body>
</html>