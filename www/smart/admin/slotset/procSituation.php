<?
session_start();
include "../../inc/dbConn.php";
include  "../../inc/func.php";
$tbl = "smart_reserve";
//header("Content-Type:text/html;charset=utf-8") ;

mysql_query("set names utf8;");


//==== register_global 처리
@extract($_GET);
@extract($_POST);
@extract($_SERVER);
@extract($_FILES);
@extract($_ENV);
@extract($_COOKIE);
@extract($_SESSION);


testing_dsp("post");
testing_dsp("get");

if($menu == "Situation"){#평일 설정
	$limit_num = $num * $num2;
	//echo $limit_num;

	$query = "select * from reserve_setday where day_type='1' and view_state='Y'";
	$result = mysql_query($query);
	$cnt = mysql_num_rows($result);
	
	if($cnt == 0){#추가시
		for($k=0;$k<$num;$k++){
			$in_item = "";
			for($i=0;$i<=$num2;$i++){
				$in_item .= $time[$k][$i].",";
			}			
			$i_query = "insert into reserve_setday(day_type, timezone, item1,item2, item3, item4, item5,item6,item7,item8, reg_date,reg_id,view_state) values('1','".$k."' ".$in_item." now(),'".$sess_AID."','Y');";

			//echo $i_query;
			//exit;
			$result = mysql_query($i_query);

		}
		MYSQL_CLOSE();
		echo "<script language='JavaScript'>parent.location.href='../index.html?dir=".$dir."&menu=".$menu."'</script>";
	}
	else{#업데이트
		for($k=0;$k<$num;$k++){
			$in_item = "";
			for($i=0;$i<=$num2;$i++){
				if($i != 0){
					$in_item .= "item".$i."=".$time[$k][$i].",";
				}
			}	
			$i_query = "update reserve_setday set ".$in_item." reg_id='".$sess_AID."',reg_date=now() where day_type='1' and timezone='".$k."' ";
			mysql_query($i_query);
			//echo $i_query."<br>";
			//exit;
		}
		//exit;
		MYSQL_CLOSE();
		echo "<script language='JavaScript'>parent.location.href='../index.html?dir=".$dir."&menu=".$menu."'</script>";
	}
}
else if($menu == "Ban"){#반일 설정
	$limit_num = $num * $num2;
	$query = "select * from reserve_setday where day_type='2' and view_state='Y'";
	//echo $query;
	//exit;
	$result = mysql_query($query);
	$cnt = mysql_num_rows($result);
	
	if($cnt == 0){#추가시
		for($k=0;$k<$num;$k++){
			$in_item = "";
			for($i=0;$i<=$num2;$i++){
				$in_item .= $time[$k][$i].",";
			}			
			$i_query = "insert into reserve_setday(day_type, timezone, item1,item2, item3, item4, item5, item6,item7,item8,reg_date,reg_id,view_state) values('2','".$k."' ".$in_item." now(),'".$sess_AID."','Y');";
			$result = mysql_query($i_query);

		}
		MYSQL_CLOSE();
		echo "<script language='JavaScript'>parent.location.href='../index.html?dir=".$dir."&menu=".$menu."'</script>";
	}
	else{#업데이트
		for($k=0;$k<$num;$k++){
			$in_item = "";
			for($i=0;$i<=$num2;$i++){
				if($i != 0){
					$in_item .= "item".$i."=".$time[$k][$i].",";
				}
			}	
			$i_query = "update reserve_setday set ".$in_item." reg_id='".$sess_AID."',reg_date=now() where day_type='2' and timezone='".$k."' ";
			mysql_query($i_query);
		//	echo $i_query."<br>";
			//exit;
		}
		//exit;
		MYSQL_CLOSE();
		echo "<script language='JavaScript'>parent.location.href='../index.html?dir=".$dir."&menu=".$menu."'</script>";
	}
}
else if($menu == "Target"){#지정일
	$limit_num = $num * $num2;

	$query = "select * from reserve_setday where day_type='3' and view_state='Y' and left(day_start,10)='".$start_date."'";

	$result = mysql_query($query);
	$cnt = mysql_num_rows($result);

	if($cnt == 0){#추가시
		for($k=0;$k<$num;$k++){
			$in_item = "";
			for($i=0;$i<=$num2;$i++){
				$in_item .= $time[$k][$i].",";
			}			
			$i_query = "insert into reserve_setday(day_type,day_start, timezone, item1,item2, item3, item4, item5, item6,item7,item8,reg_date,reg_id,view_state) values('3','".$start_date."','".$k."' ".$in_item." now(),'".$sess_AID."','Y');";
			//echo $i_query."<br>";
			
			$result = mysql_query($i_query);

		}
		//exit;
		MYSQL_CLOSE();
		//exit;
		echo "<script language='JavaScript'>parent.location.href='../index.html?dir=".$dir."&menu=".$menu."'</script>";
	}
	else{#업데이트
		for($k=0;$k<$num;$k++){
			$in_item = "";
			for($i=0;$i<=$num2;$i++){
				if($i != 0){
					$in_item .= "item".$i."=".$time[$k][$i].",";
				}
			}	
			$i_query = "update reserve_setday set ".$in_item." reg_id='".$sess_AID."',reg_date=now() where day_type='3' and timezone='".$k."' and left(day_start,10)='".$start_date."'";
			mysql_query($i_query);
			//echo $i_query."<br>";
			
		}
		//exit;
		MYSQL_CLOSE();
		echo "<script language='JavaScript'>parent.location.href='../index.html?dir=".$dir."&menu=".$menu."'</script>";
	}

}
else if($menu == "Holiday" && $seq == ""){#휴무일
	$query = "select * from reserve_holiday where day_type='4' and view_state='Y' and left(day_start,10)='".$start_date."'";
	
	$result = mysql_query($query);
	$cnt = mysql_num_rows($result);
	
	if($cnt == 0){#추가시
		$i_query = "insert into reserve_holiday(day_type,day_start,day_end, comment, reg_date,reg_id,view_state) values('4','".$start_date."','".$end_date."', '".$comment."', now(),'".$sess_AID."','Y');";
	}
	else{
		$i_query = "update reserve_holiday set day_start='".$start_date."', comment='".$comment."' where day_type='4' and left(day_start,10)='".$start_date."'";
	}
	//echo $i_query;
	//exit;
	
	$result = mysql_query($i_query);
		
	MYSQL_CLOSE();
	echo "<script language='JavaScript'>parent.location.href='../index.html?dir=".$dir."&menu=".$menu."'</script>";
	
}
else if($menu == "Holiday" && $seq != ""){#휴무일 삭제
	$i_query = "update reserve_holiday set view_state='N' where seq='".$seq."'";

	
	$result = mysql_query($i_query);
	MYSQL_CLOSE();
	echo "<script language='JavaScript'>parent.location.href='../index.html?dir=".$dir."&menu=".$menu."'</script>";
}

exit;
?>