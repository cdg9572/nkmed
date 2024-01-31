<?	

#echo "test";
if ( $_POST[ty] == "f" ){ $tp1 = 5; }else{ $tp1=6; }	#공통 66 , 70 세

if($_POST[s]=="F"){ $tp = "6"; }else{ $tp = "5"; }	#암페이지(남/여)

function mj_il_info( $val ){
	$sql = " SELECT * FROM smart_mj_il WHERE midx='".$val."' ";
	#echo $sql;
	return mysql_query($sql);
}

function mj_am_info( $val ){
	$sql = " SELECT * FROM smart_mj_am WHERE midx='".$val."' ";
	return mysql_query($sql);
}

function mj_info( $val ){
	$sql = " SELECT * FROM smart_mj_il WHERE midx='".$val."' ";
	return mysql_query($sql);
}

?>