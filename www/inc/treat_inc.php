<div class="clinicInforTop type1">
<?
	$tr_type = "A";
	
	if($_GET['tr_type'] != "") {
		$tr_type = $_GET['tr_type'];
	}
	
	switch($tr_type) {
		
		//정형외과
		case "A" : 
			echo "
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors.png\" alt=\"정형외과 의료진\" /></div>
				<dl>
					<dt>정형외과</dt>
					<dd>
						<p class=\"txtSubDesc\">정형외과는 사지와 척추에 있는 뼈와 관절, 근육, 인대, 신경 및 혈관에 대한 질환과 외상을 진단하고 치료하는 분야입니다. </p>
					</dd>
					<dd>
						뼈, 관절, 근육, 힘줄, 인대 등의 운동 기관을 비롯하여 이것을 지배하는 혈관, 척수, 말초신경의 기형, 변형, 염증, 종양, 대사질환 등의 여러 질환 및 골절, 탈구, 염좌, 단열, 타박상 등 외상의 병리를 추구하고 이런 것들의 진단과 치료를 하고 있습니다.
					</dd>
					<dd>
						본원 정형외과는 <strong>관절전문센터와 외상전문센터</strong>를 운영하고 있습니다.
					</dd>
				</dl>
			";
		break;
		
		
		//신경외과
		case "B" : 
			echo "
				<dl class=\"clinicTxt01\">
					<dt>신경외과</dt>
					<dd>
						<p>신경외과는 뇌와 척수, 뇌신경과 척수신경<br /> 등 신경계의 여러 질환을 수술로<br /> 치료합니다. </p>
					</dd>
					<dd>
						본원 신경외과는 척추센터와 뇌혈관센터로 구성되어 있으며, 환자의 척추관련<br />  질환과 뇌혈관질환을 진료하고 있습니다. 목과 허리 통증, 각종 척추관련<br /> 질환으로 고통 받는 환자들을 위해 최첨단 진단 장비를 이용한 특수 검사를<br /> 진행하고 최신 수술기법을 적용하고 있습니다. 
					</dd>
					<dd>
						또한 지역주민들을 위해 설립한 <strong>뇌혈관센터는 외래진료실과 응급실</strong>이 갖춰져<br /> 있고, 병실이 증축되어 위급한 환자들의 소중한 생명을 살리는데 큰 도움이<br /> 되고 있습니다. 최신 시설과 최고의 의료진으로 구성되어 뇌졸증이나 뇌출혈을<br /> 비롯한 뇌혈관질환을 정확하고 안전하게 진료합니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors02.png\" alt=\"신경외과 의료진\" /></div>
			";
		break;
		
		//내과
		case "C" : 
			echo "
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors03.png\" alt=\"내과 의료진\" /></div>
				<dl>
					<dt>내과</dt>
					<dd>
						<p class=\"txtSubDesc \">내과는 가장 근본적이고 범위가 넓은 진료과로서 담당 부위는 그 영역의 제한이 없으며 다른 분야와 중복될 수 있습니다.</p>
					</dd>
					<dd>
						소화기와 순환기, 호흡기, 내분비계, 신장, 혈액, 알레르기성, 신진대사, 류마티스 등의 다양한 질환이나 중독 등을 담당하고 있으며 고혈압,<br /> 동맥경화, 선천성 심질환 등 광범위한 심혈관계 질환을 진료하는 심장내과도 갖춰져 있습니다. 외상의 병리를 추구하고 이런 것들의 진단과 치료를 하고 있습니다.
					</dd>
					<dd>
						<strong>흉부외과와 협진</strong>해 더욱 정확한 치료효과를 기대할 수 있습니다.
					</dd>
				</dl>
			";
		break;
		
		
		//소아청소년과
		case "D" : 
			echo "
				<dl  class=\"clinicTxt01\">
					<dt>소아청소년과</dt>
					<dd>
						<p>소아청소년과는 신생아부터<br /> 청소년기까지의 환자를 대상으로<br /> 다양한 진료를 시행합니다. </p>
					</dd>
					<dd>
						각종 감염 및 예방접종관리, 호흡기 알레르기, 혈액 및 종양, 선천성 심장병,<Br /> 소아신경, 발달, 신생아, 육아상담 및 영양상담 등의 전문과목 질환을 중점<Br />  운영하고 있습니다. 아이들의 환한 미소와 부모님의 안심을 위해, 그리고<Br />  양질의 의료서비스를 제공하기 위해 최선을 다하고 있습니다. 
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors04.png\" alt=\"소아청소년과 의료진\" /></div>
			";
		break;
		
		
		//산부인과
		case "E" : 
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
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors05.png\" alt=\"산부인과 의료진\" /></div>
			";
		break;
		
		
		//마취통증의학과
		case "F" : 
			echo "
				
				<dl class=\"clinicTxt01\">
					<dt>마취통증의학과</dt>
					<dd>
						<p>마취통증의학과는 환자들의 마취와<br /> 통증을 관리하고, 중환자나 응급환자의<br />  소생을 담당합니다. </p>
					</dd>
					<dd>
						외과적 수술을 시행하기 위해 필요한 마취의학과 국소마취, 부위마취 등으로<br /> 난치 동통의 치료, 특히 신경통에 대한 통증치료를 담당하고 있습니다.<br /> 통증의학의 다양한 치료로 환자 삶의 질을 개선시키는 것은 물론 위급한<br /> 환자를 소생시키는데 최선을 다하고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors06.png\" alt=\"마취통증의학과 의료진\" /></div>
			";
		break;
		
		
		//응급의학과
		case "G" : 
			echo "
				<div class=\"clinicImg\"><img src=\"/images/content/img-center-doctors09.png\" alt=\"정형외과 의료진\" /></div>
				<dl class=\"clinicTxt01\">
					<dt>응급의학과</dt>
					<dd>
						<p>응급의학과는 신속하고 정확한<br /> 응급처치를 시행하는 분야로 가장 중요한<br /> 일차적인 의료 행위를 담당합니다.</p>
					</dd>
					<dd>
					경기북부 지역응급의료기관인 본원 응급의학과는 각종 응급사태 및 내과적, 외과적 증상을 다루고 있으며, 응급의학전문의가 365일 24시간 상주하고 있습니다. MRI, CT, 초음파 등 최신 의료장비를 보유했고 환자가 시간과 상황에 구애 받지 않고 진료받을 수 있도록 <strong>‘One-Stop Total Service’</strong> 체계를 갖추고 있습니다.
					</dd>
				</dl>
			";
		break;
		
		
		//평생건강증진센터
		case "H" : 
			echo "
				<dl class=\"clinicTxt01\">
					<dt>평생건강증진센터</dt>
					<dd>
						<p>평생건강증진센터는 맞춤 건강프로그램과 전문 의료진을 통해 환자의 체계적인 건강 증진을 도모합니다.</p>
					</dd>
					<dd>
						각 개인별 건강진단과 위험요인을 고려한 1:1프로그램을 실행하고 있으며,<br /> 환자가 편안한 심신 상태에서 건강해질 수 있는 환경을 제공합니다. 개별적인 <br />건강관리는 물론 가족 단위로도 관리가 가능하며, 풍부한 경험의 전문<br /> 의료진이 <strong>최신 장비와 최상</strong>의 환경으로 환자 건강을 지켜주고 있습니다.
					</dd>
				</dl>
				<div class=\"clinicImg\"><img src=\"/images/content/img-doctors08.png\" alt=\"평생건강증진센터 의료진\" /></div>
			";
		break;
		
		
		//일반외과
		case "I" : 
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
		case "J" : 
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
		case "K" : 
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
		
		
		//치과
		case "L" : 
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
		case "M" : 
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
		case "N" : 
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
		
	}
?>
</div>