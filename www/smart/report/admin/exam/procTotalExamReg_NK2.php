<?
//session_start();
include "../../inc/dbConn.php";
//include "../../inc/chkLogin.php";
include "../../inc/func.php";

//ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);


header("Content-Type:text/html;charset=utf-8") ;
#$DOCUMENT_ROOT = $DOCUMENT_ROOT."/smart/";

mysql_query("set names utf8;");

#testing_dsp("post");

#echo "test";

if($mode == "totalExamNK") {

	//================ 실 데이터값 입력
	$t_arr =  explode("&&",$_POST[c_target]);

	#echo "<script>alert('".sizeof($t_arr)."');</script>";
	if ( sizeof($t_arr) > 2 ){
		#echo sizeof($t_arr)."<br/>";
		for( $i = 1 ; $i < sizeof($t_arr) ; $i++ ){
			
			$sql = 
			"
				INSERT INTO `smart_report`
				( 
				 `sname`,	 `jbno`,	 `aceesno`,
				 `category`, `reg_date`, `damdang`, `mobile`
				 )
				VALUES (						
						'".iconv("EUC-KR","UTF-8",$tname[$t_arr[$i]])."',
						'".iconv("EUC-KR","UTF-8",$serial_no[$t_arr[$i]])."',
						'".iconv("EUC-KR","UTF-8",$ckn[$t_arr[$i]])."',
						'".iconv("EUC-KR","UTF-8",$category)."', 		NOW(),
						'".iconv("EUC-KR","UTF-8",$damdang[$t_arr[$i]])."',	'".iconv("EUC-KR","UTF-8",$mobile[$t_arr[$i]])."'
						);
			" ;
			
			if( mysql_query($sql) ){
			#	
			}else{
				echo mysql_error()."<br/><br/>".$sql."<br/>";
			}
		}
		echo "<script language='JavaScript'>alert('종합검진 결과가 등록 되었습니다.');</script>";
	}else{
		$sql = 
			"
				INSERT INTO `smart_report`
				( 
				 `sname`,	 `jbno`,	 `aceesno`,
				 `category`, `reg_date`, `damdang`, `mobile`
				 )
				VALUES (						
						'".iconv("EUC-KR","UTF-8",$tname[$t_arr[1]])."',
						'".iconv("EUC-KR","UTF-8",$serial_no[$t_arr[1]])."',
						'".iconv("EUC-KR","UTF-8",$ckn[$t_arr[1]])."',
						'".iconv("EUC-KR","UTF-8",$category)."', 		NOW(),
						'".iconv("EUC-KR","UTF-8",$damdang[$t_arr[1]])."',	'".iconv("EUC-KR","UTF-8",$mobile[$t_arr[$i]])."'
						);
			" ;
		if( mysql_query($sql) ){
			echo "<script language='JavaScript'>alert('종합검진 결과가 등록 되었습니다.');</script>";		
		}else{
			echo mysq_error()."<br/><br/>".$sql."<br/>";
		}		
	}

	exit;

}else if($mode == "modify" && $seq) {

}else if($mode == "del" && $seq) {

}else if($mode == "img" && $seq) {
	echo $seq;
}

?>
