<?php /* Template_ 2.2.8 2023/08/09 17:17:16 /home/hosting_users/nkmed/www/v3/view/info/info16_3.tpl 000005171 */ ?>
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
		<p>건강보험공단 검진</p>
		<ul>
			<li><a href="/v3/info.php?tab=info16_1"><span>종합 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_2"><span>국가 암 검진</span></a></li>
			<li class="active"><a href="/v3/info.php?tab=info16_3"><span>건강보험공단 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_4"><span>채용 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_5"><span>청소년 종합검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_6"><span>영유아 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_7"><span>특수 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_8"><span>기업체&단체검진</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>건강보험공단 검진</h2>
		<span class="bar"></span>
		<p>
			건강에 대한 중요성은 모두가 인식하고 있지만 <br>바쁜 일상을 보내는 현대인들의 경우 건강 관리에 소홀해 <br>질병에 취약해질 가능성이 높아졌습니다. <br>
			건강보험공단 검진을 통해 기본적인 검사들을 <br>비용 부담 없이 받아 볼 수 있고 <br>질환을 조기에 발견하고 예방적인 관리가 가능합니다.
		</p>
	</div>
	<div class="tableType1">
		<table class="center">
			<tbody>
				<tr>
					<th>주의사항</th>
				</tr>
				<tr>
					<td>검사 전날 밤 9시 이후 금식</td>
				</tr>
				<tr>
					<th>준비물</th>
				</tr>
				<tr>
					<td>신분증, 수검표, 문진표</td>
				</tr>
				<tr>
					<th>대상자</th>
				</tr>
				<tr>
					<td>
						건강보험 가입자(지역가입자, 피부양자, 직장가입자)<br>
						의료급여수급자 매 2년마다 1회 검진<br>(비사무직은 매년 실시)
					</td>
				</tr>
				<tr>
					<th>공통검사항목</th>
				</tr>
				<tr>
					<td>
						진찰 및 상담<br>
						신체 계측(신장, 체중, 허리둘레, 비만도)<br>
						시력, 청력, 혈압, 흉부방사선 검사<br>
						혈액검사(혈색소, 공복혈당, AST, ALT, 감마GTP, 혈청크레아티닌, e-GFR)<br>
						요검사, 구강검사
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br>
	<div class="tableType1 text-center">
		<table>
			<colgroup>
				<col style="width: 36%;">
				<col style="width: 10%;">
				<col> 
			</colgroup>
			<tbody>
				<tr>
					<th colspan="3">성별/연령별 검사 항목</th>
				</tr>
				<tr>
					<th colspan="2">구분</th>
					<th>대상시기</th>
				</tr>
				<tr>
					<td>총콜레스트롤</td>
					<td rowspan="3">이상지질혈증</td>
					<td rowspan="3">
						남성 만 24세 이상<br>
						여성 만 40세 이상<br>
						(4년마다)
					</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #ddd;">HDL 콜레스트롤</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #ddd;">트리글리세라이드</td>
				</tr>
				<tr>
					<td colspan="2">B형간염 검사</td>
					<td>만 40세</td>
				</tr>
				<tr>
					<td colspan="2">골밀도 검사</td>
					<td>만 54세, 66세 여성</td>
				</tr>
				<tr>
					<td colspan="2">인지기능장애 검사</td>
					<td>만 66세 이상(2년마다)</td>
				</tr>
				<tr>
					<td colspan="2">정신건강 검사</td>
					<td>만 20, 30, 40, 50, 60, 70세</td>
				</tr>
				<tr>
					<td colspan="2">생활습관 평가</td>
					<td>만 40, 50, 60, 70세</td>
				</tr>
				<tr>
					<td colspan="2">노인신체기능 검사</td>
					<td>만 66, 70, 80세</td>
				</tr>
				<tr>
					<td colspan="2">치면세균막 검사</td>
					<td>만 40세</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>