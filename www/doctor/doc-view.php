<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
include_once "../inc/head.php";
include_once $GP -> INC_WWW . '/count_inc.php';

$title = "진료과/의료진";
$page_title = "의료진소개";
$page_sub_title = "의료진소개";

include_once($GP->CLS."/class.list.php");
include_once($GP->CLS."class.doctor.php");
include_once($GP->CLS."class.video.php");
$C_ListClass 	= new ListClass;
$C_Doctor 		= new Doctor;
$C_Video 	= new Video;

$gubun = ($_GET["gubun"]) ? $_GET["gubun"] : "A";
$dr_idx = ($_GET["idx"]) ? $_GET["idx"] : $_GET["idx"];
$args = array();
$args["vd_dr_idx"] = $dr_idx;
$args["dr_idx"] = $dr_idx;
$args['show_row'] = 100;	
$args['pagetype'] = "admin";
//$args['dr_idx'] = $dr_idx;	

$dbdata = $C_Doctor->BookList(array_merge($_GET,$_POST,$args));
$dbdata_list 		= $dbdata['data'];	
$dbdata_list_cnt 	= count($dbdata_list);

$data = $C_Doctor->Doctor_Info(array_merge($_GET,$_POST,$args));
$vdata = $C_Video->Video_List(array_merge($_GET,$_POST,$args));

$vdata_list 		= $vdata['data'];
$vdata_list_cnt 	= count($vdata_list);

$data["dr_clinic2"] = explode(',',$data["dr_clinic2"]);
$data["dr_clinic2"] = $data["dr_clinic2"][0];

if($data["dr_clinic2"]){
	$args["ct_type"] = $data["dr_clinic2"];
}else if($data["dr_clinic3"]){
	$args["sp_type"] = $data["dr_clinic3"];
}
$rtn = $C_Doctor->Doctor_Detail_List($args);
foreach($rtn  as $key=>$val){
	$val["dr_clinic2"] = explode(',',$val["dr_clinic2"]);
    $val["dr_clinic2"] = $val["dr_clinic2"][0];


	$treat = ($GP->NEW_MOBILE_CENTER_ALL[$val["dr_clinic2"]]) ? $GP->NEW_MOBILE_CENTER_ALL[$val["dr_clinic2"]] : $GP->NEW_MOBILE_CENTER_ALL[$val["dr_clinic3"]];
	$result[$val["dr_idx"]] = array('name'=> $val["dr_name"].'('.$treat.')','code'=>$val["dr_idx"],'sname'=>$val["dr_name"]);
}

$stxt = $result[$idx]["sname"];


if($data) {
	extract($data);
	$dr_ps = $GP -> DOCTOR_POSITION[$dr_position];
	$dr_treat  = nl2br($C_Func->dec_contents_edit($dr_treat));
	$dr_history  = nl2br($C_Func->dec_contents_edit($dr_history));
    $dr_academy  = nl2br($C_Func->dec_contents_edit($dr_academy));
    $dr_gita  = nl2br($C_Func->dec_contents_edit($dr_gita));

//echo "=========".$dr_academy;
	if($dr_mobile_img !=  '') {
		$dr_img = "<img src='" . $GP -> UP_DOCTOR_URL . $dr_mobile_img . "' alt='' />";
	}
	if($dr_bg_img !=  '') {
		$dr_bg_img = $GP -> UP_DOCTOR_URL . $dr_bg_img;
	}else{
		$dr_bg_img = "/resource-pc/images/contents/bg_doc1.jpg";
	}
	 $th_img = ($dr_thumb_img) ? $GP -> UP_DOCTOR_URL.$dr_thumb_img : "/resource-pc/images/sample2.jpg";
    // $th_img = '<img src="'.$th_img.'" alt="" style="width:100%; position:absolute; ">';
   // print_r($data) ;       
  
	$treat = ($GP->NEW_MOBILE_CENTER_ALL[$dr_clinic2]) ? $GP->NEW_MOBILE_CENTER_ALL[$dr_clinic2] : $GP->NEW_MOBILE_SPECIAL[$dr_clinic3];

	$moning_arr = explode(',', $dr_m_sd);
	$after_arr = explode(',', $dr_a_sd);
	$moning_txt = "";
	$after_txt = "";

	if($dr_vd_link1) {
		$you_id = explode("watch?v=",$dr_vd_link1);
		$you_id = explode("&",$you_id[1]);
		$you_id = $you_id[0];
    }
    $dr_treat  = str_replace(",", "</li><li>", $dr_treat);

}

if($gubun == "A") {
    $arr = $GP -> NEW_MOBILE_CENTER;
    $activeA = "active";

}else if($gubun == "B") {
    $arr = $GP -> NEW_MOBILE_CLINIC;
    $activeB = "active";
}else if($gubun == "C") {
    $arr = $GP -> NEW_MOBILE_SPECIAL;
    $activeC = "active";
}
$dep1 = "1";
$dep2 = "1-3";
$dep3 = "1-3-0";

?>

<body>
	<div id="wrap">
		<?php include_once "../inc/header.php" ?>
		<div id="container">
			<?php include_once "../inc/location.php" ?>
			<div id="sub-bnnr">
				<img src="/resource-pc/images/subBnnr04.png" alt="">
				<h2>
					<span><img src="/resource-pc/images/sub-bnnr-text.png" alt="믿으니까 뉴고려"></span>
					<small><?=$page_sub_title?></small>
				</h2>
			</div>
			<!-- //end #sub-bnnr -->
			<div id="innerCont">                    
                <div class="iframe-thumb">
                    <img class="thumb" src="<?=$th_img?>" alt="">
                    <iframe class="active" width="800" src="https://www.youtube.com/embed/<?=$you_id?>?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
				</div>
				<h3 class="cont-tit"><?=$dr_greeting_title?></h3>               
				<p>
                     <?=$dr_greeting?>
				</p>                
				<div class="doctor">
					<div class="doctor-img">
                    <?=$dr_img?>
					</div>
					<div class="doctor-info">
						<p class="name">
							<small><?=$treat?></small>
							<span>
								<b><?=$dr_name?></b> <?=$dr_ps?>
							</span>
						</p>
						<div class="clinic">
							<span>전문분야</span>
							<ul>
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
                        <p><?=$dr_gita?></p>
						<p><?=$weekend_txt?></p>
						<div id="btn-box">
							<!--a href="#none" class="btn bg-green">상세보기</a-->
							<!-- <a href="#" onclick="window.open('http://nkhospital.net/m/main.html', 'pop', 'menubar=no,status=no,scrollbars=no,resizable=no ,width=500,height=700');" class="btn border-green">진료예약</a> -->
						</div>
					</div>
				</div>
				<!-- //end .doctor -->
				<div class="tabMenu-2">
					<ul>
						<li class="active"><a href="#none">경력 및 학력</a></li>
						<li><a href="#none">학회활동</a></li>
						<li><a href="#none">저서 및 논문</a></li>
					</ul>
				</div>
				<div class="no1">
					<div class="doc-history">
                        <?=$dr_history?>
					</div>
				</div>
				<div class="no2">
					<div class="doc-history">
                    <?=$dr_academy?>
					</div>
				</div>
				<div class="no3">
					<div class="doc-history">
                    <?
                       for($i=0; $i<$dbdata_list_cnt; $i++) {
                        $tb_idx 			= $dbdata_list[$i]['tb_idx'];
                        $tb_type 			= $dbdata_list[$i]['tb_type'];
                        $tb_title 		= $C_Func->dec_contents_edit($dbdata_list[$i]['tb_title']);				
					?>
                    <li>						                           
                       <?=$tb_title?>                 
      
					</li>						
                                                            
                        <?   }?>	
					</div>
				</div>

				<div class="relationVod" id="vod_result">
					<ul>
                    <?php                  
						$psize = 3;

					$p=0;
					$mbtn = ($psize >= count($bdata)) ? " style='display:none;'" : "";
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