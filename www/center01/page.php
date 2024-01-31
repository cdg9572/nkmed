<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
include_once "../inc/head.php";
include_once $GP -> INC_WWW . '/count_inc.php';

$title = "진료과/의료진";
$page_title = "전문센터";
$page_sub_title = "관절센터";

include_once($GP-> CLS."/class.list.php");
include_once($GP-> CLS."/class.doctor.php");
include_once($GP->CLS."class.video.php");
include_once($GP->CLS."class.jhboard.php");

$C_ListClass 	= new ListClass;
$C_Doctor 		= new Doctor;
$C_Video 	= new Video;
$C_JHBoard = new JHBoard();

$gubun = ($_GET["gubun"]) ? $_GET["gubun"] : "A";
$depart = ($_GET["depart"]) ? $_GET["depart"] : $_GET["depart"];

// if($chkMobile) $C_Func -> go_url ("/v3/center.php?depart=$depart&gubun=$gubun");

$args = array();
if($gubun == "C") {
	$args["sp_type"] = $depart;
	$args["vd_clinic3"] = $depart;
	$josa = ($depart == "F") ? "는" : "은";
	$ctxt = $GP->NEW_MOBILE_SPECIAL[$depart];
}else {
	$josa = "는";
	$args["ct_type"] = $depart;
	if($gubun == "A") {
		$args["vd_clinic1"] = $depart;
		$ctxt = $GP->NEW_MOBILE_CENTER[$depart];
	}else{
		$args["vd_clinic2"] = $depart;
		$ctxt = $GP->NEW_MOBILE_CLINIC[$depart];
	}
}
$data = $C_Doctor->Doctor_List(array_merge($_GET,$_POST,$args));
$data_list 		= $data['data'];
$page_link 		= $data['page_info']['link'];
$page_search 	= $data['page_info']['search'];
$totalcount 	= $data['page_info']['total'];

$totalpages 	= $data['page_info']['totalpages'];
$nowPage 		= $data['page_info']['page'];
$totalcount_l 	= number_format($totalcount,0);

$data_list_cnt 	= count($data_list);

$args["vd_cnt"] = "Y";
$vdata = $C_Video->Video_List(array_merge($_GET,$_POST,$args));
$vdata_list 		= $vdata['data'];
$vdata_list_cnt 	= count($vdata_list);

$args["vd_cnt"] = "";
$args["vd_gubun"] = "I";
$vidata = $C_Video->Video_List(array_merge($_GET,$_POST,$args));
$vidata_list 		= $vidata['data'];
$vidata_list_cnt 	= count($vidata_list);


$th_img = ($vidata["data"]["0"]["vd_thumb"]) ? $GP -> UP_VIDEO_URL.$vidata["data"]["0"]["vd_thumb"] : "/resource/images/sample2.jpg";
$vidata["data"]["0"]["vd_uid"] = explode("watch?v=",$vidata["data"]["0"]["vd_link1"]);
$vidata["data"]["0"]["vd_uid"] = explode("&",$vidata["data"]["0"]["vd_uid"][1]);
$vidata["data"]["0"]["vd_uid"] = $vidata["data"]["0"]["vd_uid"][0];


//$vd_link2 = str_replace("watch?v=", "embed/", $vidata_list[0]['vd_link1']);



$dep1 = "1";
if($gubun == "A"){
    $dep2 = "1-0";
    if($depart=="A"){ $dep3 = "1-0-0";$jb_arrtreat = "'A','AB'";}
    elseif($depart=="C"){ $dep3 = "1-0-1";}
    elseif($depart=="F"){ $dep3 = "1-0-2";$jb_arrtreat = "'F','AE'";}
    elseif($depart=="S"){ $dep3 = "1-0-3";$jb_arrtreat = "'S','AF'";}
    elseif($depart=="H"){ $dep3 = "1-0-4";$jb_arrtreat = "'H','AH'";}
    elseif($depart=="J"){ $dep3 = "1-0-5";}
    elseif($depart=="B"){ $dep3 = "1-0-6";}
    elseif($depart=="D"){ $dep3 = "1-0-7";$jb_arrtreat = "'D','AC','M'";}
    elseif($depart=="E"){ $dep3 = "1-0-8";$jb_arrtreat = "'E','AD'";}
    elseif($depart=="G"){ $dep3 = "1-0-9";$jb_arrtreat = "'G','AG'";}
    elseif($depart=="I"){ $dep3 = "1-0-10";$jb_arrtreat = "'I','AI'";}
    elseif($depart=="AJ"){ $dep3 = "1-0-11";$jb_arrtreat = "'AJ','W'";}
}
elseif($gubun == "B"){
    $dep2 = "1-1";
    if($depart=="AB"){ $dep3 = "1-1-0";}
	elseif($depart=="K"){ $dep3 = "1-1-1";}
	elseif($depart=="AE"){ $dep3 = "1-1-2";}
	elseif($depart=="T"){ $dep3 = "1-1-3";}
	elseif($depart=="M"){ $dep3 = "1-1-4";}
	elseif($depart=="N"){ $dep3 = "1-1-5";}
	elseif($depart=="W"){ $dep3 = "1-1-6";}
	elseif($depart=="AH"){ $dep3 = "1-1-7";}
	elseif($depart=="AA"){ $dep3 = "1-1-8";}
	elseif($depart=="AC"){ $dep3 = "1-1-9";}
	elseif($depart=="AD"){ $dep3 = "1-1-10";}
	elseif($depart=="AF"){ $dep3 = "1-1-11";}
	elseif($depart=="R"){ $dep3 = "1-1-12";}
	elseif($depart=="AG"){ $dep3 = "1-1-13";}
	elseif($depart=="V"){ $dep3 = "1-1-14";}
	elseif($depart=="O"){ $dep3 = "1-1-15";}
	elseif($depart=="P"){ $dep3 = "1-1-16";}
	elseif($depart=="Q"){ $dep3 = "1-1-17";}
    elseif($depart=="AI"){ $dep3 = "1-1-18";}
	elseif($depart=="AK"){ $dep3 = "1-1-19";}
    elseif($depart=="Z"){ $dep3 = "1-1-20";}
    elseif($depart=="X"){ $dep3 = "1-1-21";}
}
elseif($gubun == "C"){
    $dep2 = "1-2";
    if($depart=="A"){ $dep3 = "1-2-0";}
	elseif($depart=="C"){ $dep3 = "1-2-1";}
	elseif($depart=="G"){ $dep3 = "1-2-2";}
	elseif($depart=="I"){ $dep3 = "1-2-3";}
	elseif($depart=="J"){ $dep3 = "1-2-4";}
	elseif($depart=="H"){ $dep3 = "1-2-5";}
	elseif($depart=="E"){ $dep3 = "1-2-6";}
}
if($depart =='H'  || $depart =='I' || $depart =='M'  ||$depart == 'AH' || $depart =='R' || $depart =='Q' || $depart =='AI'  || $depart =='J'){ //질환정보 탭 노출
    $active1 = "class='active'" ;
    echo "<script>$(document).ready(function(){ $('.no1').show();$('.no2').hide();});</script>";  }
else{ //질환영상 탭 노출
    $active2 = "class='active'" ;
    echo "<script>$(document).ready(function(){ $('.no1').hide();$('.no2').show();});</script>";
}


?>
<body>
	<div id="wrap">
		<?php include_once "../inc/header.php" ?>
		<div id="container">
			<?php include_once "../inc/location.php" ?>
			<div id="sub-bnnr">
				<img src="/resource-pc/images/subBnnr03.png" alt="">
				<h2>
					<span><img src="/resource-pc/images/sub-bnnr-text.png" alt="믿으니까 뉴고려"></span>
					<small><?=$ctxt?></small>
				</h2>
			</div>
			<!-- //end #sub-bnnr -->
			<div id="innerCont">
				<div class="l-pad-box gray">
					<!--
						iframe-thumb 클래스에 on 클래스를 추가하면 이미지가 사라집니다.
						그러고난 후에  동영상 자동재생되게 개발해주시면 될것 같습니다!
					 -->
                     <?
                    // echo "echo:" . $vd_link2 . "<br>" ;
                     ?>
					<div class="iframe-thumb">
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/E11p66uJVMY?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> -->
						<!-- 아래 img경로에 모바일에 등록되있는 각 진료과, 진료센터 네일 넣으시면 됩니다! -->
						<img class="thumb" src="<?=$th_img?>" alt="">
						<iframe class="active" width="800" src="https://www.youtube.com/embed/<?=$vidata["data"]["0"]["vd_uid"]?>?autoplay=1&mute=1&rel=0"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"	allowfullscreen=""></iframe>						
					</div>
				</div>
				<br>
				<h3 class="cont-tit bar">뉴고려병원 <span><?=$ctxt?></span><?=$josa?></h3>
				<p>
					<?=$vidata_list[0]['vd_intro_content']?>
				</p>
				<?

                if($gubun != "C"){
                $previous_dr_clinic  = "";
               
				$dummy = 1;
				for ($i = 0 ; $i < $data_list_cnt ; $i++) {
					$dr_idx      = $data_list[$i]['dr_idx'];
					$dt_code     = $data_list[$i]['dt_code'];
					$dr_name     = $data_list[$i]['dr_name'];
					$dr_gita     = $data_list[$i]['dr_gita'];
					$dr_clinic   = $data_list[$i]['dr_clinic'];
					$dr_center   = $data_list[$i]['dr_center'];
					$dr_special  = $data_list[$i]['dr_special'];
					$dr_choice   = $data_list[$i]['dr_choice'];
					$dr_face_img = $data_list[$i]['dr_face_img'];
					$dr_treat    = $data_list[$i]['dr_treat'];
					$dr_history6 = $data_list[$i]['dr_history6'];
					$dr_history  = $data_list[$i]['dr_history'];
					$dr_history1 = $data_list[$i]['dr_history1'];
					$dr_history3 = $data_list[$i]['dr_history3'];
					$dr_thesis   = $data_list[$i]['dr_thesis'];
					$dr_position = $data_list[$i]['dr_position'];
					$cn_arr      = explode(",", $dr_position);
					$moning_arr  = explode(',', $data_list[$i]['dr_m_sd']);
					$after_arr   = explode(',', $data_list[$i]['dr_a_sd']);
					$dr_img = '';
					if($dr_face_img !=  '') {
						$dr_img = "<img src='" . $GP -> UP_DOCTOR_URL . $dr_face_img . "' class='block' alt='" .  $dr_name ."' />";
					}else{
						$dr_img = "<img src='/public/images/img-doctor-sample.jpg' alt='' class='block'/>";
					}
                    
					//$treat = ($GP->NEW_MOBILE_CENTER_ALL[$dr_clinic2]) ? $GP->NEW_MOBILE_CENTER_ALL[$dr_clinic2] : $GP->NEW_MOBILE_SPECIAL[$dr_clinic3];
                    $dr_treat  = str_replace(",", "</li><li>", $dr_treat);
                    $drclinic2Arry = explode(',',$data_list[$i]["dr_clinic2"]); 
                    $val["dr_clinic2"] = $drclinic2Arry["0"];
                    
                    $treat = "";
					$treat_text = "";
					if($depart == "AC")
						if($val["dr_clinic2"] != $previous_dr_clinic ){
							$treat = ($GP->NEW_MOBILE_CENTER_ALL[$val["dr_clinic2"]]) ? $GP->NEW_MOBILE_CENTER_ALL[$val["dr_clinic2"]] : $GP->NEW_MOBILE_CENTER_ALL[$val["dr_clinic3"]];
							$treat_text = "<h3 class='treat'>$ctxt<span>($treat)</span></h3>";
						}

					$previous_dr_clinic = $val["dr_clinic2"];                  
                   
				?>
                <?=$treat_text?>
				<div class="doctor">
					<div class="doctor-img">
						<?=$dr_img?>
					</div>
					<div class="doctor-info">
						<p class="name">
							<!--small>응급진료센터</small-->
							<span>
								<b><?=$dr_name?></b> <?=$GP -> DOCTOR_POSITION[$dr_position]?>
							</span>
						</p>
						<div class="clinic">
							<span>전문분야</span>
							<ul>
								<!--li>응급의학 ㅣ 중환자의학 ㅣ 소생의학 ㅣ 임상독성학 ㅣ 중독학 </li-->
								<li><?=$dr_treat?></li>
							</ul>
						</div>
						<div class="tableType-01 green">
							<table>
								<thead>
									<tr>
										<th class="bgc-gray">시간</th>
										<th class="bgc-gray">월</th>
										<th class="bgc-gray">화</th>
										<th class="bgc-gray">수</th>
										<th class="bgc-gray">목</th>
										<th class="bgc-gray">금</th>
										<th class="bgc-gray">토</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr>
										<th class="bgc-gray">오전</th>
										<td><?if(in_array("월", $moning_arr)){echo "진료";}?><?if($dr_idx == "138" or $dr_idx == "62" or $dr_idx == "95" or $dr_idx == "150" or $dr_idx == "155"){echo "수술";}?></td>
                                        <td><?if(in_array("화", $moning_arr)){echo "진료";}?><?if($dr_idx == "55" or $dr_idx == "62" or $dr_idx == "95" or $dr_idx == "150" or $dr_idx == "155"){echo "수술";}?></td>
                                        <td><?if(in_array("수", $moning_arr)){echo "진료";}?><?if($dr_idx == "138" or $dr_idx == "62" or $dr_idx == "95" or $dr_idx == "150" or $dr_idx == "155"){echo "수술";}?></td>
                                        <td><?if(in_array("목", $moning_arr)){echo "진료";}?><?if($dr_idx == "55" or $dr_idx == "62" or $dr_idx == "95" or $dr_idx == "150" or $dr_idx == "155"){echo "수술";}?></td>
                                        <td><?if(in_array("금", $moning_arr)){echo "진료";}?><?if($dr_idx == "138" or $dr_idx == "62" or $dr_idx == "95" or $dr_idx == "150" or $dr_idx == "155"){echo "수술";}?></td>
                                        <td><?if(in_array("토", $moning_arr)){echo "진료";}?></td>
									</tr>
									<tr>
										<th class="bgc-gray">오후</th>
                                        <td><?if(in_array("월", $after_arr)){echo "진료";}?><?if($dr_idx == "138" or $dr_idx == "62" or $dr_idx == "95" or $dr_idx == "150" or $dr_idx == "155"){echo "수술";}?></td>
                                        <td><?if(in_array("화", $after_arr)){echo "진료";}?><?if($dr_idx == "55" or $dr_idx == "62" or $dr_idx == "95" or $dr_idx == "150" or $dr_idx == "155"){echo "수술";}?></td>
                                        <td><?if(in_array("수", $after_arr)){echo "진료";}?><?if($dr_idx == "138" or $dr_idx == "62" or $dr_idx == "95" or $dr_idx == "150" or $dr_idx == "155"){echo "수술";}?></td>
                                        <td><?if(in_array("목", $after_arr)){echo "진료";}?><?if($dr_idx == "55" or $dr_idx == "62" or $dr_idx == "95" or $dr_idx == "150" or $dr_idx == "155"){echo "수술";}?></td>
                                        <td><?if(in_array("금", $after_arr)){echo "진료";}?><?if($dr_idx == "138" or $dr_idx == "62" or $dr_idx == "95" or $dr_idx == "150" or $dr_idx == "155"){echo "수술";}?></td>
                                        <td><?if(in_array("토", $after_arr)){echo "진료";}?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<p>
							<!-- <?if($dr_idx == 142){?>
							※3월 2일(화)부터 진료 시작합니다.<br>
							<?}?> -->
							<!-- ※토요일 진료는 해당 과에 문의 바랍니다. -->
							<?=$dr_gita?>
						</p>
						<div id="btn-box">
							<a href="/doctor/doc-view.php?idx=<?=$dr_idx?>&gubun=<?=$gubun?>"  class="btn bg-green">상세보기</a>
							<!-- <a href="#" onclick="window.open('http://nkhospital.net/m/main.html', 'pop', 'menubar=no,status=no,scrollbars=no,resizable=no ,width=500,height=700');" class="btn border-green" >진료예약</a> -->
						</div>
					</div>
				</div>
				<? }   }?>
				<!-- //end .doctor -->

				<div class="tabMenu-2">
					<ul>
						<?if($depart=='J'){?>
							<li class="active"><a href="#none">이용안내</a></li>
                            <li ><a href="#none">질환영상</a></li>
						<?}else{?>
							<li <?=$active1?>><a href="#none">질환정보</a></li>
                            <li <?=$active2?>><a href="#none">질환영상</a></li>
						<?}?>
					</ul>
				</div>
				 <!-- 질환정보 탭 -->
				<div class="relationList no1" id="board_result">
					<ul>
					<?php
						$bargs = "";
                        $bargs['jb_code'] = "240";
                        ($jb_arrtreat)?  $bargs['jb_arrtreat'] = $jb_arrtreat : $bargs['jb_treat'] = $depart;   
						$bargs['jb_type'] = $gubun;
						$bargs["order"] = "A.jb_order ASC, A.jb_reg_date DESC";
						$bdata = "";
						$bdata = $C_JHBoard -> Board_List($bargs);
						$bdata_list 		= $bdata['data'];
						$bdata_list_cnt 	= count($bdata_list);
						$psize = 3;

					$p=0;
					$mbtn = ($psize >= count($bdata)) ? " style='display:none;'" : "";
					for($i=0;$i<$bdata_list_cnt;$i++) {
						$fread 		= "Y";
						$jb_idx 	= $bdata_list[$i]["jb_idx"];
						$jb_mb_id  	= $bdata_list[$i]["jb_mb_id"];
						$jb_code 	= $bdata_list[$i]["jb_code"];
						$title 		= $bdata_list[$i]["jb_title"];
						$title 		= preg_replace('~<\s*\bscript\b[^>]*>(.*?)<\s*\/\s*script\s*>~is', '', $title);
						$secret		= $bdata_list[$i]["jb_secret_check"];
						$regDt 		= date("Y.m.d", strtotime($bdata_list[$i]['jb_reg_date']));
						$content			= $C_Func->dec_contents_edit($bdata_list[$i]['jb_content']);
						$content			= trim(strip_tags($content));
						$content 			= $C_Func->strcut_utf8($content, 200, true, "...");
						$jb_comment_count 		= $C_Func->num_f($bdata_list[$i]['jb_comment_count']);
						$treat_type = "기타";
						if($bdata_list[$i]['jb_treat'] != '' ) {
							$treat_type = $GP -> CLINIC_TYPE_NEW[$bdata_list[$i]['jb_treat']];
						}
						$sec = ($secret =="Y") ? '<span class="lock">비밀글</span>' : "";
						if(strlen($bdata_list[$i]["jb_name"]) > 6) {
							$jb_name 				=  $C_Func->blindInfo($bdata_list[$i]["jb_name"], 6);
						}else{
							$jb_name 				=  $C_Func->blindInfo($bdata_list[$i]["jb_name"], 3);
						}

						//echo "aa" . $jb_idx;

						//파일명 분리 및 저장된 파일 갯수
						if($bdata_list[$i]["jb_file_name"]!="") {
							$ex_jb_file_name = explode("|", $bdata_list[$i]["jb_file_name"]);
							$ex_jb_file_code = explode("|", $bdata_list[$i]["jb_file_code"]);
							$file_cnt = count($ex_jb_file_name);
						} else {
							$file_cnt = 0;
						}
						$img_src = "";
						if($file_cnt > 0)
						{
							$file_ext = substr( strrchr($ex_jb_file_code[0], "."),1);
							$file_ext = strtolower($file_ext);	//확장자를 소문자로...

							if ($file_ext=="gif" || $file_ext=="jpg" || $file_ext=="png"){
								$code_file = $GP->UP_IMG_SMARTEDITOR_URL. "jb_${jb_code}/${ex_jb_file_code[0]}";
								$img_src = "<img src='" . $code_file. "' alt='" . $title. "'>";
							}else{
								$img_src = "<img src='/resource/images/contents/thumb_sample.jpg'>";
							}
						}else{
							$img_src = "<img src='/resource/images/contents/thumb_sample.jpg'>";
						}
						if($i%$psize == 0) $p++;
						if($p > 1) $style = 'style=display:none';

						if($secret == "Y" && $_SESSION['suserlevel'] < 9) {
							if($jb_mb_id != "") {
								if($_SESSION['suserid'] != $jb_mb_id) {
									$fread = "N";
								}
							}
						}else{
							$secret = "N";
						}
						$args["jb_code"] = $jb_code;
						$bname = $C_JHBoard -> Board_Config_data($args);

						$answer = ($jb_comment_count > 0) ? '<span class="state com">완료</span>' : '<span class="state">대기</span>';

						$get_par = "/notice/notice.php?jb_code=${jb_code}&jb_idx=${jb_idx}&jb_mode=tdetail";
						$get_par.="&search_key=" . $_GET['search_key'] . "&search_keyword=${search_keyword}&page=${page}&dep1=${dep1}&dep2=${dep2}";



					?>
				<li>
					<a href="<?=$get_par?>">
						<div class="thumb" style="border-color:#e4e4e4;">
							<?=$img_src?>
						</div>
						<div class="cont">
							<b class="tit"><?=$title?></b>
							<span class="txt">
								<?=$content?>
							</span>
							<span class="link">더보기</span>
						</div>
					</a>
				</li>
				<? }  ?>

					</ul>
				</div>

				<div class="relationVod no2" id="vod_result">
					<ul>
						<?php
						for($i=0;$i<$vdata_list_cnt;$i++) {
							$vd_idx 	= $vdata_list[$i]["vd_idx"];
							$vd_dr_idx 	= $vdata_list[$i]["vd_dr_idx"];
							$vd_title 		= $vdata_list[$i]["vd_title"];
							$vd_dr_name 		= $vdata_list[$i]["vd_dr_name"];
							$vd_link1		= $vdata_list[$i]['vd_link1'];
							$vd_link2		= $vdata_list[$i]['vd_link2'];
							$vd_title 		= preg_replace('~<\s*\bscript\b[^>]*>(.*?)<\s*\/\s*script\s*>~is', '', $vd_title);
							$regDt 		= date("Y.m.d", strtotime($vdata_list[$i]['jb_reg_date']));
							$vd_content			= $C_Func->dec_contents_edit($vdata_list[$i]['vd_content']);
							$vd_content			= trim(strip_tags($vd_content));
							$vd_content 			= $C_Func->strcut_utf8($vd_content, 200, true, "...");
							$treat_type = "기타";

							if($vdata_list[$i]['jb_treat'] != '' ) {
								$treat_type = $GP -> CLINIC_TYPE_NEW[$vdata_list[$i]['jb_treat']];
							}
							$sec = ($secret =="Y") ? '<span class="lock">비밀글</span>' : "";
							if(strlen($vdata_list[$i]["jb_name"]) > 6) {
								$jb_name 				=  $C_Func->blindInfo($vdata_list[$i]["jb_name"], 6);
							}else{
								$jb_name 				=  $C_Func->blindInfo($vdata_list[$i]["jb_name"], 3);
							}

							$dr_data    = $C_Video->Video_Doctor_info($vd_dr_idx);
							$dr_face_img = $dr_data["dr_face_s_img"];

							if($vd_link1) {
								$you_id = explode("watch?v=",$vd_link1);
								$you_id = explode("&",$you_id[1]);
								$you_id = $you_id[0];
								$you_link = '<iframe  title="YouTube video player" class="youtube-player" type="text/html"  width="100%" height="206" src="https://www.youtube.com/embed/'.$you_id.'?fs=1" frameborder="0" allowfullscreen></iframe>';
								$vgubun = "u";
							}else if($vd_link2) {
								$vimeo_id = explode("vimeo.com/",$vd_link2);
							}else{
								$you_link = '<img src="/resource-pc/images/sample2.jpg" alt="" style="width:100%;">';
							}

							if($vimeo_id){
								$you_link ='<iframe src="https://player.vimeo.com/video/'.$vimeo_id[1].'" style="z-index:1;" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
								$vgubun = "v";
							}

							if($i%$psize == 0) $p++;
							$style = ($p > 1) ? 'style=display:none' : "";

							if($you_link) {
								$vd_thumb = ($v["vd_thumb"]) ? $v["vd_thumb"] : "nk_thumbnail.jpg";
								$thumb_src = '<img src="'.$GP -> UP_VIDEO_URL . $vd_thumb.'" alt="" style="width:100%; min-height:206px; z-index:99; position:absolute; ">';
						?>
						<li>
							<a href="#none">
								<div class="vod" style="padding-top:0;">
									<div id="play<?=$vd_idx?>" style="height:206px;">
										<?=$you_link?>
									</div>
									<?=$thumb_src?>
								</div>
								<div class="cont">
									<b class="tit"><?=$vd_title?></b>
									<span class="txt">
										<?=$vd_content?>
									</span>
								</div>
							</a>
						</li>
						<? }  }?>
					</ul>
				</div>
			</div>
			<!-- //end #innerCont -->
		</div>
		<!-- //end #container -->

		<?php include_once "../inc/fnb.php" ?>
		<?php include_once "../inc/footer.php" ?>
	</div>
	<!-- //end #wrap -->
</body>

</html>