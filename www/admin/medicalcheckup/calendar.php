<?
	include_once("../../_init.php");
	include_once($GP -> CLS."/class.duty.php");
	include_once($GP -> CLS."/class.doctor.php");
	include_once($GP->CLS."class.list.php");
	$C_Doctor 	= new Doctor;
	$C_Duty 	= new Duty;
	$C_ListClass 	= new ListClass;

	if($_POST['date']!= '') {
		$date = $_POST['date'];
	}else{
		$date = date('Y-m-d');
	}	
	
	$excelHanArr = array(
		"진료과" => "tsd_clinic",
		"담당의" => "tsd_dr_name",
		"진료시간" => "tsd_time",
		"일자" => "tsd_date"
	);
	$args = array();
	$args['tsd_date'] = substr($date,0,7);
	$args['excel_file']		= $_GET['excel_file'];
	$args['excel']			= $excelHanArr;
	$data = "";
	$data = $C_Duty->Duty_Info_New($args);
	  
    
	$x=explode("-",$date); // 들어온 날짜를 년,월,일로 분할해 변수로 저장합니다.
	$s_Y=$x[0]; // 지정된 년도
	$s_m=$x[1]; // 지정된 월
	$s_d=$x[2]; // 지정된 요일

	$s_t=date("t",mktime(0,0,0,$s_m,$s_d,$s_Y)); // 지정된 달은 몇일까지 있을까요?
	$s_n=date("N",mktime(0,0,0,$s_m,1,$s_Y)); // 지정된 달의 첫날은 무슨요일일까요?
	$l=$s_n%7; // 지정된 달 1일 앞의 공백 숫자.
	$ra=($s_t+$l)/7; $ra=ceil($ra); $ra=$ra-1; // 지정된 달은 총 몇주로 라인을 그어야 하나?

	$n_d= date("Y-m-d",mktime(0,0,0,$s_m,$s_d+1,$s_Y)); // 다음날
	$p_d= date("Y-m-d",mktime(0,0,0,$s_m,$s_d-1,$s_Y)); // 이전날
	$n_Y= date("Y-m-d",mktime(0,0,0,$s_m,$s_d,$s_Y+1)); // 내년
	$p_Y= date("Y-m-d",mktime(0,0,0,$s_m,$s_d,$s_Y-1)); // 작년
	$p_m= date("Y-m-d",mktime(0,0,0,$s_m-1,$s_d,$s_Y)); // 저번달
    $n_m= date("Y-m-d",mktime(0,0,0,$s_m+1,$s_d,$s_Y)); // 다음달  
    
    $strMonth = array(
        "01"=>"January", 
        "02"=>"February",
        "03"=>"March",
        "04"=>"April",
        "05"=>"May",
        "06"=>"June",
        "07"=>"July",
        "08"=>"August",
        "09"=>"September",
        "10"=>"October",
        "11"=>"November",
        "12"=>"December"
    );
?>
<form name="base_form" id="base_form" method="GET"> 
   	<!-- <span><input type="button" id="excel_btn" value="EXCEL" /></span> -->
	<!-- <div style="margin-top:5px; text-align:right;">
    ※날짜를 먼저 체크하세요.
		<button type="button" onClick="pro_reg()"; class="btnSearch ">예약일정 등록</button>
	</div> -->
<p class="scheduleHead">	
	<button type="button" class="prev" onClick="ch_cal('<?=$p_m?>')"><span>이전달</span></button>
    <strong><?=$s_Y?>년 <?=$s_m?>월 (<?=$strMonth[$s_m]?>)</strong>
    <button type="button" class="next" onClick="ch_cal('<?=$n_m?>')"><span>다음달</span></button>
</p>
<div class="scheduleBody">
	<table>
		<caption>당직표 달력</caption>
		<colgroup>
            <col style="width:14%" />
			<col style="width:14%" />
			<col style="width:14%" />
			<col style="width:14%" />
			<col style="width:14%" />
			<col style="width:14%" />
            <col style="width:14%" />
		
		</colgroup>
		<thead>
			<tr>
                <th scope="col">일(SAT)</th>              							
				<th scope="col">월(MON)</th>
				<th scope="col">화(TUE)</th>
				<th scope="col">수(WED)</th>
				<th scope="col">목(THU)</th>
				<th scope="col">금(FRI)</th>
                <th scope="col">토(SAT)</th>              			                
			</tr>
		</thead>
		<tbody>
		<?
			for($r=0;$r<=$ra;$r++){
			echo "<tr style='page-break-before:always'>\n";
			  for($z=1;$z<=7;$z++){									
				  $rv=7*$r+$z; $ru=$rv-$l; // 칸에 번호를 매겨줍니다. 1일이 되기전 공백들 부터 마이너스 값으로 채운 뒤 ~
				  
				  if($ru<=0 || $ru>$s_t) { // 딱 그달에 맞는 숫자가 아님 표시하지 말자
					echo "<td>&nbsp;</td>";											
				  }else{
					$s = date("Y-m-d",mktime(0,0,0,$s_m,$ru,$s_Y)); // 현재칸의 날짜

                    $dayweek = $C_Func->DayWeekChange($s); 
                            
					$now_mon = date("m");                              
					$ch_mday = $s_m.$s_d;
					
					$ru_d = "";
					if(strlen($ru) < 2) {
					  $ru_d = "0".$ru;
					}else{
					  $ru_d = $ru;
					}
					$ch_mday1 = $now_mon.$ru_d;		                    
					
					$cho_date = $s_Y. "-" . $s_m . "-" . $ru_d; 

					
					$args = '';
					$args['tsd_date'] = $cho_date;
					$data = $C_Duty->Duty_Info($args);	 
	
			if($data) {
						//<span>$ru<input type='checkbox' class='tsd_date' name='tsd_date' value='".$cho_date."'/> </span>
						echo "<td>
                         <span>$ru</span>";					
						
						 for($k=0;$k < count($data);$k++){													
								$tsd_dr_name = $data[$k]['tsd_dr_name'];
								$tsd_clinic = $data[$k]['tsd_clinic'];
								$tsd_time = $data[$k]['tsd_time'];
                                $tsd_idx = $data[$k]['tsd_idx'];  

								if($tsd_clinic == "Y") {								
									echo "<strong class='name'><a href='#;' onclick=\"sch_modi('" . $tsd_idx . "')\">".$GP -> CLINIC_TYPE[$tsd_clinic]."</a></strong><br /><br />";
									
								}
								else if($tsd_clinic == "" || $tsd_clinic =="N"){
									echo "<strong class='name'><a href='#;' class='red' onclick=\"sch_modi('" . $tsd_idx . "')\">예약불가</a></strong><br /><br />";
								}
						 }
						echo "
							</td>
						";
					}else {
						//<span>$ru<input type='checkbox' class='tsd_date' name='tsd_date' value='".$cho_date."'/></span>
						$tsd_idx = "";		
						echo "
							<td>	
                                <span>$ru</span>							
								<strong class='name'><a href='#;' onclick=\"sch_modi('" . $tsd_idx . "', '" . $cho_date . "')\">예약가능</a></strong><br /><br />								
							</td>
						";
					}
				  } //end if
				  }
			  }
			  echo "</tr>\n";
			  
			?>
		</tbody>
	</table>
</div>
</form>
<script type="text/javascript">
function pro_reg(){
	var chked_val = "";
	$(":checkbox[name='tsd_date']:checked").each(function(pi,po){
    	chked_val += po.value+",";
	});
	layerPop('ifm_reg','./sch_reg.php?tsd_date='+chked_val, '1505', '400');	
}
	$(document).ready(function(){					

		$('#excel_btn').click(function(){
				var string = $("#base_form").serialize();
				location.href = "?excel_file=schedule" + "&" + string;
				return false;
		});
	});

</script>