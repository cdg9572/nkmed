<?php
include_once("../../../_init.php");
include_once($GP -> CLS."/class.duty.php");
$C_Duty 	= new Duty;


switch($_POST['mode']){

	case 'SCH_HOLI_DEL' :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['tsd_idx'] 			= $tsd_idx;
		$rst = $C_Duty -> Sch_Holi__Del($args);

		echo "true";
		exit();
	break;

	case 'SCH_HOLI_MODI':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['tsd_idx'] 			= $tsd_idx;
		$args['tsd_date'] 		= $tsd_date;
		if($m_all == "Y" || $a_all == "Y"){
			include_once($GP -> CLS."/class.doctor.php");
			$C_Doctor 	= new Doctor;
			$arr_doc = $C_Doctor -> Doctor_List_All($args);
			if($m_all == "Y" && $a_all == ""){
				foreach($arr_doc as $key => $v){
						$t_con .= $key."||";
				}
				$args['tsd_m_all'] 	= "Y";				
			}else if($m_all == "" && $a_all == "Y"){
				foreach($arr_doc as $key => $v){
						$t_con .= "|".$key."|";
				}
				$args['tsd_a_all'] 	= "Y";				
			}else if($m_all == "Y" && $a_all == "Y"){
				foreach($arr_doc as $key => $v){
						$t_con .= $key."|".$key."|";
				}
				$args['tsd_m_all'] 	= "Y";
				$args['tsd_a_all'] 	= "Y";
			}
			$t_con = rtrim($t_con, "|");
			$args['tsd_con'] 	= $t_con;	
		}else{
			$args['tsd_con'] 	= $m_dr1 . "|" . $a_dr1 . "|" . $m_dr2 . "|" . $a_dr2;			
		}

		
		$rst = $C_Duty -> Sch_Holi_Info_Modi($args);

		$msg = "수정 되었습니다";		
		echo "<script>alert('$msg'); parent.ch_cal('" . $tsd_date. "'); parent.modalclose(); </script>";
	break;
	
	
	case 'SCH_HOLI_REG' :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;

		$args = "";
		$args['tsd_date'] 	= $tsd_date;

		if($m_all == "Y" || $a_all == "Y"){
			include_once($GP -> CLS."/class.doctor.php");
			$C_Doctor 	= new Doctor;
			$arr_doc = $C_Doctor -> Doctor_List_All($args);
			if($m_all == "Y" && $a_all == ""){
				foreach($arr_doc as $key => $v){
						$t_con .= $key."||";
				}
				$args['tsd_m_all'] 	= "Y";				
			}else if($m_all == "" && $a_all == "Y"){
				foreach($arr_doc as $key => $v){
						$t_con .= "|".$key."|";
				}
				$args['tsd_a_all'] 	= "Y";				
			}else if($m_all == "Y" && $a_all == "Y"){
				foreach($arr_doc as $key => $v){
						$t_con .= $key."|".$key."|";
				}
				$args['tsd_m_all'] 	= "Y";
				$args['tsd_a_all'] 	= "Y";
			}
			$t_con = rtrim($t_con, "|");
			$args['tsd_con'] 	= $t_con;	
		}else{
			$args['tsd_con'] 	= $m_dr1 . "|" . $a_dr1 . "|" . $m_dr2 . "|" . $a_dr2;			
		}	
		
		
		$rst = $C_Duty -> Sch_Holi_Info_Reg($args);

		if($rst) {
			$msg = "등록 되었습니다";	
			echo "<script>alert('$msg'); parent.ch_cal('" . $tsd_date. "'); parent.modalclose(); </script>";
		}else{
			$C_Func->put_msg_and_modalclose("등록에 실패하였습니다");
		}
		exit();
	break;

	case 'DUTY_DEL' :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['tsd_idx'] 			= $tsd_idx;
		$rst = $C_Duty -> Duty_Info_Del($args);

		echo "true";
		exit();
	break;

	
	case 'DUTY_MODI':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['tsd_idx'] 			= $tsd_idx;
		$args['tsd_date'] 		= $tsd_date;
		$args['tsd_con'] 			= $tsd_con;		
		$rst = $C_Duty -> Duty_Info_Modi($args);

		$msg = "수정 되었습니다";		
		echo "<script>alert('$msg'); parent.ch_cal('" . $tsd_date. "'); parent.modalclose(); </script>";
	break;
	
	
	
	
	case 'DUTY_REG':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = "";
		$args['tsd_date'] 	= $tsd_date;
		$args['tsd_con'] 		= $tsd_con;		

		$rst = $C_Duty -> Duty_Info_Reg($args);

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