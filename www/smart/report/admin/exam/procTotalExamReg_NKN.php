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

echo "test";

if($mode == "totalExamNK") {
		
//	if( mysql_query($sql)){
//		$exam_seq = mysql_insert_id();
		#echo $exam_seq;
//	}else{
//		echo mysql_error();
//	}

	//================ 실 데이터값 입력
	$t_arr =  explode("&&",$_POST[c_target]);
	$tf = true;
	for( $r = 1; $r < sizeof($t_arr) ; $r++){
		$t_arr[$r];
		$sql = "	 INSERT INTO smart_r_m	VALUES ( 0, 	'".iconv("EUC-KR","UTF-8",$rname[$t_arr[$r]])."',  	'".$rnum[$t_arr[$r]]."',  	'".$tel[$t_arr[$r]]."',  	'".$apnum[$t_arr[$r]]."',  	'$wdt'		);	" ;
		#echo $t_arr[$r].$sql."<br/>";
		if( mysql_query($sql) ){	}else{		$tf=false;	break;		}
		$sql2 = " INSERT INTO smart_r_c	VALUES ( '".$rnum[$t_arr[$r]]."', '".iconv("EUC-KR","UTF-8",$rtw[$t_arr[$r]])."', '".iconv("EUC-KR","UTF-8",$rtd[$t_arr[$r]])."'  ); ";
		#echo $sql2."<br/>";
		if( mysql_query($sql2) ){		}else{		$tf=false;	break;		}
	}
	if( $tf ) {	echo "<script language='JavaScript'>alert('종합검진 결과가 등록 되었습니다.');</script>";		}else{		echo mysql_error();	}
#	echo "<script>alert('".sizeof($t_arr)."');</script>";

#	if ( sizeof($t_arr) > 2 ){
#	}else{
#		$sql = "		INSERT INTO smart_r_m	VALUES ( 0, 	'$rname',  	'$rnum',  	'$apnum',  	'$wdt'		);	" ;
#	echo $sql;
#	}
/*		echo sizeof($t_arr)."<br/>";
		for( $i = 1 ; $i < sizeof($t_arr) ; $i++ ){
			
			$sql = 
			"
				INSERT INTO `smart_category_item_data`
				(
				 `exam_title`,
				 `item_str`,
				 `category`,
				 `hit`,

				 `mobile4`,

				 `data_str`,
				 `exam_seq`,
				 `docview`,

				 `serial_no`,
				 `name`,
				 `exam_date`,
				 `mobile`,
				 `sex`,

				 
				 `state`,
				 `use_yn`,
				 `view_state`,
				 `reg_date`,
				 `damdang`,
				 `ckn`
				 )
				VALUES (
						'$exam_title',
						'".iconv("EUC-KR","UTF-8",$item_str[$t_arr[$i]])."',
						'".iconv("EUC-KR","UTF-8",$category)."',
						'0',

						'".iconv("EUC-KR","UTF-8",substr($mobile[$t_arr[$i]],strlen($mobile[$t_arr[$i]])-4,4))."',

						'".iconv("EUC-KR","UTF-8",$data_str[$t_arr[$i]])."',
						'$exam_seq',
						'".iconv("EUC-KR","UTF-8",$docview[$t_arr[$i]])."',					

						'".iconv("EUC-KR","UTF-8",$serial_no[$t_arr[$i]])."',
						'".iconv("EUC-KR","UTF-8",$tname[$t_arr[$i]])."',
						'".iconv("EUC-KR","UTF-8",$exam_date[$t_arr[$i]])."',
						'".iconv("EUC-KR","UTF-8",$mobile[$t_arr[$i]])."',
						'".iconv("EUC-KR","UTF-8",$sex[$t_arr[$i]])."',


						'Y',
						'Y',
						'Y',
						NOW(),
						'".iconv("EUC-KR","UTF-8",$damdang[$t_arr[$i]])."',
						'".iconv("EUC-KR","UTF-8",$ckn[$t_arr[$i]])."'
						);
			" ;
			
			if( mysql_query($sql) ){
			#	
			}else{
				echo mysq_error()."<br/><br/>".$sql."<br/>";
			}
		}
		echo "<script language='JavaScript'>alert('종합검진 결과가 등록 되었습니다.');</script>";
	}else{
		$sql = 
			"
				INSERT INTO `smart_category_item_data`
				(
				 `exam_title`,
				 `item_str`,
				 `category`,
				 `hit`,

				 `mobile4`,

				 `data_str`,
				 `exam_seq`,
				 `docview`,

				 `serial_no`,
				 `name`,
				 `exam_date`,
				 `mobile`,
				 `sex`,

				 
				 `state`,
				 `use_yn`,
				 `view_state`,
				 `reg_date`,
				 `damdang`,
				 `ckn`
				 )
				VALUES (
						'$exam_title',
						'".iconv("EUC-KR","UTF-8",$item_str[$t_arr[1]])."',
						'".iconv("EUC-KR","UTF-8",$category)."',
						'0',

						'".iconv("EUC-KR","UTF-8",substr($mobile[$t_arr[1]],strlen($mobile[$t_arr[1]])-4,4))."',

						'".iconv("EUC-KR","UTF-8",$data_str[$t_arr[1]])."',
						'$exam_seq',
						'".iconv("EUC-KR","UTF-8",$docview[$t_arr[1]])."',					

						'".iconv("EUC-KR","UTF-8",$serial_no[$t_arr[1]])."',
						'".iconv("EUC-KR","UTF-8",$tname[$t_arr[1]])."',
						'".iconv("EUC-KR","UTF-8",$exam_date[$t_arr[1]])."',
						'".iconv("EUC-KR","UTF-8",$mobile[$t_arr[1]])."',
						'".iconv("EUC-KR","UTF-8",$sex[$t_arr[1]])."',


						'Y',
						'Y',
						'Y',
						NOW(),
						'".iconv("EUC-KR","UTF-8",$damdang[$t_arr[1]])."',
						'".iconv("EUC-KR","UTF-8",$ckn[$t_arr[1]])."'
						);
			" ;
		if( mysql_query($sql) ){
			echo "<script language='JavaScript'>alert('종합검진 결과가 등록 되었습니다.');</script>";		
		}else{
			echo mysq_error()."<br/><br/>".$sql."<br/>";
		}		
	}
*/
	exit;

}else if($mode == "modify" && $seq) {

}else if($mode == "del" && $seq) {

}else if($mode == "img" && $seq) {
	echo $seq;
}

?>
