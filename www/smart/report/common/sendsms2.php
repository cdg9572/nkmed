<?
	include $DOCUMENT_ROOT.'/module/login/head.php';
	include $DOCUMENT_ROOT.'/module/init.php';
	include _FILE_PATH.'login/is_login_admin.php';

	include _CLASS_PATH."class.DbProc.php";

	include $DOCUMENT_ROOT."/common/suremcfg.php";
	include $DOCUMENT_ROOT."/common/common.php";
	
	$db = new DbCon();
	$dbconn = $db->getConnection();

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

if($sort == "payment"){#미입금 명단
	$query = "select b.hp1, b.hp2, b.hp3 from tb_order_education a left join tb_member b ON  (a.mcode=b.mcode)  where  a.code='".$code."' and a.order_state='' and a.dt_pay is null";
	$result = mysql_query($query);
	while($rows = mysql_fetch_array($result)){
		$phone123 = $rows[hp1].$rows[hp2].$rows[hp3];
			if ($calltype == "2" )
			{

				$rdate = $yy . $mm . $dd;
				$rtime = $h . $m . "00" ;
			}

			if ($rdate== "" || $rtime=="" )
			{
				$rdate="00000000";
				$rtime="000000";
			}

			$calllen = strlen ($phone123);

			$callphone1 = substr($phone123,0,3);

			if ( $calllen < 11)
			{
				$callphone2 = substr($phone123,3,3);
				$callphone3 = substr($phone123,6);
			}
			else
			{
				$callphone2 = substr($phone123,3,4);
				$callphone3 = substr($phone123,7);
			}

			$reqlen = strlen ($reqnumber);

			$reqphone1 = substr($reqnumber,0,3);

			if ( $reqlen < 11)
			{
				$reqphone2 = substr($reqnumber,3,3);
				$reqphone3 = substr($reqnumber,6);
			}
			else
			{
				$reqphone2 = substr($reqnumber,3,4);
				$reqphone3 = substr($reqnumber,7);
			}

			$callmessage = $txtMessage;
			$callname = $username;

			$member = "1";
			$result2=$packettest->sendsms($member,$callphone1,$callphone2,$callphone3,$callmessage,$rdate,$rtime,$reqphone1,$reqphone2,$reqphone3,$callname);

			$res =substr($result2,94,1);
			
			$k=0;
			if ($res=="O")
			{
				$query2 = "INSERT INTO `tb_member_sms` SET lecture_code='".$code."', target ='워크샵',subject ='".$callmessage."',reg_date =now(),view_state = 'Y'";
				mysql_query($query2);
				$k++;
			}
		}
		?>
		<script language="javascript">
			alert("<?=$k?> 건 메시지 호출이 성공 되었습니다");
			self.close();
		</script>
		<?
}
else if($sort == "total"){
		$query = "select b.hp1, b.hp2, b.hp3 from tb_order_education a left join tb_member b ON  (a.mcode=b.mcode)  where  a.code='".$code."' and a.order_state='1' and a.dt_pay is not null";

		$result = mysql_query($query);
		while($rows = mysql_fetch_array($result)){
			$phone123 = $rows[hp1].$rows[hp2].$rows[hp3];
				if ($calltype == "2" )
				{

					$rdate = $yy . $mm . $dd;
					$rtime = $h . $m . "00" ;
				}

				if ($rdate== "" || $rtime=="" )
				{
					$rdate="00000000";
					$rtime="000000";
				}

				$calllen = strlen ($phone123);

				$callphone1 = substr($phone123,0,3);

				if ( $calllen < 11)
				{
					$callphone2 = substr($phone123,3,3);
					$callphone3 = substr($phone123,6);
				}
				else
				{
					$callphone2 = substr($phone123,3,4);
					$callphone3 = substr($phone123,7);
				}

				$reqlen = strlen ($reqnumber);

				$reqphone1 = substr($reqnumber,0,3);

				if ( $reqlen < 11)
				{
					$reqphone2 = substr($reqnumber,3,3);
					$reqphone3 = substr($reqnumber,6);
				}
				else
				{
					$reqphone2 = substr($reqnumber,3,4);
					$reqphone3 = substr($reqnumber,7);
				}

				$callmessage = $txtMessage;
				$callname = $username;

				$member = "1";
				$result2=$packettest->sendsms($member,$callphone1,$callphone2,$callphone3,$callmessage,$rdate,$rtime,$reqphone1,$reqphone2,$reqphone3,$callname);

				$res =substr($result2,94,1);
				
				$k=0;
				if ($res=="O")
				{
					$query2 = "INSERT INTO `tb_member_sms` SET lecture_code='".$code."', target ='워크샵',subject ='".$callmessage."',reg_date =now(),view_state = 'Y'";
					mysql_query($query2);
					$k++;
				}
			}
			?>
			<script language="javascript">
				alert("<?=$k?> 건 메시지 호출이 성공 되었습니다");
				self.close();
			</script>
			<?
}
else{

	if ($calltype == "2" )
	{

		$rdate = $yy . $mm . $dd;
		$rtime = $h . $m . "00" ;
	}

	if ($rdate== "" || $rtime=="" )
	{
		$rdate="00000000";
		$rtime="000000";
	}

	$calllen = strlen ($phone123);

	$callphone1 = substr($phone123,0,3);

	if ( $calllen < 11)
	{
		$callphone2 = substr($phone123,3,3);
		$callphone3 = substr($phone123,6);
	}
	else
	{
		$callphone2 = substr($phone123,3,4);
		$callphone3 = substr($phone123,7);
	}

	$reqlen = strlen ($reqnumber);

	$reqphone1 = substr($reqnumber,0,3);

	if ( $reqlen < 11)
	{
		$reqphone2 = substr($reqnumber,3,3);
		$reqphone3 = substr($reqnumber,6);
	}
	else
	{
		$reqphone2 = substr($reqnumber,3,4);
		$reqphone3 = substr($reqnumber,7);
	}

	$callmessage = $txtMessage;
	$callname = $username;

	$member = "1";
	$result=$packettest->sendsms($member,$callphone1,$callphone2,$callphone3,$callmessage,$rdate,$rtime,$reqphone1,$reqphone2,$reqphone3,$callname);

	$res =substr($result,94,1);
	if ($res=="O")
	{
		$query = "INSERT INTO `tb_member_sms` SET target ='개별',subject ='member',reg_date =now(),view_state = 'Y'";
		
		mysql_query($query);
?>

<script language="javascript">
	alert("메시지 호출이 성공 되었습니다");
	location.href = "visual_phone.html?mobileNo=<?=$mobileNo?>";
</script>
<?
	}
	else
	{
?>
<script language="javascript">
	alert("메시지 호출이 실패 하였습니다\nError Code = <?echo $res ?>");
	location.href = "visual_phone.html?mobileNo=<?=$mobileNo?>";
</script>
<?
	}
}
?>
