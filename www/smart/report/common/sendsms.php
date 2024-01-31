<?

	include "./suremcfg.php";
	include "./common.php";

//	$member			클라이언트측 일련번호
//	$callphone1		호출번호 EX)"011"
//	$callphone2		"234"
//	$callphone3		"5678"
//	$callmessage	80Byte
//	$rdate			예약 날짜 EX) "20030617" 즉시 전송시 "00000000"
//	$rtime			예약 시간 EX) "190000"	 즉시 전송시 "000000"
//	$reqphone1		회신번호 EX) "011"
//	$reqphone2		회신번호 EX) "1111"
//	$reqphone3		회신번호 EX) "1111"
//	$callname		호출명

	
	$packettest = new SuremPacket;

	
	if ($rdate== "" || $rtime=="" )
	{
		$rdate="00000000";
		$rtime="000000";
	}

$result=$packettest->sendsms($member,$callphone1,$callphone2,$callphone3,$callmessage,$rdate,$rtime,$reqphone1,$reqphone2,$reqphone3,$callname);

	$res =substr($result,94,1);

	if ($res=="O")
	{
?>

<script language="javascript">
	alert("메시지 호출이 성공 되었습니다");
	history.go(-1);
</script>
<?
	}
	else
	{
?>
<script language="javascript">
	alert("메시지 호출이 실패 하였습니다\nError Code = <?echo $res ?>");
	history.go(-1);
</script>
<?
	}
?>
