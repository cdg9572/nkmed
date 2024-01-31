<?php
	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");


	
	//error_reporting(E_ALL);
	//ini_set("display_errors", 1);

?>
<body>
<div class="Wrap"><!--// 전체를 감싸는 Wrap -->
		<? include_once($GP -> INC_ADM_PATH."/header.php"); ?>
		<div class="boxContentBody">
			<div id="cal">
				<? include_once "calendar.php"; ?>
			</div> 
		</div>	
		<? include_once($GP -> INC_ADM_PATH."/footer.php"); ?>
	</div>
</div><!-- 전체를 감싸는 Wrap //-->
</body>
</html>
<script type="text/javascript">

	$(document).ready(function(){														 
	
		callDatePick('s_date');
		callDatePick('e_date');

		$('#search_submit').click(function(){																			 

			if($.trim($('#search_content').val()) != '')
			{
				if($('#search_key option:selected').val() == '')
				{
					alert('검색조건을 선택하세요');
					return false;
				}
			}

			if($('#search_key option:selected').val() != '')
			{
				if($.trim($('#search_content').val()) == '')
				{
					alert('검색내용을 입력하세요');
					$('#search_content').focus();
					return false;
				}
			}


			$('#base_form').submit();
			return false;
		});
	});

	function ch_cal(date) {			
		$.ajax({
			type: "POST",
			url: "san_calendar.php",
			data: "date=" + date,
			dataType: "text",
			success: function(data) {		
				$('#cal').empty();
				$('#cal'). append(data);					
			},
			error: function(xhr, status, error) { alert(error); }
		});
	}
	
	function sch_reg(date) {
		layerPop('ifm_reg','./san_reg.php?tsd_date=' + date, 450, 240);
		return false;
	}
	function comm_modi(idx) {
		layerPop('ifm_reg','./com_modi.php?tbc_idx=' + idx, 450, 240);
		return false;
	}

	function sch_modi(idx) {
		layerPop('ifm_reg','./san_modi.php?tsd_idx=' + idx, 450, 240);
		return false;
	}

	function sch_del(idx,date) {
		if(!confirm("삭제하시겠습니까?")) return;

		$.ajax({
			type: "POST",
			url: "./proc/san_proc.php",
			data: "mode=SAN_DEL&tsd_idx=" + idx,
			dataType: "text",
			success: function(msg) {
				
				if($.trim(msg) == "true") {
					alert("삭제되었습니다")
					ch_cal(date)
					//window.location.reload();
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