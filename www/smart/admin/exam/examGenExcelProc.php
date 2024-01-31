<?

testing_dsp("post");

testing_dsp("excel : $uploadFile");

require_once '../phpExcelReader/Excel/reader.php';

// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();


// Set output Encoding.
$data->setOutputEncoding('UTF8');

$data->read("$uploadFile");

error_reporting(E_ALL ^ E_NOTICE);

$k=0;

$row_num = $data->sheets[0]['numRows'] ;
$col_num = $data->sheets[0]['numCols'] ;

echo "row_num / col : $row_num / $col_num	" ;
echo " <br>";

//exit;
//==== excel 셀의 첫 부분이 "검진번호" 인지 확인 

$check = $data->sheets[0]['cells'][1][1] ;
if($check != "수검자명")
{
	echo "<script language='JavaScript'>alert('엑셀파일이 잘못되었습니다. 파일을 확인해주세요 ');</script>";
	exit;
}


//=============== 처음 item 셀의 목록을 체크
$item_str = "";
for ($i = 1; $i <= $data->sheets[0]['numCols']; $i++) {

	
	$c0 = $data->sheets[0]['cells'][1][$i] ;

	$ori_c0 = $c0 ;
	$c0 = eli($c0);

	//== 일반소견 별도 처리 


	if($c0 == "수검자명") $name_no = $i ;
	if($c0 == "주민번호") $ssn_no = $i ;
	if($c0 == "검진일자") $exam_date_no = $i ;
	if($c0 == "휴대폰번호") $mobile_no = $i ;


	if($c0 == "검진번호") // 첫번째 셀처리
	{
		$item_str = $c0 ;
		$item_ori_str = $ori_c0 ;
		$startup_no = $i;
	}
	else if($c0 == "일반소견")//== 일반소견 별도 처리 
	{
		//$doc_view = $c0 ;
		$docview_no = $i; // 일반소견이 들어있는 번호
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


	
}

//exit;


//=============== data 셀의 목록을 체크
for ($k =  2 ; $k <= $data->sheets[0]['numRows']; $k++) 
{

	$data_str = "";
	$ori_str = "";

	$serial_no = "" ;
	$name = "" ;
	$ssn = "" ;
	$exam_date = "" ;
	$mobile = "" ;
	$sex = "";

	for ($i = 1; $i <= $data->sheets[0]['numCols']; $i++) {

		
		$c0_ori = $data->sheets[0]['cells'][$k][$i] ;

		$c0 = htmlspecialchars($c0_ori);
		

		//== 일반소견 별도 처리 


		if($i == $startup_no) $serial_no = $c0 ;
		if($i == $name_no) $name = $c0 ;
		if($i == $ssn_no) $ssn = $c0 ;
		if($i == $exam_date_no) $exam_date = $c0 ;
		if($i == $mobile_no) $mobile = $c0 ;

		$sex = substr($ssn,7,1);
		if($sex == "1") $sex = "남";
		else if($sex == "2") $sex = "여";


		
		if($i == $startup_no) //== 처음 시작
		{
			$data_str .= $c0 ;
			$ori_str .= $c0 ;

		}
		else if($i == $docview_no)//== 일반소견 별도 처리 
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


	$exam_date_tmp = explode("/", $exam_date) ;
	$exam_date = $exam_date_tmp[2] ."-". $exam_date_tmp[1]."-". $exam_date_tmp[0] ;

	$data_str_arr[] = $data_str ;
	$ori_str_arr[] = $ori_str ;

	$serial_no_arr[] = $serial_no ;
	$name_arr[] = $name ;
	$ssn_arr[] = $ssn ;
	$exam_date_arr[] =$exam_date ;
	$mobile_arr[] = $mobile ;
	$sex_arr[] = $sex ;

	$docview_arr[] = $docview ; 
}

testing_dsp("dataItme : $data_str") ;
testing_dsp("oirItme : $ori_str") ;
testing_dsp("docview : $docview") ;

testing_dsp("startup_no : $startup_no") ;

print_r($data_str_arr);





?>
