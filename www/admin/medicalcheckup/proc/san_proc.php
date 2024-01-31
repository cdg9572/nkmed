<?php
include_once("../../../_init.php");
include_once($GP -> CLS."/class.san.php");
$C_San 	= new San;


switch($_POST['mode']){


	case 'SAN_DEL' :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['tsd_idx'] 			= $tsd_idx;
		$rst = $C_San -> San_Info_Del($args);

		echo "true";
		exit();
	break;
	case 'SAN_DEL2' :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['mb_code'] 			= $mb_code;
		$rst = $C_San -> San_Info_Del2($args);

		echo "true";
		exit();
	break;
	


	
	case 'SAN_MODI':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['tsd_idx'] 				= $tsd_idx;
		$args['tsd_date'] 				= $tsd_date;
		$args['tsd_dr_name'] 				= $tsd_dr_name;	
		$args['tsd_time'] 			= $tsd_time;	
		$args['tsd_clinic'] 				= $tsd_clinic;
		
		$rst = $C_San -> San_Info_Modi($args);

		$msg = "수정 되었습니다";		
		echo "<script>alert('$msg'); parent.ch_cal('" . $tsd_date. "'); parent.modalclose(); </script>";
	break;
	
	
	
	
	case 'SAN_REG':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		$tsd_date_array = explode(',',$tsd_date);
	
		foreach($tsd_date_array as $val) {
		
			$args = "";
			$args['tsd_date'] 				= $val;
			$args['tsd_dr_name'] 				= $tsd_dr_name;	
		$args['tsd_time'] 			= $tsd_time;	
		$args['tsd_clinic'] 				= $tsd_clinic;	
	
			$rst = $C_San -> San_Info_Reg($args);

		}
		if($rst) {
			$msg = "등록 되었습니다";	
			echo "<script>alert('$msg'); parent.ch_cal('" . $tsd_date. "'); parent.modalclose(); </script>";
		}else{
			$C_Func->put_msg_and_modalclose("등록에 실패하였습니다");
		}
		exit();
	break;
	
	
	case 'MAIN_SAN_REG':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		$tsd_date_array = explode(',',$tsd_date);
	
		foreach($tsd_date_array as $val) {
		
			$args = "";
			$args['tsd_date'] 				= $val;
			$args['tsd_dr_name'] 				= $tsd_dr_name;	
		$args['tsd_time'] 			= $tsd_time;	
		$args['tsd_clinic'] 				= $tsd_clinic;
	
			$rst = $C_San -> San_Info_Reg($args);

		}
		if($rst) {
			$msg = "등록 되었습니다";	
			echo "<script>alert('$msg'); parent.ch_cal('" . $tsd_date. "'); parent.modalclose(); </script>";
			
		}else{
			$C_Func->put_msg_and_modalclose("등록에 실패하였습니다");
		}
		exit();
	break;
	
	
	case 'R_REG':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		$args = "";
		$args['tsd_idx'] 			= $tsd_idx;
		$args['mb_code'] 			= $mb_code;	
		$args['tsr_sel'] 			= $tsr_sel;	
		$args['tsr_regdate'] 		= date("Y-m-d H:i:s");
		
		$rst2 = $C_San ->San_Cnt($args);
		if($rst2["cnt"] > 0) {
			$msg = "이미 신청 하였습니다.";	
			echo "<script>alert('$msg'); location.href='/delivery/sub_delivery09_new.html'; </script>";
			exit;
		}
		
		
		$rst = $C_San -> San_R_Reg($args);

		if($rst) {
			$msg = "등록 되었습니다";	
			echo "<script>alert('$msg'); location.href='/delivery/sub_delivery09_new.html'; </script>";
			
		}else{
			$C_Func->put_msg_and_modalclose("등록에 실패하였습니다");
		}
		exit();
	break;	
	

case 'main_SAN_MODI':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['tsd_idx'] 				= $tsd_idx;
				
		$rst = $C_San -> San_Info_Modi($args);


		if($rst) {
			$msg = "수정 되었습니다";	
			echo "<script>alert('$msg'); location.href='/member/member_san.html'; </script>";
			
		}else{
			$C_Func->put_msg_and_modalclose("수정에 실패하였습니다");
		}

		
	break;
	


}
?>