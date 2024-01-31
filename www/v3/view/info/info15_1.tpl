{#infomenu}
<div class="section">
	<h3 class="subTitle">예약 조회</h3>
	<div class="tabMenu" id="tab_menu1">
		<ul>
			<li class="active"><a href="/v3/info.php?tab=info15_1"><span>외래 예약</span></a></li>
			<li><a href="/v3/info.php?tab=info15_2" onclick="alert('준비중입니다.');return false"><span>건강검진 예약</span></a></li>
		</ul>
	</div>
	<div class="rsv-card-wrap">
		<ul class="rsv-card-list">
        {?r_list}
            <!--{@r_list}-->
			<li class="rsv-card">
				<div class="right">
					<p>예약 내역</p>
					<div class="mb-show">
						<label for="">의료진</label>
						<span>{.r_name}</span>
					</div>
					<div>
						<label for="">예약일</label>
						<span>{.r_ymd}</span>
					</div>
					<div>
						<label for="">예약시간</label>
						<span>{.r_time}</span>
					</div>
                {?data_ccd > 0}
					<a href="#">예약취소불가</a>
                {:} 
					<a href="#" onclick="online_delete({.recept_no})">예약취소</a>
                {/} 
				</div>
			</li>
            <!--{/}-->
        {:} 
            <li class="rsv-card">예약한 내역이 없습니다.</li>
        {/}
		</ul>
	</div>
	<div class="grayBox">
		<p class="starTxt">예약변경을 원하시면 취소 후 다시 예약 바랍니다.</p>
	</div>
	<div class="btnWrap">
		<span>
			<a href="/v3/info.php?tab=info2_1" class="btnType2 iconOnline">온라인 예약하기</a>
		</span>
	</div>
</div>
<div id="loadingOverlay" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); z-index: 9999;">
	<div style="width: 90%;position: absolute; top: 50%; left: 50%; transform: translate(-50%, -200%); color: #fff; font-size: 25px;">
	처리중이니 잠시 기다려 주세요...
	</div>
</div>
<script>	
    function online_delete(recept_no)
	{
		if(!confirm("취소 하시겠습니까?")) return;

		$('#loadingOverlay').show();

		$.ajax({
			type: "POST",
			url: "/service/proc/online_proc.php",
			data: "r_mode=ONLINE_DEL&recept_no=" + recept_no,
			dataType: "text",
			success: function(msg) {
				
				if($.trim(msg) == "true") {
					alert("취소 되었습니다");
					window.location.reload();
					return false;
                }else if($.trim(msg) == "204") {
					alert("검사, 처방존재로 취소가 불가 합니다.");
					window.location.reload();
					return false;
				}else{
					alert('취소에 실패하였습니다.');
					return;
				}
			},
			error: function(xhr, status, error) { alert(error); }
		});

	}
</script>