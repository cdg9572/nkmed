
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
		<p>채용 건강검진</p>
		<ul>
			<li><a href="/v3/info.php?tab=info16_1"><span>종합 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_2"><span>국가 암 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_3"><span>건강보험공단 검진</span></a></li>
			<li class="active"><a href="/v3/info.php?tab=info16_4"><span>채용 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_5"><span>청소년 종합검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_6"><span>영유아 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_7"><span>특수 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_8"><span>기업체&단체검진</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>채용 건강검진</h2>
		<span class="bar"></span>
		<p>
			채용 전 근로자의 질병을 조기에 발견하여 <br>적절한 치료와 발병 위해 요인을 사전에 감소시켜<br>
			직장에서 근무할 수 있도록 하기 위해서 <br>건강검진을 실시하고 있습니다.
		</p>
	</div>
	<h3 class="subTitle"><small>발급 종류</small></h3>
	<ul class="rectangle-list">
		<li>일반회사 <br>채용</li>
		<li>공무원/교직원 <br>채용</li>
		<li>유학/이민관련서류 <br>발급용</li>
		<li>이/미용사/조리사 <br>자격증 발급용</li>
		<li>의료기사면허증 <br>발급용</li>
		<li>국제결혼용 <br>건강진단</li>
		<li>총포소지 <br>신체검사</li>
		<li>외국인 <br>취업 검진</li>
		<li>보건증/운전면허 <br>적성검사</li>
	</ul>

	<h3 class="subTitle"><small>검사항목</small></h3>
	<div class="tableType1">
		<table class="center">
			<tbody>
				<tr>
					<th style="font-weight: 400;">기초신체계측</th>
				</tr>
				<tr>
					<td>신장, 체중, 청력, 시력, 색신, 흉위, 혈압</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">혈액검사</th>
				</tr>
				<tr>
					<td>혈당, 고지혈증, 간기능, 빈혈, <br>B형간염항원/항체, 성병검사</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">소변검사</th>
				</tr>
				<tr>
					<td>요PH, 요단백, 요잠혈, 요당</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">흉부 X선 검사</th>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">의사문진 및 진찰</th>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>