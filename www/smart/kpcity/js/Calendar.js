var target;                                                                    // 호출한 Object의 저장 
var stime; 
document.write("<div id=minical oncontextmenu='return false' ondragstart='return false' onselectstart='return false' style=\"background:buttonface; margin:122; padding:122;margin-top:122;border-top:1 solid buttonshadow;border-left: 1 solid buttonshadow;border-right: 1 solid buttonshadow;border-bottom:1 solid buttonshadow;width:160;display:none;position: absolute; z-index: 99\"></div>"); 

function calendar(obj) {                                                        // jucke 
    var now = obj.value.split("-"); 
    var x, y; 

    target = obj;                                                                // Object 저장; 

    x = (document.layers) ? loc.pageX : obj.offsetLeft; 
    y = (document.layers) ? loc.pageY : obj.offsetTop; 
    while((obj = obj.offsetParent) != null){ 
        x += obj.offsetLeft; 
        y += obj.offsetTop; 
    } 
    document.getElementById('minical').style.top = y+17; 
    document.getElementById('minical').style.left = x-1; 
    document.getElementById('minical').style.display = (document.getElementById('minical').style.display == "block") ? "none" : "block"; 

    if (now.length == 3) {                                                        // 정확한지 검사 
        Show_cal(now[0],now[1],now[2]);                                            // 넘어온 값을 년월일로 분리 
    } 
    else { 
        now = new Date(); 
        Show_cal(now.getFullYear(), now.getMonth()+1, now.getDate());            // 현재 년/월/일을 설정하여 넘김. 
    } 
} 
     
function doOver(mEvent) {                                                                // 마우스가 칼렌다위에 있으면 
    var an = navigator.appName; 
    if (navigator.appName == "Netscape") { 
        var el = mEvent.target; 
    } 
    else { 
        var el = mEvent.srcElement; 
    } 
    cal_Day = el.title; 

    if (cal_Day.length > 7) {                                                    // 날자 값이 있으면. 
        el.style.borderTopColor = el.style.borderLeftColor = "buttonhighlight"; 
        el.style.borderRightColor = el.style.borderBottomColor = "buttonshadow"; 
    } 
    window.clearTimeout(stime);                                                    // Clear 
} 

function doClick(mEvent) {                                                            // 날자를 선택하였을 경우 
    var an = navigator.appName; 
    if (navigator.appName == "Netscape") { 
        var el = mEvent.target; 
    } 
    else { 
        var el = mEvent.srcElement; 
    } 
    cal_Day = el.title; 
    el.style.borderColor = "red";                            // 테두리 색을 빨간색으로 
    if (cal_Day.length > 7) {                                                    // 날자 값이있으면 
        target.value=cal_Day                                                    // 값 설정 
    } 
    document.getElementById('minical').style.display='none';                                                // 화면에서 지움} 
} 

function doOut(mEvent) { 
    var an = navigator.appName; 
    if (navigator.appName == "Netscape") { 
        var el = mEvent.target; 
    } 
    else { 
        var el = mEvent.srcElement; 
    } 
    cal_Day = el.title; 

    if (cal_Day.length > 7) { 
        el.style.borderColor = "white"; 
    } 
    //stime=window.setTimeout("document.getElementById('minical').style.display='none';", 200); 
} 

function day2(d) {                                                                // 2자리 숫자료 변경 
    var str = new String(); 
     
    if (parseInt(d) < 10) { 
        str = "0" + parseInt(d); 
    } else { 
        str = "" + parseInt(d); 
    } 
    return str; 
} 

function Show_cal(sYear, sMonth, sDay) { 
    var Months_day = new Array(0,31,28,31,30,31,30,31,31,30,31,30,31) 
    var Weekday_name = new Array("일", "월", "화", "수", "목", "금", "토"); 
    var intThisYear = new Number(), intThisMonth = new Number(), intThisDay = new Number(); 
    document.getElementById('minical').innerHTML = ""; 
    datToday = new Date();                                                    // 현재 날자 설정 
     
    intThisYear = parseInt(sYear); 
    intThisMonth = parseInt(sMonth); 
    intThisDay = parseInt(sDay); 
     
    if (intThisYear == 0) intThisYear = datToday.getFullYear();                // 값이 없을 경우 
    if (intThisMonth == 0) intThisMonth = parseInt(datToday.getMonth())+1;    // 월 값은 실제값 보다 -1 한 값이 돼돌려 진다. 
    if (intThisDay == 0) intThisDay = datToday.getDate(); 
     
    switch(intThisMonth) { 
        case 1: 
                intPrevYear = intThisYear -1; 
                intPrevMonth = 12; 
                intNextYear = intThisYear; 
                intNextMonth = 2; 
                break; 
        case 12: 
                intPrevYear = intThisYear; 
                intPrevMonth = 11; 
                intNextYear = intThisYear + 1; 
                intNextMonth = 1; 
                break; 
        default: 
                intPrevYear = intThisYear; 
                intPrevMonth = parseInt(intThisMonth) - 1; 
                intNextYear = intThisYear; 
                intNextMonth = parseInt(intThisMonth) + 1; 
                break; 
    } 

    NowThisYear = datToday.getFullYear();                                        // 현재 년 
    NowThisMonth = datToday.getMonth()+1;                                        // 현재 월 
    NowThisDay = datToday.getDate();                                            // 현재 일 
     
    datFirstDay = new Date(intThisYear, intThisMonth-1, 1);                        // 현재 달의 1일로 날자 객체 생성(월은 0부터 11까지의 정수(1월부터 12월)) 
    intFirstWeekday = datFirstDay.getDay();                                        // 현재 달 1일의 요일을 구함 (0:일요일, 1:월요일) 
     
    intSecondWeekday = intFirstWeekday; 
    intThirdWeekday = intFirstWeekday; 
     
    datThisDay = new Date(intThisYear, intThisMonth, intThisDay);                // 넘어온 값의 날자 생성 
    intThisWeekday = datThisDay.getDay();                                        // 넘어온 날자의 주 요일 

    varThisWeekday = Weekday_name[intThisWeekday];                                // 현재 요일 저장 
     
    intPrintDay = 1                                                                // 달의 시작 일자 
    secondPrintDay = 1 
    thirdPrintDay = 1 
     
    Stop_Flag = 0 
     
    if ((intThisYear % 4)==0) {                                                    // 4년마다 1번이면 (사로나누어 떨어지면) 
        if ((intThisYear % 100) == 0) { 
            if ((intThisYear % 400) == 0) { 
                Months_day[2] = 29; 
            } 
        } else { 
            Months_day[2] = 29; 
        } 
    }
    intLastDay = Months_day[intThisMonth];                                        // 마지막 일자 구함 
    Stop_flag = 0 

    Cal_HTML = "<TABLE tyle='background:buttonface; margin:5; padding:105;margin-top:102;border-top:1 solid buttonshadow;border-left: 1 solid buttonshadow;border-right: 1 solid buttonshadow;border-bottom:1 solid buttonshadow;width:160;'><TR><TD><TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 ONMOUSEOVER=doOver(event); ONMOUSEOUT=doOut(event); STYLE='font-size:8pt;font-family:Tahoma;'>" 
            + "<TR ALIGN=CENTER><TD COLSPAN=7 nowrap=nowrap ALIGN=CENTER><SPAN TITLE='先月' STYLE=cursor:pointer; onClick='Show_cal("+intPrevYear+","+intPrevMonth+",1);'><FONT COLOR=Navy>◀</FONT></SPAN> " 
            + "<B STYLE=color:red>"+get_Yearinfo(intThisYear,intThisMonth,intThisDay)+"년"+get_Monthinfo(intThisYear,intThisMonth,intThisDay)+"월</B>" 
            + " <SPAN TITLE='來月' STYLE=cursor:pointer; onClick='Show_cal("+intNextYear+","+intNextMonth+",1);'><FONT COLOR=Navy>▶</FONT></SPAN></TD></TR><TR><TD HEIGHT=2></TD></TR>" 
            + "<TR ALIGN=CENTER BGCOLOR='ThreedFace' STYLE='color:White;font-weight:bold;color:#000000;'><TD>일</TD><TD>월</TD><TD>화</TD><TD>수</TD><TD>목</TD><TD>금</TD><TD>토</TD></TR>"; 

    for (intLoopWeek=1; intLoopWeek < 7; intLoopWeek++) {                        // 주단위 루프 시작, 최대 6주 
        Cal_HTML += "<TR ALIGN=RIGHT BGCOLOR=WHITE>" 
        for (intLoopDay=1; intLoopDay <= 7; intLoopDay++) {                        // 요일단위 루프 시작, 일요일 부터 
            if (intThirdWeekday > 0) {                                            // 첫주 시작일이 1보다 크면 
                Cal_HTML += "<TD onClick=doClick(event);>"; 
                intThirdWeekday--; 
            } else { 
                if (thirdPrintDay > intLastDay) {                                // 입력 날짝 월말보다 크다면 
                    Cal_HTML += "<TD onClick=doClick(event);>"; 
                } else {                                                        // 입력날짜가 현재월에 해당 되면 
                    Cal_HTML += "<TD onClick=doClick(event); title="+intThisYear+"-"+day2(intThisMonth).toString()+"-"+day2(thirdPrintDay).toString()+" STYLE=\"cursor:pointer;border:1px solid white;"; 
                    if (intThisYear == NowThisYear && intThisMonth==NowThisMonth && thirdPrintDay==intThisDay) { 
                        Cal_HTML += "background-color:cyan;"; 
                    } 
                     
                    switch(intLoopDay) { 
                        case 1:                                                    // 일요일이면 빨간 색으로 
                            Cal_HTML += "color:red;" 
                            break; 
                        case 7: 
                            Cal_HTML += "color:blue;" 
                            break; 
                        default: 
                            Cal_HTML += "color:black;" 
                            break; 
                    } 
                     
                    Cal_HTML += "\">"+thirdPrintDay; 
                     
                } 
                thirdPrintDay++; 
                 
                if (thirdPrintDay > intLastDay) {                                // 만약 날짜 값이 월말 값보다 크면 루프문 탈출 
                    Stop_Flag = 1; 
                } 
            } 
            Cal_HTML += "&nbsp;</TD>"; 
        } 
        Cal_HTML += "</TR>"; 
        if (Stop_Flag==1) break; 
    } 

		
	Cal_HTML +="<TR><TD colspan=7 align=right valign=center><a href=# onClick=document.getElementById('minical').style.display='none'><font style=font-size:11px>닫기</font></a></TD></TR>";
    Cal_HTML += "</TABLE></TD><TR></TABLE>"; 

    document.getElementById('minical').innerHTML = Cal_HTML; 
} 

function get_Yearinfo(year,month,day) {                                            // 년 정보를 콤보 박스로 표시 
    var min = parseInt(year) - 100; 
    var max = parseInt(year) + 10; 
    var i = new Number(); 
    var str = new String(); 
     
    str = "<SELECT style='width:60px' onChange='Show_cal(this.value,"+month+","+day+");' ONMOUSEOVER=doOver(event);>"; 
    for (i=min; i<=max; i++) { 
        if (i == parseInt(year)) { 
            str += "<OPTION VALUE="+i+" selected ONMOUSEOVER=doOver(event);>"+i+"</OPTION>"; 
        } else { 
            str += "<OPTION VALUE="+i+" ONMOUSEOVER=doOver(event);>"+i+"</OPTION>"; 
        } 
    } 
    str += "</SELECT>"; 
    return str; 
} 


function get_Monthinfo(year,month,day) {                                        // 월 정보를 콤보 박스로 표시 
    var i = new Number(); 
    var str = new String(); 
     
    str = "<SELECT style='width:40px' onChange='Show_cal("+year+",this.value,"+day+");' ONMOUSEOVER=doOver(event);>"; 
    for (i=1; i<=12; i++) { 
        if (i == parseInt(month)) { 
            str += "<OPTION VALUE="+i+" selected ONMOUSEOVER=doOver(event);>"+i+"</OPTION>"; 
        } else { 
            str += "<OPTION VALUE="+i+" ONMOUSEOVER=doOver(event);>"+i+"</OPTION>"; 
        } 
    } 
    str += "</SELECT>"; 
    return str; 
} 