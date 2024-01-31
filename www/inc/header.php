<?php
include_once $GP -> HOME."/member/login.html";
include_once $GP -> HOME."main_lib/main_proc.php";

$Top_Slide = Main_Slide("PC");//슬라이드

	$args = "";
	$args = array("show_row" =>"9" , "show_page" =>"10" ,  "jb_code" => "100") ;  
	$data = "";
    $data = $C_JHBoard -> Board_List(array_merge($_GET,$_POST,$args));

?>
<a id="top" href="#none"><span>▲</span>TOP</a>
<header class="header">
			<div id="login-bar">
				<ul class="left">
					<!-- <li>
						콜센터(검진센터 문의)
						<span>1833-9988</span>
					</li> -->
					<li>
						진료상담 및 예약
						<span>031-980-9114</span>
					</li>
				</ul>
                <form id="search_all" name="search_all" method="post">
				<ul class="right">
					<?if($_SESSION['suserid'] == ''){?>
					<li><a href="#" onclick="modal_on_login(); return false;">LOGIN <span class="bar"></span> JOIN</a></li>
					<?}else{?>
					<li><a href="/mypage/mypage01.html">MYPAGE</a></li>
					<li><a href="/member/logout.html">LOGOUT</a></li>
					<?}?>                   
					<!-- <li>
						<input type="text" id="schtxt" placeholder="통합검색어를 입력하세요.">
						<button id="schbtn"><img src="/resource-pc/images/search-gray.png" alt="검색" ></button>
					</li> -->
					<li class="h-sns">
						<ol>
							<li>
								<a href="https://blog.naver.com/nkblog2014">
									<img class="mb-hide" src="/resource-pc/images/h-naver.png" alt="네이버" target="_blank">
									<img class="mb-show" src="/resource-pc/images/h-naver-m.png" alt="네이버" target="_blank">
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UC_8u752emktPchD8eSpYVNg">
									<img class="mb-hide" src="/resource-pc/images/h-you.png" alt="유튜브" target="_blank">
									<img class="mb-show" src="/resource-pc/images/h-you-m.png" alt="유튜브" target="_blank">
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/nkhospital7">
									<img class="mb-hide" src="/resource-pc/images/h-face.png" alt="페이스북" target="_blank">
									<img class="mb-show" src="/resource-pc/images/h-face-m.png" alt="페이스북" target="_blank">
								</a>
							</li>
						</ol>
					</li>
					<li class="m-close mb-show">
						<a href="#none" onclick="$('#gnb').slideUp(300);$('#login-bar').removeClass('on');"><img src="/resource-pc/images/m-close.png" alt=""></a>
					</li>
				</ul>
                </form>               
			</div>
			<nav>
				<h1 id="logo">
					<a href="/">
						<img class="mb-hide" src="/resource-pc/images/logo.png" alt="인봉의료재단 뉴고려병원">
						<img class="mb-show" src="/resource-pc/images/m-logo.png" alt="인봉의료재단 뉴고려병원">
					</a>
				</h1>
				<a id="menu" href="#">
					<img class="mb-hide" src="/resource-pc/images/menu.png" alt="">
					<img class="mb-show" src="/resource-pc/images/m-menu.png" alt="">
					<span>MENU</span>
				</a>
				<div id="gnb">
					<ul>
						<li class="left">
							<a href="#none" class="gnb-tit bc1 on" data-idx="1">서비스 이용안내</a>
							<div>
								<div class="row">
									<dl>
										<dt><a href="#none">예약/발급</a></dt>
										<!--<dd><a href="#none" onclick="javascript:alert('시스템 점검중입니다. 전화예약을 이용해주세요.')">진료예약</a></dd>-->
										<!-- <dd><a href="#none" onclick="window.open('http://nkhospital.net/m/main.html', 'pop', 'menubar=no,status=no,scrollbars=no,resizable=no ,width=500,height=700,top=100,left=100');">진료예약</a></dd> -->
										<dd><a href="/service/page01.html">진료예약안내</a></dd>
										<dd><a href="/service/page02-1.html">진료 예약(재진)</a></dd>
										<dd><a href="/service/page14.html">예약 조회</a></dd>
										<!-- <dd><a href="#none" onclick="window.open('http://smart.nkhospital.net/index.html', 'pop', 'menubar=no,status=no,scrollbars=yes,resizable=no ,width=500,height=600,top=100,left=100');">검진예약</a></dd> -->
										<dd><a href="/service/page03.html">증명서발급안내</a></dd>
									</dl>
									<dl>
										<dt><a href="#none">입/퇴원 안내</a></dt>
										<dd><a href="/service/page06.html">입/퇴원 안내</a></dd>
										<dd><a href="/service/page07.html">입원생활안내</a></dd>
										<dd><a href="/service/page08.html">면회안내</a></dd>
									</dl>
								</div>
								<div class="row">
									<dl>
										<dt><a href="#none">진료안내</a></dt>
										<dd><a href="/service/page04.html">외래진료안내</a></dd>
										<dd><a href="/service/page05.html">응급진료안내</a></dd>
										<dd style="margin-top:5px;line-height:1.2;"><a href="/service/page13.html">특수검진 외국인 문진표 양식</a></dd>
									</dl>
									<dl>
										<dt><a href="#none">병원안내</a></dt>
										<dd><a href="/service/page09-2.html">병원둘러보기</a></dd>
										<dd><a href="/service/page10-1.html">오시는길/주차안내</a></dd>
										<dd><a href="/service/page11.html">장례식장</a></dd>
										<!-- <dd><a href="/service/page12.html">전화번호 안내</a></dd> -->
									</dl>
								</div>
								<div class="row">
									<dl>
										<dt><a href="#none">건강검진</a></dt>
										<dd><a href="/service/page15-1.html">건강검진 안내</a></dd>
										<dd><a href="#none" onclick="window.open('http://smart.nkhospital.net/index.html', 'pop', 'menubar=no,status=no,scrollbars=yes,resizable=no ,width=500,height=600,top=100,left=100');">검진 예약/결과</a></dd>
									</dl>
								</div>
							</div>
							<img src="/resource-pc/images/gnb-logo.png" alt="믿으니까, 뉴고려병원">
						</li>
						<li class="center">
							<a href="/center01/page.php?depart=A&gubun=A" data-idx="2" class="gnb-tit bc2">진료과/의료진</a>
							<div>
								<div class="row">
									<dl>
										<dt><a href="/center01/page.php?depart=A&gubun=A">전문센터</a></dt>
										<dd><a href="/center01/page.php?depart=A&gubun=A">관절센터</a></dd>
										<dd><a href="/center01/page.php?depart=C&gubun=A">외상센터</a></dd>
										<dd><a href="/center01/page.php?depart=B&gubun=A">척추센터</a></dd>
										<dd><a href="/center01/page.php?depart=D&gubun=A">뇌신경센터</a></dd>
										<dd><a href="/center01/page.php?depart=F&gubun=A">심혈관센터</a></dd>
										<dd><a href="/center01/page.php?depart=E&gubun=A">소화기센터</a></dd>
										<dd><a href="/center01/page.php?depart=S&gubun=A">신장센터</a></dd>
										<!--<dd><a href="/center01/page.php?depart=G&gubun=A">소아청소년센터</a></dd>-->
										<!-- <dd><a href="/center01/page.php?depart=H&gubun=A">통증센터</a></dd> -->
										<dd><a href="/center01/page.php?depart=I&gubun=A">응급의료센터</a></dd>
										<dd><a href="/center01/page.php?depart=J&gubun=A">평생건강증진센터</a></dd>
										<dd><a href="/center01/page.php?depart=AJ&gubun=A">재활치료센터</a></dd>
									</dl>
									<dl>
										<dt><a href="/center01/page.php?depart=AB&gubun=B">진료과</a></dt>
										<dd><a href="/center01/page.php?depart=AB&gubun=B">정형외과</a></dd>
										<dd><a href="/center01/page.php?depart=AC&gubun=B">신경외과</a></dd>
										<dd><a href="/center01/page.php?depart=M&gubun=B">신경과</a></dd>
										<dd><a href="/center01/page.php?depart=K&gubun=B">일반외과</a></dd>
										<dd><a href="/center01/page.php?depart=AK&gubun=B">심장혈관흉부외과</a></dd>
										<dd><a href="/center01/page.php?depart=AD&gubun=B">소화기내과</a></dd>
										<dd><a href="/center01/page.php?depart=AE&gubun=B">순환기내과</a></dd>
                                        <dd><a href="/center01/page.php?depart=Z&gubun=B">정신건강의학과</a></dd>
										<dd><a href="/center01/page.php?depart=AF&gubun=B">신장내과</a></dd>
										<dd><a href="/center01/page.php?depart=T&gubun=B">호흡기내과</a></dd>
										<dd><a href="/center01/page.php?depart=R&gubun=B">내분비내과</a></dd>
										<dd><a href="/center01/page.php?depart=AG&gubun=B">소아청소년과</a></dd>
										<dd><a href="/center01/page.php?depart=X&gubun=B">가정의학과</a></dd>
										<dd><a href="/center01/page.php?depart=N&gubun=B">산부인과</a></dd>
										<dd><a href="/center01/page.php?depart=V&gubun=B">피부비뇨의학과</a></dd>
										<dd><a href="/center01/page.php?depart=W&gubun=B">재활의학과</a></dd>
										<dd><a href="/center01/page.php?depart=O&gubun=B">치과</a></dd>
										<dd><a href="/center01/page.php?depart=P&gubun=B">영상의학과</a></dd>
										<dd><a href="/center01/page.php?depart=AH&gubun=B">마취통증의학과</a></dd>
										<dd><a href="/center01/page.php?depart=Q&gubun=B">진단검사의학과</a></dd>
										<dd><a href="/center01/page.php?depart=AA&gubun=B">직업환경의학과</a></dd>
										<dd><a href="/center01/page.php?depart=AI&gubun=B">응급의학과</a></dd>                                   
									</dl>
									<dl>
										<dt><a href="/center01/page.php?depart=A&gubun=C">특수클리닉</a></dt>
										<dd><a href="/center01/page.php?depart=A&gubun=C">하지정맥류클리닉</a></dd>
										<dd><a href="/center01/page.php?depart=C&gubun=C">요실금클리닉</a></dd>
										<dd><a href="/center01/page.php?depart=G&gubun=C">비만클리닉</a></dd>
										<dd><a href="/center01/page.php?depart=I&gubun=C">갑상선클리닉</a></dd>
										<dd><a href="/center01/page.php?depart=J&gubun=C">복강경클리닉</a></dd>
										<dd><a href="/center01/page.php?depart=H&gubun=C">당뇨클리닉</a></dd>
										<dd><a href="/center01/page.php?depart=E&gubun=C">맘모톰클리닉</a></dd>									
									</dl>
									<dl>
										<dt><a href="#none">의료진소개</a></dt>
										<dd><a href="/doctor/page05.html">의료진 전체보기</a></dd>
										<dd><a href="/doctor/page.php?depart=A&gubun=A">전문센터</a></dd>
										<dd><a href="/doctor/page.php?depart=AB&gubun=B">진료과</a></dd>
										<!-- <dd><a href="/doctor/page.php?depart=A&gubun=C">특수클리닉</a></dd> -->
									</dl>
								</div>
							</div>
						</li>
						<li class="right">
							<a href="#none" class="gnb-tit bc3">뉴고려 커뮤니티</a>
							<div>
								<div class="row">
									<dl>
										<dt><a href="/notice/notice.php?jb_code=10">소통/공감</a></dt>
										<dd><a href="/notice/notice.php?jb_code=10">병원소식</a></dd>
										<dd><a href="/notice/notice.php?jb_code=80">포토뉴스</a></dd>
										<dd><a href="/notice/notice.php?jb_code=140">CH NK</a></dd>
										<dd><a href="/notice/notice.php?jb_code=90">언론보도</a></dd>
										<dd><a href="/notice/notice.php?jb_code=50">건강정보</a></dd>
										<!-- <dd><a href="/notice/notice.php?jb_code=40">전문의 상담</a></dd> -->
										<dd><a href="/notice/notice.php?jb_code=20">칭찬합니다</a></dd>
									</dl>
									<dl>
										<dt><a href="#">병원소개</a></dt>
										<dd><a href="/notice/page06.html">소개영상</a></dd>
										<dd><a href="/notice/page07.html">인사말</a></dd>
										<dd><a href="/notice/page12.html">HI소개</a></dd>
										<dd><a href="/notice/page08.html">연혁</a></dd>
										<dd><a href="/notice/page09.html">미션,비전,가치</a></dd>
										<dd><a href="/notice/notice.php?jb_code=100&jb_mode=tdetail&jb_idx=<?=$data['data']['0']['jb_idx']?>">채용정보</a></dd>
										<dd><a href="/notice/page11.html">협력병원 및 기관</a></dd>
									</dl>
								</div>
							</div>
							<img src="/resource-pc/images/gnb-call.png" alt="응급환자 365일 24시간 진료. 응급실:031-980-9114. 대표전화 031-980-9114.">
						</li>
					</ul>
				</div>
				<!-- //end #gnb -->
				<div id="reserve-btn-group">
					<a href="/service/page12.html">
						<img src="/resource-pc/images/tel.png" alt="">
						<span>전화예약<br>하러가기</span>
					</a>
					<!--a href="#none" onclick="window.open('http://nkhospital.net/m/main.html', 'pop', 'menubar=no,status=no,scrollbars=no,resizable=no ,width=500,height=700,top=100,left=100');" title="새창"-->
                    <a href="#none" onclick="$('.rsv-submit').fadeIn(100);"  title="새창">
						<img src="/resource-pc/images/reserve.png" alt="">
						<span>간편예약<br>하러가기</span>
					</a>
				</div>

				<!--
					Top-banner
				 -->
				 <div id="top-bnnr" class="swiper-container">
					<ul class="swiper-wrapper">
						<?=$Top_Slide?>
					</ul>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				 </div>
			</nav>
		</header>
		<!-- <div id="rsv-list" class="m-show">
			<div class="inner">
				<div class="list">
					<p class="list-title">첫 진료 간편예약</p>
					<div class="list-btn">
						<button type="button" onclick="$('.rsv-submit').fadeIn(100);">예약신청</button>
					</div>                            
				</div>
				<div class="list">
					<p class="list-title">진료 예약(재진)</p>
					<div class="list-btn">
						<a href="/m/main.html" target="_blank">온라인 예약 바로가기</a>
					</div>
				</div>
				<div class="list">
					<p class="list-title">건강검진 예약</p>
					<div class="list-btn">
						<a href="" onclick="alert('준비중입니다.')">검진 예약 바로가기</a>
					</div>
				</div>
			</div>
			
			<script>
				$(function(){
					$("#rsv-list .list").on("mouseenter",function(){
						$(this).find('.list-btn').slideDown(200)
					});
					$("#rsv-list .list").on("mouseleave", function () {
						$(this).find('.list-btn').slideUp(200)
					});
				});
			</script>
		</div> -->
		<form action="?" id="frm_ps" name="frm_ps" method="post" >
			<input type="hidden" value="PS_REG" id="mode" name="mode">
			<div class="rsv-submit">
				<div class="rsv-submit-box small">
					<div class="rsv-submit-head">
						<img src="/resource-pc/images/logo.png" alt="인봉의료재단 뉴고려병원">
						<button type="button" onclick="$('.rsv-submit').fadeOut(100)">닫기</button>
					</div>
					<div class="rsv-submit-body">
						<p class="rsv-box-tit">첫 진료 간편예약<span class="c-green scale"> ●</span></p>
						<div class="agreeSection">
							<div class="agreeTxtWrap no-scr">
								<p>
									간편예약은 병원에 처음 오시는 분들을 위한 진료 예약서비스로 전문 상담원이 전화를 통해 진료 예약을 도와드리고 있습니다.
								</p>
							</div>
						</div>
						<p class="rsv-box-tit">개인정보 수집/이용 동의<span class="c-green">(필수)</span></p>
						<?php
							include_once $_SERVER[DOCUMENT_ROOT]."/member/agree2.php";
						?>
						<div class="radio-box">
							<label for="agree-done">
								<input type="radio" id="agree-done" name="agree"> 동의합니다.
							</label>
							<label for="agree-non">
								<input type="radio" id="agree-non" name="agree"> 동의하지 않습니다.
							</label>
						</div>
						<div class="form">
							<label for="">이름</label>
							<input type="text" class="form-control" name="mb_name" id="mb_name">
						</div>
						<div class="form">
							<label for="">전화번호</label>
							<input type="text" class="form-control" name="mb_mobile" id="mb_mobile">							
						</div>
						<div class="radio-box">
							<label for="tfc_type_A">
								<input type="radio" id="tfc_type_A" name="tfc_type" value="A" > 일반문의
							</label>
							<label for="tfc_type_B">
								<input type="radio" id="tfc_type_B" name="tfc_type" value="B"> 예약문의
							</label>
						</div>
					</div>
					<div class="rsv-submit-foot">										
						<button type="button" onclick="$('.rsv-submit').fadeOut(100)">취소</button>					
						<button type="submit" id="img_submit">간편예약 신청</button>
					</div>
				</div>
			</div>
		</form>
		<script>		
        $(document).ready(function(){
            
            $('#img_submit').click(function(){    
				 if($('#agree-done').prop("checked") == false){
                    alert('개인정보 수집 및 이용에 동의해주세요');
                    $('#agree-done').focus();
                    return false;
                }    
                if($('#mb_name').val() == '')	{
                    alert('이름을 입력해주세요');
                    $('#mb_name').focus();
                    return false;
                }
                if($('#mb_mobile').val() == '')	{
                    alert('전화번호를를 입력해주세요');
                    $('#mb_mobile').focus();
                    return false;
                }    
              
                if (!$('input[name="tfc_type"]:checked').length) {
                     alert('문의 구분을 선택해주세요.');
                     $('#tfc_type').focus();
                     return false;
                 }   
                
                $('#frm_ps').attr('action','/admin/phone/proc/phone_proc.php');
                $('#frm_ps').submit();
                return false;
            });

            
        });

</script>