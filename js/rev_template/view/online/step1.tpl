<header id="header">
		<h1 class="page-title">예약자정보</h1>
		<a href="/online/reserve/" class="btn-previous-page icon-before-previous ntxt"><span>이전페이지</span></a>
		<nav id="nav" class="">
			<h2 class="ntrigger"><a href="javascript:void(0);"><span>메뉴</span></a></h2>
			{#menu}
		</nav>
	</header>
	<article id="container">
    	<form id="bForm" method="post">
        <input type="hidden" id="r_phone" name="r_phone" value="" />
		<section>
			<h1 class="section-title">notice</h1>
			<section class="well">
				<ul class="panel dotted-list">
					<li>예약자의 간략한 정보를 입력하여 주십시오.</li>
					<li>본 정보는 진료예약의 목적 외에 다른 목적으로는 사용되지 않습니다.</li>
				</ul>
				<div class="assent">
					<label class="radio-label"><input type="radio" name="agreeYN" value="Y"/><span>동의합니다.</span></label>
					<label class="radio-label"><input type="radio" name="agreeYN" value="N"/><span>동의하지 않습니다.</span></label>
				</div>
			</section>
		</section>
		<section>
			<h1 class="section-title">info</h1>
			<label class="entry-assent check-label">
				{?rev_no!="0"}<input type="checkbox" id="same_member"/><span>회원정보와 동일</span>{/}
			</label>
			<section class="entry-section">
				<ul>
					<li><input type="text" placeholder="예약자명" name="r_name" id="r_name" {?rev_no=="0"} value="{r_name}" readonly="readonly"{/}/></li>
					<li><input type="number" placeholder="생년월일 (YYMMDD)" name="r_birth" id="r_birth"/></li>
					<li>
						<div class="assent">
							<label class="radio-label"><input type="radio" name="r_sex" value="M" id="M"/><span>남성</span></label>
							<label class="radio-label"><input type="radio" name="r_sex" value="F" id="F"/><span>여성</span></label>
						</div>
					</li>
					<li>
						<div class="select-layout {?rev_no=="0"} disabled {/} top">
                        	{?rev_no=="0"}
	                            <a href="javascript:void(0)" class="trigger" data-value="{r_phone1}" id="r_phone1">{r_phone1}</a>
                            {:}
							<a href="javascript:void(0)" class="trigger" id="r_phone1">010</a>
							<ul class="list">
								<li><a href="javascript:void(0)" data-value="010">010</a></li>
								<li><a href="javascript:void(0)" data-value="011">011</a></li>
								<li><a href="javascript:void(0)" data-value="016">016</a></li>
								<li><a href="javascript:void(0)" data-value="017">017</a></li>
								<li><a href="javascript:void(0)" data-value="018">018</a></li>
								<li><a href="javascript:void(0)" data-value="019">019</a></li>
							</ul>
                            {/}
						</div>
						<input type="number" id="r_phone2" name="r_phone2" {?rev_no=="0"} value="{r_phone2}" readonly="readonly"{/}/>
						<input type="number" id="r_phone3" name="r_phone3" {?rev_no=="0"} value="{r_phone3}" readonly="readonly"{/}/>
					</li>
				</ul>
			</section>
		</section>
		<footer class="btn-group">
			<a href="#" class="btn" id="btn_confirm">다음</a>
			<a href="/online/reserve/" class="btn btn-empty">취소</a>
		</footer>
        </form>
	</article>

<script type="text/javascript" src="/path/js/step.min.js"></script>       
<script>
$("#same_member").click(function(){
	if($("#same_member").is(":checked") == true) {
		$("#r_name").val("{r_name}");
		$("#r_birth").val("{r_birth}");
		$("#r_phone1").html("{r_phone1}");
		$("#r_phone2").val("{r_phone2}");
		$("#r_phone3").val("{r_phone3}");
		$("#{r_sex}").prop("checked",true);			
	}else{
		$("#r_name").val("");
		$("#r_birth").val("");
		$("#r_phone1").html("010");
		$("#r_phone2").val("");
		$("#r_phone3").val("");
		$("#{r_sex}").prop("checked",false);				
	}
});
</script>
