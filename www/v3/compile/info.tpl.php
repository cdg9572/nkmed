<?php /* Template_ 2.2.8 2019/06/11 12:06:29 /nkmed/www/v3/view/info.tpl 000003300 */ ?>
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
<div class="subTop1">
    <p class="category"><strong>서비스이용안내</strong> 편리하고 빠른 병원이용을 안내합니다.</p>
    <nav class="location">
        <div class="depth2">
            <button type="button" class="btn" onclick="locActive();"><?php echo $TPL_VAR["ctxt"]?></button>
            <ul class="list">
                <li data-tab="depth1" data-spg="info3" data-stxt="증명서 발급안내"><a href="javascript:window.scrollTo(0,0);">예약/발급</a></li>
                <li data-tab="depth2" data-spg="info4" data-stxt="외래진료안내"><a href="javascript:window.scrollTo(0,0);">진료안내</a></li>
                <li data-tab="depth3" data-spg="info7" data-stxt="입/퇴원안내"><a href="javascript:window.scrollTo(0,0);">입/퇴원 안내</a></li>
                <li data-tab="depth4" data-spg="info10" data-stxt="병원둘러보기"><a href="javascript:window.scrollTo(0,0);">병원안내</a></li>
            </ul>
        </div>
        <div class="depth3">
            <button type="button" class="btn" onclick="locActive();"><?php echo $TPL_VAR["ttxt"]?></button>
            <ul class="list" id="info_menu">
                <li data-tab="depth1" data-page="info1"><a href="javascript:window.scrollTo(0,0);">진료예약</a></li>
                <li data-tab="depth1" data-page="info2"><a href="javascript:window.scrollTo(0,0);">검진예약</a></li>
                <li data-tab="depth1" data-page="info3"><a href="javascript:window.scrollTo(0,0);">증명서발급 안내</a></li>
                <li data-tab="depth2" data-page="info4"><a href="/v3/info.php?tab=info4">외래진료안내</a></li>
                <li data-tab="depth2" data-page="info5"><a href="javascript:window.scrollTo(0,0);">응급진료안내</a></li>
                <!--<li data-tab="depth2" data-page="info6"><a href="javascript:window.scrollTo(0,0);">비급여진료안내</a></li>-->
                <li data-tab="depth3" data-page="info7"><a href="javascript:window.scrollTo(0,0);">입/퇴원안내</a></li>
                <li data-tab="depth3" data-page="info8"><a href="javascript:window.scrollTo(0,0);">입원생활안내</a></li>
                <li data-tab="depth3" data-page="info9"><a href="javascript:window.scrollTo(0,0);">면회안내</a></li>
                <li data-tab="depth4" data-page="info10"><a href="javascript:window.scrollTo(0,0);">병원둘러보기</a></li>
                <li data-tab="depth4" data-page="info11"><a href="javascript:window.scrollTo(0,0);">오시는길/주차안내</a></li>
                <li data-tab="depth4" data-page="info12"><a href="javascript:window.scrollTo(0,0);">장례식장</a></li>
                <li data-tab="depth4" data-page="info13"><a href="javascript:window.scrollTo(0,0);">전화번호안내</a></li>
            </ul>
        </div>
    </nav>
</div>
<br />
<div id="result_info">
</div>
<br />
<script>
//$(window).load(function(){
	//info_load("<?php echo $TPL_VAR["tab"]?>","tab=<?php echo $TPL_VAR["tab"]?>");
//});
</script>