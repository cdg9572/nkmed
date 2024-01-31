
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
</style>
{#infomenu}
<div class="section">
	<div class="tabMenu drop">
		<p>예약 확인</p>
		<ul>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_1"><span>건강검진 예약</span></a></li>
			<li class="active"><a href="https://nkhospital.net/v3/info.php?tab=info17_2"><span>예약 확인</span></a></li>
			<li><a href="https://eo-m.com/2023/HSP/HSP_Controller.asp?part=nfc&mehId=GV2984&mtype=1" target="_blank"><span>문진표 작성</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_4"><span>검진순서</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_5"><span>검진 주의사항</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>예약 확인</h2>
		<span class="bar"></span>
	</div>
	<table class="joinInputTable">
		<tbody>
			<tr>
				<th>이름</th>
				<td>
					<input type="text" class="inputTxt">
				</td>
			</tr>
			<tr>
				
			</tr>
			<tr>
				<th>휴대전화</th>
			</tr>
			<tr>
				<td>
					<input type="text" class="inputTxt">
				</td>
			</tr>
		</tbody>
	</table>
	
	<div class="btnWrap">
		<span><a href="https://nkhospital.net/v3/info.php?tab=info17_2_1" class="btnType2">예약 확인</a></span>
	</div>
	<br>
	<div class="grayBox text-left">
		<ul>
			<li class="starTxt">뉴고려병원 건강검진 프로그램은 예약제입니다.</li>
			<li class="starTxt">홈페이지나 상담전화를 이용하여 미리 예약하십시오. <br>(평생건강증진센터 1833-9988)</li>
		</ul>
	</div>
</div>