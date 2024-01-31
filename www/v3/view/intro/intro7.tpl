{#introtop}
<div class="hospGreeting">
    <div class="section">
       <h3 class="cont-tit" style="text-align: center;">
					<span class="quote">뉴고려병원의 <br>심볼을 소개합니다.</span>
				</h3>
		<p style="display: flex;flex-wrap: wrap;justify-content: center;">
			<img src="/resource-pc/images/hi-logo.png" alt="" style="max-width: 100%;">
			<img src="/resource-pc/images/hi-logo2.png" alt="" style="max-width: 100%;margin-top:-1px;">
		</p>
		<br>
		<h3 class="cont-tit" style="text-align: center;">
			색상규정
			<span class="bar"></span>
		</h3>
		<p style="display: flex;flex-wrap: wrap;justify-content: center;">
			<img src="/resource-pc/images/hi-logo-color1.png" alt="" style="width:100%;max-width: 85%;">
			<img src="/resource-pc/images/hi-logo-color2.png" alt="" style="width:100%;max-width: 85%;margin-top:10px;">
			<img src="/resource-pc/images/hi-logo-color3.png" alt="" style="width:100%;max-width: 85%;margin-top:10px;">
		</p>
        <p>
			뉴고려병원의 심볼은 4가지 색으로 구성되어 있습니다. <span class="c-blue">파란색(B)</span>, <span class="c-red">빨간색(R)</span>, <span class="c-green">녹색(G)</span> <b>그리고 흰색입니다.</b> 흰색은 의사선생님의 하얀 가운처럼, 빛과 생명을 상징합니다. <br>
			그리고 빛의 3원색인 파랑, 빨강, 녹색이 조화를 이루고 있지요. 각각의 색은 저마다 의료서비스의 본질적인 분야를 상징하고 있습니다.
		</p>
		<p>
			<span class="c-blue">먼저 파란색은</span> 인간의 합리적 이성을 기반으로 정확한 진단, 정확한 치료, 냉철한 수술을 통해 환자들을 질병의 고통으로부터 벗어날수 있도록 도와주는 현대의학을 상징하고 있습니다.<br>
			정형외과, 외과, 영상의학과, 진단검사의학과, 통증의학과, 치과 등의 분야가 여기에 포함될 수 있겠습니다. 
		</p>
		<p>
			<span class="c-red">다음으로 빨간색은</span> 피와 열정을 상징하는 색상으로, 자칫 생명을 잃을 수도 있는 긴급한 상황에 처한 환자들을 구할 수 있는 필수의료와 생명의료를 상징하고 있습니다.<br>
			응급의학과, 외상센터, 심혈관센터, 뇌신경센터, 중환자실, 혈액투석 등의 분야가 여기에 포함된다고 하겠습니다. 
		</p>
		<p>
			<span class="c-green">마지막으로 녹색은</span> 자연의 색상으로, 만성질환을 겪고 있는 환자들의 건강을 증진시키거나 질병을 사전에 예방할 수 있는 지속가능한 의료를 상징하고 있습니다.<br>
			내과, 건강증진센터, 예방의학, 산업의학, 재활의학, 영양의학, 기능의학 등의 분야가 여기에 포함되겠습니다. 
		</p>
		<p>
			<b>뉴고려병원은 빛의 3원색처럼 의료의 본질을 이루고 있는 3가지 분야가 각자의 전문성을 최대한 발휘하면서도 서로 다른 분야와의 소통과 협업을 통해서 생명의 빛(하얀색), 생명존중의 가치(Value)를 찾아가는 <span style="color:#b27252;">가색혼합(加色混合)</span>의 진료철학을 실천하고자 최선을 다하고 있습니다.</b>
		</p>
    </div>
</div>
<style>
	.cont-tit {margin:30px 0;font-size: 2.1rem;}
	.cont-tit .quote {display: inline-block;position: relative;padding:0 50px;line-height: 1.4;}
	.cont-tit .quote:before,
	.cont-tit .quote:after {position: absolute;top: 30%;width: 31px;height: 21px;background-repeat: no-repeat;background-position: center;content:'';}
	.cont-tit .quote:before {left: 0;background-image: url(/resource-pc/images/quote-left.png);}
	.cont-tit .quote:after {right: 0;background-image: url(/resource-pc/images/quote-right.png);}
	.cont-tit .bar {display: block;margin:20px auto 0;width: 45px;height: 3px;background-color: #333;}
	.c-blue {color: #1795d0 !important;font-weight: 400;}
	.c-red {color: #e6001f !important;	font-weight: 400;}
	.c-green {color: #26b27c !important;	font-weight: 400;}
</style>
<script>
	$(document).on("click","#v_intro2",function(){
		console.log("click");
		var introVideo = document.getElementById("v_intro");
		$("#layer_main").hide();
		introVideo.play();
	});
</script>	
