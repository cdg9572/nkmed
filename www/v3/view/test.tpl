
<div class="m-doc-info">
    <div class="_left">
	<div class="box">
		<div class="_top">
		    <img src="/resource/images/doctor-detail-line.png">
		    <div class="txt01">
			<p>{treat}<br>
			<b>{dr_name} {dr_ps}</b>
			</p>
		    </div>
		</div>
		<div class="_bottom">
		    <a href="https://nkhospital.net/m/res.process.02.html?ptype=s&tor_name=&tor_rs_phone=&dr_name={dr_name}" target="_blank">진료예약하기</a>
		</div>
         </div>
    </div>    
    {new_img}
</div>
<div class="doc-section">
    <p class="_tit">전문진료분야</p>
    <span class="doc-field">{dr_tr}</span>
</div>

<div class="doc-section">
    <p class="_tit">진료시간</p>
    <div class="tableType2 new">
        <table class="center">
            <caption>진료시간표</caption>
            <colgroup>
                <col style="width:14%;">
                <col style="width:14%;">
                <col style="width:14%;">
                <col style="width:14%;">
                <col style="width:14%;">
                <col style="width:14%;">
                <col style="width:14%;">
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">시간</th>
                    <th scope="col">월</th>
                    <th scope="col">화</th>
                    <th scope="col">수</th>
                    <th scope="col">목</th>
                    <th scope="col">금</th>
                    <th scope="col">토</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">오전</th>
                    {moning_txt}
                    <td rowspan="2">문의</td>
                </tr>
                <tr>
                    <th scope="col">오후</th>
                    {after_txt}
                </tr>
            </tbody>
        </table>
	<p>
		&nbsp;{dr_gita}
	</p>
    </div>
</div>

<div class="doc-section">
    {?dr_hi}    
    <p class="_tit">경력 및 학력</p>
    <ul class="ul-marker-circle">
     {dr_hi}
    </ul>
    {/}

    {?dr_ac}    
    <p class="_tit">학회활동</p>
    <ul class="ul-marker-circle mb-0">
         {dr_ac}
    </ul>
    {/}
</div>
<div class="vodWrap" style="padding: 2.3rem 1.5rem;">
	<div class="vod" style="top:0;left:0;width:100%;" id="play_main">
		 <div class="vlayer" style="width:100%; padding-bottom:56.25%; z-index:7;" id="layer_main">
        	{th_img}
             <img src="/images/mask_720405.png" alt="" style="width:100%; z-index:8; position:absolute;" id="vstart_main" data-vid="{vd_uid}">
        </div>
    </div>
    
    <div class="doc-greeting">
	<p class="txt1">{?dr_greeting_title}{dr_greeting_title}{:}환자와 소통하는 것이<br> 의사의 첫번째 임무입니다.{/}</p>
        <p class="txt2">{?dr_greeting}{dr_greeting}{:}단순히 검사 결과 상의 증상으로는 좋은 치료를 하는데 한계가 있습니다. 통증 부위와 환자의 나이, 성별, 생활 및 환경에 따라 증상이 달라질 수 있기에 원인을 찾아 정확한 진단을 내리는 것이 관건이기 때문입니다.<br>
        충분한 의사소통을 통해서 적합한 치료와 안전한 수술 방법을 선택하고, 재발을 방지하기 위해 환자에게 충분한 생활습관 교정과 운동법을 설명하며, 적극적인 치료를 받을 수 있도록 돕는 것,
        그렇게 환자와의 소통을 통해 상황에 맞는 최상의 진료 서비스를 제공해주는 것이 의사의 첫번째 임무라고 생각합니다.{/}</p>
    </div>
    
	<!--{?list}-->
    <section class="relationVod" id="vod_result">
    </section>
	<!--{/}-->

	<section>
        <div class="btnWrap" style="margin-top: 1.4rem;">
             <span><a href="https://nkhospital.net/m/res.process.02.html?ptype=s&tor_name=&tor_rs_phone=&dr_name={dr_name}" target="_blank" class="btnType2 new">진료예약</a></span> 
        </div>
    </section>
</div>
<style>
.vod{position:relative;min-height:231px; height:auto;overflow:hidden;}
.vod iframe,.video-container object,.video-container embed{position:absolute;top:0;left:0;width:100%;}
</style>
<script>
   var didx = "{dr_idx}";
</script>