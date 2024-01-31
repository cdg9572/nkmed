<?php
	include_once  '../../_init.php';
	include_once $GP -> CLS . 'class.login.php';
	include_once $GP -> CLS . 'class.member.php';
	$C_Member = new Member();
	$C_Login = new Login();
	
	$refer = $_SERVER['HTTP_REFERER'];
	$server = $_SERVER['HTTP_HOST'];	

    $mode = ($_POST['mode']) ? $_POST['mode'] : $_GET['mode'];



	if($mode == "LOGIN"){
		if(!ereg($server, $refer)){
			$C_Func->put_msg_and_go("올바른 경로로 접근 바랍니다", "/");
			exit();
		}	
	}

	switch($mode){

		//일반회원 로그인
		case "LOGIN":
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;

			$args				 = array();			
			$m_pwd = trim(mysql_escape_string($m_pwd));
			$args['mb_password'] = md5(trim($m_pwd));
			
			$m_id			 		 = mysql_escape_string($m_id);
			$args['mb_id']	 = $m_id;
			$rst = $C_Login -> userLogin_ID($args);						
			
			//비밀번호가 같다면
			if($rst['mb_password'] ==  md5(trim($m_pwd))) {
				
				$_SESSION['suserid'] = $rst['mb_id'];
				$_SESSION['susernick'] = $rst['mb_nick'];
				$_SESSION['susername'] = $rst['mb_name'];
				$_SESSION['suserphone'] = $rst['mb_mobile'];
				$_SESSION['suseremail'] = $rst['mb_email'];
				$_SESSION['suserlevel'] = $rst['mb_level'];
				$_SESSION['susercode'] = $rst['mb_code'];
				
				//마지막 로그인 날짜, 마지막 로그인 아이피, 로그인 누적횟수 수정
				$args = '';
				$args['mb_id'] = $_POST['m_id'];
				$args['mb_lastlogin_date'] = date('Y-m-d H:i:s');
				$args['mb_lastlogin_ip']   = $_SERVER['REMOTE_ADDR'];
				$result = $C_Login -> Mem_Login_history_ID($args);

            //고객번호 조회하기
            $url = "http://1.214.232.188:8070/api/v1/";
            $path01 = "exp_patient";   
            
            $data01 = array(
                "cust_name" =>  $_SESSION['susername'],
                "cust_phone" => str_replace("-", "",$_SESSION['suserphone'])
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

            $mb_name = $_SESSION['susername'];

            if($mb_name == "최도규" || $mb_name == "서준범" || $mb_name == "지태광" || $mb_name == "채승병" || $mb_name == "여나래"){
                $_SESSION['suserpatientno'] 	= "782844";                 
            }     

				if ($re_url != "") {
					$C_Func ->	go_url($re_url);
				} else {
					$C_Func ->	go_url($GP -> SERVICE_DOMAIN . "/");
				}
			} else {
				$C_Func -> put_msg_and_back('아이디 혹은 패스워드가 틀립니다.');
			}
		break;
		
		case 'naver':
			include_once($GP->CLS."class.naver.php");
			$naver = new Naver(array(
					"CLIENT_ID" => $GP->NAVER_CLIENT_ID,        
					"CLIENT_SECRET" => $GP->NAVER_CLIENT_SECRET
					)
			);
			$profile = $naver->getUserProfile('JSON');
			$profile = json_decode($profile, true);
			
			$mb_email 	= $profile["response"]["email"];
			$mb_name  	= $profile["response"]["name"];
			$mb_id		= $profile["response"]["id"];
			$mb_sex 	= $profile["response"]["gender"];
			$mb_birth 	= $profile["response"]["birthday"];
			$mb_mobile 	= $profile["response"]["mobile"];
			
			$mb_email1 = explode("@",$mb_email);
            			
			$args['mb_id'] = $mb_id;
			$rst = $C_Member->ID_DobuleCheck($args);   			
            
            $_SESSION['susername']   = $mb_name;
            $_SESSION['suserphone'] = str_replace("-", "",$mb_mobile);            

			if($rst["cnt"] == 0){
					$args = "";
					$args['mb_id'] = $mb_id;
					$args['mb_email'] = $mb_id."@naver.com";
					$args['mb_password'] = md5($mb_id);  //비밀번호 네이버 고유아이디로 지정
					$args['mb_name'] = $mb_name;
					$args['mb_sex'] = $mb_sex;
					$args['mb_mobile'] = $mb_mobile;
					$args['mb_birthday'] = $mb_birth;
					$args['mb_sms'] = 'Y';
					$args['mb_gubun'] = 'naver';
					$rst = $C_Member->Mem_Join($args);
			}					
				//세션처리
					$args = "";
					$args['mb_id'] = $mb_id;
					$rst = $C_Login -> userLoginNaver($args);
                  
					$_SESSION['suserid'] 	= $rst['mb_id'];
					$_SESSION['susername']  = $rst['mb_name'];
					$_SESSION['suserphone'] = str_replace("-", "",$rst['mb_mobile']);    
					$_SESSION['suseremail'] = $rst['mb_email'];
					$_SESSION['suserlevel'] = $rst['mb_level'];
					$_SESSION['susercode']  = $rst['mb_code'];
					
					//마지막 로그인 날짜, 마지막 로그인 아이피, 로그인 누적횟수 수정
					$args = '';
					$args['mb_email'] = $_POST['m_email'];
					$args['mb_lastlogin_date'] = date('Y-m-d H:i:s');
					$args['mb_lastlogin_ip']   = $_SERVER['REMOTE_ADDR'];
					$result = $C_Login -> Mem_Login_history($args);		
					
					//echo "data01:<pre>"; print_r( $_POST ); echo "</pre><br>" ;

                //고객번호 조회하기
                $url = "http://1.214.232.188:8070/api/v1/";
                $path01 = "exp_patient";   
                
                $data01 = array(
                    "cust_name" =>  $_SESSION['susername'],
                    "cust_phone" => str_replace("-", "",$_SESSION['suserphone'])
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

                $mb_name = $_SESSION['susername'];

                if($mb_name == "최도규" || $mb_name == "서준범" || $mb_name == "지태광" || $mb_name == "채승병" || $mb_name == "여나래"){
                    $_SESSION['suserpatientno'] 	= "782844";                 
                }                       
                             
				if ($re_url != "") {
					$C_Func ->	go_replace_opener2("http://nkhospital.net".$re_url);
				} else {
					if($u == "M"){
						if($rst['mb_name'] =='' || $rst['mb_mobile'] ==''){
							//$C_Func ->	go_replace_opener2("http://nkhospital.net/m/user.info.html");
                            
				?>
					<script>
						opener.top.location.href = 'http://nkhospital.net/m/user.info.html';
						setTimeout(function(){
								self.close();
						},300);
					</script>
					
				<?php
						}else{
						//$C_Func ->	go_replace_opener2("http://nkhospital.net/m/main.html");
							if ($re_url != "") {
									$gourl = "http://nkhospital.net".$re_url."&ptype=c";
							} else {
									$gourl = "http://nkhospital.net/m/main.html";									
							}
						
				?>
						<script>
						var gurl = "<?=$gourl?>";
						opener.top.location.href = gurl;
						setTimeout(function(){
								self.close();
						},300);
					</script>	
				<?php
						}
					}else{
						$C_Func ->	go_replace_opener2("http://nkhospital.net");
					}
				}            
            

		break;	  
        
		case 'kakao':
            
            //echo "echo:"; print_r($_POST); echo "<br>" ;
            //exit;
			$mb_id 	= $_POST["mb_id"];
			$mb_name  	= $_POST["mb_name"];			
			$mb_mobile = str_replace("+82 ", "0",$_POST["mb_mobile"]);
			$mb_birthday  	= $_POST["mb_birthday"];
			
			$args['mb_id'] = $mb_id;
			
			if(!$_POST['mb_email']) $mb_email = $mb_id."@kakao.com";
			
			$rst = $C_Member->ID_DobuleCheck($args);
           
          
            $_SESSION['susername']   = $mb_name;
            $_SESSION['suserphone'] = str_replace("-", "",$mb_mobile);                 
        
			if($rst["cnt"] == 0){
					$args = "";
					$args['mb_id'] = $mb_id;
					$args['mb_email'] = $mb_email;
					$args['mb_password'] = md5($mb_id);  
					$args['mb_name'] = $mb_name;
					$args['mb_sex'] = $mb_sex;
					$args['mb_birthday'] = $mb_birthday;
					$args['mb_mobile'] = $mb_mobile;
					$args['mb_sms'] = 'Y';
					$args['mb_gubun'] = 'kakao';					
					$rst = $C_Member->Mem_Join($args);
			}					
				//세션처리
					$args = "";
					$args['mb_id'] = $mb_id;
					$rst = $C_Login -> userLogin_ID_New($args);

				
					$_SESSION['suserid'] 	= $rst['mb_id'];
					$_SESSION['susername']  = $rst['mb_name'];
					$_SESSION['suserphone'] = $rst['mb_mobile'];
					$_SESSION['suseremail'] = $rst['mb_email'];
					$_SESSION['suserlevel'] = $rst['mb_level'];
					$_SESSION['susercode']  = $rst['mb_code'];

					//마지막 로그인 날짜, 마지막 로그인 아이피, 로그인 누적횟수 수정
					$args = '';
					$args['mb_email'] = $_POST['mb_email'];
					$args['mb_lastlogin_date'] = date('Y-m-d H:i:s');
					$args['mb_lastlogin_ip']   = $_SERVER['REMOTE_ADDR'];
					$result = $C_Login -> Mem_Login_history($args);		                   

                //고객번호 조회하기
                $url = "http://1.214.232.188:8070/api/v1/";
                $path01 = "exp_patient";   
                
                $data01 = array(
                    "cust_name" =>  $_SESSION['susername'],
                    "cust_phone" => str_replace("-", "",$_SESSION['suserphone'])
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

                $mb_name = $_SESSION['susername'];

                if($mb_name == "최도규" || $mb_name == "서준범" || $mb_name == "지태광" || $mb_name == "채승병" || $mb_name == "여나래"){
                    $_SESSION['suserpatientno'] 	= "782844";                 
                }     
			
				if ($re_url != "") {
					$C_Func ->	go_url("http://nkhospital.net".$re_url);
				} else {
					if($u == "M"){

						if($rst['mb_name'] =='' || $rst['mb_mobile'] ==''){
						
							$C_Func ->	go_url("http://nkhospital.net/m/user.info.html");
					

						}else{
							$C_Func ->	go_url("http://nkhospital.net/m/main.html");
						}
					}else{
						$C_Func ->	go_url("http://nkhospital.net");
					}
				}
			
		break;	              				
	}
?>