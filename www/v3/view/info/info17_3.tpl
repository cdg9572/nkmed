
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
		<p>문진표 작성</p>
		<ul>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_1"><span>건강검진 예약</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_2"><span>예약 확인</span></a></li>
			<li class="active"><a href="https://eo-m.com/2023/HSP/HSP_Controller.asp?part=nfc&mehId=GV2984&mtype=1" target="_blank"><span>문진표 작성</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_4"><span>검진순서</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_5"><span>검진 주의사항</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>문진표 작성</h2>
		<span class="bar"></span>
		<p>문진표 작성을 위해 필요한 정보를 입력해주세요.</p>
	</div>
	<div class="grayBox text-left">
		<ul>
			<li class="starTxt">병원고객정보에 입력된 휴대폰 번호와 다를 경우는 <br>인증이 어렵습니다.</li>
			<li class="starTxt">휴대폰으로 발송된 인증번호를 입력해주세요.</li>
			<li class="starTxt">인증번호발송버튼을 클릭하시면 인증번호가 발송됩니다.(2~5초 소요)</li>
			<li class="starTxt">인증번호를 입력하시고 <br>“본인인증받기”버튼을 눌러주세요.</li>
			<li class="starTxt">발송된 인증번호는 5분간 유효합니다.</li>
		</ul>
	</div>
	<div class="btnWrap">
		<span><a href="https://eo-m.com/2023/HSP/HSP_Controller.asp?part=nfc&mehId=GV2984&mtype=1" class="btnType2" target="_blank">입력하기</a></span>
	</div>
</div>