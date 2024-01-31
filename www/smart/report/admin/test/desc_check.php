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




$sql = "select * from `hana_m_desc` order by reg_date" ;
$result = mysql_query($sql) ;

echo "$dbUser	 === $sql <br>";


echo "
	<table width='95%' height='' border='1' cellpadding='0' cellspacing='2' bgcolor='#d7d7ff'>
			<tr>
				<td height='2' colspan='11' bgcolor='#CCCCCC'></td>
			</tr a\\>
			<tr style='padding : 5 5 5 5'  class='tb_c' align=center>
				<td width=''>no</td>
				<td width=''>m_category</td>
				<td width=''>m_item</td>
				<td width=''>m_item_cn</td>
				<td width=''>m_item_cn_db</td>

				<td width=''>m_desc</td>
				<td width=''>m_desc_cn</td>
				<td width=''>m_desc_cn_db</td>

				<td width=''>reg_date</td>
			</tr> " ;


while($row = mysql_fetch_array($result))
{

	
		if($row[no] % 2 == 1) $bgcolor = "#CFFFFF";
		else $bgcolor = "#FFFFFF";


		$m_item_cn_db = htmlspecialchars($row[m_item_cn]) ;
		$m_desc_cn_db = htmlspecialchars($row[m_desc_cn]) ;

		echo "<tr bgcolor=$bgcolor>
				<td width=''>$row[no]</td>
				<td width=''>$row[m_category]</td>

				<td width=''>$row[m_item]</td>
				<td width=''>$row[m_item_cn]</td>
				<td width=''>$m_item_cn_db</td>
				<td width='300'>$row[m_desc]</td>
				<td width=''>$row[m_desc_cn]</td>
				<td width=''>$m_desc_cn_db </td>
				<td width=''>$row[reg_date]</td>
			</tr>
		" ;

		$up_sql = "update `multi_lan`  set 
					`key_kr` = '$row[desc_kr]' , 
					`key_cn` = '$row[desc_cn]' 
				WHERE
					`no` = '$row[no]' " ;
	

}

echo "</table>" ;

?>
