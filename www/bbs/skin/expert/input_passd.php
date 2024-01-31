<form name="frm_pass" id="frm_pass" action="<?=$get_par;?>" method="post">
	<h4 class="subTitle">비밀번호 입력</h4>
	<p class="passSection"><label for="input_passd">비밀번호</label> <input type="password" name="input_passd" id="input_passd" size=40 maxlength=30 class="txtInput"></p>
	<div class="btnWrap btn2">
		<span><a href="javascript:;" id="pass_submit" class="btn bg-deepblue">확인</a></span>
		<span><a href="javascript:history.go(-1);"  class="btn bg-red">취소</a></span>
	</div>
</form>
<script type="text/javascript">
	
	$(document).ready(function(){
		
		$('#pass_submit').click(function(){
			
			if($('#input_passd').val() == '') {
				alert("비밀번호를 입력하세요");
				$('#input_passd').focus();
				return false;
			}
			
			$('#frm_pass').submit();
			return false;
		});		
	});
	
</script>