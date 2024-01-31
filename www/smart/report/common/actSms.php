<?
session_start();

include "../inc/chkLogin.php";
include "../inc/dbConn.php";
include "../inc/func.php";

// condition 에 따른 분기
// condition 에 따른 데이타값 확인
// 전번 추출 후 전송..

// 전체발송 : 회원전체...11만건? ㅋ...엔드 발송순번

// 강좌별발송 : 강좌코드...엔드 발송 순번..

// 개별발송 전화번호(?)...

//funcSendsms("최상현","011","9257","5010","아이티칭입니다","00000000","000000","02","823","4540","아이티칭");

// 삭제처리
if($mode == "del") {
	$query = "UPDATE `admin_member_sms` SET view_state = 'N' WHERE seq = '$seq'";
	mysql_query($query);
	echo "<script>alert('삭제되었습니다.');parent.location.reload();</script>";
	exit;
}

$content =iconv("UTF-8","CP949",$content); // 한글땜에

if(!$content) {
	if($sendnum >= 1) echo "END"; // 호출금지를 알림
	else {
		echo "전송 메세지가 없습니다.";
	}
	exit;
}
//-------------------------------------------------------------------------------------
if($condition == "all") { // 전체

	if($sendnum >= 1) echo "END"; // 호출금지를 알림
	else {
		echo "관리자에게 문의하세요.";
	}
} else if($condition == "lecture") { //강좌

	if(!$lecture_code) {
		echo "강좌가 선택되지 않았습니다.";
		exit;
	}
	$query = "SELECT * FROM order_info WHERE goods_code = '$lecture_code' AND (status = 'Y' OR status = 'willDo' OR status = 'hold')";
	$result = mysql_query($query);
	$total = mysql_num_rows($result); // 전체수

	if($total <= $sendnum)  echo "END"; // 호출금지를 알림
	else {
		mysql_data_seek($result,$sendnum);

		$row = mysql_fetch_array($result);

		// 전화번호 가져오기
		$query = "SELECT mobile_no FROM member_info WHERE user_id = '".$row['user_id']."'";
		$result1 = mysql_query($query);
		$mobile_no = mysql_result($result1,0,0);
		echo ($sendnum+1)."/".$total;
		echo "<br><br>To. ".$row['user_name']."<br><br>".$mobile_no;

		$col_mobile_no = explode("-",$mobile_no);
		funcSendsms($row['user_name'],$col_mobile_no[0],$col_mobile_no[1],$col_mobile_no[2],$content,"00000000","000000","02","813","8112","베스트캅");

		if(($sendnum+1) == $total) {
			echo "<br><br><font color=red><b>전송완료</b></font>";
			$subject = addslashes($content);
			$query = "INSERT INTO `admin_member_sms` SET target ='강좌별', lecture_code='$lecture_code', lecture_name='".$row['goods_name']."', subject ='$subject',reg_date =now(),reg_id='".$_SESSION['sess_AID']."',reg_name='".$_SESSION['sess_ANM'] ."',view_state = 'Y'";
			mysql_query($query);
		}
	}
	exit;

} else if($condition == "private") { //개인,단일발송

	if($sendnum >= 1) echo "END"; // 호출금지를 알림
	else {
		if(!$phonenum) {
			echo "전화번호가 입력되지 않았습니다.";
			exit;
		}
		$phonenum = str_replace('-','',$phonenum); // '-'제거

		if(strlen($phonenum) == 10)  {// 국이 3자리인경우
			$num1 = substr($phonenum,0,3);
			$num2 = substr($phonenum,3,3);
			$num3 = substr($phonenum,6,4);

		} else if(strlen($phonenum) == 11) { // 국이 4자리인 경우
			$num1 = substr($phonenum,0,3);
			$num2 = substr($phonenum,3,4);
			$num3 = substr($phonenum,7,4);
		} else {
			echo "전화번호를 정확하게 입력해주세요.";
			exit;
		}
		funcSendsms("홍길동",$num1,$num2,$num3,$content,"00000000","000000","02","813","8112",$content);
		echo "To. $num1.$num2.$num3 ";
		echo "<br><br><font color=red><b>전송완료</b></font>";
		$subject = addslashes($content);
		$query = "INSERT INTO `admin_member_sms` SET target ='개별',subject ='$subject',reg_date =now(),reg_id='".$_SESSION['sess_AID']."',reg_name='".$_SESSION['sess_ANM'] ."',view_state = 'Y'";
		mysql_query($query);
	}


} else if($condition == "prof") {
	$query = "SELECT * FROM admin_member_professor WHERE state ='Y' AND view_state = 'Y'";
	$result = mysql_query($query);
	$total = mysql_num_rows($result); // 전체수

	if($total <= $sendnum)  echo "END"; // 호출금지를 알림
	else {
		mysql_data_seek($result,$sendnum);

		$row = mysql_fetch_array($result);

		// 전화번호 가져오기
		$mobile_no = $row['mobile_no'];
		echo ($sendnum+1)."/".$total;
		echo "<br><br>To. ".$row['user_name']."<br><br>".$mobile_no;

		$col_mobile_no = explode("-",$mobile_no);
		//funcSendsms($row['user_name'],$col_mobile_no[0],$col_mobile_no[1],$col_mobile_no[2],$content,"00000000","000000","02","823","4540","아이티칭");

		if(($sendnum+1) == $total) {
			echo "<br><br><font color=red><b>전송완료</b></font>";
			$subject = addslashes($content);
			$query = "INSERT INTO `admin_member_sms` SET target ='강사', lecture_code='$lecture_code', lecture_name='".$row['goods_name']."', subject ='$subject',reg_date =now(),reg_id='".$_SESSION['sess_AID']."',reg_name='".$_SESSION['sess_ANM'] ."',view_state = 'Y'";
			mysql_query($query);
		}
	}
	exit;
	
}

?>