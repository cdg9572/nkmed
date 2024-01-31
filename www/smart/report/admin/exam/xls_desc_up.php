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

$data->read("./upExcel/nkp_desc.xls");

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
	$c1 = htmlspecialchars($c1_ori);

	$c2_ori = $data->sheets[0]['cells'][$k][2] ;
	$c2 = htmlspecialchars($c2_ori);



	testing_dsp(" $c1 <br> $c2") ;


	$sql = 
		"
			INSERT INTO `smart_m_desc`
            (`m_item`,
             `m_desc`,
             `reg_date`,
             `use_yn`,
             `state`,
             `view_state`)
			VALUES ('$c1',
					'$c2',
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
