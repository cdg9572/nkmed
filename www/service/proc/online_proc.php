<?php
	include_once("../../_init.php");
	include_once $GP -> CLS . 'class.online.php';
   	// include_once($GP -> CLS."/class.mcc.php");	    
	$C_Online = new Online();
	// $C_Mcc	 	= new Mcc; 
    
	switch($_POST['r_mode']){	
		case "ONLINE_RESERVE_REG":
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;    
            
            //접속 ip가 182.230.191.187 이면
            if($_SERVER["REMOTE_ADDR"] == "182.230.191.187"){ 
                echo "echo:"; print_r($_POST); echo "<br>" ;                   
                echo "echo:"; print_r($c_type_next); echo "<br>" ;
                echo "echo:"; print_r($dr_name_next); echo "<br>" ;
                echo "echo:"; print_r($dr_ps_next); echo "<br>" ;                
            }
           
             //예약내역조회
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

            if(count($data02['data']) > 4){
                $C_Func->put_msg_and_go("예약은 5건까지만 가능합니다.", "/service/page02-1.html");
            }
            
            //예약 하기
            $url = "http://1.214.232.188:8070/api/v1/";
            $path01 = "save_reserve";                                           
                        
            $data01 = array(
                "cust_no" => $_SESSION['suserpatientno'],
                "is_date" =>  preg_replace("/[^0-9]*/s", "", $is_date),
                "is_time" => $is_time,                
                "is_dept" => $dr_mtreat_no_next, //진료과코드
                "is_doct" =>  $dr_mcode_next,//의사코드
                "is_comt" =>  $is_comt,//예약메모
                // "is_agid" => $_SESSION['suserid'],//등록자아이디
                "is_ip" => $_SERVER['REMOTE_ADDR']
            );                      

            $json_data = json_encode($data01);
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url.$path01,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $json_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'),
            ));
            $response = curl_exec($curl);                  
            $data = json_decode($response, true);

		
        //   echo "data:<pre>"; var_dump($data);; echo "</pre><br>" ;
        //    exit;

           if($data["code"] != 200){
            $C_Func->put_msg_and_go("예약이 진행되지 않았습니다. 진료 내역이 없는 경우 첫 방문 간편 예약 부탁 드립니다.", "/service/page02-1.html");
           }

			$rev_phone = str_replace("-","",$tor_rs_phone);
			$args = array();
			$args["rev_name"] = $tor_rs_name;
			$args["rev_phone"] = $rev_phone;
			//$pint_no = $C_Mcc->MemberInfo($args);  
			//$pint_no = ($pint_no) ? $pint_no["PTNT_NO"] : "0" ;
			if($pint_no == "0") {
				$args = "";
				$args['PHY_YMD'] 		= $day;
				$args['PHY_TIME'] 		= $time;
				$args['PHY_EMPL_NO']	= $dr_mcode;
				$mp_no = $C_Mcc->ResCheck($args);
				if($mp_no) {
					 $pint_no = -$mp_no;
				}
			}
			
			// $args = "";
			// $args['DUTY_GB'] 		= "01";
			// $args['PHY_YMD'] 		= $day;
			// $args['PHY_TIME'] 		= $time;
			// $args['PHY_EMPL_NO']	= $dr_mcode;
			// $args['PTNT_NO'] 		= $pint_no;
			// $args['RECEPT_NO'] 		= "-1";
			// $args['IO_GB'] 			= "99";
			// $args['PTNT_NM_INFO'] 	= $tor_rs_name;
			// $args['ENT_EMPL_NO'] 	= "50311";
			// $args['ENT_IP'] 		= $_SERVER["REMOTE_ADDR"];
			// $args['PHONE_NO'] 		= $rev_phone;
			// $args['MEMO'] 			= $memo;
			// $args['PROC_GB'] 		= "00";
		//	$rst = $C_Mcc->MccReserveReg($args);   

			// $args = "";
			// $args['DUTY_GB'] 		= "01";
			// $args['PHY_YMD'] 		= $day;
			// $args['PHY_TIME'] 		= $time;
			// $args['PHY_EMPL_NO'] 	= $dr_mcode;
			// $args['PTNT_NO'] 		= $pint_no;
			// $args['PTNT_NM'] 		= $tor_rs_name;
			// $args['PHONE_NO'] 		= $rev_phone;
			// $args['ORD_CD'] 		= "";
			// $args['ORD_NM'] 		= "";						
			// $args['SCOPE_GB'] 		= "";
			// $args['MEMO'] 			= $memo;
	//		$rst = $C_Mcc->MccReserveRegDetail($args);   					
						
			$args = "";
			$args['tor_mb_code'] 		= $mb_code;			
			//$args['tor_rs_ptype'] 		= $ptype;
			$args['tor_rs_ptype'] 		= "s";
			//$args['tor_rs_date'] 		= $year."-".$month."-".$day;
			$args['tor_rs_date'] 		= $is_date;
			$args['tor_rs_time'] 		= $is_time;			$args['tor_rs_name'] 		= $tor_rs_name;
			
			$args['tor_rs_content']		= $is_comt;
            $args['tor_rs_exam']		= $dr_ps_next; //직급
            $args['tor_rs_clinic'] 		= $c_type_next; //과			
			$args['tor_rs_doc']			= $dr_name_next; // 의료진 이름
			$args['tor_rs_phone']		= $tor_rs_phone;
			$args['tor_name']			= $tor_name;

			$rst = $C_Online->Online_Reserve_Reg($args);
          
			
			if($rst) {	
                
                $date_text = date("Y년m월d일", strtotime($is_date));    
                $time_text = substr($is_time,0,2).":".substr($is_time,2,2);            
                
                //알림톡
                $_apiURL    =	'https://kakaoapi.aligo.in/akv10/alimtalk/send/';
                $_hostInfo  =	parse_url($_apiURL);
                $_port      =	(strtolower($_hostInfo['scheme']) == 'https') ? 443 : 80;
                $_variables =	array(
                'apikey'      => 'g6lxpwk4sdlt7hs65lbemod73ckb5z0q', 
                'userid'      => 'r5korea', 
                'token'       => '29667dee0aa35281282832ae97fd1856a507f7a0f9f7da4c39d864a55eb2d7d8df141a26693f4fd43053c947a012ca82fe7ed137164c1141b839848693eaa9eb5cXYh9DVkXY3JKAOEC3fCCTyBZ9cJ9VKUNDMYIKhzrJMnXl0DUFl7CXpXt4DJ2FxnKiS9akTwwFvaMSatDkCQw==', 
                'senderkey'   => 'ffbd2321a7a2dc63cb1d6660754e7d567bdecaa7', 
                'tpl_code'    => 'TO_4516',
                'sender'      => '031-980-9114',
                //'senddate'    => date("YmdHis", strtotime("+10 minutes")),
                'receiver_1'  => $tor_rs_phone,
                'recvname_1'  => $tor_rs_name,
                'subject_1'   => '뉴고려병원 온라인 예약',
                'message_1'   => $tor_rs_name.'님의 예약 정보입니다.

- 진료과 :  '.$c_type_next.'
- 의료진 :  '.$dr_name_next.'  '. $dr_ps_next.'
- 예약일시 : '.$date_text.' '.$time_text.'

▼예약 취소 및 변경을 원하시는 경우 아래 버튼을 눌러주세요.',
                'button_1' => '{"button":[{"name":"예약 취소 및 변경","linkType":"WL","linkP":"https://nkhospital.net/service/page14-2.html", "linkM": "https://nkhospital.net/m/res.history.html"}]}' // 템플릿에 버튼이 없는경우 제거하시기 바랍니다.
                
                );

                $oCurl = curl_init();
                curl_setopt($oCurl, CURLOPT_PORT, $_port);
                curl_setopt($oCurl, CURLOPT_URL, $_apiURL);
                curl_setopt($oCurl, CURLOPT_POST, 1);
                curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($oCurl, CURLOPT_POSTFIELDS, http_build_query($_variables));
                curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);

                $ret = curl_exec($oCurl);
                $error_msg = curl_error($oCurl);
                curl_close($oCurl);

                // 리턴 JSON 문자열 확인
                //print_r($ret . PHP_EOL);

                // JSON 문자열 배열 변환
                //$retArr = json_decode($ret);

                //결과값 출력
                //print_r($retArr);              

                if($chkMobile || strpos($_SERVER['REQUEST_URI'], 'v3') == true) {
                    $C_Func->put_msg_and_go("예약 신청이 완료 되었습니다.\\n\\n[상담 운영 시간]\\n평일: 08:30 ~ 17:30\\n토요일: 08:30 ~ 13:00\\n\\n◈ 운영 시간 외(주말, 공휴일, 휴진일) 접수하신 경우엔 빠른 답변이 어려우니 양해 부탁드립니다.\\n(상담 시간 내 상담원이 확인하여 최대한 빠른 안내 도와드리도록 하겠습니다.)", "/v3/reserve.php?tab=info2_3&dr_idx=$dr_idx_next&is_date=$is_date&is_time=$is_time");                }
                else{
				    $C_Func->put_msg_and_go("예약 신청이 완료 되었습니다.\\n\\n[상담 운영 시간]\\n평일: 08:30 ~ 17:30\\n토요일: 08:30 ~ 13:00\\n\\n◈ 운영 시간 외(주말, 공휴일, 휴진일) 접수하신 경우엔 빠른 답변이 어려우니 양해 부탁드립니다.\\n(상담 시간 내 상담원이 확인하여 최대한 빠른 안내 도와드리도록 하겠습니다.)", "/service/page02-3.html?dr_idx=$dr_idx_next&is_date=$is_date&is_time=$is_time");                }				
				
				exit();
			}else{
				$C_Func->put_msg_and_go("예약 신청에 실패하였습니다", "/service/page02-1.html#none");
				exit();
			}
	
		break;
        case "ONLINE_RESERVE_MODIFY":
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;    
            
            //접속 ip가 182.230.191.187 이면
            if($_SERVER["REMOTE_ADDR"] == "182.230.191.187"){ 
                //echo "echo:"; print_r($_POST); echo "<br>" ;                                           
              //  exit;
            }
           
             //예약내역조회
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

            if(count($data02['data']) > 4){
                $C_Func->put_msg_and_go("예약은 5건까지만 가능합니다.", "/service/page02-1.html");
            }
            
            //예약 변경 하기
            $url = "http://1.214.232.188:8070/api/v1/";
            $path01 = "modify_reserve";  
			
     
            $data01 = array(
                "cust_no" => $_SESSION['suserpatientno'],
                "recept_no" => $recept_no_next,
                "is_date" =>  preg_replace("/[^0-9]*/s", "", $is_date),
                "is_time" => $is_time,                              
                "is_comt" =>  $is_comt,//예약메모   
                "is_ip" => $_SERVER['REMOTE_ADDR']
            );  
          

            $json_data = json_encode($data01);
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url.$path01,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => $json_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'),
            ));
            $response = curl_exec($curl);                  
            $data = json_decode($response, true); 

           // echo "data01:<pre>"; print_r($data01); echo "</pre><br>" ;
           // echo "data:<pre>"; var_dump($data); echo "</pre><br>" ;
           // exit;

           if($data["code"] != 200){
            $C_Func->put_msg_and_go("예약이 진행되지 않았습니다. 진료 내역이 없는 경우 첫 방문 간편 예약 부탁 드립니다.", "/service/page02-1.html");
           }

			$rev_phone = str_replace("-","",$tor_rs_phone);
			$args = array();
			$args["rev_name"] = $tor_rs_name;
			$args["rev_phone"] = $rev_phone;
			//$pint_no = $C_Mcc->MemberInfo($args);  
			//$pint_no = ($pint_no) ? $pint_no["PTNT_NO"] : "0" ;
			if($pint_no == "0") {
				$args = "";
				$args['PHY_YMD'] 		= $day;
				$args['PHY_TIME'] 		= $time;
				$args['PHY_EMPL_NO']	= $dr_mcode;
				$mp_no = $C_Mcc->ResCheck($args);
				if($mp_no) {
					 $pint_no = -$mp_no;
				}
			}
			
			// $args = "";
			// $args['DUTY_GB'] 		= "01";
			// $args['PHY_YMD'] 		= $day;
			// $args['PHY_TIME'] 		= $time;
			// $args['PHY_EMPL_NO']	= $dr_mcode;
			// $args['PTNT_NO'] 		= $pint_no;
			// $args['RECEPT_NO'] 		= "-1";
			// $args['IO_GB'] 			= "99";
			// $args['PTNT_NM_INFO'] 	= $tor_rs_name;
			// $args['ENT_EMPL_NO'] 	= "50311";
			// $args['ENT_IP'] 		= $_SERVER["REMOTE_ADDR"];
			// $args['PHONE_NO'] 		= $rev_phone;
			// $args['MEMO'] 			= $memo;
			// $args['PROC_GB'] 		= "00";
		//	$rst = $C_Mcc->MccReserveReg($args);   

			// $args = "";
			// $args['DUTY_GB'] 		= "01";
			// $args['PHY_YMD'] 		= $day;
			// $args['PHY_TIME'] 		= $time;
			// $args['PHY_EMPL_NO'] 	= $dr_mcode;
			// $args['PTNT_NO'] 		= $pint_no;
			// $args['PTNT_NM'] 		= $tor_rs_name;
			// $args['PHONE_NO'] 		= $rev_phone;
			// $args['ORD_CD'] 		= "";
			// $args['ORD_NM'] 		= "";						
			// $args['SCOPE_GB'] 		= "";
			// $args['MEMO'] 			= $memo;
	//		$rst = $C_Mcc->MccReserveRegDetail($args);   					
						
			$args = "";
			$args['tor_mb_code'] 		= $mb_code;			
			//$args['tor_rs_ptype'] 		= $ptype;
			$args['tor_rs_ptype'] 		= "s";
			//$args['tor_rs_date'] 		= $year."-".$month."-".$day;
			$args['tor_rs_date'] 		= $is_date;
			$args['tor_rs_time'] 		= $is_time;			$args['tor_rs_name'] 		= $tor_rs_name;
			
			$args['tor_rs_content']		= $is_comt;
            $args['tor_rs_exam']		= $dr_ps_next; //직급
            $args['tor_rs_clinic'] 		= $c_type_next; //과			
			$args['tor_rs_doc']			= $dr_name_next; // 의료진 이름
			$args['tor_rs_phone']		= $tor_rs_phone;
			$args['tor_name']			= $tor_name;

			$rst = $C_Online->Online_Reserve_Reg($args);
          
			
			if($rst) {	
                
                $date_text = date("Y년m월d일", strtotime($is_date));    
                $time_text = substr($is_time,0,2).":".substr($is_time,2,2);            
                
                //알림톡
                $_apiURL    =	'https://kakaoapi.aligo.in/akv10/alimtalk/send/';
                $_hostInfo  =	parse_url($_apiURL);
                $_port      =	(strtolower($_hostInfo['scheme']) == 'https') ? 443 : 80;
                $_variables =	array(
                'apikey'      => 'g6lxpwk4sdlt7hs65lbemod73ckb5z0q', 
                'userid'      => 'r5korea', 
                'token'       => '29667dee0aa35281282832ae97fd1856a507f7a0f9f7da4c39d864a55eb2d7d8df141a26693f4fd43053c947a012ca82fe7ed137164c1141b839848693eaa9eb5cXYh9DVkXY3JKAOEC3fCCTyBZ9cJ9VKUNDMYIKhzrJMnXl0DUFl7CXpXt4DJ2FxnKiS9akTwwFvaMSatDkCQw==', 
                'senderkey'   => 'ffbd2321a7a2dc63cb1d6660754e7d567bdecaa7', 
                'tpl_code'    => 'TO_4516',
                'sender'      => '031-980-9114',
                //'senddate'    => date("YmdHis", strtotime("+10 minutes")),
                'receiver_1'  => $tor_rs_phone,
                'recvname_1'  => $tor_rs_name,
                'subject_1'   => '뉴고려병원 온라인 예약',
                'message_1'   => $tor_rs_name.'님의 예약 정보입니다.

- 진료과 :  '.$c_type_next.'
- 의료진 :  '.$dr_name_next.'  '. $dr_ps_next.'
- 예약일시 : '.$date_text.' '.$time_text.'

▼예약 취소 및 변경을 원하시는 경우 아래 버튼을 눌러주세요.',
                'button_1' => '{"button":[{"name":"예약 취소 및 변경","linkType":"WL","linkP":"https://nkhospital.net/service/page14-2.html", "linkM": "https://nkhospital.net/m/res.history.html"}]}' // 템플릿에 버튼이 없는경우 제거하시기 바랍니다.
                
                );

                $oCurl = curl_init();
                curl_setopt($oCurl, CURLOPT_PORT, $_port);
                curl_setopt($oCurl, CURLOPT_URL, $_apiURL);
                curl_setopt($oCurl, CURLOPT_POST, 1);
                curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($oCurl, CURLOPT_POSTFIELDS, http_build_query($_variables));
                curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);

                $ret = curl_exec($oCurl);
                $error_msg = curl_error($oCurl);
                curl_close($oCurl);

                // 리턴 JSON 문자열 확인
                //print_r($ret . PHP_EOL);

                // JSON 문자열 배열 변환
                //$retArr = json_decode($ret);

                //결과값 출력
                //print_r($retArr);              

                if($chkMobile || strpos($_SERVER['REQUEST_URI'], 'v3') == true) {
                    $C_Func->put_msg_and_go("예약 날짜 변경이 완료 되었습니다.\\n\\n[상담 운영 시간]\\n평일: 08:30 ~ 17:30\\n토요일: 08:30 ~ 13:00\\n\\n◈ 운영 시간 외(주말, 공휴일, 휴진일) 접수하신 경우엔 빠른 답변이 어려우니 양해 부탁드립니다.\\n(상담 시간 내 상담원이 확인하여 최대한 빠른 안내 도와드리도록 하겠습니다.)", "/v3/reserve.php?tab=info2_3&dr_idx=$dr_idx_next&is_date=$is_date&is_time=$is_time");                }
                else{
				    $C_Func->put_msg_and_go("예약 날짜 변경이 완료 되었습니다.\\n\\n[상담 운영 시간]\\n평일: 08:30 ~ 17:30\\n토요일: 08:30 ~ 13:00\\n\\n◈ 운영 시간 외(주말, 공휴일, 휴진일) 접수하신 경우엔 빠른 답변이 어려우니 양해 부탁드립니다.\\n(상담 시간 내 상담원이 확인하여 최대한 빠른 안내 도와드리도록 하겠습니다.)", "/service/page02-3.html?dr_idx=$dr_idx_next&is_date=$is_date&is_time=$is_time");                }				
				
				exit();
			}else{
				$C_Func->put_msg_and_go("예약 날짜 변경이 실패하였습니다", "/service/page02-1.html#none");
				exit();
			}
	
		break;
        case "ONLINE_DEL":
            $url = "http://1.214.232.188:8070/api/v1/";
            $path01 = "cancel_reserve";
            
            $data01 = array(
                        "recept_no" => $recept_no,
                        "cancel_memo" => "",
                        // "is_agid" => $_SESSION['suserid'],
                        "is_ip" =>  $_SERVER['REMOTE_ADDR']
                        );

            $json_data = json_encode($data01);
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url.$path01,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_POSTFIELDS => $json_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'),
            ));
            $response = curl_exec($curl);                  
            $data = json_decode($response, true);          

            if($data["code"] == "200"){
                echo "true";
            }elseif ($data["code"] == "204") {
                echo "204";
            }
           
           exit;        

        break;
	}
?>
