<div id="nav">
	<h2 class="trigger"><a href="javascript:void(0)">
		<i class="menu-line box-shadow"></i>
		<i class="menu-line box-shadow"></i>
		<i class="menu-line box-shadow"></i>
		<span class="text-ir">메뉴 열기</span>
	</a></h2>
	<div class="overlay"></div>
	<div class="group">
		<div class="header">
			<div class="greetings">
           		 <?
					if($_SESSION['suserid'] == ''){
				?>
				<p>로그인 해주세요.</p>
                <? }else{ ?>
                <p><strong class="name"><?=$_SESSION['susername']?></strong>님, <br />안녕하세요.</p>
                <?  } ?>
			</div>
			<ul class="tools">
				<?
					if($_SESSION['suserid'] == ''){
				?>
                <li class="login"><a href="/m/login.html"><span>로그인</span></a></li>
                <? }else{ ?>
				<li><a href="/m/logout.html"><span>로그아웃</span></a></li>
				<li><a href="user.info.html"><span>내정보 수정</span></a></li>
                <? } ?>
                
			</ul>
		</div>
		<div class="panel">
			<ul class="list">
				<li class="dp1"><a href="main.html"><span>메인으로</span></a></li>
				<li class="dp1">
					<a href="javascript:void(0)"><span>진료예약</span><i class="ip-icon-arrow-down"></i></a>
					<div class="dp-section">
						<ul>
							<li class="dp2"><!--a href="javascript:alert('시스템 점검중입니다.콜센터로 전화 부탁 드립니다.')"--><a href="res.process.01.html?ptype=s"><span>본인예약</span></a></li>
							<!--<li class="dp2"><a href="javascript:alert('시스템 점검중입니다. 불편을 드려 대단히 죄송합니다.')"><span>보호자로 예약</span></a>--><!--<a href="res.guardian.html?ptype=g"><span>보호자로 예약</span></a>></li-->
							<li class="dp2"><a href="http://smart.nkhospital.net/index.html" target="_blank"><span>건강검진예약</span></a></li>
						</ul>
					</div>
				</li>
				<li class="dp1"><a href="res.history.html"><span>예약 취소 및 변경</span></a></li>
				<!--li class="dp1"><a href="javascript:alert('시스템 점검중입니다.콜센터로 전화 부탁 드립니다.')"><a href="res.easy.html"><span>간편예약</span></a></li-->
				<li class="dp1"><a href="res.call.html"><span>전화예약</span></a></li>
				<li class="dp1"><a href="res.time.html"><span>진료시간</span></a></li>
				<li class="dp1"><a href="res.map.html"><span>오시는 길</span></a></li>
			</ul>
		</div>
		<a href="javascript:void(0)" class="close"><span class="text-ir">메뉴 닫기</span></a>
	</div>
</div>