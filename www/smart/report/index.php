<meta http-equiv="refresh" content="0;http://sfict.co.kr/21chana/index.html"> 
<? exit; ?>



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
		
		<h2 class="h2_title">검진 목록</h2>
		<ul data-role="listview" data-inset="true" class="cataBox">
			<li><a href="catapage01.php" data-ajax="false">
				<img src="images/cata_icon_01.png" alt="전문의 종합 진단 소견"/>
				<h2>전문의 종합 진단 소견</h2>
				<p>전문의 종합 진단 소견, 신장, 체중, 비만도, 혈압, 맥박, 청력, 시력 검사등...</p></a>
			</li>
			<li><a href="catapage01s.php" data-ajax="false">
				<img src="images/cata_icon_01s.png" alt="기초검사"/>
				<h2>기초검사</h2>
				<p>신장, 체중, 비만도, 혈압, 맥박, 청력, 시력 검사등...</p></a>
			</li>
			<li><a href="catapage02.php" data-ajax="false">
				<img src="images/cata_icon_02.png" alt="혈액 일반검사"/>
				<h2>혈액 일반검사</h2>
				<p>혈액형 검사, 혈액 질환 검사, 관절염, 성병, 종양 표지자 검사</p></a>
			</li>
			<li><a href="catapage04.php" data-ajax="false">
				<img src="images/cata_icon_04.png" alt="갑상선 검사"/>
				<h2>갑상선 기능 혈액검사</h2>
				<p>갑상선 검사, 초음파</p></a>
			</li>
			<li><a href="catapage09.php" data-ajax="false">
				<img src="images/cata_icon_09.png" alt="심혈관계질환 검사"/>
				<h2>심혈관계질환 검사</h2>
				<p>고지혈증, 심전도, 초음파, CT</p></a>
			</li>
			<li><a href="catapage07.php" data-ajax="false">
				<img src="images/cata_icon_07.png" alt="호흡기 검사"/>
				<h2>호흡기 검사</h2>
				<p>폐기능검사, 흉부 단순 촬영, 폐CT</p></a>
			</li>
			<li><a href="catapage05.php" data-ajax="false">
				<img src="images/cata_icon_05.png" alt="췌장 검사"/>
				<h2>췌장 검사</h2>
				<p>췌장기능, 초음파, 혈당검사</p></a>
			</li>
			<li><a href="catapage08.php" data-ajax="false">
				<img src="images/cata_icon_08.png" alt="간/담도계 검사"/>
				<h2>간/담도계 검사</h2>
				<p>간기능검사, 간암표지자, 건염검사, 초음파</p></a>
			</li>
			<li><a href="catapage11.php" data-ajax="false">
				<img src="images/cata_icon_11.png" alt="위장관 검사"/>
				<h2>위장관 검사</h2>
				<p>내시경, 대변검사, 조직검사 및 헬리코박터 검사</p></a>
			</li>
			<li><a href="catapage06.php" data-ajax="false">
				<img src="images/cata_icon_06.png" alt="신장/요로계 기능검사"/>
				<h2>신장/요로계 기능검사</h2>
				<p>신장기능, 신장 초음파, 소변검사</p></a>
			</li>
			<li><a href="catapage10.php" data-ajax="false">
				<img src="images/cata_icon_10.png" alt="남성 전립선 검사"/>
				<h2>남성 전립선 검사</h2>
				<p>전립선 암, 전립선초음파, CA-125</p></a>
			</li>
			<li><a href="catapage12.php" data-ajax="false">
				<img src="images/cata_icon_12.png" alt="여성 유방 검사"/>
				<h2>여성 유방 검사</h2>
				<p>흉부 단순 촬영, 초음파</p></a>
			</li>
			<li><a href="catapage13.php" data-ajax="false">
				<img src="images/cata_icon_13.png" alt="뇌 혈관 검사"/>
				<h2>뇌질환 및 뇌혈관 검사</h2>
				<p>뇌 정밀 CT, 뇌정밀 MRI</p></a>
			</li>
			<li><a href="catapage14.php" data-ajax="false">
				<img src="images/cata_icon_14.png" alt="척추 검사"/>
				<h2>척추 검사</h2>
				<p>요추, 경추</p></a>
			</li>
			<li><a href="catapage15.php" data-ajax="false">
				<img src="images/cata_icon_15.png" alt=""/>
				<h2>기타 장비검사</h2>
				<p>체성분검사, 골밀도검사, 트레드 밀, 24H혈압계, 홀터검사</p></a>
			</li>
		</ul>
		
	</div>
	<div data-role="footer">
		<p>전남 목포시  상동 828번지 | 상담전화 : 061-280-2800<br/>COPYRIGHT (C) 21세기하나내과의원</p>
	</div>
</div>

</body>
</html>