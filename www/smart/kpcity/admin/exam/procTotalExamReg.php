<?
session_start();
include "../../inc/dbConn.php";
include "../../inc/chkLogin.php";
include "../../inc/func.php";

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);


header("Content-Type:text/html;charset=utf-8") ;
$DOCUMENT_ROOT = $DOCUMENT_ROOT."/21chana/";

mysql_query("set names utf8;");

testing_dsp("post");



//===================== file 처리 ==================


$cntFile = count($upFile);


for($i = 0; $i < $cntFile; $i++) {

	echo $_FILES['upFile']['size'][$i]."<br>";

	$uMega = 20 ;
	$maxSize  = 1024*1024* $uMega ;  // 20M

	if($_FILES['upFile']['size'][$i] > $maxSize) {
		echo "<script>alert('업로드 제한 용량(".$uMegaMB.")을 초과한 파일이 존재합니다.'); history.go(-1);</script>";
		exit;
	}

	if($_FILES['upFile']['size'][$i] > 0) {
		$j = $i + 1;

		/*
		$fileNo = "file".$j;
		$fileName = "file_name".$j;
		$fileTitle = "file_title".$j;
		*/

		$fileName = $_FILES['upFile']['name'][0];
		$newFile = $fileName;
		$newFile = preg_replace("/\s+/", "", $newFile);


		$nowTime = $today_time = date('YmdHis', time());
		$newFile = $nowTime."_".$newFile ;		
		$uploadDir = $DOCUMENT_ROOT."/admin/exam/upExcel/" ;
		$uploadFile = $uploadDir.$newFile;


testing_dsp("$uploadFile");			

		if(move_uploaded_file($_FILES['upFile']['tmp_name'][$i], $uploadFile))
		{

			testing_dsp("업로드 성공 : $uploadFile");
		}

		
		include $DOCUMENT_ROOT."/admin/exam/examTotalExcelProc.php" ;

		

	}
}

//===================== file 처리 ==================


if($mode == "totalExam") {


	//=================  엑셀 파일의 데이터가 몇개인지를 체크 
	$data_count = count($data_str_arr) ;

	if($data_count < 1)  echo "<script language='JavaScript'>alert('엑셀파일의 데이터가 없습니다. 파일을 확인해주세요 ');</script>";


	testing_dsp("proc file ::::: $data_count") ;
	testing_dsp($item_str) ;
	testing_dsp($doc_view) ;


	$sql = 
		"
			INSERT INTO `hana_category_item`
			(
			 `exam_title`,
			 `file_name`,
			 `item_str`,
			  `item_ori_str`,
			 `category`,
			 
			 `state`,
			 `use_yn`,
			 `view_state`,
			 `reg_date`
			 )
			VALUES (
					'$exam_title',
					'$newFile',
					'$item_str',
					'$item_ori_str',
					'$category',

					'Y',
					'Y',
					'Y',
					NOW()
					);
	" ;


	testing_dsp("$sql");

	mysql_query($sql);



	$exam_seq = mysql_insert_id();

	//================ 실 데이터값 입력

	for($i=0 ; $i < $data_count ; $i++)
	{

		$data_str = "" ;
		$ori_str = "" ;


		$data_str = $data_str_arr[$i] ;
		$ori_str = $ori_str_arr[$i] ;

		$serial_no = $serial_no_arr[$i] ;
		$name = $name_arr[$i] ;
		$ssn = $ssn_arr[$i] ;
		$exam_date = $exam_date_arr[$i] ;
		$mobile = $mobile_arr[$i] ;
		$sex = $sex_arr[$i] ;
		$docview =  $docview_arr[$i]  ;


		$sql = 
		"
			INSERT INTO `hana_category_item_data`
			(
			 `exam_title`,
			 `file_name`,
			 `item_str`,
			 `category`,

			 `data_str`,
			 `ori_str`,
			 `exam_seq`,
			 `docview`,

			 `serial_no`,
			 `name`,
			 `ssn`,
			 `exam_date`,
			 `mobile`,
			 `sex`,

			 
			 `state`,
			 `use_yn`,
			 `view_state`,
			 `reg_date`
			 )
			VALUES (
					'$exam_title',
					'$newFile',
					'$item_str',
					'$category',

					'$data_str',
					'$ori_str',
					'$exam_seq',
					'$docview',					

					'$serial_no',
					'$name',
					'$ssn',
					'$exam_date',
					'$mobile',
					'$sex',


					'Y',
					'Y',
					'Y',
					NOW()
					);
		" ;


		testing_dsp("$sql");
		
		mysql_query($sql);

	}

	echo "<script language='JavaScript'>alert('종합검진 결과가 등록 되었습니다.');</script>";
	echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."'</script>";

	exit;




}
else if($mode == "modify" && $seq) {

}
else if($mode == "del" && $seq) {

	
}
?>
