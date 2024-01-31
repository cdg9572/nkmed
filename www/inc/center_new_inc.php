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
						<p>본원의 관절센터는 환자 특성에 따른 <br /><Strong>최적의 관절치료</Strong>를 진행합니다.</p>
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

		//척추센터
		case "B" :
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

		//외상센터
		case "C" :
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


		//뇌신경센터
		case "D" :
			echo "
				<dl>
					<dt>뇌신경센터</dt>
					<dd>
						<p>뇌신경센터는 <br />발병 후 치명적인 후유증을 남기는 <br />뇌혈관질환과 뇌신경계질환을 <br />예방적 차원으로 접근하여 치료합니다.</p>
					</dd>
					<dd>
						뇌혈관내수술은 첨단 영상장비를 이용한 혈관조영술로 혈관 내 미세도관을 삽입해 각종 질환을 진단하고 치료합니다. 사망률이 높거나 수술 후 합병증이 많은 뇌혈관질환 및 뇌졸중 등을 치료하며, 대한뇌혈관내수술학회에서 주관한 <Strong>뇌혈관내수술인증제에서 인증의를 획득한 의료진</Strong>이 상주하고 있습니다.
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
						<p>소아청소년센터에서는 신생아에서 청소년에게서 발생할 수 있는 모든 질환에 대한 예방접종 및 종합검진을 시행합니다.</p>
					</dd>
					<dd>
						소아의 흔한 질환, 예방을 다루는 일반진료와 소아심장, 혈액종양, 유전, 신생아, 소아내분비, 소아신장, 알레르기, 천식, 소아신경, 경련질환, 소아소화기, 간, 영양질환 분야의 특수진료를 담당하고 있습니다. 어린 환자와 보호자를 배려한 넓고 편안한 온돌마루가 설치된 <strong>전용 소아병동</strong>을 운영하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors07.png\" alt=\"소아청소년센터 의료진\" /></div>
				<!-- div class=\"boxVideo\">
					<div class=\"boxVideoClose\"><button class=\"btnVideoClose\"></button></div>
					<iframe id=\"VideoFrame\" src=\"//player.vimeo.com/video/92497110?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1\" width=\"890\" height=\"500\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div -->
			";
		break;


		//마취통증의학센터
		case "H" :
			echo "
				<dl>
					<dt>통증센터</dt>
					<dd>
						<p>통증센터는 외과적 수술을 시행하기 위해 필요한 환자의 마취, <br />수술 후 통증관리, 만성통증 치료 및 중환자관리 등을 담당합니다.</p>
					</dd>
					<dd>
						수술 전 환자평가 및 수술 중, 수술 후를 총괄하여 관리하며, 환자의 상태를<br />  정확히 평가하여 안전한 수술을 위한 가장 적절한 마취관리를 시행합니다.<br />  수술 후 통증관리를 통해 양질의 의료를 제공하고 있으며, 통증치료실에서는 외래 및 입원환자의 모든 급성 및 만성통증을 진단하고 치료합니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors06.png\" alt=\"신경통증의학센터 의료진\" /></div>
			";
		break;


		//응급의료센터
		case "I" :
			echo "
				<dl>
					<dt>응급의료센터</dt>
					<dd>
						<p>응급의료센터는 각종 응급사태 발생시 신속히 대처할 수 있는 <strong>응급의학전문의 24시간 진료체제</strong>를 구축하고 있습니다.</p>
					</dd>
					<dd>
						긴급환자의 치료는 물론 외상, 심혈관, 뇌혈관, 소아, 심폐소생술 등에 대한<br /> 신속한 진단과 전문적인 치료, 처치를 시행합니다. 환자의 상태를 최단 시간 내에 정상에 가까운 상태로 회복시켜 계속되는 치료나 수술, 재활의<br /> 치료효과를 높이고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors09.png\" alt=\"응급의학센터 의료진\" /></div>
			";
		break;


		//평생건강증진센터
		case "J" :
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


		//일반외과
		case "K" :
			echo "
				<dl class=\"clinicTxt01\">
					<dt>일반외과</dt>
					<dd>
						<p>일반외과는 내과의 약물치료와 달리<br /> 수술로 환자의 질병이나 상태를<br /> 치료합니다. </p>
					</dd>
					<dd>
						환자 질환의 정확한 진단을 바탕으로 수술이 이뤄지며, 수술 진행은 물론 사후<br /> 관리까지 총괄적으로 진행합니다. 모든 외상과 피부 및 피하의 염증, 또는<br /> 종괴(멍울)를 담당하고 있으며 두경부와 흉부, 유방, 복부 및 항문 등에<br /> 발생하는 각종 질병 질환을 치료하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors09.png\" alt=\"일반외과 의료진\" /></div>
			";
		break;

			//흉부외과
		case "L" :
			echo "
				<dl class=\"clinicTxt01\">
					<dt>흉부외과</dt>
					<dd>
						<p>흉부외과는 가슴 부위에 위치한 심장, 폐, 기관, 식도, 대동맥 등의 주요 장기를<br />  진찰하고 진료합니다.</p>
					</dd>
					<dd>
						흉부에 위치한 장기는 생명 유지의 기본이 되므로 정밀하고 정확한 진단,<br />  치료가 중요합니다. 본원 흉부외과에서는 주요 장기의 질환과 흉벽, 종격동,<br />  횡경막, 늑막 등에서 발생한 질환을 진단하고, 수술적인 방법으로 치료를<br />  시행합니다. 또한 다한증과 액취증 등도 진료가 가능해 환자에게 보다 자신감<br />  있는 생활을 제공하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors10.png\" alt=\"흉부외과 의료진\" /></div>
			";
		break;

		//신경과
		case "M" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>신경과</dt>
					<dd>
						<p>신경과는 인체에 있는 모든 신경계의<br />  질환 등을 연구, 진단 및 치료합니다.</p>
					</dd>
					<dd>
						뇌와 척수인 중추 신경계, 말초신경계 등에 발생하는 기질적인 질병을 다루고 <br /> 있습니다. 뇌졸중(중풍), 간질 혹은 경련성 질환, 뇌막염과 뇌염, 원인불명<br />  의식장애, 안면마비, 치매 등이 진료분야입니다. 신경계질환의 체계적인 진단 및<br />  원인 관리, 후유장애관리 등을 지속적으로 진행해 환자의 일상생활에 질적인<br />  향상을 기여하고 있습니다.
					</dd>

				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors11.png\" alt=\"신경과 의료진\" /></div>
			";
		break;

		//산부인과
		case "N" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>산부인과</dt>
					<dd>
						<p>산부인과는 여성의 생식 기능과<br /> 더불어 여러 질병을 진단, 치료합니다. </p>
					</dd>
					<dd>
						임신과 출산을 비롯해 성병, 생식기 종양, 배뇨 이상, 호르몬 이상, 폐경 등<br /> 다양한 진단과 진료를 시행합니다. 특히 부인과질환 전문의료진이 부인과 양성<br /> 질환을 개복하지 않고 복강경수술로 치료해 환자 만족도가 높습니다.
					</dd>
					<dd>
						보다 정확하고 빠른 진단, 그리고 치료를 위해 영상의학과와 내과, 외과 등과<br />  협진하여 여성의 소중한 몸을 돌보고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors05.png\" alt=\"부인과 의료진\" /></div>
			";
		break;

		//치과
		case "O" :
			echo "
				<dl class=\"clinicTxt01\">
					<dt>치과</dt>
					<dd>
						<p>치과는 치아와 주변조직, <br />구강을 포함한 악안면 영역의 질환을<br /> 진단하고 치료합니다. </p>
					</dd>
					<dd>
						최신 장비와 기법으로 구강질환을 예방, 진단, 그리고 치료합니다. 외래환자 및<br /> 입원환자의 치아를 관리하고, 구강질환 치료를 시행하고 있으며 구강검사와<br /> 건강진단을 통해 환자들의 건강한 치아 보존에 최선을 다하고 있습니다.<br /> <strong>임플란트와 심미치료, 신경치료, 미백, 턱관절치료</strong> 등의 다양한 분야의 진료가<br /> 가능합니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors12.png\" alt=\"치과 의료진\" /></div>
			";
		break;

		//영상의학과
		case "P" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>영상의학과</dt>
					<dd>
						<p>영상의학과는 X-ray를 비롯한 전자기장,<br /> 초음파 등을 통해 신체 부위의 질병을<br /> 진단하고 치료합니다. </p>
					</dd>
					<dd>
						X-ray, 조영제 투시검사, 혈관조영촬영, 최신초음파검사, CT, MRI 등의 다양한<br />  영상검사 방법으로 환자의 상태를 진단합니다. 또한 의료영상 전달<br />  시스템(PACS)으로 진단 목적에 따른  <strong>다양한 영상검사의 촬영, 판독 및 진료<br />  자문, 영상진단장치</strong>를 이용한 중재적 시술에 의한 직접 진료까지 가능한<br />  시스템이 구축되어 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors13.png\" alt=\"영상의학과 의료진\" /></div>
			";
		break;

		//진단검사의학과
		case "Q" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>진단검사의학과</dt>
					<dd>
						<p>진단검사의학과는 환자의 혈액과<br /> 대소변, 체액이나 조직 등을 바탕으로<br /> 정확한 진단과 치료를 위한 검사 결과를<br /> 제공합니다.</p>
					</dd>
					<dd>
						질병의 선별과 초기 발견, 진단과 경과 관찰, 치료 효과 및 예후 판정 등의<br /> 의료서비스를 제공하고 있으며, 각 임상분야와 긴밀한 협조를 통해 검사의<br /> 적절한 시행과 해석이 이루어지도록 노력하고 있습니다. 또한 최신 지식과<br /> 기술을 바탕으로 임상의료진에게 최선의 진료가 가능하도록 시스템을<br /> 갖추었습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors14.png\" alt=\"진단검사의학과 의료진\" /></div>
			";
		break;

		//내분비내과
		case "R" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>내분비내과</dt>
					<dd>
						<p>내분비내과는 내분비 기관의 이상으로 발생하는 다양한 호르몬 이상을 다루는 진료과목입니다.</p>
					</dd>
					<dd>
						주로 당뇨병과 갑상선질환 뇌하수체 질환 등을 진료하며, 근래에는 현대인의 성인병 발생률이 높아져 내분비 질환 치료의 중요성이 점차 높아지고 있습니다. 본원에서는 전문 의료진이 정기적인 질환 교육과 더불어 식단조절, 운동조절, 예방 등을 통해 환자를 전문적으로 케어하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors18.png\" alt=\"내분비내과 의료진\" /></div>
			";
		break;


		//신장센터
		case "S" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>신장센터</dt>
					<dd>
						<p>신장센터는 신장의 기능과 질환에 대해 진단하고 치료하는 진료과목입니다.</p>
					</dd>
					<dd>신장 조직검사와 혈액 투석, 복막 투석 등을 통해 환자의 상태를 확인하며 신장의 기능을 대체하기 위하여 투석치료 및 신장이식 등을 진행합니다. 신장질환의 경우 환자의 식이요법과 생활습관 등이 수반되어야 하므로 전문 의료진이 환자 선별 검사에 힘쓰고 있으며, 다양한 교육 등을 시행하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors15.png\" alt=\"신장센터 의료진\" /></div>
			";
		break;

		//호흡기내과
		case "T" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>호흡기내과</dt>
					<dd>
						<p>호흡기내과는 기관지와 폐 등에 발생할 수 있는 여러 질환을 진단하고 치료합니다.</p>
					</dd>
					<dd>감기를 비롯해 결핵, 폐암, 천식, 폐렴, 폐색전증 등을 치료하며 주요시술로는 기관지 내시경, 폐기능 검사, 흉부 X선 촬영 및 CT 등이 있습니다. 대기오염이나 흡연, 바이러스 등으로 인해 호흡기 질환을 호소하는 환자들이 많아 예방과 건강 차원에서 다채로운 프로그램을 진행하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors16.png\" alt=\"호흡기내과 의료진\" /></div>
			";
		break;

		//이비인후과
		case "U" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>이비인후과</dt>
					<dd>
						<p>이비인후과는 귀와 코, 목(인두, 후두)에 관련된 질환을 치료하는 진료과목입니다.</p>
					</dd>
					<dd>이과와 비과, 그리고 두경부외과의 3개 분과 형태로 구분되어 있으며, 근래에는 갑상선암의 수술적 치료에 있어서 그 중요성이 점차 높아지는 추세입니다. 주요 검사 및 치료로는 청력검사와 전정기능 검사, 비과 검사, 음성 및 언어치료 등이 있으며, 환자의 질환 및 부위에 따라 최적의 맞춤 진료를 시행하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors17.png\" alt=\"이비인후과 의료진\" /></div>
			";
		break;


		//피부비뇨기과
		case "V" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>피부비뇨의학과</dt>
					<dd>
						<p>피부비뇨의학과는 요로계와 남성 생식기관 및 부속성선, 부신질환을 치료하는 진료과목입니다.</p>
					</dd>
					<dd>소변 생성, 운반, 배설과 관련된 요로계의 질환과 전립선염, 전립선 비대증, 요실금, 비뇨기종양, 배뇨장애, 피부질환 등 남성 생식기관 및 부속성선과 부신질환을 진단 및 치료하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors19.png\" alt=\"피부비뇨기과 의료진\" /></div>
			";
		break;


		//재활의학과
		case "w" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>재활의학과</dt>
					<dd>
						<p>환자의 장애와 통증 등의 정확한 진단을 통해 포괄적인 재활치료를 시행하는 진료과목입니다.</p>
					</dd>
					<dd>재활의학과는 정확한 진단을 바탕으로 물리치료, 작업치료, 약물치료 등 포괄적인 재활치료를 시행하여 환자분이 정상적인 생활로 빠르게 복귀 할 수 있도록 하는 데 목적을 두고 있습니다. 실력 있는 전문의와 첨단 시설을 갖추어 체계적인 치료를 시행합니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors20.png\" alt=\"재활의학과 의료진\" /></div>
			";
		break;


				//가정의학과
		case "X" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>가정의학과</dt>
					<dd>
						<p>전 연령에 걸쳐 환자와 그 가족에게 개별적이고 지속적이며 포괄적인 의료서비스를 제공합니다.</p>
					</dd>
					<dd>가정의학과에서는 연령, 성별에 관계 없이 전반적인 건강관련 문제를 통합적으로 평가하고 관리하고 있습니다. 종합 검진, 성인병 검진 및 그 외의 신체검진을 담당하여 질환이 발견되는 경우 가장 적절한 치료를 받을 수 있도록 돕고, 상담과 교육을 통해 질병의 예방을 돕는 역할을 하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors21.png\" alt=\"가정의학과 의료진\" /></div>
			";
		break;


				//감염내과
		case "Y" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>감염내과</dt>
					<dd>
						<p>각종 미생물에 의한 감염병은 물론 원인을 모르는 열병, 에이즈, 결핵 환자 등을 진료하고 있습니다.</p>
					</dd>
					<dd>감염내과는 미생물에 의해 발생하는 모든 감염질환을 진단하고 치료하는 진료과로서 각종 장기에 발생하는 감염 질환과 패혈증 환자를 주로 진료합니다. 감염내과는 병원 내 전반에 걸친 감염관리를 담당하고 모니터하며, 타과의 감염과 관련된 협의진료를 진행하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors22.png\" alt=\"감염내과 의료진\" /></div>
			";
		break;

						//정신건강의학과
		case "Z" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>정신건강의학과</dt>
					<dd>
						<p>사람의 사고와 행동, 감정 등의 이상에 대한 진단과 치료를 당담하고 있습니다.</p>
					</dd>
					<dd>정신건강의학과는 인간의 정신에 대해 연구하며, 정신장애를 진단 및 치료하고, 정신건강 증진을 도모하는 진료과목입니다. 정신건강의학과는 불안, 스트레스, 우울증, 수면장애, 정신신체질환 등 다양한 정신건강 문제에 대한 진단과 치료를 진행합니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors23.png\" alt=\"정신건강의학과 의료진\" /></div>
			";
		break;

								//직업환경의학과
		case "AA" :
			echo "

				<dl class=\"clinicTxt01\">
					<dt>직업환경의학과</dt>
					<dd>
						<p>직업환경의학과는 직업병에 대한 치료, 재활 등을 전문적으로 판단하고 진찰하는 과목입니다.</p>
					</dd>
					<dd>사업현장에서 일하는 사람들의 건강을 유지, 증진하고 질병을 예방하기 위한 진료 과목입니다. 직업을 가지면서 얻게 되는 질병을 예방하고 신체적, 정신적, 사회적 등의 건강을 우선시하여 직업성 질환과 비직업성 질환을 포괄하여 근로자의 건강을 관리합니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors24.png\" alt=\"직업환경의학과 의료진\" /></div>
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