<?php /* Template_ 2.2.8 2023/08/21 13:35:10 /home/hosting_users/nkmed/www/v3/view/info/info16_1.tpl 000007814 */ ?>
<style>
	.tabMenu.drop {
		position: relative;
		border: 0.1rem solid #111;
	}
	.tabMenu.drop p {
		display: block;
		position: relative;
		padding:0 2rem;
		line-height: 4rem;
		color: #666;
		font-size: 1.5rem;
		background: #fff;
	}
	.tabMenu.drop p:after {
		content: "";
		position: absolute;
		top: 50%;
		right: 1rem;
		width: 0.75rem;
		height: 0.75rem;
		border-top: 0.15rem solid #1d366d;
		border-right: 0.15rem solid #1d366d;
		transform: rotate(135deg);
		margin-top: -0.5rem;
	}
	.tabMenu.drop ul {
		overflow: hidden;
		display: block;
		position: absolute;
		top: 4.1rem;
		left: 0;
		width: 100%;
		height: 0;
		border: 1px solid #ddd;
		border-top: 1px solid #fff;
		box-sizing: border-box;
		transition: all .3s;
	}
	.tabMenu.drop ul li {
		border-top: 1px solid #ddd;
		box-sizing: border-box;
	}
	.tabMenu.drop ul li:first-child {
		border-top: none;
	}
	.tabMenu.drop ul li span {
		bottom: 0;
		background-color: #f6f6f6;
	}
	.tabMenu.drop ul li.active span {
		border: none;
	}
	.tabMenu.drop p:hover + ul {
		display: block;
		height: 32.9rem !important;
	}
</style>
<?php $this->print_("infomenu",$TPL_SCP,1);?>

<div class="section">
	<div class="tabMenu drop">
		<p>종합 건강검진</p>
		<ul>
			<li class="active"><a href="/v3/info.php?tab=info16_1"><span>종합 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_2"><span>국가 암 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_3"><span>건강보험공단 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_4"><span>채용 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_5"><span>청소년 종합검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_6"><span>영유아 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_7"><span>특수 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_8"><span>기업체&단체검진</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>종합 건강검진</h2>
		<span class="bar"></span>
		<p>뉴고려병원 평생건강증진센터 <br>종합 건강검진 프로그램을 소개합니다.</p>
	</div>
	<h3 class="subTitle">종합 건강검진 Program</h3>
	<div class="tableType1">
		<table class="center">
			<colgroup>
				<col style="width: 60%;">
				<col>
			</colgroup>
			<tbody>
				<tr>
					<th colspan="2">건강형</th>
				</tr>
				<tr>
					<td>공통항목 + A그룹 선택 2가지</td>
					<td>남자 - 450,000<br>여자 - 500,000</td>
				</tr>
				<tr>
					<th colspan="2">소망형</th>
				</tr>
				<tr>
					<td>공통항목 + A그룹 선택 4가지</td>
					<td>남자 - 550,000<br>여자 - 600,000</td>
				</tr>
				<tr>
					<th colspan="2">믿음형</th>
				</tr>
				<tr>
					<td>기본종합검진 + A선택검사 4종류 + 대장내시경</td>
					<td>남자 - 650,000<br>여자 - 700,000</td>
				</tr>
				<tr>
					<th colspan="2">행복형</th>
				</tr>
				<tr>
					<td>공통항목 + A그룹 선택 4가지 + C그룹 선택 1가지</td>
					<td>남자 - 750,000<br>여자 - 800,000</td>
				</tr>
				<tr>
					<th colspan="2">사랑해</th>
				</tr>
				<tr>
					<td>공통항목 + A그룹 선택 6가지 + C그룹 선택 1가지<br>대장수면내시경 + 심장초음파 + 마스터 유전자</td>
					<td>남자 - 1,500,000<br>여자 - 1,500,000</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br>
	<div class="grayBox text-left">
		<ul>
			<li class="starTxt">소망형/믿음형/행복형 : A그룹 2개 미선택시 B그룹 1개로 대체 가능</li>
			<li class="starTxt">믿음형/행복형 : A그룹 4개 미선택시 C그룹 1개로 대체 가능</li>
			<li class="starTxt">내시경 시 용종 및 조직검사 비용은 별도</li>
			<li class="starTxt">금액과 항목은 변동될 수 있음</li>
		</ul>
	</div>

	<h3 class="subTitle"><small>종합검진 공통항목(90여 항목)</small></h3>
	<div class="tableType1">
		<table>
			<tbody>
				<tr>
					<th align="center">혈액 & 소변(80여종)</th>
				</tr>
				<tr>
					<td>간기능 / 간염 / 순환기계 / 당뇨 / 췌장기능 / 철결핍성 / 빈혈 / 혈액질환 / 전해질 / 신장기능 / 골격계질환 / 감염성 / 갑상선 / 부갑상선기능 / 종양표지자 / 소변 / 생체나이 등</td>
				</tr>
				<tr>
					<th align="center">장비</th>
				</tr>
				<tr>
					<td>신장 / 체중 / 혈압 / 시력 / 청력 / 체성분 / 안압 / 안저 / 위수면내시경 / 심전도 / 흉부 X-ray / 복부(간/담낭/비장/췌장/신장) 초음파 / 자궁경부세포진(여) / 유방촬영(여) – 30세 이상 권장</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h3 class="subTitle"><small>A그룹/B그룹/C그룹</small></h3>
	<div class="tableType1">
		<table>
			<colgroup>
				<col style="width: 20%;">
				<col>
			</colgroup>
			<tbody>
				<tr>
					<th align="center">A그룹</th>
					<td>
						<div class="group-list">
							<p>
								1. 갑상선초음파<br>
								2. 경동맥초음파<br>
								3. 뇌CT<br>
								4. 폐CT<br>
								5. 요추CT<br>
								6. 경추CT<br>
								7. 심장MDCT<br>
								8. 복부비만CT
							</p>
							<p>
								9. 골다공증QCT<br>
								10. 혈관협착도 ABI<br>
								11. NK뷰키트<br>
								12. [여]유방초음파<br>
								13. [여]경질초음파<br>
								14. [여]액상 자궁경부세포진<br>
								15. [여]H.P.V바이러스<br>
								16. [여]여성호르몬
							</p>
							<p>
								17. [남]남성호르몬<br>
								18. 스마트 암 검사 - 난소암<br>
								19. 스마트 암 검사 - 폐암<br>
								20. 스마트 암 검사 - 간암<br>
								21. 스마트 암 검사 - 대장암<br>
								22. 스마트 암 검사 - 췌장암<br>
								23. 비타민D검사
							</p>
						</div>
					</td>
				</tr>
				<tr>
					<th align="center">B그룹</th>
					<td>
						<div class="group-list">
							<p>
								1. 대장수면내시경<br>
								2. 심장초음파<br>
								3. 알레르기 91종 검사
							</p>
						</div>
					</td>
				</tr>
				<tr>
					<th align="center">C그룹</th>
					<td>
						<div class="group-list">
							<div>
								1. 뇌MRA + 뇌MRI<br>
								2. 경추MRI<br>
								3. 요추MRI<br>
								4. 스마트 암 검사 : 폐암/간암/위암/대장암/췌장암/[남]전립선암/[여]유방암/[여]난소암<br>
								<b>5. 마스터 유전자검사(남 23종, 여 25종)</b><br>
								<ul class="hyphenList">
									<li>
										<b style="font-weight: 500;">심뇌혈관질환 : </b>
										<p>뇌졸중 / 관상동맥질환 / 이상지질혈증 / 제2형당뇨병 / 고혈압 / 비만</p>
									</li>
									<li>
										<b style="font-weight: 500;">주요암 :&nbsp;</b> 
										<p>
											갑상선암 / 폐암 / 식도암 / 위암 / 대장암 / 간암 / 담낭담도암 / 췌장암 / 신장암 / 방광암 / <br>
											<span style="color:#006ecd;">[남]전립선암 / [남]고환암 /</span> <span style="color: #f66e74;">[여]유방암 / [여]난소암 / [여]자궁경부암 / [여]자궁내막암</span>
										</p>
									</li>
									<li>
										<b style="font-weight: 500;">주요질환 : </b>
										<p>알츠하이머 치매 / 파킨슨병 / 뇌동맥류 / 심방세동 / 골다공증</p>
									</li>
								</ul>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>