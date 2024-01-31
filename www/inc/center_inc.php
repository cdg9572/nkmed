<div class="clinicInforTop type2">
<?
	$ct_type = "A";

	if($_GET['ct_type'] != "") {
		$ct_type = $_GET['ct_type'];
	}

	switch($ct_type) {

		//관절센터
		case "A" :
			echo "
				<dl>
					<dt>관절센터</dt>
					<dd>
						<p>보건복지부 지정 <Strong>관절전문병원</Strong>인 본원의  관절센터는 환자 특성에 따른 최적의<br /> 관절치료를 진행합니다.</p>
					</dd>
					<dd>
						관절로 고민하시는 환자들의 연령, 부위, 질환을 종합 분석하여 맞춤치료를<br /> 하고, 관절내시경 및 인공관절 수술을 전문적으로 시행하고 있습니다.<br /> 임상경험이 풍부한 전문의료진의 진료와 검사, 수술, 재활치료 과정이<br /> 체계적이고 종합적으로 이뤄집니다. 또한 최소절개를 통해 통증을 감소시키고 빠른 회복이 가능하여 만족도 높은 결과를 기대할 수 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors01.png\" alt=\"관절센터 의료진\" /></div>
				<!-- div class=\"boxVideo\">
					<div class=\"boxVideoClose\"><button class=\"btnVideoClose\"></button></div>
					<iframe id=\"VideoFrame\" src=\"//player.vimeo.com/video/92496882?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1\" width=\"890\" height=\"500\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div -->
			";
		break;


		//외상센터
		case "B" :
			echo "
				<dl>
					<dt>외상센터</dt>
					<dd>
						<p>외상센터는 산업재해나 교통사고, 기타 안전사고 등 불의의 사고로 손상을 입은 환자를 진료합니다.</p>
					</dd>
					<dd>
						환자의 수부나 족부에 신경손상, 혈관손상, 힘줄파열, 골절 및 절단 등이<Br /> 나타났을 때 재접합과 치료, 재활치료 등을 진행합니다. 전문재활치료 시스템과  365일 24시간 <Strong>응급수술 시스템</Strong>을 갖추고 있으며, 전문의료진과 첨단<Br />  의료장비로 높은 수술 성공률을 자랑합니다. 특히 <Strong>미세 수지접합수술</Strong>을<Br />  적용하여 미세한 혈관과 신경을 재건하고 봉합, 복합조직의 이식이 가능합니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors02.png\" alt=\"외상센터 의료진\" /></div>
			";
		break;

		//척추센터
		case "C" :
			echo "
				<dl>
					<dt>척추센터</dt>
					<dd>
						<p>척추센터는 각종 척추질환에 대해 정확히 진단하고 체계적인 전문 치료를 시행합니다.</p>
					</dd>
					<dd>
						환자의 척추질환에 대해 관절센터, 통증클리닉, 물리치료실, 내과와의 협진을 통하여 종합적이고 체계적인 진단이 이뤄집니다. 또한 비수술적 치료방법과 수술적 치료방법 중 가장 적합하고 안전한 방법을 선택하여 치료합니다. 첨단 장비를 이용한 정밀검사, 최신 척추치료 및 수술, 체계적인 재활훈련으로 각종 척추질환을 빠르고 정확하게 치료할 수 있습니다.
					</dd>

				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors03.png\" alt=\"척추센터 의료진\" /></div>
			";
		break;


		//뇌신경센터
		case "D" :
			echo "
				<dl>
					<dt>뇌신경센터</dt>
					<dd>
						<p>뇌신경센터는 <br />발병 후 치명적인 후유증을 남기는 <br />뇌혈관질환과 뇌신경계질환을 <br />예방적 차원으로 접근하여 치료합니다.</p>
					</dd>
					<dd>
						뇌혈관내수술은 첨단 영상장비를 이용한 혈관조영술로 혈관 내 미세도관을 삽입해 각종 질환을 진단하고 치료합니다. 사망률이 높거나 수술 후 합병증이 많은 뇌혈관질환 및 뇌졸증 등을 치료하며, 대한뇌혈관내수술학회에서 주관한 <Strong>뇌혈관내수술인증제에서 인증의를 획득한 의료진</Strong>이 상주하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors04.png\" alt=\"뇌신경센터 의료진\" /></div>
				<!-- div class=\"boxVideo\">
					<div class=\"boxVideoClose\"><button class=\"btnVideoClose\"></button></div>
					<iframe id=\"VideoFrame\" src=\"//player.vimeo.com/video/92496810?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1\" width=\"890\" height=\"500\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div -->
			";
		break;


		//소화기센터
		case "E" :
			echo "
				<dl>
					<dt>소화기센터</dt>
					<dd>
						<p>소화기센터는 소화기와 관련된 모든 <br />질환의 전문치료를 추구하며, 자세한 <br /> 상담과 진단을 통해 정확한 치료를 진행합니다.</p>
					</dd>
					<dd>
						전문 의료진이 식도에서 위, 간, 대장항문에 이르기까지 소화기와 관련한 모든 질환을 자세한 상담과 진단을 통해 진료합니다.<strong> 1만 건 이상의 안전한 내시경 검사</strong>를 시행했으며 최신 장비와 검사방식, 완벽한 내시경 소독시스템, 쾌적한 회복실을 완비하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors05.png\" alt=\"소화기센터 의료진\" /></div>
			";
		break;


		//심혈관센터
		case "F" :
			echo "
				<dl>
					<dt>심혈관센터</dt>
					<dd>
						<p>심혈관센터는 심장혈관질환 환자의<br /> 진료에 최우선을 두고 있으며<br /> 전문진료팀을 운영해 최상의<br /> 의료서비스를 제공합니다.</p>
					</dd>
					<dd>
						고혈압, 고지혈증, 심장판막증, 심부전, 부정맥 등을 치료하며 심전도, 심장초음파, 심혈관조영술을 비롯하여 운동부하검사, 24시간 생활심전도, 24시간 생활혈압측정, 동맥경화도 검사 등을 시행합니다. 응급한 심장혈관질환 환자를 위해 24시간 365일 언제나 <strong>응급진료서비스</strong>를 제공하며, <strong>one stop 서비스로 검사에서 치료까지</strong> 신속하게 이뤄집니다.<br /><br /><br />
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors10.png\" alt=\"심혈관센터 의료진\" /></div>
				<!-- div class=\"boxVideo\">
					<div class=\"boxVideoClose\"><button class=\"btnVideoClose\"></button></div>
					<iframe id=\"VideoFrame\" src=\"//player.vimeo.com/video/92496810?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1\" width=\"890\" height=\"500\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div -->
			";
		break;


		//소아청소년센터
		case "G" :
			echo "
				<dl>
					<dt>소아청소년센터</dt>
					<dd>
						<p>소아청소년센터에서는 신생아에서<Br /> 청소년까지 성장, 발달에 대한 상담 그리고 모든 질환에 대한 예방접종 및 종합검진을 시행합니다. </p>
					</dd>
					<dd>
						소아의 성장, 발달과 소아의 흔한 질환, 예방을 다루는 일반진료와 소아심장, 혈액종양, 유전, 신생아, 소아내분비, 소아신장, 알레르기, 천식, 소아신경, <br />경련질환, 소아소화기, 간, 영양질환 분야의 특수진료를 담당하고 있습니다. 어린 환자와 보호자를 배려한 넓고 편안한 온돌마루가 설치된 <Strong>전용 소아병동</Strong>을 운영하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors07.png\" alt=\"소아청소년센터 의료진\" /></div>
				<!-- div class=\"boxVideo\">
					<div class=\"boxVideoClose\"><button class=\"btnVideoClose\"></button></div>
					<iframe id=\"VideoFrame\" src=\"//player.vimeo.com/video/92497110?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1\" width=\"890\" height=\"500\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div -->
			";
		break;


		//여성센터
		case "H" :
			echo "
				<dl>
					<dt>여성센터</dt>
					<dd>
						<p>여성센터는 갑상선과 유방클리닉을 <Br />비롯해 산부인과, 비만, 뷰티클리닉 등<Br /> 전반적인 건강과 미용관리를 담당합니다. </p>
					</dd>
					<dd>
						여성 건강에 위협이 되는 갑상선질환, 유방암, 골반장기탈출증, 요실금, 비만 등을 정확히 진단하고 치료합니다. 영상의학과와의 협진으로 정확한 영상진단 결과를 기대할 수 있으며 <strong>맘모톰</strong> 장비, <strong>복강경 수술기법</strong> 등을 통해 보다<br /> 정확하고 안전한 치료가 이뤄집니다. 특히 비만과 피부를 관리하는<br />  전문클리닉이 있어 건강과 아름다움을 동시에 얻을 수 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors08.png\" alt=\"여성센터 의료진\" /></div>
			";
		break;


		//통증의학센터
		case "I" :
			echo "
				<dl>
					<dt>통증의학센터</dt>
					<dd>
						<p>통증의학센터는 외과적 수술을 시행하기 위해 필요한 환자의 마취, 수술 후 <br /> 통증관리, 만성통증 치료 및 중환자관리 등을 담당합니다.</p>
					</dd>
					<dd>
						수술 전 환자평가 및 수술 중, 수술 후를 총괄하여 관리하며, 환자의 상태를<br />  정확히 평가하여 안전한 수술을 위한 가장 적절한 마취관리를 시행합니다.<br />  수술 후 통증관리를 통해 양질의 의료를 제공하고 있으며, 통증치료실에서는 외래 및 입원환자의 모든 급성 및 만성통증을 진단하고 치료합니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors06.png\" alt=\"통증의학센터 의료진\" /></div>
			";
		break;


		//응급의학센터
		case "J" :
			echo "
				<dl>
					<dt>응급의학센터</dt>
					<dd>
						<p>응급의학센터는 각종 응급사태 발생시 신속히 대처할 수 있는 <strong>응급의학전문의 24시간 진료체제</strong>를 구축하고 있습니다.</p>
					</dd>
					<dd>
						긴급환자의 치료는 물론 외상, 심혈관, 뇌혈관, 소아, 심폐소생술 등에 대한<br /> 신속한 진단과 전문적인 치료, 처치를 시행합니다. 환자의 상태를 최단 시간 내에 정상에 가까운 상태로 회복시켜 계속되는 치료나 수술, 재활의<br /> 치료효과를 높이고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors09.png\" alt=\"응급의학센터 의료진\" /></div>
			";
		break;


		//평생건강증진센터
		case "K" :
			echo "
				<dl>
					<dt>평생건강증진센터</dt>
					<dd>
						<p>평생건강증진센터는 맞춤 건강프로그램과 전문 의료진을 통해 환자의 체계적인 건강 증진을 도모합니다.</p>
					</dd>
					<dd>
						각 개인별 건강진단과 위험요인을 고려한 <strong> 1:1프로그램</strong>을 실행하고 있으며,<br /> 환자가 편안한 심신 상태에서 건강해질 수 있는 환경을 제공합니다. 개별적인 건강관리는 물론 가족 단위로도 관리가 가능하며, 풍부한 경험의 전문<br /> 의료진이 최신 장비와 최상의 환경으로 환자 건강을 지켜주고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors08.png\" alt=\"평생건강증진센터 의료진\" /></div>
				<!-- div class=\"boxVideo\">
					<div class=\"boxVideoClose\"><button class=\"btnVideoClose\"></button></div>
					<iframe id=\"VideoFrame\" src=\"//player.vimeo.com/video/92497017?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1\" width=\"890\" height=\"500\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div -->
			";
		break;


	}
?>
</div>
<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
<script>
$(function(){
	$('.btnVideoClose').click(function(){
		$(this).parents().find('.boxVideo').hide();
		var iframe = $('#VideoFrame')[0];
		var player = $f(iframe);
		player.api('pause');
	});
});
</script>