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
                    {?r_list}
                        <!--{@r_list}-->
						<input type="hidden" name="recept_no" id="recept_no" value="{.recept_no}" />                        
						<tr>                                        
							<td>{.r_ymd}</td>
							<td>{.r_time}</td>
							<td>{.r_name}</td> 
							<td>
								<button type="button" onclick="window.location.href='/v3/reserve.php?tab=info15_1';" class="btnType2" style="width: 100%;line-height: 3rem;">선택</button>
							</td>                                                                             															
						</tr>	                                                                    
                        <!--{/}-->
                    {:} 
                        <tr>
                            <td colspan="4">예약한 내역이 없습니다.</td>	
                        </tr>
                    {/}
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
<div id="loadingOverlay" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); z-index: 9999;">
	<div style="width: 90%;position: absolute; top: 50%; left: 50%; transform: translate(-50%, -200%); color: #fff; font-size: 25px;">
	처리중이니 잠시 기다려 주세요...
	</div>
</div>
{#infomenu}
<div class="section">
	<div class="tabMenu" id="tab_menu1">
		<ul>
			<li class="active"><a href="/v3/reserve.php?tab=info2_1"><span>진료과 예약</span></a></li>
			<li><a href="/v3/reserve.php?tab=info2_2"><span>의료진 예약</span></a></li>
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
				<td class="right">{name}</td>
			</tr>
			<tr>
				<td>전화</td>
				<td class="right">{mobile}</td>
			</tr>
		</tbody>
	</table>
	<div class="btnWrap">
		<span>
			<a href="" class="btnType2 iconDown" onclick="$('.rsv-submit.recent').fadeIn(100);return false">최근 예약내역 불러오기</a>
		</span>
	</div>
    <form id="r_form" name="r_form" class="body" action="?" method="post">
		<input type="hidden" value="ONLINE_RESERVE_REG" id="r_mode" name="r_mode">                          
		<input type="hidden" value="<?=$ptype?>" id="ptype" name="ptype">    
		<input type="hidden" value="<?=$_SESSION['suserphone']?>" id="tor_rs_phone" name="tor_rs_phone">
		<input type="hidden" value="<?=$tor_name?>" id="tor_name" name="tor_name">    
		<input type="hidden" name="mb_code" id="mb_code" value="<?=$_SESSION['susercode']?>" />
		<input type="hidden" name="tor_rs_name" id="tor_rs_name" value="<?=$_SESSION['susername']?>" />
		<input type="hidden" name="dr_mcode_next" id="dr_mcode_next" />
		<input type="hidden" name="dr_mtreat_no_next" id="dr_mtreat_no_next" />
		<input type="hidden" name="is_date" id="is_date"/>
		<input type="hidden" name="is_time" id="is_time"/>
		<input type="hidden" name="is_comt" id="is_comt"/>
		<input type="hidden" name="dr_idx_next" id="dr_idx_next"/>
		<input type="hidden" id="dr_ps" name="dr_ps">        
		<input type="hidden" id="c_type" name="c_type">
		<input type="hidden" id="dr_name" name="dr_name">  
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
                    <button type="button" data-target="all">ALL</button>
                    <button type="button" data-target="ㄱ">ㄱ</button>
                    <button type="button" data-target="ㄴ">ㄴ</button>
                    <button type="button" data-target="ㄷ">ㄷ</button>
                    <button type="button" data-target="ㄹ">ㄹ</button>
                    <button type="button" data-target="ㅁ">ㅁ</button>
                    <button type="button" data-target="ㅂ">ㅂ</button>
                    <button type="button" data-target="ㅅ">ㅅ</button>
                    <button type="button" data-target="ㅇ">ㅇ</button>
                    <button type="button" data-target="ㅈ">ㅈ</button>
                    <button type="button" data-target="ㅊ">ㅊ</button>
                    <button type="button" data-target="ㅋ">ㅋ</button>
                    <button type="button" data-target="ㅌ">ㅌ</button>
                    <button type="button" data-target="ㅍ">ㅍ</button>
                    <button type="button" data-target="ㅎ">ㅎ</button>
				</div>
				<div class="initial-list">
                    <button type="button" data-group="ㅈ" value="AB">· 정형외과</button>
                    <button type="button" data-group="ㅅ" value="AC">· 신경외과</button>
                    <button type="button" data-group="ㅇ" value="K">· 일반외과</button>															
                    <button type="button" data-group="ㅅ" value="AK">· 심장혈관흉부외과</button>
                    <button type="button" data-group="ㅅ" value="AD">· 소화기내과</button>
                    <button type="button" data-group="ㅅ" value="AE">· 순환기내과</button>
                    <button type="button" data-group="ㅅ" value="AF">· 신장내과</button>
                    <button type="button" data-group="ㅎ" value="T">· 호흡기내과</button>
                    <button type="button" data-group="ㅅ" value="M">· 신경과</button>								
                    <button type="button" data-group="ㅅ" value="N">· 산부인과</button>
                    <button type="button" data-group="ㅍ" value="V">· 피부비뇨의학과</button>
                    <button type="button" data-group="ㅈ" value="W">· 재활의학과</button>
				</div>
			</div>
		</div>

		<!-- 의료진 선택 -->
		<div class="rsv-step-box">
			<div class="rsv-step-tit">
				<span class="step">STEP 2</span>
				<span class="bar"></span>
				<span class="tit" id="doctor_tit">의료진을 선택해주세요.</span><!-- 이부분 의료진 선택하면 의료진 이름으로 바뀌면 됩니다~ -->
			</div>
			<div class="rsv-step-cont">
				<!-- <div class="radio">
					<label for="li-fast">
						<input id="li-fast" type="radio" name="li" checked> 예약 빠른순
					</label>
					<label for="li-list">
						<input id="li-list" type="radio" name="li"> 가나다순
					</label>
				</div> -->
				<ul class="doc">					
				</ul>
			</div>
		</div>

		<!-- 날짜/시간 선택 -->
		<div class="rsv-step-box" id="data_box">
			<div class="rsv-step-tit">
				<span class="step">STEP 3</span>
				<span class="bar"></span>
				<span class="tit">예약일시를 선택해주세요.</span> <span class="tit-time"></span>
			</div>
			<div class="rsv-step-cont" style="display:none">
				<p class="schedule-tit">해당 진료일정은 <span class="ftColor1"></span>이 소속된 <br class="mb-show">전체(과/센터) 진료 일정입니다.</p>
				<div class="schedule-wrap">
					<div class="schedule-noti">원하는 날짜와 시간을 선택해 주세요.</div>
					<div class="schedule-box">
						<div class="cal">							
						</div>
						<div class="calInfo">
							<div class="label-box">
								<span class="today">오늘</span>
								<span class="possible">예약가능</span>
								<span class="choice">선택</span>
							</div>
							<div class="label-time">								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="btnWrap">
		<span>
			<a href="" class="btnType2 iconOnline" id="res1_submit">예약하기</a>
		</span>
	</div>
</div>
</form>
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

        //진료과  자음 선택
        $('.initial button').click(function() {
            var target = $(this).data('target');
            
            if (target === 'all') {
            // "ALL" 버튼 클릭 시 모든 버튼 표시
            $('.initial-list button').show();
            } else {
            // 다른 버튼 클릭 시 선택한 target과 동일한 data-group을 가진 버튼만 표시            
            $('.initial-list button[data-group="' + target + '"]').show();
            $('.initial-list button[data-group!="' + target + '"]').hide();
            }
        }); 
        
        //진료과 선택 후 의료진 표시
        $('.initial-list button').click(function() {       
			
			$('.rsv-step-box:eq(2) .rsv-step-cont').hide();//캘린더 숨기기
   		    $('.rsv-step-box:eq(1) .rsv-step-tit .tit').text("의료진을 선택해주세요.");
			$('.rsv-step-box:eq(2) .rsv-step-tit .tit').text("예약일시를 선택해주세요.");
			$(".tit-time").text("");

			 var val = $(this).val();
						 
			 if(val == '') {
				 return false;
			 }

			 var buttonText = $(this).text().replace('· ', '');
      		 $('.rsv-step-box:first .rsv-step-tit .tit').text(buttonText);            

             $.ajax({
				type: "POST",
				url: "/service/doctor_sel.html",
				data: "ct_type=" + val,
				dataType: "text",               
                success: function(data) {
                    $('.doc').empty();
                    $('.doc').append(data);                  
                },
                error: function(xhr, status, error) {
                    alert(error);                   
                }
                });
		});
       
        //달력 월 이동        
        function ch_cal(date, yydd, dr_idx) {   
            if (date == '') {
                alert("날짜를 선택하세요");
                return false;
            }

			$.ajax({
				type: "POST",
				url: "/service/doctor_cal.html",
				data: "date=" + date + "&yydd=" + yydd + "&dr_idx=" + dr_idx,
				dataType: "text",
				success: function (data) {
					$('.cal').empty();
					$('.cal').append(data);
				},
				error: function (xhr, status, error) {
					alert(error);
				}
			});
        }	
        
        //시간 노출
        function time_sel(dr_idx, date, obj) {
            if (dr_idx == '') {
                alert("의료진을 먼저 선택하세요");
                return false;
            }
            $('.label-time').empty();   
            $(".tit-time").empty();
            
            date_text = date.substring(0, 4) + "년 " + date.substring(5, 7) + "월 " + date.substring(8, 10) + "일";    
                                 
            $("#is_date").val(date);            
            $('.rsv-step-box:eq(2) .rsv-step-tit .tit').text(date_text);
            
        
            $.ajax({
                type: "POST",
                url: "/service/doctor_time.html",
                data: "date=" + date + "&dr_idx=" + dr_idx,
                dataType: "text",
                success: function (data) {
                    $('.label-time').empty();                
                    $('.label-time').append(data);
                },
                error: function (xhr, status, error) {
                    alert(error);
                }
            });  
			$('.calBody td').removeClass('cho');
            $(obj.parentNode).addClass('cho');
            return false;
        }

        function disableButton() {
            var button = $('#res_submit');
            button.prop('disabled', true);
			$('.rsv-submit.rsv').hide();
			$('#loadingOverlay').show();
            // button.hide(); // 버튼을 숨깁니다.
            //button.text('처리중이니 잠시 기다려 주세요'); // 버튼 텍스트 변경	 
        }	

		$('#res1_submit').click(function(){			
			
			if($('#dr_mcode_next').val() == '')	{
				alert('의료진을 선택해주세요');				
                $('.rsv-step-wrap').focus();
				return false;
			}	

			if($('#is_date').val() == '')	{
				alert('날짜를 선택해주세요');
				$('.schedule-wrap').focus();
				return false;
			}	

			if($('#is_time').val() == '')	{
				alert('시간을 선택해주세요');
				$('.schedule-wrap').focus();
				return false;
			}			

			$('.rsv-submit.rsv').fadeIn(100);
            return false;
        });

        $('#res_submit').click(function(){

			if($('#comt').val() == '')	{
				alert('증상을 입력해주세요');
				return false;
			}	            
            
            $("#is_comt").val($('#comt').val());
            disableButton();	

            $('#r_form').attr('action','/service/proc/online_proc.php');
            $('#r_form').submit();
            return false;

        });
</script>
