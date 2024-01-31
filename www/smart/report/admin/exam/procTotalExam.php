<?
session_start();
include "../../inc/dbConn.php";
include "../../inc/chkLogin.php";
include "../../inc/func.php";

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);


header("Content-Type:text/html;charset=utf-8") ;
$DOCUMENT_ROOT = $DOCUMENT_ROOT."/ibh/";

mysql_query("set names utf8;");

testing_dsp("post");
testing_dsp("get");

//exit;

//===================== file 처리 ==================

if($mode == "del" && $seq) {
	$sql = "update smart_image set use_yn='D' , view_state='D' where seq = $seq" ;
	mysql_query($sql);
	echo "<script language='JavaScript'>alert('이미지가 삭제 되었습니다.');</script>";
	echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."&item_data_seq=$item_data_seq&form=Write'</script>";
	
}
else
{

	$cntFile = count($upFile);

	testing_dsp($upFile);
	testing_dsp("cntFile : $cntFile");

	for($i = 0; $i < $cntFile; $i++) {

		//testing_dsp("size [$i / $cntFile]: $_FILES['upFile']['size'][$i] ") ;

		$uMega = 20 ;
		$maxSize  = 1024*1024* $uMega ;  // 20M

		if($_FILES['upFile']['size'][$i] > $maxSize) {
			echo "<script>alert('업로드 제한 용량(".$uMegaMB.")을 초과한 파일이 존재합니다.'); history.go(-1);</script>";
			exit;
		}

		if($_FILES['upFile']['size'][$i] > 0) {
			$j = $i ;

			/*
			$fileNo = "file".$j;
			$fileName = "file_name".$j;
			$fileTitle = "file_title".$j;
			*/

			$fileName = $_FILES['upFile']['name'][$j];
			$newFile = $fileName;
			$newFile = preg_replace("/\s+/", "", $newFile);


			$nowTime = $today_time = date('YmdHis', time());
			$newFile = $nowTime."_".$newFile ;		
			$uploadDir = "./upImage/" ;
			$uploadFile = $uploadDir.$newFile;


	//testing_dsp("$uploadFile");			

			if(move_uploaded_file($_FILES['upFile']['tmp_name'][$i], $uploadFile))
			{
				/*  썸네일 기능
				$thum = $uploadDir."thum_".$newFile;
				$thum_file = "thum_".$newFile;
				thumbnail($uploadFile,$thum,"300","600"); 
				unlink($uploadFile) ;
				*/

				$thum_file = $newFile;

				testing_dsp("업로드 성공 : $uploadFile");

				$sql = 
						"
							INSERT INTO `smart_image`
									(
									 `item_data_seq`,
									 `exam_title`,
									 `serial_no`,
									 `name`,
									 `exam_date`,
									 `file`,
									 `file1`,
									 `file2`,
									 `file3`,
									 `file4`,
									 `file5`,
									 `file6`,
									 `file7`,
									 `file8`,
									 `file9`,
									 `file10`,
									 `state`,
									 `use_yn`,
									 `view_state`,
									 `comment`,
									 `reg_date`)
						VALUES (
								'$item_data_seq',
								'$exam_title',
								'$serial_no',
								'$name',
								'$exam_date',
								'$thum_file',
								'$file1',
								'$file2',
								'$file3',
								'$file4',
								'$file5',
								'$file6',
								'$file7',
								'$file8',
								'$file9',
								'$file10',
								'Y',
								'Y',
								'Y',
								'comment',
								NOW());
					" ;


					testing_dsp("$sql");

					mysql_query($sql);
			}

		}
	}

exit;
		echo "<script language='JavaScript'>alert('이미지가 등록 되었습니다.');</script>";
		echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."&item_data_seq=$item_data_seq&form=Write'</script>";
}

exit;

//===================== file 처리 ==================


if($mode == "totalExam") {

	//echo "<script language='JavaScript'>alert('종합검진 결과가 등록 되었습니다.');</script>";
	//echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."'</script>";

	//exit;
}
else if($mode == "modify" && $seq) {

}
else if($mode == "del" && $seq) {
	
	
}
?>
