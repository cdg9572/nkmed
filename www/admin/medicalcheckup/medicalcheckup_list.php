<?php
    //error_reporting(E_ALL);
    //ini_set("display_errors", 1);

	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");
	
	include_once($GP->CLS."class.list.php");
	include_once($GP->CLS."class.multi.php");
	include_once($GP->CLS."class.button.php");
	$C_ListClass 	= new ListClass;
	$C_multi 	= new multi;
	$C_Button 		= new Button;
	
	$args = array( 		
        "tm_menu" => "medicalcheckup",	
        "tm_type" => $_GET['tm_type'],	
		"show_row" => 10,
		"pagetype" => "admin"
	) ;  
    $args['show_row'] = 10;
  
	$data = "";
	$data = $C_multi->multi_List(array_merge($_GET,$_POST,$args));
	
	$data_list 		= $data['data'];
	$page_link 		= $data['page_info']['link'];
	$page_search 	= $data['page_info']['search'];
	$totalcount 	= $data['page_info']['total'];
	
	$totalpages 	= $data['page_info']['totalpages'];
	$nowPage 		= $data['page_info']['page'];
	$totalcount_l 	= number_format($totalcount,0);
	
	$data_list_cnt 	= count($data_list);

    $multi_select = $C_Func -> makeSelect_Normal('tm_select', $GP -> multi_TYPE, $tm_select, '', '::선택::');
?>
<body>
<div class="Wrap"><!--// 전체를 감싸는 Wrap -->
		<? include_once($GP -> INC_ADM_PATH."/header.php"); ?>
		<div class="boxContentBody">
			<div class="boxSearch">
			<form name="base_form" id="base_form" method="GET">
			<ul>				
				<li>
					<strong class="tit">예약희망일</strong>
					<span><input type="text" name="s_date" id="s_date" value="<?=$_GET['s_date']?>" class="input_text" size="20"></span>
					<span>~</span>
					<span><input type="text" name="e_date" id="e_date" value="<?=$_GET['e_date']?>" class="input_text" size="20" /></span>
				</li>	
                <li>					
                    <strong class="tit">프로그램</strong>
                    <span>
                        <select name="tm_type" id="tm_type">
                            <option value="">:: 선택 ::</option>
                            <option value="A" <? if($tm_type == "A") echo "selected";?>>공단검진</option>
                            <option value="B" <? if($tm_type == "B") echo "selected";?>>건강형</option>
                            <option value="C" <? if($tm_type == "C") echo "selected";?>>소망형</option>
                            <option value="D" <? if($tm_type == "D") echo "selected";?>>믿음형</option>
                            <option value="E" <? if($tm_type == "E") echo "selected";?>>행복형</option>
                            <option value="F" <? if($tm_type == "F") echo "selected";?>>사랑해</option>
                        </select>                                                                        
                    </span>  
                </li>	    
				<li>
					<strong class="tit">검색조건</strong>
					<span>
					<select name="search_key" id="search_key">
						<option value="">:: 선택 ::</option>
                        <option value="tm_content5" <? if($_GET['search_key'] == "tm_content5"){ echo "selected";}?> >이름</option>
                        <option value="tm_content6" <? if($_GET['search_key'] == "tm_content6"){ echo "selected";}?> >연락처</option>
					</select>
					</span>
					<span><input type="text" name="search_content" id="search_content" value="<?=$_GET['search_content']?>" class="input_text" size="17" /></span>
					<span><button id="searctm_submit" class="btnSearch ">검색</button></span>
				</li>
			</ul>
			</form>
			</div>
		</div>
		<div style="margin-top:5px; text-align:right;">	
		<!-- <button onClick="layerPop('ifm_reg','./medicalcheckup_reg.php?tm_type=<?=$_GET['tm_type']?>', '100%', 650)"; class="btnSearch">등록</button> -->
		</div>
		<div id="BoardHead" class="boxBoardHead">				
				<div class="boxMemberBoard">
					<table>
						<colgroup>
							<col />							
							<col />
                            <col />
							<col />
                            <col />
							<col />
							<col />
                            <col style="width:150px;"/>
						</colgroup>
						<thead>
							<tr>
								<th>No</th>                              
                                <th>프로그램</th>                              
                                <th>이름</th>
								<th>예약희망일</th>
								<th>연락처</th>								
								<th>등록일</th>
								<th>상태</th>
								<th>수정/삭제</th>
							</tr>
						</thead>
						<tbody>
                        <input type="hidden" name="max_desc" id="max_desc" value="<?=$data_list[0]['tm_desc']?>" />
							<?
								$dummy = 1;
								if($data_list_cnt > 0 ) {
									for ($i = 0 ; $i < $data_list_cnt ; $i++) {
										$tm_idx        = $data_list[$i]['tm_idx'];                                                                              
                                        $tm_content5      = $data_list[$i]['tm_content5'];
                                        $tm_content6      = $data_list[$i]['tm_content6'];
                                        $tm_content12      = $data_list[$i]['tm_content12'];
										$tm_content13      = $data_list[$i]['tm_content13'];
										$tm_type       = $data_list[$i]['tm_type'];										
										$tm_show       = $data_list[$i]['tm_show'];										
										$tm_regdate    = $data_list[$i]['tm_regdate'];	
										$tm_img        = $data_list[$i]['tm_img'];
                                        $tm_m_img      = $data_list[$i]['tm_m_img'];   
                                        $tm_content3 	= $C_Func->strcut_utf8($tm_content3, 100, true, "...");	                                    
										
										$b_img = '';
										if($tm_img !=  '') {
											$b_img = "<img src='" . $GP -> UP_multi_URL . $tm_img . "' width='100px' />";
										}else {
											$b_img = "<img src='/images/no_image.jpg' width='100px' />";
										}
																		
																				
										$edit_btn = $C_Button -> getButtonDesign('type2','상세보기',0,"layerPop('ifm_reg','./medicalcheckup_edit.php?tm_idx=" . $tm_idx. "', '100%', 900)", 50,'');	
										$edit_btn .= $C_Button -> getButtonDesign('type2','삭제',0,"multi_delete('" . $tm_idx. "')", 50,'');
							?>
									<tr id="<?=$tm_idx?>">
                                        <td><?=$data['page_info']['start_num']--?></td>
										<td><?=$GP -> checkup_RESULT[$tm_type]?></td>                                       
                                        <td><?=$tm_content5?></td>
                                        <td><?=$tm_content12?></td>								
										<td><?=$tm_content6?></td>																					
										<td><?=$tm_regdate?></td>																
										<td><?=$GP -> QNA_RESULT[$tm_show]?></td>
										<td><?=$edit_btn?></td>
									</tr>
									<?
										$dummy++;
									}
								}else{
									echo "<tr><td colspan='8' align='center'>데이터가 없습니다.</td></tr>";
								}
							?>							
						</tbody>
					</table>
				</div>			
			</div>
			<ul class="boxBoardPaging">
				<?=$page_link?>
			</ul>
		</div>
		<? include_once($GP -> INC_ADM_PATH."/footer.php"); ?>
	</div>
</div><!-- 전체를 감싸는 Wrap //-->
</body>
</html>
<script type="text/javascript">

	$(document).ready(function(){														 
	
		callDatePick('tm_date');
		callDatePick('e_date');

		$('#searctm_submit').click(function(){																			 

			if($.trim($('#search_content').val()) != '')
			{
				if($('#search_key option:selected').val() == '')
				{
					alert('검색조건을 선택하세요');
					return false;
				}
			}

			if($('#search_key option:selected').val() != '')
			{
				if($.trim($('#search_content').val()) == '')
				{
					alert('검색내용을 입력하세요');
					$('#search_content').focus();
					return false;
				}
			}


			$('#base_form').submit();
			return false;
        });      
	});

	function multi_delete(tm_idx)
	{
		if(!confirm("삭제하시겠습니까?")) return;

		$.ajax({
			type: "POST",
			url: "./proc/multi_proc.php",
			data: "mode=MULTI_DEL&tm_idx=" + tm_idx,
			dataType: "text",
			success: function(msg) {

				if($.trim(msg) == "true") {
					alert("삭제되었습니다");
					window.location.reload();
					return false;
				}else{
					alert('삭제에 실패하였습니다.');
					return;
				}
			},
			error: function(xhr, status, error) { alert(error); }
		});

	}
</script>