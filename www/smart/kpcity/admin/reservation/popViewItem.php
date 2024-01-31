<!doctype html>
<html>
<head>
<meta charset="EUC-KR">
<title>Untitled Document</title>
<style type="text/css">
table { border-collapse:collapse; }
table th { background-color:#153549; color:#fff; }
</style>
</head>

<body>
<table border="1" cellpadding="3" cellspacing="0" width="100%">
<tr>
	<th>코드</th>
	<th>검사명</th>
</tr>
<?
include $DOCUMENT_ROOT."/admin/inc/dbConn.php";
include $DOCUMENT_ROOT."/admin/inc/func.php";
include $DOCUMENT_ROOT."/admin/inc/conf.php";

mysql_select_db("mediroad_liss", $dbconn);



// =============  Aliss 디비 정보추출 
include $DOCUMENT_ROOT."/admin/inc/dbConn_mssql.php";
$conn = mssql_connect($DB_IP, $DB_USERID, $DB_USERPW);
$result = mssql_select_db($DB_NAME, $conn);
// =============  Aliss 디비 정보추출 
//echo "bu2!" ;


$profile = trim(iconv('euc-kr', 'utf-8',$profile)) ;
$sql = "SELECT * FROM PROFILE where EXAM_NAME = '$profile'";


//echo "$sql";

$exam_result = mssql_query($sql);
$exam_row = mssql_fetch_array($exam_result) ;


//echo "<font color=blue> $exam_row[PRO_CODE]";


$sql = "SELECT * FROM PROCODE where PRO_CODE = '$exam_row[PRO_CODE]'" ;
$exam_result = mssql_query($sql);
while($row = mssql_fetch_array($exam_result))
{
	$exam_result2 = mssql_query("SELECT * FROM EXAMITEM where EXAM_CODE = '$row[EXAM_CODE]' order by EXAM_CODE ");
	$exam_row2 = mssql_fetch_array($exam_result2) ;
	$exam_NAME2 = trim(iconv('utf-8','euc-kr',$exam_row2[1])) ;

	echo "<tr><th width='100'>[ $row[EXAM_CODE] ]</th><td>$exam_NAME2</td></tr> ";


}



?>
</table>

</body>
</html>



