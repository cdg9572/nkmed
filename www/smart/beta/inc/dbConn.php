<?
$dbHost		=	"localhost"; // 116.193.91.147
$dbUser		=	"nkmed";
$dbPasswd	=	"nk9809114";
$dbDb		=	"nkmed";




$dbconn = mysql_connect($dbHost, $dbUser, $dbPasswd) or die("�����ͺ��̽� ���ῡ �����Ͽ����ϴ�.");
$status = mysql_select_db($dbDb, $dbconn);

if (!$status) {
   echo "�����ͺ��̽� ���ÿ� �����Ͽ����ϴ�";
   exit;
}
?>