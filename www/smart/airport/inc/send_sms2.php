
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<form action="http://www.smsfly.co.kr/outside/asp_sms_send.php" method="post" name="sendSMS2" target='smsifr'>
	<input type="hidden" name="smsf_id" value="nk9190" /><br/>
	<input type="hidden" name="smsf_pwd" value="nk9195" /><br/>
	<input type="hidden" name="smsf_keycode" value="e90055399877b23dcc123728d6f41cbc" /><br/>
	<input type="text" name="smsf_returl" value="http://smart.nkhospital.net/2018/inc/sms_return2.php" /><br/>
	<input type="text" name="smsf_phone" value="<?=$smsf_phone?>" /> 전송번호<br/>
	<input type="text" name="smsf_rephone" value="0319809190" /> 회신번호<br/>
	<input type="text" name="smsf_msg" value="<?=$smsf_msg?>" />단문메시지<br/>
	<input type="text" name="smsf_mode" value="<?=$smsf_mode?>" /> imt : 즉시 / tim : 예약<br/>
	<input type="text" name="smsf_tdate" value="<?=$smsf_tdate?>" /> 예약시간 201609050808 (년월일시분)<br/>
	<input type="text" name="smsf_opt1" value="<?=$smsf_opt1?>" /> 추가 파라미터 <br/>
	<input type="submit" value="전송테스트" />
</form>
<iframe id='smsifr'  name='smsifr' style='displaye:none;' width='100' height='100' ></iframe>

<?
//exit;
?>

<script>
		document.sendSMS2.submit() ; 
</script>