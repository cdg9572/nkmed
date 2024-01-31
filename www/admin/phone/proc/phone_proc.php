<?php
	include_once("../../../_init.php");
	include_once $GP -> CLS . 'class.online.php';
	$C_Online = new Online();

	switch($_POST['mode']){		
		
		//전화 상담 삭제
		case "Phone_DEL":
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;				
			
			$args = "";
			$args['tfc_idx'] = $tfc_idx;
			$rst = $C_Online -> Phone_Consel_Del($args);
			
			echo "true";
			exit();
		break;
		
		//전화 상담 처리
		case "Phone_MODI":
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;				
			
			include $GP -> INC_PATH . "/xssFilter/HTML/Safe.php"; // xss filter을 include
			
			$arg = "";
			$args['tfc_idx'] 				= $tfc_idx;
			$args['tfc_result'] 			= $tfc_result;
			$args['tfc_rt_date'] 		= $tfc_rt_date;		
			
			// $safe = new HTML_Safe; // xss filter 객체 생성
			// $input = base64_decode($tfc_result_con); 
			// $output = $safe->parse($input); // html 태그를 필터링 하여 $output에 대입			
			// $tfc_result_con = $C_Func->enc_contents($output);		
            //태그 전부 제거하고 text만 입력 가능 하게
            $tfc_result_con = strip_tags($tfc_result_con);
			$args['tfc_result_con'] = $tfc_result_con;
			$rst = $C_Online -> Phone_Consel_Result($args);		

			$C_Func->put_msg_and_modalclose("처리 되었습니다");		
			exit();
		break;
		
			case "PS_REG":
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;	
      

			$now_date = date('Y-m-d H:i:s');
            //$tfc_mobile =  $mb_mobile1 . "-" . $mb_mobile2 . "-" . $mb_mobile3;

			$args = '';
			$args['tfc_type']		= $tfc_type;
			$args['mb_code']		= $_SESSION['susercode'];
			$args['tfc_name']		= $mb_name;
			$args['tfc_mobile']		= $mb_mobile;
//			$rst1 = $C_Online -> Phone_Chk_List($args);

	/*		if($rst1) {
				$check_date = $rst1['tfc_regdate'];
				$time_go =  $C_Func->datetimediff($check_date, null, "min");

				if($time_go < 30) {
				  $C_Func->put_msg_and_back("상담 요청을 하신지 30분이 지나지 않았습니다. 기다려주시거나 30분후에 재문의 해주세요");
				  exit();
				}
			}
*/
			$rst = $C_Online -> Phone_Counsel_Reg($args); 

            //알림톡
            $_apiURL    =	'https://kakaoapi.aligo.in/akv10/alimtalk/send/';
            $_hostInfo  =	parse_url($_apiURL);
            $_port      =	(strtolower($_hostInfo['scheme']) == 'https') ? 443 : 80;
            $_variables =	array(
            'apikey'      => 'g6lxpwk4sdlt7hs65lbemod73ckb5z0q', 
            'userid'      => 'r5korea', 
            'token'       => '29667dee0aa35281282832ae97fd1856a507f7a0f9f7da4c39d864a55eb2d7d8df141a26693f4fd43053c947a012ca82fe7ed137164c1141b839848693eaa9eb5cXYh9DVkXY3JKAOEC3fCCTyBZ9cJ9VKUNDMYIKhzrJMnXl0DUFl7CXpXt4DJ2FxnKiS9akTwwFvaMSatDkCQw==', 
            'senderkey'   => 'ffbd2321a7a2dc63cb1d6660754e7d567bdecaa7', 
            'tpl_code'    => 'TO_5372',
            'sender'      => '031-980-9114',
            //'senddate'    => date("YmdHis", strtotime("+10 minutes")),
            'receiver_1'  => $mb_mobile,
            'recvname_1'  => $mb_name,
            'subject_1'   => '뉴고려병원 첫 진료 간편예약',
            'message_1'   => $mb_name.'님 안녕하세요.

뉴고려병원 첫 진료 간편 예약 상담이 접수되었습니다.
            
[상담 운영 시간]
평일 : 08:30 ~ 17:30
토요일 : 08:30 ~ 13:00
            
◈ 운영 시간 외(주말, 공휴일, 휴진일) 접수하신 경우엔 빠른 답변이 어려우니 양해 부탁드립니다.
(상담 시간 내 상담원이 확인하여 최대한 빠른 안내 도와드리도록 하겠습니다.)'            
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

			if($rst) {
				$C_Func->put_msg_and_go("예약이 등록 되었습니다.", "/");				
				exit();
			}else{
				$C_Func->put_msg_and_go("예약 신청에 실패하였습니다", "/");
				exit();
			} 
    	break;
    
		
		
		
	}
?>