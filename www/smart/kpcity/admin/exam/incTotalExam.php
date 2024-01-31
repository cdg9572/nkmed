		
	<div class="historyText">홈 &gt; 사이트 관리 &gt; 운영자 관리</div>

	<div class="propBox2">
		<h3>운영자 관리</h3>

		<a href="#" onClick="document.location='?dir=<?=$dir?>&menu=<?=$menu?>&form=Write&mode=new'" class="resBtn01 potopright">등록 &nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>

<?
//echo $sess_ALV;
if($sess_ALV >1){
    //$where = " and name2='$_SESSION[sess_ADEPT]'";
}

$where .= " and use_yn = 'Y' " ;

list($que, $res, $nowData, $totalCount, $start, $numPerPage, $pagePerList, $pageNum, $searchQuery) = funcList($dir, $menu, $tbl, $field, $keyword, $where, $searchQuery, $listNum, $pageNum, 'seq', 'desc');

testing_dsp($que);
//exit;
?>
		

		<table width="100%" class="tableSt01">
			<thead>
				<tr>
					<th>번호</th>
					<th>아이디</th>
					<th>이름</th>
					<th>권한</th>
					<th>등록일</th>
					<th>삭제</th>
				</tr>
			</thead>
			<tbody>
				<?
				if($nowData == 0) {
				?>
				<tr>
					<td colspan='11' align='center' style="height:250px; vertical-align:middle;">등록된 리스트가 없습니다.</td>
				</tr>
				<?
				} else {
					for($i = 0; $i < $nowData; $i++) {
						$no = $totalCount - $start - $i;
						@$row = MYSQL_FETCH_ARRAY($res);

						if($row['state'] == "Y") {
							$btnValue = "사용";
							$btnClass = "btn";
							//$profState = "<span style='color:blue; cursor:hand' onClick=\"chgState('".$row['state']."')\">사용</span>";
						}
						else if($row['state'] == "N") {
							$btnValue = "중지";
							$btnClass = "btn";
							//$profState = "<span style='color:red; cursor:hand' onClick=\"chgState('".$row['state']."')\">중지</span>";
						}
				?>



				<tr>
					<td><?=$no?></td>
					<td><a class="dd_list" href="?dir=<?=$dir?>&menu=<?=$menu?>&form=Write&mode=modify&seq=<?=$row['seq']?>"><?=$row['manager_id']?></a></td>
					<td><?=$row['name']?></td>
					<td><?=$row['manager_group']?></td>
					<td><?=substr($row[reg_date],0,10)?></td>
					<td><a href="#" class="delSmallBtn" data-featherlight="#fl1" >삭제</a></td>
				</tr>
				<?
					}
				}
				?>
			</tbody>
		</table>
		
		<div class="pageList">
			<?=funcPaging($totalCount, $numPerPage, $pagePerList, $pageNum, $searchQuery);?>
		</div>

	</div>
				
	
	
	
	<div class="lightbox" id="fl1">
		<h3>정말 삭제 하시겠습니까?</h3>
		<div>
			<a href="#" onclick="javascript:location.href='./manager/procManager.php?dir=<?=$dir?>&menu=<?=$menu?>&tbl=<?=$tbl?>&mode=del&seq=<?=$row['seq']?>'" class="boxYesBtn">예, 삭제합니다.</a>
			<a href="./index.html?dir=manager&menu=Manager" class="boxNoBtn">아니오, 취소합니다.</a>
			<img src="../images/21hana_logoFull.png" class="lightLogo" alt=""/ width=100>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="../js/featherlight.min.js"></script>
		
		