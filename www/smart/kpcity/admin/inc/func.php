<?
//include("smscfg.php");  // SMS 설정파일
//include("inc_sms.php"); // SMS 클래스
function item_change($item){
	if($item == "기본"){
		$items = "item1";
	}
	else if($item == "일반"){
		$items = "item9";
	}
	//echo $items."<br>";
	
	return $items;
}



function sel_item($item){
	if($item == "item1"){
		$items = "종합";
	}
	else if($item == "item2"){
		$items = "일반";
	}
	else if($item == "item3"){
		$items = "대내";
	}
	else if($item == "item4"){
		$items = "유초";
	}
	else if($item == "item5"){
		$items = "MRI";
	}
	else if($item == "item6"){
		$items = "심초";
	}
	else if($item == "item7"){
		$items = "VIP";
	}
	return $items;
}
#시간 
function sel_time($k){
	//echo $k;
	if($k == 0){
		$sel_time = "07:00";
	}
	else if($k == 1){
		$sel_time = "07:30";
	}
	else if($k == 2){
		$sel_time = "08:00";
	}
	else if($k == 3){
		$sel_time = "08:30";
	}
	else if($k == 4){
		$sel_time = "09:00";
	}
	else if($k == 5){
		$sel_time = "09:30";
	}
	else if($k == 6){
		$sel_time = "10:00";
	}
	else if($k == 7){
		$sel_time = "10:30";
	}
	else if($k == 8){
		$sel_time = "11:00";
	}
	else if($k == 9){
		$sel_time = "11:30";
	}
	else if($k == 10){
		$sel_time = "12:00";
	}
	else if($k == 11){
		$sel_time = "12:30";
	}
	else if($k == 12){
		$sel_time = "13:00";
	}
	else if($k == 13){
		$sel_time = "13:30";
	}
	else if($k == 14){
		$sel_time = "14:00";
	}
	else if($k == 15){
		$sel_time = "14:30";
	}
	else if($k == 16){
		$sel_time = "15:00";
	}
	else if($k == 17){
		$sel_time = "15:30";
	}
	else if($k == 18){
		$sel_time = "16:00";
	}
	else if($k == 19){
		$sel_time = "16:30";
	}
	else if($k == 20){
		$sel_time = "17:00";
	}
	else{
		$sel_time = "";
	}
	
	return $sel_time;
}
#시간 
function sel_time2($k){
	if($k == "07:00 ~ 07:30"){
		$sel_time = 0;
	}
	else if($k == "07:30"){
		$sel_time = 1;
	}
	else if($k == "08:00"){
		$sel_time = 2;
	}
	else if($k == "08:30"){
		$sel_time = 3;
	}
	else if($k == "09:00"){
		$sel_time = 4;
	}
	else if($k == "09:30"){
		$sel_time = 5;
	}
	else if($k == "10:00"){
		$sel_time = 6;
	}
	else if($k == "10:30"){
		$sel_time = 7;
	}
	else if($k == "11:00"){
		$sel_time = 8;
	}
	else if($k == "11:30"){
		$sel_time = 9;
	}
	else if($k == "12:00"){
		$sel_time = 10;
	}
	else if($k == "12:30"){
		$sel_time = 11;
	}
	else if($k == "13:00"){
		$sel_time = 12;
	}
	else if($k == "13:30"){
		$sel_time = 13;
	}
	else if($k == "14:00"){
		$sel_time = 14;
	}
	else if($k == "14:30"){
		$sel_time = 15;
	}
	else if($k == "15:00"){
		$sel_time = 16;
	}
	else if($k == "15:30"){
		$sel_time = 17;
	}
	else if($k == "16:00"){
		$sel_time = 18;
	}
	else if($k == "16:30"){
		$sel_time = 19;
	}
	else if($k == "17:00"){
		$sel_time = 20;
	}
	else{
		$sel_time = "";
	}
	
	return $sel_time;
}
function sel_time3($k){
	if($k == "7시"){
		$sel_time = 0;
	}
	else if($k == "7시반"){
		$sel_time = 1;
	}
	else if($k == "8시"){
		$sel_time = 2;
	}
	else if($k == "8시반"){
		$sel_time = 3;
	}
	else if($k == "9시"){
		$sel_time = 4;
	}
	else if($k == "9시반"){
		$sel_time = 5;
	}
	else if($k == "10시"){
		$sel_time = 6;
	}
	else if($k == "10시반"){
		$sel_time = 7;
	}
	else if($k == "11시"){
		$sel_time = 8;
	}
	else if($k == "11시반"){
		$sel_time = 9;
	}
	else if($k == "12시"){
		$sel_time = 10;
	}
	else if($k == "12시반"){
		$sel_time = 11;
	}
	else if($k == "13시"){
		$sel_time = 12;
	}
	else if($k == "13시반"){
		$sel_time = 13;
	}
	else if($k == "14시"){
		$sel_time = 14;
	}
	else if($k == "14시반"){
		$sel_time = 15;
	}
	else if($k == "15시"){
		$sel_time = 16;
	}
	else if($k == "15시반"){
		$sel_time = 17;
	}
	else if($k == "16시"){
		$sel_time = 18;
	}
	else if($k == "16시반"){
		$sel_time = 19;
	}
	else if($k == "17시"){
		$sel_time = 20;
	}
	else{
		$sel_time = "";
	}
	
	return $sel_time;
}
### 썸네일함수
function thumnail($file, $save_filename, $save_path, $max_width, $max_height)
{
       $img_info = getImageSize($file);
       if($img_info[2] == 1)
       {
              $src_img = ImageCreateFromGif($file);
              }elseif($img_info[2] == 2){
              $src_img = ImageCreateFromJPEG($file);
              }elseif($img_info[2] == 3){
              $src_img = ImageCreateFromPNG($file);
              }else{
              return 0;
       }
       $img_width = $img_info[0];
       $img_height = $img_info[1];

       if($img_width > $max_width || $img_height > $max_height)
       {
              if($img_width == $img_height)
              {
                     $dst_width = $max_width;
                     $dst_height = $max_height;
              }elseif($img_width > $img_height){
                     $dst_width = $max_width;
                     $dst_height = ceil(($max_width / $img_width) * $img_height);
              }else{
                     $dst_height = $max_height;
                     $dst_width = ceil(($max_height / $img_height) * $img_width);
              }
       }else{
              $dst_width = $img_width;
              $dst_height = $img_height;
       }
       if($dst_width < $max_width) $srcx = ceil(($max_width - $dst_width)/2); else $srcx = 0;
       if($dst_height < $max_height) $srcy = ceil(($max_height - $dst_height)/2); else $srcy = 0;

       if($img_info[2] == 1) 
       {
              $dst_img = imagecreate($max_width, $max_height);
       }else{
              $dst_img = imagecreatetruecolor($max_width, $max_height);
       }

       $bgc = ImageColorAllocate($dst_img, 255, 255, 255);
       ImageFilledRectangle($dst_img, 0, 0, $max_width, $max_height, $bgc); 
       ImageCopyResampled($dst_img, $src_img, $srcx, $srcy, 0, 0, $dst_width, $dst_height, ImageSX($src_img),ImageSY($src_img));

       if($img_info[2] == 1) 
       {
              ImageInterlace($dst_img);
              ImageGif($dst_img, $save_path.$save_filename);
       }elseif($img_info[2] == 2){
              ImageInterlace($dst_img);
              ImageJPEG($dst_img, $save_path.$save_filename);
       }elseif($img_info[2] == 3){
              ImagePNG($dst_img, $save_path.$save_filename);
       }
       ImageDestroy($dst_img);
       ImageDestroy($src_img);
} 
function funcThumnail($file, $save_filename, $save_path, $max_width, $max_height){
	$img_info = getImageSize($file);

	if($img_info[2] == 1) {
		$src_img = ImageCreateFromGif($file);
	}
	else if($img_info[2] == 2) {
		$src_img = ImageCreateFromJPEG($file);
	}
	else if($img_info[2] == 3) {
		$src_img = ImageCreateFromPNG($file);
	}
	else {
		return 0;
	}

	$img_width = $img_info[0];
	$img_height = $img_info[1];

	if($img_width > $max_width || $img_height > $max_height) {
		if($img_width == $img_height) {
			$dst_width = $max_width;
			$dst_height = $max_height;
		}
		else if($img_width > $img_height) {
			$dst_width = $max_width;
			$dst_height = ceil(($max_width / $img_width) * $img_height);
		}
		else {
			$dst_height = $max_height;
			$dst_width = ceil(($max_height / $img_height) * $img_width);
		}
	}
	else {
		$dst_width = $img_width;
		$dst_height = $img_height;
	}

	if($dst_width < $max_width) $srcx = ceil(($max_width - $dst_width)/2); else $srcx = 0;
	if($dst_height < $max_height) $srcy = ceil(($max_height - $dst_height)/2); else $srcy = 0;

	if($img_info[2] == 1) {
		$dst_img = imagecreate($max_width, $max_height);
	}
	else {
		$dst_img = imagecreatetruecolor($max_width, $max_height);
	}

	$bgc = ImageColorAllocate($dst_img, 255, 255, 255);
	ImageFilledRectangle($dst_img, 0, 0, $max_width, $max_height, $bgc);
	ImageCopyResampled($dst_img, $src_img, $srcx, $srcy, 0, 0, $dst_width, $dst_height, ImageSX($src_img),ImageSY($src_img));

	if($img_info[2] == 1) {
		ImageInterlace($dst_img);
		ImageGif($dst_img, $save_path.$save_filename);
	}
	else if($img_info[2] == 2) {
		ImageInterlace($dst_img);
		ImageJPEG($dst_img, $save_path.$save_filename);
	}
	else if($img_info[2] == 3) {
		ImagePNG($dst_img, $save_path.$save_filename);
	}

	ImageDestroy($dst_img);
	ImageDestroy($src_img);
}
### 썸네일함수 끝

### 페이징함수
function funcPaging($total, $scale, $pagePerList, $pageNum, $searchQuery) {
	@$totalPage = ceil($total/$scale);
	if (!$pageNum) $pageNum = 1;
	@$pageList = ceil($pageNum/$pagePerList)-1;

	if ($pageList > 0)	{
		$navigation = "<a href='?$searchQuery&pageNum=1'><span class='h02'>[1]</span></a> ... ";
		$prevPage = ($pageList)*$pagePerList;
		$navigation .= "<a href='?$searchQuery&pageNum=$prevPage'><img src='./images/manager/icon/page_preview.gif' align='absmiddle' border='0'></a>&nbsp;&nbsp;";
	}

	$pageEnd = ($pageList + 1) * $pagePerList;		// 페이지 목록 가운데 부분 출력

	if ($pageEnd > $totalPage) $pageEnd = $totalPage;

	for ($setPage = $pageList * $pagePerList+  1; $setPage <= $pageEnd ; $setPage++) {
		if ($setPage == $pageNum) {
			$navigation .= "<span class='h01 point'><b>[$setPage]</b></span> ";
		}
		else {
			$navigation .= "<a href='?$searchQuery&pageNum=$setPage'><span class='h01'>$setPage</span></a> ";
		}
	}

	// 페이지 목록 맨 끝이 $totalPage 보다 작을 경우에만, [next]...[$totalPage] 버튼을 생성한다.
	if ($pageEnd < $totalPage) {
		$nextPage = ($pageList + 1) * $pagePerList + 1;
		$navigation .= "&nbsp;&nbsp;<a href='?$searchQuery&pageNum=$nextPage'><img src='./images/manager/icon/page_next.gif' align='absmiddle' border='0'></a></span> ";
		$navigation .= "... <a href='?$searchQuery&pageNum=$totalPage'><span class='h02'>[$totalPage]</a></span>";
	}

	return $navigation;
}
### 페이징함수 끝


### 글자자르기
if(!function_exists("funcCutstr")) {
	function funcCutstr($string, $length, $attach) {
		if(strlen($string) <= $length) $attach = "";

		if(ord($string[$length - 1]) > 128) {
			for($i = 0; $i < $length; $i++) {
				if(ord($string[$i]) > 128) $n .= " ";
			}
			if(strlen($n) % 2) $plus = 1;
		}

		return trim(substr($string, 0, $length + $plus))."$attach";
	}
}
### 글자자르기 끝


### 이미지 비율축소
function funcImgSize($img_file, $max_width, $max_height) {
	@$img_size = GetimageSize($img_file);

	if($img_size[0] > $max_width) {
		$img_width	=	$max_width;
		$img_height	=	$img_size[1] * ($max_width / $img_size[0]);
	}
	else if($img_size[1] > $max_height) {
		$img_height	=	$max_height;
		$img_width	=	$img_size[0] * ($max_height / $img_size[1]);
	}
	else {
		$img_width	=	$img_size[0];
		$img_height	=	$img_size[1];
	}

	return array($img_width, $img_height);
}
### 이미지 비율축소 끝

### 리스트 페이지 공통 함수 ver.1.0
function funcListVer1($dir, $menu, $tbl, $field, $keyword, $where, $searchQuery, $listNum, $pageNum, $column, $order) {
	$numPerPage	=	$listNum ? $listNum : 20;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$column			=	$column ? $column : "reg_date";
	$order			=	$order ? $order :  "DESC";

	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	$que = "SELECT COUNT(*) AS total FROM ".$tbl." WHERE view_state='Y'";
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	@$res = MYSQL_QUERY($que);
	@$row = MYSQL_FETCH_ARRAY($res);

	$totalCount	=	$row['total'];
	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;

	// 해당 페이지 셀렉트
	$que = "SELECT * FROM ".$tbl." WHERE view_state='Y'";
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	$que .= " ORDER BY ".$column." ".$order." LIMIT ".$start.", ".$numPerPage;

	@$res = MYSQL_QUERY($que);

	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}


### 리스트 페이지 공통 함수 ver.1.2
function funcList($dir, $menu, $tbl, $field, $keyword, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {
	$numPerPage		=	$listNum ? $listNum : 10;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "reg_date";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";
	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	$que = "SELECT COUNT(*) AS total FROM ".$tbl." WHERE view_state='Y'";
	//echo $que;
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";

	/*
	//GROUP BY 항목 존재시(복수개 가능. 구분자: ,)
	$tmpGroupBy		=	explode(",", $groupBy);
	$contGroupBy	=	count($tmpGroupBy);

	if($tmpGroupBy[0]) $que .= " GROUP BY";

	for($i = 0; $i < $countGroupBy; $i++) {
		$que .= " ".$tmpGroupBy[$i]."";
		if($i + 1 < $countGroupBy) $que .= ", ";
	}
	*/

	@$res = MYSQL_QUERY($que);
	@$row = MYSQL_FETCH_ARRAY($res);

	$totalCount	=	$row['total'];
	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;

	// 해당 페이지 셀렉트
	$que = "SELECT * FROM ".$tbl." WHERE view_state='Y'";
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	$que .= " ORDER BY ";

	$tmpOrderByColumn	=	explode(",", $orderByColumn);
	$tmpOrderby			=	explode(",", $orderBy);

	$cntOrderByColumn	=	count($tmpOrderByColumn);
	for($i = 0; $i < $cntOrderByColumn; $i++) {
		if(!$tmpOrderby[$i]) $tmpOrderby[$i] = "DESC";

		$que .= " ".$tmpOrderByColumn[$i]." ".$tmpOrderby[$i];
		if($i + 1 < $cntOrderByColumn) $que .= ", ";
	}
	$que .= " LIMIT ".$start.", ".$numPerPage;

	//echo $que;

	@$res = MYSQL_QUERY($que);
//echo $que;
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}


### 리스트 페이지 공통 함수 - 아름누리용 201307 =====================================================================================================
function funcList_group($dir, $menu, $tbl, $field, $keyword, $start_date, $end_date, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {


	$numPerPage		=	$listNum ? $listNum : 10;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "PERSON_NAME";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";
	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$keyword."&start_date=".$start_date."&end_date=".$end_date."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;
	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	//$que = "SELECT COUNT(*) AS total FROM ".$tbl." WHERE view_state='Y'";

	$que = "SELECT *  FROM `group_reserve`" ;
	
	$where = " where seq <> '0' " ;
	if($field && $keyword) $where .= " AND ".$field." LIKE '%".$keyword."%'";
	if($start_date) $where .= " AND reg_date >= ".$start_date;
	if($end_date) $where .= " AND reg_date <= ".$end_date;

	$que .= $where;
	$que .= " ORDER BY reserve_place  $orderBy , $orderByColumn ";

	$res = MYSQL_QUERY($que);

	//=== 전체 게시글 검색 
	$totalCount = @mysql_num_rows($res) ; 

	//$row = MYSQL_FETCH_ARRAY($res);
	//$totalCount	=	$row['total'];

	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;


	$que .= " LIMIT ".$start.", ".$numPerPage;

	$res = MYSQL_QUERY($que);
//echo "$que <br>";
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}


function funcList_group2($dir, $menu, $tbl, $field, $keyword, $start_date, $end_date, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {


	$numPerPage		=	$listNum ? $listNum : 10;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "seq";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";
	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$keyword."&start_date=".$start_date."&end_date=".$end_date."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;
	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	//$que = "SELECT COUNT(*) AS total FROM ".$tbl." WHERE view_state='Y'";

	$que = "SELECT *  FROM quest_table" ;
	
	$where = " where seq <> '0' " ;
	if($field && $keyword) $where .= " AND ".$field." LIKE '%".$keyword."%'";
	if($start_date) $where .= " AND reg_date >= ".$start_date;
	if($end_date) $where .= " AND reg_date <= ".$end_date;

	$que .= $where;
	$que .= " ORDER BY seq  $orderBy ";

	$res = MYSQL_QUERY($que);

	//=== 전체 게시글 검색 
	$totalCount = @mysql_num_rows($res) ; 

	//$row = MYSQL_FETCH_ARRAY($res);
	//$totalCount	=	$row['total'];

	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;


	$que .= " LIMIT ".$start.", ".$numPerPage;

	$res = MYSQL_QUERY($que);
//echo "$que <br>";
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}

### 리스트 페이지 공통 함수 - 아름누리용 201306 ======================================================================================================
function funcList_liss_result_short($dir, $menu, $tbl, $field, $keyword, $start_date, $end_date, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {


			// ==== 아름누리 디비 날자표현은 20130601 -- 기존 2013-06-01 matching
			$start_date_liss = str_replace("-","",$start_date);
			$end_date_liss = str_replace("-","",$end_date);


	$numPerPage		=	$listNum ? $listNum : 10;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "PERSON_NAME";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";
	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$keyword."&start_date=".$start_date."&end_date=".$end_date."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;
	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	//$que = "SELECT COUNT(*) AS total FROM ".$tbl." WHERE view_state='Y'";

	$que = "SELECT DISTINCT(PERSON_NAME),PERSONAL_ID, EMAIL, COMPANY_NAME, PCS, REQUEST_DATE, HOSPITAL_GUBUN   FROM `TOTRES`" ;
	
	$where = " where EXAM_NO <> '0' " ;
	if($field && $keyword) $where .= " AND ".$field." LIKE '%".$keyword."%'";
	if($start_date) $where .= " AND ".REQUEST_DATE." >= ".$start_date_liss;
	if($end_date) $where .= " AND ".REQUEST_DATE." <= ".$end_date_liss;

	$que .= $where;
	$que .= " ORDER BY REQUEST_DATE  $orderBy , $orderByColumn ";

echo "$que";
	$res = MYSQL_QUERY($que);

	//=== 전체 게시글 검색 
	$totalCount = mysql_num_rows($res) ; 

	//$row = MYSQL_FETCH_ARRAY($res);
	//$totalCount	=	$row['total'];

	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;

/*
	// 해당 페이지 셀렉트
	$que = "SELECT * FROM ".$tbl." WHERE view_state='Y'";
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	$que .= " ORDER BY ";

	$tmpOrderByColumn	=	explode(",", $orderByColumn);
	$tmpOrderby			=	explode(",", $orderBy);

	$cntOrderByColumn	=	count($tmpOrderByColumn);
	for($i = 0; $i < $cntOrderByColumn; $i++) {
		if(!$tmpOrderby[$i]) $tmpOrderby[$i] = "DESC";

		$que .= " ".$tmpOrderByColumn[$i]." ".$tmpOrderby[$i];
		if($i + 1 < $cntOrderByColumn) $que .= ", ";
	}
	$que .= " LIMIT ".$start.", ".$numPerPage;
*/
//echo "<br> end que : $que <br>";

	$que .= " LIMIT ".$start.", ".$numPerPage;

	$res = MYSQL_QUERY($que);
//echo $que;
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}


### 리스트 페이지 공통 함수 - 아름누리용 201306 ======================================================================================================
function funcList_liss_result($dir, $menu, $tbl, $field, $keyword, $start_date, $end_date, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {


			// ==== 아름누리 디비 날자표현은 20130601 -- 기존 2013-06-01 matching
			$start_date_liss = str_replace("-","",$start_date);
			$end_date_liss = str_replace("-","",$end_date);


	$numPerPage		=	$listNum ? $listNum : 10;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "PERSON_NAME";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";
	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$keyword."&start_date=".$start_date."&end_date=".$end_date."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;
	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	//$que = "SELECT COUNT(*) AS total FROM ".$tbl." WHERE view_state='Y'";

	$que = "SELECT DISTINCT(PERSON_NAME),PERSONAL_ID, EMAIL, COMPANY_NAME, PCS, REQUEST_DATE, HOSPITAL_GUBUN   FROM `TOTRES`" ;
	
	$where = " where EXAM_NO <> '0' " ;
	if($field && $keyword) $where .= " AND ".$field." LIKE '%".$keyword."%'";
	if($start_date) $where .= " AND ".REQUEST_DATE." >= ".$start_date_liss;
	if($end_date) $where .= " AND ".REQUEST_DATE." <= ".$end_date_liss;

	$que .= $where;
	$que .= " ORDER BY REQUEST_DATE  $orderBy , $orderByColumn ";

	$res = MYSQL_QUERY($que);

	//=== 전체 게시글 검색 
	$totalCount = mysql_num_rows($res) ; 

	//$row = MYSQL_FETCH_ARRAY($res);
	//$totalCount	=	$row['total'];

	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;

/*
	// 해당 페이지 셀렉트
	$que = "SELECT * FROM ".$tbl." WHERE view_state='Y'";
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	$que .= " ORDER BY ";

	$tmpOrderByColumn	=	explode(",", $orderByColumn);
	$tmpOrderby			=	explode(",", $orderBy);

	$cntOrderByColumn	=	count($tmpOrderByColumn);
	for($i = 0; $i < $cntOrderByColumn; $i++) {
		if(!$tmpOrderby[$i]) $tmpOrderby[$i] = "DESC";

		$que .= " ".$tmpOrderByColumn[$i]." ".$tmpOrderby[$i];
		if($i + 1 < $cntOrderByColumn) $que .= ", ";
	}
	$que .= " LIMIT ".$start.", ".$numPerPage;
*/
//echo "<br> end que : $que <br>";

	$que .= " LIMIT ".$start.", ".$numPerPage;

	$res = MYSQL_QUERY($que);
//echo $que;
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}


### 사업장정보 - 아름누리용 201306 ======================================================================================================
function funcList_liss_company($dir, $menu, $tbl, $field, $keyword, $start_date, $end_date, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {


	$numPerPage		=	$listNum ? $listNum : 10;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	//$orderByColumn	=	$orderByColumn ? $orderByColumn : "PERSON_NAME";
	//$orderBy		=	$orderBy ? $orderBy :  "DESC";
	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$keyword."&start_date=".$start_date."&end_date=".$end_date."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;
	// 페이지 이동시 디폴트 변수값

	$que = "SELECT *  FROM `COMPANY`" ;
	
	$where = " where COMPANY_CODE <> '0' " ;
	if($field && $keyword) $where .= " AND ".$field." LIKE '%".$keyword."%'";
	$que .= $where;
	$que .= " ORDER BY COMPANY_CODE ";

	$res = MYSQL_QUERY($que);

	//=== 전체 게시글 검색 
	$totalCount = mysql_num_rows($res) ; 

	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;

	$que .= " LIMIT ".$start.", ".$numPerPage;

	$res = MYSQL_QUERY($que);
//echo $que;
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}



### 수주카드 정보 - 아름누리용 201306 ======================================================================================================
function funcList_liss_order($dir, $menu, $tbl, $field, $keyword, $start_date, $end_date, $pro_years, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {


//echo "<br>$dir, $menu, $tbl, $field, $keyword, $start_date, $end_date, $pro_years, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy<br>" ;

	$numPerPage		=	$listNum ? $listNum : 10;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	//$orderByColumn	=	$orderByColumn ? $orderByColumn : "PERSON_NAME";
	//$orderBy		=	$orderBy ? $orderBy :  "DESC";
	$searchQuery	=	"pro_years=".$pro_years."&dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$keyword."&start_date=".$start_date."&end_date=".$end_date."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;
	// 페이지 이동시 디폴트 변수값

	//$que = "SELECT DISTINCT(COMPANY_CODE) FROM COMPANYPROFILE" ;
	$que ="SELECT DISTINCT(p.COMPANY_CODE), c.COMPANY_NAME  FROM COMPANYPROFILE p, COMPANY c " ;
	
	$where = " WHERE c.COMPANY_CODE = p.COMPANY_CODE and p.PRO_YEARS = $pro_years " ;
	if($field && $keyword) $where .= " AND c.".$field." LIKE '%".$keyword."%'";
	$que .= $where;
	$que .= " ORDER BY p.COMPANY_CODE ";


	$res = MYSQL_QUERY($que);

	//=== 전체 게시글 검색 
	$totalCount = mysql_num_rows($res) ; 

	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;

	$que .= " LIMIT ".$start.", ".$numPerPage;

	$res = MYSQL_QUERY($que);
//echo $que;
//echo "<br>$que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery" ;
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}


function funcList_business($dir, $menu, $tbl, $field, $keyword, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {
	echo $where;
	$numPerPage		=	$listNum ? $listNum : 10;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "reg_date";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";
	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	$que = "SELECT COUNT(*) AS total FROM admin_logs WHERE view_state='Y'";
	//echo $que;
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";

	/*
	//GROUP BY 항목 존재시(복수개 가능. 구분자: ,)
	$tmpGroupBy		=	explode(",", $groupBy);
	$contGroupBy	=	count($tmpGroupBy);

	if($tmpGroupBy[0]) $que .= " GROUP BY";

	for($i = 0; $i < $countGroupBy; $i++) {
		$que .= " ".$tmpGroupBy[$i]."";
		if($i + 1 < $countGroupBy) $que .= ", ";
	}
	*/

	@$res = MYSQL_QUERY($que);
	@$row = MYSQL_FETCH_ARRAY($res);

	$totalCount	=	$row['total'];
	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;

	// 해당 페이지 셀렉트
	$que = "SELECT * FROM ".$tbl." WHERE view_state='Y'";
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	$que .= " ORDER BY ";

	$tmpOrderByColumn	=	explode(",", $orderByColumn);
	$tmpOrderby			=	explode(",", $orderBy);

	$cntOrderByColumn	=	count($tmpOrderByColumn);
	for($i = 0; $i < $cntOrderByColumn; $i++) {
		if(!$tmpOrderby[$i]) $tmpOrderby[$i] = "DESC";

		$que .= " ".$tmpOrderByColumn[$i]." ".$tmpOrderby[$i];
		if($i + 1 < $cntOrderByColumn) $que .= ", ";
	}
	$que .= " LIMIT ".$start.", ".$numPerPage;

	echo $que;

	@$res = MYSQL_QUERY($que);
//echo $que;
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}



### 리스트 페이지 공통 함수 ver.1.2
function funcList2($dir, $menu, $tbl, $field, $keyword, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {
	$numPerPage		=	$listNum ? $listNum : 20;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "reg_date";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";

	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	$que = "SELECT COUNT(*) AS total FROM ".$tbl." WHERE view_state='Y' and auth_chk='Y'";
	//echo $que;
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";

	/*
	//GROUP BY 항목 존재시(복수개 가능. 구분자: ,)
	$tmpGroupBy		=	explode(",", $groupBy);
	$contGroupBy	=	count($tmpGroupBy);

	if($tmpGroupBy[0]) $que .= " GROUP BY";

	for($i = 0; $i < $countGroupBy; $i++) {
		$que .= " ".$tmpGroupBy[$i]."";
		if($i + 1 < $countGroupBy) $que .= ", ";
	}
	*/

	@$res = MYSQL_QUERY($que);
	@$row = MYSQL_FETCH_ARRAY($res);

	$totalCount	=	$row['total'];
	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;

	// 해당 페이지 셀렉트
	$que = "SELECT * FROM ".$tbl." WHERE view_state='Y' and auth_chk='Y'";
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	$que .= " ORDER BY ";

	$tmpOrderByColumn	=	explode(",", $orderByColumn);
	$tmpOrderby			=	explode(",", $orderBy);

	$cntOrderByColumn	=	count($tmpOrderByColumn);
	for($i = 0; $i < $cntOrderByColumn; $i++) {
		if(!$tmpOrderby[$i]) $tmpOrderby[$i] = "DESC";

		$que .= " ".$tmpOrderByColumn[$i]." ".$tmpOrderby[$i];
		if($i + 1 < $cntOrderByColumn) $que .= ", ";
	}
	$que .= " LIMIT ".$start.", ".$numPerPage;

//	echo $que;

	@$res = MYSQL_QUERY($que);
//echo $que;
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}
### 리스트 페이지 공통 함수 ver.1.2
function funcList3($dir, $menu, $tbl, $field, $keyword, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {
	$numPerPage		=	$listNum ? $listNum : 20;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "reg_date";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";
	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	$que = "SELECT * FROM ".$tbl." WHERE view_state='Y'";
	//echo $que;
	$que .= $where;
	
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
$que .= " group by order_num ";

//echo $que;
	/*
	//GROUP BY 항목 존재시(복수개 가능. 구분자: ,)
	$tmpGroupBy		=	explode(",", $groupBy);
	$contGroupBy	=	count($tmpGroupBy);

	if($tmpGroupBy[0]) $que .= " GROUP BY";

	for($i = 0; $i < $countGroupBy; $i++) {
		$que .= " ".$tmpGroupBy[$i]."";
		if($i + 1 < $countGroupBy) $que .= ", ";
	}
	*/
//echo $que;
	$res = MYSQL_QUERY($que);
	$totalCount = mysql_num_rows($res);
	//echo $totalCount;
	@$row = MYSQL_FETCH_ARRAY($res);

	//$totalCount	=	$row['total'];
	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;

	// 해당 페이지 셀렉트
	$que = "SELECT * FROM ".$tbl." WHERE view_state='Y'";
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	$que .= " group by order_num ";
	$que .= " ORDER BY ";

	$tmpOrderByColumn	=	explode(",", $orderByColumn);
	$tmpOrderby			=	explode(",", $orderBy);

	$cntOrderByColumn	=	count($tmpOrderByColumn);
	for($i = 0; $i < $cntOrderByColumn; $i++) {
		if(!$tmpOrderby[$i]) $tmpOrderby[$i] = "DESC";

		$que .= " ".$tmpOrderByColumn[$i]." ".$tmpOrderby[$i];
		if($i + 1 < $cntOrderByColumn) $que .= ", ";
	}
	
	$que .= " LIMIT ".$start.", ".$numPerPage;
	//echo $nowData;

	@$res = MYSQL_QUERY($que);
//echo $que;
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}

function funcList4($dir, $menu, $tbl, $field, $keyword, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {
	$numPerPage		=	$listNum ? $listNum : 20;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "reg_date";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";
	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	$que = "SELECT COUNT(*) AS total FROM ".$tbl." ";
	//echo $que;
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";

	/*
	//GROUP BY 항목 존재시(복수개 가능. 구분자: ,)
	$tmpGroupBy		=	explode(",", $groupBy);
	$contGroupBy	=	count($tmpGroupBy);

	if($tmpGroupBy[0]) $que .= " GROUP BY";

	for($i = 0; $i < $countGroupBy; $i++) {
		$que .= " ".$tmpGroupBy[$i]."";
		if($i + 1 < $countGroupBy) $que .= ", ";
	}
	*/

	@$res = MYSQL_QUERY($que);
	@$row = MYSQL_FETCH_ARRAY($res);

	$totalCount	=	$row['total'];
	$start			=	($pageNum - 1) * $numPerPage;
	$end			=	$start + $numPerPage;
	if($end > $totalCount) $end	=	$totalCount;
	$nowData		=	$end - $start;

	// 해당 페이지 셀렉트
	$que = "SELECT * FROM ".$tbl."  ";
	$que .= $where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	$que .= " ORDER BY ";

	$tmpOrderByColumn	=	explode(",", $orderByColumn);
	$tmpOrderby			=	explode(",", $orderBy);

	$cntOrderByColumn	=	count($tmpOrderByColumn);
	for($i = 0; $i < $cntOrderByColumn; $i++) {
		if(!$tmpOrderby[$i]) $tmpOrderby[$i] = "DESC";

		$que .= " ".$tmpOrderByColumn[$i]." ".$tmpOrderby[$i];
		if($i + 1 < $cntOrderByColumn) $que .= ", ";
	}
	$que .= " LIMIT ".$start.", ".$numPerPage;

	//echo $que;

	@$res = MYSQL_QUERY($que);
//echo $que;
	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}

function funcNewPost($tbl, $where, $column, $limit_num) {
	$que = "SELECT * FROM ".$tbl." WHERE VIEW_STATE='Y'";
	if($where) $que .= " AND ".$where;
	$que .= " ORDER BY ".$column." ".$order." LIMIT ".$limit_num;
	$res = MYSQL_QUERY($que);
	$num = MYSQL_NUM_ROWS($res);

	$limit_cnt = explode(",", $limit_num);

	if($limit_cnt[1]) $limit_count = $limit_cnt[1];
	else $limit_count = $limit_num;

	if($num > $limit_count) $cnt = $limit_count;
	else $cnt = $num;

	return array($res, $cnt);
}

function funcSendMail1($type, $to_mail, $to_name, $from_mail, $from_name, $mail_subject, $mail_content, $cc="", $bcc="") {
	if(!empty($to_name))
		$recipient = "$to_name <$to>";
	else
		$recipient = "$to_mail <$to>";

	//if(!$type) $comment = nl2br($comment);

	if(!empty($from_name))
		$headers  = "From: $from_name <$from_mail>\n";
	else
		$headers  = "From: $from_mail <$from_mail>\n";
		$headers .= "X-Sender: <$from_mail>\n";
		$headers .= "X-Mailer: PHP ".phpversion()."\n";
		$headers .= "X-Priority: 1\n";
		$headers .= "Return-Path: <$from_mail>\n";

	if(!$type )
		$headers .= "Content-Type: text/plain; ";
	else
		$headers .= "Content-Type: text/html; ";

	$headers .= "charset=euc-kr\n";

	if($cc)  $headers .= "cc: $cc\n";
	if($bcc)  $headers .= "bcc: $bcc";

	$mail_content = stripslashes($mail_content);
	$mail_content = str_replace("\n\r","\n", $mail_content);

	return mail($recipient , $mail_subject , $mail_content , $headers);

}


function funcSendMail($type, $to_mail, $to_name, $from_mail, $from_name, $subject, $comment, $cc="", $bcc="") {
	if(!empty($to_name))
		$recipient = "$to_name <$to_mail>";
	else
		$recipient = "$to_mail <$to_mail>";

	//if(!$type) $comment = nl2br($comment);

	if(!empty($from_name))
		$headers  = "From: $from_name <$from_mail>\n";
	else
		$headers  = "From: $from <$from_mail>\n";
		$headers .= "X-Sender: <$from_mail>\n";
		$headers .= "X-Mailer: PHP ".phpversion()."\n";
		$headers .= "X-Priority: 1\n";
		$headers .= "Return-Path: <$from_mail>\n";

	if(!$type )
		$headers .= "Content-Type: text/plain; ";
	else
		$headers .= "Content-Type: text/html; ";

	$headers .= "charset=euc-kr\n";

	if($cc)  $headers .= "cc: $cc\n";
	if($bcc)  $headers .= "bcc: $bcc";

	$comment = stripslashes($comment);
	$comment = str_replace("\n\r","\n", $comment);

	return mail($recipient , $subject , $comment , $headers);

}


//==============================================================
// 함수명 : ps_no_chk($num)
// 작성자 : 연구소
// 작성일 : 2002-11-20
//--------------------------------------------------------------------------------
// 용   도 : 주민등록번호 확인
//
// 인   자 : $num (주민등록번호)
//==============================================================
function ps_no_chk($num){
	$numtot 	= 	0;
	$numadd 	= 	"234567892345";
	$num_len	=	strlen($num);

	if($num_len	!=	"13"){
		return false;
	}

	if(substr($num, 2, 2) > 12 || substr($num, 4, 2) > 31) {
		return;
	}

	for($i = 0; $i < 12; $i++){
		$temp_num1	= substr($num, $i, 1);
		$temp_num2	= substr($numadd, $i, 1);
		$numtot 		= $numtot + $temp_num1*$temp_num2;
	}

	$numtot = 11 - ($numtot%11);

	if($numtot == 10){
		$numtot = 0;
	}else if($numtot == 11){
		$numtot = 1;
	}

	$temp_num3		=	substr($num, 12, 1);
	if($temp_num3 ==	$numtot) {
		return true;
	}

	return false;
}
//==============================================================
// 함수명 : view_trim($value)
// 작성자 : 연구소
// 작성일 : 2002-11-20
//--------------------------------------------------------------------------------
// 용   도 : 오라클/MSSQL 사용시 저장값에 \'가 포함된 경우 '로 변환해 보여준다.
//             주로 데이터를 화면에 보여줄 때 사용한다.
// 인   자 : $value (출력될 값)
//==============================================================

function view_trim($value) {
	if(!WordInString($value, "<table")){
        $value = text2html($value);			//html이 깨지는 문제때문에 삭제
	}
        $value = stripslashes($value);
//        return eregi_replace("\'", "'", $value);
//      return eregi_replace("<br />", "", $value);
		return $value;
}
//==============================================================
// 함수명 : WordInString($string_str, $word_str)
// 작성자 : 김순기
// 작성일 : 2002-11-20
//--------------------------------------------------------------------------------
// 용   도 : 문자열 안에 해당 단어가 존재하는지를 확인하는 함수
//
// 인   자 : $string_str (일반 문자열), $word_str(찰을 문자열)
//==============================================================
function WordInString($string_str, $word_str){
	$pos = strpos ($string_str, $word_str);
	if ($pos === false) {
		return false;
	}else{
		return true;
	}
}
//==============================================================
// 함수명 : text2html($body)
// 작성자 : 연구소
// 작성일 : 2002-11-20
//--------------------------------------------------------------------------------
// 용   도 : 입력문자열을 html 형식으로 변환한 뒤 리턴한다.
//
// 인   자 : $body (일반 문자열)
//==============================================================
function text2html ($body) {
	$body = ereg_replace("  ","&nbsp;&nbsp;", $body);
	$body = ereg_replace("\t","&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $body);
	$body = eregi_replace("<br>\n", "<BR>", $body);
	$body = eregi_replace("\n", "<br>", $body);
	$body = eregi_replace("\r", "", $body);
	$body = nl2br(trim($body));
	//$body = enableLink($body);

	return $body;
}
//==============================================================
// 함수명 : jsAlert($comment, $elementForm, $ret)
// 작성자 : 디유넷 - 연구소
// 작성일 : 2002-11-20
//--------------------------------------------------------------------------------
// 용   도 : 알림 메세지를 띄운후 해당 Form으로 포커스르 이동시킨다.
//       예 : jsAlert("[시스템 메세지]\\n$value 만큼 $which (을)를 $how 하였습니다.","document.insForm.writer","리턴여부");
// 인   자 : $comment (알람 메세지내용), $elementForm (포커스될 Form 이름)
//             $ret (리턴여부)
//==============================================================
function jsAlert ($comment, $elementForm = "", $ret = "") {
	$comment = ereg_replace("\"","",$comment);
	$comment = ereg_replace("\'","",$comment);
	$comment = ereg_replace("\r\n","\\n",$comment);
	if($elementForm)		$elementFormstr = "$elementForm.focus();";
	if(!$ret){
		$jsalert = "<script>alert(\"$comment\");$elementFormstr</script>";
		return $jsalert;
	}else{
		echo "<script>alert(\"$comment\");$elementFormstr</script>";
	}
}
function KstrCut($str, $len, $suffix = ""){
	if ($len >= strlen($str)) {
		return $str;
	}

	$klen 	= $len - 1;
	while(ord($str[$klen]) & 0x80) {
		$klen--;
	}

	return substr($str, 0, $len - (($len + $klen + 1) % 2)) . $suffix;
}


function wait_list($sel_date){
	//echo $sel_date;
	$sel_week_end = $sel_date;
	#휴일인지 체크함

	$holiday_query = "select * from reserve_holiday where day_start='".$sel_week_end."' and view_state='Y' and day_type='4'";
	$holiday_result = mysql_query($holiday_query);
	$holiday_cnt = mysql_num_rows($holiday_result);

	if($holiday_cnt > 0){
		$total_reserve = "0";
		$total_reserve .= "0";
		return $total_reserve;
	}
	else{#휴일이 아닐때
	//echo $j;

	#지정일인지 체크함
	$target_query = "select * from reserve_setday where day_start='".$sel_week_end."' and view_state='Y' and day_type='3'";
	$target_result = mysql_query($target_query);
	$target_cnt = mysql_num_rows($target_result);
	//echo $target_cnt;
	if($target_cnt > 0){
		$target_query2 = "select * from reserve_setday where day_start='".$sel_week_end."' and view_state='Y' and day_type='3' ";
		$target_result2 = mysql_query($target_query2);
		$wait_item1=0;$wait_item2=0;$wait_item3=0;$wait_item4=0;$wait_item5=0;$wait_item6=0;$wait_item7=0;
		while($target_rows2 = mysql_fetch_array($target_result2)){
			$wait_item1 += $target_rows2[item1];
			$wait_item2 += $target_rows2[item2];
			$wait_item3 += $target_rows2[item3];
			$wait_item4 += $target_rows2[item4];
			$wait_item5 += $target_rows2[item5];
			$wait_item6 += $target_rows2[item6];
			$wait_item7 += $target_rows2[item7];
		}

		#예약 체크
		$chk_query = "select * from reserve_list where left(reserve_day,10)='".$sel_week_end."'  and view_state='Y'";
		$chk_result = mysql_query($chk_query);
			$wait_reserve_item1=0;$wait_reserve_item2=0;$wait_reserve_item3=0;$wait_reserve_item4=0;$wait_reserve_item5=0;$wait_reserve_item6=0;$wait_reserve_item7=0;
		while($chk_rows = mysql_fetch_array($chk_result)){
			if($chk_rows[reserve_type] == "item1"){
				$wait_reserve_item1++;
			}
			else if($chk_rows[reserve_type] == "item2"){
				$wait_reserve_item2++;
			}
			else if($chk_rows[reserve_type] == "item3"){
				$wait_reserve_item3++;
			}
			else if($chk_rows[reserve_type] == "item4"){
				$wait_reserve_item4++;
			}
			else if($chk_rows[reserve_type] == "item5"){
				$wait_reserve_item5++;
			}
			else if($chk_rows[reserve_type] == "item6"){
				$wait_reserve_item6++;
			}
			else if($chk_rows[reserve_type] == "item7"){
				$wait_reserve_item7++;
			}

			
		}
		


	}
	else{#지정일도 아닐때
		$sel_day = date("w",strtotime($sel_week_end));
		
		if($sel_day == "6"){#토요일 반일
			$ban_query = "select * from reserve_setday where  view_state='Y' and day_type='2' ";
			//echo $ban_query;
			
			$ban_result = mysql_query($ban_query);
			$wait_item1=0;$wait_item2=0;$wait_item3=0;$wait_item4=0;$wait_item5=0;$wait_item6=0;$wait_item7=0;
			while($ban_rows = mysql_fetch_array($ban_result)){
				$wait_item1 += $ban_rows[item1];
				$wait_item2 += $ban_rows[item2];
				$wait_item3 += $ban_rows[item3];
				$wait_item4 += $ban_rows[item4];
				$wait_item5 += $ban_rows[item5];
				$wait_item6 += $ban_rows[item6];
				$wait_item7 += $ban_rows[item7];

			}

			#예약 체크
			$chk_query = "select * from reserve_list where left(reserve_day,10)='".$sel_week_end."'and view_state='Y'";
			$chk_result = mysql_query($chk_query);
			$wait_reserve_item1=0;$wait_reserve_item2=0;$wait_reserve_item3=0;$wait_reserve_item4=0;$wait_reserve_item5=0;$wait_reserve_item6=0;$wait_reserve_item7=0;
			while($chk_rows = mysql_fetch_array($chk_result)){
				if($chk_rows[reserve_type] == "item1"){
					$wait_reserve_item1++;
				}
				else if($chk_rows[reserve_type] == "item2"){
					$wait_reserve_item2++;
				}
				else if($chk_rows[reserve_type] == "item3"){
					$wait_reserve_item3++;
				}
				else if($chk_rows[reserve_type] == "item4"){
					$wait_reserve_item4++;
				}
				else if($chk_rows[reserve_type] == "item5"){
					$wait_reserve_item5++;
				}
				else if($chk_rows[reserve_type] == "item6"){
					$wait_reserve_item6++;
				}
				else if($chk_rows[reserve_type] == "item7"){
					$wait_reserve_item7++;
				}
			}
			
		
		}
		else if($sel_day == "0"){#일요일 휴무
		}
		else{#전일
			$situation_query = "select * from reserve_setday where  view_state='Y' and day_type='1'";
			//echo $situation_query;
			$situation_result = mysql_query($situation_query);
			$wait_item1=0;$wait_item2=0;$wait_item3=0;$wait_item4=0;$wait_item5=0;$wait_item6=0;$wait_item7=0;
			while($situation_rows = mysql_fetch_array($situation_result)){
				$wait_item1 += $situation_rows[item1];
				$wait_item2 += $situation_rows[item2];
				$wait_item3 += $situation_rows[item3];
				$wait_item4 += $situation_rows[item4];
				$wait_item5 += $situation_rows[item5];
				$wait_item6 += $situation_rows[item6];
				$wait_item7 += $situation_rows[item7];
			}

			#예약 체크
			$chk_query = "select * from reserve_list where left(reserve_day,10)='".$sel_week_end."'  and view_state='Y'";
			//echo $chk_query;
			$chk_result = mysql_query($chk_query);
			$wait_reserve_item1=0;$wait_reserve_item2=0;$wait_reserve_item3=0;$wait_reserve_item4=0;$wait_reserve_item5=0;$wait_reserve_item6=0;$wait_reserve_item7=0;
			while($chk_rows = mysql_fetch_array($chk_result)){
				if($chk_rows[reserve_type] == "item1"){
					$wait_reserve_item1++;
				}
				else if($chk_rows[reserve_type] == "item2"){
					$wait_reserve_item2++;
				}
				else if($chk_rows[reserve_type] == "item3"){
					$wait_reserve_item3++;
				}
				else if($chk_rows[reserve_type] == "item4"){
					$wait_reserve_item4++;
				}
				else if($chk_rows[reserve_type] == "item5"){
					$wait_reserve_item5++;
				}
				else if($chk_rows[reserve_type] == "item6"){
					$wait_reserve_item6++;
				}
				else if($chk_rows[reserve_type] == "item7"){
					$wait_reserve_item7++;
				}
			}
			
		
			}
		}
	}
	//echo $wait_reserve_item1;
	return array($wait_reserve_item1, $wait_reserve_item2, $wait_reserve_item3, $wait_reserve_item4, $wait_reserve_item5, $wait_reserve_item6, $wait_reserve_item7, $wait_item1, $wait_item2, $wait_item3, $wait_item4, $wait_item5, $wait_item6, $wait_item7);
}
function wait_list_time($sel_date){
	//echo $sel_date;
	$sel_week_end = $sel_date;
	#휴일인지 체크함

	$holiday_query = "select * from reserve_holiday where day_start='".$sel_week_end."' and view_state='Y' and day_type='4'";
	$holiday_result = mysql_query($holiday_query);
	$holiday_cnt = mysql_num_rows($holiday_result);

	if($holiday_cnt > 0){
		$total_reserve = "0";
		$total_reserve .= "0";
		return $total_reserve;
	}
	else{#휴일이 아닐때
	//echo $j;

	#지정일인지 체크함
	$target_query = "select * from reserve_setday where day_start='".$sel_week_end."' and view_state='Y' and day_type='3'";
	$target_result = mysql_query($target_query);
	$target_cnt = mysql_num_rows($target_result);
	//echo $target_cnt;
	if($target_cnt > 0){
		$target_query2 = "select * from reserve_setday where day_start='".$sel_week_end."' and view_state='Y' and day_type='3' ";
		$target_result2 = mysql_query($target_query2);
		$wait_item1=0;$wait_item2=0;$wait_item3=0;$wait_item4=0;$wait_item5=0;$wait_item6=0;$wait_item7=0;
		while($target_rows2 = mysql_fetch_array($target_result2)){
			$wait_item1 += $target_rows2[item1];
			$wait_item2 += $target_rows2[item2];
			$wait_item3 += $target_rows2[item3];
			$wait_item4 += $target_rows2[item4];
			$wait_item5 += $target_rows2[item5];
			$wait_item6 += $target_rows2[item6];
			$wait_item7 += $target_rows2[item7];
		}

		#예약 체크
		$chk_query = "select * from reserve_list where left(reserve_day,10)='".$sel_week_end."'  and view_state='Y'";
		$chk_result = mysql_query($chk_query);
			$wait_reserve_item1=0;$wait_reserve_item2=0;$wait_reserve_item3=0;$wait_reserve_item4=0;$wait_reserve_item5=0;$wait_reserve_item6=0;$wait_reserve_item7=0;
		while($chk_rows = mysql_fetch_array($chk_result)){
			if($chk_rows[reserve_type] == "item1"){
				$wait_reserve_item1++;
			}
			else if($chk_rows[reserve_type] == "item2"){
				$wait_reserve_item2++;
			}
			else if($chk_rows[reserve_type] == "item3"){
				$wait_reserve_item3++;
			}
			else if($chk_rows[reserve_type] == "item4"){
				$wait_reserve_item4++;
			}
			else if($chk_rows[reserve_type] == "item5"){
				$wait_reserve_item5++;
			}
			else if($chk_rows[reserve_type] == "item6"){
				$wait_reserve_item6++;
			}
			else if($chk_rows[reserve_type] == "item7"){
				$wait_reserve_item7++;
			}

			
		}
		


	}
	else{#지정일도 아닐때
		$sel_day = date("w",strtotime($sel_week_end));
		
		if($sel_day == "6"){#토요일 반일
			$ban_query = "select * from reserve_setday where  view_state='Y' and day_type='2' ";
			//echo $ban_query;
			
			$ban_result = mysql_query($ban_query);
			$wait_item1=0;$wait_item2=0;$wait_item3=0;$wait_item4=0;$wait_item5=0;$wait_item6=0;$wait_item7=0;
			while($ban_rows = mysql_fetch_array($ban_result)){
				$wait_item1 += $ban_rows[item1];
				$wait_item2 += $ban_rows[item2];
				$wait_item3 += $ban_rows[item3];
				$wait_item4 += $ban_rows[item4];
				$wait_item5 += $ban_rows[item5];
				$wait_item6 += $ban_rows[item6];
				$wait_item7 += $ban_rows[item7];

			}

			#예약 체크
			$chk_query = "select * from reserve_list where left(reserve_day,10)='".$sel_week_end."'and view_state='Y'";
			$chk_result = mysql_query($chk_query);
			$wait_reserve_item1=0;$wait_reserve_item2=0;$wait_reserve_item3=0;$wait_reserve_item4=0;$wait_reserve_item5=0;$wait_reserve_item6=0;$wait_reserve_item7=0;
			while($chk_rows = mysql_fetch_array($chk_result)){
				if($chk_rows[reserve_type] == "item1"){
					$wait_reserve_item1++;
				}
				else if($chk_rows[reserve_type] == "item2"){
					$wait_reserve_item2++;
				}
				else if($chk_rows[reserve_type] == "item3"){
					$wait_reserve_item3++;
				}
				else if($chk_rows[reserve_type] == "item4"){
					$wait_reserve_item4++;
				}
				else if($chk_rows[reserve_type] == "item5"){
					$wait_reserve_item5++;
				}
				else if($chk_rows[reserve_type] == "item6"){
					$wait_reserve_item6++;
				}
				else if($chk_rows[reserve_type] == "item7"){
					$wait_reserve_item7++;
				}
			}
			
		
		}
		else if($sel_day == "0"){#일요일 휴무
		}
		else{#전일
			$situation_query = "select * from reserve_setday where  view_state='Y' and day_type='1'";
			//echo $situation_query;
			$situation_result = mysql_query($situation_query);
			$wait_item1=0;$wait_item2=0;$wait_item3=0;$wait_item4=0;$wait_item5=0;$wait_item6=0;$wait_item7=0;
			while($situation_rows = mysql_fetch_array($situation_result)){
				$wait_item1 += $situation_rows[item1];
				$wait_item2 += $situation_rows[item2];
				$wait_item3 += $situation_rows[item3];
				$wait_item4 += $situation_rows[item4];
				$wait_item5 += $situation_rows[item5];
				$wait_item6 += $situation_rows[item6];
				$wait_item7 += $situation_rows[item7];
			}

			#예약 체크
			$chk_query = "select * from reserve_list where left(reserve_day,10)='".$sel_week_end."'  and view_state='Y'";
			//echo $chk_query;
			$chk_result = mysql_query($chk_query);
			$wait_reserve_item1=0;$wait_reserve_item2=0;$wait_reserve_item3=0;$wait_reserve_item4=0;$wait_reserve_item5=0;$wait_reserve_item6=0;$wait_reserve_item7=0;
			while($chk_rows = mysql_fetch_array($chk_result)){
				if($chk_rows[reserve_type] == "item1"){
					$wait_reserve_item1++;
				}
				else if($chk_rows[reserve_type] == "item2"){
					$wait_reserve_item2++;
				}
				else if($chk_rows[reserve_type] == "item3"){
					$wait_reserve_item3++;
				}
				else if($chk_rows[reserve_type] == "item4"){
					$wait_reserve_item4++;
				}
				else if($chk_rows[reserve_type] == "item5"){
					$wait_reserve_item5++;
				}
				else if($chk_rows[reserve_type] == "item6"){
					$wait_reserve_item6++;
				}
				else if($chk_rows[reserve_type] == "item7"){
					$wait_reserve_item7++;
				}
			}
			
		
			}
		}
	}
	//echo $wait_reserve_item1;
	return array($wait_reserve_item1, $wait_reserve_item2, $wait_reserve_item3, $wait_reserve_item4, $wait_reserve_item5, $wait_reserve_item6, $wait_reserve_item7, $wait_item1, $wait_item2, $wait_item3, $wait_item4, $wait_item5, $wait_item6, $wait_item7);
}
function log_words($list){
	if($list == "1" || $list == "2" || $list == "3"){
		$words = "인사고과/채용퇴직/일상업무";
	}
	else if($list == "4" || $list == "5" || $list == "6"){
		$words = "인사고과/채용퇴직/협조사항";
	}
	else if($list == "7" || $list == "8" || $list == "9"){
		$words = "인사고과/인사고과/일상업무";
	}
	else if($list == "10" || $list == "11" || $list == "12"){
		$words = "인사고과/인사고과/협조사항";
	}
	else if($list == "13" || $list == "14" || $list == "15"){
		$words = "총무기획/홍보기획/일상업무";
	}
	else if($list == "16" || $list == "17" || $list == "18"){
		$words = "총무기획/홍보기획/협조사항";
	}
	else if($list == "19" || $list == "20" || $list == "21"){
		$words = "총무기획/대외업무/일상업무";
	}
	else if($list == "22" || $list == "23" || $list == "24"){
		$words = "총무기획/대외업무/협조사항";
	}
	else if($list == "25" || $list == "26" || $list == "27"){
		$words = "총무기획/비품구매/일상업무";
	}
	else if($list == "28" || $list == "29" || $list == "30"){
		$words = "총무기획/비품구매/협조사항";
	}
	else if($list == "31" || $list == "32" || $list == "33"){
		$words = "총무기획/사내행사/일상업무";
	}
	else if($list == "34" || $list == "35" || $list == "36"){
		$words = "총무기획/사내행사/협조사항";
	}
	else if($list == "37" || $list == "38" || $list == "39"){
		$words = "총무기획/교육훈련/일상업무";
	}
	else if($list == "40" || $list == "41" || $list == "42"){
		$words = "총무기획/교육훈련/협조사항";
	}
	else if($list == "43" || $list == "44" || $list == "45"){
		$words = "총무기획/전산관리/일상업무";
	}
	else if($list == "46" || $list == "47" || $list == "48"){
		$words = "총무기획/전산관리/협조사항";
	}
	else if($list == "49" || $list == "50" || $list == "51"){
		$words = "총무기획/규정관리/일상업무";
	}
	else if($list == "52" || $list == "53" || $list == "54"){
		$words = "총무기획/규정관리/협조사항";
	}
	else if($list == "55" || $list == "56" || $list == "57"){
		$words = "총무기획/기타업무/일상업무";
	}
	else if($list == "58" || $list == "59" || $list == "60"){
		$words = "총무기획/기타업무/협조사항";
	}
	else if($list == "61" || $list == "62" || $list == "63"){
		$words = "자금회계/회계관리/일상업무";
	}
	else if($list == "64" || $list == "65" || $list == "66"){
		$words = "자금회계/회계관리/협조사항";
	}
	else if($list == "67" || $list == "68" || $list == "69"){
		$words = "자금회계/자금관리/일상업무";
	}
	else if($list == "70" || $list == "71" || $list == "72"){
		$words = "자금회계/자금관리/협조사항";
	}
	else if($list == "73" || $list == "74" || $list == "75"){
		$words = "자금회계/세무업무/일상업무";
	}
	else if($list == "76" || $list == "77" || $list == "78"){
		$words = "자금회계/세무업무/협조사항";
	}
	else if($list == "79" || $list == "80" || $list == "81"){
		$words = "자금회계/기타업무/일상업무";
	}
	else if($list == "82" || $list == "83" || $list == "84"){
		$words = "자금회계/기타업무/협조사항";
	}
	else if($list == "85" || $list == "86" || $list == "87"){
		$words = "전략기획/사전계획/일상업무";
	}
	else if($list == "88" || $list == "89" || $list == "90"){
		$words = "전략기획/기타업무/협조사항";
	}
	else if($list == "91" || $list == "92" || $list == "93"){
		$words = "전략기획/IR업무/일상업무";
	}
	else if($list == "94" || $list == "95" || $list == "96"){
		$words = "전략기획/IR업무/협조사항";
	}
	else if($list == "97" || $list == "98" || $list == "99"){
		$words = "전략기획/컨설팅&교육/일상업무";
	}
	else if($list == "100" || $list == "101" || $list == "102"){
		$words = "전략기획/컨설팅&교육/협조사항";
	}
	else if($list == "103" || $list == "104" || $list == "105"){
		$words = "전략기획/기타업무/일상업무";
	}
	else if($list == "106" || $list == "107" || $list == "108"){
		$words = "전략기획/기타업무/협조사항";
	}
	return $words;
}

?>