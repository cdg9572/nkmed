<?
session_start();
header("Content-Type:text/html;charset=utf-8") ;

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);

$DOCUMENT_ROOT = $DOCUMENT_ROOT."/21chana/";

include "../../inc/func.php";
include "../../inc/dbConn.php";



//include $DOCUMENT_ROOT."/admin/_inc/test_func.php";  //=== 테스트용 함수 
//include "./inc/dbConn.php";
//include  $DOCUMENT_ROOT."/inc/func.php";
//include $DOCUMENT_ROOT."/admin/inc/func.php";
//include "./inc/stnoble_func.php";


include "../inc/conf.php";




$sql = "select * from multi_lan order by reg_date" ;
$result = mysql_query($sql) ;

echo "$dbUser	 === $sql <br>";


echo "
	<table width='95%' height='' border='1' cellpadding='0' cellspacing='2' bgcolor='#d7d7ff'>
			<tr>
				<td height='2' colspan='11' bgcolor='#CCCCCC'></td>
			</tr a\\>
			<tr style='padding : 5 5 5 5'  class='tb_c' align=center>
				<td width=''>no</td>
				<td width=''>key_kr</td>
				<td width=''>key_cn</td>
				<td width=''>desc_kr</td>
				<td width=''>desc_cn</td>
				<td width=''>reg_date</td>
			</tr> " ;


while($row = mysql_fetch_array($result))
{

	/*
		if($row[no] % 2 == 1) $bgcolor = "#CFFFFF";
		else $bgcolor = "#FFFFFF";

		echo "<tr bgcolor=$bgcolor>
				<td width=''>$row[no]</td>
				<td width=''>$row[key_kr]</td>
				<td width=''>$row[key_cn]</td>
				<td width=''>$row[desc_kr]</td>
				<td width=''>$row[desc_cn]</td>
				<td width=''>$row[reg_date]</td>
			</tr>
		" ;
	*/

	//if(!$row[key_kr] && !$row[key_cn])
	//if($row[key_kr] && $row[key_cn])
	//{
		if($row[no] % 2 == 1) $bgcolor = "#CFFFFF";
		else $bgcolor = "#FFFFFF";


		$sp_key_cn = htmlspecialchars($row[key_cn]) ;
		$sp_desc_cn = htmlspecialchars($row[desc_cn]) ;

		echo "<tr bgcolor=$bgcolor>
				<td width=''>$row[no]</td>
				<td width=''>$row[key_kr]</td>
				<td width=''>$row[key_cn]</td>
				<td width=''>$sp_key_cn</td>
				<td width=''>$row[desc_kr]</td>
				<td width=''>$row[desc_cn]</td>
				<td width=''>$sp_desc_cn </td>
				<td width=''>$row[reg_date]</td>
			</tr>
		" ;

		$up_sql = "update `multi_lan`  set 
					`key_kr` = '$row[desc_kr]' , 
					`key_cn` = '$row[desc_cn]' 
				WHERE
					`no` = '$row[no]' " ;
		//mysql_query($up_sql) ;			
	//}


}

echo "</table>" ;

?>
