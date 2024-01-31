<?php /* Template_ 2.2.8 2023/08/21 13:33:17 /home/hosting_users/nkmed/www/v3/view/info/info17_5.tpl 000006139 */ ?>
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
<?php $this->print_("infomenu",$TPL_SCP,1);?>

<div class="section">
	<div class="tabMenu drop">
		<p>검진 주의사항</p>
		<ul>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_1"><span>건강검진 예약</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_2"><span>예약 확인</span></a></li>
			<li><a href="https://eo-m.com/2023/HSP/HSP_Controller.asp?part=nfc&mehId=GV2984&mtype=1" target="_blank"><span>문진표 작성</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_4"><span>검진순서</span></a></li>
			<li class="active"><a href="https://nkhospital.net/v3/info.php?tab=info17_5"><span>검진 주의사항</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>검진 주의사항</h2>
		<span class="bar"></span>
	</div>
	<div class="cont-box">
		<div class="cont-label">금식</div>
		<div class="cont">
			<ul class="hyphenList">
				<li>검진 2~3일 전부터는 기름진 음식과 음주 및 과로는 피해주세요.</li>
				<li><b>오전 검진인 경우 : </b>전날 오후 8시 이후 금식해주세요.</li>
				<li><b>오후 검진인 경우 : </b>검진 당일에는 금식과 함께  물, 주스, 담배도 삼가해주세요.</li>
			</ul>
		</div>
	</div>
	<div class="cont-box">
		<div class="cont-label">약 복용</div>
		<div class="cont">
			<h3 class="cont-tit" style="padding-top: 0;padding-bottom: 10px;"><small>검진 1주일 전</small></h3>
			<ul class="hyphenList">
				<li>혈전억제제 및 항응고제를 복용 중인 경우 검진 일주일 전부터 중단합니다.<br>(단, 뇌혈관질환으로 약을 복용하시는 경우 담당의와 상의하신 후 미리 말씀해주시기 바랍니다.)</li>
				<li>당뇨로 인한 약이나 인슐린 주사는 검진 전날 저녁부터 중단합니다.</li>
				<li>항고혈압, 갑상선, 항경련제, 부정맥, 심장질환 등의 약물은 아침 일찍 소량의 물과 함께 복용해주세요.</li>
			</ul>
		</div>
	</div>
	<div class="cont-box">
		<div class="cont-label">내시경검사</div>
		<div class="cont">
			<ul class="hyphenList">
				<li>병력 및 수술력이 있는 경우 사전에 안내해주시기 바랍니다.</li>
				<li>만성질환 환자의 경우 사전에 안내해주시기 바랍니다.</li>
				<li>눈 수술을 받으신 분은 최소 3개월 후로 내시경 검사를 권고합니다.</li>
				<li>
					수면 내시경은 수검자의 불편함을 경감시켜드리는 효과가 있지만 약물을 사용하기 때문에 부작용이 발생할 수 있습니다.<br>
					호흡기질환 병력이 있거나 심장 질환 환자는 수면 내시경 검사 전 미리 안내해주시기 바랍니다.
				</li>
			</ul>
		</div>
	</div>
	<div class="cont-box">
		<div class="cont-label">대변검사</div>
		<div class="cont">
			<ul class="hyphenList">
				<li>대장내시경 예약 고객은 장정결제 복용 전 채취를 권장 드립니다.</li>
				<li>
					위장관 출혈을 유발할 수 있는 아스피린이나 소염제, 과도한 음주는 피해주세요.<br>
					<b>항문질환으로 인한 출혈이나 장염, 변비, 생리 등의 증상이 완화 된 이후 채취를 권장합니다.</b>
				</li>
			</ul>
		</div>
	</div>
	<div class="cont-box">
		<div class="cont-label">검체 채취방법</div>
		<div class="cont">
			<ul class="hyphenList">
				<li>검체 채취 과정은 검사결과에 중요한 영향을 미치므로 반드시 올바른 방법으로 채취해주세요.</li>
				<li>채변 용기 안에 들어 있는 액체는 물이 아닌 희석액으로 버리지 마십시오.</li>
				<li>채변 후 검체는 2~3일간 서늘한 곳에서 보관이 가능하나 가급적 검진 전날 받으시는 것이 좋습니다.</li>
			</ul>
		</div>
	</div>
	<div class="cont-box">
		<div class="cont-label">대장내시경</div>
		<div class="cont">
			<ul class="hyphenList">
				<li>대장 내시경을 예약하신 경우 검사 일주일 전부터는 씨앗이 있는 과일이나 검은쌀, 현미, 콩나물, 김, 잡곡류는 소화가 잘 되지 않으므로 섭취를 피해주세요.</li>
				<li>우편으로 받으신 관장약은 복용 방법에 따라 올바르게 섭취해주세요.</li>
			</ul>
		</div>
	</div>
	<div class="cont-box">
		<div class="cont-label">여성 검진 대상자</div>
		<div class="cont">
			<ul class="hyphenList">
				<li>일부 항목 검사가 제한될 수 있어 생리 주기를 파악하여 검진 예약을 진행해주세요. </li>
				<li>임신이나 임신 가능성을 확인해야 합니다. (방사선 검사 제한)</li>
				<li>모유수유 중인 경우 일부 항목 검사가 제한될 수 있습니다.</li>
			</ul>
		</div>
	</div>
</div>