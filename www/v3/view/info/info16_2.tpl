
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
		height: 32.9rem;
	}
</style>
{#infomenu}
<div class="section">
	<div class="tabMenu drop">
		<p>국가 암 검진</p>
		<ul>
			<li><a href="/v3/info.php?tab=info16_1"><span>종합 건강검진</span></a></li>
			<li class="active"><a href="/v3/info.php?tab=info16_2"><span>국가 암 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_3"><span>건강보험공단 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_4"><span>채용 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_5"><span>청소년 종합검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_6"><span>영유아 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_7"><span>특수 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_8"><span>기업체&단체검진</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>국가 암 검진</h2>
		<span class="bar"></span>
		<p>
			암은 우리나라 사망 원인 1위를 차지할 정도로 <br>위험한 질환입니다.<br>
			따라서 조기에 발견하여 치료하기 위해 <br>정기적으로 검진을 받는 것이 중요합니다.<br>
			<b style="font-weight: 500;">뉴고려병원 6대 국가 암 검진 프로그램을 소개합니다.</b>
		</p>
	</div>
	<h3 class="subTitle">국가 암 검진 Program</h3>
	<div class="tableType1">
		<table>
			<colgroup>
				<col style="width: 15%;">
				<col>
				<col style="width: 15%;">
				<col>
			</colgroup>
			<thead>
				<tr>
					<th>암종</th>
					<th>검진대상</th>
					<th>검진주기</th>
					<th>검진방법</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td align="center" style="font-weight: 500;">위암</td>
					<td>40세 이상 남녀</td>
					<td align="center">2년</td>
					<td>위 내시경 검사</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: 500;">간암</td>
					<td>40세 이상 남녀 / 간암발생 고위험군</td>
					<td align="center">6개월</td>
					<td>간초음파검사 + 혈청알파태아단백검사</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: 500;">대장암</td>
					<td>50세 이상 남녀</td>
					<td align="center">1년</td>
					<td>분별잠혈검사 : 이상소견 시 대장내시경검사</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: 500;">유방암</td>
					<td>40세 이상 여성</td>
					<td align="center">2년</td>
					<td>유방촬영술</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: 500;">자궁경부암</td>
					<td>20세 이상 여성</td>
					<td align="center">2년</td>
					<td>자궁경부세포검사</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: 500;">폐암</td>
					<td>54세 이상 74세 이하의 남녀 폐암 발생 고위험군</td>
					<td align="center">2년</td>
					<td>저선량흉부 CT</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h3 class="subTitle"><small>암 예방 생활 수칙</small></h3>
	<ul class="img-list">
		<li>
			<img src="/resource-pc/images/service-152-2.png" alt="">
			<p>금연</p>
		</li>
		<li>
			<img src="/resource-pc/images/service-152-3.png" alt="">
			<p>금주</p>
		</li>
		<li>
			<img src="/resource-pc/images/service-152-4.png" alt="">
			<p>올바른 식습관</p>
		</li>
		<li>
			<img src="/resource-pc/images/service-152-5.png" alt="">
			<p>주기적인 운동</p>
		</li>
		<li>
			<img src="/resource-pc/images/service-152-6.png" alt="">
			<p>체중 조절</p>
		</li>
	</ul>
</div>