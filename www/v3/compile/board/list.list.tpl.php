<?php /* Template_ 2.2.8 2023/03/06 15:23:58 /home/hosting_users/nkmed/www/v3/view/board/list.list.tpl 000003759 */ 
$TPL_list_1=empty($TPL_VAR["list"])||!is_array($TPL_VAR["list"])?0:count($TPL_VAR["list"]);?>
<?php $this->print_("btop",$TPL_SCP,1);?>

<div class="section">
<?php if($TPL_VAR["schmenu"]=="Y"){?>
    <fieldset class="boardSearch">
        <legend>검색어 입력</legend>
        <div class="inputBox">
            <input type="text" class="inputTxt" id="bschtxt" placeholder="검색어를 입력하세요." value="<?php echo $TPL_VAR["stext"]?>">
            <button type="button" class="btnSearch" data-url="?code=<?php echo $TPL_VAR["jbcode"]?>&sec=<?php echo $TPL_VAR["sec"]?>">검색</button>
        </div>
    </fieldset>
<?php }?>
<?php if($TPL_VAR["jbcode"]=="40"){?>
    <div class="btnWrap">
<?php if($TPL_VAR["board_yn"]=="Y"){?><span><a href="?code=<?php echo $TPL_VAR["jbcode"]?>&stext=<?php echo $TPL_VAR["stext"]?>&sec=<?php echo $TPL_VAR["sec"]?>&m=w" class="btnType2">전문의 상담하기</a></span><?php }?>
    </div>
    <h3 class="subTitle">상담목록
        <label class="chk">
            <span>공개글만</span>
            <input type="checkbox" class="inputChk" value="Y" <?php if($TPL_VAR["sec"]=="N"){?>checked="checked"<?php }?> data-code='<?php echo $TPL_VAR["jbcode"]?>'>
        </label>
    </h3>
<?php }elseif($TPL_VAR["jbcode"]=="120"){?>
    <div class="btnWrap">
        <span><a href="?code=<?php echo $TPL_VAR["jbcode"]?>&stext=<?php echo $TPL_VAR["stext"]?>&sec=<?php echo $TPL_VAR["sec"]?>&m=w" class="btnType2">작성하기</a></span>
    </div>
    <h3 class="subTitle">고객의 소리함</h3>
<?php }?>
	<ul class="boardList" id="list_result" data-total="<?php echo $TPL_VAR["btotal"]?>">
<?php if($TPL_list_1){foreach($TPL_VAR["list"] as $TPL_V1){?>
        <li data-page='<?php echo $TPL_V1["p"]?>'<?php echo $TPL_V1["style"]?>>
<?php if($TPL_V1["fread"]=="Y"){?>
<?php if($TPL_V1["secret"]=="N"){?><a href="?code=<?php echo $TPL_VAR["jbcode"]?>&bidx=<?php echo $TPL_V1["jb_idx"]?>"><?php }else{?><a href="#" onclick="javascript:secret_check('<?php echo $TPL_V1["jb_idx"]?>')"><?php }?>
<?php }else{?>
            <a href="javascript:void(0);" onclick="javascript:secret_false('작성회원만 글을 읽을 수 있습니다.')">
<?php }?>
            <span class="subject">[<?php echo $TPL_V1["treat_type"]?>] <?php echo $TPL_V1["title"]?></span>
                <span class="opt">
                    <span class="date"><?php echo $TPL_V1["regDt"]?></span>
                    <span class="name"><?php echo $TPL_V1["jb_name"]?></span>
                    <?php echo $TPL_V1["sec"]?>

                </span>
            	<?php echo $TPL_V1["answer"]?>

            </a>
        </li>
<?php }}?>
	<div class="btnWrap"<?php echo $TPL_VAR["mbtn"]?>>
		<span><a href="javascript:void(0);" class="btnType1" id="more">더보기</a></span>
	</div>
</div>

<!-- 비밀번호 입력 레이어 -->
<div class="layerAlert" id="pwdlayer">
    <div class="cont">
        <p class="passTxt">비밀번호를 입력해주세요.</p>
        <input type="password" class="inputTxt" id="inpwd">
        <div class="btnWrap">
            <span><button type="button" class="btnType1" id="pcancel">취소</button></span>
            <span><button type="button" class="btnType2" id="pconfirm">확인</button></span>
        </div>
    </div>
</div>
<!-- //비밀번호 입력 레이어 -->
<!-- 알럿 레이어 -->
<div class="layerAlert" id="alertmsg">
    <div class="cont">
        <p class="chkTxt"></p>
        <button type="button" class="btnType2" id="aconfirm">확인</button>
    </div>
</div>
<!-- //알럿 레이어 -->