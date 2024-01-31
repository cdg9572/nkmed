<?
session_start();
include "../../inc/dbConn.php";
include  "../../inc/func.php";
$tbl = "smart_reserve";
//header("Content-Type:text/html;charset=utf-8") ;

mysql_query("set names utf8;");


//==== register_global Ã³¸®
@extract($_GET);
@extract($_POST);
@extract($_SERVER);
@extract($_FILES);
@extract($_ENV);
@extract($_COOKIE);
@extract($_SESSION);


testing_dsp("post");
testing_dsp("get");

$i_query = "update reserve_scope set item1='".$item1."', item2='".$item2."', item3='".$item3."', item4='".$item4."', item5='".$item5."', item6='".$item6."', item7='".$item7."' where seq='".$seq."'";

$result = mysql_query($i_query);
MYSQL_CLOSE();
echo "<script language='JavaScript'>parent.location.href='../index.html?dir=".$dir."&menu=".$menu."'</script>";

exit;
?>