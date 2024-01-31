<?php /* Template_ 2.2.8 2023/11/08 14:20:23 /home/hosting_users/nkmed/www/v3/view/index.tpl 000009732 */ 
$TPL_tsdata_1=empty($TPL_VAR["tsdata"])||!is_array($TPL_VAR["tsdata"])?0:count($TPL_VAR["tsdata"]);?>
<div class="layerSearch">
		
		<div class="search-filter">
			<p>의료진 찾기</p>
				<input type="text" id="schtxt" placeholder="의료진/전문센터/진료과를 입력해 주세요.">
			    <button id="schbtn">
				<img src="/resource/images/btn_search2.png" alt="검색">
			    </button>
			</div>
		<!--
		<fieldset>
			<legend>검색어 입력</legend>
			<div class="search">
				<input type="text" class="inputTxt" placeholder="검색어를 입력해 주세요." id="schtxt">
				<button class="btn" id="schbtn">검색</button>
			</div>
			<p class="txt">
				의료진, 전문센터, 진료과 등 검색을 통해 <br>찾으시는 내용을 편리하게 확인하실 수 있습니다.
			</p>
		</fieldset>
		-->
	</div>
    
    <!--
    <div class="mainLink">
        <ul>
            <li class="link1"><a href="/v3/info.php?tab=info13">전화문의</a></li>
            <li class="link2"><a href="/v3/info.php?tab=info4">진료시간</a></li>
		<li class="link3"><a href="/v3/info.php?tab=info11_1">오시는 길</a></li> 
             <li class="link4"><a href="http://smart.nkhospital.net/gate.html" target="_blank">검진예약</a></li> 
            <li class="link6"><a href="/v3/doctor.php?depart=A&gubun=A">의료진소개</a></li>
            <li class="link5"><a href="/v3/center.info.php">진료과안내</a></li>
           <li class="link7"><a href="/v3/board.php?code=40">전문의상담</a></li> 
             <li class="link7"><a href="#">전문의상담</a></li>
            <li class="link8"><a href="http://www.nkhospital.net/m/main.html" target="_blank">진료예약</a></li>
        </ul>
    </div>
    -->
	
	<div class="mainLink2">
		<a href="/v3/info.php?tab=info13">
			<span>전화문의</span>
				<img src="/resource/images/main/main_icon1.png">
		</a>
		<a href="/v3/info.php?tab=info4">
			<span>진료시간</span>
				<img src="/resource/images/main/main_icon2.png">
		</a>
		<a href="/v3/center.info.php">
			<span>
				<b style="color:#00fff6">진료과</b><b style="color:#fff">로</b><br/>
				<b style="color:#00fff6">의료진</b><b style="color:#fff">찾기</b>
			</span>
			<img src="/resource/images/main/main_icon3.png">
		</a>
	</div>
	

    <div class="mainSlide2">
        <div class="slide">
            <ul class="swiper-wrapper" id="main_slide">
                <li class="swiper-slide" data-vid="CuaKAJZLxZ8">
                    <a href="javascript:void(0);" data-vid="CuaKAJZLxZ8">
                        <img src="/resource/images/main/img_mid_banner01.jpg" alt="" data-vid="CuaKAJZLxZ8">
                    </a>
                </li>
                <li class="swiper-slide">
                    <a href="">
                        <img src="/resource/images/main/img_mid_banner02.jpg" alt="">
                    </a>
                </li>
				  <li class="swiper-slide">
                    <a href="">
                        <img src="/resource/images/main/img_mid_banner04.jpg" alt="">
                    </a>
                </li>
				<!--  <li class="swiper-slide">
                    <a href="">
                        <img src="/resource/images/main/img_mid_banner05.jpg" alt="">
                    </a>
                </li>-->
				 
				  <li class="swiper-slide">
                    <a href="">
                        <img src="/resource/images/main/img_mid_banner07.jpg" alt="">
                    </a>
                </li>
				  <li class="swiper-slide">
                    <a href="">
                        <img src="/resource/images/main/img_mid_banner08.jpg" alt="">
                    </a>
                </li>
				  <li class="swiper-slide">
                    <a href="">
                        <img src="/resource/images/main/img_mid_banner09.jpg" alt="">
                    </a>
                </li>
				  <li class="swiper-slide">
                    <a href="">
                        <img src="/resource/images/main/img_mid_banner10.jpg" alt="">
                    </a>
                </li>
				  <li class="swiper-slide">
                    <a href="">
                        <img src="/resource/images/main/img_mid_banner11.jpg" alt="">
                    </a>
                </li>
				<li class="swiper-slide">
                    <a href="">
                        <img src="/resource/images/main/img_mid_banner06.jpg" alt="">
                    </a>
                </li>
               <!--  <li class="swiper-slide" data-vid="mCawo_WsjvM">
                    <a href="http://www.nkhospital.net/v3/board.php?code=news&bidx=2363" data-vid="mCawo_WsjvM">
                        <img src="/resource/images/main/img_mid_banner03.png" alt="">
                    </a>
                </li> -->
            </ul>
        </div>
		<button class="slideNext">다음슬라이드</button>
        <div class="slideNav">
            <p class="slideNum"><span class="activeNum">1</span>/<span class="totalNum">total</span></p>
            <div class="slidePage"></div>
        </div>
    </div>
    <div class="mainSlide">
        <div class="slide">
            <ul class="swiper-wrapper">
<?php if($TPL_tsdata_1){foreach($TPL_VAR["tsdata"] as $TPL_V1){?>
                <li class="swiper-slide">
                    <a href="<?php echo $TPL_V1["ts_link"]?>" target="_blank"><img src="<?php echo $TPL_VAR["imgurl"]?><?php echo $TPL_V1["ts_m_img"]?>" alt=""></a>
                </li>
<?php }}?>
                <!--<li class="swiper-slide">
                    <a href="#"><img src="/resource/images/main/img_top_banner01.jpg" alt=""></a>
                </li>-->
            </ul>
        </div>
        <div class="slidePage"></div>
    </div>
    <section class="mainNotice">
        <h2 class="title">뉴고려 소식 <span class="slideInfo">화면을 좌우로 스크롤 하세요.</span></h2>
        <div class="tabMenu">
            <ul>
                <li class="active"><a href="#" onclick="slideObj.mainSlide3.slideTo(1); return false;">모아보기</a></li>
                <li><a href="#" onclick="slideObj.mainSlide3.slideTo(2); return false;">병원소식</a></li>
                <li><a href="#" onclick="slideObj.mainSlide3.slideTo(3); return false;">CH NK</a></li>
                <li><a href="#" onclick="slideObj.mainSlide3.slideTo(4); return false;">건강정보</a></li>
            </ul>
        </div>
		<div class="slide">
			<div class="swiper-wrapper">
				<section class="swiper-slide">
					<h3 class="hidden">전체</h3>
					<ul class="list">
						<?php echo $TPL_VAR["data"]?>

					</ul>
				</section>
				<section class="swiper-slide">
					<h3 class="hidden">포토뉴스</h3>
					<ul class="list">
						<?php echo $TPL_VAR["data1"]?>

					</ul>
				</section>
				<section class="swiper-slide">
					<h3 class="hidden">CH NK</h3>
					<ul class="list">
						<?php echo $TPL_VAR["data2"]?>

					</ul>
				</section>
				<section class="swiper-slide">
					<h3 class="hidden">건강정보</h3>
					<ul class="list">
						<?php echo $TPL_VAR["data3"]?>

					</ul>
				</section>
			</div>
		</div>
    </section>

<!-- 레이어 -->
<div id="video_result"></div>
<div id="video_result1"></div>
<div id="video_result2"></div>

<!--끝 -->
<script type="text/javascript" src="/js/popup/jquery-ui.js"></script>
<script type="text/javascript">
	var getCookie = function(name) 	{
		var nameOfCookie = name + "=";
		var x = 0;
		while ( x <= document.cookie.length ) {
			var y = (x+nameOfCookie.length);
			if ( document.cookie.substring( x, y ) == nameOfCookie ) {
				if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
					endOfCookie = document.cookie.length;
				return unescape( document.cookie.substring( y, endOfCookie ) );
			}
			x = document.cookie.indexOf( " ", x ) + 1;
			if ( x == 0 )
			break;
		}
		return;
	}
	
	var setCookie = function(name, value, expiredays) {
		var todayDate = new Date();
		todayDate.setDate( todayDate.getDate() + expiredays );
		document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
	}
	
	var move_page = function(page)	{
		window.open(page,"_self");
	}
	
	$(document).ready(function() {
		var width = $(".mainLink2").find('a').width();
		$(".mainLink2").find('a').height(width);
		console.log('width = ' + width);
	});
	
</script>	
		<script type="text/javascript">
	function closeWin_36() {
			if ( document.Pop_form_36.chkbox.checked )
					setCookie( 'popup_36', 'done' , 36);
			else
					setCookie( 'popup_36' );
					
			document.getElementById('divpop_36').style.visibility = 'hidden'; 
	}
	</script>
		<!-- <div id="divpop_36" style="position:absolute;top:50px;left:5%;right:5%; z-index:9999; visibility: hidden; overflow:hidden;">
	  <form name="Pop_form_36">
    <img src='http://nkhospital.net/bbs/files/jb_10/f56ee2138672338.jpg' width='100%'  border='0'>    <div style="height:30px;background:#000;font-size:14px; color:#FFFFFF;">
      <label style="float:left;padding:5px;"><input name="chkbox" type="checkbox" value="1" checked /> 이 창을 하루동안 열지 않습니다.</label>
      <a href="javascript:closeWin_36();" style="float:right;padding:5px;color:#fff;font-weight:bold;">[닫기]</a> 
    </div> 
  </form>     
  </div>   -->
	<style type="text/css">
				.pop_img { width:100%;}
		    </style>
	<script type="text/javascript">
		if ( getCookie('popup_36') != 'done') {		
			document.getElementById('divpop_36').style.visibility = 'visible';
		}
			
		$(function() {    
			$("#divpop_36").draggable();  
		});  
    </script>