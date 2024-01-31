<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?

print_r($_GET) ;

echo $_GET["Status"]." <= 전송결과 1: 접수완료 3~6 오류 상황 <br/>";
echo $_GET["Sendsms"]." <= 전송건수  <br/>";
echo $_GET["Smscoin"]." <= 전송후 잔여 가능건수 <br/>";
echo $_GET["Opt1"]." <= 옵션값 <br/>";
?>