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

//================== 디렉토리 생성
$mydir = "/home/hosting_users/nkmed/www/smart/_asp/"."$asp_url"; 
 if(mkdir($mydir, 0777)) { 
    if(is_dir($mydir)) { 
        chmod($mydir, 0777); 
        echo "${mydir} 디렉토리를 생성하였습니다."; 
    } 
 } 
 else { 
    echo "${mydir} 디렉토리를 생성하지 못했습니다."; 
 } 


//================= 파일 복사
$oldfile = "/home/hosting_users/nkmed/www/smart/_asp/index_template.html";  // 원본파일 
$newfile = $mydir."/index.html";  // 원본파일 
 
if(!copy($oldfile, $newfile)) { 
	echo "파일 복사에 실패하였습니다."; 
}
else
{
	echo "파일 복사에 성공!"; 
}



//exit;

$temp = explode("/", $mydir);
$url_dir = $temp[sizeof($temp)-1];
$asp_url = "http://smart.nkhospital.net/_asp/".$url_dir ;



testing_dsp("test1 : <br>$qrimg <br>$qrimg_url <br>$asp_url <br> $url_dir") ;


include "../qrtest.html" ;


testing_dsp("test2 : <br>$qrimg <br>$qrimg_url <br>$asp_url <br> $url_dir") ;





if($mode == "new") {


	$sql = 
		"
			INSERT INTO `smart_opASP`
			(
			 `asp_url`,
			 `url_dir`,
			 `name`,
			 `mobile`,
			 `email`,

			 `qrimg`,
			 `qrimg_url`,
			 
			 `state`,
			 `use_yn`,
			 `view_state`,
			 `reg_date`
			 )
			VALUES (
					'$asp_url',
					'$url_dir',
					'$name',
					'$mobile',
					'$email',

					'$qrimg',
					'$qrimg_url',


					'Y',
					'Y',
					'Y',
					NOW()
					);
	" ;


	testing_dsp("$sql");
//exit;
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