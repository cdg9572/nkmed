<? include "../inc/header.php" ?>



<?
if($email2==""){
?>
<script>
	alert("제대로된 경로가 아닙니다.");
	history.back();
</script>
<?
	exit();
}
$email4=$email2."@".$email3;
//echo $email4;
//exit();
//$name=$_POST['name'];
//echo $name;
//echo $isagree;
//echo $sung;
//echo $age;
//echo $area;
//echo $special;
$email[0]="master@udmso.co.kr";
$email[1]="sy515@udmso.co.kr";
//$email[0]="ssy8100@hanmail.net";
//$email[1]="ssy8100@inetpia.net";
for($i=0;$i<2;$i++){
	$com_mail = $email[$i];
	//$com_mail=$carr[com_mail];
	//$email = $com_mail;
	$from = $email4;
	$to = $email[$i];
	//msg($from."#####".$to);
	$subjects = $name." 님이 지점개설에 대한 문의를 신청하셨습니다.";

    $confirm_msg = $name." 님이 지점개설에 대한 문의를 신청하셨습니다.";

	/*
	$headers = "From:$from\n";     //답장시 사용자편의 인터패이스
	$headers .= "Reply-To:$to\n";
	$headers .= "Content-Type:text/html;charset=EUC-KR\n\n";
    */
	//$subjects = $confirm_msg;

	$subjects = "=?UTF-8?B?".base64_encode($subjects)."?="."\r\n";
	//$subjects = iconv("utf-8", "euc-kr", $confirm_msg);

	//$subjects = $user_name."님이 온라인 견적 상담문의 접수하셨습니다.";


	$headers = "From:$from\n";     //답장시 사용자편의 인터패이스
	$headers .= "Reply-To:$to\n";
	$headers .= "Content-Type:text/html;charset=UTF-8\n\n";

	$sub = "
	<html>
	<head>
	<title>지점개설문의</title>
	<style>
	FONT{LINE-HEIGHT:12PT;}
	<!--
	BODY { font-family:굴림; font-size:9pt; }
	TEXT { font-family:굴림; font-size:9pt; }
	A { font-family:굴림; font-size:9pt;color:'#004080'; LINE-HEIGHT:12PT}
	A:hover { font-family:굴림; font-size:9pt; text-decoration: underline; color:#DB006D}
	td { font-size:9pt;	font-family:굴림; color: 'black'}
	-->
	</style>
	</head>

	<body topmargin='10' leftmargin='20' marginwidth='20' marginheight='10'>
	<table align='center' border='1' cellspacing='0' width='100%' bordercolor='#AC4265' bordercolordark='white' bordercolorlight='#E0E0E0' cellpadding='3'>
	<tr height=25>
			<td width='94' height='13' bgcolor='#F3F3F3' align='center'>성함</td>
			<td width='388'>&nbsp; $name</td>
		</tr>

		<tr height=25>
			<td width='94' height='13' bgcolor='#F3F3F3' align='center'>연락처</td>
			<td width='388'>&nbsp; $tel</td>
		</tr>
		<tr height=25>
			<td width='94' height='13' bgcolor='#F3F3F3' align='center'>이메일</td>
			<td width='388'>&nbsp; $email4</td>
		</tr>
		<tr height=25>
			<td width='94' bgcolor='#F3F3F3'><p align='center'>성별</td>
			<td width='388'>&nbsp; $sung</td>
		</tr>
		<tr height=25>
			<td width='94' bgcolor='#F3F3F3'><p align='center'>나이</td>
			<td width='388'>&nbsp; $age</td>
		</tr>
		<tr height=25>
			<td width='94' height='13' bgcolor='#F3F3F3' align='center'>거주지역 및 개원 희망지역</td>
			<td width='388'>&nbsp; $area</td>
		</tr>
		<tr height=25>
			<td width='94' height='13' bgcolor='#F3F3F3' align='center'>$name님의 취업상태</td>
			<td width='388'>&nbsp; $state</td>
		</tr>
		
		
	   
		
		
		<tr height=25>
			<td bgcolor='#F3F3F3' align='center' colspan='2'>특이사항 및 문의사항</td>
		</tr>
		<tr height=25>
			<td bgcolor='#FFFFFF' colspan='2'>&nbsp;".nl2br(stripslashes($special))."</td>
		</tr>
		
	</table>

	</body>
	</html>";

	mail($to,$subjects,$sub,$headers,"-f $from");
}
	//mail($to,$subjects,$sub,$headers,"-f $from");

	

?>
<script>
alert('접수되었습니다.');
history.back();
</script>