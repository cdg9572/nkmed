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
		if($row[hanaro] == "ü��_Weight_" ) $row[hanaro]  = ü����_Weight_ ;
		if($row[hanaro] == "����_Height_" ) $row[hanaro]  = �š���_Height_ ;

		return $row[hanaro] ;
	}

	else return $jian ;

}

//============= ���������� ��µǴ� �߱������ �׸�� ���
function getitem2name($item) 
{
	$CN_NAME["�񸸵�_BMI_"] = tr_cn("ü��������(BMI)", $tr_check) ;

	$CN_NAME["Total_Protein"] = tr_cn("�Ѵܹ�", $tr_check) ;
	$CN_NAME["Albumin"] = tr_cn("�˺ι�", $tr_check) ; 
	$CN_NAME["Globulin_"] = tr_cn("�۷κθ�", $tr_check) ; 
	$CN_NAME["A_GRatio_"] = tr_cn("A/G����", $tr_check) ; 
	$CN_NAME["TBilirubin"] = tr_cn("�Ѻ������", $tr_check) ; 
	$CN_NAME["DBilirubin"] = tr_cn("�����������", $tr_check) ; 
	$CN_NAME["BilirubinINDIR_"] = tr_cn("�����������", $tr_check) ; 
	$CN_NAME["SGOT_AST_"] = tr_cn("AST(SGOT)", $tr_check) ; 
	$CN_NAME["SGPT_ALT_"] = tr_cn("ALT(SGPT)", $tr_check) ; 
	$CN_NAME["r_GTP"] = tr_cn("GGT(r-GTP)", $tr_check) ; 
	$CN_NAME["Alkphosphat"] = tr_cn("ALP", $tr_check) ; 
	$CN_NAME["AFP_CLIA_"] = tr_cn("AFP(���ϰ˻�)", $tr_check) ; 
	$CN_NAME["HAVIgG"] = tr_cn("A������", $tr_check) ; 
	$CN_NAME["HBsAg_CLIA_"] = tr_cn("B������ �׿�", $tr_check) ; 
	$CN_NAME["HBsAb_CLIA_"] = tr_cn("B������ ��ü", $tr_check) ; 
	$CN_NAME["HCV_Ab"] = tr_cn("C������", $tr_check) ; 

	$CN_NAME["Amylase"] = tr_cn("�ƹж���", $tr_check) ; 
	$CN_NAME["Glucose"] = tr_cn("����", $tr_check) ; 

	$CN_NAME["BUN"] = "BUN(".tr_cn("�������", $tr_check).")" ; 
	$CN_NAME["Creatinine"] = tr_cn("Creatinine", $tr_check) ; 
	$CN_NAME["BUN_Creatinineratio_"] = tr_cn("B/C����", $tr_check) ; 
	$CN_NAME["Glucose_U_"] = tr_cn("���", $tr_check) ; 
	$CN_NAME["Bilirubin"] = tr_cn("��������", $tr_check) ; 
	$CN_NAME["KetoneBodies"] = tr_cn("������", $tr_check) ; 
	$CN_NAME["SpecificG"] = tr_cn("�����", $tr_check) ; 
	$CN_NAME["PH_U_"] = tr_cn("��굵", $tr_check) ; 
	$CN_NAME["Protein_U_"] = tr_cn("��ܹ�", $tr_check) ; 
	$CN_NAME["Blood_U_"] = tr_cn("��������", $tr_check) ; 
	$CN_NAME["WBC_U_"] = tr_cn("�������", $tr_check) ; 
	$CN_NAME["Urobilinogen"] = tr_cn("���κ������", $tr_check) ; 
	$CN_NAME["Nitrite"] = tr_cn("�����꿰", $tr_check) ; 


	$CN_NAME["����_��_BP"] = "��&#21387;"."�&#32553;Ѣ" ; 
	$CN_NAME["����_��_BP"] = "��&#21387;"."�&#24352;Ѣ" ; 
	$CN_NAME["CPKtotal"] = tr_cn("CPK ", $tr_check) ; 
	$CN_NAME["LDH"] = tr_cn("����Ż��ȿ��", $tr_check) ; 
	$CN_NAME["CRP����_Qualitative_"] = "CRP(". tr_cn("C-�����ܹ�", $tr_check) .")" ; 
	$CN_NAME["Cholesterol"] =  "&#24635;&#32966;ͳ��(T. Cholesterol)" ;
	$CN_NAME["HDL_Cholesterol"] = "HDL-&#32966;ͳ�� " ;
	$CN_NAME["LDL_Cholesterol_"] = "LDL-&#32966;ͳ��" ;
	$CN_NAME["Triglyceride"] = "���� ߲&#37231;(Triglyceride)" ;
	$CN_NAME["Cardiacriskfactor_"] = tr_cn("���庴�߻���������", $tr_check) ; 

	$CN_NAME["FreeT3"] = "߲&#30872;ˣ���&#27688;߫" ;
	$CN_NAME["FreeT4"] = "��&#31163;߲&#30872;ˣ���&#27688;߫" ;
	$CN_NAME["TSH"] = "ˣ&#29366;���̭̭��" ;

	$CN_NAME["PSA_CLIA_"] = tr_cn("PSA", $tr_check) ; 
	$CN_NAME["WBC"] = "����Ϲ " ;
	$CN_NAME["RBC"] = "&#32418;��Ϲ" ;
	$CN_NAME["Hemoglobin"] = " ������" ;
	$CN_NAME["HCT"] = tr_cn("�츶��ũ��Ʈ", $tr_check) ; 
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

	$CN_NAME["Iron_Fe_"] = "��&#28165;&#38081; (Fe)" ;
	$CN_NAME["UIBC"] = "��&#39281;��&#32467;����( (UIBC)" ;
	$CN_NAME["TIBC_"] = "&#24635;&#38081;&#32467;���� (TIBC)" ;


	$CN_NAME["Uricacid"] = "��߫ (Uric Acid)";
	$CN_NAME["RAFactor"] = "&#31867;&#39118;&#28287;���(RF)";
	$CN_NAME["RPR����_Qualitative_"] = "��Ը&#26816;&#26597;";
	$CN_NAME["HIV_Ab_����_"] = "HIVAb";
	$CN_NAME["Sodium_Na_"] = "Na (&#38048;)";
	$CN_NAME["Potassium_K_"] = "K(&#38078;)";
	$CN_NAME["Chloride_Cl_"] = "Cl(&#27695;&#31163;�)";
	$CN_NAME["Calcium_Ca_"] = "Ca(&#38041;)";
	$CN_NAME["Phosphorus_p_"] = "P(����&#30967;)";
	$CN_NAME["Magnesium_Mg_"] = "Mg(&#38209;)";
	$CN_NAME["CEA"] = "CEA";
	$CN_NAME["CA19_9"] = "CA19-9";
	$CN_NAME["GFR_"] = tr_cn("GFR", $tr_check) ; 


	$CN_NAME["��Ȱ������PFTest"] = tr_cn("���ɰ˻�", $tr_check) ; 
	$CN_NAME["û������HearingEvalution"] = tr_cn("û��", $tr_check).tr_cn("����", $tr_check) ; 
	$CN_NAME["����������Waisthipratio"] = tr_cn("ü��������(BMI)", $tr_check) ; 
	$CN_NAME["�Ⱦ�����EvaluationofIOP"] = tr_cn("�Ⱦ�", $tr_check).tr_cn("����", $tr_check) ; 
	$CN_NAME["����Fundus"] = tr_cn("����", $tr_check) ; 
	$CN_NAME["EKG_������_"] = "��&#30005;&#22270;" ; 
	$CN_NAME["���ư�ȭ��������ArteriosclerosisExam"]  = tr_cn("", $tr_check) ; 
	$CN_NAME["ChestPA_����Կ�_"] = "Chest PA(".tr_cn("����Կ�" , $tr_check).")"  ; 
	$CN_NAME["Brain_torsoPET"] = "Brain,torso PET" ; 
	$CN_NAME["Endoscopy_�����ð�_"] = tr_cn("�����ð�", $tr_check) ; 
	$CN_NAME["ThyroidSONO_����_"] = tr_cn("����", $tr_check) ; 
	$CN_NAME["LiverSONO_��_"] = tr_cn("������(��)", $tr_check) ; 
	$CN_NAME["GBSONO_�㳶_"]  = tr_cn("������(�㳶)", $tr_check) ; 
	$CN_NAME["KidneySONO_����_"]  = tr_cn("���������İ˻�", $tr_check) ; 
	$CN_NAME["PancreasSONO_����_"] = tr_cn("����������", $tr_check) ; 
	
	$CN_NAME["SpleenSONO_����_"] = tr_cn("������(����)", $tr_check) ; 

	$CN_NAME["GBSONO_�㳶_"] = tr_cn("������(�㳶)", $tr_check) ; 


	$CN_NAME["Mammogram_�����Կ�_"] = tr_cn("�����Կ�", $tr_check) ; 
	$CN_NAME["BMDL_SpineAp_��е�_"] = tr_cn("��ٰ����˻�", $tr_check) ; 
	$CN_NAME["PelvisSONO_���_"] = tr_cn("�ڱ� ������(��)", $tr_check) ; 
	$CN_NAME["BreastSONO_����_"] = tr_cn("����������", $tr_check) ; 



	//print_r($CN_NAME) ;

	$name = $CN_NAME[$item] ;
	return $name ;
}


//===================== esti ��ȯ -- ����
function kr2cn_replace($str)
{
	$str = str_replace("�̸�", "���",  $str) ;

	$str = str_replace("�̻�", "�߾",  $str) ;

	$str = str_replace("Nega 0-1.0", "Negative",  $str) ;
	$str = str_replace("Negative:<1.0", "Negative",  $str) ;
	$str = str_replace("Negative:<10.0", "Negative",  $str) ;
	$str = str_replace("Negative", "Negative",  $str) ;
//echo "<br>str : $str => $str<br>" ;

	return $str ;
}

//=== �������� // �Ǿ� ���ڰ� ������ "_" �߰� // () -> _ ���� // ������ * ���� // "/" -> "_" ����
function eli($str)
{
		$c0 = $str ;
		$c0 = preg_replace("/\s+/", "",  $c0) ;

		//echo "<br> �������� : $c0 ";

		$c0 = str_replace("/", "_",  $c0) ;

		//echo "<br> \/ ���� : $c0 ";

		preg_match("/^[0-9]*/", $c0, $n_check);
		if($n_check[0] ||$n_check[0] == "0" )
		{
			$c0 = "_".$c0 ;
		}
		//echo "<br>���ڸ� �������� : $c0" ;

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


//== mult lang���� �ӽ� �˻� ���ڿ��� ���� �߱��� ���� 
function tr_cn($desc_kr, $tr_check =0) 
{
	
	$desc_kr = str_replace("Positive","&#38451;��", $desc_kr) ;
	$desc_kr = str_replace("Negative","&#38452;��", $desc_kr) ;

	

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


//=== ĭ ���� 

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


// === �迭 ��� 
function arr_dsp($arr, $doc_root = "")
{

	
	echo "**<font  ><b> arr ��� * $doc_root </b><br>
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