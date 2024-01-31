<?

testing_dsp("post");

testing_dsp("excel : $uploadFile");

ini_set('memory_limit','256M');

/*
require_once '../phpExcelReader/Excel/reader.php';
// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();
// Set output Encoding.
$data->setOutputEncoding('UTF8');
$data->read("$uploadFile");
*/
error_reporting(E_ALL ^ E_NOTICE);

require_once "../PHPExcel/Classes/PHPExcel.php";


PHPExcel_Settings::setZipClass(PHPExcel_Settings::PCLZIP);
$tmpfname = "$uploadFile";
$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
$excelObj = $excelReader->load($tmpfname);
$worksheet = $excelObj->getSheet(0);
$lastRow = $worksheet->getHighestRow();
$lastCol = $worksheet->getHighestColumn();

$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($lastCol);

echo "$lastRow || $highestColumnIndex <p>" ;



$k=0;

$row_num = $lastRow ;
$col_num = $highestColumnIndex ;

echo "row_num / col : $lastRow / $highestColumnIndex	" ;
echo " <br>";


//exit;

//==== excel 셀의 첫 부분이 "챠트번호" 인지 확인 

//=============== 처음 item 셀의 목록을 체크
$item_str = "";
for ($i = 0; $i <= $col_num ; $i++) {

	
	$c0 =  trim($worksheet->getCellByColumnAndRow($i, 1)) ;
	
	$ori_c0 = $c0 ;
	$c0 = eli($c0);

	//== 소견텍스트 별도 처리 


	if($c0 == "성명") 
	{
		testing_dsp("성명 ==> $c0 [$i]") ;
		$name_no = $i ;
	}
	if($c0 == "주민번호") $ssn_no = $i ;
	if($c0 == "검진일자") $exam_date_no = $i ;
	if($c0 == "핸드폰번호") $mobile_no = $i ;


	//if($c0 == "주민번호1") $birth_date_no = $i ;
	if($c0 == "성별MF")
	{
		testing_dsp("성별MF ==> $c0 ") ;
		$sex_no = $i ;
	}


	if($c0 == "검진번호") // 첫번째 셀처리
	{
		testing_dsp("검진번호 ==> $c0 ") ;

		$serial_no  = $i;
		$item_str .= "&&".$c0 ;
		$item_ori_str .= "&&".$ori_c0 ;
		//$startup_no = $i;
	}
	else if($c0 == "소견텍스트")//== 소견텍스트 별도 처리 
	{
		testing_dsp("소견텍스트 ==> $c0 ") ;

		//$doc_view = $c0 ;
		$docview_no = $i; // 소견텍스트이 들어있는 번호
		$docview = $c0 ;
		$item_str .= "&&".$c0 ;
		$item_ori_str .= "&&".$ori_c0 ;
	}
	else  
	{
		$item_str .= "&&".$c0 ;
		$item_ori_str .= "&&".$ori_c0 ;
	}
	
	//echo "<br> $i >> $c0  >> \$row[".$c0."]"; ;
	echo "<br>[$i] $c0";
}


//exit;
	//echo "serial_no : $serial_no";
	//exit;


//echo "item_str : $item_str" ;
//testing_dsp("item_str <br> $item_str") ;




//=============== data 셀의 목록을 체크
for ($k =  2 ; $k <= $row_num ; $k++) 
{

	$data_str = "";
	$ori_str = "";

	$serial = "" ;
	$name = "" ;
	$ssn = "" ;
	$exam_date = "" ;
	$mobile = "" ;
	$sex = "";

	$birth_date = "";
	$mobile4 = "";

	for ($i = 0; $i <= $col_num ; $i++) {

		
		//$c0_ori = $data->sheets[0]['cells'][$k][$i] ;

		unset($c0_ori, $c0) ;

		$c0_ori = $worksheet->getCellByColumnAndRow($i, $k);

		$c0_ori =  str_replace("_x000D_", "\n",  $c0_ori) ; 

		$c0 = trim(htmlspecialchars($c0_ori));
		

		//== 소견텍스트 별도 처리 


		if($i == $serial_no) $serial = $c0 ;
		
		//if($i == $name_no || $i == 0) 
		if($i == 0) 
		{
			testing_dsp("<font color=red>namem : $c0</font>") ;
			$name = $c0 ;
		}
		if($i == $ssn_no) $ssn = $c0 ;
		if($i == $exam_date_no) $exam_date = $c0 ;
		if($i == $mobile_no) 
		{
				testing_dsp("<font color=red>mobile : $c0</font>") ;
				$mobile = $c0 ;
		}
		if($i == $birth_date_no) $birth_date =  $c0 ;
		if($i == $sex_no) $sex =  $c0 ;

		
		

		
		if($i == $startup_no) //== 처음 시작
		{
			$data_str .= "&&".$c0 ;
			$ori_str .= "&&".$c0 ;

		}
		else if($i == $docview_no)//== 소견텍스트 별도 처리 
		{
			//$doc_view = $c0 ;
			$docview = $c0 ;
			$data_str .= "&&".$c0 ;
			$ori_str .= "&&".$c0 ;
		}
		else  
		{
			$data_str .= "&&".$c0 ;
			$ori_str .= "&&".$c0 ;
		}
		
		//echo "<br><br><br>== check : $serial_no || $name   || $ssn  || $exam_date   || $mobile  || $sex == <br> $i >> $c0  <br> "; ;	

		
	}


	//================= 주민번호에서 생년월일과 모바일 뒷자리 4자리 획득

	//$birth_date =  substr($ssn, 0, 6) ;
	$mobile4 = substr($mobile, -4) ;

	testing_dsp("<font color=red>mobile4 : $mobile4</font>") ;


	

	//$exam_date_tmp = explode("/", $exam_date) ;
	//$exam_date = $exam_date_tmp[2] ."-". $exam_date_tmp[1]."-". $exam_date_tmp[0] ;

	//=============== 개인정보 암호화 
	//$mobile = base64_encode($mobile) ;

	$mobile = $mobile ;
	$ssn = base64_encode($ssn) ;

	$data_str_arr[] = $data_str ;
	$ori_str_arr[] = $ori_str ;

	$serial_no_arr[] = $serial ;
	$name_arr[] = $name ;
	$ssn_arr[] = $ssn ;
	$exam_date_arr[] =$exam_date ;
	$mobile_arr[] = $mobile ;
	$sex_arr[] = $sex ;
	$birth_date_arr[] = $birth_date ;

	$docview_arr[] = $docview ; 

	$mobile4_arr[] = $mobile4 ;

	echo "<p>zzzz => $name >> $serial_no |||| $birth_date >> $mobile4  " ;
}

//exit;
//exit;
/*
testing_dsp("dataItme : $data_str") ;
echo "<p><p>" ;
testing_dsp("oirItme : $ori_str") ;
echo "<p><p>" ;
*/

testing_dsp("docview : $docview") ;
echo "<p><p>" ;
testing_dsp("serial_no : $serial_no") ;

echo "<p>name_arr<p>" ;
testing_dsp($name_arr) ;


echo "<p>mobile4_arr<p>" ;
testing_dsp($mobile4_arr) ;



//exit;







?>
