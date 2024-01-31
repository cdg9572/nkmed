<?
#환자 예약정보 확인
function Check_INFO( $nm , $gd, $t ){
	$tmp = "";
	$sql = " SELECT * FROM smart_mj_il 
					WHERE mname='".$nm."' AND gdate='".$gd."' AND mtel='".$t."' ";
	if( $res = mysql_query($sql) ){
		$row = mysql_fetch_array($res);
		$tmp = $row["midx"];
#		echo "<script>alert('".$tmp."');</script>";
	}else{
		$tmp = mysql_error();
	}
	return $tmp;
}

#환자업데이트
function UpInfo( $a, $b, $c, $d, $e, $midx, $em, $addr ){
	$sql = " UPDATE smart_mj_il SET 
					mname = '$a', 	mbate = '$b', 	mtel = '$c'
					, ms='$d', gdate='$e', mdt='".date("Y-m-d")."', mti='".date("H:i:s")."'
					, em='$em', addr='$addr'
				WHERE midx='$midx' ";
	#echo $sql;
	mysql_query($sql);
}

#환자정보등록
function RegInfo( $nm, $bday, $tel, $s, $gd, $em, $addr, $rseq ){
	$tmp = "";
	$sql = "INSERT INTO smart_mj_il "
			." ( midx, mname, mbate, mtel,  ms, wdt, wti, gdate, em, addr, rseq ) "
			." VALUES "
			. " ( 0, '".$nm."', '".str_replace("-","",$bday)."', '".$tel."', '".$s."', '".date("Y-m-d")."', '".date("H:i:s")."', '".$gd."' , '".$em."' , '".$addr."', 'C".$rseq."' )  ";
	if( mysql_query($sql) ){
		$sql = " SELECT MAX(midx) midx FROM smart_mj_il 
					WHERE mname='".$nm."' AND mbate='".str_replace("-","",$bday)."' 
							AND mtel='".$tel."' AND  ms='".$s."' ";
		if( $res = mysql_query($sql) ){
			$row = mysql_fetch_array($res);
			$tmp = $row["midx"];
		}
	}else{
		$tmp = mysql_error();
	}
	return $tmp;
}

#환자정보등록
function RegInfo2( $nm, $bday, $tel, $s, $lf, $gd ){
	$tmp = "";
	$sql = "INSERT INTO smart_mj_il "
			." ( midx, mname, mbate, mtel,  ms, mlfcode, wdt, wti, gdate ) "
			." VALUES "
			. " ( 0, '".$nm."', '".str_replace("-","",$bday)."', '".$tel."', '".$s."', '".$lf."', '".date("Y-m-d")."', '".date("H:i:s")."', '".$gd."' )  ";
	if( mysql_query($sql) ){
		$sql = " SELECT MAX(midx) midx FROM smart_mj_il 
					WHERE mname='".$nm."' AND mbate='".str_replace("-","",$bday)."' 
							AND mtel='".$tel."' AND  ms='".$s."' ";
		if( $res = mysql_query($sql) ){
			$row = mysql_fetch_array($res);
			$tmp = $row["midx"];
		}
	}else{
		$tmp = mysql_error();
	}
	return $tmp;
}

?>