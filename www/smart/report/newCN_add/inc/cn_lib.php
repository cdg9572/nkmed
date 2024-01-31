<?


function esti_jian($item_kr, $sex = "m")
{
	$sql = "select * from jian_esti where item_kr = '$item_kr' ORDER BY reg_date DESC" ;

    //echo "<br>$sql<br>" ;

	$res = MYSQL_QUERY($sql) or die(mysql_error()) ;
	$row = mysql_fetch_array($res) ;

	$low = $sex."_low" ;
	$high = $sex."_high" ;

	if($sex == "M")
	{
		$esti_arr[low] = $row[m_low] ;
		$esti_arr[high] = $row[m_high] ;
	}
	else 
	{
		$esti_arr[low] = $row[f_low] ;
		$esti_arr[high] = $row[f_high] ;
	}

	$esti_arr[min] = $row[min] ;
	$esti_arr[max] = $row[max] ;
	
	$esti_arr[unit] = $row[unit] ;

	
	if($esti_arr[low] == $esti_arr[high] && !($esti_arr[low] == "0" && $esti_arr[high] == "0"))
	{
		$esti_arr[esti_str] = $esti_str = $esti_arr[low] ;
	}
	else if($esti_arr[low] == "0" && $esti_arr[high] == "0")
	{
		$esti_arr[esti_str] = $esti_str = $esti_arr[low]."~".$esti_arr[high] ;

		//echo "<br>estti XXXXXX:  $item_kr : $esti_str <br> :" ;
	}
	else 
	{
		$esti_arr[esti_str] = $esti_str = $esti_arr[low]."~".$esti_arr[high] ;
	}

	


	$esti_arr[item] = $item_kr ;

	/*
	echo "$item_kr :" ;
	print_r($esti_arr) ;
	echo "<br><p>" ;
	*/

	//echo "$item_kr : $esti_str <br> :" ;

	if($esti_str == "~") return "" ;
	else return $esti_arr ;


}



function get_infoM($no) 
{
	$sql = "select * from info_magazine where serial_no = '$no' ORDER BY reg_date DESC" ;

    //echo "<br>$sql<br>" ;

	$res = MYSQL_QUERY($sql) or die(mysql_error()) ;
	$row = mysql_fetch_array($res) ;

	//$data[title] = $row[title_kr] ;
	//$data[desc] = $row[desc_kr] ;

	$data[title] = $row[title_cn] ;
	$data[desc] = $row[desc_cn] ;

	return $data ;


}


function trans_item_j2h($jian) 
{
	//echo "<br> hanaro : $jian <br> ";

	$sql = "select * from standard_item where jian = '$jian' ORDER BY reg_date DESC" ;

    //echo "<br>$sql<br>" ;

	$res = MYSQL_QUERY($sql) or die(mysql_error()) ;
	$row = mysql_fetch_array($res) ;

	if($row[hanaro])
	{
		if($row[hanaro] == "체중_Weight_" ) $row[hanaro]  = 체　중_Weight_ ;
		if($row[hanaro] == "신장_Height_" ) $row[hanaro]  = 신　장_Height_ ;

		return $row[hanaro] ;
	}

	else return $jian ;

}

//============= 아이템으로 출력되는 중국어버젼 항목명 출력
function getitem2name($item) 
{
	$CN_NAME["비만도_BMI_"] = tr_cn("체질량지수(BMI)", $tr_check) ;

	$CN_NAME["Total_Protein"] = tr_cn("총단백", $tr_check) ;
	$CN_NAME["Albumin"] = tr_cn("알부민", $tr_check) ; 
	$CN_NAME["Globulin_"] = tr_cn("글로부린", $tr_check) ; 
	$CN_NAME["A_GRatio_"] = tr_cn("A/G비율", $tr_check) ; 
	$CN_NAME["TBilirubin"] = tr_cn("총빌리루빈", $tr_check) ; 
	$CN_NAME["DBilirubin"] = tr_cn("직접빌리루빈", $tr_check) ; 
	$CN_NAME["BilirubinINDIR_"] = tr_cn("간접빌리루빈", $tr_check) ; 
	$CN_NAME["SGOT_AST_"] = tr_cn("AST(SGOT)", $tr_check) ; 
	$CN_NAME["SGPT_ALT_"] = tr_cn("ALT(SGPT)", $tr_check) ; 
	$CN_NAME["r_GTP"] = tr_cn("GGT(r-GTP)", $tr_check) ; 
	$CN_NAME["Alkphosphat"] = tr_cn("ALP", $tr_check) ; 
	$CN_NAME["AFP_CLIA_"] = tr_cn("AFP(간암검사)", $tr_check) ; 
	$CN_NAME["HAVIgG"] = tr_cn("A형간염", $tr_check) ; 
	$CN_NAME["HBsAg_CLIA_"] = tr_cn("B형간염 항원", $tr_check) ; 
	$CN_NAME["HBsAb_CLIA_"] = tr_cn("B형간염 항체", $tr_check) ; 
	$CN_NAME["HCV_Ab"] = tr_cn("C형간염", $tr_check) ; 

	$CN_NAME["Amylase"] = tr_cn("아밀라제", $tr_check) ; 
	$CN_NAME["Glucose"] = tr_cn("혈당", $tr_check) ; 

	$CN_NAME["BUN"] = "BUN(".tr_cn("요소질소", $tr_check).")" ; 
	$CN_NAME["Creatinine"] = tr_cn("Creatinine", $tr_check) ; 
	$CN_NAME["BUN_Creatinineratio_"] = tr_cn("B/C비율", $tr_check) ; 
	$CN_NAME["Glucose_U_"] = tr_cn("요당", $tr_check) ; 
	$CN_NAME["Bilirubin"] = tr_cn("요빌리루빈", $tr_check) ; 
	$CN_NAME["KetoneBodies"] = tr_cn("요케톤", $tr_check) ; 
	$CN_NAME["SpecificG"] = tr_cn("요비중", $tr_check) ; 
	$CN_NAME["PH_U_"] = tr_cn("요산도", $tr_check) ; 
	$CN_NAME["Protein_U_"] = tr_cn("요단백", $tr_check) ; 
	$CN_NAME["Blood_U_"] = tr_cn("요적혈구", $tr_check) ; 
	$CN_NAME["WBC_U_"] = tr_cn("요백혈구", $tr_check) ; 
	$CN_NAME["Urobilinogen"] = tr_cn("유로빌리노겐", $tr_check) ; 
	$CN_NAME["Nitrite"] = tr_cn("아질산염", $tr_check) ; 


	$CN_NAME["혈압_고_BP"] = "血&#21387;"."收&#32553;期" ; 
	$CN_NAME["혈압_저_BP"] = "血&#21387;"."舒&#24352;期" ; 
	$CN_NAME["CPKtotal"] = tr_cn("CPK ", $tr_check) ; 
	$CN_NAME["LDH"] = tr_cn("유산탈수효소", $tr_check) ; 
	$CN_NAME["CRP정성_Qualitative_"] = "CRP(". tr_cn("C-반응단백", $tr_check) .")" ; 
	$CN_NAME["Cholesterol"] =  "&#24635;&#32966;固醇(T. Cholesterol)" ;
	$CN_NAME["HDL_Cholesterol"] = "HDL-&#32966;固醇 " ;
	$CN_NAME["LDL_Cholesterol_"] = "LDL-&#32966;固醇" ;
	$CN_NAME["Triglyceride"] = "甘油 三&#37231;(Triglyceride)" ;
	$CN_NAME["Cardiacriskfactor_"] = tr_cn("심장병발생위험지수", $tr_check) ; 

	$CN_NAME["FreeT3"] = "三&#30872;甲腺原&#27688;酸" ;
	$CN_NAME["FreeT4"] = "游&#31163;三&#30872;甲腺原&#27688;酸" ;
	$CN_NAME["TSH"] = "甲&#29366;腺刺激激素" ;

	$CN_NAME["PSA_CLIA_"] = tr_cn("PSA", $tr_check) ; 
	$CN_NAME["WBC"] = "白血球 " ;
	$CN_NAME["RBC"] = "&#32418;血球" ;
	$CN_NAME["Hemoglobin"] = " 血色素" ;
	$CN_NAME["HCT"] = tr_cn("헤마토크리트", $tr_check) ; 
	$CN_NAME["Platelet"] = tr_cn("Platelets", $tr_check) ; 
	$CN_NAME["MCV"] = tr_cn("MCV", $tr_check) ; 
	$CN_NAME["MCH"] = tr_cn("MCH", $tr_check) ; 
	$CN_NAME["MCHC"] = tr_cn("MCHC", $tr_check) ; 
	$CN_NAME["RDW"] = tr_cn("RDW", $tr_check) ; 
	$CN_NAME["MPV"] = tr_cn("MPV", $tr_check) ; 
	$CN_NAME["RDW"] = tr_cn("RDW", $tr_check) ; 
	$CN_NAME["Band"] = tr_cn("Band", $tr_check) ; 
	$CN_NAME["Segment"] = tr_cn("Seg", $tr_check) ; 
	$CN_NAME["Lymphocyte"] = tr_cn("Lymp", $tr_check) ; 
	$CN_NAME["Monocyte"] = tr_cn("Mono", $tr_check) ; 
	$CN_NAME["Eosinophil"] = tr_cn("Eosin", $tr_check) ; 
	$CN_NAME["Basophil"] = tr_cn("Baso", $tr_check) ; 
	$CN_NAME["Metamyeloctye"] = tr_cn("Metamyelocyte", $tr_check) ; 
	$CN_NAME["Myelocyte"] = tr_cn("Myelocyte", $tr_check) ; 
	$CN_NAME["Myeloblast"] = tr_cn("Myeloblast", $tr_check) ; 
	$CN_NAME["NucleatedRBC"] = tr_cn("N.RBC", $tr_check) ; 
	$CN_NAME["Promyelocyte"] = tr_cn("Promyelocyte", $tr_check) ; 

	$CN_NAME["Iron_Fe_"] = "血&#28165;&#38081; (Fe)" ;
	$CN_NAME["UIBC"] = "不&#39281;和&#32467;合力( (UIBC)" ;
	$CN_NAME["TIBC_"] = "&#24635;&#38081;&#32467;合力 (TIBC)" ;


	$CN_NAME["Uricacid"] = "尿酸 (Uric Acid)";
	$CN_NAME["RAFactor"] = "&#31867;&#39118;&#28287;因子(RF)";
	$CN_NAME["RPR정성_Qualitative_"] = "梅毒&#26816;&#26597;";
	$CN_NAME["HIV_Ab_ⅠⅡ_"] = "HIVAb";
	$CN_NAME["Sodium_Na_"] = "Na (&#38048;)";
	$CN_NAME["Potassium_K_"] = "K(&#38078;)";
	$CN_NAME["Chloride_Cl_"] = "Cl(&#27695;&#31163;子)";
	$CN_NAME["Calcium_Ca_"] = "Ca(&#38041;)";
	$CN_NAME["Phosphorus_p_"] = "P(无机&#30967;)";
	$CN_NAME["Magnesium_Mg_"] = "Mg(&#38209;)";
	$CN_NAME["CEA"] = "CEA";
	$CN_NAME["CA19_9"] = "CA19-9";
	$CN_NAME["GFR_"] = tr_cn("GFR", $tr_check) ; 


	$CN_NAME["폐활량진단PFTest"] = tr_cn("폐기능검사", $tr_check) ; 
	$CN_NAME["청력진단HearingEvalution"] = tr_cn("청력", $tr_check).tr_cn("진단", $tr_check) ; 
	$CN_NAME["복부지방율Waisthipratio"] = tr_cn("체질량지수(BMI)", $tr_check) ; 
	$CN_NAME["안압진단EvaluationofIOP"] = tr_cn("안압", $tr_check).tr_cn("진단", $tr_check) ; 
	$CN_NAME["안저Fundus"] = tr_cn("안저", $tr_check) ; 
	$CN_NAME["EKG_심전도_"] = "心&#30005;&#22270;" ; 
	$CN_NAME["동맥경화협착진단ArteriosclerosisExam"]  = tr_cn("", $tr_check) ; 
	$CN_NAME["ChestPA_흉부촬영_"] = "Chest PA(".tr_cn("흉부촬영" , $tr_check).")"  ; 
	$CN_NAME["Brain_torsoPET"] = "Brain,torso PET" ; 
	$CN_NAME["Endoscopy_위내시경_"] = tr_cn("위내시경", $tr_check) ; 
	$CN_NAME["ThyroidSONO_갑상선_"] = tr_cn("갑상선", $tr_check) ; 
	$CN_NAME["LiverSONO_간_"] = tr_cn("초음파(간)", $tr_check) ; 
	$CN_NAME["GBSONO_담낭_"]  = tr_cn("초음파(담낭)", $tr_check) ; 
	$CN_NAME["KidneySONO_신장_"]  = tr_cn("신장초음파검사", $tr_check) ; 
	$CN_NAME["PancreasSONO_췌장_"] = tr_cn("췌장초음파", $tr_check) ; 
	
	$CN_NAME["SpleenSONO_비장_"] = tr_cn("초음파(비장)", $tr_check) ; 

	$CN_NAME["GBSONO_담낭_"] = tr_cn("초음파(담낭)", $tr_check) ; 


	$CN_NAME["Mammogram_유방촬영_"] = tr_cn("유방촬영", $tr_check) ; 
	$CN_NAME["BMDL_SpineAp_골밀도_"] = tr_cn("골다공증검사", $tr_check) ; 
	$CN_NAME["PelvisSONO_골반_"] = tr_cn("자궁 초음파(여)", $tr_check) ; 
	$CN_NAME["BreastSONO_유방_"] = tr_cn("유방초음파", $tr_check) ; 



	//print_r($CN_NAME) ;

	$name = $CN_NAME[$item] ;
	return $name ;
}


//===================== esti 변환 -- 범위
function kr2cn_replace($str)
{
	$str = str_replace("미만", "以下",  $str) ;

	$str = str_replace("이상", "以上",  $str) ;

	$str = str_replace("Nega 0-1.0", "Negative",  $str) ;
	$str = str_replace("Negative:<1.0", "Negative",  $str) ;
	$str = str_replace("Negative:<10.0", "Negative",  $str) ;
	$str = str_replace("Negative", "Negative",  $str) ;
//echo "<br>str : $str => $str<br>" ;

	return $str ;
}

//=== 공백제거 // 맨앞 숫자가 있을때 "_" 추가 // () -> _ 변경 // 마지막 * 제거 // "/" -> "_" 수정
function eli($str)
{
		$c0 = $str ;
		$c0 = preg_replace("/\s+/", "",  $c0) ;

		//echo "<br> 공백제거 : $c0 ";

		$c0 = str_replace("/", "_",  $c0) ;

		//echo "<br> \/ 제거 : $c0 ";

		preg_match("/^[0-9]*/", $c0, $n_check);
		if($n_check[0] ||$n_check[0] == "0" )
		{
			$c0 = "_".$c0 ;
		}
		//echo "<br>앞자리 숫자제거 : $c0" ;

		$c0 = str_replace("*", "_",  $c0) ;
		$c0 = str_replace("(", "_",  $c0) ;
		$c0 = str_replace(")", "_",  $c0) ;
		$c0 = str_replace("[", "_",  $c0) ;
		$c0 = str_replace("]", "_",  $c0) ;
		$c0 = str_replace(".", "",  $c0) ;
		$c0 = str_replace("/", "_",  $c0) ;
		$c0 = str_replace("-", "_",  $c0) ;
		$c0 = str_replace("-", "_",  $c0) ;
		$c0 = str_replace("+", "_",  $c0) ;
		$c0 = str_replace(",", "_",  $c0) ;

		

		//echo "<br> * ( ) -> _ : $c0" ;

		return $c0 ;
}


//== mult lang에서 임시 검색 문자열을 통한 중국어 추출 
function tr_cn($desc_kr, $tr_check =0) 
{
	
	$desc_kr = str_replace("Positive","&#38451;性", $desc_kr) ;
	$desc_kr = str_replace("Negative","&#38452;性", $desc_kr) ;

	

	if($tr_check == 1) 
	{
		return $desc_kr ;
		exit;
	}

	$desc_kr = preg_replace("/\s+/", "",  $desc_kr) ;


	$sql = "select * from multi_lan where desc_kr = '$desc_kr' ORDER BY reg_date DESC" ;


	$res = MYSQL_QUERY($sql) or die(mysql_error()) ;
	$row = mysql_fetch_array($res) ;


	$re = nl2br($row[desc_cn] ) ;

//echo "<br>$sql : $re <br>" ;

	if(!$re) 
	{
		return $desc_kr ;
	}
	else return $re ;
	
		
	//return $desc_kr ;
}	


//=== 칸 띄우기 

function h($height)
{
	$tt = $height."px";
	echo " 
		<div style='height:$tt ;'> </div> " ;
}


function testing_dsp2($str)
{

	$test_ip = '112.144.16.75' ;
	$r_addr = $_SERVER['REMOTE_ADDR'];


	if($r_addr == $test_ip)
	{
		if($str == "post")
		{
			$return = "<br>*** Post value *** <br>" ;
			foreach ($_POST as $k => $v) {
				$return .= "\$_POST[$k] => $v <br> ";
			}
			
		}
		else if($str == "get")
		{
			$return = "<br>*** Get value *** <br>" ;
			foreach ($_GET as $k => $v) {
				$return .= "\$_GET[$k] => $v <br> ";
			}
		}
		else if($str == "session")
		{
			$return = "<br>*** Session value *** <br>" ;
			foreach ($_SESSION as $k => $v) {
				$return .= "\$_SESSION[$k] => $v <br> ";
			}
		}
		else if(is_array($str))
		{
			$return = "<br>*** Array *** <br>" ;
			foreach ($str as $k => $v) {
				$return .= "\$data[$k] => $v <br> ";
			}
		}
		
		else
		{
			$return = "<br>*** string value *** <br>".$str ;
		}

		echo "$return <br> ******************** <br>";

	}

}


// === 배열 출력 
function arr_dsp($arr, $doc_root = "")
{

	
	echo "**<font  ><b> arr 출력 * $doc_root </b><br>
		 " ;

	foreach($arr as $key=>$value){

		/*
		echo "
				<tr>
				  <td>   $key   </td>
				  <td>    $value  </td>
				  <td>   $"."data"."[".$key."]   </td>
				</tr>
		" ;
		*/
		echo "&nbsp;&nbsp;&nbsp;".$key . " &nbsp;&nbsp; \t\t =>&nbsp;&nbsp; " . $value . "  || &nbsp;&nbsp;&nbsp;&nbsp; "."$"."data"."[".$key."]</br>"; 
	}

	//echo"</table><br></font>";

}

?>