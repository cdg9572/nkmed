<?

##################
###   Dir 참조 ###
##################

$ADMIN_ROOT = $DOCUMENT_ROOR."/admin";



##################
###   게시판   ###
##################





if($dir == "manager") {
	$dirName = "사이트 관리";
	if($menu == "Manager") {
		$menuName	= "운영자관리";
		$tbl		= "smart_manager";
		//$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/community_notice/";
	}

	if($menu == "Op") {
		$menuName	= "영업자 ASP 관리";
		$tbl		= "smart_opASP";
		//$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/community_notice/";
	}
}
else if($dir == "reserve") {
	$dirName = "예약 관리";
	if($menu == "ReserveList") {
		$menuName	= "예약관리 Listup";
		$tbl		= "smart_reserve";
		//$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/community_notice/";
	}

	if($menu == "GenExam") {
		$menuName	= "일반 Listup";
		$tbl		= "hana_category_item_data";
		//$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/community_notice/";
	}
}

else if($dir == "exam") {
	$dirName = "검진 관리";
	if($menu == "TotalExam") {
		$menuName	= "종합검진 Listup";
		$tbl		= "hana_category_item_data";
		//$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/community_notice/";
	}

	if($menu == "GenExam") {
		$menuName	= "일반 Listup";
		$tbl		= "hana_category_item_data";
		//$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/community_notice/";
	}
}
else if($dir == "customer") {
	$dirName = "업체관리";
	if($menu == "Manager") {
		$menuName	= "업체담당자관리";
		$tbl		= "t_member";
		//$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/community_notice/";
	}
	else if($menu == "Customer") {
		$menuName	= "업체관리";
		$tbl		= "t_asp";
		$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/t_asp/";
	}
	else if($menu == "Member") {
		$menuName	= "사용자관리";
		$tbl		= "mcm_user";
		//$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/t_user/";
	}
	else if($menu == "Member_test") {
		$menuName	= "사용자관리";
		$tbl		= "t_user";
		//$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/t_user/";
	}
	
	else if($menu == "Banner") {
		$menuName	= "배너관리";
		$tbl		= "t_banner";
		$uploadDir	= $DOCUMENT_ROOT."/datacenter/upFiles/t_banner/";
	}
}


#########################
###   매출/통계관리   ###
#########################
else if($dir == "order") {
	$dirName = "매출/통계관리";
}



$actionPage = $dir."/proc".$menu.".php";
?>