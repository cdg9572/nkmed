
<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include_once  './_init.php';
include_once $GP -> INC_WWW . '/count_inc.php';
include_once $GP -> INC_WWW . '/head.php';


$title = "검색";
$page_title = "검색";
$page_sub_title = "검색";

$s_search = ($_GET["s_search"]) ? $_GET["s_search"] : $_POST["s_search"];

if($s_search){
	include_once($GP->CLS."class.jhboard.php");
    include_once($GP->CLS."class.search_pc.php");

    $C_JHBoard = new JHBoard();
    $C_Sch 		= new Search;

	//$js->load_script("/v3/controller/js/search.js");
	$args = array();
	$args["schtxt"] = $s_search;
	$psize = "3";
    list($dpscha,$dpschb,$dpschc,$vdsch,$docsch,$brdsch) = $C_Sch->Search_List($args);

	$p=0;$i=0;
    $vmbtn = ($psize >= count($vdsch)) ? " style='display:none;'" : "";

    ?>
<style>
	#search-list-01 > ul li .dec .img {
		width:200px;
	}
	#search-list-01 > ul li .dec .txt {
		width: calc(100% - 220px);
		padding-bottom:5px;
	}
	.doc-info-img {
		display:flex;
		align-items:center;
		justify-content: flex-end;
		margin-top:10px;
		padding-right:20px;
		box-sizing:border-box;
	}
	.doc-info-img .info-img {
		overflow:hidden;
		width:50px;
		height:50px;
		margin-right:10px;
		border:1px solid #ddd;
		border-radius:100%;
	}
	.doc-info-img .info-img img {
		width:100%;
	}
	.doc-info-img .info-txt {
		color:#333;
		line-height:16px;
	}
	.doc-info-img .info-txt > * {
		display:block;
		line-height:1;
	}
	@media screen and (max-width:720px) {
		#search-list-01 > ul li .dec .img {
			width:300px;
		}
		#search-list-01 > ul li .dec .txt {
			width: calc(100% - 300px);
			padding: 30px 15px;
			padding-bottom: 80px !important;
		}
	}
</style>
<body>
	<div id="wrap">
       <?php
		include_once  $GP -> INC_WWW . "/header.php";

			$Main_all = Main_Search("$s_search");//모아보기

		?>
		<div id="container">			
			<div id="sub-bnnr">
				<img src="/resource-pc/images/subBnnr06.png" alt="">
				<h2>
					<span><img src="/resource-pc/images/sub-bnnr-text.png" alt="믿으니까 뉴고려"></span>
					<small><?=$page_sub_title?></small>
				</h2>
			</div>
			<!-- //end #sub-bnnr -->

			<div id="innerCont">
				<div class="search">
					<input type="text" id="schtxt2" placeholder="검색어를 입력하세요." value="<?=$s_search?>" >
					<button id="schbtn2"><img src="/resource-pc/images/search-gray.png" alt="검색"></button>
				</div>
				<?if($docsch){?>
                <!-- 커뮤니티 시작 -->
				<h3 class="cont-tit">의료진</h3>
				<div id="sub-notice">
					<div id="search-list-03" class="doc">
						<ul>
                <?}?>
                <?
                    $p=0;$i=0;
                    $dmbtn = ($psize >= count($docsch)) ? " style='display:none;'" : "";
                    foreach($docsch as $k=>$v) {                   
                    $dr_ps 			= $GP -> DOCTOR_POSITION[$v["dr_position"]];
                    $dr_treat  = nl2br($C_Func->dec_contents_edit($v["dr_treat"]));
                    $dr_name = $v["dr_name"]." ".$dr_ps;
                   
                    $vd_link1		= "/doctor/doc-view.php?idx=" . $v["dr_idx"];
                    if($v["dr_mobile_img"] !=  '') {
                        $dr_img = "<img src='" . $GP -> UP_DOCTOR_URL . $v["dr_mobile_img"] . "' alt='' />";
                    }else{
                        $dr_img = "<img src='" . $GP -> UP_DOCTOR_URL . $v["dr_face_img"] . "' alt='' />";
                    }
                    $v_array = explode(',',$v["dr_clinic2"]);
                    $v["dr_clinic2"] = $v_array[0];                   
                    $treat = ($GP->NEW_MOBILE_CENTER_ALL[$v["dr_clinic2"]]) ? $GP->NEW_MOBILE_CENTER_ALL[$v["dr_clinic2"]] : $GP->NEW_MOBILE_SPECIAL[$v["dr_clinic3"]];
                    if($i%$psize == 0) $p++;
                    $style = ($p > 1) ? 'style=display:none' : "";
                ?>
                    <li>
                        <a href="<?=$vd_link1?>" class="dec">
                            <div class="img doc">
                                <?=$dr_img?>
                            </div>
                            <span class="txt">

                                <b>
									<h4 class="c-black">
										<small><?=$treat?></small><br>
										<?=$dr_name?>
									</h4>
									<p>
										<?=$dr_treat?>
									</p>
                                </b>
                            </span>
                        </a>
                    </li>

                <?$i++;}?>
                <?if($docsch){?>
                    </ul>
						<div class="pagination">
                           <?=$page_link?>
						</div>
					</div>
				<!-- //관련영상 끝 -->
                <?}?>
                <?if($dpscha){?>
                <h3 class="cont-tit">전문센터</h3>
				<div id="search-list-03" class="center-wrap">
					<ol class="list">
                <?}?>
                <?
                    foreach($dpscha as $k=>$v) {
                        $dp_name		= $v['dp_name'];
                        $dp_link		= $v['dp_link'];
                        $dp_img		= $v['dp_img'];
                        
                ?>
						<li data-group=""><a href="<?=$dp_link?>"><img src="<?=$dp_img?>" alt=""><?=$dp_name?></a></li>
                <?$i++;}?>
                <?if($dpscha){?>
					</ol>
				</div>
                <?}?>
                <?if($dpschb){?>
				<h3 class="cont-tit">진료과</h3>
				<div id="search-list-04" class="center-wrap">
					<ol class="list">
                    <?}?>
                <?
                    foreach($dpschb as $k=>$v) {
                        $dp_name		= $v['dp_name'];
                        $dp_link		= $v['dp_link'];
                        $dp_img		= $v['dp_img'];
                        
                ?>
						<li data-group=""><a href="<?=$dp_link?>"><img src="<?=$dp_img?>" alt=""><?=$dp_name?></a></li>
                <?$i++;}?>
                <?if($dpschb){?>
					</ol>
				</div>
                <?}?>
                <?if($dpschc){?>
				<h3 class="cont-tit">특수클리닉</h3>
				<div id="search-list-05" class="center-wrap">
				<?}?>
                <?
                    foreach($dpschc as $k=>$v) {
                        $dp_name		= $v['dp_name'];
                        $dp_link		= $v['dp_link'];
                        $dp_img		= $v['dp_img'];
                        
                ?>
						<li data-group=""><a href="<?=$dp_link?>"><img src="<?=$dp_img?>" alt=""><?=$dp_name?></a></li>
                <?$i++;}?>
                <?if($dpschc){?>
					</ol>
				</div>
                <?}?>
                <?if($vdsch){?>
                <!-- 관련영상 시작 -->
				<h3 class="cont-tit">관련영상</h3>
				<div id="sub-notice">
					<div id="search-list-01">
						<ul>
                 <?}?>
                <?
                    foreach($vdsch as $k=>$v) {
                        $vd_ps 			= $GP -> DOCTOR_POSITION[$v["dr_position"]];
                        $vd_link1		= $v['vd_link1'];
                        $you_id 		= explode("watch?v=",$vd_link1);
                        $you_id 		= explode("&",$you_id[1]);
                        $dr_face_img	=  '<img  src="'.$GP -> UP_DOCTOR_URL . $v["dr_face_img"].'" alt="">';
                        $drclinic2Arry = explode(',',$v["dr_clinic2"]);
                        $v["dr_clinic2"] = $drclinic2Arry["0"];
                        $treat = ($GP->NEW_MOBILE_CENTER_ALL[$v["dr_clinic2"]]) ? $GP->NEW_MOBILE_CENTER_ALL[$v["dr_clinic2"]] : $GP->NEW_MOBILE_CENTER_ALL[$v["dr_clinic3"]];
                        $you_link = '<iframe  title="YouTube video player" class="youtube-player" type="text/html"  width="100%" height="103" src="//www.youtube.com/embed/'.$you_id[1].'?fs=1" frameborder="0" allowfullscreen></iframe>';
                        //$you_link = '<a href="//www.youtube.com/embed/'.$you_id[1].'?fs=1" class="dec">';
                        $dr_name = $v["dr_name"]." ".$vd_ps;
                        if($i%$psize == 0) $p++;
                        $style = ($p > 1) ? 'style=display:none' : "";
                        $vd_thumb = ($v["vd_thumb"]) ? $v["vd_thumb"] : "nk_thumbnail.jpg";
                        $thumb_src = '<img src="'.$GP -> UP_VIDEO_URL . $vd_thumb.'" alt="" ">';
                ?>
                            <li>
								<a href="<?=$vd_link1?>" class="dec">
									<div class="img">
                                        <?=$thumb_src?>
									</div>
									<span class="txt">
										<b>
											<?=$v["vd_title"]?>
										</b>
										<div class="doc-info-img">
											<div class="info-img">
												<?=$dr_face_img?>
											</div>
											<div class="info-txt">
												<small class="cate"><?=$treat?></small>
												<span class="name"><?=$dr_name?></span>
											</div>
										</div>
									</span>
								</a>
							</li>
                <?$i++;}?>
                <?if($vdsch){?>
					</ul>
						<div class="pagination">
                           <?=$page_link?>
						</div>
					</div>
					<!-- //end #search-list-01 -->

					<script type="text/javascript">
						$(document).ready(function () {
							$('#search_submit').click(function () {
								$('#search_form').submit();
								return false;
							});

							$('#page_row').change(function () {
								var val = $(this).val();
								location.href = "?dep1=&dep2=&search_key=&search_keyword=&page=&page_row=" + val;
							});

							$('#twrite_btn').click(function () {
								alert("로그인 후 이용가능 합니다.");
								location.href = '/member/login.html?reurl=/community/page03.html';
							});
						});
					</script>
				</div>
				<!-- //관련영상 끝 -->
                <?}?>
                
                <?if($brdsch){?>
                <!-- 커뮤니티 시작 -->
				<h3 class="cont-tit">커뮤니티</h3>
				<div id="sub-notice">
					<div id="search-list-02">
						<ul>
                <?}?>

                <?

                    $p=0;$i=0;
                    $bmbtn = ($psize >= count($brdsch)) ? " style='display:none;'" : "";
                    foreach($brdsch as $k=>$v) {
                        $regDt = date("Y.m.d", strtotime($v['jb_reg_date']));
                        $jb_code = $v["jb_code"];
                        $jb_reg_date 		= date("Y.m.d", strtotime($v['jb_reg_date']));
                        $title 		= preg_replace('~<\s*\bscript\b[^>]*>(.*?)<\s*\/\s*script\s*>~is', '', $v["jb_title"]);
                        $title 			= $C_Func->strcut_utf8($title, 50, true, "...");
                        $args = "";
                        $args["jb_code"] = $jb_code;
                        $bname = $C_JHBoard -> Board_Config_Data($args);
                        //파일명 분리 및 저장된 파일 갯수

                        if($jb_code == "10"){$jb_name = "병원소식" ;}
                        elseif($jb_code == "80"){$jb_name = "포토뉴스" ;}
                        elseif($jb_code == "140"){$jb_name = "CH NK" ;}
                        elseif($jb_code == "90"){$jb_name = "언론보도" ;}
                        elseif($jb_code == "50"){$jb_name = "건강정보" ;}
                        elseif($jb_code == "40"){$jb_name = "전문의 상담" ;}
                        elseif($jb_code == "20"){$jb_name = "칭찬합니다" ;}
                        elseif($jb_code == "240"){$jb_name = "질환정보" ;}
                        

                        if($v["jb_file_name"]!="") {
                            $ex_jb_file_name = explode("|", $v["jb_file_name"]);
                            $ex_jb_file_code = explode("|", $v["jb_file_code"]);
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
                                $img_src = "<img src='" . $code_file. "' alt='" . $title. "' width='144' height='101'>";
                            }else{
                                $img_src = "<img src='/images/common/nk_thumbnail.jpg' width='144' height='101'>";
                            }
                        }else{
                            $img_src = "<img src='/images/common/nk_thumbnail.jpg' width='140' height='101'>";
                        }
                        if($i%$psize == 0) $p++;
                        $style = ($p > 1) ? 'style=display:none' : "";


                ?>
                        	<li>
								<a href="/notice/notice.php?jb_code=<?=$v["jb_code"]?>&jb_idx=<?=$v["jb_idx"]?>&jb_mode=tdetail"
									class="dec">
									<div class="img">
                                     <?=$img_src?>
									</div>
									<span class="txt">
										<b>
                                         <?=$title?>
										</b>
									</span>
									<div class="dec-foot">
										<span class="label"><?=$jb_name?></span>
										<span> <?=$jb_reg_date?>  </span>
										<span class="view"><?=$v["jb_see"]?> </span>
									</div>
								</a>
							</li>

                <?$i++;} }?>
                <?if($brdsch){?>
						</ul>
						<!--div class="pagination">
							<a href="?page=1&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" title="처음으로 이동하기"
								class="btn prev"><span><img src="/resource-pc/images/page-all-left.png" width="100%" alt=""></span></a> <a
								href="?page=0&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" title="이전으로 이동하기"
								class="btn prev"><span><img src="/resource-pc/images/page-left.png" width="100%" alt=""></span></a>
							<strong class="btn current" title="현재 페이지">1</strong> <a
								href="?page=2&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" class="btn">2</a> <a
								href="?page=3&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" class="btn">3</a> <a
								href="?page=4&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" class="btn">4</a> <a
								href="?page=5&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" class="btn">5</a> <a
								href="?page=6&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" class="btn">6</a> <a
								href="?page=7&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" class="btn">7</a> <a
								href="?page=8&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" class="btn">8</a> <a
								href="?page=9&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" class="btn">9</a> <a
								href="?page=10&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" class="btn">10</a> <a
								href="?page=2&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword=" title="다음 페이지 이동하기"
								class="btn next"><span><img src="/resource-pc/images/page-right.png" width="100%" alt="" <=""
										span=""></span></a> <a href="?page=43&amp;jb_code=80&amp;search_key[jb_title]=Y&amp;search_keyword="
								title="마지막 페이지 이동하기" class="btn next"><img src="/resource-pc/images/page-all-right.png" width="100%" alt=""></a>

						</div-->
                        <?=$page_link?>
					</div>
					<!-- //end #search-list-02 -->
				</div>
				<!-- //커뮤니티 끝 -->
                <?}?>
                <?if(!$docsch && !$vdsch  && !$brdsch ){?>
                    <li>                                            
                        <span class="txt">
                            <b>
                            검색 결과가 없습니다.
                            </b>
                        </span>                          
                    </li>                
                 <?}?>
				<br>
				<br>
				<br>
			</div>
		</div>
		<!-- //end #container -->

		<?php include_once $GP -> INC_WWW . "/fnb.php" ?>
		<?php include_once $GP -> INC_WWW . "/footer.php" ?>
	</div>
	<!-- //end #wrap -->
</body>

</html>