var target;                                                                    // ȣ���� Object�� ���� 
var stime; 
document.write("<div id=minical oncontextmenu='return false' ondragstart='return false' onselectstart='return false' style=\"background:buttonface; margin:122; padding:122;margin-top:122;border-top:1 solid buttonshadow;border-left: 1 solid buttonshadow;border-right: 1 solid buttonshadow;border-bottom:1 solid buttonshadow;width:160;display:none;position: absolute; z-index: 99\"></div>"); 

function calendar(obj) {                                                        // jucke 
    var now = obj.value.split("-"); 
    var x, y; 

    target = obj;                                                                // Object ����; 

    x = (document.layers) ? loc.pageX : obj.offsetLeft; 
    y = (document.layers) ? loc.pageY : obj.offsetTop; 
    while((obj = obj.offsetParent) != null){ 
        x += obj.offsetLeft; 
        y += obj.offsetTop; 
    } 
    document.getElementById('minical').style.top = y+17; 
    document.getElementById('minical').style.left = x-1; 
    document.getElementById('minical').style.display = (document.getElementById('minical').style.display == "block") ? "none" : "block"; 

    if (now.length == 3) {                                                        // ��Ȯ���� �˻� 
        Show_cal(now[0],now[1],now[2]);                                            // �Ѿ�� ���� ����Ϸ� �и� 
    } 
    else { 
        now = new Date(); 
        Show_cal(now.getFullYear(), now.getMonth()+1, now.getDate());            // ���� ��/��/���� �����Ͽ� �ѱ�. 
    } 
} 
     
function doOver(mEvent) {                                                                // ���콺�� Į�������� ������ 
    var an = navigator.appName; 
    if (navigator.appName == "Netscape") { 
        var el = mEvent.target; 
    } 
    else { 
        var el = mEvent.srcElement; 
    } 
    cal_Day = el.title; 

    if (cal_Day.length > 7) {                                                    // ���� ���� ������. 
        el.style.borderTopColor = el.style.borderLeftColor = "buttonhighlight"; 
        el.style.borderRightColor = el.style.borderBottomColor = "buttonshadow"; 
    } 
    window.clearTimeout(stime);                                                    // Clear 
} 

function doClick(mEvent) {                                                            // ���ڸ� �����Ͽ��� ��� 
    var an = navigator.appName; 
    if (navigator.appName == "Netscape") { 
        var el = mEvent.target; 
    } 
    else { 
        var el = mEvent.srcElement; 
    } 
    cal_Day = el.title; 
    el.style.borderColor = "red";                            // �׵θ� ���� ���������� 
    if (cal_Day.length > 7) {                                                    // ���� ���������� 
        target.value=cal_Day                                                    // �� ���� 
    } 
    document.getElementById('minical').style.display='none';                                                // ȭ�鿡�� ����} 
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

function day2(d) {                                                                // 2�ڸ� ���ڷ� ���� 
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
    var Weekday_name = new Array("��", "��", "ȭ", "��", "��", "��", "��"); 
    var intThisYear = new Number(), intThisMonth = new Number(), intThisDay = new Number(); 
    document.getElementById('minical').innerHTML = ""; 
    datToday = new Date();                                                    // ���� ���� ���� 
     
    intThisYear = parseInt(sYear); 
    intThisMonth = parseInt(sMonth); 
    intThisDay = parseInt(sDay); 
     
    if (intThisYear == 0) intThisYear = datToday.getFullYear();                // ���� ���� ��� 
    if (intThisMonth == 0) intThisMonth = parseInt(datToday.getMonth())+1;    // �� ���� ������ ���� -1 �� ���� �ŵ��� ����. 
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

    NowThisYear = datToday.getFullYear();                                        // ���� �� 
    NowThisMonth = datToday.getMonth()+1;                                        // ���� �� 
    NowThisDay = datToday.getDate();                                            // ���� �� 
     
    datFirstDay = new Date(intThisYear, intThisMonth-1, 1);                        // ���� ���� 1�Ϸ� ���� ��ü ����(���� 0���� 11������ ����(1������ 12��)) 
    intFirstWeekday = datFirstDay.getDay();                                        // ���� �� 1���� ������ ���� (0:�Ͽ���, 1:������) 
     
    intSecondWeekday = intFirstWeekday; 
    intThirdWeekday = intFirstWeekday; 
     
    datThisDay = new Date(intThisYear, intThisMonth, intThisDay);                // �Ѿ�� ���� ���� ���� 
    intThisWeekday = datThisDay.getDay();                                        // �Ѿ�� ������ �� ���� 

    varThisWeekday = Weekday_name[intThisWeekday];                                // ���� ���� ���� 
     
    intPrintDay = 1                                                                // ���� ���� ���� 
    secondPrintDay = 1 
    thirdPrintDay = 1 
     
    Stop_Flag = 0 
     
    if ((intThisYear % 4)==0) {                                                    // 4�⸶�� 1���̸� (��γ����� ��������) 
        if ((intThisYear % 100) == 0) { 
            if ((intThisYear % 400) == 0) { 
                Months_day[2] = 29; 
            } 
        } else { 
            Months_day[2] = 29; 
        } 
    }
    intLastDay = Months_day[intThisMonth];                                        // ������ ���� ���� 
    Stop_flag = 0 

    Cal_HTML = "<TABLE tyle='background:buttonface; margin:5; padding:105;margin-top:102;border-top:1 solid buttonshadow;border-left: 1 solid buttonshadow;border-right: 1 solid buttonshadow;border-bottom:1 solid buttonshadow;width:160;'><TR><TD><TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 ONMOUSEOVER=doOver(event); ONMOUSEOUT=doOut(event); STYLE='font-size:8pt;font-family:Tahoma;'>" 
            + "<TR ALIGN=CENTER><TD COLSPAN=7 nowrap=nowrap ALIGN=CENTER><SPAN TITLE='���' STYLE=cursor:pointer; onClick='Show_cal("+intPrevYear+","+intPrevMonth+",1);'><FONT COLOR=Navy>��</FONT></SPAN> " 
            + "<B STYLE=color:red>"+get_Yearinfo(intThisYear,intThisMonth,intThisDay)+"��"+get_Monthinfo(intThisYear,intThisMonth,intThisDay)+"��</B>" 
            + " <SPAN TITLE='����' STYLE=cursor:pointer; onClick='Show_cal("+intNextYear+","+intNextMonth+",1);'><FONT COLOR=Navy>��</FONT></SPAN></TD></TR><TR><TD HEIGHT=2></TD></TR>" 
            + "<TR ALIGN=CENTER BGCOLOR='ThreedFace' STYLE='color:White;font-weight:bold;color:#000000;'><TD>��</TD><TD>��</TD><TD>ȭ</TD><TD>��</TD><TD>��</TD><TD>��</TD><TD>��</TD></TR>"; 

    for (intLoopWeek=1; intLoopWeek < 7; intLoopWeek++) {                        // �ִ��� ���� ����, �ִ� 6�� 
        Cal_HTML += "<TR ALIGN=RIGHT BGCOLOR=WHITE>" 
        for (intLoopDay=1; intLoopDay <= 7; intLoopDay++) {                        // ���ϴ��� ���� ����, �Ͽ��� ���� 
            if (intThirdWeekday > 0) {                                            // ù�� �������� 1���� ũ�� 
                Cal_HTML += "<TD onClick=doClick(event);>"; 
                intThirdWeekday--; 
            } else { 
                if (thirdPrintDay > intLastDay) {                                // �Է� ��¦ �������� ũ�ٸ� 
                    Cal_HTML += "<TD onClick=doClick(event);>"; 
                } else {                                                        // �Է³�¥�� ������� �ش� �Ǹ� 
                    Cal_HTML += "<TD onClick=doClick(event); title="+intThisYear+"-"+day2(intThisMonth).toString()+"-"+day2(thirdPrintDay).toString()+" STYLE=\"cursor:pointer;border:1px solid white;"; 
                    if (intThisYear == NowThisYear && intThisMonth==NowThisMonth && thirdPrintDay==intThisDay) { 
                        Cal_HTML += "background-color:cyan;"; 
                    } 
                     
                    switch(intLoopDay) { 
                        case 1:                                                    // �Ͽ����̸� ���� ������ 
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
                 
                if (thirdPrintDay > intLastDay) {                                // ���� ��¥ ���� ���� ������ ũ�� ������ Ż�� 
                    Stop_Flag = 1; 
                } 
            } 
            Cal_HTML += "&nbsp;</TD>"; 
        } 
        Cal_HTML += "</TR>"; 
        if (Stop_Flag==1) break; 
    } 

		
	Cal_HTML +="<TR><TD colspan=7 align=right valign=center><a href=# onClick=document.getElementById('minical').style.display='none'><font style=font-size:11px>�ݱ�</font></a></TD></TR>";
    Cal_HTML += "</TABLE></TD><TR></TABLE>"; 

    document.getElementById('minical').innerHTML = Cal_HTML; 
} 

function get_Yearinfo(year,month,day) {                                            // �� ������ �޺� �ڽ��� ǥ�� 
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


function get_Monthinfo(year,month,day) {                                        // �� ������ �޺� �ڽ��� ǥ�� 
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