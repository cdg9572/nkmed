<?
session_start();
/******************************
달력
******************************/
include "../inc/dbConn.php";
include "../inc/chkLogin.php";
include "../inc/func.php";

#예약 체크
$chk_query = "select * from reserve_list_new where left(reserve_day,10)='2013-07-17'  and state='Y' and view_state='Y'";
echo $chk_query;
$chk_result = mysql_query($chk_query);

while($chk_rows = mysql_fetch_array($chk_result)){
	if($chk_rows[reserve_type5] == "Y"){
		$reserve_item1++;
	}
	if($chk_rows[reserve_type16] == "Y" || $chk_rows[reserve_type17] == "Y" || $chk_rows[reserve_type18] == "Y" || $chk_rows[reserve_type19] == "Y" || $chk_rows[reserve_type20] == "Y" || $chk_rows[reserve_type21] == "Y"){
		$reserve_item2++;
	}
	if($chk_rows[reserve_type22] == "Y" || $chk_rows[reserve_type23] == "Y" || $chk_rows[reserve_type24] == "Y"){
		$reserve_item3++;
	}
	if($chk_rows[reserve_type25] == "Y"){
		$reserve_item4++;
	}
	if($chk_rows[reserve_type26] == "Y"){
		echo "aa";
		$reserve_item5++;
	}
}
echo "<br>";
echo $reserve_item1."<br>";
echo $reserve_item2."<br>";
echo $reserve_item3."<br>";
echo $reserve_item4."<br>";
echo $reserve_item5."<br>";


?>

