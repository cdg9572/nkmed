<!-- 모달 -->
<!-- 최근 예약 내역 -->
<div class="rsv-submit recent">
	<div class="rsv-submit-box small">
		<div class="rsv-submit-head">
			<img src="/resource-pc/images/logo.png" alt="인봉의료재단 뉴고려병원">
			<button type="button" onclick="$('.rsv-submit.recent').fadeOut(100)">닫기</button>
		</div>
		<div class="rsv-submit-body">
			<p class="rsv-box-tit">최근 예약내역<span class="c-green scale"> ●</span></p>
			<!-- <div class="s-pad-box gray text-left">
				오늘 날짜로부터 1년 이내의 내역만 노출됩니다.
			</div> -->
			<div class="tableType1" style="table-layout: auto;text-align: center;">
				<table>
					<colgroup>
						<col style="width:30%">
						<col style="width:20%">
						<col style="width:20%">
						<col style="width:20%">
					</colgroup>
					<thead>
						<tr>
							<th>예약일</th>
							<th>시간</th>
							<th>의료진</th>
							<th>선택</th>
						</tr>
					</thead>
					<tbody>
						<input type="hidden" name="recept_no" id="recept_no" value="<?=$data02['data'][$i]["recept_no"]?>" />
						<tr>                                        
							<td>2023-03-03</td>
							<td>15:30</td>
							<td>심봉사</td> 
							<td>
								<button type="button" onclick="window.location.href='/service/page14-2.html';" class="btnType2" style="width: 100%;line-height: 3rem;">선택</button>
							</td>                                                                              
															
						</tr>	
					</tbody>
				</table>
			</div>
		</div>
		<!-- <div class="rsv-submit-foot">										
			<button type="button" onclick="$('.rsv-submit.recent').fadeOut(100)">취소</button>
			<button type="submit" id="res_submit">확인</button>
		</div> -->
	</div>
</div>
<!-- 예약버튼 누른 후 -->
<div class="rsv-submit rsv">
	<div class="rsv-submit-box small">
		<div class="rsv-submit-head">
			<img src="/resource-pc/images/logo.png" alt="인봉의료재단 뉴고려병원">
			<button type="button" onclick="$('.rsv-submit.rsv').fadeOut(100)">닫기</button>
		</div>
		<div class="rsv-submit-body">
			<p class="rsv-box-tit">진료예약신청<span class="c-green scale"> ●</span></p>
			<textarea name="comt" id="comt" class="rsv-textarea" cols="30" rows="5" placeholder="환자의 증상을 입력해 주시기 바랍니다.(30자 이내)"></textarea>
		</div>
		<div class="rsv-submit-foot">										
			<button type="button" onclick="$('.rsv-submit.rsv').fadeOut(100)">취소</button>
			<button type="submit" id="res_submit">예약하기</button>
		</div>
	</div>
</div>
</form>
<div id="loadingOverlay" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;">
	<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #fff; font-size: 20px;">
	처리중이니 잠시 기다려 주세요...
	</div>
</div>
{#infomenu}
<div class="section">
	<div class="tabMenu" id="tab_menu1">
		<ul>
			<li class="active"><a href="/v3/info.php?tab=info2_1"><span>진료과 예약</span></a></li>
			<li><a href="/v3/info.php?tab=info2_2"><span>의료진 예약</span></a></li>
		</ul>
	</div>
    <h3 class="subTitle">환자 정보</h3>
	<table class="lineTable">
		<caption>환자 정보</caption>
		<colgroup>
			<col style="width:50%;">
			<col>
		</colgroup>
		<tbody>
			<tr>
				<td>성함</td>
				<td class="right">홍길동</td>
			</tr>
			<tr>
				<td>전화</td>
				<td class="right">010-1004-5882</td>
			</tr>
		</tbody>
	</table>
	<div class="btnWrap">
		<span>
			<a href="" class="btnType2 iconDown" onclick="$('.rsv-submit.recent').fadeIn(100);return false">최근 예약내역 불러오기</a>
		</span>
	</div>
    <div class="rsv-step-wrap">
		<!-- 진료과 선택 -->
		<div class="rsv-step-box">
			<div class="rsv-step-tit">
				<span class="step">STEP 1</span>
				<span class="bar"></span>
				<span class="tit">진료과를 선택해주세요.</span><!-- 이부분 진료과 선택하면 진료과 명으로 바뀌면 됩니다~ -->
			</div>
			<div class="rsv-step-cont">
				<div class="initial">
					<button type="button">ALL</button>
					<button type="button">ㄱ</button>
					<button type="button">ㄴ</button>
					<button type="button">ㄷ</button>
					<button type="button">ㄹ</button>
					<button type="button">ㅁ</button>
					<button type="button">ㅂ</button>
					<button type="button">ㅅ</button>
					<button type="button">ㅇ</button>
					<button type="button">ㅈ</button>
					<button type="button">ㅊ</button>
					<button type="button">ㅋ</button>
					<button type="button">ㅌ</button>
					<button type="button">ㅍ</button>
					<button type="button">ㅎ</button>
				</div>
				<div class="initial-list">
					<button type="button">· 정형외과</button>
					<button type="button">· 신경외과</button>
					<button type="button">· 신경과</button>
					<button type="button">· 일반외과</button>
					<button type="button">· 심장혈관흉부외과</button>
					<button type="button">· 소화기내과</button>
					<button type="button">· 순환기내과</button>
					<button type="button">· 신장내과</button>
					<button type="button">· 호흡기내과</button>
					<button type="button">· 내분비내과</button>
					<button type="button">· 소아청소년과</button>
					<button type="button">· 산부인과</button>
					<button type="button">· 피부비뇨의학과</button>
					<button type="button">· 재활의학과</button>
					<button type="button">· 치과</button>
					<button type="button">· 영상의학과</button>
					<button type="button">· 마취통증의학과</button>
					<button type="button">· 진단검사의학과</button>
					<button type="button">· 직업환경의학과</button>
					<button type="button">· 응급의학과</button>
				</div>
			</div>
		</div>

		<!-- 의료진 선택 -->
		<div class="rsv-step-box">
			<div class="rsv-step-tit">
				<span class="step">STEP 2</span>
				<span class="bar"></span>
				<span class="tit">의료진을 선택해주세요.</span><!-- 이부분 의료진 선택하면 의료진 이름으로 바뀌면 됩니다~ -->
			</div>
			<div class="rsv-step-cont">
				<div class="radio">
					<label for="li-fast">
						<input id="li-fast" type="radio" name="li" checked> 예약 빠른순
					</label>
					<label for="li-list">
						<input id="li-list" type="radio" name="li"> 가나다순
					</label>
				</div>
				<ul class="doc">
					<li>
						<div class="img"><img src="http://www.nkhospital.net/common/doctor/16110456833771.png" alt=""></div>
						<div class="text">
							<div class="name">
								김윤식 병원장 <a href="">자세히 보기</a>
							</div>
							<div class="if">
								<span>전문분야</span>
								<p>관절내시경, 인공관절, 고관절, 어깨관절, 무릎관절, 족관절</p>
							</div>
							<div class="if">
								<span>빠른진료</span>
								<p>2023-06-30 16:10:00</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<!-- 날짜/시간 선택 -->
		<div class="rsv-step-box">
			<div class="rsv-step-tit">
				<span class="step">STEP 3</span>
				<span class="bar"></span>
				<span class="tit">예약일시를 선택해주세요.</span>
			</div>
			<div class="rsv-step-cont">
				<p class="schedule-tit">해당 진료일정은 <span class="ftColor1">ㅇㅇㅇ의료진</span>이 소속된 <br>전체(과/센터) 진료 일정입니다.</p>
				<div class="schedule-wrap">
					<div class="schedule-noti">현재 가장 빠른 진료예약일자는 <br>2023/07/06/15:20:00입니다.</div>
					<div class="schedule-box">
						<div class="cal">
							<!-- 달력이 들어갑니다.info_cal.tpl -->
						</div>
						<div class="calInfo">
							<div class="label-box">
								<span class="today">오늘</span>
								<span class="possible">예약가능</span>
								<span class="choice">선택</span>
							</div>
							<div class="label-time">
								<button type="button">10:00</button>
								<button type="button">10:00</button>
								<button type="button">10:00</button>
								<button type="button">10:00</button>
								<button type="button">10:00</button>
								<button type="button">10:00</button>
								<button type="button">10:00</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="btnWrap">
		<span>
			<a href="" class="btnType2 iconOnline" onclick="$('.rsv-submit.rsv').fadeIn(100);return false">예약하기</a>
		</span>
	</div>
</div>
<script>
	$(function(){
		$(".rsv-step-wrap .rsv-step-cont .initial button").on("click",function(){
			if($(this).eq() == 0){
				$(this).siblings().removeClass("on")
			}else{
				$(this).addClass("on").siblings().removeClass("on")
			};
		});

		$(".rsv-step-wrap .rsv-step-cont .initial-list button, .rsv-step-wrap .rsv-step-cont .doc li, .schedule-box .label-time button").on("click",function(){
			$(this).addClass("on").siblings().removeClass("on")
		});	 
		
	});   
</script>
