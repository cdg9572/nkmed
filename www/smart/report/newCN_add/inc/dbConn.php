<?
$dbHost		=	"localhost"; // 116.193.91.147
$dbUser		=	"choidong";
$dbPasswd	=	"donginc!@!";
$dbDb		=	"choidong";


$dbconn = mysql_connect($dbHost, $dbUser, $dbPasswd) or die("데이터베이스 연결에 실패하였습니다.");
$status = mysql_select_db($dbDb, $dbconn);

if (!$status) {
   echo "데이터베이스 선택에 실패하였습니다";
   exit;
}

mysql_query('set names euckr');
?>