
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
	.cont-box .cont-step.v3 li {width: calc(100% - 14px);padding-top:0;}
	.cont-box .cont-step.v3 li .img {width:100%;}
	.step-text {width:100%;box-sizing:border-box;}
	.step-text .btnWrap {margin-top:1rem;}
</style>
{#infomenu}
<div class="section">
	<div class="tabMenu drop">
		<p>검진순서</p>
		<ul>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_1"><span>건강검진 예약</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_2"><span>예약 확인</span></a></li>
			<li><a href="https://eo-m.com/2023/HSP/HSP_Controller.asp?part=nfc&mehId=GV2984&mtype=1" target="_blank"><span>문진표 작성</span></a></li>
			<li class="active"><a href="https://nkhospital.net/v3/info.php?tab=info17_4"><span>검진순서</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_5"><span>검진 주의사항</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>검진순서</h2>
		<span class="bar"></span>
	</div>
	<div class="cont-box">
		<ul class="cont-step v3">
			<li>
				<div class="img"><img src="/resource-pc/images/service-164-1.png" alt=""></div>
				<p class="step-tit">
					<span>STEP 1 검진예약</span>
				</p>
				<div class="step-text">
					온라인접수
					<div class="btnWrap">
						<span><a href="https://www.nkhospital.net/service/page02-1.html" class="btnType4 iconOnline">바로가기</a></span>
					</div>
					<br>
					종합안내 / 예약 전화
					<div class="btnWrap">
						<span><a  class="btnType2 iconTel" href="tel:18339988">1833-9988</a></span>
					</div>
				</div>
			</li>
			<li>
				<div class="img"><img src="/resource-pc/images/service-164-2.png" alt=""></div>
				<p class="step-tit">
					<span>STEP 2 접수</span>
				</p>
				<div class="step-text" style="text-align:left;">
					<p class="starTxt">접수 창구에서 예약을 확인합니다.</p>
					<p class="starTxt">검사 전 준비사항을 확인합니다.</p>
				</div>
			</li>
			<li>
				<div class="img"><img src="/resource-pc/images/service-164-3.png" alt=""></div>
				<p class="step-tit">
					<span>STEP 3 검진준비</span>
				</p>
				<div class="step-text" style="text-align:left;">
					<p class="starTxt">접수 후 탈의실에서 준비된 검진복으로 갈아입습니다.</p>
					<p class="starTxt">목걸이 및 액세서리는 착용하지 않습니다.</p>
					<p class="starTxt">귀중품은 댁에 두고 오시거나 접수 창구에 보관해주세요.</p>
				</div>
			</li>
			<li>
				<div class="img"><img src="/resource-pc/images/service-164-4.png" alt=""></div>
				<p class="step-tit">
					<span>STEP 4 검진진행</span>
				</p>
				<div class="step-text" style="text-align:left;">
					<p class="starTxt">모든 준비를 마치신 후 검사진행 데스크에서 검진을 시작합니다.</p>
					<p class="starTxt">예약하신 검진 내용에 따라 순차적으로 검사를 진행하게 됩니다.</p>
				</div>
			</li>
			<li>
				<div class="img"><img src="/resource-pc/images/service-164-5.png" alt=""></div>
				<p class="step-tit">
					<span>STEP 5 결과 상담</span>
				</p>
				<div class="step-text" style="text-align:left;">
					<p class="starTxt">검사 결과는 모바일/이메일/우편으로 보내드립니다.</p>
					<p class="starTxt">
						검진 결과 관련 문의는 아래 전화번호로 연락해주세요.<br>
						<div class="btnWrap">
							<span><a  class="btnType2 iconTel" href="tel:18339988">1833-9988</a></span>
						</div>
					</p>
				</div>
			</li>
		</ul>
	</div>
</div>