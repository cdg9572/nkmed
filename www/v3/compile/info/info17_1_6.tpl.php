<?php /* Template_ 2.2.8 2023/10/31 16:07:56 /home/hosting_users/nkmed/www/v3/view/info/info17_1_6.tpl 000021264 */ ?>
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
	.agreeSection .title,
	.label_wrap {display: none;}
	.tableType1 > table > thead > tr > th {color:#fff;border-color: #1795d0; background-color: #1795d0;}
	.tableType1 > table > tfoot > tr > th {color:#fff;background-color: #032a5b;}
	.tableType1 > table > tfoot > tr > th span {display: inline-block;margin-left: 1.5rem;font-size: 2rem;}
	.tableType1 .calBody tr,
	.tableType1 .calBody th,
	.tableType1 .calBody td {padding:0;border:none !important;background-color: transparent;}
	.cal {overflow: hidden;width: 90%;margin:1.5rem auto;}
    .form .form-control {border:1px solid #ccc;background-color: #fff;}
	.agreeSection {padding:2rem;box-sizing: border-box;background-color: #f1f1f1;}
	.agreeSection .agreeTxtWrap {padding:1.5rem;border: none;border-radius: 2.5rem;}
</style>
<?php $this->print_("infomenu",$TPL_SCP,1);?>

<div class="section">
	<div class="tabMenu drop">
		<p>건강검진 예약</p>
		<ul>
			<li class="active"><a href="https://nkhospital.net/v3/info.php?tab=info17_1"><span>건강검진 예약</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_2"><span>예약 확인</span></a></li>
			<li><a href="https://eo-m.com/2023/HSP/HSP_Controller.asp?part=nfc&mehId=GV2984&mtype=1" target="_blank"><span>문진표 작성</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_4"><span>검진순서</span></a></li>
			<li><a href="https://nkhospital.net/v3/info.php?tab=info17_5"><span>검진 주의사항</span></a></li>
		</ul>
	</div>
	<div class="sub-middle-tit">
		<h2>건강검진 예약</h2>
		<span class="bar"></span>
	</div>
	<h3 class="cont-tit"><small>사랑해 검진 프로그램 <i>기본종합검진 + A선택검사 6종류 + C선택검사 1종류 + 대장내시경 + 심장초음파 + 선천적 유전자검사(남34종/여35종)</i></small></h3>
    <form name="base_form" id="base_form" method="POST" action="?" enctype="multipart/form-data">
        <input type="hidden" name="mode" id="mode" value="MULTI_REG" />
        <input type="hidden" name="tm_menu" id="tm_menu" value="medicalcheckup" />   
        <input type="hidden" name="tm_type" id="tm_type" value="F"  />                             
        <input type="hidden" name="tm_content1" id="tm_content1" />                
        <input type="hidden" name="tm_content2" id="tm_content2" />                
        <input type="hidden" name="tm_content3" id="tm_content3" />                
        <input type="hidden" name="tm_content4" id="tm_content4" value="대장내시경,심장초음파,선천적 유전자검사 34종" />                
        <input type="hidden" name="tm_content12" id="tm_content12" />   
        <input type="hidden" name="page_link" id="page_link" value="/v3/info.php?tab=info17_1_6" />
	<div class="tableType1">
		<table>
			<colgroup>
				<col style="width: 50%;">
				<col>
			</colgroup>
			<thead>
				<tr>
					<th colspan="2">사랑해</th>
				</tr>
			</thead>
			<tbody>
                <tr>
					<td align="center">
						<div class="radio-box">
							<label for="m"><input type="radio" name="tm_title" id="m" value="남" checked> 남</label>
						</div>
					</td>
					<td align="center">
						<div class="radio-box">
							<label for="w"><input type="radio" name="tm_title" id="w" value="여"> 여</label>
						</div>
					</td>
				</tr>
				<tr>
					<th colspan="2">A검사</th>
				</tr>
				<tr>
					<td colspan="2" align="center">택4 or 택2</td>
				</tr>
				<tr class="gender">
					<td colspan="2">
                   <div class="check-box m on" id="checkbox1">
                        <label for="check1"><input type="checkbox" name="tm_checkbox1" id="check1" value="갑상선초음파"> 갑상선초음파</label>
                        <label for="check2"><input type="checkbox" name="tm_checkbox1" id="check2" value="경동맥초음파"> 경동맥초음파</label>
                        <label for="check3"><input type="checkbox" name="tm_checkbox1" id="check3" value="뇌CT"> 뇌CT</label>
                        <label for="check4"><input type="checkbox" name="tm_checkbox1" id="check4" value="폐CT"> 폐CT</label>
                        <label for="check5"><input type="checkbox" name="tm_checkbox1" id="check5" value="요추CT"> 요추CT</label>
                        <label for="check6"><input type="checkbox" name="tm_checkbox1" id="check6" value="경추CT"> 경추CT</label>
                        <label for="check7"><input type="checkbox" name="tm_checkbox1" id="check7" value="심장MDCT"> 심장MDCT</label>
                        <label for="check8"><input type="checkbox" name="tm_checkbox1" id="check8" value="복부비만CT"> 복부비만CT</label>
                        <label for="check9"><input type="checkbox" name="tm_checkbox1" id="check9" value="골다공증QCT"> 골다공증QCT</label>
                        <label for="check10"><input type="checkbox" name="tm_checkbox1" id="check10" value="혈관협착도 ABI"> 혈관협착도 ABI</label>
                        <label for="check11"><input type="checkbox" name="tm_checkbox1" id="check11" value="(혈액)N.K.뷰키트"> (혈액)N.K.뷰키트</label>
                        <label for="check12"><input type="checkbox" name="tm_checkbox1" id="check12" value="스마트암검사"> 스마트암검사</label>
                        <label for="check13"><input type="checkbox" name="tm_checkbox1" id="check13" value="남성호르몬검사"> 남성호르몬검사</label>
                    </div>
                    <div class="check-box w" id="checkbox2">   
                        <label for="check4_1"><input type="checkbox" name="tm_checkbox1" id="check4_1" value="갑상선초음파"> 갑상선초음파</label>
                        <label for="check4_2"><input type="checkbox" name="tm_checkbox1" id="check4_2" value="경동맥초음파"> 경동맥초음파</label>
                        <label for="check4_3"><input type="checkbox" name="tm_checkbox1" id="check4_3" value="뇌CT"> 뇌CT</label>
                        <label for="check4_4"><input type="checkbox" name="tm_checkbox1" id="check4_4" value="폐CT"> 폐CT</label>
                        <label for="check4_5"><input type="checkbox" name="tm_checkbox1" id="check4_5" value="요추CT"> 요추CT</label>
                        <label for="check4_6"><input type="checkbox" name="tm_checkbox1" id="check4_6" value="경추CT"> 경추CT</label>
                        <label for="check4_7"><input type="checkbox" name="tm_checkbox1" id="check4_7" value="심장MDCT"> 심장MDCT</label>
                        <label for="check4_8"><input type="checkbox" name="tm_checkbox1" id="check4_8" value="복부비만CT"> 복부비만CT</label>
                        <label for="check4_9"><input type="checkbox" name="tm_checkbox1" id="check4_9" value="골다공증QCT"> 골다공증QCT</label>
                        <label for="check4_10"><input type="checkbox" name="tm_checkbox1" id="check4_10" value="혈관협착도 ABI"> 혈관협착도 ABI</label>
                        <label for="check4_11"><input type="checkbox" name="tm_checkbox1" id="check4_11" value="(혈액)N.K.뷰키트">  (혈액)N.K.뷰키트</label>
                        <label for="check4_12"><input type="checkbox" name="tm_checkbox1" id="check4_12" value="스마트암검사"> 스마트암검사</label>
                        <label for="check4_14"><input type="checkbox" name="tm_checkbox1" id="check4_14" value="경질초음파"> 경질초음파</label>
                        <label for="check4_15"><input type="checkbox" name="tm_checkbox1" id="check4_15" value="액상 자궁경부세포진 HPV바이러스"> 액상 자궁경부세포진 HPV바이러스</label>
                        <label for="check4_16"><input type="checkbox" name="tm_checkbox1" id="check4_16" value="여성호르몬검사"> 여성호르몬검사</label>
                    </div>
					</td>
				</tr>
				<tr>
					<th colspan="2">C검사</th>
				</tr>
				<tr>
					<td colspan="2" align="center">택1</td>
				</tr>
				<tr class="gender">
					<td colspan="2">
                   <div class="check-box m on" id="checkbox1"> 
                        <label for="check2_1"><input type="checkbox" name="tm_checkbox3" id="check2_1" value="뇌MRA + MRI"> 뇌MRA + MRI</label>
                        <label for="check2_2"><input type="checkbox" name="tm_checkbox3" id="check2_2" value="경추MRI"> 경추MRI</label>
                        <label for="check2_3"><input type="checkbox" name="tm_checkbox3" id="check2_3" value="요추MRI"> 요추MRI</label>
                        <label for="check2_4"><input type="checkbox" name="tm_checkbox3" id="check2_4" value="스마트암(남6종/여7종)"> 스마트암(남6종/여7종)</label>
                    </div>
                    <div class="check-box w" id="checkbox2">   
                        <label for="check5_1"><input type="checkbox" name="tm_checkbox3" id="check5_1" value="뇌MRA + MRI"> 뇌MRA + MRI</label>
                        <label for="check5_2"><input type="checkbox" name="tm_checkbox3" id="check5_2" value="경추MRI"> 경추MRI</label>
                        <label for="check5_3"><input type="checkbox" name="tm_checkbox3" id="check5_3" value="요추MRI"> 요추MRI</label>
                        <label for="check5_4"><input type="checkbox" name="tm_checkbox3" id="check5_4" value="스마트암(남6종/여7종)"> 스마트암(남6종/여7종)</label>
                    </div>
					</td>
				</tr>
				<tr>
					<th colspan="2">기본사항</th>
				</tr>
				<tr class="gender">
					<td colspan="2">
                   <div class="check-box m on" id="checkbox1">
                        <label for="check3_1"><input type="checkbox" name="tm_checkbox4" id="check3_1" value="대장내시경"> 대장내시경</label>
                        <label for="check3_2"><input type="checkbox" name="tm_checkbox4" id="check3_2" value="심장초음파"> 심장초음파</label>
                        <label for="check3_3"><input type="checkbox" name="tm_checkbox4" id="check3_3" value="선천적 유전자검사 34종"> 선천적 유전자검사 34종</label>
                    </div>
                    <div class="check-box w" id="checkbox2">   
                        <label for="check6_1"><input type="checkbox" name="tm_checkbox4" id="check6_1" value="대장내시경"> 대장내시경</label>
                        <label for="check6_2"><input type="checkbox" name="tm_checkbox4" id="check6_2" value="심장초음파"> 심장초음파</label>
                        <label for="check6_3"><input type="checkbox" name="tm_checkbox4" id="check6_3" value="선천적 유전자검사 34종"> 선천적 유전자검사 35종</label>
                    </div>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr class="gender">
					<th colspan="2">
						총 검진 비용 
						<span class="m on">1,550,000원</span>
						<span class="w">1,600,000원</span>
					</th>
				</tr>
			</tfoot>
		</table>
	</div>
	<br>
<?php $this->print_("infocal",$TPL_SCP,1);?>

	<div class="btnWrap">
		<span><a href="" class="btnType2 iconDown">건강검진 주의사항</a></span>
	</div>
	<div class="btnWrap">
		<span><a href="" class="btnType4 iconDown">대장내시경 검사 준비사항</a></span>
	</div>
	<br>
	<h3 class="cont-tit"><small>개인정보 수집/이용 동의<span class="c-red">(필수)</span></small></h3>
	<?php include "../member/agree2.php"; ?>

	<div class="btnWrap">
		<span><a href="#" class="btnType2" id="service_submit">검진 예약하기</a></span>
	</div>
</div>
</form>
<style>
	.w,
	.m {display: none !important;}
	.m.on, 
	.w.on {display: flex !important;}
	span.w,
	span.m {justify-content: center;width:100%;margin:0 !important;}
</style>
<script>
	$(function(){
		$("#m").on("click",function(){
			$(".gender .m").addClass("on").siblings(".w").removeClass("on");
		});
		$("#w").on("click",function(){
			$(".gender .w").addClass("on").siblings(".m").removeClass("on");
		});
	});

    $(document).ready(function() {           
           
           // checkbox 그룹 비활성화            
           $("#checkbox1 input[name='tm_checkbox3']").prop("disabled", true);           
           $("#checkbox1 input[name='tm_checkbox4']").prop("checked", true);            
           $("#checkbox2 input[name^='tm_checkbox']").prop("disabled", true);    
           
           var checkboxes = document.querySelectorAll('input[name="tm_checkbox4"]');

           checkboxes.forEach(function (checkbox) {
               checkbox.addEventListener("click", function (event) {
                   event.preventDefault(); // 클릭 이벤트의 기본 동작(체크박스 상태 변경)을 막음
               });
           });

           $('input[name="tm_title"]').click(function() {
               // 클릭한 라디오 버튼의 value 값을 가져옴
               var value = $(this).val();                         
               
               //체크박스 초기화
               $('input[name^="tm_checkbox"]').prop("checked", false);                    
 
               //total_cost 에 text 값 변경
               if(value == "남"){
                    $("#tm_content1").val("");
				    $("#tm_content2").val("");
                    $("#tm_content3").val("");
                    $("#total_cost").text("1,550,000원");                    
                   // checkbox1 그룹 활성화
                   $("#checkbox1 input[name='tm_checkbox1']").prop("disabled", false);                   
                   $("#checkbox1 input[name='tm_checkbox4']").prop("disabled", false);                   
                   // checkbox2 그룹 비활성화
                   $("#checkbox2 input[name^='tm_checkbox']").prop("disabled", true);
                   $("#checkbox1 input[name='tm_checkbox4']").prop("checked", true); 
                   //$("#checkbox1 input[name='tm_checkbox4']").prop("disabled", false); 
                   $("#tm_content4").val("대장내시경,심장초음파,선천적 유전자검사 34종");    
               }else{
                    $("#tm_content1").val("");
				    $("#tm_content2").val("");
                    $("#tm_content3").val("");
                    $("#total_cost").text("1,600,000원");
                  
                   // checkbox2 그룹 활성화
                   $("#checkbox2 input[name='tm_checkbox1']").prop("disabled", false);                   
                   $("#checkbox2 input[name='tm_checkbox4']").prop("disabled", false);                   
                   // checkbox1 그룹 비활성화
                   $("#checkbox1 input[name^='tm_checkbox']").prop("disabled", true);
                   $("#checkbox2 input[name='tm_checkbox4']").prop("checked", true); 
                   //$("#checkbox2 input[name='tm_checkbox4']").prop("disabled", false); 
                   $("#tm_content4").val("대장내시경,심장초음파,선천적 유전자검사 35종");    
               }

           });

           $('input[name="tm_checkbox1"]').click(function() {
               // 선택된 모든 체크박스 요소를 순회
               var selectedValues = [];
              
               $('input[name="tm_checkbox1"]:checked').each(function() {
                   selectedValues.push($(this).val());
               });    
               
               if(selectedValues.length > 6){                             
                   $(this).prop("checked", false);
                   alert("6개 이상 선택 할 수 없습니다.");
                   return false;
               } 
           
               $("#tm_content1").val(selectedValues);                                                           
               
               
               
               // 선택된 tm_checkbox1의 상위 div 엘리먼트를 찾음
               var parentDiv = $(this).closest('div');

               // 상위 div 엘리먼트의 id 값을 가져옴
               var parentId = parentDiv.attr('id');                
               
               if (selectedValues.length === 6) {                    
                   // parentId를 사용하여 해당하는 tm_checkbox3를 찾아 활성화하고, 나머지는 비활성화                                    
                   $("#" + parentId + " input[name='tm_checkbox3']").prop("disabled", false);

                   // tm_checkbox4에서 1개만 선택하도록 설정
                   $("#" + parentId + " input[name='tm_checkbox3']").click(function() {
                       var selectedValues3 = [];
                       $('input[name="tm_checkbox3"]:checked').each(function() {
                           selectedValues3.push($(this).val());
                       });                     
                                          
                       var selectedValues3_length = $('input[name="tm_checkbox3"]:checked');
                       if (selectedValues3_length.length > 1) {
                           $(this).prop("checked", false);
                           alert("C검사에서는 1개만 선택 가능합니다.");
                           return false;
                       }

                       $("#tm_content3").val(selectedValues3);    
                   });
               } else {
                   // tm_checkbox1에서 2개가 선택되지 않은 경우 tm_checkbox4 비활성화
                   $('input[name="tm_checkbox3"]').prop("disabled", true);
                   $('input[name="tm_checkbox3"]').prop("checked", false);
               }
           });
          
       });
       
       $("#service_submit").click(function(){				

           var tm_count = $('#tm_content1').val().split(',');						           
           var tm_count3 = $('#tm_content3').val();
           var itemCount3 = 0;

           if (tm_count3.trim() !== '') {
               itemCount3 = tm_count3.split(',').length;
           }

           if($('#tm_content1').val() == '')	{
               alert("검진 종류를 선택하세요.");
               return false;
           }  
           
           if (tm_count.length != 6) {
                alert("검진 개수를 정확히 선택하세요.");
                return false;
           }  

           if (tm_count.length == 6 && itemCount3 != 1) {
                alert("C검사를 정확히 선택하세요.");
                return false;
           }  
          
           if($('#tm_content5').val() == '')	{
               alert('성함을 정확히 입력하세요');
               $('#tm_content5').focus();
           return false;
           }	

           if($('#tm_content6').val() == '')	{
               alert('연락처를 정확히 입력하세요');
               $('#tm_content6').focus();
           return false;
           }	
           //이메일 검사
           if($('#tm_content10_1').val() == '')	{
               alert('이메일을 정확히 입력하세요');
               $('#tm_content10_1').focus();
               return false;
           }	

           if($('#tm_content12').val() == '')	{
               alert('검진 희망일 선택 하세요');
               return false;
           }
        
           if ($('input[name="info"]').is(':checked') == false) {
               alert("개인정보 취급 방침에 동의해 주세요.");
               return false;
           }       
           
           $("#base_form").attr("action","/service/proc/multi_proc.php");
           $("#base_form").submit();                 
           
           return false;
       });	
</script>