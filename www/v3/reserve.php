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
include_once($GP -> CLS."/class.member.php");
include_once($GP -> CLS."/class.doctor.php");
$C_Member 	= new Member;
$C_Doctor 	= new Doctor;

$js->load_script("/v3/controller/js/info.js");

$tab = ($_GET["tab"]) ? $_GET["tab"] : "info3";

switch($tab){	
	case "info2_1" : $ctxt="예약/발급";$ttxt = "진료 예약(재진)"; $depth = "depth1"; break;	
	case "info2_2" : $ctxt="예약/발급";$ttxt = "진료 예약(재진)"; $depth = "depth1"; break;	
	case "info2_3" : $ctxt="예약/발급";$ttxt = "진료 예약(재진)"; $depth = "depth1"; break;		
	default : $ctxt="예약/발급";$ttxt = "진료예약"; $depth = "depth1"; break;	 			
};

$args = "";
$args['mb_code'] = $_SESSION['susercode'];
$data_member = $C_Member->Mem_Info($args);

if($data_member) {extract($data_member);}

if (!$C_Func -> is_login()) {        
//    $C_Func->put_msg_and_go("로그인 후 이용해주세요.", "/v3/login.php");
}else{
    //고객번호 조회하기
    $url = "http://1.214.232.188:8070/api/v1/";
    $path01 = "exp_patient";   

    $data01 = array(
        "cust_name" =>  $mb_name,
        "cust_phone" => str_replace("-", "",$mb_mobile)
    );

    $json_data = json_encode($data01);
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => $url.$path01,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_POSTFIELDS => $json_data,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'),
    ));
    $response = curl_exec($curl);                  
    $data = json_decode($response, true);

    $_SESSION['suserbirth'] 	= $data['data'][0]['cust_birth'];
    $_SESSION['suserpatientno'] 	= $data['data'][0]['cust_no'];
    $_SESSION['susercount'] 	= $data['data_cnt'];

    if($mb_name == "최도규" || $mb_name == "서준범" || $mb_name == "지태광" || $mb_name == "채승병" || $mb_name == "여나래"){
        $_SESSION['suserpatientno'] 	= "782844";                 
   }  

    if($mb_name == "" || $mb_mobile == ""){
        $C_Func->put_msg_and_go("성함,휴대전화 정보가 정확하지 않습니다.", "/v3/mypage.php?tab=mypage");
    }
    else if( $data['data_cnt'] < 1){    
            $C_Func->put_msg_and_go("신환 환자이시거나 예약 이력이 조회되지 않습니다.", "/");			                                 
    }  
}

//환자 정보 불러오기
$url = "http://1.214.232.188:8070/api/v1/";
$path01 = "check_reserve"; 

$data01 = array(
            "cust_no" =>  $_SESSION['suserpatientno']                
            );

$json_data = json_encode($data01);
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => $url.$path01,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_CUSTOMREQUEST => 'GET',
CURLOPT_POSTFIELDS => $json_data,
CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'),
));
$response = curl_exec($curl);                  
$data02 = json_decode($response, true);
for($i=0;$i<count($data02["data"]);$i++) {
    $args["dr_mcode"] = $data[$i]["PHY_EMPL_NO"];
    $dr_info = $C_Doctor->Doctor_Info_Code($args);
   
    $dr_ps  = $GP -> DOCTOR_POSITION[$dr_info["dr_position"]];	                          
    $recept_no = $data02['data'][$i]["recept_no"] ;
    $r_ymd = substr($data02['data'][$i]['reserv_ymd'],0,4)."-".substr($data02['data'][$i]['reserv_ymd'],4,2)."-".substr($data02['data'][$i]['reserv_ymd'],6,2);
    $r_time = substr($data02['data'][$i]['reserv_time'],0,2).":".substr($data02['data'][$i]['reserv_time'],2,2);
    $r_name = $data02['data'][$i]['reserv_doct_nm']; 

    $r_list[] = array(     
        "dr_ps" => $dr_ps,
        "recept_no"    => $recept_no,
        "r_ymd"     => $r_ymd,
        "r_time"       => $r_time,
        "r_name"       => $r_name
    );

}

$args["mb_code"] = $_SESSION['susercode'];
$data = $C_Member->Mem_Info($args);

if(count($data02['data']) > 0) {
    for($i=0;$i<count($data02['data']);$i++){ 
        $args["dr_mcode"] = $data02['data'][$i]["reserv_doct"];                                
        $dr_info = $C_Doctor->Doctor_Info_Code($args);     
        $dr_img = '';
        
        if($dr_info["dr_face_img"] !=  '') {
            $dr_img = "<img src='" . $GP -> UP_DOCTOR_URL . $dr_info["dr_face_img"] . "' alt='' class='block'/>";
        }	          
             //취소가능여부확인
            $url = "http://1.214.232.188:8070/api/v1/";
            $path02 = "cancel_confirm";    

            $data_cc = array(
                        "recept_no" =>  $recept_no
                        );

            $json_data = json_encode($data_cc);
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url.$path02,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => $json_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'),
            ));
            $response = curl_exec($curl);                  
            $data_ccd = json_decode($response, true);   
        }
}

//예약 완료 페이지
$args["dr_idx"] = $_GET["dr_idx"];
$dr_info_2 = $C_Doctor->Doctor_Info($args);
$cn_arr2 = explode(",", $dr_info_2["dr_clinic2"]);

if (!empty($cn_arr2)) {
    foreach ($cn_arr2 as $key => $val) {
        $clinic = $GP->NEW_MOBILE_CLINIC[$val];
        if (!empty($clinic)) {
            $clinic_str .= $clinic . ",";
        }
    }
}


$tpl->assign(array(
    "mcode"		=> $mb_code,		
    "name"		=> $mb_name,		
    'mobile' 	=> $mb_mobile,
    'suserpatientno' 	=> $_SESSION['suserpatientno'] ,
    "list"  => $list,
    "r_list"  => $r_list,
    "first_no"  => $data02['data'][0]["recept_no"],
    "clinic_str"  => rtrim($clinic_str, ","),
    "is_date"  => $is_date,
    "is_time"  => " " . substr($is_time, 0, 2) . ":" . substr($is_time, 2, 2),
    "dr_name"  => $dr_info_2["dr_name"],
    "dr_position"  => $GP -> DOCTOR_POSITION[$dr_info_2["dr_position"]],
    "data_ccd"  => $data_ccd['data']
));	

$tpl->define("main","info/".$tab.".tpl");

$tpl->define("infomenu","info/info.menu.tpl");

$tpl->define("infocal","info/info_cal.tpl");

$tpl->assign(array(
	"ctxt"	=> $ctxt,
	"ttxt"	=> $ttxt,
	"tab" 	=> $tab,
	'depth' => $depth
));



include $root_path."include/footer.php";
?>

