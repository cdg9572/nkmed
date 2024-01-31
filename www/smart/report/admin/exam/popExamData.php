<?
session_start();
include "../../inc/dbConn.php";
include "../inc/chkLogin.php";
include "../../inc/func.php";

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);


header("Content-Type:text/html;charset=utf-8") ;
$DOCUMENT_ROOT = $DOCUMENT_ROOT."/21csmart/";

mysql_query("set names utf8;");

testing_dsp("post");

//include $DOCUMENT_ROOT."/admin/_inc/test_func.php";  //=== 테스트용 함수 
//include "./inc/dbConn.php";
//include  $DOCUMENT_ROOT."/inc/func.php";
//include $DOCUMENT_ROOT."/admin/inc/func.php";
//include "./inc/stnoble_func.php";

mysql_query("set names utf8;");
?>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>뉴고려병원</title>

<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/font.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<?


$sql = "select * from `smart_category_item_data` where seq = '$seq' order by reg_date desc" ;
$res = MYSQL_QUERY($sql) or die(mysql_error()) ;
$d_row = mysql_fetch_array($res) ;

$item_seq = $d_row[exam_seq] ; //== category_item 의 seq 번호 획득



$sql = "select * from `smart_category_item` where seq = '$item_seq' order by reg_date desc" ;
#echo $sql;
$res = MYSQL_QUERY($sql) or die(mysql_error()) ;
$i_row = mysql_fetch_array($res) ;




?>


<div class="propBox2">
	<h3>검진 상세 Data 확인 [<?=$i_row[seq]?>]</h3>

	<table width="100%" class="tableSt02" style="margin-bottom:15px;">

		<tr bgcolor='#EEEEEE'>
			<td width='100' style='padding : 5 0 5 5;text-align:center' >등록명</td> 
			
			<td bgcolor='#FFFFFF' style='padding : 5 5 5 5' >
				<?
					echo "$i_row[exam_title]" ;
				?>
			</td>
		</tr>

		<tr bgcolor='#EEEEEE'>
			<td width='130' style='padding : 5 0 5 5;text-align:center' >성명</td> 
			
			<td bgcolor='#FFFFFF' style='padding : 5 5 5 5'>
				<?
					echo "$d_row[name]" ;
				?>
			</td>
		</tr>
				
		<tr bgcolor='#EEEEEE'>
			<td width='130' style='padding : 5 0 5 5;text-align:center' >검진일</td> 
			
			<td bgcolor='#FFFFFF' style='padding : 5 5 5 5'>
				<?
					echo "$d_row[exam_date]" ;
				?>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<div class="sample clearfix">
					<div style="float:left; margin-right:10px; width: 350px; overflow:hidden;">
						
					</div>
					<div style="padding:5px; width:530px; height:80px; float:left;">
						<p style="color:#666; margin-top:0px;margin-bottom:10px; font-size:11pt;">데이터 확인 </a>
						
						</p>
						<p style="color:#666; margin-bottom:5px;">엑셀파일에서 등록된 데이터 입니다. <p>
						해당 데이터 항목과 입력된 값을 확인하시기 바랍니다.
					</div>
				</div>

			</td>
		</tr>

		<?
		#echo $i_row[item_str];
		$i_arr = explode("&&", $i_row[item_ori_str]) ;
		if( count($i_arr) == 1){ $i_arr = explode("&&", $i_row[item_str]) ; }
		#echo $i_row[item_str];
		#echo count($i_arr);
		$d_arr = explode("&&", $d_row[data_str]) ;

		$od_arr = explode("&&", $i_row[item_str]) ;  // 출력 item 

//echo "<p>[ $i_row[seq] ]$i_row[item_str] <br>";


		for($i=0 ; $i <= count($i_arr) ; $i ++)
		{
			$i_item =  $i_arr[$i] ;
			$d_item =  $d_arr[$i] ;

			$od_item = $od_arr[$i] ;

			if($i_item == "") continue ;

			$_SESSION["data_".$i_item] = $d_item ;

			//echo "<br> ".$i_item." = $d_item" ;


			?>

			

			<tr bgcolor='#EEEEEE'>
				<td width='150' style='padding : 5 0 5 5;text-align:center' ><?=$i_item?></td> 

				<?
				
					if($REMOTE_ADDR == "122.45.135.118")
					{

				?>
						<td width='150' style='padding : 5 0 5 5;text-align:center' ><?=$od_item?></td> 

				<?
					}
				?>
				
				<td bgcolor='#FFFFFF' style='padding : 5 5 5 5'>
					<?
						echo "$d_item" ;
					?>
				</td>
			</tr>
		
		<?
			

		}

		?>


		




	</table>

	</form>
	
	<div style="position:relative;">

		<a href="#" onClick="window.close();" class="cancelBtn02 poright">닫기</a>
	</div>
</div>