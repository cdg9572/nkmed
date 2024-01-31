<?
CLASS Duty extends Dbconn
{
	private $DB;
	private $GP;
	function __construct($DB = array()) {
		global $C_DB, $GP;
		$this -> DB = (!empty($DB))? $DB : $C_DB;
		$this -> GP = $GP;
	}
	


	function Duty_Info_Del($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			delete from tblSchDuty where tsd_idx = '$tsd_idx' and tsd_dr_name = '$tsd_dr_name'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}
	
	function Duty_Info_Del2($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			delete from tblSchDuty where tsd_idx = '$tsd_idx'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}
// and tsd_dr_name = 

	// desc	 :
	// auth  : JH 2013-09-16 월요일
	// param
	function Duty_Info($args) {
		
		if($args['tsd_clinic'] != '') {
			$addQry .= " and  tsd_clinic = '".$args['tsd_clinic']."' ";
		}	
		
		if($args['tsd_dr_name'] != '') {
			$addQry .= "and tsd_dr_name like '".$args['tsd_dr_name']."%' ";
		}	
		
		// 추가 해야함  and tsd_clinic = '".$args['tsd_clinic']."' and tsd_dr_name = '".$args['tsd_dr_name']."'
        $qry = "
			select * from tblSchDuty where tsd_date = '".$args['tsd_date']."' $addQry ;
		";
		// $qry = "
		// 	select * from tblSchDuty where tsd_date = '".$args['tsd_date']."' $addQry  order by FIELD(tsd_clinic, 'A', 'B', 'C', 'F', 'M', 'N', 'E', 'H', 'I', 'L', 'G', 'J', 'K', 'D');
		// ";
	//	echo $qry;
		$rst =  $this -> DB -> execSqlList($qry);
		return $rst;
	}
	
	
	function Duty_Info_New($args) {
		global $C_Func;
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		global $C_ListClass;

		$tail = "";
		
		$addQry = " left(tsd_date,7)='$tsd_date'";


		$args['show_row'] = $show_row;
		$args['show_page'] = 5;
		$args['q_idx'] = "tsd_idx";
		$args['q_col'] = "*";
		$args['q_table'] = " tblSchDuty";
		$args['q_where'] = $addQry;
		$args['q_order'] = "tsd_clinic";
		$args['q_group'] = "";
		$args['tail'] = "";
		$args['q_see'] = "";
		return $C_ListClass -> listInfo($args);
	}	

    function Duty_List_New($args) {
		global $C_Func;
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		global $C_ListClass;

		$tail = "";
		
		$addQry = " tsd_date > CURDATE() and tsd_clinic = 'N'";

		$args['show_row'] = $show_row;
		$args['show_page'] = 5;
		$args['q_idx'] = "tsd_idx";
		$args['q_col'] = "*";
		$args['q_table'] = " tblSchDuty";
		$args['q_where'] = $addQry;
		$args['q_order'] = "tsd_date asc";
		$args['q_group'] = "";
		$args['tail'] = "";
		$args['q_see'] = "";
		return $C_ListClass -> listInfo($args);
	}	
	
	
	function Duty_Info_Main($select_Date, $StartPoint) {
		
		$qry = "
			select * from tblSchDuty where tsd_date = '".$select_Date."' LIMIT $StartPoint , 6
		";
		$rst =  $this -> DB -> execSqlList($qry);
		return $rst;
	}


	function Duty_Info2($clinic) {
		
		//if (is_array($clinic)) foreach ($clinic as $k => $v) ${$k} = $v;
		
	//	$qry = "select distinct tsd_dr_name  from tblSchDuty where tsd_clinic = '$clinic'";
		$qry = "select
					 DISTINCT   SUBSTRING_INDEX (SUBSTRING_INDEX(tblSchDuty.tsd_dr_name,',',numbers.n),',',-1) tsd_dr_name
							  
					from 
					   (select  1 n union  all  select 2  
						union  all  select  3  union  all select 4 
						union  all  select  5  union  all  select  6
						union  all  select  7  union  all  select  8 
						union  all  select  9 union  all  select  10) numbers INNER  JOIN tblSchDuty
						on CHAR_LENGTH ( tblSchDuty.tsd_dr_name ) 
						  - CHAR_LENGTH ( REPLACE ( tblSchDuty.tsd_dr_name ,  ',' ,  '' ))>= numbers . n-1
					  where tsd_clinic = '$clinic' ";
		
		$rst =  $this -> DB -> execSqlList($qry);

		//echo $qry;
		//exit;

		return $rst;
	}

	// desc	 :
	// auth  : JH 2013-09-16 월요일
	// param
	function Duty_Info_View($args) {
		
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			select *  from tblSchDuty where tsd_idx = '$tsd_idx'
		";
		$rst =  $this -> DB -> execSqlOneRow($qry);
		return $rst;
	}

	function Duty_Info_Modi($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			update
				tblSchDuty
			set
			
				tsd_date = '$tsd_date',
				tsd_time = '$tsd_time',
				tsd_clinic = '$tsd_clinic',
				tsd_dr_name = '$tsd_dr_name'
			where
				tsd_idx = '$tsd_idx'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}


	function Duty_Info_Reg($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			INSERT INTO
				tblSchDuty
				(
					tsd_idx,
					tsd_date,
					tsd_time,
					tsd_clinic,
					tsd_dr_name,
					tsd_regdate
				)
				VALUES
				(
					''
					, '$tsd_date'
					, '$tsd_time'
					, '$tsd_clinic'
					, '$tsd_dr_name'
					, NOW()

				)
			";
		$rst =  $this -> DB -> execSqlInsert($qry);
		return $rst;
	}
	
	// desc	 : 
	// auth  : JH 2012-12-05 2012-11-06
	// param
	function Duty_List ($select_Date) {
		global $C_Func;
		global $C_ListClass;

		$tail = "";
		
		$addQry = " tsd_date='".$select_Date."'  ";
		
		$args['show_row'] = $show_row;
		$args['show_page'] = 10;
		$args['q_idx'] = "tsd_idx";
		$args['q_col'] = "*";
		$args['q_table'] = "tblSchDuty";
		$args['q_where'] = $addQry;
		$args['q_order'] = "";
		$args['q_group'] = "";
		$args['tail'] = "tsd_clinic=" . $tsd_clinic . "&tsd_dr_name=" . $tsd_dr_name;
		$args['q_see'] = "y";
		return $C_ListClass -> listInfo($select_Date);
	}
	
	function Duty_All_List($args) {
		global $GP;
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			select tsd_clinic, tsd_dr_name from tblSchDuty where tsd_clinic ='$tsd_clinic' group by tsd_dr_name
			";
	//	echo $qry;
		$rst =  $this -> DB -> execSqlList($qry);
		return $rst;
	}
	
	
	function Duty_Info3($clinic,$tsd_dr_name) {
		
		//if (is_array($clinic)) foreach ($clinic as $k => $v) ${$k} = $v;
		
	//	$qry = "select distinct tsd_dr_name  from tblSchDuty where tsd_clinic = '$clinic'";
		$qry = "select
					 DISTINCT   SUBSTRING_INDEX (SUBSTRING_INDEX(tblSchDuty.tsd_dr_name,',',numbers.n),',',-1) tsd_dr_name
							  
					from 
					   (select  1 n union  all  select 2  
						union  all  select  3  union  all select 4 
						union  all  select  5  union  all  select  6
						union  all  select  7  union  all  select  8 
						union  all  select  9 union  all  select  10) numbers INNER  JOIN tblSchDuty
						on CHAR_LENGTH ( tblSchDuty.tsd_dr_name ) 
						  - CHAR_LENGTH ( REPLACE ( tblSchDuty.tsd_dr_name ,  ',' ,  '' ))>= numbers . n-1
					  where tsd_clinic = '$clinic' ";
		
		$rst =  $this -> DB -> execSqlList($qry);

	//	echo $qry;
		//exit;

		return $rst;
	}
	
	
}
?>