<?
	include_once($GP -> CLS."class.jhboard.php");
    include_once($GP -> CLS."class.list.php");    
    include_once($GP -> CLS."class.slidem.php");
    $C_JHBoard = new JHBoard();
    $C_ListClass 	= new ListClass();
	$C_Slide = new Slide();
	
	//메인 슬라이드
	function Main_Slide($type) {
		global $GP, $C_Slide, $C_Func;

		$args = '';
		$args['order']  = " ts_idx asc";
		$args['limit']  = " limit 0,10 ";
        if($type) $args["ts_type"] = $type;	
          
        $rst = $C_Slide->Main_Slide_Show($args);	
        
		$str = "";				
		for($i=0; $i<count($rst); $i++) {
          //  $ts_title      = $rst[$i]['ts_title'];
            $ts_title    = nl2br($C_Func->dec_contents_edit($rst[$i]['ts_title']));
			$ts_descrition = $rst[$i]['ts_descrition'];
			$ts_link       = $rst[$i]['ts_link'];
            $ts_content    = nl2br($C_Func->dec_contents_edit($rst[$i]['ts_content']));
			$ts_img        = $rst[$i]['ts_img'];
			$ts_m_img      = $rst[$i]['ts_m_img'];
            $ts_type       = $rst[$i]['ts_type'];               
           
            
           
            if($type == "PC"){
                $str .= "
				<li class='swiper-slide'>
					<a href='" . $ts_link ."'>
						<img class='mb-hide' src='".$GP -> UP_SLIDE_URL . $ts_img."'>
						<img class='mb-show' src='".$GP -> UP_SLIDE_URL . $ts_m_img."'>
					</a>
				</li>";	
            }
            elseif($type == "main"){               
                $str .= "	                    

                <li class='swiper-slide'>  
                    <a href='" . $ts_link ."'>        
                    	<img class='mb-hide' src='".$GP -> UP_SLIDE_URL . $ts_img."' alt=''>  
						<img class='mb-show' src='".$GP -> UP_SLIDE_URL . $ts_m_img."' alt=''>                        
                        <div class='swiper-cont'>
                            <p class='tit'>
                             $ts_title
                            </p>
                            <span class='text'>
                              $ts_content
                            </span>
                        </div>
                    </a>
                </li>
                
              
              ";

		    }					
		}		
		
		return $str;
	}
	
	
	function Main_Notice($jb_code){
		global $GP, $C_JHBoard, $C_Func;

		$args = '';	
		$args['jb_code'] = $jb_code;
		$args['limit']  = " limit 0, 8 ";
		$rst = $C_JHBoard->Board_Main_Data($args);

		$str = "";
		if(count($rst) > 0) {
			for($i=0; $i<count($rst); $i++) {
				$jb_idx					= $rst[$i]['jb_idx'];
				$jb_file_name		= $rst[$i]['jb_file_name'];
				$jb_file_code		= $rst[$i]['jb_file_code'];
				$jb_code				= $rst[$i]['jb_code'];
                $jb_treat				= $rst[$i]['jb_treat'];
                $jb_see				= $rst[$i]['jb_see'];
				$jb_title 			= $C_Func->strcut_utf8($rst[$i]['jb_title'], 30, true, "...");
				$jb_reg_date 		= date("Y.m.d", strtotime($rst[$i]['jb_reg_date']));
				$jb_mb_id			= $C_Func->blindInfo($rst[$i]['jb_mb_id'],3);
	
				$jb_content			= $C_Func->dec_contents_edit($rst[$i]['jb_content']);
				$content 				= strip_tags($jb_content);
				$jb_content 		= $C_Func->strcut_utf8($content, 100, false, "...");				
				
	
				//타이틀이미지
				$new_image = " <img src=\"" . $GP -> IMG_PATH . "/skin/basic/image/ticon_new.gif\" border='0' align='middle'>";
				$new_icon = $C_Func->new_icon(1, $rst[$i]['jb_reg_date'], $new_image);
	
				$jb_title = $jb_title . $new_icon;

				$img_src = '';				
				if($jb_file_code != '') {
					$code_file = $GP->UP_IMG_SMARTEDITOR_URL. "/jb_${jb_code}/${jb_file_code}";
					$img_src = "<img src='" . $code_file. "' >";
				}else{
					$img_src = "<img src='/public/images/default.jpg' alt='이미지 없음'  >";
				}

                if($jb_code == "10"){$jb_name = "병원소식" ;}
                elseif($jb_code == "80"){$jb_name = "포토뉴스" ;}
                elseif($jb_code == "140"){$jb_name = "CH NK" ;}
                elseif($jb_code == "90"){$jb_name = "언론보도" ;}
                elseif($jb_code == "50"){$jb_name = "건강정보" ;}
                elseif($jb_code == "40"){$jb_name = "전문의 상담" ;}
                elseif($jb_code == "20"){$jb_name = "칭찬합니다" ;}
                elseif($jb_code == "240"){$jb_name = "질환정보" ;}
			
	
				
				$str .= "			
						<li>
							<a href='/notice/notice.php?jb_code=$jb_code&jb_idx=$jb_idx&jb_mode=tdetail' class='dec'>
								<div class='img'>
								" . $img_src . "
								</div>
								<span class='txt'>
									<b>
									" . $jb_title . "
									</b>
									<p>
									" . $jb_content . "
									</p>
								</span>
								<div class='dec-foot'>
									<span class='label'>". $jb_name . "</span>
									<span>" . $jb_reg_date . "</span>
									<span class='view'>" . $jb_see . "</span>
								</div>
							</a>
						</li>	
			";
			}
		}else{
			$str = "
					<li><a href='#;'>등록된 데이터가 없습니다.</a></li>
				";
		}
		return $str;
    }	

	function Main_Notice2($jb_code){
		global $GP, $C_JHBoard, $C_Func;

		$args = '';	
		$args['jb_code'] = $jb_code;
		$args['limit']  = " limit 0, 6 ";
		$rst = $C_JHBoard->Board_Main_Data($args);

		$str = "";
		if(count($rst) > 0) {
			for($i=0; $i<count($rst); $i++) {
				$jb_idx					= $rst[$i]['jb_idx'];
				$jb_file_name		= $rst[$i]['jb_file_name'];
				$jb_file_code		= $rst[$i]['jb_file_code'];
				$jb_code				= $rst[$i]['jb_code'];
                $jb_treat				= $rst[$i]['jb_treat'];
                $jb_see				= $rst[$i]['jb_see'];
				$jb_title 			= $rst[$i]['jb_title'];
				$jb_reg_date 		= date("Y.m.d", strtotime($rst[$i]['jb_reg_date']));
				$jb_mb_id			= $C_Func->blindInfo($rst[$i]['jb_mb_id'],3);
	
				$jb_content			= $C_Func->dec_contents_edit($rst[$i]['jb_content']);
				$content 				= strip_tags($jb_content);
				$jb_content 		= $C_Func->strcut_utf8($content, 100, false, "...");				
				
	
				//타이틀이미지
				$new_image = " <img src=\"" . $GP -> IMG_PATH . "/skin/basic/image/ticon_new.gif\" border='0' align='middle'>";
				$new_icon = $C_Func->new_icon(1, $rst[$i]['jb_reg_date'], $new_image);
	
				$jb_title = $jb_title . $new_icon;

				$img_src = '';				
				if($jb_file_code != '') {
					$code_file = $GP->UP_IMG_SMARTEDITOR_URL. "/jb_${jb_code}/${jb_file_code}";
					$img_src = "<img src='" . $code_file. "' >";
				}else{
					$img_src = "<img src='/public/images/default.jpg' alt='이미지 없음'  >";
				}

                if($jb_code == "10"){$jb_name = "병원소식" ;}
                elseif($jb_code == "80"){$jb_name = "포토뉴스" ;}
                elseif($jb_code == "140"){$jb_name = "CH NK" ;}
                elseif($jb_code == "90"){$jb_name = "언론보도" ;}
                elseif($jb_code == "50"){$jb_name = "건강정보" ;}
                elseif($jb_code == "40"){$jb_name = "전문의 상담" ;}
                elseif($jb_code == "20"){$jb_name = "칭찬합니다" ;}
                elseif($jb_code == "240"){$jb_name = "질환정보" ;}
			
	
				
				$str .= "			
						<li>
							<a href='/notice/notice.php?jb_code=$jb_code&jb_idx=$jb_idx&jb_mode=tdetail' class='dec'>
								<div class='img'>
								" . $img_src . "
								</div>
								<div class='dec-foot'>
									<span class='label'>". $jb_name . "</span>
								</div>
								<span class='txt'>
									<b>
									" . $jb_title . "
									</b>
								</span>
							</a>
						</li>	
			";
			}
		}else{
			$str = "
					<li><a href='#;'>등록된 데이터가 없습니다.</a></li>
				";
		}
		return $str;
    }
    
    function Main_Search($s_search){
		global $GP, $C_JHBoard, $C_Func;

		$args = '';	
		$args['s_search'] = $s_search;		
		$rst = $C_JHBoard->Board_List_Search($args);

		$str = "";
		if(count($rst) > 0) {
			for($i=0; $i<count($rst); $i++) {
				$jb_idx					= $rst[$i]['jb_idx'];
				$jb_file_name		= $rst[$i]['jb_file_name'];
				$jb_file_code		= $rst[$i]['jb_file_code'];
				$jb_code				= $rst[$i]['jb_code'];
                $jb_treat				= $rst[$i]['jb_treat'];
                $jb_see				= $rst[$i]['jb_see'];
				$jb_title 			= $C_Func->strcut_utf8($rst[$i]['jb_title'], 30, true, "...");
				$jb_reg_date 		= date("Y.m.d", strtotime($rst[$i]['jb_reg_date']));
				$jb_mb_id			= $C_Func->blindInfo($rst[$i]['jb_mb_id'],3);
	
				$jb_content			= $C_Func->dec_contents_edit($rst[$i]['jb_content']);
				$content 				= strip_tags($jb_content);
				$jb_content 		= $C_Func->strcut_utf8($content, 100, false, "...");				
				
	
				//타이틀이미지
				$new_image = " <img src=\"" . $GP -> IMG_PATH . "/skin/basic/image/ticon_new.gif\" border='0' align='middle'>";
				$new_icon = $C_Func->new_icon(1, $rst[$i]['jb_reg_date'], $new_image);
	
				$jb_title = $jb_title . $new_icon;

				$img_src = '';				
				if($jb_file_code != '') {
					$code_file = $GP->UP_IMG_SMARTEDITOR_URL. "/jb_${jb_code}/${jb_file_code}";
					$img_src = "<img src='" . $code_file. "' >";
				}else{
					$img_src = "<img src='/public/images/default.jpg' alt='이미지 없음'  >";
				}

				if($jb_code == "10"){
					$jb_name = "병원소식" ;
				}
				elseif($jb_code == "140"){
					$jb_name = "CH NK" ;
				}
				elseif($jb_code == "50"){
					$jb_name = "건강정보" ;
				}
			
			
				$str .= "			
                        <li>
                        <a href='/notice/notice.php?jb_code=$jb_code&jb_idx=$jb_idx&jb_mode=tdetail'
                            class='dec'>
                            <div class='img'>
                            $img_src
                            </div>
                            <span class='txt'>
                                <b>
                                $jb_title
                                </b>
                            </span>
                            <div class='dec-foot'>
                                <span class='label'>$jb_name</span>
                                <span> $jb_reg_date </span>
                                <span class='view'>$jb_see </span>
                            </div>
                        </a>
                    </li>

			";
			}
		}else{
			$str = "
					<li><a href='#;'>등록된 데이터가 없습니다.</a></li>
				";
		}
		return $str;
	}	
   
	
?>