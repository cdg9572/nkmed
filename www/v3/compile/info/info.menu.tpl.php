<?php /* Template_ 2.2.8 2023/08/09 17:08:03 /home/hosting_users/nkmed/www/v3/view/info/info.menu.tpl 000004002 */ ?>
<div class="subTop1">
    <p class="category"><strong>서비스이용안내</strong> 편리하고 빠른 병원이용을 안내합니다.</p>
    <nav class="location">
        <div class="depth2">
            <button type="button" class="btn" onClick="locActive();"><?php echo $TPL_VAR["ctxt"]?></button>
            <ul class="list">
                <li data-tab="depth1" data-spg="info1" data-stxt="진료 예약 안내"><a href="javascript:window.scrollTo(0,0);">예약/발급</a></li>
				<li data-tab="depth1" data-spg="info16_1" data-stxt="건강검진 안내"><a href="javascript:window.scrollTo(0,0);">건강검진</a></li>
                <li data-tab="depth2" data-spg="info4" data-stxt="외래진료안내"><a href="javascript:window.scrollTo(0,0);">진료안내</a></li>
                <li data-tab="depth3" data-spg="info7" data-stxt="입/퇴원안내"><a href="javascript:window.scrollTo(0,0);">입/퇴원 안내</a></li>
                <li data-tab="depth4" data-spg="info10_1" data-stxt="병원둘러보기"><a href="javascript:window.scrollTo(0,0);">병원안내</a></li>
            </ul>
        </div>
        <div class="depth3">
            <button type="button" class="btn" onClick="locActive();"><?php echo $TPL_VAR["ttxt"]?></button>
            <ul class="list" id="info_menu">
<?php if($TPL_VAR["depth"]=="depth1"){?>                
                <!-- <li data-tab="depth1" data-page="info00"><a href="javascript:window.scrollTo(0,0);">첫 진료 간편예약</a></li>				 -->
				<li data-tab="depth1" data-page="info1"><a href="javascript:window.scrollTo(0,0);">진료 예약 안내</a></li>	
                <li data-tab="depth1" data-page="info0"><a href="javascript:window.scrollTo(0,0);">진료 예약(재진)</a></li>	
                <li data-tab="depth1" data-page="info3"><a href="javascript:window.scrollTo(0,0);">증명서발급 안내</a></li>
<?php }elseif($TPL_VAR["depth"]=="depth2"){?>
                <li data-tab="depth2" data-page="info16_1"><a href="javascript:window.scrollTo(0,0);">건강검진 안내</a></li>
				<li data-tab="depth2" data-page="info2"><a href="javascript:window.scrollTo(0,0);">검진 예약/결과</a></li>
<?php }elseif($TPL_VAR["depth"]=="depth3"){?>
                <li data-tab="depth3" data-page="info4"><a href="javascript:window.scrollTo(0,0);">외래진료안내</a></li>
                <li data-tab="depth3" data-page="info5"><a href="javascript:window.scrollTo(0,0);">응급진료안내</a></li>
				<li data-tab="depth3" data-page="info14"><a href="javascript:window.scrollTo(0,0);">특수검진 외국인 문진표 양식</a></li>
                <!--<li data-tab="depth2" data-page="info6"><a href="javascript:window.scrollTo(0,0);">비급여진료안내</a></li>-->
<?php }elseif($TPL_VAR["depth"]=="depth4"){?>
                <li data-tab="depth4" data-page="info7"><a href="javascript:window.scrollTo(0,0);">입/퇴원안내</a></li>
                <li data-tab="depth4" data-page="info8"><a href="javascript:window.scrollTo(0,0);">입원생활안내</a></li>
                <li data-tab="depth4" data-page="info9"><a href="javascript:window.scrollTo(0,0);">면회안내</a></li>
<?php }elseif($TPL_VAR["depth"]=="depth5"){?>                
                <li data-tab="depth5" data-page="info10_2"><a href="javascript:window.scrollTo(0,0);">병원둘러보기</a></li>
                <li data-tab="depth5" data-page="info11_1"><a href="javascript:window.scrollTo(0,0);">오시는길/주차안내</a></li>
                <li data-tab="depth5" data-page="info12"><a href="javascript:window.scrollTo(0,0);">장례식장</a></li>
                <!-- <li data-tab="depth4" data-page="info13"><a href="javascript:window.scrollTo(0,0);">전화번호안내</a></li> -->
<?php }?>                
            </ul>
        </div>
    </nav>
</div>