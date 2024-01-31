<?
	include_once("../../_init.php");
	include_once($GP -> CLS."/class.duty.php");
	include_once($GP -> CLS."/class.doctor.php");
	$C_Doctor 	= new Doctor;
	$C_Duty 	= new Duty;




	if($_POST['date']!= '') {
		$date = $_POST['date'];
	}else{
		$date = date('Y-m-d');
	}	  
    
	$x=explode("-",$date); // 들어온 날짜를 년,월,일로 분할해 변수로 저장합니다.
	$s_Y=$x[0]; // 지정된 년도
	$s_m=$x[1]; // 지정된 월
	$s_d=$x[2]; // 지정된 요일

	$s_t=date("t",mktime(0,0,0,$s_m,$s_d,$s_Y)); // 지정된 달은 몇일까지 있을까요?
	$s_n=date("N",mktime(0,0,0,$s_m,1,$s_Y)); // 지정된 달의 첫날은 무슨요일일까요?
	$l=$s_n%7; // 지정된 달 1일 앞의 공백 숫자.
	$ra=($s_t+$l)/7; $ra=ceil($ra); $ra=$ra-1; // 지정된 달은 총 몇주로 라인을 그어야 하나?

	$n_d= date("Y-m-d",mktime(0,0,0,$s_m,$s_d+1,$s_Y)); // 다음날
	$p_d= date("Y-m-d",mktime(0,0,0,$s_m,$s_d-1,$s_Y)); // 이전날
	$n_Y= date("Y-m-d",mktime(0,0,0,$s_m,$s_d,$s_Y+1)); // 내년
	$p_Y= date("Y-m-d",mktime(0,0,0,$s_m,$s_d,$s_Y-1)); // 작년
	$p_m= date("Y-m-d",mktime(0,0,0,$s_m-1,$s_d,$s_Y)); // 저번달
	$n_m= date("Y-m-d",mktime(0,0,0,$s_m+1,$s_d,$s_Y)); // 다음달  
?>

				<div style="margin-top:5px; text-align:right;">
					※날짜를 먼저 체크하세요.
					<button type="button" onClick="pro_reg()"; class="btnSearch ">프로그램 등록</button>
				</div>
				<div class="schedule-datepicker ui-datepicker-style-inline ui-datepicker-style ui-widget ui-widget-content">
					<div class="ui-datepicker-style-header">
						<a class="ui-datepicker-style-prev ui-state-disabled" title="이전달" onClick="ch_cal('<?=$p_m?>')"><span>이전달</span></a>
						<a class="ui-datepicker-style-next" title="다음달" onClick="ch_cal('<?=$n_m?>')"><span>다음달</span></a>
						<div class="ui-datepicker-style-title">
							<span class="ui-datepicker-style-year"><?=$s_Y?>년</span>
							<span class="ui-datepicker-style-month"><?=$s_m?>월</span>
						</div>
					</div>
					<div class="ui-datepicker-style-weeklist"></div>
					<table class="ui-datepicker-style-calendar">
						<thead>
							<tr>
								<th><span title="Monday">월요일</span></th>
								<th><span title="Tuesday">화요일</span></th>
								<th><span title="Wednesday">수요일</span></th>
								<th><span title="Thursday">목요일</span></th>y
								<th><span title="Friday">금요일</span>
							</tr>
						</thead>
						<tbody>
							<!-- 날짜 지나면 ui-state-disabled -->
							<tr>
								<td><span>1</span>
									<label class="check_date"><input type='checkbox' class='tsd_date' name='tsd_date' value=''/></label>
									<ul class="department_schedule">
										<li>
											<strong class="department">내과</strong>
											<dl>
												<dt>가나다</dt><dd>00시 ~ 00시</dd>
												<dt>가나다</dt><dd>00시 ~ 00시</dd>
											</dl>
										</li>
										<li>
											<strong class="department">신경정신과</strong>
											<dl>
												<dt>가나다</dt><dd>00시 ~ 00시</dd>
												<dt>가나다</dt><dd>00시 ~ 00시</dd>
											</dl>
										</li>
									</ul></td>
								<td><span>2</span><ul class="department_schedule"></ul></td>
								<td><span>3</span><ul class="department_schedule"></ul></td>
								<td><span>4</span><ul class="department_schedule"></ul></td>
								<td><span>5</span><ul class="department_schedule"></ul></td>
							</tr>
							<tr>
								<td><span>8</span><ul class="department_schedule"></ul></td>
								<td><span>9</span><ul class="department_schedule"></ul></td>
								<td><span>10</span><ul class="department_schedule"></ul></td>
								<td><span>11</span><ul class="department_schedule"></ul></td>
								<td><span>12</span><ul class="department_schedule"></ul></td>
							</tr>
							<tr>
								<td><span>15</span><ul class="department_schedule"></ul></td>
								<td><span>16</span><ul class="department_schedule"></ul></td>
								<td class="ui-datepicker-style-current-day ui-datepicker-style-today">
									<span>17</span>
									<ul class="department_schedule">
										<li>
											<strong class="department">내과</strong>
											<dl>
												<dt>가나다</dt><dd>00시 ~ 00시</dd>
												<dt>가나다</dt><dd>00시 ~ 00시</dd>
											</dl>
										</li>
										<li>
											<strong class="department">신경정신과</strong>
											<dl>
												<dt>가나다</dt><dd>00시 ~ 00시</dd>
												<dt>가나다</dt><dd>00시 ~ 00시</dd>
											</dl>
										</li>
									</ul>
								</td>
								<td><span>18</span><ul class="department_schedule"></ul></td>
								<td><span>19</span><ul class="department_schedule"></ul></td>
							</tr>
							<tr>
								<td><span>22</span><ul class="department_schedule"></ul></td>
								<td><span>23</span><ul class="department_schedule"></ul></td>
								<td><span>24</span><ul class="department_schedule"></ul></td>
								<td><span>25</span><ul class="department_schedule"></ul></td>
								<td><span>26</span><ul class="department_schedule"></ul></td>
							</tr>
							<tr>
								<td><span>29</span><ul class="department_schedule"></ul></td>
								<td><span>30</span><ul class="department_schedule"></ul></td>
								<td><span>31</span><ul class="department_schedule"></ul></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
	<script type="text/javascript">
		$(document).ready(function(){
			var calendar = $('.ui-datepicker-style-calendar');
			var weeklist = $('.ui-datepicker-style-weeklist');
			calendar.find('tbody').children('tr').each(function(eq){
				weeklist.append('<a href="javascript:void(0)">'+ (eq + 1) + '주차</a>');
			});
			weeklist.find('a').on('click',function(){
				var me = $(this);
				if (!me.hasClass('on')){
					weeklist.find('.on').removeClass('on');
					me.addClass('on');
					calendar.find('tbody').children('tr.current').removeClass('current');
					calendar.find('tbody').children('tr').eq(me.index()).addClass('current');
				}
			});
			var today = new Date();
			var getWeek = today.getWeek();
			if (parseInt($('.ui-datepicker-style-year').text()) == today.getFullYear() && parseInt($('.ui-datepicker-style-month').text()) == today.getMonth() + 1) {
				weeklist.find('a').eq(today.getDay() == 6 ? getWeek : getWeek - 1).trigger('click');
			} else {
				weeklist.find('a').eq(0).trigger('click');
			}
		});
	</script>