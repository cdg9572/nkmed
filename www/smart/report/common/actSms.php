<?
session_start();

include "../inc/chkLogin.php";
include "../inc/dbConn.php";
include "../inc/func.php";

// condition �� ���� �б�
// condition �� ���� ����Ÿ�� Ȯ��
// ���� ���� �� ����..

// ��ü�߼� : ȸ����ü...11����? ��...���� �߼ۼ���

// ���º��߼� : �����ڵ�...���� �߼� ����..

// �����߼� ��ȭ��ȣ(?)...

//funcSendsms("�ֻ���","011","9257","5010","����ƼĪ�Դϴ�","00000000","000000","02","823","4540","����ƼĪ");

// ����ó��
if($mode == "del") {
	$query = "UPDATE `admin_member_sms` SET view_state = 'N' WHERE seq = '$seq'";
	mysql_query($query);
	echo "<script>alert('�����Ǿ����ϴ�.');parent.location.reload();</script>";
	exit;
}

$content =iconv("UTF-8","CP949",$content); // �ѱ۶���

if(!$content) {
	if($sendnum >= 1) echo "END"; // ȣ������� �˸�
	else {
		echo "���� �޼����� �����ϴ�.";
	}
	exit;
}
//-------------------------------------------------------------------------------------
if($condition == "all") { // ��ü

	if($sendnum >= 1) echo "END"; // ȣ������� �˸�
	else {
		echo "�����ڿ��� �����ϼ���.";
	}
} else if($condition == "lecture") { //����

	if(!$lecture_code) {
		echo "���°� ���õ��� �ʾҽ��ϴ�.";
		exit;
	}
	$query = "SELECT * FROM order_info WHERE goods_code = '$lecture_code' AND (status = 'Y' OR status = 'willDo' OR status = 'hold')";
	$result = mysql_query($query);
	$total = mysql_num_rows($result); // ��ü��

	if($total <= $sendnum)  echo "END"; // ȣ������� �˸�
	else {
		mysql_data_seek($result,$sendnum);

		$row = mysql_fetch_array($result);

		// ��ȭ��ȣ ��������
		$query = "SELECT mobile_no FROM member_info WHERE user_id = '".$row['user_id']."'";
		$result1 = mysql_query($query);
		$mobile_no = mysql_result($result1,0,0);
		echo ($sendnum+1)."/".$total;
		echo "<br><br>To. ".$row['user_name']."<br><br>".$mobile_no;

		$col_mobile_no = explode("-",$mobile_no);
		funcSendsms($row['user_name'],$col_mobile_no[0],$col_mobile_no[1],$col_mobile_no[2],$content,"00000000","000000","02","813","8112","����Ʈİ");

		if(($sendnum+1) == $total) {
			echo "<br><br><font color=red><b>���ۿϷ�</b></font>";
			$subject = addslashes($content);
			$query = "INSERT INTO `admin_member_sms` SET target ='���º�', lecture_code='$lecture_code', lecture_name='".$row['goods_name']."', subject ='$subject',reg_date =now(),reg_id='".$_SESSION['sess_AID']."',reg_name='".$_SESSION['sess_ANM'] ."',view_state = 'Y'";
			mysql_query($query);
		}
	}
	exit;

} else if($condition == "private") { //����,���Ϲ߼�

	if($sendnum >= 1) echo "END"; // ȣ������� �˸�
	else {
		if(!$phonenum) {
			echo "��ȭ��ȣ�� �Էµ��� �ʾҽ��ϴ�.";
			exit;
		}
		$phonenum = str_replace('-','',$phonenum); // '-'����

		if(strlen($phonenum) == 10)  {// ���� 3�ڸ��ΰ��
			$num1 = substr($phonenum,0,3);
			$num2 = substr($phonenum,3,3);
			$num3 = substr($phonenum,6,4);

		} else if(strlen($phonenum) == 11) { // ���� 4�ڸ��� ���
			$num1 = substr($phonenum,0,3);
			$num2 = substr($phonenum,3,4);
			$num3 = substr($phonenum,7,4);
		} else {
			echo "��ȭ��ȣ�� ��Ȯ�ϰ� �Է����ּ���.";
			exit;
		}
		funcSendsms("ȫ�浿",$num1,$num2,$num3,$content,"00000000","000000","02","813","8112",$content);
		echo "To. $num1.$num2.$num3 ";
		echo "<br><br><font color=red><b>���ۿϷ�</b></font>";
		$subject = addslashes($content);
		$query = "INSERT INTO `admin_member_sms` SET target ='����',subject ='$subject',reg_date =now(),reg_id='".$_SESSION['sess_AID']."',reg_name='".$_SESSION['sess_ANM'] ."',view_state = 'Y'";
		mysql_query($query);
	}


} else if($condition == "prof") {
	$query = "SELECT * FROM admin_member_professor WHERE state ='Y' AND view_state = 'Y'";
	$result = mysql_query($query);
	$total = mysql_num_rows($result); // ��ü��

	if($total <= $sendnum)  echo "END"; // ȣ������� �˸�
	else {
		mysql_data_seek($result,$sendnum);

		$row = mysql_fetch_array($result);

		// ��ȭ��ȣ ��������
		$mobile_no = $row['mobile_no'];
		echo ($sendnum+1)."/".$total;
		echo "<br><br>To. ".$row['user_name']."<br><br>".$mobile_no;

		$col_mobile_no = explode("-",$mobile_no);
		//funcSendsms($row['user_name'],$col_mobile_no[0],$col_mobile_no[1],$col_mobile_no[2],$content,"00000000","000000","02","823","4540","����ƼĪ");

		if(($sendnum+1) == $total) {
			echo "<br><br><font color=red><b>���ۿϷ�</b></font>";
			$subject = addslashes($content);
			$query = "INSERT INTO `admin_member_sms` SET target ='����', lecture_code='$lecture_code', lecture_name='".$row['goods_name']."', subject ='$subject',reg_date =now(),reg_id='".$_SESSION['sess_AID']."',reg_name='".$_SESSION['sess_ANM'] ."',view_state = 'Y'";
			mysql_query($query);
		}
	}
	exit;
	
}

?>