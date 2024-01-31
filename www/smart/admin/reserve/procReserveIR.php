<?
session_start();
include "../../inc/dbConn.php";
include  "../../inc/func.php";
$tbl = "smart_ir";
header("Content-Type:text/html;charset=utf-8") ;

mysql_query("set names utf8;");


//==== register_global 처리
@extract($_GET);
@extract($_POST);
@extract($_SERVER);
@extract($_FILES);
@extract($_ENV);
@extract($_COOKIE);
@extract($_SESSION);


testing_dsp("post");
testing_dsp("get");


if($mode == "new") {

}
else if($mode == "update" && $seq) {
	$sql = "update $tbl set admin_comment = '$admin_comment', state_flag='$state_flag' where IDX = $seq" ;
	echo $sql ;

	//testing_dsp("$sql") ;
	//exit;

	mysql_query($sql) ;

	echo "<script language='JavaScript'>
			alert('등록되었습니다') ;
			parent.document.location.reload();
			</script>";
	MYSQL_CLOSE();
	exit;

}
else if($mode == "del" && $seq) {

	$sql = " DELETE FROM ".$tbl." WHERE IDX='".$seq."'" ;
#echo $sql;
	//testing_dsp($sql);
	//exit;
	MYSQL_QUERY($sql);
	
	echo "<script language='JavaScript'>
			alert('삭제되었습니다') ;
			parent.location.href='../?dir=reserve&menu=ReserveListIR&tbl=smart_ir&cpname=독감사전예약관리';
			</script>";
	//echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."&tbl=".$tbl."&cpname=".$cpname."'</script>";
	MYSQL_CLOSE();
	exit;
}
?>