<?
CLASS Login extends Dbconn
{
	private $DB;
	private $GP;
	function __construct($DB = array()) {
		global $C_DB, $GP;
		$this -> DB = (!empty($DB))? $DB : $C_DB;
		$this -> GP = $GP;
	}
	
	// desc	 : 어드민 로그인 history
	// auth  : JH 2013-09-16
	// param :
	function Admin_Login_history($args = '') {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
			
			$qry = "
				update
					tblAdmin
				set
					mb_lastlogin_date = '$mb_lastlogin_date',
					mb_lastlogin_ip = '$mb_lastlogin_ip',
					mb_login_number = (mb_login_number + 1)
				where
					mb_id = '$mb_id'					
			";
			
			$rst = $this -> DB ->execSqlUpdate($qry);
			return $rst;			
	}

	// desc	 : 어드민 로그인정보
	// auth  : JH 2013-09-16
	// param :
	function AdminLoginInfoCheck($args){
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$rst = false;
		$nowData = date("Y-m-d");
		$qry = "
			select * from tblAdmin where mb_id ='$adm_mem_id' and mb_password='$adm_mem_pwd'
		";
		$rst = $this -> DB ->execSqlOneRow($qry);
		return $rst;

	}
	
	
	// desc	 : 회원로그인 정보
	// auth  : JH 2013-10-04 금요일
	// param :
	function userLogin($args = '') {

		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT
				*
			FROM
				tblMember
			where
			1=1 
			and mb_email = '$mb_email'
			and mb_password = '$mb_password'
			and mb_del_flag = 'N'
			and mb_status = 'M'
		";

		$rst = $this -> DB -> execSqlOneRow($qry);
		return $rst;
	}
	
	// desc	 : 회원로그인 정보
	// auth  : JH 2013-10-04 금요일
	// param :
	function userLogin_ID($args = '') {

		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT
				*
			FROM
				tblMember
			where
			1=1 
			and mb_id = '$mb_id'
			and mb_password = '$mb_password'
			and mb_del_flag = 'N'
			and mb_status = 'M'
		";

		$rst = $this -> DB -> execSqlOneRow($qry);
		return $rst;
	}
	
	// desc	 : 회원로그인 정보
	// auth  : JH 2013-10-04 금요일
	// param :
	function userLogin_ID_New($args = '') {

		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT
				*
			FROM
				tblMember
			where
			1=1 
			and mb_id = '$mb_id'
			and mb_del_flag = 'N'
			and mb_status = 'M'
		";

		$rst = $this -> DB -> execSqlOneRow($qry);
		return $rst;
	}	
	
	
	// desc	 : 회원로그인 정보-NAVER
	// auth  : 
	// param :
	function userLoginNaver($args = '') {

		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT
				*
			FROM
				tblMember
			where
			1=1 
			and mb_id = '$mb_id'
			and mb_gubun = 'naver'
			and mb_status = 'M'
		";
		//echo $qry;
		$rst = $this -> DB -> execSqlOneRow($qry);
		return $rst;
	}	
		
	// desc	 : 회원 로그인 history
	// auth  : JH 2013-10-04 금요일
	// param :
	function Mem_Login_history_ID($args = '') {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
			
			$qry = "
				update
					tblMember
				set
					mb_lastlogin_date = '$mb_lastlogin_date',
					mb_lastlogin_ip = '$mb_lastlogin_ip',
					mb_login_number = (mb_login_number + 1)
				where
					mb_id = '$mb_id'					
			";
			$rst = $this -> DB ->execSqlUpdate($qry);
			return $rst;			
	}
	
	// desc	 : 회원 로그인 history
	// auth  : JH 2013-10-04 금요일
	// param :
	function Mem_Login_history($args = '') {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
			
			$qry = "
				update
					tblMember
				set
					mb_lastlogin_date = '$mb_lastlogin_date',
					mb_lastlogin_ip = '$mb_lastlogin_ip',
					mb_login_number = (mb_login_number + 1)
				where
					mb_email = '$mb_email'					
			";
			$rst = $this -> DB ->execSqlUpdate($qry);
			return $rst;			
	}

}
?>