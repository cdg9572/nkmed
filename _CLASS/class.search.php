<?
CLASS Search extends Dbconn
{
	private $DB;
	private $GP;
	function __construct($DB = array()) {
		global $C_DB, $GP;
		$this -> DB = (!empty($DB))? $DB : $C_DB;
		$this -> GP = $GP;
	}
	
	function Search_List ($args = '') {
		global $C_Func, $GP, $C_ListClass;
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

        $addQry = "";
		$addQry = " dp_del_flag='N' and dp_code='A' ";
		$addQry .= " AND dp_name like ('%$schtxt%') ";
		$qry = "
			select * from tbldepartment where $addQry order by dp_idx asc
        ";
		$rst =  $this -> DB -> execSqlList($qry);
        $rtn[] = $rst;
        
        $addQry = "";
		$addQry = " dp_del_flag='N' and dp_code='B' ";
		$addQry .= " AND dp_name like ('%$schtxt%') ";
		$qry = "
             select * from tbldepartment where $addQry order by dp_idx asc
		";
		$rst =  $this -> DB -> execSqlList($qry);
        $rtn[] = $rst;
        
        $addQry = "";
		$addQry = " dp_del_flag='N' and dp_code='C' ";
		$addQry .= " AND dp_name like ('%$schtxt%') ";
		$qry = "
            select * from tbldepartment where $addQry order by dp_idx asc
		";
		$rst =  $this -> DB -> execSqlList($qry);
		$rtn[] = $rst;

		
		$addQry = " A.vd_link1 != '' ";
		$addQry = " A.vd_gubun != 'I' ";		
		$addQry = " A.vd_delflag='N' ";
		$addQry .= " AND (FIND_IN_SET('$schtxt',A.vd_tag) || A.vd_title like ('%$schtxt%') || A.vd_content like ('%$schtxt%')) || A.vd_dr_name like ('%$schtxt%')";

		$qry = "
			select * from tblVideo A left outer join tblDoctor B On A.vd_dr_idx = B.dr_idx where $addQry order by A.vd_regdate desc
		";
		$rst =  $this -> DB -> execSqlList($qry);
		$rtn[] = $rst;
		//echo $qry;
		//의료진
		$addQry = "";
		$addQry = " dr_delflag='N' ";
        $resultKey = "";

        if(!empty($GP->NEW_MOBILE_CENTER_ALL)){
            foreach ($GP->NEW_MOBILE_CENTER_ALL as $key => $value) {      
                
                if (strpos($value, $schtxt) !== false) {
                    $resultKey = $key;
                    break;
                }
            }
        }

		//$addQry .= " AND (dr_name like ('%$schtxt%') || dr_clinic2 like ('%$resultKey%'))";
		$addQry .= " AND (dr_name like ('%$schtxt%')";
        $addQry .= " || FIND_IN_SET('$resultKey', dr_clinic2) > 0
                    OR FIND_IN_SET('$resultKey,', dr_clinic2) > 0
                    OR FIND_IN_SET(',$resultKey', dr_clinic2) > 0
                    OR dr_clinic2 = '$resultKey'
					OR dr_book like ('%$schtxt%'))
                    ";
		$qry = "
			select * from tblDoctor where $addQry order by  dr_desc desc
		";
		
		$rst =  $this -> DB -> execSqlList($qry);
		$rtn[] = $rst;

        //

		$addQry = "";
		$addQry = " A.jb_del_flag = 'N'";
		$addQry .=" AND (A.jb_title like '%$schtxt%' || B.jb_content like '%$schtxt%') ";
		$addQry .= "AND A.jb_code in ('10','80','140','90', '50', '20', '240' )";
		$order = "A.jb_order ASC, A.jb_depth DESC"; 
		$qry = "
			SELECT 
				A.*, B.jb_content 
			FROM 
				tblJhBoardList A INNER JOIN tblJhBoardDetail B ON A.jb_idx=B.jb_idx
			WHERE
				$addQry
			order by $order
			$limit
        ";
       
		$rst =  $this -> DB -> execSqlList($qry);
		$rtn[] = $rst;
		
		return $rtn;
	}
}
?>