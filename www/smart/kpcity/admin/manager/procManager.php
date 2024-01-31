<?
session_start();
include "../../inc/dbConn.php";
include  "../../inc/func.php";
$tbl = "smart_reserve";
//header("Content-Type:text/html;charset=utf-8") ;

mysql_query("set names utf8;");


//==== register_global 처리
@extract($_GET);
@extract($_POST);
@extract($_SERVER);
@extract($_FILES);
@extract($_ENV);
@extract($_COOKIE);
@extract($_SESSION);


testing_dsp("post");
testing_dsp("get");


if($mode == "new") {

	//=== Level 
	// 1. 총괄관리자
	// 4. 운영자
	// 5. 부운영자

	if($manager_group == "총괄운영자") $level = 1 ;
	if($manager_group == "운영자") $level = 4 ;
	if($manager_group == "부운영자") $level = 5 ;



	$sql = 
		"
			INSERT INTO `smart_manager`
			(
			 `manager_id`,
			 `manager_passwd`,
			 `name`,
			 `level`,
			 `manager_group`,
			 `mobile`,
			 `email`,
			 
			 `state`,
			 `use_yn`,
			 `view_state`,
			 `reg_date`
			 )
			VALUES (
					'$manager_id',
					'$manager_passwd',
					'$name',
					'$level',
					'$manager_group',
					'$mobile',
					'$email',

					'Y',
					'Y',
					'Y',
					NOW()
					);
	" ;


	testing_dsp("$sql");

	mysql_query($sql);
	

	echo "<script language='JavaScript'>alert('운영자가 등록 되었습니다.');</script>";

	echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."'</script>";
	exit;

}
else if($mode == "modify" && $seq) {

}
else if($mode == "del" && $seq) {

	$sql = "UPDATE ".$tbl." SET use_yn='N' WHERE seq='".$seq."'" ;

	testing_dsp($sql);
	//exit;
	MYSQL_QUERY($sql);

	MYSQL_CLOSE();
	echo "<script language='JavaScript'>parent.location.href='../?dir=".$dir."&menu=".$menu."'</script>";
	exit;
}
?>