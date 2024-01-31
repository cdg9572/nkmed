
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
		<p>청소년 종합검진</p>
		<ul>
			<li><a href="/v3/info.php?tab=info16_1"><span>종합 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_2"><span>국가 암 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_3"><span>건강보험공단 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_4"><span>채용 건강검진</span></a></li>
			<li class="active"><a href="/v3/info.php?tab=info16_5"><span>청소년 종합검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_6"><span>영유아 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_7"><span>특수 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_8"><span>기업체&단체검진</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>청소년 종합검진</h2>
		<span class="bar"></span>
		<p>
			현대사회 청소년 건강문제가 <br>심각한 사회문제로 이어지고 있습니다.<br>
			특히 학업에 열중하다 보니 <br>앉아서 생활하는 시간이 늘어나 <br>비만율이 점차 증가하고 있고 척추측만증이나 만성피로, <br>우울증 등의 다양한 질환들이 동반되기도 하는데요.<br>
			청소년기 아이들의 건강을 지키고 체크하기 위해 <br>종합 검진을 시행하고 있습니다.
		</p>
	</div>

	<div class="tableType1">
		<table>
			<colgroup>
				<col style="width: 15%;">
				<col>
				<col>
			</colgroup>
			<thead>
				<tr>
					<th>검사항목</th>
					<th>세부항목</th>
					<th>관련질환</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th style="font-weight: 400;">기초신체계측</th>
					<td>문진, 신장, 체중, 혈압, 비만도, 청력</td>
					<td>과거 병력 및 기초 체위검사</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">혈액질환검사</th>
					<td>적혈구백분율, 혈색소, 백혈구, 적혈구, 혈소판, 중성구, <br>임파구, 단핵구, 호산구, 호염기성구</td>
					<td>빈혈, 백혈구, 급성감염증, 다혈증, 출혈성질환, 급만성염증, <br>바이러스감염, 알레르기성질환</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">간기능검사</th>
					<td>AST, ALT, r-GTP, 총단백, 알부민, 총빌리루빈</td>
					<td>간질환, 간경화, 황달, 담당/담도질환, 폐쇄성황달, 골수염, <br>용혈성질환, 만성간장애, 골수증, 영양결핍, 신장염</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">소변검사</th>
					<td>백혈구, 아질산염, PH, 요단백, 요당, 케톤바디, 유로빌리노겐, <br>빌리루빈, 요중적혈구, 요중백혈구, 요중결정체</td>
					<td>요로감염증, 당뇨병, 간장애, 황달, 담도질환, 신장질환, 요로염증, <br>방광염 등</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">심혈관계검사</th>
					<td>총콜레스테롤, 중성지방(TG), 고밀도 및 저밀도 콜레스테롤</td>
					<td>고지혈증, 동맥경화, 만성간장애, 심근경색, 허혈성질환</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">당뇨검사</th>
					<td>혈당(식전)</td>
					<td>당뇨병</td>
				</tr>
				<tr>
					<th rowspan="2" style="font-weight: 400;">신장기능검사</th>
					<td>요소질소(BUN), 크레아티닌</td>
					<td>신기능장애, 신부전, 신장염</td>
				</tr>
				<tr>
					<td>나트륨, 칼륨, 염소</td>
					<td>탈수증, 설사, 급/만성신부전, 요독증</td>
				</tr>
				<tr>
					<th rowspan="3" style="font-weight: 400;">A형, B형 간염검사</th>
					<td>HAV Ab(lgG)</td>
					<td>A형간염 항체 형성 여부</td>
				</tr>
				<tr>
					<td>HBs Ag(EIA)</td>
					<td>B형간염 감염여부</td>
				</tr>
				<tr>
					<td>HBs Ab(EIA)</td>
					<td>B형간염 항체 형성 여부</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">체성분검사</th>
					<td>체성분 / 영양상담</td>
					<td>비만, 체지방, 체수분, 부종, 체형관리, 근육발달 및 영양평가</td>
				</tr>
				<tr>
					<th style="font-weight: 400;">흉부방사선</th>
					<td>흉부 X선 검사</td>
					<td>폐결핵, 흉부질환</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>