<style>    
    .calInfo .today:before {border:none;background-color: #fffa90;}
	.calInfo .possible:before {background-color: #eee;}

    .ui-widget.ui-widget-content {
        display: contents;
    }
    .cal .ui-datepicker .ui-datepicker-prev, .cal .ui-datepicker .ui-datepicker-next {top: 8px;}
    .cal .ui-widget.ui-widget-content {display:contents !important; border:none;}
    .cal .ui-datepicker {width: 28em;}
    .cal .ui-datepicker .ui-datepicker-title {font-size: 1.4em;}
    .cal .ui-widget-header {margin-bottom: 1em;border:none;background-color: #fff;}
    .cal .ui-widget-header .ui-icon {position:relative;margin-top: -7px;text-indent:-9999px;border: none; box-shadow: none;transform-origin: center;background-color: transparent;cursor: pointer;background-image: none;}
    .cal .ui-datepicker .ui-datepicker-prev,
    .cal .ui-datepicker .ui-datepicker-next {top: 8px;}
    .cal .ui-datepicker .ui-datepicker-prev-hover,
    .cal .ui-datepicker .ui-datepicker-next-hover {border:none;background-color: #fff;}
    .cal .ui-datepicker .ui-datepicker-prev span {display:none;}
    .cal .ui-datepicker .ui-datepicker-next span {display:none;}
    .cal .ui-datepicker-calendar tr {border: none;}
    .cal .ui-datepicker-calendar th {background-color: #fff; color:#333;}
    .cal .ui-datepicker-calendar th:first-of-type {border:none !important;}
    .cal .ui-datepicker-calendar th:first-of-type span,
    .cal .ui-datepicker-calendar th:first-of-type a {color:#e6001f;}
    .cal .ui-datepicker-calendar th:last-of-type span,
    .cal .ui-datepicker-calendar th:last-of-type a {color:#1795d0;}
    .cal .ui-widget-header .ui-state-default, 
    .cal .ui-button, 
    html .cal .ui-button.ui-state-disabled:hover, 
    html .cal .ui-button.ui-state-disabled:active {border:none;background-color: #fff;}
    .cal .ui-datepicker td span, .cal .ui-datepicker td a {width:34px;height:34px;margin:0 auto;font-weight: 600;line-height: 34px;text-align: center;border:none;border-radius: 100%;}
    .ui-datepicker .ui-datepicker-week-end:first-child {border-left: none; !important;}
    .ui-datepicker .ui-datepicker-week-end:last-child {border-right: none; !important;}
    .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
        background: #007fff; !important;
    }
    .ui-datepicker td.ui-datepicker-current-day a {
        background: #007fff;
        color: #fff;
    }
</style>
<div class="tableType1">
		<table>
			<tbody>
				<tr>
					<th>성함</th>
				</tr>
				<tr>
					<td align="center">
						<div class="form no-margin">
							<input type="text" class="form-control" id="tm_content5" name="tm_content5">
						</div>
					</td>
				</tr>
				<tr>
					<th>연락처</th>
				</tr>
				<tr>
					<td align="center">
						<div class="form no-margin">
							<input type="text" class="form-control" id="tm_content6" name="tm_content6">
						</div>
					</td>
				</tr>
                <tr>
					<th>이메일</th>
				</tr>
				<tr>
					<td>
						<div class="form no-margin" style="justify-content: flex-start;">
							<input type="text" class="form-control" id="tm_content10_1" name="tm_content10_1">
							&nbsp;@&nbsp;
							<input type="text" class="form-control" id="tm_content10_2" name="tm_content10_2">
							&nbsp;
							{sel_email}
						</div>
					</td>
				</tr>
				<tr>
					<th>수술력/복용약/특이사항</th>
				</tr>
				<tr>
					<td>
						<div class="form no-margin">
							<input type="text" class="form-control" placeholder="예) 간암수술(2020), 관절약 복용중" name="tm_content11" id="tm_content11">
						</div>
					</td>
				</tr>
				<tr>
					<th>검진 희망일</th>
				</tr>
				<tr>
					<td align="center">
                        <div id="datepicker-container" class="cal"></div>			

						<div class="calInfo" style="width: 100%;">
							<div class="label-box" style="justify-content: flex-end;">
								<span class="today">오늘</span>
								&nbsp;&nbsp;
								<span class="possible">예약가능</span>
								&nbsp;&nbsp;
								<span class="choice">선택</span>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <script type="text/javascript">	
                    $(function () {
			$("#datepicker-container").datepicker({
                            dateFormat: "yy-mm-dd", // 날짜 형식 지정
                            minDate: "+1W", // 오늘 이후 날짜만 선택 가능하도록 설정
                            showOn: "both", // 달력 아이콘을 input 상자와 함께 표시
                            buttonText: "달력 표시", // 달력 아이콘 텍스트 지정
                            prevText: '이전 달',
                            nextText: '다음 달',
                            monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                            monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                            dayNames: ['일', '월', '화', '수', '목', '금', '토'],
                            dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
                            dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
                            showMonthAfterYear: true,
                            yearSuffix: '년',
                            onSelect: function (dateText, inst) {
                                $("#tm_content12").val(dateText);
                            },
                            beforeShowDay: function (date) {
                                // 오늘부터 3개월 후까지의 범위 안에 있는 날짜인지 확인
                                var currentDate = new Date();
                                var threeMonthsLater = new Date(currentDate.getFullYear(), currentDate.getMonth() + 3, currentDate.getDate());
                                
                                // 비활성화할 날짜 목록 설정
                                var disabledDates = [
                                    {date_total}			
                                ];
                                
                                // 선택 가능한 날짜인지 확인
                                if (date >= currentDate && date <= threeMonthsLater) {
                                    // 비활성화할 날짜 목록에 있는 경우 disabled 클래스 추가
                                    for (var i = 0; i < disabledDates.length; i++) {
                                        if (date.getTime() === disabledDates[i].getTime()) {
                                            return [false, 'disabled', '비활성화된 날짜'];
                                        }
                                    }
                                    
                                    return [true, '']; // 선택 가능한 날짜
                                } else {
                                    return [false, '']; // 나머지 날짜는 비활성화
                                }
                            },
                            // 나머지 옵션들...
                        }); 

                    // 초기에 달력을 보이게 하려면 아래의 코드를 추가합니다.
                    $("#datepicker-container").datepicker("show");
                });
                    var scrollX = 0;
                    var scrollY = 0;

                    function goPopup() {
                        // 현재 스크롤 위치 저장
                        scrollX = window.scrollX || window.pageXOffset;
                        scrollY = window.scrollY || window.pageYOffset;

                        new daum.Postcode({
                            oncomplete: function (data) {
                                document.getElementById('tm_content7').value = data.zonecode;
                                document.getElementById('tm_content8').value = data.address;
                                document.getElementById('tm_content9').focus();
                            },
                            onclose: function () {
                                // 팝업이 닫힐 때 저장한 스크롤 위치로 스크롤 이동
                                window.scrollTo(scrollX, scrollY);
                            }
                        }).open();

                        return false;
                    }	     

                    $('#tm_content10_3').change(function () {
                        var val = $(this).val();

                        if (val == "") {
                            $('#tm_content10_1').val('');
                        } else {
                            $('#tm_content10_2').val(val);
                        }

                    });

                </script>