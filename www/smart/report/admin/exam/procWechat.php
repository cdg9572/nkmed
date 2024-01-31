<?
session_start();

include "../../inc/dbConn.php";
include "../../admin/inc/chkLogin.php";
include "../../inc/func.php";

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);


#header("Content-Type:text/html;charset=utf-8") ;
$DOCUMENT_ROOT = $DOCUMENT_ROOT."/21chana/";
echo $DOCUMENT_ROOT;
mysql_query("set names utf8;");

testing_dsp("post");



//exit;

if($mode == "wechat") {

	$sql = "
		
		update hana_category_item_data set wechat = '$wechat' where seq = $seq " ;


	mysql_query($sql) ;


	//echo $sql ;
	//exit;
	
	


	echo "<script language='JavaScript'>alert('wechat 아이디가 등록 되었습니다.');</script>";
	echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."&pageNum=$pageNum'</script>";

	exit;




}
else if($mode == "modify" && $seq) {

}
else if($mode == "del" && $seq) {

	
}
?>
