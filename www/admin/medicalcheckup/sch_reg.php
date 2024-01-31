<?php
	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");	
	
 	$tsd_date = $_GET["tsd_date"];
	if($tsd_date) $tsd_date = substr($tsd_date, 0, -1);
	
	$sc_select = $C_Func -> makeSelect('tsd_clinic', $GP -> CLINIC_TYPE, $tsd_clinic, '', '::선택::');

?>
<body>
<div class="Wrap_layer"><!--// 전체를 감싸는 Wrap -->
	<div class="boxContent_layer">
		<div class="boxContentHeader">
			<span class="boxTopNav"><strong> 등록</strong></span>
		</div>
		<form name="base_form" id="base_form" method="POST" action="?" enctype="multipart/form-data">
		<input type="hidden" name="mode" id="mode" value="DUTY_REG" />
		<div class="boxContentBody">			
			<div class="boxMemberInfoTable_layer">				
				<table class="table table-bordered">
					<tbody>
                    <tr>
							<th width="20%"><span>*</span>일자</th>
							<td width="80%">
								<input type="text" class="input_text" size="80" name="tsd_date" id="tsd_date" value="<?=$tsd_date?>" readonly />
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
				<button id="img_submit" class="btnSearch ">등록</button>
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

            if($('#tsd_dr_name').val() == '') {
				alert("담당의를 입력하세요");
				$('#tsd_dr_name').focus();
				return false;
			}
            if($('#tsd_time').val() == '') {
				alert("진료시간을 입력하세요");
				$('#tsd_time').focus();
				return false;
			}

			$('#base_form').attr('action','./proc/duty_proc.php');
			$('#base_form').submit();
			return false;
		});					
	
	});
</script>