
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
		<p>기업체 & 단체검진</p>
		<ul>
			<li><a href="/v3/info.php?tab=info16_1"><span>종합 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_2"><span>국가 암 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_3"><span>건강보험공단 검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_4"><span>채용 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_5"><span>청소년 종합검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_6"><span>영유아 건강검진</span></a></li>
			<li><a href="/v3/info.php?tab=info16_7"><span>특수 건강검진</span></a></li>
			<li class="active"><a href="/v3/info.php?tab=info16_8"><span>기업체&단체검진</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>기업체 & 단체검진</h2>
		<span class="bar"></span>
		<p>
			뉴고려병원 평생건강증진센터의 <br>기업체&단체 검진을 소개합니다.
		</p>
	</div>
	<div class="grayBox text-left">
		<ul class="middot-list" style="margin-bottom: 0;">
			<li class="starTxt">기업전담 담당자가 검진예약 및 상담서비스를 제공하며 검진 인원, 업종에 맞는 맞춤 검진을 안내해드립니다.</li>
			<li class="starTxt">검진 시작부터 종료까지 담당자가 배정되어 검진 안내를 제공합니다.</li>
			<li class="starTxt">기업 임직원의 건강을 한 눈에 볼 수 있는 검진 통계 및 자료를 제공합니다.</li>
			<li class="starTxt">검진 후 유소견자 발생 시 뉴고려병원에서 진료 및 치료 예약을 제공합니다.</li>
		</ul>
	</div>
	<br>
	<h3 class="cont-tit">기업체&단체 검진 진행 절차</h3>
	<div class="cont-box">
		<ul class="cont-step v3">
			<li>
				<div class="img"><img src="/resource-pc/images/service-158-2.png" alt=""></div>
				<p class="step-tit">
					<span>기업 전용 프로그램 제공</span>
				</p>
				<p class="step-text">
					일정 인원 이상 기업에게 우대 프로그램 제공
				</p>
			</li>
			<li>
				<div class="img"><img src="/resource-pc/images/service-158-3.png" alt=""></div>
				<p class="step-tit">
					<span>지원 금액에 따른 맞춤 프로그램 구성</span>
				</p>
				<p class="step-text">
					회사 지원금액 개인별 최적의 프로그램 제공
				</p>
			</li>
			<li>
				<div class="img"><img src="/resource-pc/images/service-158-4.png" alt=""></div>
				<p class="step-tit">
					<span>뉴고려병원 전문의료진 상근</span>
				</p>
				<p class="step-text">
					뉴고려병원의 경험과 신뢰를 바탕으로 <br>
					해당 분야 전문 의료진이 <br>
					정밀 의료 장비를 이용하여 질병을 조기에 진단
				</p>
			</li>
			<li>
				<div class="img"><img src="/resource-pc/images/service-158-5.png" alt=""></div>
				<p class="step-tit">
					<span>뉴고려병원 및 협력병원으로 신속한 연계</span>
				</p>
				<p class="step-text">
					건강검진 후 이상이 발견되는 경우 <br>
					뉴고려병원 및 협력병원에서 신속히 <br>
					진료 및 치료를 받을 수 있도록 연계해드립니다.
				</p>
			</li>
		</ul>
	</div>
</div>