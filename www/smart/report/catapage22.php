<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>21C Hana Medical Clinic</title>
<link rel="stylesheet" type="text/css" href="jquery-mobile/jquery.mobile.theme-1.4.5.min.css">
<link rel="stylesheet" type="text/css" href="jquery-mobile/jquery.mobile.structure-1.4.5.css">
<link rel="stylesheet" type="text/css" href="jquery-mobile/jquery.mobile.inline-svg-1.4.5.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="jquery-mobile/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
</head>

<body>
<div data-role="page" id="cataPage22">
<div data-role="header" data-position="fixed">
		<h1><a href="index.php" class="head_title"><img src="images/logoFull.png" height="30" alt="21세기하나내과의원 로고"/></a></h1>
		<a href="index.php" data-rel="back" class="ui-btn ui-btn-left ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-carat-l">Back</a>
		<a href="login.php" class="ui-btn ui-btn-right ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-power">Logout</a>
	</div>
<div data-role="content" class="cataBG_22">
		<div class="banner"></div>
		<h2 class="h2_title">대장암 검진결과</h2>

		<!--horizontal navigation tab start-->
        <div data-role="tabs" id="tabs">
            <div data-role="navbar">
                <ul>
                    <li><a class="ui-btn-active" href="#cata22-01" data-ajax="false">대변잠혈검사</a></li>
                </ul>
            </div>
            <div id="cata22-01" data-inset="true" class="comentBox">
				<div>
					<h3>판정내용 <i class="fa fa-commenting fa-2x"></i></h3>
					<p>[ AA ] 정상입니다.</p>
				</div>
                <ul class="view_data_list">
					<li>
						<label>타이틀</label>
						<table width="100%">
							<tr>
								<th width="60">검사결과</th>
								<td>OO</td>
								<th>이전결과</th>
								<td>OO</td>
							</tr>
							<tr>
								<th>참고내용</th>
								<td colspan="3">OO</td>
							</tr>
						</table>
					</li>
				</ul>
            </div>
            <!--horizontal navigation tab end-->
	</div>
	<div data-role="footer">
		<p>전남 목포시  상동 828번지 | 상담전화 : 061-280-2800<br/>COPYRIGHT (C) 21세기하나내과의원</p>
	</div>
</div>
<script type='text/javascript'>//<![CDATA[
$(document).ready(function(){

function changeNavTab(left) {
    var $tabs = $("div[data-role=navbar] li a");
    var curidx = $tabs.closest("a.ui-btn-active").parent().index();
    var nextidx = 0;
    if (left) {
        nextidx = (curidx == $tabs.length - 1) ? 0 : curidx + 1;
    } else {
        nextidx = (curidx == 0) ? $tabs.length - 1 : curidx - 1;
    }
    $tabs.eq(nextidx).click();
}

$("#tabs").on("swipeleft", function (event) {
    changeNavTab(true);
});
$("#tabs").on("swiperight", function (event) {
    changeNavTab(false);
});


});//]]> 

</script>
</body>
</html>