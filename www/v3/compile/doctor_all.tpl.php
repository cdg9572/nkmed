<?php /* Template_ 2.2.8 2021/11/12 10:25:38 /home/hosting_users/nkmed/www/v3/view/doctor_all.tpl 000003529 */ 
$TPL_dlist_1=empty($TPL_VAR["dlist"])||!is_array($TPL_VAR["dlist"])?0:count($TPL_VAR["dlist"]);
$TPL_list_1=empty($TPL_VAR["list"])||!is_array($TPL_VAR["list"])?0:count($TPL_VAR["list"]);?>
<div class="subTop2">
    <p class="category"><strong>진료과/의료진</strong> 첨단 의료장비와 전문 의료진들이 최상의 서비스를 제공합니다.</p>
    <nav class="location">
        <div class="depth2">
            <button type="button" class="btn" onclick="locActive();">의료진소개</button>
            <ul class="list">
                <li><a href="/v3/center.php?depart=A&gubun=A" data-gubun="a">전문센터</a></li>
                <li><a href="/v3/center.php?depart=AB&gubun=B" data-gubun='b'>진료과</a></li>
                <li><a href="/v3/center.php?depart=A&gubun=C" data-gubun='c'>특수클리닉</a></li>
                <li><a href="/v3/doctor.php?depart=A&gubun=A" data-gubun='d'>의료진소개</a></li>
            </ul>
        </div>
        <div class="depth3">
            <button type="button" class="btn" onclick="locActive();">선택해주세요</button>
            <ul class="list" style="z-index:9999999;">
<?php if($TPL_dlist_1){foreach($TPL_VAR["dlist"] as $TPL_V1){?>    
	                    <li class="dlist"><a href="/v3/detail.php?idx=<?php echo $TPL_V1["code"]?>&gubun=D"><?php echo $TPL_V1["name"]?></a></li>
<?php }}?>                    
            </ul>
        </div>
    </nav>
</div>
 <div id="result_doctor">
    <br />
        <div class="section">
            <div class="tabMenu" id="tab_menu1">
                <ul>
					<li data-gubun="n"<?php if($TPL_VAR["gubun"]=="N"){?> class="active"<?php }?>><a href="/v3/doctor_all.php"><span>의료진 전체보기</span></a></li>
                    <li data-gubun="a"<?php if($TPL_VAR["gubun"]=="A"){?> class="active"<?php }?>><a href="/v3/doctor.php?depart=A&gubun=A"><span>전문센터</span></a></li>
                    <li data-gubun="b"<?php if($TPL_VAR["gubun"]=="B"){?> class="active"<?php }?>><a href="/v3/doctor.php?depart=A&gubun=B"><span>진료과</span></a></li>
                   <!-- <li data-gubun="c"<?php if($TPL_VAR["gubun"]=="C"){?> class="active"<?php }?>><a href="/v3/doctor.php?depart=A&gubun=C"><span>특수클리닉</span></a></li>  -->
                </ul>
            </div>
<?php if($TPL_list_1){foreach($TPL_VAR["list"] as $TPL_V1){
$TPL_data_2=empty($TPL_V1["data"])||!is_array($TPL_V1["data"])?0:count($TPL_V1["data"]);?>
                   <section class="docList" data-depart="<?php echo $TPL_V1["depart"]?>">
					<ul class="list ver2">

<?php if($TPL_data_2){foreach($TPL_V1["data"] as $TPL_V2){?>
                        <li data-idx='<?php echo $TPL_V2["dr_idx"]?>' data-name='<?php echo $TPL_V2["drname"]?>'>
							<a href="/v3/detail.php?idx=<?php echo $TPL_V2["dr_idx"]?>&gubun=D">
								<span class="pic">
                                <img src="<?php echo $TPL_V2["dr_img"]?>" alt="">
									<i></i>
								</span>
								<span class="center"><?php echo $TPL_V2["dr_clinic2"]?><?php echo $TPL_V2["gubunja"]?><?php echo $TPL_V2["dr_clinic3"]?></span>
								<span class="name">
                                <b><?php echo $TPL_V2["drname"]?></b> <?php echo $TPL_V2["dr_ps"]?>

								</span>
							</a>
						</li>
<?php }}?>
					</ul>
				</section>
<?php }}?>
        </div>
	</div>