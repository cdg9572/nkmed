<?

function get_dirname() {
 $dir = getcwd(); // 현재 디렉토리명을 반환하는 PHP 함수이다.
 $temp = explode("/", $dir);
 $dirname = $temp[sizeof($temp)-1];
 return $dirname;
}


function getChecked($dest, $key)
{

	
	$check = strpos($dest, $key) ;

	if($check || ($check == "true"))
	{
		$re = "checked" ;
	}
	else 
	{
		$re = "" ;
	}

	return $re  ;

}


function getCheckbox_str($arr)
{
	$re = "" ;
	for($i=0 ; $i < count($arr) ; $i++)
	{
		if($i == 0) $re = $arr[$i];
		else $re = $re."-".$arr[$i];
	}

	return $re ;
}

function Cech_mj( $name, $tel, $gdate)
{
	global $bday, $sex, $email, $add, $mseq1;
	$sql = " SELECT midx, mbate, ms, em, addr  FROM smart_mj_il WHERE mname='$name' and mtel='$tel' and gdate='$gdate' order by 1 desc  limit 1 ";
	#echo $sql;
    $res = MYSQL_QUERY($sql); 
	$trow = MYSQL_FETCH_ARRAY($res);    
	$bday = $trow[mbate];
	$sex = $trow[ms];
	$email = $trow[em];
	$add = $trow[addr];
	$mseq1 = $trow[midx];
}

function get_category_desc($m_item)
{
	//$sql = "select * from TOTRES where left(PERSONAL_ID, 6) = '$p_birth' and PERSON_NAME = '$p_name' and REQUEST_DATE = '$p_date' order by REQUEST_DATE DESC" ;
	$sql = "select * from `hana_m_desc` where m_item ='$m_item' ORDER BY reg_date DESC" ;
//echo "$sql";
	$res = MYSQL_QUERY($sql); 
	$row = MYSQL_FETCH_ARRAY($res);

	$str = "			
			<div>
				<h3> $row[m_item] &nbsp; <i class='fa fa-commenting fa-2x'></i></h3>
				<p> $row[m_desc]</p>
				<p style='height:10 ;'>
			</div>
			
			" ;

	return $str ;
}





//=== 공백제거 // 맨앞 숫자가 있을때 "_" 추가 // () -> _ 변경 // 마지막 * 제거 // "/" -> "_" 수정
function eli($str)
{
		$c0 = $str ;
		$c0 = preg_replace("/\s+/", "",  $c0) ;

		//echo "<br> 공백제거 : $c0 ";

		$c0 = str_replace("/", "_",  $c0) ;

		//echo "<br> \/ 제거 : $c0 ";

		preg_match("/^[0-9]*/", $c0, $n_check);
		if($n_check[0] ||$n_check[0] == "0" )
		{
			$c0 = "_".$c0 ;
		}
		//echo "<br>앞자리 숫자제거 : $c0" ;

		$c0 = str_replace("*", "_",  $c0) ;
		$c0 = str_replace("(", "_",  $c0) ;
		$c0 = str_replace(")", "_",  $c0) ;
		$c0 = str_replace("[", "_",  $c0) ;
		$c0 = str_replace("]", "_",  $c0) ;
		$c0 = str_replace(".", "",  $c0) ;
		$c0 = str_replace("/", "_",  $c0) ;
		$c0 = str_replace("-", "_",  $c0) ;
		$c0 = str_replace("-", "_",  $c0) ;
		$c0 = str_replace("+", "_",  $c0) ;
		$c0 = str_replace(",", "_",  $c0) ;

		//echo "<br> * ( ) -> _ : $c0" ;

		return $c0 ;
}


function eli_title($str) //=== 항목용 처리 
{
		$c0 = $str ;
		$c0 = preg_replace("/\s+/", "",  $c0) ;
		$c0 = str_replace("/", "_",  $c0) ;
		preg_match("/^[0-9]*/", $c0, $n_check);

		/*
		$c0 = str_replace("*", "_",  $c0) ;
		$c0 = str_replace("(", "_",  $c0) ;
		$c0 = str_replace(")", "_",  $c0) ;
		$c0 = str_replace("[", "_",  $c0) ;
		$c0 = str_replace("]", "_",  $c0) ;
		$c0 = str_replace(".", "",  $c0) ;
		$c0 = str_replace("/", "_",  $c0) ;
		$c0 = str_replace("-", "_",  $c0) ;
		$c0 = str_replace("-", "_",  $c0) ;
		$c0 = str_replace("+", "_",  $c0) ;
		$c0 = str_replace(",", "_",  $c0) ;
		*/
		//echo "<br> * ( ) -> _ : $c0" ;

		return $c0 ;
}


//== mult lang에서 임시 검색 문자열을 통한 중국어 추출 
function tr_cn($desc_kr, $tr_check =0) 
{
	/*
	if($desc_kr == 1) 
	{
		return $desc_kr ;
		exit;
	}

	$desc_kr = preg_replace("/\s+/", "",  $desc_kr) ;


	//$sql = "select * from multi_lan where desc_kr = '$desc_kr' ORDER BY reg_date DESC" ;

//echo "$sql" ;
	$res = MYSQL_QUERY($sql) or die(mysql_error()) ;
	$row = mysql_fetch_array($res) ;


	$re = nl2br($row[desc_cn] ) ;

	if(!$re) 
	{
		return $desc_kr ;
	}
	else return $re ;


*/
}


//=== 칸 띄우기 

function h($height)
{
	$tt = $height."px";
	echo " 
		<div style='height:$tt ;'> </div> " ;
}


//=================== 테스트 출력 

function testing_dsp_js($str)
{
	//$test_ip = '112.144.16.75' ;

	$test_ip = '112.155.186.93' ;	
	$r_addr = $_SERVER['REMOTE_ADDR'];


	if($r_addr == $test_ip)
	{
		echo "
		<script>
		alert('===== testing_dsp_js ====== \\n $str');
		</script>
		" ;
	}

}


//=================== 테스트 출력 

function testing_dsp_injs($str)
{
	//$test_ip = '112.144.16.75' ;

	$test_ip = '112.155.186.93' ;	
	$r_addr = $_SERVER['REMOTE_ADDR'];


	if($r_addr == $test_ip)
	{
		echo "
		alert('===== testing_dsp_js ====== \\n $str');
		" ;
	}

}




//================= 0327 추가  초를 00 00 00 시분초 형식으로 반환

function getSecond2hms($second){

	if($second > 60) 
	{
		$min = floor($second/60) ;
		$second = floor($second % 60) ;
	}
	else
	{
		$min = "00" ;
	}

	if($min > 60) 
	{
		$hour = floor($min/60) ;
		$min = floor($min % 60) ;
	}
	else 
	{
		$hour = "00" ;
	}

	$second = sprintf("%02d", $second);
	$min = sprintf("%02d", $min);
	$hour = sprintf("%02d", $hour);

	$checkTime = $hour.$min.$second ;

	return $checkTime ;

}



### 썸네일함수
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
function funcPaging_temp($total, $scale, $pagePerList, $pageNum, $searchQuery) {

	
	@$totalPage = ceil($total/$scale);
	if (!$pageNum) $pageNum = 1;
	@$pageList = ceil($pageNum/$pagePerList)-1;

	if ($pageList > 0)	{
		$navigation = "<a href='?$searchQuery&pageNum=1'><span class='h02'>&nbsp;1&nbsp;</span></a> ... ";
		$prevPage = ($pageList)*$pagePerList;
		$navigation .= "&nbsp;<a href='?$searchQuery&pageNum=$prevPage'><img src='/img/board/prev01.gif' border='0' hspace='3px' /></a>&nbsp;";
	}

	$pageEnd = ($pageList + 1) * $pagePerList;		// 페이지 목록 가운데 부분 출력

	if ($pageEnd > $totalPage) $pageEnd = $totalPage;

	for ($setPage = $pageList * $pagePerList+  1; $setPage <= $pageEnd ; $setPage++) {
		if ($setPage == $pageNum) {
			$navigation .= "<span class='h01 point'><b>$setPage</b></span> ";
		}
		else {
			$navigation .= "<a href='?$searchQuery&pageNum=$setPage'><span class='h01'>$setPage</span></a> ";
		}
	}
	

	// 페이지 목록 맨 끝이 $totalPage 보다 작을 경우에만, [next]...[$totalPage] 버튼을 생성한다.
	if ($pageEnd < $totalPage) {
		$nextPage = ($pageList + 1) * $pagePerList + 1;
		$navigation .= "&nbsp;<a href='?$searchQuery&pageNum=$nextPage'><img src='/img/board/next01.gif' border='0' hspace='3px' /></a>&nbsp; ";
		$navigation .= "... <a href='?$searchQuery&pageNum=$totalPage'>&nbsp;$totalPage&nbsp;</a>";
	}

	return $navigation;
}
### 페이징함수 끝

function funcPaging($total, $scale, $pagePerList, $pageNum, $searchQuery) {
	@$totalPage = ceil($total/$scale);
	if (!$pageNum) $pageNum = 1;
	@$pageList = ceil($pageNum/$pagePerList)-1;

	if ($pageList > 0)	{
		$navigation = "<a href='?$searchQuery&pageNum=1' class='paging_first'>1</a> ... ";
		$prevPage = ($pageList)*$pagePerList;
		$navigation .= "<a href='?$searchQuery&pageNum=$prevPage' class='paging_prev'>&lt;&lt;</a>";
	}

	$pageEnd = ($pageList + 1) * $pagePerList;		// 페이지 목록 가운데 부분 출력

	if ($pageEnd > $totalPage) $pageEnd = $totalPage;

	for ($setPage = $pageList * $pagePerList+  1; $setPage <= $pageEnd ; $setPage++) {
		if ($setPage == $pageNum) {
			$navigation .= "<span class='paging_here'>$setPage</span> ";
		}
		else {
			$navigation .= "<a href='?$searchQuery&pageNum=$setPage' class='paging_link'>$setPage</a> ";
		}
	}

	// 페이지 목록 맨 끝이 $totalPage 보다 작을 경우에만, [next]...[$totalPage] 버튼을 생성한다.
	if ($pageEnd < $totalPage) {
		$nextPage = ($pageList + 1) * $pagePerList + 1;
		$navigation .= "<a href='?$searchQuery&pageNum=$nextPage' class='paging_next'>&gt;&gt;</span> ";
		$navigation .= "... <a href='?$searchQuery&pageNum=$totalPage' class='paging_last'>$totalPage</a>";
	}

	return $navigation;
}

### 페이징함수
function funcPaging_new($total, $scale, $pagePerList, $pageNum, $searchQuery) {
	@$totalPage = ceil($total/$scale);
	
	$navigation .= "<div class='pagesList clearfix'><ul>";
	if (!$pageNum) $pageNum = 1;
	@$pageList = ceil($pageNum/$pagePerList)-1;

	if ($pageList > 0)	{
		$navigation .= "<li><a href='?$searchQuery&pageNum=1'>[1]</a></li>";
		$prevPage = ($pageList)*$pagePerList;
		$navigation .= "<li><a href='?$searchQuery&pageNum=$prevPage'>이전</a></li>";
	}

	$pageEnd = ($pageList + 1) * $pagePerList;		// 페이지 목록 가운데 부분 출력

	if ($pageEnd > $totalPage) $pageEnd = $totalPage;

	for ($setPage = $pageList * $pagePerList+  1; $setPage <= $pageEnd ; $setPage++) {
		if ($setPage == $pageNum) {
			$navigation .= "<li><a href='#' class='thispage'>$setPage</a></li>";
		}
		else {
			$navigation .= "<li><a href='?$searchQuery&pageNum=$setPage'>$setPage</a></li>";
		}
	}

	// 페이지 목록 맨 끝이 $totalPage 보다 작을 경우에만, [next]...[$totalPage] 버튼을 생성한다.
	if ($pageEnd < $totalPage) {
		$nextPage = ($pageList + 1) * $pagePerList + 1;
		$navigation .= "<li><a href='?$searchQuery&pageNum=$nextPage'>다음</a></li> ";
		$navigation .= "<li><a href='?$searchQuery&pageNum=$totalPage'>[$totalPage]</a></li>";
	}
	$navigation .= "</ul></div>";

	return $navigation;
}
### 페이징함수 끝

  



### 페이징함수
function funcPaging1($total, $scale, $p_num, $page_num, $search_query) {
	@$total_page = ceil($total/$scale);
	if (!$page_num) $page_num = 1;
	$page_list = ceil($page_num/$p_num)-1;

	if ($page_list > 0)	{
		$navigation = "<a href='?$search_query&page_num=1'><span class='h02'>[1]</span></a> ... ";
		$prev_page = ($page_list)*$p_num;
		$navigation .= "<a href='?$search_query&page_num=$prev_page'><img src='../images/manager/icon/page_preview.gif' align='absmiddle' border='0'></a>&nbsp;&nbsp;";
	}

	$page_end = ($page_list + 1) * $p_num;		// 페이지 목록 가운데 부분 출력

	if ($page_end > $total_page) $page_end = $total_page;

	for ($setpage = $page_list * $p_num+  1; $setpage <= $page_end ; $setpage++) {
		if ($setpage == $page_num) {
			$navigation .= "<span class='h01 point'><b>[$setpage]</b></span> ";
		}
		else {
			$navigation .= "<a href='?$search_query&page_num=$setpage'><span class='h01'>$setpage</span></a> ";
		}
	}

	// 페이지 목록 맨 끝이 $total_page 보다 작을 경우에만, [next]...[$total_page] 버튼을 생성한다.
	if ($page_end < $total_page) {
		$next_page = ($page_list + 1) * $p_num + 1;
		$navigation .= "&nbsp;&nbsp;<a href='?$search_query&page_num=$next_page'><img src='../images/manager/icon/page_next.gif' align='absmiddle' border='0'></a></span> ";
		$navigation .= "... <a href='?$search_query&page_num=$total_page'><span class='h02'>[$total_page]</a></span>";
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
	//echo "aa";
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


### 리스트 페이지 공통 함수
function funcList($dir, $menu, $tbl, $field, $keyword, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {
	$numPerPage		=	$listNum ? $listNum : 10;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "reg_date";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";

	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	$que = "SELECT COUNT(*) AS total FROM ".$tbl." WHERE view_state='Y'";
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

	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}
function funcList2($dir, $menu, $tbl, $field, $keyword, $where, $searchQuery, $listNum, $pageNum, $orderByColumn, $orderBy) {
	$numPerPage		=	$listNum ? $listNum : 10;				// 게시판 리스트 출력수
	$pagePerList	=	$pagePerList ? $pagePerList : 10;	// 게시판 페이징 노출수
	$pageNum		=	$pageNum ? $pageNum : 1;
	$orderByColumn	=	$orderByColumn ? $orderByColumn : "reg_date";
	$orderBy		=	$orderBy ? $orderBy :  "DESC";

	$searchQuery	=	"dir=".$dir."&menu=".$menu."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&listNum=".$listNum."&column=".$column."&order=".$order.$searchQuery;	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	$que = "SELECT COUNT(*) AS total FROM ".$tbl." WHERE state_cd='Y'";
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
	$que = "SELECT * FROM ".$tbl." WHERE state_cd='Y'";
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

	return array($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery);
}

### 리스트 페이지 공통 함수
function funcList1($mid, $tbl, $field, $keyword, $where, $list_num, $page_num, $column, $order) {
	$num_per_page	=	$list_num ? $list_num : 10;				// 게시판 리스트 출력수
	$page_per_list	=	$page_per_list ? $page_per_list : 10;	// 게시판 페이징 노출수
	$page_num		=	$page_num ? $page_num : 1;
	$column			=	$column ? $column : "REG_DT";
	$order			=	$order ? $order :  "DESC";

	$search_query	=	"mid=".$mid."&tbl=".$tbl."&field=".$field."&keyword=".$keyword."&list_num=".$list_num."&column=".$column."&order=".$order;	// 페이지 이동시 디폴트 변수값

	// 게시물 총개수 셀렉트
	$que = "SELECT COUNT(*) AS TOTAL FROM ".$tbl." WHERE VIEW_STATE='Y'";
	if($where) $que .= " AND ".$where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	@$res = MYSQL_QUERY($que);
	@$row = MYSQL_FETCH_ARRAY($res);

	$total_count	=	$row['TOTAL'];
	$start			=	($page_num - 1) * $num_per_page;
	$end			=	$start + $num_per_page;
	if($end > $total_count) $end	=	$total_count;
	$now_data		=	$end - $start;

	// 해당 페이지 셀렉트
	$que = "SELECT * FROM ".$tbl." WHERE VIEW_STATE='Y'";
	if($where) $que .= " AND ".$where;
	if($field && $keyword) $que .= " AND ".$field." LIKE '%".$keyword."%'";
	$que .= " ORDER BY ".$column." ".$order." LIMIT ".$start.", ".$num_per_page;
	@$res = MYSQL_QUERY($que);

	return array($que, $res, $now_data, $total_count, $start, $num_per_page, $page_per_list, $page_num, $search_query);
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

function funcSendMail($type, $to_mail, $to_name, $from_mail, $from_name, $mail_subject, $mail_content, $cc="", $bcc="") {
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


function funcSendMail1($type, $to, $to_name, $from, $from_name, $subject, $comment, $cc="", $bcc="") {
	if(!empty($to_name))
		$recipient = "$to_name <$to>";
	else
		$recipient = "$to <$to>";

	//if(!$type) $comment = nl2br($comment);

	if(!empty($from_name))
		$headers  = "From: $from_name <$from>\n";
	else
		$headers  = "From: $from <$from>\n";
		$headers .= "X-Sender: <$from>\n";
		$headers .= "X-Mailer: PHP ".phpversion()."\n";
		$headers .= "X-Priority: 1\n";
		$headers .= "Return-Path: <$from>\n";

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
function funcSendSMS($member,$callphone1,$callphone2,$callphone3,$callmessage,$rdate,$rtime,$reqphone1,$reqphone2,$reqphone3,$callname) {

	$sms = new SuremPacket;
	$result = $sms->sendsms($member,$callphone1,$callphone2,$callphone3,$callmessage,$rdate,$rtime,$reqphone1,$reqphone2,$reqphone3,$callname);

}

//==============================================================
// 함수명 : navigator($start_record=0,$list_per_page =10,$page_for_bar,$total=0, $query_string="", $ret="")
// 용   도 : 네비게이션 바 출력. 이때, 자동으로 뒤에 네비게이션 태그가 붙는다.
// 인   자 :$start_record (시작 레코드번호)
//			$list_per_page (페이지당 출력될 레코드수)
//			$page_for_bar (네비게이션바에 표시될 페이지수)
//			$total (총 게시물수)
//			$query_string (전달될 매개변수),
//			$ret (값이 ret 이면 결과값 리턴)
//==============================================================
function navigator ($start_record = 0, $list_per_page =10, $page_for_bar, $total = 0, $query_string = "", $ret='') {
	global $PHP_SELF;

	$out 	= "";

	if ($query_string) {
		$query_string = "?" . $query_string;
		$comb 	= "&";
	} else {
		$comb 	= "?";
	}

	// 출력할 페이지 수가 0이면 0을 리턴
	if (! $page_for_bar) {
		return 0;
	}

	$total_lists = $list_per_page*$page_for_bar;
	if ($total_lists) {
		$page = floor($start_record/$total_lists);
	}

	$out .= "";
	if ($total > $list_per_page) {
		//----------------------------------------------------------
		// 처음
		//----------------------------------------------------------
//		if($start_record > 0) {
//			$prev	= 0;
//			$out 	.= "<a href='$PHP_SELF$query_string$comb" . "start_record=$prev'>[처음]</a>&nbsp;";
//		}

		//----------------------------------------------------------
		// 이전 10개
		//----------------------------------------------------------
		if ($start_record+1>$list_per_page*$page_for_bar) {
			// 2000-02-27 Modified by rp
			$prev = $start_record-$list_per_page*$page_for_bar;
			$out .= "<a href='$PHP_SELF$query_string$comb" . "start_record=$prev'>[이전${page_for_bar}개]</a>";
		}

		//----------------------------------------------------------
		// 이전
		//----------------------------------------------------------
		if($start_record > 0) {
			$prev	= $start_record - $list_per_page;
			$out 	.= "&nbsp;<a href='$PHP_SELF$query_string$comb" . "start_record=$prev'><img src=\"/images/icon/prev.gif\" width=\"7\" height=\"5\" align=\"absmiddle\"></a>&nbsp;";
		}

		//----------------------------------------------------------
		// 페이지
		//----------------------------------------------------------
		for ($virt = 0; $virt < $page_for_bar; $virt++) {
			$nlink = ($page*$page_for_bar+$virt) * $list_per_page;
			$virt_in = $page*$page_for_bar+$virt+1;

			if ($nlink < $total) {
				if ($nlink!=$start_record)
				$out .= "&nbsp;<b><a href='$PHP_SELF$query_string$comb" . "start_record=$nlink'>$virt_in</a></b>&nbsp;<font color=\"#B7B5B0\">|</font>";
				else
				$out .= "&nbsp;<b><font color='#125B86'>$virt_in</font></b>&nbsp;<font color=\"#B7B5B0\">|</font>";
			}
		}

		//----------------------------------------------------------
		// 다음
		//----------------------------------------------------------
		if($start_record + $list_per_page < $total) {
			$prev	= $start_record + $list_per_page;
			$out 	.= "&nbsp;<a href='$PHP_SELF$query_string$comb" . "start_record=$prev'><img src=\"/images/icon/next.gif\" width=\"7\" height=\"5\" align=\"absmiddle\"></a>&nbsp;";
		}

		//----------------------------------------------------------
		// 다음 10개
		//----------------------------------------------------------
		if($total > (($page+1)*$list_per_page*$page_for_bar)) {
			$n_start=($page+1)*$list_per_page*$page_for_bar;
			$out .= "<a href='$PHP_SELF$query_string$comb" . "start_record=$n_start'>[다음${page_for_bar}개]</a>";
		}

		//----------------------------------------------------------
		// 마지막
		//----------------------------------------------------------
//		$prev	= $list_per_page * (ceil($total / $list_per_page) - 1);
//
//		if($start_record != $prev) {
//			$out 	.= "&nbsp;<a href='$PHP_SELF$query_string$comb" . "start_record=$prev'>[마지막]</a>";
//		}

	}

	$out = "<font class='pagelink'>$out";

	if ($ret == 'ret') {
		return $out;
	} else {
		echo $out;
	}
}
function navigator_new ($start_record = 0, $list_per_page =10, $page_for_bar, $total = 0, $query_string = "", $ret='') {
	global $PHP_SELF;

	$out 	= "";

	if ($query_string) {
		$query_string = "?" . $query_string;
		$comb 	= "&";
	} else {
		$comb 	= "?";
	}

	// 출력할 페이지 수가 0이면 0을 리턴
	if (! $page_for_bar) {
		return 0;
	}

	$total_lists = $list_per_page*$page_for_bar;
	if ($total_lists) {
		$page = floor($start_record/$total_lists);
	}

	$out .= "";
	if ($total > $list_per_page) {
		//----------------------------------------------------------
		// 처음
		//----------------------------------------------------------
//		if($start_record > 0) {
//			$prev	= 0;
//			$out 	.= "<a href='$PHP_SELF$query_string$comb" . "start_record=$prev'>[처음]</a>&nbsp;";
//		}

		//----------------------------------------------------------
		// 이전 10개
		//----------------------------------------------------------
		if ($start_record+1>$list_per_page*$page_for_bar) {
			// 2000-02-27 Modified by rp
			$prev = $start_record-$list_per_page*$page_for_bar;
			//$out .= "<li><a href='$PHP_SELF$query_string$comb" . "start_record=$prev'>이전</a></li>";
		}

		//----------------------------------------------------------
		// 이전
		//----------------------------------------------------------
		if($start_record > 0) {
			$prev	= $start_record - $list_per_page;
			$out 	.= "<li><a href='$PHP_SELF$query_string$comb" . "start_record=$prev'>이전</a></li>";
		}

		//----------------------------------------------------------
		// 페이지
		//----------------------------------------------------------
		for ($virt = 0; $virt < $page_for_bar; $virt++) {
			$nlink = ($page*$page_for_bar+$virt) * $list_per_page;
			$virt_in = $page*$page_for_bar+$virt+1;

			if ($nlink < $total) {
				if ($nlink!=$start_record)
				$out .= "<li><a href='$PHP_SELF$query_string$comb" . "start_record=$nlink'>$virt_in</a></li>";
				else
				$out .= "<li><a href='#' class='thispage'>$virt_in</a></li>";
			}
		}

		//----------------------------------------------------------
		// 다음
		//----------------------------------------------------------
		if($start_record + $list_per_page < $total) {
			$prev	= $start_record + $list_per_page;
			$out 	.= "<li><a href='$PHP_SELF$query_string$comb" . "start_record=$prev'>다음</a></li>";
		}

		//----------------------------------------------------------
		// 다음 10개
		//----------------------------------------------------------
		if($total > (($page+1)*$list_per_page*$page_for_bar)) {
			$n_start=($page+1)*$list_per_page*$page_for_bar;
			//$out .= "<li><a href='$PHP_SELF$query_string$comb" . "start_record=$n_start'>[다음${page_for_bar}개]</a></li>";
		}

		//----------------------------------------------------------
		// 마지막
		//----------------------------------------------------------
//		$prev	= $list_per_page * (ceil($total / $list_per_page) - 1);
//
//		if($start_record != $prev) {
//			$out 	.= "&nbsp;<a href='$PHP_SELF$query_string$comb" . "start_record=$prev'>[마지막]</a>";
//		}

	}

	$out = "<font class='pagelink'>$out";

	if ($ret == 'ret') {
		return $out;
	} else {
		echo $out;
	}
}

//==============================================================
// 함수명 : is_mail($email)
// 작성자 : 디유넷 - 연구소
// 작성일 : 2002-11-20
//--------------------------------------------------------------------------------
// 용   도 : E-Mail 유효성 검사
//
// 인   자 : $email : 이멜주소
//==============================================================
function is_mail($email) {
	if(ereg("([^[:space:]]+)", $email) && (!ereg("(^[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+)*@[0-9a-zA-Z-]+(\.[0-9a-zA-Z-]+)*$)", $email))) {
		return false;
	}
	return true;
}

//--------------------------------------------------------------------------------
// 용   도 : 알림 메세지를 띄운후 해당 Form으로 포커스르 이동시킨다.
//       예 : jsAlert("[시스템 메세지]\\n$value 만큼 $which (을)를 $how 하였습니다.","document.insForm.writer","리턴여부");
// 인   자 : $comment (알람 메세지내용), $elementForm (포커스될 Form 이름)
//             $ret (리턴여부)
//==============================================================
function jsAlert ($comment, $elementForm = "", $ret = "") {
	//$comment = ereg_replace("\"","`",$comment);
	//$comment = ereg_replace("\'","`",$comment);
	//$comment = ereg_replace("\r\n","\\n",$comment);
	if($elementForm)		$elementFormstr = "$elementForm.focus();";
	if($elementForm == "document.insForm.target_type[1]")        $elementFormstr = "$elementForm.click();";

	if(!$ret){
		$jsalert = "<script>alert(\"$comment\");</script>";
		return $jsalert;
	}else{
		echo "<script>alert(\"$comment\");</script>";
	}
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
// 함수명 : input_trim($value)
// 작성자 : 연구소
// 작성일 : 2002-11-20
//--------------------------------------------------------------------------------
// 용   도 : 오라클/MSSQL 사용시 값에 '가 포함된 경우 입력하기 전에 '를 ''로 바꿔준다.
//             주로 INSERT 하기전에 변수에 input_trim 함수를 사용한다.
// 인   자 : $value (입력될 값)
//==============================================================
function input_trim($value) {
	$value	= trim($value);

	// 디유넷 - 연구소 수정
	//	$value	= str_replace("\\\"","\"",$value);
	//	$value	= str_replace("\'","''",$value);
	$value = addslashes($value);

	## 게시판 html 쓰기 방지용 ###
	//$value=htmlspecialchars($value, ENT_QUOTES);

	return $value;
	// 여기까지

	//return eregi_replace("'","''",$value);
}

//==============================================================
// 함수명 : FileExt($filename)
// 작성자 : 이진수
// 작성일 : 2002-11-20
//--------------------------------------------------------------------------------
// 용   도 : File형식을 찾아서 형식화일 이미지를 보낸다.
//
// 인   자 : $filename (파일명)
//==============================================================
function FileExt($filename){
	if ($filename == ""){
		$src="default.gif";
	} else {
		$fileext = getFileExt($filename);
	 	$fileext = strtolower($fileext);
		switch($fileext){
			case 'bat':	$src="bat.gif";break;
			case 'bmp':	$src="bmp.gif";break;
			case 'com':  	$src="com.gif";break;
			case 'zip':
			case 'rar':
			case 'ace':
			case 'gz' :  	$src="compressed.gif"; break;
			case 'rpm':
			case 'exe':  	$src="exe.gif"; break;
			case 'gif':  	$src="gif.gif"; break;
			case 'hwp':  	$src="hwp.gif"; break;
			case 'jpg':
			case 'jpeg': 	$src="jpg.gif"; break;
			case 'mpg':
			case 'avi':
			case 'asx':
			case 'asf':  	$src="movie.gif"; break;
			case 'mp3':  	$src="mp3.gif"; break;
			case 'ppt':  	$src="ppt.gif"; break;
			case 'ra';   	$src="ra.gif"; break;
			case 'wav':  	$src="wav.gif"; break;
			case 'doc':  	$src="doc.gif"; break;
			case 'phps': 	$src="php.gif"; break;
			case 'mpeg': 	$src="mpeg.gif"; break;
			case 'mov':  	$src="mov.gif"; break;
			case 'rm';   	$src="rm.gif"; break;
			case 'txt':  	$src="txt.gif"; break;
			case 'gdb':  	$src="gdb.gif"; break;
			case 'pdf':  	$src="pdf.gif"; break;
			case 'xls':  	$src="xls.gif"; break;
			default:     	$src="unknown.gif"; break;
		}
	}
	return $src;
}

//==============================================================
// 함수명 : getFileExt($filename)
// 작성자 : 이진수
// 작성일 : 2002-11-20
//--------------------------------------------------------------------------------
// 용   도 : File형식을 찾는다.
//
// 인   자 : $filename (파일명)
//==============================================================
function getFileExt($filename){
	$ipos = 0;
	$ipos = strrpos($filename, ".");
	$fileext = substr($filename,$ipos+1);
//	$fileext = substr(strrchr($filename,"."),1);
	return $fileext;
}

//==============================================================
// 함수명 : errmsg
// 작성자 : 이용인
// 작성일 : 2006-02-01
//--------------------------------------------------------------
// 용   도 : errmsg
//
// 인   자 : $mng
//==============================================================
function errmsg($msg) {

        if($msg == "") {
            $msg = "정상적인 접근바랍니다!!";
        }

        echo"
            <SCRIPT LANGUAGE=JavaScript>
            <!--
                alert('$msg');
                history.back();
            //-->
            </SCRIPT>
        ";
        exit;
    }

//==============================================================
// 함수명 : upfileRename($str);
// 작성자 : 이용인
// 작성일 : 2005-06-16
//--------------------------------------------------------------
// 용   도 : 파일이 다른서버에 서버명과 폴더명
//
// 인   자 : $str
//==============================================================
function upfileRename($str,$dir="") {
	$_upDir = substr(view_trim($str),0,4);
	if( (int) $_upDir <= (int) "0408") {
		$upDir['http'] = "http://file.iteaching.co.kr";
		if( $_upDir == "0405" || $_upDir == "0406" || $_upDir == "0407"  || $_upDir == "0408" ) {
			$upDir['Dir'] = substr($_upDir,0,4)."/";
		}
	}

	if($dir=="dir") {
		$val = $upDir['Dir'];
	} else {
		$val = $upDir['http'];
	}
	//echo (int) $_upDir ."($str) - ".(int) "0404" ." <br>";

	return $val;
}

/// Ajax paging
function ajaxPaging($total, $scale, $p_num, $page, $search_query) {
	@$total_page = ceil($total/$scale);
	if (!$page) $page = 1;
	$page_list = ceil($page/$p_num)-1;

	if ($page_list > 0)	{
		$navigation = "<a href='#' onClick=\"viewPage('?$search_query&page=1')\"><span class='h02'>[1]</span></a> ... ";
		$prev_page = ($page_list)*$p_num;
		$navigation .= "<a href='#' onClick=\"viewPage('$search_query&page=$prev_page')\"><img src='/images/board/prev.gif' align='absmiddle' border='0'></a>&nbsp;&nbsp;";
	}

	$page_end = ($page_list + 1) * $p_num;		// 페이지 목록 가운데 부분 출력

	if ($page_end > $total_page) $page_end = $total_page;

	for ($setpage = $page_list * $p_num+  1; $setpage <= $page_end ; $setpage++) {
		if ($setpage == $page) {
			$navigation .= "<span class='h01 point'><b>[$setpage]</b></span> ";
		}
		else {
			$navigation .= "<a href='#' onClick=\"viewPage('$search_query&page=$setpage')\"><span class='h01'>$setpage</span></a> ";
		}
	}

	// 페이지 목록 맨 끝이 $total_page 보다 작을 경우에만, [next]...[$total_page] 버튼을 생성한다.
	if ($page_end < $total_page) {
		$next_page = ($page_list + 1) * $p_num + 1;
		$navigation .= "&nbsp;&nbsp;<a href='#' onClick=\"viewPage('$search_query&page=$next_page')\"><img src='/images/board/next.gif' align='absmiddle' border='0'></a></span> ";
		$navigation .= "... <a href='#' onClick=\"viewPage('$search_query&page=$total_page')\"><span class='h02'>[$total_page]</a></span>";
	}

	return $navigation;
}




//=================== 테스트 출력 

function testing_dsp($str)
{


	//$test_ip = '112.144.16.75' ;

	//$test_ip = '112.155.186.93' ;

	$test_ip = '122.45.143.21' ;
	
	
	$r_addr = $_SERVER['REMOTE_ADDR'];


	if($r_addr == $test_ip)
	{
		if($str == "post")
		{
			$return = "<br>*** Post value *** <br>" ;
			foreach ($_POST as $k => $v) {
				$return .= "\$_POST[$k] => $v <br> ";
			}
			
		}
		else if($str == "get")
		{
			$return = "<br>*** Get value *** <br>" ;
			foreach ($_GET as $k => $v) {
				$return .= "\$_GET[$k] => $v <br> ";
			}
		}
		else if($str == "session")
		{
			$return = "<br>*** Session value *** <br>" ;
			foreach ($_SESSION as $k => $v) {
				$return .= "\$_SESSION[$k] => $v <br> ";
			}
		}
		else if(is_array($str))
		{
			$return = "<br>*** Array *** <br>" ;
			foreach ($str as $k => $v) {
				$return .= "\$data[$k] => $v <br> ";
			}
		}
		
		else
		{
			$return = "<br>*** string value *** <br>".$str ;
		}

		echo "$return <br> ******************** <br>";

	}

}


function testing_stop()
{
	$test_ip = '112.144.16.75' ;
	$r_addr = $_SERVER['REMOTE_ADDR'];

	if($r_addr == $test_ip)
	{
		exit;
	}

}


?>