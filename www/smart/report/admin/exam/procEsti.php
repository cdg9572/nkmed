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
//exit;

if($mode == "new") {


	$src_item = eli($xls_item);

	
	$sql = "INSERT INTO `smart_esti`
					(
					 `dsp_item`,
					 `xls_item`,
					 `src_item`,
					 `esti_M`,
					 `esti_F`,
					 `comment`,
					 `reg_date`,
					 `state`,
					 `use_yn`,
					 `view_state`)
		VALUES (
				'$dsp_item',
				'$xls_item',
				'$src_item',
				'$esti_M',
				'$esti_F',
				'$comment',
				NOW(),
				'Y',
				'Y',
				'Y');
			";

	testing_dsp($sql);

	//exit;
	mysql_query($sql);


	echo "<script language='JavaScript'>alert('임상참고치가 등록 되었습니다.');</script>";
	echo "<script language='JavaScript'>parent.location.reload()</script>";

	exit;




}
else if($mode == "modify" && $seq) {

	$src_item = eli($xls_item);

	$sql = 
		"
			UPDATE `smart_esti`
			SET 
			  `dsp_item` = '$dsp_item',
			  `xls_item` = '$xls_item',
			  `src_item` = '$src_item',
			  `esti_M` = '$esti_M',
			  `esti_F` = '$esti_F',
			  `comment` = '$comment',
			  `reg_date` = NOW()
			WHERE `seq` = '$seq';
	" ;


	testing_dsp("$sql");
//exit;
	mysql_query($sql);
	//

	echo "<script language='JavaScript'>alert('$dsp_item 의 값이 (남)$esti_M / (여)$esti_F 으로  수정 되었습니다.');</script>";
	//echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."&keyword=$keyword'</script>";

	exit;


}
else if($mode == "del" && $seq) {
	$sql = 
		"
			update smart_esti
				set use_yn = 'N'
				where seq = $seq
	" ;


	testing_dsp("$sql");

	mysql_query($sql);


	echo "<script language='JavaScript'>alert('임상참고치가 삭제 되었습니다.');</script>";
	echo "<script language='JavaScript'>parent.location.reload()</script>";
	exit;

	
}
?>
