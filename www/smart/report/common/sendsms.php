<?

	include "./suremcfg.php";
	include "./common.php";

//	$member			Ŭ���̾�Ʈ�� �Ϸù�ȣ
//	$callphone1		ȣ���ȣ EX)"011"
//	$callphone2		"234"
//	$callphone3		"5678"
//	$callmessage	80Byte
//	$rdate			���� ��¥ EX) "20030617" ��� ���۽� "00000000"
//	$rtime			���� �ð� EX) "190000"	 ��� ���۽� "000000"
//	$reqphone1		ȸ�Ź�ȣ EX) "011"
//	$reqphone2		ȸ�Ź�ȣ EX) "1111"
//	$reqphone3		ȸ�Ź�ȣ EX) "1111"
//	$callname		ȣ���

	
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
	alert("�޽��� ȣ���� ���� �Ǿ����ϴ�");
	history.go(-1);
</script>
<?
	}
	else
	{
?>
<script language="javascript">
	alert("�޽��� ȣ���� ���� �Ͽ����ϴ�\nError Code = <?echo $res ?>");
	history.go(-1);
</script>
<?
	}
?>
