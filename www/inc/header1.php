

	<header>
			<div class="boxTopLogin">
				<a href="/m/main.html" target="_blank" class="btn-reserve">진료 예약하기</a>
				<ul class="listUnstyled">
					<li>
						<?
							if($_SESSION['suserid'] == ''){
						?>
						<!--a href="<?=$GP -> HTTPS?>:<?=$GP -> HTTPS_PORT?>/mypage/login.html" class="btn btnLogin">로그인</a-->
                        <a href="https://nkhospital.net:44809/mypage/login.html" class="btn btnLogin">로그인</a>
						<span>|</span>
						<!--a href="<?=$GP -> HTTPS?>:<?=$GP -> HTTPS_PORT?>/mypage/join.html" class="btn">회원가입</a-->
                        <a href="https://nkhospital.net:44809/mypage/join.html" class="btn">회원가입</a>
						<?
							}else{
						?>
						<a href="<?=$GP -> SERVICE_DOMAIN?>/mypage/logout.html" class="btn btnLogin">로그아웃</a>
						<span>|</span>
						<a href="<?=$GP -> HTTPS?>:<?=$GP -> HTTPS_PORT?>/mypage/mypage.html" class="btn">내정보</a>
						<? } ?>
						<!-- 페이지 준비 예정으로 숨김
						<span>|</span>
						<a href="/sitemap/sitemap.html" class="btn">사이트맵</a>
						<a href="" class="btn Select">한글</a>
						<a href="" class="btn btnUnderLine">English</a>
						<a href="" class="btn btnUnderLine">中文</a>
						-->
					</li>
					<!-- li>
						<label for="TopSearchInput" class="srOnly">검색어 입력</label>
						<input type="search" name="TopSearchInput" id="TopSearchInput" class="inputTopSearchBar" placeholder="검색어를 입력하세요."
						><a href="" class="btnTopSearch">검색</a>
					</li -->
				</ul>
			</div>
			<div class="boxTopLogo">
				<h1>
					<a href="<?=$GP -> SERVICE_DOMAIN?>"><img src="/images/common/img-top-logo.gif" alt="인봉의료재단 뉴고려병원"></a>
				</h1>
				<!--<img src="/images/common/img-top-certifi.gif" alt="보건복지부 인증의료기관">-->
			</div
			><div class="boxGnb">
				<nav>
					<a href="#" id="m_nav1" class="btn nav1 menubtn" >병원이용</a>
					<a href="#" id="m_nav2" class="btn nav2 menubtn" >안내</a>
					<a href="#" id="m_nav3" class="btn nav3 menubtn" >진료</a>
					<a href="#" id="m_nav4" class="btn nav4 menubtn" >소통</a>
					<a href="#" id="m_nav5" class="btn nav5 menubtn" >뉴고려</a>
				</nav>
			</div>
		</header>

		<div id="menu">
			<!-- Sub Gnb Menu -->
			<div id="s_nav1" class="boxGnbMenu">
				<div class="container nav1">
					<div class="subTit">
						<h2>병원이용</h2>
						<p>편리하고 빠른 병원이용을 안내합니다.</p>
					</div>
					<nav class="gnbMenu">
						<ul>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/infor/infor_01.html">오시는길</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/infor/infor_02.html">전화번호 안내</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/infor/infor_03.html">주차안내</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/infor/infor_04.html">병원둘러보기</a></li>
							<!-- 삭제예정
							<li><a href="#;">편의시설</a></li>
							<li><a href="#;">장례식장</a></li>
							-->
						</ul>
					</nav>
					<div class="gnbCont">
						<!-- 공통 -->
						<div class="gnbInfor">
							
							<dl>
								<dt>병원이용문의</dt>
								<dd>콜센터 : 1661 – 7779</dd>
								<dd>ARS : 031-980-9114</dd>
								<dd>
									<span class="timeInfo">평일 08:30 ~ 17:30</span>
									<span class="timeInfo">토요일 및 오전진료시 : 08:30 ~ 13:00</span>
								</dd>
							</dl>
							<div class="mg-t10"><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_01.html"><img src="/images/common/banner-counsel-1.gif" alt="전문의상담"></a></div>
							<!-- <div class="mg-t10"><a href="<?=$GP -> SERVICE_DOMAIN?>/customer/customer_06_list.html"><img src="/images/common/banner-customer-1.gif" alt="고객소리함"></a></div> -->
							<p class="map">
								<a href="/infor/infor_01.html">
									<strong>찾아오시는 길</strong>
									<span>바로가기</span>
								</a>
							</p>
						</div>
						<!-- //공통 -->
					</div>

				</div>
			</div>

			<div id="s_nav2" class="boxGnbMenu">
				<div class="container nav2">
					<div class="subTit">
						<h2>안내</h2>
						<p>뉴고려병원의 모든 진료과목과 <br />의료진의 역량을 확인하실 수 있습니다.</p>
					</div>
					<nav class="gnbMenu">
						<ul>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_02.html">진료 안내</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_03.html">입/퇴원 안내</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_04.html">입원생활안내</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_05.html">응급진료 안내</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_06_2.html">비급여진료 안내</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_07.html">환자권리장전</a></li>
						</ul>
					</nav>
					<div class="gnbCont">
						<!-- 공통 -->
						<div class="gnbInfor">
							<dl>
								<dt>병원이용문의</dt>
								<dd>콜센터 : 1661 – 7779</dd>
								<dd>ARS : 031-980-9114</dd>
								<dd>
									<span class="timeInfo">평일 08:30 ~ 17:30</span>
									<span class="timeInfo">토요일 및 오전진료시 : 08:30 ~ 13:00</span>
								</dd>
							</dl>
							<div class="mg-t10"><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_01.html"><img src="/images/common/banner-counsel-1.gif" alt="전문의상담"></a></div>
							<!-- <div class="mg-t10"><a href="<?=$GP -> SERVICE_DOMAIN?>/customer/customer_06_list.html"><img src="/images/common/banner-customer-1.gif" alt="고객소리함"></a></div> -->
							<p class="map">
								<a href="<?=$GP -> SERVICE_DOMAIN?>/infor/infor_01.html">
									<strong>찾아오시는 길</strong>
									<span>바로가기</span>
								</a>
							</p>
						</div>
						<!-- //공통 -->
					</div>

				</div>

			</div>

			<div id="s_nav3" class="boxGnbMenu">
				<div class="container nav3">
					<div class="subTit">
						<h2>진료</h2>
						<p>뉴고려병원의 모든 진료과목과 <br />의료진의 역량을 확인하실 수 있습니다.</p>
					</div>
					<nav class="gnbMenu">
						<ul>
							<!-- li id="li_menu1">
								<a href="javascript:;" id="dc_menu1" class="treatbtn"><span>진료과목</span></a>
								<ul class="sub_dep1" id="sub_menu1">
									<?
										foreach ($GP -> CLINIC_URL1  as $key => $val) {
									?>
									<li><a href="<?=$key?>"><?=$val?></a></li>
									<?
										}
									?>
								</ul>
							</li>
							<li id="li_menu2">
								<a href="javascript:;" id="dc_menu2" class="treatbtn"><span>전문센터</span></a>
								<ul class="sub_dep1" id="sub_menu2">
									<?
										foreach ($GP -> CLINIC_URL2  as $key => $val) {
									?>
									<li><a href="<?=$key?>"><?=$val?></a></li>
									<?
										}
									?>
								</ul>
							</li -->
              <li><a href="<?=$GP -> SERVICE_DOMAIN?>/clinic/clinic.html">진료센터</a></li>
              <li><a href="<?=$GP -> SERVICE_DOMAIN?>/clinic/clinic_special.html">특수클리닉</a></li>
							<!-- li id="li_menu3">
								<a href="/clinic/clinic_special.html" id="dc_menu3" class="treatbtn"><span>특수클리닉</span></a>
								<ul class="sub_dep1" id="sub_menu3">
									<li><a href="/clinic/clinic_special_01.html">하지정맥류</a></li>
									<!-- li><a href="/clinic/clinic_special_02.html">아토피클리닉</a></li -->
									<!-- li><a href="/clinic/clinic_special_03.html">요실금클리닉</a></li -->
									<!-- li><a href="/clinic/clinic_special_04.html">성장클리닉</a></li -->
									<!--li><a href="/clinic/clinic_special_05.html">맘모톰클리닉</a></li>
									<li><a href="/clinic/clinic_special_06.html">뷰티클리닉</a></li>
									<li><a href="/clinic/clinic_special_07.html">비만클리닉</a></li>
									<li><a href="/clinic/clinic_special_08.html">당뇨클리닉</a></li>
									<li><a href="/clinic/clinic_special_09.html">갑상선클리닉</a></li>
									<li><a href="/clinic/clinic_special_10.html">복강경수술 클리닉</a></li>
								</ul>
							</li -->
						</ul>
					</nav>

					<div class="gnbCont">
						<!-- nav3 -->
						<!-- <ul class="bannerList">
							<li><a href="/intro/intro_08.html"><img src="/images/common/banner-citation.jpg" alt="수상내역 및 인증 바로가기 - 보건복지부가 지정 관절전문병원, 인증의료기관"></a></li>
							
						</ul>
						 -->
						<!-- 공통 -->
						<div class="gnbInfor">
							<dl>
								<dt>병원이용문의</dt>
								<dd>콜센터 : 1661 – 7779</dd>
								<dd>ARS : 031-980-9114</dd>
								<dd>
									<span class="timeInfo">평일 08:30 ~ 17:30</span>
									<span class="timeInfo">토요일 및 오전진료시 : 08:30 ~ 13:00</span>
								</dd>
							</dl>
							<div class="mg-t10"><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_01.html"><img src="/images/common/banner-counsel-3.gif" alt="전문의상담"></a></div>
							<!-- <div class="mg-t10"><a href="<?=$GP -> SERVICE_DOMAIN?>/customer/customer_06_list.html"><img src="/images/common/banner-customer-3.gif" alt="고객소리함"></a></div> -->
							<p class="map">
								<a href="<?=$GP -> SERVICE_DOMAIN?>/infor/infor_01.html">
									<strong>찾아오시는 길</strong>
									<span>바로가기</span>
								</a>
							</p>
						</div>
						<!-- //공통 -->
					</div>
				</div>
			</div>

			<div id="s_nav4" class="boxGnbMenu">
				<div  class="container nav4">
					<div class="subTit">
						<h2>소통</h2>
						<p>더 낮은 자세로 더 많이 듣겠습니다.</p>
					</div>
					<nav class="gnbMenu">
						<ul>
 							<!-- <li><a href="<?=$GP -> SERVICE_DOMAIN?>/customer/customer_06_list.html">고객소리함</a></li> -->
                            <li><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_01.html">전문의상담</a></li> 
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/customer/customer_04_list.html">칭찬합시다</a></li>              
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/health/health_list.html">건강정보</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/customer/customer_07_list.html">CH NK</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/intro/intro_06_gl_list.html">포토뉴스</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/intro/intro_06_pr_list.html">언론보도</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/customer/customer_01_list.html">병원소식</a></li>
						</ul>
					</nav>
					<div class="gnbCont">
						<!-- 공통 -->
						<div class="gnbInfor">
							<dl>
								<dt>병원이용문의</dt>
								<dd>콜센터 : 1661 – 7779</dd>
								<dd>ARS : 031-980-9114</dd>
								<dd>
									<span class="timeInfo">평일 08:30 ~ 17:30</span>
									<span class="timeInfo">토요일 및 오전진료시 : 08:30 ~ 13:00</span>
								</dd>
							</dl>
							<div class="mg-t10"><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_01.html"><img src="/images/common/banner-counsel-3.gif" alt="전문의상담"></a></div>
							<!-- <div class="mg-t10"><a href="<?=$GP -> SERVICE_DOMAIN?>/customer/customer_06_list.html"><img src="/images/common/banner-customer-3.gif" alt="고객소리함"></a></div> -->
							<p class="map">
								<a href="<?=$GP -> SERVICE_DOMAIN?>/infor/infor_01.html">
									<strong>찾아오시는 길</strong>
									<span>바로가기</span>
								</a>
							</p>
						</div>
						<!-- //공통 -->
					</div>
				</div>
			</div>
			

			<div id="s_nav5" class="boxGnbMenu">
				<div class="container nav6">
					<div class="subTit">
						<h2>뉴고려</h2>
						<p>한강신도시 거점병원 뉴고려병원은 <br />여러분을 가족을 대하는 마음으로 모십니다.</p>
					</div>
					<nav class="gnbMenu">
						<ul>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/intro/intro_01.html">개요</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/intro/intro_01_2.html">연혁</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/intro/intro_02.html">인사말</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/intro/intro_03.html" class="newgobtn">미션,비젼,핵심가치</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/intro/intro_06_rcu_list.html">채용정보</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/intro/intro_07.html" class="newgobtn">협력병원</a></li>
							<li><a href="<?=$GP -> SERVICE_DOMAIN?>/intro/intro_08.html" class="newgobtn">수상내역 및 인증</a></li>
						</ul>
					</nav>
					<div class="gnbCont">
						<!-- nav6 -->
						<!--<ul class="bannerList">
							<!-- li><a href="#"><img src="/images/common/banner-nk.jpg" alt="NK사회공헌 - 지역사회와 상생하는 병원 바로가기"></a></li 
							<li><a href="/intro/intro_06_gl_list.html"><img src="/images/common/banner-news.jpg" alt="병원소식"></a><a href="/intro/intro_06_rcu_list.html"><img src="/images/common/banner-rcu.jpg" alt="채용정보"></a></li>
						</ul>-->

						<!-- 공통 -->
						<div class="gnbInfor">
							<dl>
								<dt>병원이용문의</dt>
								<dd>콜센터 : 1661 – 7779</dd>
								<dd>ARS : 031-980-9114</dd>
								<dd>
									<span class="timeInfo">평일 08:30 ~ 17:30</span>
									<span class="timeInfo">토요일 및 오전진료시 : 08:30 ~ 13:00</span>
								</dd>
							</dl>
							<div class="mg-t10"><a href="<?=$GP -> SERVICE_DOMAIN?>/guide/guide_01.html"><img src="/images/common/banner-counsel-6.gif" alt="진료상담"></a></div>
							<!-- <div class="mg-t10"><a href="<?=$GP -> SERVICE_DOMAIN?>/customer/customer_06_list.html"><img src="/images/common/banner-customer-6.gif" alt="고객소리함"></a></div> -->
							<p class="map">
								<a href="<?=$GP -> SERVICE_DOMAIN?>/infor/infor_01.html">
									<strong>찾아오시는 길</strong>
									<span>바로가기</span>
								</a>
							</p>
						</div>
						<!-- //공통 -->
					</div>
				</div>
			</div>
			<!-- //Sub Gnb Menu -->
		</div>