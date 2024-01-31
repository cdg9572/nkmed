<?
session_start();
include "../../inc/dbConn.php";
//include "../../inc/chkLogin.php";
include "../../inc/func.php";

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);


header("Content-Type:text/html;charset=utf-8") ;

mysql_query("set names utf8;");


//testing_dsp("post");


if($mode == "new") {

	

}
else if($mode == "modify" && $seq) {

}
else if($mode == "del" && $seq) {

	//testing_dsp("post") ;
	//testing_dsp("get") ;
	//exit;

	$sql = "UPDATE ".$tbl." SET use_yn='N', view_state='N', state='N' WHERE seq='".$seq."'" ;

	//testing_dsp($sql);
	//exit;
	MYSQL_QUERY($sql);

	MYSQL_CLOSE();
	echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."&pageNum=$pageNum'</script>";
	exit;
}
?>