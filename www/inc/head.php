<?
	ob_start();
	?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="건강과 감동, 행복을 드리는 뉴고려병원">
	<meta name="format-detection" content="telephone=no" />
	<meta property="og:title" content="의료법인 인봉의료재단 뉴고려병원">
	<meta property="og:description" content="건강과 감동, 행복을 드리는 뉴고려병원">
	<meta property="og:image" content="http://www.nkhospital.net/images/main/nkhospital.jpg">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="800">
	<meta property="og:image:height" content="400">
	<? if($jb_code == "40"){ ?>
		<meta name="robots" content="noindex" />
	<? } ?>
	
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<!-- <title>뉴고려병원 <?if($page_title!='main') echo '> '.$page_title.' > '.$page_sub_title?></title> -->
	<title>뉴고려병원</title>
	<link rel="stylesheet" href="/resource-pc/css/style.css">
	<?php
		$mobile_agent = "/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/";
		if(preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])){
	?>
		<link rel="stylesheet" href="/resource-pc/css/mobile.css?v=0.0">
		<meta name="viewport" content="width=720px">
	<?php
		}else{
	?>
		<meta name="viewport" content="width=1360px">
	<?php
		};
	?>
	<script src="/resource-pc/js/jquery-1.12.2.min.js"></script>
	<script src="/resource-pc/js/swiper.min.js"></script>
	<script src="/resource-pc/js/function.js"></script>
    <script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
    <script type="text/javascript">
    if(!wcs_add) var wcs_add = {};
    wcs_add["wa"] = "c3bffe5ae844c";
    if(window.wcs) {
    wcs_do();
    }
    </script>
	
<!-- AceCounter Log Gathering Script V.8.0.2019080601 -->
<script language='javascript'>
	var _AceGID=(function(){var Inf=['gtp5.acecounter.com','8080','AH3A45007886144','AW','0','NaPm,Ncisy','ALL','0']; var _CI=(!_AceGID)?[]:_AceGID.val;var _N=0;var _T=new Image(0,0);if(_CI.join('.').indexOf(Inf[3])<0){ _T.src ="https://"+Inf[0]+'/?cookie'; _CI.push(Inf);  _N=_CI.length; } return {o: _N,val:_CI}; })();
	var _AceCounter=(function(){var G=_AceGID;var _sc=document.createElement('script');var _sm=document.getElementsByTagName('script')[0];if(G.o!=0){var _A=G.val[G.o-1];var _G=(_A[0]).substr(0,_A[0].indexOf('.'));var _C=(_A[7]!='0')?(_A[2]):_A[3];var _U=(_A[5]).replace(/\,/g,'_');_sc.src='https:'+'//cr.acecounter.com/Web/AceCounter_'+_C+'.js?gc='+_A[2]+'&py='+_A[4]+'&gd='+_G+'&gp='+_A[1]+'&up='+_U+'&rd='+(new Date().getTime());_sm.parentNode.insertBefore(_sc,_sm);return _sc.src;}})();
</script>
<!-- AceCounter Log Gathering Script End -->
</head>
<meta name="naver-site-verification" content="b74ca101220b03160a50b2fcdc569c7f006a47cb" />
<span itemscope="" itemtype="http://schema.org/Organization">
<link itemprop="url" href="http://www.nkhospital.net">
<a itemprop="sameAs" href="https://blog.naver.com/nkblog2014"></a>
<a itemprop="sameAs" href="https://tv.naver.com/newkorea"></a>
<a itemprop="sameAs" href="https://www.youtube.com/channel/UC_8u752emktPchD8eSpYVNg"></a>
<a itemprop="sameAs" href="https://www.facebook.com/nkhospital7"></a>
</span>