<?
session_start();
include "../../inc/dbConn.php";
#include "../../inc/chkLogin.php";
include "../../inc/func.php";

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);


#header("Content-Type:text/html;charset=utf-8") ;
$DOCUMENT_ROOT = $DOCUMENT_ROOT."/ibh/";

mysql_query("set names utf8;");

testing_dsp("post");
testing_dsp("get");

//exit;

//===================== file 처리 ==================

if($mode == "del" && $seq) {
	unlink( "upImage/".$file);
	$sql = "DELETE FROM smart_r_image where seq = $seq" ;
#	echo $sql;
	mysql_query($sql);
	echo "<script language='JavaScript'>alert('이미지가 삭제 되었습니다.');</script>";
	if( $_GET[hl]=="v" ){
		echo "<script language='JavaScript'>parent.location.href='incTotalExamNKHWrite2.html?dir=".$dir."&menu=".$menu."&rnum=$rnum&form=Write'</script>";
	}else{
		echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."&rnum=$rnum&form=Write'</script>";	
	}
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

			$fileName = $_FILES['upFile']['name'][$j];
			$newFile = $fileName;
			$newFile = preg_replace("/\s+/", "", $newFile);


			$nowTime = $today_time = date('YmdHis', time());
			$newFile = $nowTime."_".$newFile ;		
			$uploadDir = "upImage/" ;
			$uploadFile = $uploadDir.$newFile;

			if(move_uploaded_file($_FILES['upFile']['tmp_name'][$i], $uploadFile))
			{
				$thum_file = $newFile;
				testing_dsp("업로드 성공 : $uploadFile");				
			}

			$sql = " INSERT INTO `smart_r_image`	(
								 `seq`,	 `rnum`, `file`, `reg_date`)
						VALUES (
								0,	'$rnum',  '".$newFile."', NOW());
					" ;			
			 mysql_query($sql);

		}		
	}
	echo "<script language='JavaScript'>alert('이미지가 등록 되었습니다.');</script>";
	if( $_POST[hl]=="v" ){
		echo "<script language='JavaScript'>parent.location.href='incTotalExamNKHWrite2.html?dir=".$dir."&menu=".$menu."&rnum=$rnum&form=Write'</script>";
	}else{
		echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."&rnum=$rnum&form=Write'</script>";
	}
}
exit;

//===================== file 처리 ==================

if($mode == "totalExam") {
}
else if($mode == "modify" && $seq) {
}
else if($mode == "del" && $seq) {
}

?>