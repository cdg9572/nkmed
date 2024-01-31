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
    $dr_gita  = nl2br($C_Func->dec_contents_edit($dr_gita));
	
    $dr_treat  = nl2br($C_Func->dec_contents_edit($dr_treat));	    
    $dr_treat  = str_replace(", ", "/", $dr_treat);
    
    //dr_history가 비어있지 않으면
    if($dr_history != ""){        
        $dr_history  = nl2br($C_Func->dec_contents_edit($dr_history));
        $dr_history  = "<li>" . str_replace("\n", "</li><li>", $dr_history) . "</li>";
    }
    //dr_academy가 비어있지 않으면
    if($dr_academy != ""){        
        $dr_academy  = nl2br($C_Func->dec_contents_edit($dr_academy));
        $dr_academy  = "<li>" . str_replace("\n", "</li><li>", $dr_academy) . "</li>";
    }  


//echo "=========".$dr_academy;
	if($dr_mobile_img !=  '') {
		$dr_img = "<img class='doc_img' src='" . $GP -> UP_DOCTOR_URL . $dr_new_img . "' alt='' />";
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
<style>
	header {display:none;}
</style>
<script>
	setTimeout(function(){$(".box-doc").addClass("load");}, 100);
</script>

<body>
	<div id="wrap">
    <?php include_once "../inc/header.php" ?>
		<div id="container">
			<div class="box-doc">
				<div class="_left">
					<div class="_top">
						<img src="/resource-pc/images/doctor-detail-logo.png">
						
						<div class="go_back">
							<img src="/resource-pc/images/doctor-detail-go-back.png">
							<a href="javascript:history.back();">돌아가기</a>
						</div>
					</div>

					<div class="_bottom">
						<div class="info">
							<span class="doc-center"><?=$treat?></span>
							<span class="doc-name"><?=$dr_name?> 
								<b><?=$dr_ps?></b>
							</span> 
							<span class="doc-clinic">전문진료분야</span>
							<span class="doc-clinic-detail"><?=$dr_treat?></span>
						</div>
						<div class="tableType-02">
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
						<div class="doc-info-txt">
							<span>※토요일 진료는 해당 과에 문의 바랍니다.</span>
							<span>※스케쥴 변동이 가능하오니 유선 확인 후 내원 부탁드립니다.</span>
						</div>

						<div class="clinic-reserve">
							<a href="https://nkhospital.net/service/page02-2.html?dr_name=<?=$dr_name?>#link_target">진료예약</a>
						</div>
					</div>
				</div>
                <?=$dr_img?>
				<!-- <img class="doc_img" src="/resource-pc/images/doctor-sample.png"> -->
			</div>
			<!-- //end #sub-bnnr -->
			<div id="innerCont">  
				<div class="doc-history-02">
                    <?if($dr_history != ""){?>
					<p>경력 및 학력</p>
					<ul class="ul-marker-circle">
                       <?=$dr_history?>
					</ul>
                    <?}?>
                    <?
                    if($dr_academy != ""){?>
					<p>학회활동</p>
					<ul class="ul-marker-circle">
                       <?=$dr_academy?>
					</ul>
                    <?}?>
				</div>


                <div class="iframe-thumb">
                    <img class="thumb" src="<?=$th_img?>" alt="">
                    <iframe class="active" width="800" src="https://www.youtube.com/embed/<?=$you_id?>?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
				</div>
				<h3 class="cont-tit"><?=$dr_greeting_title?></h3>               
				<p>
                     <?=$dr_greeting?>
				</p>                
				
				<div class="relationVod" id="vod_result" style="margin-top: 80px;">
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