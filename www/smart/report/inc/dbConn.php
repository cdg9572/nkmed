<?

//==== register_global 처리
@extract($_GET);
@extract($_POST);
@extract($_SERVER);
@extract($_FILES);
@extract($_ENV);
@extract($_COOKIE);
@extract($_SESSION);


$dbHost		=	"localhost"; // 116.193.91.147
$dbUser		=	"nkmed";
$dbPasswd	=	"nk9809114";
$dbDb		=	"nkmed";



$dbconn = mysql_connect($dbHost, $dbUser, $dbPasswd) or die("데이터베이스 연결에 실패하였습니다.");
$status = mysql_select_db($dbDb, $dbconn);

if (!$status) {
   echo "데이터베이스 선택에 실패하였습니다";
   exit;
}

?>