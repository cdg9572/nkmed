				<div id="sub-notice">
					<form id="search_form" name="search_form" method="get" action="?">
					<input type="hidden" name="jb_code" id="jb_code" value="<?=$jb_code?>" />
					<input type="hidden" name="search_key" id="search_key" value="jb_all" /> 
					<div class="search">
						<input type="text" placeholder="검색어를 입력하세요." name="search_keyword" id="search_keyword" value="<?=$_GET['search_keyword']?>">
						<button><img src="/resource-pc/images/search-gray.png" alt="검색" id="search_submit" ></button>
					</div>
					</form>
					<div class="main-list-menu" style="margin:-50px 0 0;">
						<div class="inner">
							<div id="tab2-1" class="main-clinic">
								<ul>
							<?php include $GP -> INC_PATH . "/${skin_dir}/board_list_inc.php";	?>
							</ul>
							</div>
							<div id="btn-box" class="right">					
							<!--a href="#" class="btn bg-deepblue">수정</a-->
							<?php
								if($_GET['search_key'] && $_GET['search_keyword']) {
									echo "<a href=\"javascript:;\" class=\"btn0\" onclick=\"javascript:location.href='${index_page}?jb_code=${jb_code}'\" title='목록'><span>목록</span></a>";
								}
								?>

								<?php
								//쓰기권한
								 
								

								if($check_level >= $db_config_data['jba_write_level']) {
									echo "<a class='btn bg-red' href=\"#\" onclick=\"javascript:location.href='${index_page}?jb_code=${jb_code}&jb_mode=twrite'\" title='글쓰기'><span>글쓰기</span></a>";
								} else {
								//	echo "<a class='btn btn_middle' id='twrite_btn' title='글쓰기'><strong>글쓰기</strong></a>";
								}
							?>
						</div>
							<!-- //end .main-clinic -->                           
							<div class="pagination">
								<?=$page_link?>		
														
							</div>
						</div>
						<!-- //end .inner -->
					</div>
					<!-- //end .main-clinic-list -->

					
					<script type="text/javascript">
					$(document).ready(function(){
						$('#search_submit').click(function(){
							$('#search_form').submit();
							return false;
						});

						$('#page_row').change(function(){
							var val = $(this).val();
							location.href="?dep1=<?=$_GET['dep1']?>&dep2=<?=$_GET['dep2']?>&search_key=<?=$_GET['search_key']?>&search_keyword=<?=$_GET['search_keyword']?>&page=<?=$_GET['page']?>&page_row=" + val;
						});
						
						$('#twrite_btn').click(function(){	
							alert("로그인 후 이용가능 합니다.");
							location.href ='/member/login.html?reurl=/community/page03.html';
						});
					});
					</script>