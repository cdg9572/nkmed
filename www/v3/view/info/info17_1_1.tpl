
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
	<h3 class="cont-tit"><small>공단검진</small></h3>
	<form name="base_form" id="base_form" method="POST" action="?" enctype="multipart/form-data">
        <input type="hidden" name="mode" id="mode" value="MULTI_REG" />
        <input type="hidden" name="tm_menu" id="tm_menu" value="medicalcheckup" />   
        <input type="hidden" name="tm_type" id="tm_type" value="A"  />                             
        <input type="hidden" name="tm_content12" id="tm_content12" />                
        <input type="hidden" name="page_link" id="page_link" value="/v3/info.php?tab=info17_1_1" />
	<div class="tableType1">
		<table>
			<colgroup>
				<col>
				<col style="width: 50%;">
			</colgroup>
			<thead>
				<tr>
					<th>국가검진</th>
					<th>항목체크</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>일반검진</th>
					<td align="center">
						<div class="radio-box">
							<label for=""><input type="radio" id="tm_content1" name="tm_content1" value="일반검진" checked></label>
						</div>
					</td>
				</tr>
				<tr>
					<th>6대 암 검진</th>
					<td align="center">
						<div class="radio-box">
							<label for=""><input type="radio" id="tm_content1" name="tm_content1" value="6대 암 검진"></label>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br>	
    {#infocal}

	<br>
	<h3 class="cont-tit"><small>개인정보 수집/이용 동의<span class="c-red">(필수)</span></small></h3>
	<?php include "../member/agree2.php"; ?>

	<div class="btnWrap">
		<span><a href="#" class="btnType2" id="service_submit">검진 예약하기</a></span>
	</div>
</div>
</form>
<script type="text/javascript">	

    $("#service_submit").click(function(){		           

    if ($('input:radio[name="tm_content1"]:checked').val() == undefined) {
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
        alert('검진 희망일 선택하세요');
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