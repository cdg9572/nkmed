
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
		height: 20.5rem;
	}
	.tableType1 th {color:#fff;border-color: #1795d0; background-color: #1795d0;}
	.tableType1 table + table {margin-top: 3rem;}
</style>
{#infomenu}
<div class="section">
	<div class="tabMenu drop">
		<p>건강검진 예약</p>
		<ul>
			<li class="active"><a href="https://nkhospital.net/v3/info.php?tab=info17_1"><span>건강검진 예약</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_2"><span>예약 확인</span></a></li>
			<li><a href="https://eo-m.com/2023/HSP/HSP_Controller.asp?part=nfc&mehId=GV2984&mtype=1" target="_blank"><span>문진표 작성</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_4"><span>검진순서</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_5"><span>검진 주의사항</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>건강검진 예약</h2>
		<span class="bar"></span>
	</div>
	<h3 class="cont-tit"><small>개인 건강검진 예약</small></h3>
	<div class="tableType1">
		<table class="center">
			<tbody>
				<tr>
					<th>공단검진</th>
				</tr>
				<tr>
					<td>
						<br>
						일반검진/6대암검진<br>
						<div class="btnWrap">
							<a href="https://nkhospital.net/v3/info.php?tab=info17_1_1" class="btnType1">예약 하기</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="center">
			<tbody>
				<tr>
					<th>건강형</th>
				</tr>
				<tr>
					<td>
						<br>
						기본종합검진 + A선택검사 2종류<br>
						<div class="btnWrap">
							<a href="https://nkhospital.net/v3/info.php?tab=info17_1_2" class="btnType1">예약 하기</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="center">
			<tbody>
				<tr>
					<th>소망형</th>
				</tr>
				<tr>
					<td>
						<br>
						기본종합검진 + A선택검사 4종류<br>
						<div class="btnWrap">
							<a href="https://nkhospital.net/v3/info.php?tab=info17_1_3" class="btnType1">예약 하기</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="center">
			<tbody>
				<tr>
					<th>믿음형</th>
				</tr>
				<tr>
					<td>
						<br>
						기본종합검진 + A선택검사 4종류 + 대장내시경<br>
						<div class="btnWrap">
							<a href="https://nkhospital.net/v3/info.php?tab=info17_1_4" class="btnType1">예약 하기</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="center">
			<tbody>
				<tr>
					<th>행복형</th>
				</tr>
				<tr>
					<td>
						<br>
						기본종합검진 + A선택검사 4종류 + C선택검사 1종류<br>
						<div class="btnWrap">
							<a href="https://nkhospital.net/v3/info.php?tab=info17_1_5" class="btnType1">예약 하기</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="center">
			<tbody>
				<tr>
					<th>사랑해</th>
				</tr>
				<tr>
					<td>
						<br>
						기본종합검진 + A선택검사 6종류 + C선택검사 1종류 + 대장내시경 + 심장초음파 + 선천적 유전자검사<br>
						<div class="btnWrap">
							<a href="https://nkhospital.net/v3/info.php?tab=info17_1_6" class="btnType1">예약 하기</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br>
	<div class="grayBox text-left">
		<ul>
			<li class="starTxt">소망형/믿음형/행복형 - A그룹 2개 미선택시 B그룹 1개로 대체 가능</li>
			<li class="starTxt">믿음형/행복형 - A그룹 4개 미선택시 C그룹 1개로 대체 가능</li>
			<li class="starTxt">내시경 시 용종 및 조직검사비용은 별도</li>
			<li class="starTxt">금액과 항목은 변동될 수 있음</li>
			<li class="starTxt">선택하신 예약 희망일에 따라 담당 직원이 유선상으로 예약 확정을 도와드립니다.</li>
		</ul>
	</div>
</div>