<?# echo "test3".$_GET[id]; 
header("Content-Type:text/html;charset=utf-8");
include "inc/dbConn.php";
#include  "inc/func.php";

if($_GET[md]=="rt"){
	echo "<script>parent.frm2.cknum2.value = \"".$_GET[id]."\";</script>";
}elseif($_GET[md]=="check"){
		//1차 점검  
		//echo $_GET[name1]."11<br/>"; 	echo $_GET[tel2]."22<br/>";
		$sql = " SELECT count(*) CNT, mobile  FROM smart_category_item_data WHERE NAME='".$_GET[name1]."' AND SHA1(REPLACE(MOBILE,'-',''))='".$_GET[tel2]."'  ";
		if( $res = mysql_query($sql) ){
			$row = mysql_fetch_array($res);
			if( $row[CNT] == 0 ){
				echo "<script>alert('등록된 결과정보가 없거나 수검당시 연락처 및 정보가 다를 수 있습니다.\\n확인이 필요하시면 CRM팀으로 연락 부탁드립니다.');</script>";
			}else{
				if( $_SERVER['REMOTE_ADDR']== "114.129.126.128" ){
					echo "<script>location.href='http://192.168.1.252/sr_chksms.php?md=check&mb=$row[mobile]'</script>";
				}else{
					echo "<script>location.href='http://119.197.19.46:8000/sr_chksms.php?md=check&mb=$row[mobile]'</script>";
				}
			}
		}else{
			echo "<script>alert('오류가 발생되었습니다. 잠시뒤에 다시 시도 해주세요.\\n 지속될경우 콜센터로 연락 부탁드립니다. \\n불편을 드려 죄송합니다.');</script>";
		}
	#echo $sql;
}else{
	echo "작업중";
}


?>
