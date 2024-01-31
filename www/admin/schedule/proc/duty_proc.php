<?php
include_once("../../../_init.php");
include_once($GP -> CLS."/class.duty.php");
$C_Duty 	= new Duty;

switch($_POST['mode']){

	

	case 'DUTY_DEL' :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['tsd_idx'] 			= $tsd_idx;
		
		$rst = $C_Duty -> Duty_Info_Del2($args);

		echo "true";
		exit();
	break;

	
	case 'DUTY_MODI':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['tsd_idx'] 			= $tsd_idx;
		$args['tsd_date'] 		= $tsd_date;
		$args['tsd_time'] 			= $tsd_time;	
		$args['tsd_clinic'] 		= $tsd_clinic;
		$args['tsd_dr_name'] 			= $tsd_dr_name;	
		$rst = $C_Duty -> Duty_Info_Modi($args);

		$msg = "수정 되었습니다";		
		echo "<script>alert('$msg'); parent.ch_cal('" . $tsd_date. "'); parent.modalclose(); </script>";
	break;
	
	
	
	
	case 'DUTY_REG':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	



	$tsd_date_array = explode(',',$tsd_date);
	
		foreach($tsd_date_array as $val) {
		
		$args = "";
		$args['tsd_date'] 				= $val;
		$args['tsd_time'] 			= $tsd_time;	
		$args['tsd_clinic'] 		= $tsd_clinic;
		$args['tsd_dr_name'] 			= $tsd_dr_name;
		$rst = $C_Duty -> Duty_Info_Reg($args);

		}
		

		if($rst) {
			$msg = "등록 되었습니다";	
			echo "<script>alert('$msg'); parent.ch_cal('" . $tsd_date. "'); parent.modalclose(); </script>";
		}else{
			$C_Func->put_msg_and_modalclose("등록에 실패하였습니다");
		}
		exit();
	break;
	
	
	

}



?>