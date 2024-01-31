{#infomenu}
<div class="section">
	<h3 class="pageTxt" style="text-align: center;">예약 완료</h3>
	<p class="helpTxt" style="text-align: center;">외래진료 예약 접수가 <span class="ftColor1">정상적으로 완료되었습니다.</span></p>
    <h3 class="subTitle">환자 정보</h3>
	<table class="lineTable">
		<caption>환자 정보</caption>
		<colgroup>
			<col style="width:50%;">
			<col>
		</colgroup>
		<tbody>
			<tr>
				<td>성함</td>
				<td class="right">{name}</td>
			</tr>
			<tr>
				<td>환자정보</td>
				<td class="right">{suserpatientno}</td>
			</tr>
			<tr>
				<td>휴대전화</td>
				<td class="right">{mobile}</td>
			</tr>
		</tbody>
	</table>
	<h3 class="subTitle">예약정보</h3>
	<table class="lineTable">
		<caption>예약정보</caption>
		<colgroup>
			<col style="width:50%;">
			<col>
		</colgroup>
		<tbody>
			<tr>
				<td>진료과</td>
				<td class="right">{clinic_str}</td>
			</tr>
			<tr>
				<td>의료진</td>
				<td class="right">{dr_name} {dr_position}</td>
			</tr>
			<tr>
				<td>예약일시</td>
				<td class="right">
                {is_date}{is_time}
                </td>
			</tr>
		</tbody>
	</table>
	<br>
	<div class="grayBox">
		<p class="starTxt">
			예약 일시를 꼭 확인 후 내원해 주시기 바랍니다.
		</p>
		<p class="starTxt">
			자세한 확인을 원하시면 <span class="ftColor1">진료예약센터(031-980-9114)</span>로 문의주시기 바랍니다.
		</p>
	</div>
	<div class="btnWrap">
		<span>
			<a href="/v3/reserve.php?tab=info15_1" class="btnType2">예약현황</a>
		</span>
		<span>
			<a href="#none" class="btnType3" onclick="online_delete({first_no})">예약취소</a>
		</span>
	</div>
</div>
<div id="loadingOverlay" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;">
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
					window.location.href = '/v3/reserve.php?tab=info2_1';
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