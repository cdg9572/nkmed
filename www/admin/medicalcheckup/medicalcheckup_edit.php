<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
	include_once("../../_init.php");
	include_once($GP -> INC_ADM_PATH."/head.php");	
	
	include_once($GP -> CLS."/class.multi.php");
	$C_multi 	= new multi;
	
	$args = array("tm_idx" => $_GET['tm_idx'] );	    
    $rst = $C_multi ->MULTI_Info($args);
	
	if($rst) {
		extract($rst);		
    }	

    $MULTI_select = $C_Func -> makeSelect_Normal('tm_show', $GP -> QNA_RESULT, $tm_show, '', '::선택::');
    
?>
<body>
<div class="Wrap_layer"><!--// 전체를 감싸는 Wrap -->
	<div class="boxContent_layer">
		<div class="boxContentHeader">
			<span class="boxTopNav"><strong>수정하기</strong></span>
		</div>
		<form name="base_form" id="base_form" method="POST" action="?" enctype="multipart/form-data">
		<input type="hidden" name="mode" id="mode" value="MULTI_MODI" />
		<input type="hidden" name="tm_idx" id="tm_idx" value="<?=$_GET['tm_idx']?>" />       		
        <input type="hidden" name="tm_menu" id="tm_menu" value="medicalcheckup" /> 
		<input type="hidden" name="tm_type" id="tm_type" value="<?=$tm_type?>" /> 
		<input type="hidden" name="before_image_main" id="before_image_main" value="<?=$tm_img?>" />
        <input type="hidden" name="before_image_main_m" id="before_image_main_m" value="<?=$tm_m_img?>" />      
		<div class="boxContentBody">			
			<div class="boxMemberInfoTable_layer">				
				<div class="layerTable">
					<table class="table table-bordered">
						<tbody>  
                            <tr>
								<th><span>*</span>검사 프로그램</th>
								<td>
									<?=$GP -> checkup_RESULT[$tm_type]?>
								</td>
                            </tr>    
                            <tr>
								<th><span>*</span>성별</th>
								<td>
                                    <input type="text" class="input_text" size="10" name="tm_title" id="tm_title" value="<?=$tm_title?>"/>
								</td>
                            </tr>
                            <?
                                if($tm_type == "A"){ //공단검진                                  
                                echo "
                                    <tr>
                                        <th><span>*</span>국가검진</th>
                                        <td>
                                             <input type='text' class='input_text' size='100' name='tm_content1' id='tm_content1' value='".$tm_content1."'/>
                                        </td>
                                    </tr>" ;
                                }
                                else if($tm_type == "B"){ //건강형                                    
                                echo "
                                    <tr>
                                        <th><span>*</span>검진유형</th>
                                        <td>
                                          <input type='text' class='input_text' size='100' name='tm_content1' id='tm_content1' value='".$tm_content1."'/>
                                        </td>
                                    </tr>" ;
                                }
                                else if($tm_type == "C"){ //소망형
                                echo "
                                    <tr>
                                        <th><span>*</span>A검사</th>
                                        <td>
                                            <input type='text' class='input_text' size='100' name='tm_content1' id='tm_content1' value='".$tm_content1."'/>
                                        </td>
                                    </tr>
                                     <tr>
                                        <th><span>*</span>B검사</th>
                                        <td>
                                            <input type='text' class='input_text' size='100' name='tm_content2' id='tm_content2' value='".$tm_content2."'/>
                                        </td>
                                    </tr>" ;
                                }
                                else if($tm_type == "D"){ //믿음형
                                echo "
                                    <tr>
                                        <th><span>*</span>기본옵션</th>
                                        <td>
                                            <input type='text' class='input_text' size='100' name='tm_content4' id='tm_content4' value='".$tm_content4."'/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><span>*</span>A검사</th>
                                        <td>
                                             <input type='text' class='input_text' size='100' name='tm_content1' id='tm_content1' value='".$tm_content1."'/>
                                        </td>
                                    </tr>
                                     <tr>
                                        <th><span>*</span>B검사</th>
                                        <td>
                                           <input type='text' class='input_text' size='100' name='tm_content2' id='tm_content2' value='".$tm_content2."'/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><span>*</span>C검사</th>
                                        <td>
                                          <input type='text' class='input_text' size='100' name='tm_content3' id='tm_content3' value='".$tm_content3."'/>
                                        </td>
                                    </tr>" ;
                                }
                                else if($tm_type == "E"){ //행복형
                                echo "
                                    <tr>
                                        <th><span>*</span>A검사</th>
                                        <td>
                                            <input type='text' class='input_text' size='100' name='tm_content1' id='tm_content1' value='".$tm_content1."'/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><span>*</span>B검사</th>
                                        <td>
                                        <input type='text' class='input_text' size='100' name='tm_content2' id='tm_content2' value='".$tm_content2."'/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><span>*</span>C검사</th>
                                        <td>
                                        <input type='text' class='input_text' size='100' name='tm_content3' id='tm_content3' value='".$tm_content3."'/>
                                        </td>
                                    </tr>" ;
                                }
                                else if($tm_type == "F"){ //사랑해
                                echo "
                                <tr>
                                    <th><span>*</span>A검사</th>
                                    <td>
                                        <input type='text' class='input_text' size='100' name='tm_content1' id='tm_content1' value='".$tm_content1."'/>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span>*</span>C검사</th>
                                    <td>
                                    <input type='text' class='input_text' size='100' name='tm_content3' id='tm_content3' value='".$tm_content3."'/>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span>*</span>기본사항</th>
                                    <td>
                                    <input type='text' class='input_text' size='100' name='tm_content4' id='tm_content4' value='".$tm_content4."'/>
                                    </td>
                                </tr>" ;
                                }


                            ?>
							
							<tr>
								<th><span>*</span>이름</th>
								<td>
                                    <input type="text" class="input_text" size="50" name="tm_content5" id="tm_content5" value="<?=$tm_content5?>"/>
								</td>
                            </tr>                                                              
                            
							<tr>
								<th><span>*</span>전화번호</th>
								<td>
                                    <input type="text" class="input_text" size="50" name="tm_content6" id="tm_content6" value="<?=$tm_content6?>"/>
								</td>
                            </tr>  
							<tr>
								<th><span>*</span>이메일</th>
								<td>
                                <input type="text" class="input_text" size="50" name="tm_content10" id="tm_content10" value="<?=$tm_content10?>"/>
								</td>
                            </tr> 
							<!-- <tr>
								<th><span>*</span>주소</th>
								<td>
									우편번호 : <input type="text" class="input_text" size="10" name="tm_content7" id="tm_content7" value="<?=$tm_content7?>"/> 주소 : <input type="text" class="input_text" size="40" name="tm_content8" id="tm_content8" value="<?=$tm_content8?>"/>
                                    <input type="text" class="input_text" size="10" name="tm_content9" id="tm_content9" value="<?=$tm_content9?>"/>
								</td>
                            </tr>                            -->
							<tr>
								<th><span>*</span>예약희망일시</th>
								<td>
									<input type="text" class="input_text" size="30" name="tm_content12" id="tm_content12" value="<?=$tm_content12?>"/>
								</td>
                            </tr>                              							
							<tr>
								<th><span>*</span>수술력/복용약/특이사항</th>
								<td>
                                    <input type="text" class="input_text" size="30" name="tm_content11" id="tm_content11" value="<?=$tm_content11?>"/>
								</td>
                            </tr>    	
							<tr class="row">
								<th scope="row"><span class="star">*</span>처리내용</th>
								<td>
								<textarea name="tm_content13" id="tm_content13" style="width:800px; height:100px;"><?=$tm_content13?></textarea>
								<!-- <textarea name="ir1" id="ir1" style="width:100%; height:300px; min-width:280px; display:none;"></textarea> -->
								</td>
							</tr>				
							<tr class="row">
								<th scope="row"><span class="star">*</span>처리상태</th>
								<td><?=$MULTI_select?></td>
							</tr>
                            <!-- <tr class="row">
                                <th scope="row"><span class="star">*</span>처리일자</th>
                                <td><input type="text" class="input_text" size="30" name="tm_content14" id="tm_content14" value="<?=$tm_content14?>" /></td>
                            </tr>
									 -->
							<!-- <tr>
                                <th><span>*</span>이미지</th>
                                <td>
                                    <input type="file" name="tm_img" id="`tm_`img" size="30">
                                    <?
                                        if($tm_img != "") {
                                            echo  "<br>" . $tm_img;
                                    ?>
                                        <a href="#" onClick="img_del('<?=$tm_img;?>','<?=$_GET['tm_idx']?>','W')">(X)</a>
                                    <? } ?>
                                </td>
                            </tr>                                                                  
							<tr>
								<th><span>*</span>노출여부</th>
								<td>
									<input type="radio" name="tm_show" id="tm_show" value="Y" <? if($tm_show == "Y"){ echo "checked";}?> />노출
									<input type="radio" name="tm_show" id="tm_show" value="N" <? if($tm_show == "N"){ echo "checked";}?> />비노출
								</td>
							</tr>								 -->
						</tbody>
					</table>
				</div>				
				<div class="btnWrap">
					<span class="btnRight">
						<button id="img_submit" class="btnSearch ">수정</button>
						<button id="img_cancel" class="btnSearch ">닫기</button>
					</span>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>
<script type="text/javascript">

	$(function() {
		callDatePick('tm_content12');
        callDatePick('tm_content14');
	});

	function callDatePick (id) {	
		var dates = $( "#" + id ).datepicker({
			prevText: '이전 달',
			nextText: '다음 달',
			monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			dayNames: ['일','월','화','수','목','금','토'],
			dayNamesShort: ['일','월','화','수','목','금','토'],
			dayNamesMin: ['일','월','화','수','목','금','토'],
			dateFormat: 'yy-mm-dd',
			showMonthAfterYear: true,
			yearSuffix: '년'	  
		});
	}


	function img_del(image, idx, type)
	{
		if(!confirm("삭제하시겠습니까?")) return;

		$.ajax({
			type: "POST",
			url: "./proc/MULTI_proc.php",
			data: "mode=MULTI2_IMGDEL&tm_idx=" + idx + "&file=" + image + "&type=" + type,
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

	$(document).ready(function(){	
		size_guide();
		$('#img_cancel').click(function(){
				parent.modalclose();				
		});	
		
		$('#tm_type').change(function(){
			size_guide();
		});
		
		function size_guide(){
			var type = $("#tm_type option:selected").val();
			if (type == 'main') {
				$('#size_pc').text('(1398*600)');
				$('#size_m').text('(720*420)');
				$('#mobile_img').show();
			}else if (type == 'left') {
				$('#size_pc').text('(200*360)');
				$('#size_m').text('(720*180)');
				$('#mobile_img').show();
			}else{
				$('#size_pc').text('(360*200)');
				$('#mobile_img').hide();
			}
		}
		
		$('#img_submit').click(function(){
			/*
			if($('#tm_descrition').val() == '') {
				alert('소제목을 입력하세요');
				$('#tm_descrition').focus();
				return false;
			}		
			
			if($('#tm_title').val() == '') {
				alert('제목을 입력하세요');
				$('#tm_title').focus();
				return false;
			}	
			
			if($('#tm_content').val() == '') {
				alert('내용을 입력하세요');
				$('#tm_content').focus();
				return false;
			}
			*/
			
			$('#base_form').attr('action','./proc/multi_proc.php');
			$('#base_form').submit();
			return false;
		});					
	
	});
</script>