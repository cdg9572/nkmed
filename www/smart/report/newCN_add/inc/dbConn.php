<?
$dbHost		=	"localhost"; // 116.193.91.147
$dbUser		=	"choidong";
$dbPasswd	=	"donginc!@!";
$dbDb		=	"choidong";


$dbconn = mysql_connect($dbHost, $dbUser, $dbPasswd) or die("�����ͺ��̽� ���ῡ �����Ͽ����ϴ�.");
$status = mysql_select_db($dbDb, $dbconn);

if (!$status) {
   echo "�����ͺ��̽� ���ÿ� �����Ͽ����ϴ�";
   exit;
}

mysql_query('set names euckr');
?>