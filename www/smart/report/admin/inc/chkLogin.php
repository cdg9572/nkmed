<?
if(!$_SESSION['sess_AID'] || !$_SESSION['sess_ANM'] ) {
	echo "<script>top.location.href='./login.html'</script>";
	exit;
}
?>