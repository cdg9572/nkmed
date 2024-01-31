<?php 
/*
BY-SHIN - 2019-06-11
*/
error_reporting(E_ALL^E_NOTICE);
ini_set("display_errors", 1);

include "include/head.php";

define("IN_AUTH",true);
define("LAYOUT",true);
define("NEED_LOGIN",false);

$root_path = "";

include $root_path."include/common.php";
include $root_path."include/count_inc.php";

$js->load_script("/v3/controller/js/info.js");

$tab = ($_GET["tab"]) ? $_GET["tab"] : "info3";

switch($tab){
	case "info3"  : $ctxt="예약/발급";$ttxt = "증명서 발급안내"; $depth = "depth1"; break;
	case "info1" : $ctxt="예약/발급";$ttxt = "진료 예약 안내"; $depth = "depth1"; break;	
	case "info2_1" : $ctxt="예약/발급";$ttxt = "진료 예약(재진)"; $depth = "depth1"; break;	
	case "info2_2" : $ctxt="예약/발급";$ttxt = "진료 예약(재진)"; $depth = "depth1"; break;	
	case "info2_3" : $ctxt="예약/발급";$ttxt = "진료 예약(재진)"; $depth = "depth1"; break;	
	case "info15" : $ctxt="예약/발급";$ttxt = "예약 조회"; $depth = "depth1"; break;	
	case "info15_1" : $ctxt="예약/발급";$ttxt = "예약 조회"; $depth = "depth1"; break;	
	case "info16_1" : $ctxt="건강검진";$ttxt = "건강검진 안내"; $depth = "depth2"; break;	
	// case "info15_1" : $ctxt="건강검진";$ttxt = "검진 예약/결과"; $depth = "depth1"; break;	
	case "info4"  : $ctxt="진료안내";$ttxt = "외래진료안내"; $depth = "depth3"; break;
	case "info5"  : $ctxt="진료안내";$ttxt = "응급진료안내"; $depth = "depth3"; break;
	case "info14"  : $ctxt="진료안내";$ttxt = "특수검진 외국인 문진표"; $depth = "depth3"; break;
	case "info7"  : $ctxt="입/퇴원안내";$ttxt = "입/퇴원안내"; $depth = "depth4"; break;
	case "info8"  : $ctxt="입/퇴원안내";$ttxt = "입원생활안내"; $depth = "depth4"; break;
	case "info9"  : $ctxt="입/퇴원안내";$ttxt = "면회안내"; $depth = "depth4"; break;
	case "info10_1" : $ctxt="병원안내";$ttxt = "병원둘러보기"; $depth = "depth5"; break;		
	case "info10_2" : $ctxt="병원안내";$ttxt = "병원둘러보기"; $depth = "depth5"; break;			
	case "info11_1" : $ctxt="병원안내";$ttxt = "오시는길/주차안내"; $depth = "depth5";$cv_type = "location";$cv_check = "MOBILE";include_once $GP -> INC_WWW . '/conversion.php'; break;
	case "info11_2" : $ctxt="병원안내";$ttxt = "오시는길/주차안내"; $depth = "depth5"; break;	
	case "info12" : $ctxt="병원안내";$ttxt = "장례식장"; $depth = "depth5"; break;
	case "info13" : $ctxt="병원안내";$ttxt = "전화번호 안내"; $depth = "depth5"; break;	
	default : $ctxt="예약/발급";$ttxt = "진료예약"; $depth = "depth1"; break;	 			
};

include_once($GP -> CLS."/class.duty.php");
include_once($GP->CLS."class.list.php");
$C_Duty 	= new Duty;
$C_ListClass 	= new ListClass;

$args = array();	
$args['tsd_clinic']		= "N";

$data = "";
$data = $C_Duty->Duty_List_New($args);

$data_list 		= $data['data'];

$data_list_cnt 	= count($data_list);  

$date_total = "";

for ($i = 0 ; $i < $data_list_cnt ; $i++) {
    $tsd_date 				= $data_list[$i]['tsd_date'];        
    //tsd_date값이 2023-09-22일 경우  "new Date(2023, 08, 22)," 형식으로 만들어야 함
    $date_total .= "new Date(".substr($tsd_date,0,4).", ".(substr($tsd_date,5,2)-1).", ".substr($tsd_date,8,2)."), ";       
          
}    
$sel_email = $C_Func->makeSelect('tm_content10_3', $GP -> EMAIL , $tm_content10, "class='form-control'",'직접입력'); 

$tpl->define("main","info/".$tab.".tpl");

$tpl->define("infomenu","info/info.menu.tpl");

$tpl->define("infocal","info/info_cal.tpl");

$tpl->assign(array(
	"ctxt"	=> $ctxt,
	"ttxt"	=> $ttxt,
	"tab" 	=> $tab,
    "sel_email" => $sel_email,
    "date_total" => $date_total,
	'depth' => $depth
));

include $root_path."include/footer.php";
?>

