<?php /* Template_ 2.2.8 2023/08/09 17:17:36 /home/hosting_users/nkmed/www/v3/view/info/info16_7.tpl 000017472 */ ?>
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
<?php $this->print_("infomenu",$TPL_SCP,1);?>

<div class="section">
	<div class="tabMenu drop">
		<p>특수 건강검진</p>
		<ul>
			<li><a href="/v3/info.php?tab=info16_1"><span>종합 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_2"><span>국가 암 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_3"><span>건강보험공단 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_4"><span>채용 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_5"><span>청소년 종합검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_6"><span>영유아 건강검진</span></a></li>
			<li class="active"><a href="/v3/info.php?tab=info16_7"><span>특수 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_8"><span>기업체&단체검진</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>특수 건강검진</h2>
		<span class="bar"></span>
		<p>
			작업환경에서 유해인자에 노출되는 근로자에게 실시하는 건강검진입니다.<br>
			직업병을 조기 발견하여 직업성 질환을 예방하고 근로자의 건강을 증진시키는 것이 목적입니다.
		</p>
	</div>
	<h3 class="cont-tit">특수 건강검진 종류</h3>
	<div class="cont-box">
		<label class="cont-label">특수(정기)건강검진</label>
		<div class="cont">
			<p>배치 전 건강진단을 실시한 날로부터 유해인자 별로 정해져 있는 시기에 첫번째 특수 건강진단을 실시합니다. 이후 정해진 주기에 따라 정기적으로 실시합니다.</p>
			<br>
			<div class="tableType1">
				<table>
					<colgroup>
						<col style="width:10%;">
						<col>
						<col style="width:20%;">
						<col style="width:15%;">
					</colgroup>
					<thead>
						<tr>
							<th>구분</th>
							<th>대상 유해인자</th>
							<th>배치 후 첫번째 특수건강진단</th>
							<th>주기</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>1</th>
							<td>N, N-디메틸아세트아미드, N, N-디메틸포름아미드</td>
							<td align="center">1개월 이내</td>
							<td align="center">6개월</td>
						</tr>
						<tr>
							<th>2</th>
							<td>벤젠</td>
							<td align="center">2개월 이내</td>
							<td align="center">6개월</td>
						</tr>
						<tr>
							<th>3</th>
							<td>1, 1, 2, 2-테트라클로로에탄, 사염화탄소, 아크릴로니트릴, 염화비닐</td>
							<td align="center">3개월 이내</td>
							<td align="center">6개월</td>
						</tr>
						<tr>
							<th>4</th>
							<td>석면, 면분진</td>
							<td align="center">12개월 이내</td>
							<td align="center">12개</td>
						</tr>
						<tr>
							<th>5</th>
							<td>광물성 분진, 나무 분진, 소음 및 충격소음</td>
							<td align="center">12개월 이내</td>
							<td align="center">24개월</td>
						</tr>
						<tr>
							<th>6</th>
							<td>산업 보건법 시행규칙 별표12의 2에서 정한 179종의 유해인자</td>
							<td align="center">6개월 이내</td>
							<td align="center">12개월</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="cont-box">
		<label class="cont-label">배치 전 건강진단</label>
		<div class="cont" style="font-weight: 300;">
			<p>
				특수건강진단 대상 업무에 종사할 근로자에 대하여 배치 예정 업무에 대한 적합성 평가를 위해 사업주가 실시하는 건강진단입니다. 
				사업주는 해당 작업에 배치하기 전에 배치 전 건강진단을 실시하여야 하고, 특수건강진단기관에 해당근로자가 담당할 업무나 배치하려는 작업장의 특수건강진단 대상 유해인자 등 관련정보를 미리 알려주어야 합니다.
			</p>
		</div>
	</div>
	<div class="cont-box">
		<label class="cont-label">수시 건강진단</label>
		<div class="cont" style="font-weight: 300;">
			<p>
				특수건강진단 대상업무로 인하여 해당 유해인자에 의한 직업성 천식, 직업성 피부염, 그 밖에 건강장해를 의심하게 하는 증상을 보이거나 의학적 소견이 있는 근로자에 대하여 사업주가 실시하는 건강진단입니다.
			</p>
		</div>
	</div>
	<div class="cont-box">
		<label class="cont-label">임시 건강진단</label>
		<div class="cont" style="font-weight: 300;">
			<p>
				특수건강진단 대상 유해인자, 기타 유해인자에 의한 중독의 여부, 질병의 이완여부 또는 질병의 발생원인 등을 확인하기 위하여 지방고용노동관서장의 명령에 따라 사업주가 실시하는 건강검진입니다. 
				동일부서에서 근무하는 근로자 또는 동일한 유해인자에 노출되는 근로자에게 유사한 질병의 자∙타각증상이 발생한 경우 실시합니다.
			</p>
		</div>
	</div>

	<h3 class="cont-tit">특수 건강검진 건강관리 구분 판정 및 적합 여부 평가</h3>
	<div class="cont-box">
		<label class="cont-label">건강관리구분 판정</label>
		<div class="cont" style="font-weight: 300;">
			<div class="tableType1">
				<table>
					<colgroup>
						<col style="width: 15%;">
						<col style="width: 11%;">
						<col style="width: 11%;">
						<col>
					</colgroup>
					<tbody>
						<tr>
							<th rowspan="6">건강관리구분</th>
							<th colspan="2" style="background-color: #fff;border-right: 1px solid #ddd;">A</th>
							<td>건강관리 상 사후관리가 필요 없는 근로자(건강한 근로자)</td>
						</tr>
						<tr>
							<th rowspan="2" style="background-color: #fff;">C</th>
							<th style="background-color: #fff;border-right: 1px solid #ddd;">C1</th>
							<td>직업성 질병으로 진전될 우려가 있어 추적검사 등 관찰이 필요한 근로자 (직업병 요관찰자)</td>
						</tr>
						<tr>
							<th style="background-color: #fff;">C2</th>
							<td>일반질병으로 진전될 우려가 있어 추적관찰이 필요한 근로자 (일반질병 요관찰자)</td>
						</tr>
						<tr>
							<th colspan="2" style="background-color: #fff;">D1</th>
							<td>직업성 질병의 소견을 보여 사후관리가 필요한 근로자 (직업병 유소견자)</td>
						</tr>
						<tr>
							<th colspan="2" style="background-color: #fff;">D2</th>
							<td>일반 질병의 소견을 보여 사후관리가 필요한 근로자 (일반질병 유소견자)</td>
						</tr>
						<tr>
							<th colspan="2" style="background-color: #fff;">R</th>
							<td>건강진단 1차 검사결과 건강수준의 평가가 곤란하거나 질병이 의심되는 근로자 (제2차건강진단 대상자)</td>
						</tr>
					</tbody>
				</table>
			</div>
			<ul class="important-list">
				<li>
					“U”는 2차건강진단대상임을 통보하고 10일을 경과하여 해당 검사가 이루어지지 않아 건강관리구분을 판정할 수 없는 근로자 “U”로 분류한 경우에는 해당 근로자의 퇴직, 기한내 미 실시 등 2차 건강진단의 해당 검사가 이루어지지 않은 사유를 산업안전보건법 시행규칙 제105조제3항에 따른 건강진단결과표의 사후관리소견서 검진소견란에 기재하여야 함.
				</li>
				<li>
					건강관리구분 “A”란 건강진단결과, 이상소견이 전혀 없거나 경미한 이상소견은 있지만 건강관리상 사후관리가 필요 없는 자를 말함.
				</li>
			</ul>
		</div>
	</div>
	<div class="cont-box">
		<label class="cont-label">
			건강관리구분 판정 (야간작업)
		</label>
		<div class="cont" style="font-weight: 300;">
			<div class="tableType1">
				<table>
					<colgroup>
						<col style="width: 15%;">
						<col style="width: 11%;">
						<col style="width: 11%;">
						<col>
					</colgroup>
					<tbody>
						<tr>
							<th rowspan="6">건강관리구분</th>
							<th colspan="2" style="background-color: #fff;border-right: 1px solid #ddd;">A</th>
							<td>건강관리 상 사후관리가 필요 없는 근로자(건강한 근로자)</td>
						</tr>
						<tr>
							<th rowspan="2" style="background-color: #fff;">C</th>
							<th style="background-color: #fff;border-right: 1px solid #ddd;">C1</th>
							<td>직업성 질병으로 진전될 우려가 있어 추적검사 등 관찰이 필요한 근로자 (직업병 요관찰자)</td>
						</tr>
						<tr>
							<th style="background-color: #fff;">C2</th>
							<td>일반질병으로 진전될 우려가 있어 추적관찰이 필요한 근로자 (일반질병 요관찰자)</td>
						</tr>
						<tr>
							<th colspan="2" style="background-color: #fff;">D1</th>
							<td>직업성 질병의 소견을 보여 사후관리가 필요한 근로자 (직업병 유소견자)</td>
						</tr>
						<tr>
							<th colspan="2" style="background-color: #fff;">D2</th>
							<td>일반 질병의 소견을 보여 사후관리가 필요한 근로자 (일반질병 유소견자)</td>
						</tr>
						<tr>
							<th colspan="2" style="background-color: #fff;">R</th>
							<td>건강진단 1차 검사결과 건강수준의 평가가 곤란하거나 질병이 의심되는 근로자 (제2차건강진단 대상자)</td>
						</tr>
					</tbody>
				</table>
			</div>
			<ul class="important-list">
				<li>
					“U”는 2차건강진단대상임을 통보하고 10일을 경과하여 해당 검사가 이루어지지 않아 건강관리구분을 판정할 수 없는 근로자 “U”로 분류한 경우에는 해당 근로자의 퇴직, 기한내 미 실시 등 2차 건강진단의 해당 검사가 이루어지지 않은 사유를 산업안전보건법 시행규칙 제105조제3항에 따른 건강진단결과표의 사후관리소견서 검진소견란에 기재하여야 함.
				</li>
				<li>
					건강관리구분 “A”란 건강진단결과, 이상소견이 전혀 없거나 경미한 이상소견은 있지만 건강관리상 사후관리가 필요 없는 자를 말함.
				</li>
			</ul>
		</div>
	</div>
	<div class="cont-box">
		<label class="cont-label">
			업무수행 적합 여부 평가
		</label>
		<div class="cont" style="font-weight: 300;">
			<div class="tableType1">
				<table>
					<colgroup>
						<col style="width: 11%;">
						<col>
					</colgroup>
					<tbody>
						<tr>
							<th>가</th>
							<td>건강관리상 현재의 조건하에서 작업이 가능한 경우</td>
						</tr>
						<tr>
							<th>나</th>
							<td>일정한 조건(환경개선, 보호구 착용, 건강진단의 주기를 앞당기는 경우 등)하에서 현재의 작업이 가능한 경우</td>
						</tr>
						<tr>
							<th>다</th>
							<td>건강장해가 우려되어 한시적으로 현재의 작업을 할 수 없는 경우 (건강상 또는 근로조건 상의 문제를 해결한 후 작업복귀 가능)</td>
						</tr>
						<tr>
							<th>라</th>
							<td>건강장해의 악화 혹은 영구적인 장해의 발생이 우려되어 현재의 작업을 해서는 안 되는 경우</td>
						</tr>
					</tbody>
				</table>
			</div>
			<ul class="important-list">
				<li>
					“일정한 조건”이란 환경개선, 보호구 착용, 건강진단의 주기를 앞당기는 경우 등을 말한다.
				</li>
				<li>
					업무수행 적합 여부 평가 시 고려해야 될 건강상태에서는 개인의 건강상태 및 노출정도에 따라 평가구분 "나, 다, 라" 중 어느 하나로 판정한다.
				</li>
			</ul>
		</div>
	</div>

	<h3 class="cont-tit">특수 건강검진 조직도</h3>
	<div class="cont-box">
		<div class="cont">
			<img src="/resource-pc/images/service-157-2.png" alt="" width="100%">
		</div>
	</div>

	<h3 class="cont-tit">특수 건강검진 문의</h3>
	<div class="cont-box">
		<div class="cont">
			<div class="tableType1">
				<table>
					<colgroup>
						<col style="width: 18%;">
						<col>
						<col>
						<col style="width: 18%;">
						<col style="width: 40%;">
					</colgroup>
					<thead>
						<th>부서명</th>
						<th>팀명</th>
						<th>성명</th>
						<th>전화번호</th>
						<th>담당업무</th>
					</thead>
					<tbody>
						<tr>
							<td align="center">검진의료정보팀</td>
							<td align="center">특수검진팀</td>
							<td align="center">김민선</td>
							<td align="center">070-5083-1819</td>
							<td>
								<dl class="dash-list" style="margin-bottom: 0;">
									<dd>특수건강진단 사전조사 및 실시계획서 작성, 특수 건강검진 예약안내</dd>
									<dd>특수건강진단 사업장 비용 청구</dd>
									<dd>심층건강진단 담당</dd>
								</dl>
							</td>
						</tr>
						<tr>
							<td align="center">검진의료정보팀</td>
							<td align="center">특수검진팀</td>
							<td align="center">권예진</td>
							<td align="center">070-5083-1794</td>
							<td>
								<dl class="dash-list" style="margin-bottom: 0;">
									<dd>특수건강진단 사전조사 및 실시계획서 작성, 특수 건강검진 예약안내</dd>
									<dd>특수건강진단 결과처리 및 발송 업무</dd>
									<dd>직업성 유소견자 관리</dd>
								</dl>
							</td>
						</tr>
						<tr>
							<td align="center">검진의료정보팀</td>
							<td align="center">특수검진팀</td>
							<td align="center">이승연</td>
							<td align="center">070-5083-1997</td>
							<td>
								<dl class="dash-list" style="margin-bottom: 0;">
									<dd>특수건강진단 사전조사 및 실시계획서 작성, 특수 건강검진 예약안내</dd>
									<dd>특수건강진단 결과처리 및 발송 업무</dd>
									<dd>직업성 유소견자 관리</dd>
								</dl>
							</td>
						</tr>
						<tr>
							<td align="center">검진의료정보팀</td>
							<td align="center">특수검진팀</td>
							<td align="center">이윤정</td>
							<td align="center">070-5083-1848</td>
							<td>
								<dl class="dash-list" style="margin-bottom: 0;">
									<dd>특수건강진단 사전조사 및 실시계획서 작성, 특수 건강검진 예약안내</dd>
									<dd>사업장 개인 결과표 처리</dd>
									<dd>2차 재검자 통보 및 직업성 유소견자 관리</dd>
								</dl>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<h3 class="cont-tit">특수 건강검진 고충 처리 관리</h3>
	<div class="cont-box">
		<label class="cont-label">담당자</label>
		<div class="cont">
			<div class="tableType1 text-center">
				<table>
					<colgroup>
						<col style="width: 25%;">
						<col>
					</colgroup>
					<tbody>
						<tr>
							<th>총 책임자</th>
							<td>검진센터 본부장</td>
						</tr>
						<tr>
							<th>팀장</th>
							<td>김승심 팀장</td>
						</tr>
						<tr>
							<th>팀원</th>
							<td>윤미진 파트장, 김아람 파트장, 장미영 파트장</td>
						</tr>
						<tr>
							<th>간사</th>
							<td>검진의료정보팀 특수검진 팀원, 검진사업부 영업팀 팀원</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="cont-box">
		<label class="cont-label">고충 처리 접수 절차</label>
		<div class="cont">
			<div class="tableType1 text-center">
				<table>
					<colgroup>
						<col style="width: 35%;">
						<col>
					</colgroup>
					<tbody>
						<tr>
							<th>전화상담 접수</th>
							<td>콜센터 1833-9988</td>
						</tr>
						<tr>
							<th>방문상담</th>
							<td>
								4층 평생건강증진센터 접수<br>
								<br>
								[이용시간]<br>
								평일 : 09:00~17:30 <br>
								토요일 : 09:00~13:30
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>