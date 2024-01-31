<?php /* Template_ 2.2.8 2023/10/04 08:53:36 /home/hosting_users/nkmed/www/v3/view/inc/foot.tpl 000006968 */ 
$TPL_gpa_1=empty($TPL_VAR["gpa"])||!is_array($TPL_VAR["gpa"])?0:count($TPL_VAR["gpa"]);
$TPL_gpb_1=empty($TPL_VAR["gpb"])||!is_array($TPL_VAR["gpb"])?0:count($TPL_VAR["gpb"]);
$TPL_gpc_1=empty($TPL_VAR["gpc"])||!is_array($TPL_VAR["gpc"])?0:count($TPL_VAR["gpc"]);?>
<footer id="footer">
    <div class="footSns">
        <p class="tit">현재페이지 공유하기</p>
        <a href="javascript:void(0);" class="kakao" id="kakao_share">카카오톡</a>
        <a href="javascript:void(0);" data-toggle="sns_share"  data-service="facebook" data-title="페이스북 SNS공유" class="facebook">페이스북 SNS 공유하기</a>
        <!--<a href="http://www.facebook.com/sharer/sharer.php?u=http://nkhospital.net/v2/&t=뉴고려병원" class="facebook" target="_blank">페이스북</a>-->
        <a href="javascript:void(0);" id="copy_url">URL</a>
    </div>
    <div class="footLink">
        <a href="/v3/agree.php?tab=terms">이용약관</a>
        <a href="/v3/agree.php?tab=privacy">개인정보취급방침</a>
        <a href="http://nkhospital.net/guide/guide_06_2.html" target="_blank">비급여안내</a>
        <a href="/v3/agree.php?tab=signature">고유식별정보</a>
        <a href="/v3/agree.php?tab=infomation">영상정보처리방침</a>
        <a href="/v3/agree.php?tab=right">환자권리장전</a>
    </div>
    <small class="footCopy">&copy; 2019 NEW Korea Hospital  All right reserved.</small>
    <nav class="footMenu">
        <div class="cate">
            <p class="cateTit">전문센터</p>
            <ul>
<?php if($TPL_gpa_1){foreach($TPL_VAR["gpa"] as $TPL_K1=>$TPL_V1){?>
               <li><a href="/v3/center.php?depart=<?php echo $TPL_K1?>&gubun=A" <?php if($TPL_K1=="I"){?>class="ftColor0"<?php }?>><?php echo $TPL_V1?></a></li>
<?php }}?>
            </ul>
        </div>
        <div class="cate">
            <p class="cateTit">진료과</p>
            <ul>
<?php if($TPL_gpb_1){foreach($TPL_VAR["gpb"] as $TPL_K1=>$TPL_V1){?>
               <li><a href="/v3/center.php?depart=<?php echo $TPL_K1?>&gubun=B"><?php echo $TPL_V1?></a></li>
<?php }}?>
			</ul>
        </div>
        <div class="cate">
            <p class="cateTit">특수클리닉</p>
<?php if($TPL_gpc_1){foreach($TPL_VAR["gpc"] as $TPL_K1=>$TPL_V1){?>
               <li><a href="/v3/center.php?depart=<?php echo $TPL_K1?>&gubun=C"><?php echo $TPL_V1?></a></li>
<?php }}?>
            </ul>
        </div>
    </nav>
    <div class="footInfo">
        <p>
            의료법인 인봉의료재단 뉴고려병원<br>
            경기도김포시 김포한강3로 283 (우)10086<br>
            대표자: 윤영순<br>
            사업자등록번호: 137-82-06618<br>
            <span class="contact2">대표전화: <a href="tel:0319809114">031-980-9114</a></span><br>
			<span class="contact1">콜센터(검진센터 문의): 1833-9988</span><br></p>
            <span class="contac1">응급실: <a href="tel:0319809119">031-980-9119</a></span><br>
             <span class="contac1">원무과 팩스: 031-982-9800</span><br></p>
        <button type="button" class="btnTop" onclick="docTop();">TOP</button>
        <a href="/" class="btnPc">PC 화면</a>
    </div>
</footer>
<ul id="quick">
	<li><a href="#none" onclick="$('#easy-rsv').fadeIn(100)">첫 진료 간편예약</a></li>
	<li><a href="/m/main.html" target="_blank">진료 예약(재진)</a></li>
	<li><a href="http://smart.nkhospital.net/gate.html" target="_blank">건강검진 예약</a></li>
</ul>
<div class="rsv-submit" id="easy-rsv">
<form action="?" id="frm_ps" name="frm_ps" method="post" >
    <input type="hidden" value="PS_REG" id="mode" name="mode">
	<div class="rsv-submit-box small">
		<div class="rsv-submit-head">
			<img src="/resource-pc/images/logo.png" alt="인봉의료재단 뉴고려병원">
			<button type="button" onclick="$(this).parents('.rsv-submit').fadeOut(100)">닫기</button>
		</div>
		<div class="rsv-submit-body">
			<p class="rsv-box-tit">첫방문 간편예약<span class="c-green scale"> ●</span></p>
			<div class="agreeSection">
				<div class="agreeTxtWrap no-scr">
					<p>
						간편예약은 병원에 처음 오시는 분들을 위한 진료 예약서비스로 전문 상담원이 전화를 통해 진료 예약을 도와드리고 있습니다.
					</p>
				</div>
			</div>
			<p class="rsv-box-tit">개인정보 수집/이용 동의<span class="c-green">(필수)</span></p>
			<?php
				include_once "../member/agree2.php";
			?>
			<div class="radio-box">
				<label for="agree-done">
					<input type="radio" id="agree-done" name="agree"> 동의합니다.
				</label>
				<label for="agree-non">
					<input type="radio" id="agree-non" name="agree"> 동의하지 않습니다.
				</label>
			</div>
			<div class="form">
				<label for="">이름</label>
				<input type="text" class="form-control" name="mb_name" id="mb_name">
			</div>
			<div class="form">
				<label for="">전화번호</label>
				<input type="text" class="form-control" name="mb_mobile" id="mb_mobile">
				
			</div>
            <div class="radio-box">
				<label for="tfc_type_A">
					<input type="radio" id="tfc_type_A" name="tfc_type" value="A"> 일반문의
				</label>
				<label for="tfc_type_B">
					<input type="radio" id="tfc_type_B" name="tfc_type" value="B"> 예약문의
				</label>
			</div>
		</div>
		<div class="rsv-submit-foot">
			<button type="button" onclick="$(this).parents('.rsv-submit').fadeOut(100)">취소</button>
			<button type="submit" id="img_submit">간편예약 신청</button>
		</div>
	</div>
</div>
</form>
<input id="copyurl" style="display:none;"/>
<script>		
        $(document).ready(function(){
            
            $('#img_submit').click(function(){                
                if($('#mb_name').val() == '')	{
                    alert('이름을 입력해주세요');
                    $('#mb_name').focus();
                    return false;
                }
                if($('#mb_mobile').val() == '')	{
                    alert('연락처를 입력해주세요');
                    $('#mb_mobile').focus();
                    return false;
                }     
                if($('#agree-done').prop("checked") == false){
                    alert('개인정보 수집 및 이용에 동의해주세요');
                    $('#agree-done').focus();
                    return false;
                }     
                if (!$('input[name="tfc_type"]:checked').length) {
                     alert('문의 구분을 선택해주세요.');
                     $('#tfc_type').focus();
                     return false;
                }   
                
                $('#frm_ps').attr('action','/admin/phone/proc/phone_proc.php');
                $('#frm_ps').submit();
                return false;
            });

            
        });

</script>