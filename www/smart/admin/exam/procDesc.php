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


if($mode == "new") {


	$sql = 
		"
			INSERT INTO `hana_m_desc`
			(
			 `m_item`,
			 `m_desc`,
			 `use_yn`,
			 `reg_date`
			 )
			VALUES (
					'$m_item',
					'$m_desc',
					'Y',
					NOW()
					);
	" ;


	testing_dsp("$sql");

	mysql_query($sql);


	echo "<script language='JavaScript'>alert('Description이 등록 되었습니다.');</script>";
	echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."'</script>";

	exit;




}
else if($mode == "modify" && $seq) {

	$sql = 
		"
			update hana_m_desc
				set m_item = '$m_item' , m_desc = '$m_desc'
				where seq = $seq
	" ;


	testing_dsp("$sql");

	mysql_query($sql);


	echo "<script language='JavaScript'>alert('Description이 수정 되었습니다.');</script>";
	echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."'</script>";

	exit;


}
else if($mode == "del" && $seq) {
	$sql = 
		"
			update hana_m_desc
				set use_yn = 'N'
				where seq = $seq
	" ;


	testing_dsp("$sql");

	mysql_query($sql);


	echo "<script language='JavaScript'>alert('Description이 삭제 되었습니다.');</script>";
	echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."'</script>";

	exit;

	
}
?>
