<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<?
//==== register_global 처리
@extract($_GET);
@extract($_POST);
@extract($_SERVER);
@extract($_FILES);
@extract($_ENV);
@extract($_COOKIE);
@extract($_SESSION);

print_r($_GET) ;

echo $_GET["Status"]." <= 전송결과 1: 접수완료 3~6 오류 상황 aaaaaaaaaaaaaaaaaaa<br/>";
echo $_GET["Sendsms"]." <= 전송건수  <br/>";
echo $_GET["Smscoin"]." <= 전송후 잔여 가능건수 <br/>";
echo $_GET["Opt1"]." <= 옵션값 <br/>";

//exit;

	echo "<script language='JavaScript'>alert('예약 되었습니다..');</script>";
	echo "<script language='JavaScript'>parent.location.href='http://smart.nkhospital.net/gpcu/reserve/reserveResult.html?".$Opt1."'</script>";
?>