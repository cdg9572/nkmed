<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . "/_init.php";

//기본 리다이렉트
//echo $_REQUEST["htImageInfo"];

$foldername =  $_REQUEST["floderId"];

$url = $_REQUEST["callback"] .'?callback_func='. $_REQUEST["callback_func"];
$bSuccessUpload = is_uploaded_file($_FILES['Filedata']['tmp_name']);
if (bSuccessUpload) { //성공 시 파일 사이즈와 URL 전송
	$tmp_name = $_FILES['Filedata']['tmp_name'];
	$name = $_FILES['Filedata']['name'];

	//확장자 구분
	$file_ext = substr(strrchr($name, "."),1);
	$file_ext = strtolower($file_ext);	//확장자를 소문자로...

	//파일명 새로 지정
	$file_name_md5=md5($name);
	$rand_key=rand_make();
	$file_name_md5=substr($file_name_md5, 5, 10);
	$file_name_md5=$file_name_md5 . $rand_key;
	$new_file_name=$file_name_md5 . "." . $file_ext;

	//$new_path = "../upload/".urlencode($new_file_name);

	$new_path = $GP -> UP_IMG_SMARTEDITOR . $foldername . "/" .urlencode($new_file_name);

	@move_uploaded_file($tmp_name, $new_path);


	## DESC : 이미지 서버로 전송
	/*
	include_once($GP->CLS."class.myshop.ftp.php");

	$C_Ftp = new Ftp();
	$argsFtp = "";
	$argsFtp['imgFileName'] = array($new_file_name);
	$argsFtp['localFilePath'] = $GP -> UP_IMG_SMARTEDITOR . $foldername . "/";
	$argsFtp['ftp_path'] = $GP -> UP_IMG_FTP_SMART . $foldername . "/";
	$argsFtp['ftp_imgtype'] = "L";					//L:노말 , S:썸네일파일명 변경
	$argsFtp['ftp_filetype'] = "R";				//R:등록 , D:삭제
	$C_Ftp ->cacheFtpUpload($argsFtp);
	*/

	$url .= "&bNewLine=true";
	$url .= "&sFileName=".urlencode(urlencode($new_file_name));

	/*
	$domain = $_SERVER['HTTP_HOST'];
	$arrDomain = explode('.', $domain);

	if($arrDomain[0] == "devadmin" ||  $arrDomain[0] == "dev" ||  $arrDomain[0] == "devshop") {
		$domain_url = "http://dev.smartmyshop.com";
	}else {
		$domain_url = "http://smartmyshop.com";
	}
	*/

	//$url .= "&size=". $_FILES['Filedata']['size'];
	//아래 URL을 변경하시면 됩니다.
	$url .= "&sFileURL=" . $GP -> UP_IMG_SMARTEDITOR_URL . $foldername . "/".urlencode(urlencode($new_file_name));
} else { //실패시 errstr=error 전송
	$url .= '&errstr=error';
}

//난수생성함수
function rand_make()
{
	srand((double)microtime()*1000000);
	$f_rand=rand();

	srand((double)microtime()*1000000);
	$s_rand=rand();

	$rand_key = $f_rand + $s_rand;
	$rand_key = substr($rand_key,0,5);

	return $rand_key;
}

header('Location: '. $url);
?>