<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<?
//==== register_global ó��
@extract($_GET);
@extract($_POST);
@extract($_SERVER);
@extract($_FILES);
@extract($_ENV);
@extract($_COOKIE);
@extract($_SESSION);

print_r($_GET) ;

echo $_GET["Status"]." <= ���۰�� 1: �����Ϸ� 3~6 ���� ��Ȳ aaaaaaaaaaaaaaaaaaa<br/>";
echo $_GET["Sendsms"]." <= ���۰Ǽ�  <br/>";
echo $_GET["Smscoin"]." <= ������ �ܿ� ���ɰǼ� <br/>";
echo $_GET["Opt1"]." <= �ɼǰ� <br/>";

//exit;

	#echo "<script language='JavaScript'>alert('test');</script>";
?>