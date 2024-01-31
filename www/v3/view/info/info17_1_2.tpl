
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
{#infomenu}
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
	<h3 class="cont-tit"><small>건강형 검진 프로그램 <i>기본종합검진 + A선택검사 2종류</i></small></h3>
    <form name="base_form" id="base_form" method="POST" action="?" enctype="multipart/form-data">
        <input type="hidden" name="mode" id="mode" value="MULTI_REG" />
        <input type="hidden" name="tm_menu" id="tm_menu" value="medicalcheckup" />   
        <input type="hidden" name="tm_type" id="tm_type" value="B"  />                             
        <input type="hidden" name="tm_content1" id="tm_content1" />                
        <input type="hidden" name="tm_content12" id="tm_content12" />              
        <input type="hidden" name="page_link" id="page_link" value="/v3/info.php?tab=info17_1_2" />
	<div class="tableType1">
		<table>
			<colgroup>
				<col style="width: 50%;">
				<col>
			</colgroup>
			<thead>
				<tr>
					<th colspan="2">건강형</th>
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
					<td align="center" colspan="2">택 2</td>
				</tr>
				<tr class="gender">
					<td colspan="2">
						<div class="check-box m on" id="checkbox1">
                            <label for="check1"><input type="checkbox" name="tm_checkbox" id="check1" value="갑상선초음파"> 갑상선초음파</label>
                            <label for="check2"><input type="checkbox" name="tm_checkbox" id="check2" value="경동맥초음파"> 경동맥초음파</label>
                            <label for="check3"><input type="checkbox" name="tm_checkbox" id="check3" value="뇌CT"> 뇌CT</label>
                            <label for="check4"><input type="checkbox" name="tm_checkbox" id="check4" value="폐CT"> 폐CT</label>
                            <label for="check5"><input type="checkbox" name="tm_checkbox" id="check5" value="요추CT"> 요추CT</label>
                            <label for="check6"><input type="checkbox" name="tm_checkbox" id="check6" value="경추CT"> 경추CT</label>
                            <label for="check7"><input type="checkbox" name="tm_checkbox" id="check7" value="심장MDCT"> 심장MDCT</label>
                            <label for="check8"><input type="checkbox" name="tm_checkbox" id="check8" value="복부비만CT"> 복부비만CT</label>
                            <label for="check9"><input type="checkbox" name="tm_checkbox" id="check9" value="골다공증QCT"> 골다공증QCT</label>
                            <label for="check10"><input type="checkbox" name="tm_checkbox" id="check10" value="혈관협착도 ABI"> 혈관협착도 ABI</label>
                            <label for="check11"><input type="checkbox" name="tm_checkbox" id="check11" value="(혈액)N.K.뷰키트" > (혈액)N.K.뷰키트</label>
                            <label for="check12"><input type="checkbox" name="tm_checkbox" id="check12" value="스마트암검사"> 스마트암검사</label>
                            <label for="check13"><input type="checkbox" name="tm_checkbox" id="check13" value="남성호르몬검사"> 남성호르몬검사</label>
						</div>
						<div class="check-box w" id="checkbox2">
                            <label for="check2_1"><input type="checkbox" name="tm_checkbox" id="check2_1" value="갑상선초음파"> 갑상선초음파</label>
                            <label for="check2_2"><input type="checkbox" name="tm_checkbox" id="check2_2" value="경동맥초음파"> 경동맥초음파</label>
                            <label for="check2_3"><input type="checkbox" name="tm_checkbox" id="check2_3" value="뇌CT"> 뇌CT</label>
                            <label for="check2_4"><input type="checkbox" name="tm_checkbox" id="check2_4" value="폐CT"> 폐CT</label>
                            <label for="check2_5"><input type="checkbox" name="tm_checkbox" id="check2_5" value="요추CT"> 요추CT</label>
                            <label for="check2_6"><input type="checkbox" name="tm_checkbox" id="check2_6" value="경추CT"> 경추CT</label>
                            <label for="check2_7"><input type="checkbox" name="tm_checkbox" id="check2_7" value="심장MDCT"> 심장MDCT</label>
                            <label for="check2_8"><input type="checkbox" name="tm_checkbox" id="check2_8" value="복부비만CT"> 복부비만CT</label>
                            <label for="check2_9"><input type="checkbox" name="tm_checkbox" id="check2_9" value="골다공증QCT"> 골다공증QCT</label>
                            <label for="check2_10"><input type="checkbox" name="tm_checkbox" id="check2_10" value="혈관협착도 ABI"> 혈관협착도 ABI</label>
                            <label for="check2_11"><input type="checkbox" name="tm_checkbox" id="check2_11" value="(혈액)N.K.뷰키트"> (혈액)N.K.뷰키트</label>
                            <label for="check2_12"><input type="checkbox" name="tm_checkbox" id="check2_12" value="스마트암검사"> 스마트암검사</label>
                            <label for="check2_13"><input type="checkbox" name="tm_checkbox" id="check2_13" value="유방초음파"> 유방초음파</label>
                            <label for="check2_14"><input type="checkbox" name="tm_checkbox" id="check2_14" value="경질초음파"> 경질초음파</label>
                            <label for="check2_15"><input type="checkbox" name="tm_checkbox" id="check2_15" value="액상 자궁경부세포진 HPV바이러스"> 액상 자궁경부세포진 HPV바이러스</label>
                            <label for="check2_16"><input type="checkbox" name="tm_checkbox" id="check2_16" value="여성호르몬검사"> 여성호르몬검사</label>
						</div>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr class="gender">
					<th colspan="2">
						총 검진 비용 
						<span class="m on">450,000원</span>
						<span class="w">500,000원</span>
					</th>
				</tr>
			</tfoot>
		</table>
	</div>
	<br>
	{#infocal}
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
        // checkbox1 그룹 활성화
        $("#checkbox1 input[name='tm_checkbox']").prop("disabled", false);
        // checkbox2 그룹 비활성화
        $("#checkbox2 input[name='tm_checkbox']").prop("disabled", true);
        $('input[name="tm_title"]').click(function() {
            // 클릭한 라디오 버튼의 value 값을 가져옴
            var value = $(this).val();             
                        
            //tm_content1 선택 초기화
            $('input[name="tm_checkbox"]').prop("checked", false); 
            //total_cost 에 text 값 변경
            if(value == "남"){
                $("#tm_content1").val("");
				$("#tm_content2").val("");
                $("#total_cost").text("450,000원");
                // checkbox1 그룹 활성화
                $("#checkbox1 input[name='tm_checkbox']").prop("disabled", false);
                // checkbox2 그룹 비활성화
                $("#checkbox2 input[name='tm_checkbox']").prop("disabled", true);
            }else{
                $("#tm_content1").val("");
				$("#tm_content2").val("");
                $("#total_cost").text("500,000원");
                // checkbox2 그룹 활성화
                $("#checkbox2 input[name='tm_checkbox']").prop("disabled", false);
                // checkbox1 그룹 비활성화
                $("#checkbox1 input[name='tm_checkbox']").prop("disabled", true);
            }

        });

        $('input[name="tm_checkbox"]').click(function() {
            // 선택된 모든 체크박스 요소를 순회
            var selectedValues = [];
            $('input[name="tm_checkbox"]:checked').each(function() {
                selectedValues.push($(this).val());
            });
                   
                                
            //checkbox1 선택값이 2개 이상이면 checkbox1 선택 불가
            if(selectedValues.length > 2){                             
                $(this).prop("checked", false);
                alert("2개 이상 선택 할 수 없습니다.");
				return false;
            }   
            
            $("#tm_content1").val(selectedValues);     
            //checkbox1과 checkbox2 하위 checkbox 같이 선택 불가

                
        });
        
    });
    
    $("#service_submit").click(function(){		           

        if($('#tm_content1').val() == '')	{
        alert("검진 종류를 정확히 선택하세요.");
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