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
else if($mode == "modify" && $rnum) {

}
else if($mode == "del" && $rnum) {

	#이미지 정보 확인
	$sql = " SELECT * FROM smart_r_image WHERE rnum='".$rnum."' " ;
	if ( $r = mysql_query($sql) ){
		while ( $row = mysql_fetch_array($r) ){
			unlink( "upImage/".$row[file]);
		}
		$sql = " DELETE FROM smart_r_image WHERE rnum='".$rnum."' " ;
		mysql_query($sql);
	}

	#정보삭제
	$sql = " DELETE FROM smart_r_c WHERE rnum='".$rnum."' " ;
	#echo $sql;
	MYSQL_QUERY($sql);

	$sql = " DELETE FROM ".$tbl." WHERE rnum='".$rnum."'" ;

	MYSQL_QUERY($sql);
	MYSQL_CLOSE();
	echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."&pageNum=$pageNum'</script>";
	exit;
}
?>