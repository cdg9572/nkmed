$(document).ready(function(){  
	//네비 슬라이드
	var swiper = new Swiper('#top-bnnr', {
		loop: true,
		pagination: {
			el: '#top-bnnr .swiper-pagination',
			type: 'fraction',
		},
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '#top-bnnr .swiper-button-next',
			prevEl: '#top-bnnr .swiper-button-prev',
		},
	});
	//메인 슬라이드
	var swiper = new Swiper('#main-bnnr', {
		effect:'fade',
		loop: true,
		pagination: {
			el: '#main-bnnr .swiper-pagination',
			clickable: true,
		},
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '#main-bnnr .swiper-button-next',
			prevEl: '#main-bnnr .swiper-button-prev',
		},
	});

	//메인 의료진 슬라이드
	$("#center-list .tab li").on("click",function(){
		if($(this).index()==0){
			$("#tab1-1 .doc").addClass("main-doc");
			var swiper1 = new Swiper('.main-doc .swiper-container', {
				loop: true,
				autoplay: {
					delay: 3000,
					disableOnInteraction: false,
				},
				speed:500,
				slidesPerView: 5,
				spaceBetween: 20,
				navigation: {
					nextEl: '.main-doc .swiper-button-next',
					prevEl: '.main-doc .swiper-button-prev',
				},
			});
		}else{
			$(".doc").removeClass("main-doc");
		}
	});

	//연혁 슬라이드 첫번째
	var swiper = new Swiper('.slide1', {
		loop: true,
		pagination: {
			el: '.slide1 .swiper-pagination',
			clickable: true,
		},
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
	});
	//연혁 슬라이드 두번째
	var swiper = new Swiper('.slide2', {
		loop: true,
		pagination: {
			el: '.slide2 .swiper-pagination',
			clickable: true,
		},
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
	});
	//연혁 슬라이드 세번째
	var swiper = new Swiper('.slide3', {
		loop: true,
		pagination: {
			el: '.slide3 .swiper-pagination',
			clickable: true,
		},
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
	});

	//메뉴 이벤트
	$("#menu").on("click",function(){
		$("#gnb").slideToggle(300);
		if($(window).width() <= 720){
			$("#login-bar").toggleClass("on");
			$("#gnb ul > li > a").on("click",function(){
				$(this).addClass("on");
				$(this).parent("li").siblings().find(".gnb-tit").removeClass("on");
				return false;
			});
			$("#gnb ul li .row dl dt a").on("click",function(){
				$(this).parent("dt").siblings("dd").slideDown(200);
				$(this).parents("dl").siblings().find("dd").slideUp(200);
				$(this).parents(".row").siblings().find("dd").slideUp(200);
				return false;
			});
		}
	});

	//메인 진료센터,진료과,특수클리닉 이벤트
	$("#center-list .tab li a").on("click",function(){
		var $tab_li = $(this).parent("li");
		var idx = $tab_li.index();

		$tab_li.addClass("on").siblings().removeClass("on");
		$("#tab1-"+(idx+1)).fadeIn(200).siblings(".tab-cont").hide();
		$("#filter").removeClass().addClass("tab-" + (idx + 1));
		$("#filter li").eq(0).addClass("on").siblings().removeClass("on");
		$('.tab-cont li').show();
	});
	$("#filter li a").on("click",function(){
		var $filter_li = $(this).parent("li");
		$filter_li.addClass("on").siblings().removeClass("on");

		var group = $(this).data('target');
		if(group == 'all') {
			$('.tab-cont li').show();
		}
		else {
			$('.tab-cont li').hide();
			$('.tab-cont li[data-group='+group+']').show();
		}
	});

	//메인 커뮤니티 이벤트
	$("#main-notice .tab li a").on("click", function () {
		var $tab_li = $(this).parent("li");
		// var idx = $tab_li.index();

		$tab_li.addClass("on").siblings().removeClass("on");
	});

	//메인 모아보기,병원소식,건강정보 이벤트
	$("#main-notice .tab li a").on("click",function(){
		var $tab_li = $(this).parent("li");
		var idx = $tab_li.index();

		$tab_li.addClass("on").siblings().removeClass("on");
		$("#tab2-"+(idx+1)).fadeIn(200).siblings(".tab-cont").hide();
	});

	//로케이션 드롭
	$(".depth").hover(function(){
		$(this).find("ul").stop().slideToggle(200);
	});
	//로케이션 레이아웃
	$(window).on("load resize",function(){
		var ml = $("#logo").width();
		$("#location").css('margin-left',ml);
	});


	//병원안내 층별 이벤트
	$("#main-info .f1").hover(function(){
		$("img[usemap='#map1']").show().siblings('img').hide();
		$("#main-info li.map1").addClass("active").siblings().removeClass("active");
	});
	$("#main-info .f2").hover(function(){
		$("img[usemap='#map2']").show().siblings('img').hide();
		$("#main-info li.map2").addClass("active").siblings().removeClass("active");
	});
	$("#main-info .f4").hover(function(){
		$("img[usemap='#map3']").show().siblings('img').hide();
		$("#main-info li.map3").addClass("active").siblings().removeClass("active");
	});
	$("#main-info .f8").hover(function(){
		$("img[usemap='#map4']").show().siblings('img').hide();
		$("#main-info li.map4").addClass("active").siblings().removeClass("active");
	});
	$("#main-info .f10").hover(function () {
		$("img[usemap='#map5']").show().siblings('img').hide();
		$("#main-info li.map5").addClass("active").siblings().removeClass("active");
	});

	$("#main-info li.map1").hover(function(){
		$("img[usemap='#map1']").show().siblings('img').hide();
		$(this).addClass("active").siblings().removeClass("active");
	});
	$("#main-info li.map2").hover(function(){
		$("img[usemap='#map2']").show().siblings('img').hide();
		$(this).addClass("active").siblings().removeClass("active");
	});
	$("#main-info li.map3").hover(function(){
		$("img[usemap='#map3']").show().siblings('img').hide();
		$(this).addClass("active").siblings().removeClass("active");
	});
	$("#main-info li.map4").hover(function(){
		$("img[usemap='#map4']").show().siblings('img').hide();
		$(this).addClass("active").siblings().removeClass("active");
    });
	$("#main-info li.map5").hover(function () {
		$("img[usemap='#map5']").show().siblings('img').hide();
		$(this).addClass("active").siblings().removeClass("active");
	});

    //유튜브 썸네일 사라지기      
    $('.iframe-thumb').on('click', function(){         
        $(this).addClass('on');
    });


	//질환정보, 질환영상 탭
	$(".no2").hide();
	$(".no3").hide();
	$(".tabMenu-2 li").on("click", function () {      
		$(this).addClass("active").siblings().removeClass("active");
		if ($(".tabMenu-2 li:first-of-type").hasClass("active")) {
			$(".no1").show();
			$(".no2").hide();
			$(".no3").hide();
		} else if($(".tabMenu-2 li:nth-of-type(2)").hasClass("active")) {
			$(".no1").hide();
			$(".no2").show();
			$(".no3").hide();
		} else {
			$(".no1").hide();
			$(".no2").hide();
			$(".no3").show();
		};
	});

	//서브페이지 드롭다운
	$(".page-dropdown").on("mouseover", function () {
		//옵션이 짝수일때
		if ($(this).find(".dropdown-item").length%2 == 0){
			$(this).find(".dp-section").css({
				height: $(".dropdown-item").outerHeight() * $(this).find(".dropdown-item").length / 2
			});
		//옵션이 홀수일때
		}else{
			$(this).find(".dp-section").css({
				height: $(".dropdown-item").outerHeight() * $(this).find(".dropdown-item").length / 2 + 24
			});
		}
		$(this).find(".dropdown-toggle").addClass("on");
	});
	$(".page-dropdown").on("mouseout", function () {
		$(this).find(".dp-section").css({
			height: 0
		});
		$(this).find(".dropdown-toggle").removeClass("on");
	});

    //전체검색
	//$(document).on("click","#schbtn",function(){      
    $("#search_all").submit(function(event){    
        if($('#schtxt').val() == '')	{
			alert('검색어를 입력하세요');
			$('#schtxt').focus();
			return false;
        }		
        var schtxt = $("#schtxt").val();
        $('html').removeClass('searchOn');          
        $("#search_all").attr("action", "/search.php?s_search="+schtxt);    
		//location.href = "/search.php?s_search="+schtxt;
    });

    $("#search_all2").submit(function(event){    
        if($('#schtxt2').val() == '')	{
			alert('검색어를 입력하세요');
			$('#schtxt2').focus();
			return false;
        }		
        var schtxt = $("#schtxt2").val();
        $('html').removeClass('searchOn');          
        $("#search_all2").attr("action", "/search.php?s_search="+schtxt);    
		//location.href = "/search.php?s_search="+schtxt;
    });


    $(document).on("click","#schbtn2",function(){
        var schtxt = $("#schtxt2").val();
		$('html').removeClass('searchOn');
		location.href = "/search.php?s_search="+schtxt;
    });

    //전체검색
    function click_scnbtn(){       
        var schtxt = $("#schtxt").val();
		$('html').removeClass('searchOn');
		location.href = "/search.php?s_search="+schtxt;

    }


	//탑버튼, 메인 슬라이드 스크롤 아이콘
	$(window).scroll(function(){
		var window_h = $(window).scrollTop();
		console.log(window_h);
		if(window_h > 300){
			$("#top").fadeIn(200);
		}else{
			$("#top").fadeOut(200);
		}
		if(window_h > 200){
			$(".move-scroll").fadeOut(200);
		}else{
			$(".move-scroll").fadeIn(200);
		}
	});
	$("#top").on("click",function(){
		$("html,body").animate({
			scrollTop:0
		},400);
    });

    $('#btn_cancel').click(function(){
		location.href = '/v2/join.php';
		return false;
	});
	$('#closed').click(function(){
		$(".layerAlert").hide()
		return false;
	});

    $(".btnCom").click(function(){
        var postURL = "/inc/DoubleIDCheck.php";
        var mb_id = $("#mb_id").val();
        if(mb_id.length < "6" || mb_id.length > "20") {
            $(".alertTxt").html("잘못된 아이디 입니다.");
            $(".layerAlert").show();
            return false;
        }
        $.ajax({
            cache: false,
            async: false,
            type: "POST",
            data: "mb_id=" + mb_id,
            url: postURL,
            success: function(msg) {
                if(msg == 'true') {
                    $(".alertTxt").html("사용 가능한 아이디 입니다");
                }else{
                    $(".alertTxt").html("사용할 수 없는 아이디 입니다.");
                }
                $(".layerAlert").show();
            }
        });
    });


});

//로그인 모달창
function modal_on_login(){
	//$("#loginModalCenter").modal("show");
	$('.modal-box').fadeIn();

}

$(window).on("load resize",function(){
	var $iframe_h = $('iframe, video').width() * 0.57;
	$('iframe.active').height($iframe_h);
});
