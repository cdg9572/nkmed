
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<form action="http://www.smsfly.co.kr/outside/asp_sms_send.php" method="post" name="sendSMS2" target='smsifr'>
	<input type="hidden" name="smsf_id" value="nk9190" /><br/>
	<input type="hidden" name="smsf_pwd" value="nk9195" /><br/>
	<input type="hidden" name="smsf_keycode" value="e90055399877b23dcc123728d6f41cbc" /><br/>
	<input type="text" name="smsf_returl" value="http://smart.nkhospital.net/2018/inc/sms_return2.php" /><br/>
	<input type="text" name="smsf_phone" value="<?=$smsf_phone?>" /> ���۹�ȣ<br/>
	<input type="text" name="smsf_rephone" value="0319809190" /> ȸ�Ź�ȣ<br/>
	<input type="text" name="smsf_msg" value="<?=$smsf_msg?>" />�ܹ��޽���<br/>
	<input type="text" name="smsf_mode" value="<?=$smsf_mode?>" /> imt : ��� / tim : ����<br/>
	<input type="text" name="smsf_tdate" value="<?=$smsf_tdate?>" /> ����ð� 201609050808 (����Ͻú�)<br/>
	<input type="text" name="smsf_opt1" value="<?=$smsf_opt1?>" /> �߰� �Ķ���� <br/>
	<input type="submit" value="�����׽�Ʈ" />
</form>
<iframe id='smsifr'  name='smsifr' style='displaye:none;' width='100' height='100' ></iframe>

<?
//exit;
?>

<script>
		document.sendSMS2.submit() ; 
</script>