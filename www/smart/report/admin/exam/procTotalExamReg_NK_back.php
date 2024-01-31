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

	$sql = 
		"
			INSERT INTO `smart_category_item`
			(
			 `exam_title`,
			 `file_name`,
			 `item_str`,
			  `item_ori_str`,
			 `category`,
			 
			 `state`,
			 `use_yn`,
			 `view_state`,
			 `reg_date`
			 )
			VALUES (
					'$exam_title',
					'$newFile',
					'$item_str',
					'$item_ori_str',
					'$category',

					'Y',
					'Y',
					'Y',
					NOW()
					);
	" ;
echo $sql;
#	mysql_query($sql);

	$exam_seq = mysql_insert_id();

	//================ 실 데이터값 입력


		$sql = 
		"
			INSERT INTO `smart_category_item_data`
			(
			 `exam_title`,
			 `file_name`,
			 `item_str`,
			 `category`,
			 `hit`,

			 `mobile4`,

			 `data_str`,
			 `ori_str`,
			 `exam_seq`,
			 `docview`,

			 `serial_no`,
			 `name`,
			 `ssn`,
			 `exam_date`,
			 `mobile`,
			 `sex`,
			 `birth_date`,

			 
			 `state`,
			 `use_yn`,
			 `view_state`,
			 `reg_date`
			 )
			VALUES (
					'$exam_title',
					'$newFile',
					'$item_str',
					'$category',
					'0',

					'$mobile4',

					'$data_str',
					'$ori_str',
					'$exam_seq',
					'$docview',					

					'$serial_no',
					'$name',
					'$ssn',
					'$exam_date',
					'$mobile',
					'$sex',
					'$birth_date',


					'Y',
					'Y',
					'Y',
					NOW()
					);
		" ;

#		mysql_query($sql);

	}

#	echo "<script language='JavaScript'>alert('종합검진 결과가 등록 되었습니다.');</script>";
	//echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."'</script>";

	//exit;




}
else if($mode == "modify" && $seq) {

}
else if($mode == "del" && $seq) {

	
}
?>
