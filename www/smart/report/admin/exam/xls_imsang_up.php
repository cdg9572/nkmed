<?
session_start();
include "../../inc/dbConn.php";
//include "../../inc/chkLogin.php";
include "../../inc/func.php";

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);


header("Content-Type:text/html;charset=utf-8") ;
$DOCUMENT_ROOT = $DOCUMENT_ROOT."/smart/";

mysql_query("set names utf8;");

testing_dsp("post");
testing_dsp("get");


require_once '../phpExcelReader/Excel/reader.php';

// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();


// Set output Encoding.
$data->setOutputEncoding('UTF8');

$data->read("./upExcel/nkh_imsang.xls");

error_reporting(E_ALL ^ E_NOTICE);

$k=0;

$row_num = $data->sheets[0]['numRows'] ;
$col_num = $data->sheets[0]['numCols'] ;

echo "row_num / col : $row_num / $col_num	" ;
echo " <br>";

//exit;




//=============== data 셀의 목록을 체크
for ($k =  1 ; $k <= $data->sheets[0]['numRows']; $k++) 
{
	

	$c1_ori = $data->sheets[0]['cells'][$k][1] ;
	$c1 = trim(htmlspecialchars($c1_ori));

	$dsp_item = $c1 ;


	$c2_ori = $data->sheets[0]['cells'][$k][2] ;
	$c2 = trim(htmlspecialchars($c2_ori));

	$xls_item = $c2 ;

	$src_item = eli($xls_item) ;

	if($dsp_item) $dsp_item = $xls_item ;
	if($xls_item) $xls_item = $dsp_item ;


	$c3_ori = $data->sheets[0]['cells'][$k][3] ;
	$c3 = trim(htmlspecialchars($c3_ori));

	$esti = $c3 ;


	$c4_ori = $data->sheets[0]['cells'][$k][4] ;
	$c4 = trim(htmlspecialchars($c4_ori));

	$esti_M = $c4 ;

	if(!$esti_M) $esti_M = $esti  ;




	$c5_ori = $data->sheets[0]['cells'][$k][5] ;
	$c5 = trim(htmlspecialchars($c5_ori));

	$esti_F = $c5 ;

	if(!$esti_F) $esti_F = $esti  ;


	








	testing_dsp(" $c1 <<>>>> $c2 <<>>>> $c3 <<>>>> $c4 <<>>>> $c5") ;


	$sql = 
		"
			INSERT INTO `smart_esti`
						(
						 `dsp_item`,
						 `xls_item`,
						 `src_item`,
						 `esti`,
						 `esti_M`,
						 `esti_F`,
						 `comment`,
						 `reg_date`,
						 `state`,
						 `use_yn`,
						 `view_state`)
			VALUES (
					'$dsp_item',
					'$xls_item',
					'$src_item',
					'$esti',
					'$esti_M',
					'$esti_F',
					'',
					NOW(),
					'Y',
					'Y',
					'Y');
		" ;


	testing_dsp("$sql");
	//mysql_query($sql);
		

}

exit;

?>
