<?
	#echo $_GET[Opt1];
	echo "<script language='JavaScript'>alert('예약 되었습니다..');</script>";
	echo "<script language='JavaScript'>parent.parent.location.href='http://smart.nkhospital.net/ap/reserve/reserveResult.html?$_GET[Opt1]';</script>";
?>