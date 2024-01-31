<?php
	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");	

	include_once($GP -> CLS."/class.duty.php");
	$C_Duty 	= new Duty;

	
	$args = '';
	$args['tsd_idx'] = $_GET['tsd_idx'];
	$data = $C_Duty->Duty_Info_View($args);

	if($data) {
		extract($data);
	}
//	error_reporting(E_ALL);
//	ini_set("display_errors", 1);
	
	$sc_select = $C_Func -> makeSelect_Normal('tsd_clinic', $GP -> CLINIC_TYPE, $tsd_clinic, '', '::선택::');

	$mode = "";	

    if($tsd_idx == ""){
        $tsd_date =  $_GET['tsd_date'];
		$mode = "DUTY_REG";
    }
	else{
		$mode = "DUTY_MODI";
	}
	
?>
<body>
<div class="Wrap_layer"><!--// 전체를 감싸는 Wrap -->
	<div class="boxContent_layer">
		<div class="boxContentHeader">
			<span class="boxTopNav"><strong>진료스케쥴 수정</strong></span>
		</div>
		<form name="base_form" id="base_form" method="POST" action="?" enctype="multipart/form-data">
		<input type="hidden" name="mode" id="mode" value="<?=$mode?>" />
		<input type="hidden" name="tsd_idx" id="tsd_idx" value="<?=$_GET['tsd_idx']?>" />
		<div class="boxContentBody">			
			<div class="boxMemberInfoTable_layer">				
				<table class="table table-bordered">
					<tbody>
                  <tr>
							<th width="20%"><span>*</span>일자</th>
							<td width="80%">
								<input type="text" class="input_text" size="25" name="tsd_date" id="tsd_date" value="<?=$tsd_date?>" readonly />
							</td>
						</tr>
						<tr>
							<th width="20%"><span>*</span>예약여부</th>
							<td width="80%">
								<?=$sc_select?>
							</td>
						</tr>
                        <!-- <tr>
							<th width="15%"><span>*</span>담당의</th>
                            <td width="85%">
                       			<input type="text" class="input_text" size="25" name="tsd_dr_name" id="tsd_dr_name" value="<?=$tsd_dr_name?>" />
							</td>
						</tr>
                        <tr>
							<th width="15%"><span>*</span>진료시간</th>
							<td width="85%">
								<input type="text" class="input_text" size="25" name="tsd_time" id="tsd_time" value="<?=$tsd_time?>" />
							</td>
						</tr> -->
						
					</tbody>
				</table>				
				<div style="margin-top:5px; text-align:center;">
				<button id="img_submit" class="btnSearch ">수정</button>
                <button onClick="san_delete('<?=$tsd_idx?>');" class="btnSearch ">삭제</button>
                <button id="img_cancel" class="btnSearch ">취소</button>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>

<script type="text/javascript">

	
	$(document).ready(function(){	
														 
		$('#img_cancel').click(function(){
				parent.modalclose();				
		});														 
		
		$('#img_submit').click(function(){
			
			$('#base_form').attr('action','./proc/duty_proc.php');
			$('#base_form').submit();
			return false;
		});					
	
	});
	
function san_delete(tsd_idx)
	{
		if(!confirm("삭제하시겠습니까?")) return;

		$.ajax({
			type: "POST",
			url: "./proc/duty_proc.php",
			data: "mode=DUTY_DEL&tsd_idx=" + tsd_idx,
			dataType: "text",
			success: function(msg) {

				if($.trim(msg) == "true") {
					alert("삭제되었습니다");
					window.location.reload();
					return false;
				}else{
					alert('삭제에 실패하였습니다.');
					return;
				}
			},
			error: function(xhr, status, error) { alert(error); }
		});

	}
</script>