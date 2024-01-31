<?
session_start();
header("Content-Type:text/html;charset=utf-8") ;

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);

//==== register_global 처리
@extract($_GET);
@extract($_POST);
@extract($_SERVER);
@extract($_FILES);
@extract($_ENV);
@extract($_COOKIE);
@extract($_SESSION);

$DOCUMENT_ROOT = $DOCUMENT_ROOT."";

include "../inc/func.php";
include "../inc/dbConn.php";

$sql = " SELECT * FROM smart_sis WHERE DNAME='".str_replace("-","",$_GET[dname]). "' AND BCDATE=password('".str_replace("-","", $_GET[bdate])."') ";
#echo $sql;
if( $res = mysql_query($sql) ){
	$row = mysql_fetch_array($res);
	#echo $row[1];
	$tmp = ""; $tmp_amt=0;
	if( $row[G] == "O" ){ $tmp .= "공단/";	 $tmp_amt += 26550; }
	if( $row[W] == "O" ){ $tmp .= "위/";	 $tmp_amt += 70830;	}elseif( $row[W] == "10" ){ $tmp .= "위_본인10%/"; $tmp_amt += 70830 - 7080; }
	if( $row[M] == "O" ){ $tmp .= "유방/";	 $tmp_amt += 44350;	}elseif( $row[M] == "10" ){ $tmp .= "유방_본인10%/";	 $tmp_amt += 44350 - 4430; }
	if( $row[D] == "O" ){ $tmp .= "대장/";	 $tmp_amt += 11740;		}
	if( $row[B] == "O" ){ $tmp .= "B형간염/"; $tmp_amt += 23230;	}
	if( $row[J] == "O" ){ $tmp .= "자궁/"; $tmp_amt += 15410;	}
	echo $tmp. " " . number_format($tmp_amt,0);
	echo "<script> parent.document.form.TT.value='".$tmp. " " . number_format($tmp_amt,0)."원 정도 차감';</script>";
}else{
	echo mysql_error();
}
?>