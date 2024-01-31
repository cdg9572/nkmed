<?php /* Template_ 2.2.8 2023/08/03 16:52:00 /home/hosting_users/nkmed/www/v3/view/info/info2_2.tpl 000012709 */ 
$TPL_r_list_1=empty($TPL_VAR["r_list"])||!is_array($TPL_VAR["r_list"])?0:count($TPL_VAR["r_list"]);?>
<!-- 모달 -->
<!-- 최근 예약 내역 -->
<div class="rsv-submit recent">
	<div class="rsv-submit-box small">
		<div class="rsv-submit-head">
			<img src="/resource-pc/images/logo.png" alt="인봉의료재단 뉴고려병원">
			<button type="button" onclick="$('.rsv-submit.recent').fadeOut(100); return false">닫기</button>
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
<?php if($TPL_VAR["r_list"]){?>
<?php if($TPL_r_list_1){foreach($TPL_VAR["r_list"] as $TPL_V1){?>
						<input type="hidden" name="recept_no" id="recept_no" value="<?php echo $TPL_V1["recept_no"]?>" />                        
						<tr>                                        
							<td><?php echo $TPL_V1["r_ymd"]?></td>
							<td><?php echo $TPL_V1["r_time"]?></td>
							<td><?php echo $TPL_V1["r_name"]?></td> 
							<td>
								<button type="button" onclick="window.location.href='/v3/reserve.php?tab=info15_1';" class="btnType2" style="width: 100%;line-height: 3rem;">선택</button>
							</td>                                                                             															
						</tr>	                                                                    
<?php }}?>
<?php }else{?> 
                        <tr>
                            <td colspan="4">예약한 내역이 없습니다.</td>	
                        </tr>
<?php }?>
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
<?php $this->print_("infomenu",$TPL_SCP,1);?>

<div class="section">
	<div class="tabMenu" id="tab_menu1">
		<ul>
			<li><a href="/v3/reserve.php?tab=info2_1"><span>진료과 예약</span></a></li>
			<li class="active"><a href="/v3/reserve.php?tab=info2_2"><span>의료진 예약</span></a></li>
		</ul>
	</div>
    <h3 class="subTitle">환자 정보</h3>
	<table class="lineTable" id="link_target">
		<caption>환자 정보</caption>
		<colgroup>
			<col style="width:50%;">
			<col>
		</colgroup>
		<tbody>
            <tr>
				<td>성함</td>
				<td class="right"><?php echo $TPL_VAR["name"]?></td>
			</tr>
			<tr>
				<td>전화</td>
				<td class="right"><?php echo $TPL_VAR["mobile"]?></td>
			</tr>
		</tbody>
	</table>
	<div class="btnWrap">
		<span>
			<a href="" class="btnType2 iconDown" onclick="$('.rsv-submit.recent').fadeIn(100); return false">최근 예약내역 불러오기</a>
		</span>
	</div>

    <div class="rsv-step-wrap">		
		<!-- 의료진 선택 -->
		<div class="rsv-step-box">
			<div class="rsv-step-tit">
				<span class="step">STEP 1</span>
				<span class="bar"></span>
				<span class="tit">의료진을 검색해주세요.</span><!-- 이부분 의료진 선택하면 의료진 이름으로 바뀌면 됩니다~ -->
			</div>
			<div class="rsv-step-cont">
            <form class="search-area" name="sForm" method="get" action="/v3/reserve.php?#link_target">
				<div class="rsv-search">
     				<input type="hidden" value="info2_2" id="tab" name="tab">                  
					<input type="text" placeholder="의료진을 검색해주세요." class="form-control" id="dr_name" name="dr_name" value="<?=$_GET["dr_name"]?>">
					<button type="submit" class="btnType2">검색</button>
					<a href="page02-2.html/#link_target" class="btnType2">초기화</a>
				</div>
            </form>
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

        <form id="r_form" name="r_form" class="body" action="?" method="post">
            <input type="hidden" value="ONLINE_RESERVE_REG" id="r_mode" name="r_mode">                  
            <input type="hidden" value="<?=$c_type?>" id="c_type" name="c_type">
            <input type="hidden" value="<?=$ptype?>" id="ptype" name="ptype">
            <input type="hidden" value="<?=$dr_name?>" id="dr_name" name="dr_name">
            <input type="hidden" value="<?=$dr_ps?>" id="dr_ps" name="dr_ps">
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

		<!-- 날짜/시간 선택 -->
		<div class="rsv-step-box" id="data_box">
			<div class="rsv-step-tit">
				<span class="step">STEP 2</span>
				<span class="bar"></span>
				<span class="tit">예약일시를 선택해주세요.</span><!-- 이부분 예약일시 선택하면 -> 2023/07/06/15:20:00 이런식으로 나옵니다 -->
			</div>
			<div class="rsv-step-cont" style="display:none">
				<p class="schedule-tit">해당 진료일정은 <span class="ftColor1">ㅇㅇㅇ의료진</span>이 소속된 <br>전체(과/센터) 진료 일정입니다.</p>
				<div class="schedule-wrap">
					<div class="schedule-noti">원하는 날짜와 시간을 선택해 주세요.</div>
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
    //진료과 선택 후 의료진 표시   
    if ($('#dr_name').val()) {
            var val = $('#dr_name').val();           		

             $.ajax({
				type: "POST",
				url: "/service/doctor_sel.html",
				data: "dr_name=" + val,
				dataType: "text",
				success: function(data) {
					$('.doc').empty();
					$('.doc'). append(data);
				},
				error: function(xhr, status, error) { alert(error); }
			});
            	
        }	
		
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
            
            date_text = date.substring(0, 4) + "년" + date.substring(5, 7) + "월" + date.substring(8, 10) + "일";          
                                 
            $("#is_date").val(date);            
            $('.rsv-step-box:eq(1) .rsv-step-tit .tit').text(date_text);
         
        
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
            // button.hide(); // 버튼을 숨깁니다.
            //button.text('처리중이니 잠시 기다려 주세요'); // 버튼 텍스트 변경	
 			$('.rsv-submit.rsv').hide();
			$('#loadingOverlay').show();
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