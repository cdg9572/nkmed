
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
		<p>영유아 건강검진</p>
		<ul>
			<li><a href="/v3/info.php?tab=info16_1"><span>종합 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_2"><span>국가 암 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_3"><span>건강보험공단 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_4"><span>채용 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_5"><span>청소년 종합검진</span></a></li>
			<li class="active"><a href="/v3/info.php?tab=info16_6"><span>영유아 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_7"><span>특수 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_8"><span>기업체&단체검진</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>영유아 건강검진</h2>
		<span class="bar"></span>
		<p>
			<b style="font-weight: 500;">영유아 건강검진 사업은 <br>생후 14일부터 71개월(6세 미만)의 영유아들을 대상으로 <br>진행되는 건강검진 프로그램입니다.</b><br>
			영유아 건강검진 사업은 단순히 아이의 신체적 발달을 <br>확인하는 것이 아니라 영유아의 비만, 성장 이상, <br>발달 이상, 안전사고, 시각이나 청각 이상,<br>
			치아우식증, 영아 급사 증후군 등의 <br>발달 및 인지 사항을 종합적으로 확인하는 검사입니다. <br>
			구강검진 3회를 포함하여 검진 시기별로 <br>총 11회 동안 무료로 이루어집니다.<br>
			(*영유아 초기 생후 14~35일 <br>건강검진은 2021년 1월 1일 출생자부터 적용됩니다.)
		</p>
	</div>
	<ul class="rectangle-list" style="grid-template-columns: 1fr;grid-gap: 0;">
		<li style="border-color: #ede7e1;">[ 대상자 ]<br>생후 14일부터 71개월(6세미만)까지의 영유아</li>
	</ul>
	<br>
	<br>
	<div class="tableType1 text-center">
		<table>
			<colgroup>
				<col style="width: 15%;">
				<col>
				<col style="width: 15%;">
				<col>
			</colgroup>
			<thead>
				<tr>
					<th colspan="2">검진시기</th>
					<th colspan="2">항목</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th style="font-weight: 400;">1차</th>
					<td>생후 14일~35일</td>
					<td>건강검진</td>
					<td>문진 및 진찰, 신체계측, 건강교육</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">2차</th>
					<td>생후 4~6개월</td>
					<td>건강검진</td>
					<td>문진 및 진찰, 신체계측, 건강교육</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">3차</th>
					<td>생후 9~12개월</td>
					<td>건강검진</td>
					<td>문진 및 진찰, 신체계측, 발달선별검사 및 상담, 건강교육</td>
				</tr>
				<tr>
					<th rowspan="2" style="font-weight: 400;">4차</th>
					<td>생후 18~24개월</td>
					<td>건강검진</td>
					<td>문진 및 진찰, 신체계측, 발달선별검사 및 상담, 건강교육</td>
				</tr>
				<tr>
					<td>생후 18~29개월</td>
					<td>구강검진</td>
					<td>구강문진 및 진찰, 구강보건교육</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">5차</th>
					<td>생후 30~36개월</td>
					<td>건강검진</td>
					<td>문진 및 진찰, 신체계측, 발달선별검사 및 상담, 건강교육</td>
				</tr>
				<tr>
					<th rowspan="2" style="font-weight: 400;">6차</th>
					<td>생후 42~48개월</td>
					<td>건강검진</td>
					<td>문진 및 진찰, 신체계측, 발달선별검사 및 상담, 건강교육</td>
				</tr>
				<tr>
					<td>생후 42~53개월</td>
					<td>구강검진</td>
					<td>구강문진 및 진찰, 구강보건교육</td>
				</tr>
				<tr>
					<th rowspan="2" style="font-weight: 400;">7차</th>
					<td>생후 54~60개월</td>
					<td>건강검진</td>
					<td>문진 및 진찰, 신체계측, 발달선별검사 및 상담, 건강교육</td>
				</tr>
				<tr>
					<td>생후 54~65개월</td>
					<td>구강검진</td>
					<td>구강문진 및 진찰, 구강보건교육</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">8차</th>
					<td>생후 66~71개월</td>
					<td>건강검진</td>
					<td>문진 및 진찰, 신체계측, 발달선별검사 및 상담, 건강교육</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h3 class="subTitle">건강검진</h3>
	<div class="tableType1">
		<table>
			<colgroup>
				<col style="width:30%;">
				<col>
			</colgroup>
			<tbody>
				<tr>
					<th>문진 및 진찰</th>
					<td>시각문진, 청각문진, 진찰 및 상담</td>
				</tr>
				<tr>
					<th>신체계측</th>
					<td>키, 몸무게, 머리둘레</td>
				</tr>
				<tr>
					<th>시력검사</th>
					<td>공인시력표 시력검사</td>
				</tr>
				<tr>
					<th>발달평가</th>
					<td>K-DST(발달선별검사)</td>
				</tr>
				<tr>
					<th>건강교육</th>
					<td>안전, 영양, 수면, 구강, 대소변가리기, 정서 및 사회성, 위생</td>
				</tr>
			</tbody>
		</table>
	</div>

	<h3 class="subTitle">구강검진</h3>
	<div class="tableType1">
		<table>
			<colgroup>
				<col style="width:35%;">
				<col>
			</colgroup>
			<tbody>
				<tr>
					<th>구강문진 및 진찰</th>
					<td>문진표, 진찰표<br>(치아검사, 치주조직검사)</td>
				</tr>
				<tr>
					<th>구강보건교육</th>
					<td>매뉴얼을 이용한 보호자 및 유아교육</td>
				</tr>
			</tbody>
		</table>
	</div>

	<br>
	<br>
	<div class="cont-box">
		<label class="cont-label">
			영유아 건강검진 절차 및 결과 통보
		</label>
		<div class="cont">
			<p>
				영유아건강검진의 절차는 우선 건강보험관리공단으로부터 검진 대상자 확인서를 우편으로 수령한 후, 아이의 생년월일에 따른 검진 기간을 확인해야 합니다.<br>
				그리고 집에서 가까운 검진기관을 확인하여 미리 해당 기관에 예약을 한 후, 문진표를 다운로드해 작성하여 검진 당일에 가져가시면 됩니다. 예약 당일 기관을 방문하여 검진을 받으시고, 영유아건강검진의 결과 통보서는 검진 완료 후 보호자에게 직접 통보됩니다.
			</p>
		</div>
	</div>
	<div class="cont-box">
		<label class="cont-label">영유아 건강검진 팁</label>
		<div class="cont" style="font-weight: 300;">
			<p style="margin-bottom:10px;font-weight: 500;">1) 영유아 검진 전 병원에 문의하기</p>
			<p style="margin-left: 22px;">
				영유아 검진 전에 먼저 검진을 시행할 의료기관에 미리 전화해서 관련 내용을 확인하시는 것이 좋습니다. 병원에 따라서 운영은 월요일부터 토요일까지 진행하더라도 검진은 특수 요일에만 하는 곳도 있기 때문에 검진 관련 운영 시간을 미리 확인하시는 것이 좋습니다. 또 기관에 따라 사전예약이 가능 한곳도 있고, 그렇지 않은 곳도 있기 때문에 그 부분도 정확히 알아 두시는 것이 도움이 됩니다.
			</p>
			<br>
			<hr style="margin:0;">
			<br>
			<p style="margin-bottom:10px;font-weight: 500;">2) 묻고 싶었던 특이 증상은 미리 정리해 놓기</p>
			<p style="margin-left: 22px;">
				검진 전에 평소 궁금했거나 묻고 싶었던 아이에 관한 특이 증상은 미리 정리하여 메모를 하는 것이 좋습니다. 아이의 성장이나 발달에 관한 부분, 이유식이나 밤중 수유와 같은 생활적인 부분, 신체적 특이사항 등 확실하게 알아 두고 싶었던 부분들을 미리 정리하여 검진 당일 문진 시 질문을 하시면 확실하게 체크가 가능합니다.
			</p>
			<br>
			<hr style="margin:0;">
			<br>
			<p style="margin-bottom:10px;font-weight: 500;">3) 문진표 미리 작성 및 신중하게 증상 체크하기</p>
			<p style="margin-left: 22px;">
				문진표를 검진 당일 병원에서 작성하려고 하면 은근히 까다롭게 느껴 지실 수 있고, 많은 대기 손님 때문에 정신이 없어 집중을 하기가 어려울 수 있습니다. <br>
				그래서 문진표는 검진 전에 미리 작성하시는 것이 수월하실 거예요. 또 문진표를 작성할 때에는 신중하게 해당사항을 확인하고 체크하셔야 보다 정확한 검사 결과를 받으실 수 있습니다.
			</p>
		</div>
	</div>
</div>