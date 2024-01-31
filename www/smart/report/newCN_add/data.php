<?
session_start() ;


if($del_ses == "Y")
{
	session_destroy();
	echo "<script>
			location.href='./index.html'
		</script>";


	exit;
}

include "./inc/dbConn.php";

mysql_select_db("mediroad_liss", $dbconn);

include  "./inc/cn_lib.php";
include "./inc/conf.php";
include "./in_data.php";


if($category_code == "test")
{
	include "./in_data_test.php";
}
else 
{
	$add_url = "in_data_".$category_code.".php" ;
	include "./$add_url";
}

//include "./inc/fix_data.php";

include "/home/jian.mediroad.net/newCN/inc/fix_data.php" ;

//echo "aids : $data[AIDS]" ;



//exit;

?>


<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<html>
<head>
<meta charset="euc-kr">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>21CHana Hospital</title>

<link rel="stylesheet" type="text/css" href="./css/reset.css">
<link rel="stylesheet" type="text/css" href="./css/hreport.css">


<!-- 문단 들여쓰기 용 -->
<style>
      .m10 {margin-left: 10em; }
      .m20 {margin-left: 20em;}
      .m30 {margin-left: 30em;}
</style>
<!-- -------------------->


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--[if IE 8]>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<![endif]-->
<script>
function printPage() {
	document.body.innerHTML = pagea.innerHTML;
    window.print();
	location.reload(true);
};
</script>
</head>

<body>

<?
//arr_dsp($data) ;
testing_dsp2($data) ;
?>

<div style="background-color:#5f5f5f; position:relative;">
	<div class="container">
		<div  id="pagea">

		<!-- 첫번째 페이지 ---------------------------- ------------------------------------------->
			<div class="page first_page" id="first_page">
				<? h(30) ;?>
				<div class="codeinput">
			
					<strong>&nbsp;&nbsp;&nbsp;&nbsp;<?=tr_cn($data[성명], $tr_check)?> <?=tr_cn("고객님")?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
				</div>
					
			</div>
		<!-- 첫번째 페이지 ---------------------------- ------------------------------------------->
			
			
	<?

$doc_view = $data[doc_view] ;

//include "./dsp_docview.php" ;


//$dsp_docview_total = str_replace('\n', "\n\n\n", $dsp_docview_total);


//if( $data[접수번호키] == "1410147002" ||  $data[접수번호키] == "1410147004" )  //긴글 소견 2페이지 처리 -- 수정해야함
if( $data[접수번호키] == "1410147002" )  //긴글 소견 2페이지 처리 -- 수정해야함
{

		$set_str = 99 ;

		


		$plus_line = 0 ;
		$arr = explode("\n", $dsp_docview_total);

		//print_R($arr) ;

		//echo "<p>count : ".count($arr) ;



		$dsp_docview_str ="";

		for( $i =0; $i < count($arr); ++$i )
		{

			$plus_line += $ppp = floor( strlen($arr[$i]) / $set_str );
			$plus_line ++ ;

			$test .= "<p>plus $i [ $plus_line ]: $arr[$i]<br>" ;

			$dsp_docview_str .= "$arr[$i]" ;

		//echo "$dsp_docview_str<br>" ;

			if($plus_line > 25) 
			{
				
				$dsp_docview_arr[] = $dsp_docview_str ;


		//echo "NExt page : $dsp_docview_str<br>" ;
				$dsp_docview_str = "" ;
				$plus_line = 0 ;


					
			}

		}

}
else 
{

	//==== 중복 소견 제거 

	//==== 중복 소견 제거 
	//print_r($docview_t_arr) ;
	$dsp_view_t = array_unique($docview_t_arr) ;
	

	foreach($dsp_view_t as  $key => $val)
	{
		//echo "<br>$key => $val <br>" ;

		$dsp_docview_total_str .= "".$val ;
	}

	//$dsp_docview_arr[] = $dsp_docview_total ;

	$dsp_docview_arr[] = $dsp_docview_total_str ;

	
}
	//arr_dsp($dsp_docview_arr) ;

//exit;

	//echo "<br>dsp_docview_total_str<br>$dsp_docview_total_str <br>" ;

	$num =0 ;

	//for( $i =0; $i < count($dsp_docview_arr); ++$i )
	//{

		//if(!$dsp_docview_arr[$i]) break;  // 그냥 빈칸 나오는것 체크

		$num ++ ; 
?>

			
		<!-- page01 ---------------------------- ------------------------------------------->
			
			<div class="page page_bg_A" id="<?=$num?>">
				<div class="cont_box">

				<!----------------- 시작 -------------------------->

				<? h(20) ;?>

					<div class="table_list_01">
						<table>
							<tr>
								<th> <?=tr_cn("성명", $tr_check)?> </th>  <td align=center width=35%> <?=tr_cn($data[성명])?>  </td>
								<th> <?=tr_cn("검진일", $tr_check)?> </th>  <td align=center width=35%> <?=tr_cn($data[검진일자])?>  </td>
							</tr>
							<tr>
								<th> <?=tr_cn("접수번호", $tr_check)?> </th>  <td align=center> <?=tr_cn($data[접수번호키])?> </td>
								<th> <?=tr_cn("접수처", $tr_check)?> </th>  <td align=center> <?=tr_cn($data[접수처])?>  </td>
							</tr>
						</table>
					</div><!-- table_list_01 -->

				<? h(30) ;?>


					<h5><img src="./images/icon01.png" height=27>&nbsp; <img src="./images/h5_img_page_03.png" alt="? 合 ? ? ? 告" /></h5>


					<div class="bg_cont cont_text">
						<textarea readonly>	<?	echo "$data[$종합소견]" ;?>	</textarea>
					</div>




				<!----------------- 끝 ------------------------ -->

				</div>
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

	<?
	//}
	?>

<?
//if( $data[접수번호키] == "1410147002" ||  $data[접수번호키] == "1410147004" )  //긴글 소견 2페이지 처리 -- 수정해야함
if( $data[접수번호키] != "1410147002" )   //긴글 소견 2페이지 처리 -- 수정해야함
{
?>
		<!-- page02 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->
<?
}
?>

		<!-- page03 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

					<h4><?=tr_cn("이상소견", $tr_check)?> </h4>

					<div class="table_list_01">
						<table width="100%" border="0">
							<tr>
								<th width=30%> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
								<th> <?=tr_cn("임상참고치", $tr_check)?> </th>
								<th> <?=tr_cn("검사결과", $tr_check)?> </th>
								<!--<th>  <?=tr_cn("Page", $tr_check)?> </th>-->
							</tr>
						
							<?

							for($i=0 ; $i < count($risk_arr) ; $i++)
							{

								$e_arr = $risk_arr[$i] ;
								//echo " $e_arr[page]  || $e_arr[name]   || $e_arr[item]   <br>";

								//$e_item =  getitem2name($e_arr[item]) ;					

								$e_item =  $e_arr[item] ;	
								$e_name =  getitem2name($e_item) ;	

								//$e_name = tr_cn($e_arr[name], $tr_check) ;
								$e_data =  $data_esti[$e_item] ;
								$e_data = str_replace("/", "~", $e_data) ;
								$e_data = tr_cn($e_data) ;

								$c_date = $data[$e_item] ;

								echo "
									<tr>
										<td align=center>$e_name </td>
										<td align=center>$e_data  </td>
										<td align=center><font color=red>$c_date  </td>
										
									</tr>
								";

								//<td align=center> $e_arr[page] </td>
							}
							?>
							
							<tr>
								<td align=center><?=tr_cn("체질량지수(BMI)", $tr_check)?>  </td>
								<td align=center>18.5 ~ 23.0 </td>
								<td align=center><font color=red><?=$data[비만도]?> </td>
							</tr>

							<tr>
								<td align=center><?=tr_cn("pct", $tr_check)?>  </td>
								<td align=center> <?=$data_esti['pct']?> </td>
								<td align=center><font color=red><?=tr_cn("$data[pct]")?> </td>
							</tr>

							<tr>
								<td align=center><?=tr_cn("MPV", $tr_check)?>  </td>
								<td align=center> <?=$data_esti["MPV"]?> </td>
								<td align=center><font color=red><?=$data['MPV']?> </td>
							</tr>

							<tr>
								<td align=center><?=tr_cn("총빌리루빈", $tr_check)?>  </td>
								<td align=center><?=$data_esti["TBilirubin"]?>  </td>
								<td align=center><font color=red><?=$data['TBilirubin']?> </td>
							</tr>

							<tr>
								<td align=center><?=tr_cn("직접빌리루빈", $tr_check)?>  </td>
								<td align=center><?=$data_esti["DBilirubin"]?>  </td>
								<td align=center><font color=red><?=$data['DBilirubin']?> </td>
							</tr>

							<tr>
								<td align=center><?=tr_cn("LDL_Cholesterol_", $tr_check)?>  </td>
								<td align=center><?=$data_esti["LDL_Cholesterol_"]?>  </td>
								<td align=center><font color=red><?=$data['LDL_Cholesterol_']?> </td>
							</tr>

							

							

							<tr>
								<td align=center>&nbsp; </td>
								<td align=center> </td>
								<td align=center> </td>
							</tr>


						</table>

						<? h(20); ?>


						
					</div><!-- table_list_01 -->



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<!--------------------------------------- ------------------------------------------->





		<!-- page04 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4><?=tr_cn("기 초 검 사", $tr_check)?></h4>

				<h5><?=tr_cn("신체계측 및 비만도", $tr_check)?></h5>

				<p>身高和&#20307;重是最容易&#27979;量的&#26816;&#26597;&#39033;目，一般按照一定的&#26631;准&#26469;&#27979;量。除了&#20307;重的&#21464;化以外，&#36824;要考&#34385;&#19982;身高的比重后分析肥&#32982;度。
<br>肥&#32982;度可以用布&#35834;&#21345;(Broca)公式&#8211;&#23454;&#38469;&#20307;重/&#26631;准&#20307;重*10和世界&#21355;生&#32452;&#32455;(WHO)&#20122;太地&#21306;&#20307;重指&#25968;(BMI)<br>公式&#8211;--&#20307;重(Kg)/身高²(M²)&#26469;&#35745;算。
				</p>
				
				<? h(20); ?>
				
				< <?=tr_cn("비만도별 판정결과", $tr_check)?> >
				<div class="table_list_02">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("구분/지수", $tr_check)?> </th>
							<th> <?=tr_cn("브로카공식", $tr_check)?> </th>
							<th> <?=tr_cn("체질량공식", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("저체중", $tr_check)?></td>
							<td align=center>89以下 </td>
							<td align=center>18.4以下 </td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("정상", $tr_check)?></td>
							<td align=center>90~109 </td>
							<td align=center>18.5~22.9 </td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("과체중", $tr_check)?></td>
							<td align=center>110~119 </td>
							<td align=center> 23.0~24.9</td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("비만", $tr_check)?></td>
							<td align=center>120~139 </td>
							<td align=center>25.0~29.9 </td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("고도비만", $tr_check)?></td>
							<td align=center> 140以上</td>
							<td align=center> 30以上</td>
						</tr>
					</table>

				</div>

				<? h(30); ?>

				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("비고", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("신장", $tr_check)?></td>
							<td align=center><?=tr_cn($data[신　장_Height_])?> cm</td>
							<td align=center> </td>
							<td align=center> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("체중", $tr_check)?></td>
							<td align=center><?=tr_cn($data[체　중_Weight_])?> Kg </td>
							<td align=center> </td>
							<td align=center> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("비만도", $tr_check)?></td>
							<td align=center> <?=tr_cn($data[비만도])?> % </td>
							<td align=center> </td>
							<td align=center> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("체질량지수(BMI)", $tr_check)?></td>
							<td align=center><?=tr_cn($data[비만도_BMI_])?> </td>
							<td align=center> </td>
							<td align=center>	<?= $data_esti[비만도_BMI_]?> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("허리둘레", $tr_check)?></td>
							<td align=center><?=tr_cn($data[허리둘레_WaistCircum_])?> cm</td>
							<td align=center>   </td>
							<td align=center> </td>
						</tr>


					</table>

				</div>


				

				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->



		

		<!-- page07 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h5><?=tr_cn("청력검사", $tr_check)?></h5>

				<p>
					&#21548;力&#26816;&#26597;是&#27979;量&#21548;力的&#26816;&#26597;，一般&#20250;&#36827;行&#32431;音&#21548;力&#26816;&#26597;。
					<br>


				</p>


				<div class="table_list_02">

				<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("dB", $tr_check)?> </th>
							<th> <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("비고", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("10~26", $tr_check)?></td>
							<td align=center>正常 </td>
							<td align=center>&#27809;有 </td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("27~40", $tr_check)?></td>
							<td align=center>&#36731;度&#21548;力障碍 </td>
							<td align=center> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("41~55", $tr_check)?></td>
							<td align=center> 中度&#21548;力障碍</td>
							<td align=center> 利用助&#21548;器</td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("56~70", $tr_check)?></td>
							<td align=center> 中等高度&#21548;力障碍</td>
							<td align=center> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("71~90", $tr_check)?></td>
							<td align=center> 高度&#21548;力障碍</td>
							<td align=center> 特殊&#25945;育</td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("91以上", $tr_check)?></td>
							<td align=center> &#21548;力&#25439;失</td>
							<td align=center>不能&#21548;取 </td>
						</tr>

				</table>
				</div>
					
					<? h(30); ?>


				<h5><?=tr_cn("안과검사", $tr_check)?></h5>


	<p>			</p>

				<p15>
-  &#35270;力
正常&#35270;力是 1.2∼1.5。

<!--
<br>-  眼&#21387; 
<br>眼&#21387;是眼球可&#32500;持球&#29366;而所需的一定的&#20869;&#21387;。
<br>眼&#21387;&#26816;&#26597;是通&#36807;&#21943;射&#21387;&#32553;空&#27668;的方式&#27979;量角膜表面反射之差，是一&#31181;&#38388;接眼&#21387;&#27979;量&#26816;&#26597;。眼&#21387;正常范&#22260;是11mmHg∼20mmHg。
<br>-  眼底
<br>眼底&#26816;&#26597;是分析&#35270;&#32593;膜有无&#24322;常的基本的精密&#26816;&#26597;。
-->
				</p15>
			

<? h(20); ?>
<div class="table_list_01">

				<table width="100%" border="0">
						<tr>
							<th colspan=2> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("비고", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center rowspan=2> <?=tr_cn("청력", $tr_check)?></td>
							<td align=center> 左</td>
							<td align=center><?=tr_cn($data[_1000Hz_L_])?> </td>
							<td align=center> </td>
							<td align=center rowspan=2>  <?=tr_cn( $data[청력진단HearingEvalution])?> </td>
						</tr>

						<tr>
							<td align=center> 右</td>
							<td align=center><?=tr_cn($data[_1000Hz_R_])?> </td>
							<td align=center> </td>
							
						</tr>

						<tr>
							<td align=center rowspan=2> <?=tr_cn("시력", $tr_check)?>
								<br> (<?=tr_cn("교정시력", $tr_check)?>)
							</td>
							<td align=center>左 </td>
							<td align=center>
								
								<?
								if($data[시력_좌_Vision_L_])
								{
									echo sprintf("%1.1f" ,tr_cn($data[시력_좌_Vision_L_]));
								}
								?>
								
								<?
								if($data[교정_좌_CV_L_])
								{
									//echo "(".sprintf("%1.1f" ,tr_cn($data[교정_좌_CV_L_])).")";
									echo "".sprintf("%1.1f" ,tr_cn($data[교정_좌_CV_L_]))."";
								}
								?>


 </td>
							<td align=center> </td>
							<td align=center> </td>
						</tr>
						<tr>
							<td align=center> 右</td>
							<td align=center>

								<?
								if($data[시력_우_Vision_R_])
								{
									echo sprintf("%1.1f" ,tr_cn($data[시력_우_Vision_R_]));
								}
								?>
								
								<?
								if($data[교정_우_CV_R_])
								{
									//echo "(".sprintf("%1.1f" ,tr_cn($data[교정_우_CV_R_])).")";
									echo "".sprintf("%1.1f" ,tr_cn($data[교정_우_CV_R_]))."";
								}
								?>


 </td>
							<td align=center> </td>
							<td align=center> </td>
						</tr>

						
						<tr>
							<td align=center colspan=2> <?=tr_cn("색맹")?>
</td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> </td>
						</tr>

					</table>

				</div>
			

				



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->



		<!-- page09 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 肺 功 能 &#26816; &#26597; </h4>

					<p15>
					
					<?=tr_cn("폐는 늑막(肋膜)이라고 하는 얇은 막 주머니에 둘러싸여 있는 2개의 호흡기관이고, 각각은  기관지에 의해  기관(氣管)에 연결되어 있고 폐동맥에 의해 심장에 연결되어 있다. 폐는 공기 중에서 산소를 혈액 속으로 받아들이고, 혈액 속의 노폐물인 이산화탄소를 공기중으로 배출시키는 역할을 한다. 이를 호흡작용이라 부르며 생명유지의 기본기능이다. 호흡작용 외에도 폐는 호흡에 의해 열을 발산시킴으로써 체온조절을 하는 기능이 있고 몸 속의 산과 염기의 평형을 유지하는 기능도 있다.", $tr_check)?>

					</p15>

					<? h(20); ?>

					<h5><b><?=tr_cn("흉부촬영", $tr_check)?></b></h5>
					<br>
					<?=tr_cn("X-선을 투과하면, 폐는 대기 중에서 받아들인 공기로 가득 차 있고, 심장은 흉부의 중앙에서 약간 왼쪽으로 치우쳐 있으며, 늑골이 폐와 심장을 감싸고 있는 것을 볼 수 있다. 이는 공기, 심장, 뼈 등에 따라 X-선의 투과 정도가 다르기 때문이다. 따라서 흉부촬영을 하면, 인체의 특징적인 모습을 알 수 있어서, 이의 변화 유무를 가려 질병을 진단 할 수 있다. X-선 검사로 폐렴, 폐결핵, 폐농양, 폐암, 폐출혈, 규폐증을 진단하고, 폐기종, 폐낭포, 기흉 등을 알 수 있으며 늑골 이상 유무와 심장 비대 유무도 판별 할 수 있다.", $tr_check)?>
					<br>
					
					
					


					<? h(20); ?>
					<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("흉부촬영", $tr_check)?>  </td>
							<td align=center><?=tr_cn($data[ChestPA_흉부촬영_])?> </td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

					</div>

				<!---- 201608추가 --->
				<? h(30); ?>

				<h5>  肺功能&#26816;&#26597; </h5>


<br>肺是向人&#20307;各部位供&#24212;&#27687;&#27668;的器官，和心&#33039;一&#26679;是人&#20307;最重要的器官之一。
<br>吸&#27668;&#26102;吸入&#27687;&#27668;，呼&#27668;&#26102;排放二&#27687;化&#30899;。通&#36807;分析肺活量和肺容&#31215;、最大通&#27668;量、最大用力呼&#27668;量等，可以&#37492;&#21035;肺功能。
<br>肺功能&#26816;&#26597;&#23646;于通&#27668;功能&#26816;&#26597;，是利用肺活量&#35745;&#35780;价肺功能。
			
				<? h(20); ?>
			
	
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("폐기능검사", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data[폐활량진단PFTest])?></td>
							<td align=center>&nbsp;  </td>
						</tr>


					</table>

				</div>

				<? h(20); ?>

				<h5>  - 胸部CT&#26816;&#26597;  </h5>


<br>CT是&#23558;人&#20307;放入有X-&#32447;&#21457;生&#35013;置的&#22278;形大型器械&#20869;&#36827;行的&#26816;&#26597;，不同于&#21333;&#32431;的X-&#32447;&#26816;&#26597;，可以&#33719;取人&#20307;&#27178;截面的影像，&#20943;少了&#32452;&#32455;&#32467;&#26500;之&#38388;的重&#21472;影&#21709;，可以更加&#28165;&#26224;地&#35266;察病&#21464;。&#36825;是一般&#24576;疑某一器官法神病&#21464;&#26102;，&#20026;了精密&#26816;&#26597;而&#36827;行的最基本的&#26816;&#26597;。

				<? h(20); ?>
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("흉부컴퓨터촬영", $tr_check)?>  </td>
							<td align=center> <?=tr_cn("$data[LungCT_흉부_]")?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>

				



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->





<!------------------ 2016 0922 수정 -------------------------->
<!------------------------------------------------------------>

<!-- page 12 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4>肝 功 能 &#26816; &#26597; </h4> <!-- 간기능검사 -->

					<? h(20); ?>

					<?=tr_cn("간은 생존에 중요한 장기로, 복부 우측 횡격막 바로 아래에 위치하고 있다. 간은 음식에서 섭취한 당을 포도당과 과당으로 분해하고, 여분의 포도당은 글리코겐으로 저장하는데, 혈당이 부족하면 글리코겐은 다시 포도당으로 전환된다. 또한 인체에 필요한 콜레스테롤을 합성하고 무기물을 저장하는 등 영양과 관련된 기능도 한다. 간은단백질의 대사물질인 요소를 신장에서 배설되도록 하며, 독성이 있는 물질이 체내에 들어오면 무독물질로 분해한다. 그 외 기능으로는 담즙생성을 통한 지방식의 소화, 철의 저장을 통한 혈색소 생성 과정의 참여, 혈액응고 관련 인자 생성, 삼투압에 의한 혈액량 조절 등이 있다. ", $tr_check)?>
					<br>
					<?=tr_cn("간은 우리 몸에서 가장 큰 장기로 각종 대사작용, 해독, 분해, 합성 및 분비를 담당하는 매우 중요한 장기이며 모든 해로운 이물질들을 도맡아서 처리한다. 이러한 해독  과정 중에 간세포가 손상되기 쉽고 알콜성, 바이러스성, 약물성, 독성 간질환 등이 흔히 발생하게 된다.", $tr_check)?>
					<br>
					<? h(30); ?>
					
					<h5><b><?=tr_cn("총단백, 알부민, 글로부린", $tr_check)?></b></h5>
					<br>
					<?=tr_cn("단백질은 영양원으로서 삼투압 유지, 물질의 이동 및 운반, 혈액응고, 면역 물질의 합성, 효소반응 등에 관여한다. 일반적으로 단백질 농도는 변화가 적어 질환이 생겨도 거의 변화가 없다. 그러므로 다른 검사와 병행하는 것이 좋고, 이상 결과를 보일 경우 단백분획을 추가로 검사하여 판단하는 것이 바람직하다. 총 단백질량의 60~70%를 차지하는 알부민은 영양단백으로 간에서 생성되거나 합성되기에 알부민 수치로 간의 합성기능을 알아볼 수 있다. 총 단백질량의 약 30%를 차지하는 글로부린에는 면역글로불린과 다양한 효소 및 운반단백들이 포함된다. 글로불린의 대부분이 면역글로불린이므로 글로불린 수치가 낮은 경우 우선 면역 기능저하를 염두에 두어야 하고 반대로 염증이나 감염 등이 있을 경우 면역글로불린의 상승으로 인해 글로불린 수치가 높아진다. 면역글로불린의 대부분은 형질세포로 알려진 성숙한 B림프구에 의해 생성되고 그 외의 글로불린들은 간에서 생성된다.", $tr_check)?>
					<br>
					<?=tr_cn("총단백이 증가되면 탈수증, 골수증, 자가면역질환, 간경변 등이 의심되고, 감소시에는 영양부족, 신부전증, 복수, 납중독 등이 의심된다.", $tr_check)?>
					<br>
					<?=tr_cn("알부민이 증가되면 급성탈수증이 의심되고 감소시 선천성 저알부민혈증, 염증성질환, 간질환, 신증후군, 영양불량 등이 의심된다.", $tr_check)?>
					<br>
					<!--
					<?=tr_cn("A/G비율이 높을 때는 영양과다, 항체결핍 등의 소견이 의심되고 적을 때는 영양불량, 흡수장애 신장염 등이 의심된다.", $tr_check)?>
					<br>
					-->

					<? h(30); ?>
					
					<h5><b><?=tr_cn("총빌리루빈,직접빌리루빈,간접빌리루빈", $tr_check)?></b></h5>
					<br>
					<?=tr_cn("폐쇄성 황달이나 종양으로 인해 담관이 막히면 직접 빌리루빈이 증가되고 용혈성 황달, 태아적아구증, 악성빈혈, 부적합한 수혈로 인한 용혈반응시에는 간접빌리루빈이 증가한다.", $tr_check)?>
					<br>
					<?=tr_cn("직접빌리루빈과 간접빌리루빈이 동시에 증가하면 간세포성 황달, 간경화, 전염성단핵구증, 약물에 의한 간실질 세포의 병변이 의심된다.", $tr_check)?>
					<br>
				
				
					<br>

				



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->


		<!-- page 13  ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->
				<? h(20); ?>


				<h5><b><?=tr_cn("AST(SGOT), ALT(SGPT)", $tr_check)?></b></h5>
					<br>
					<?=tr_cn("AST,ALT는 간, 근육세포, 적혈구내에 존재하는 효소로 이들 세포의 괴사, 파괴에 의하여 혈중으로 유출된다. ALT는 주로 간에만 존재하는 효소로 간, 담도질환의 유력한 지표로 이용된다. AST는 간 외에 심근 및 적혈구에도 많이 함유되어 있어 간질환은 물론 심근경색, 허혈성 심질환과 같은 심근세포의 손상 및 용혈성 질환시에도 증가 할 수 있다. AST,ALT의 상대농도는 조직에 따라 다를 뿐만 아니라 같은 조직에서도 병적 상태에 딸 효소 활성 수준은 변동하며, 혈중 반감기는 AST가 ALT보다 짧다. 그러므로 AST,ALT활성치와 AST/ALT비의 시간적인 추이를 추적하여 진단 내지 예후를 해석할 수 있다.", $tr_check)?>
					<br>
					<?=tr_cn("증가시에는 급,만성 간염, 알코올성간염, 지방간, 간경변, 간암, 전격성 간염, 심근경색, 용혈성 질환, 골격계 질환 등이 의심되고 감소시에는 간괴사가 의심된다.", $tr_check)?>
					<br>

					<? h(30); ?>
					
					<h5><b><?=tr_cn("GGT(r-GTP)", $tr_check)?></b></h5>
					<br>
					<?=tr_cn("GGT는 간, 담도계의 폐쇄 및 간손상시 증가하므로 간,담도 질환의 선별검사로 이용된다. 특히 다른 효소들에 비하여 알코올성 간질환에서 현저하게 증가하므로, 알코올성 간질환의 감별진단, 경과 관찰 및 치료의 지표로 유용성이 높다. 또한 ALP와 동시에 증가했을 때 ALP상승의 원인이 담도 이상에 의한 것으로 판단하는 근거가 될 수 있고 폐쇄성 황달, 담관염, 담낭염 등을 진단하는데 AST나 AST보다 민감도가 높다.", $tr_check)?>
					<br>
					<?=tr_cn("검사결과수치가 높을 때에는 알코올에 의한 간장애, 담도계질환, 요독증 등이 의심되고, 낮을 때에는 특별한 의의는 없다.", $tr_check)?>
					<br>
				
					<? h(30); ?>
					
					<h5><b><?=tr_cn("ALP", $tr_check)?></b></h5>
					<br>
					<?=tr_cn("혈청 ALP는 주로 간과 뼈의 ALP로 구성되므로, ALP 상승의 가장 흔한 원인은 간과 골격계의 질환이다. 간질환 중에서도 담즙울체를 일으키는 간질환에서 ALP의 상승이 자주 동반되며, 골절, 골육종, 뼈로 전이된 암과 골대사 질환에서도 ALP가 증가할 수 있다. 소아에서는 성장으로 인한 조골세포의 활성 증가로 높은 활성을 나타내는데, 드물게는 일과성으로 수천 IU/L까지 상승할 수 있다. 그 외 임신 말기에도 정상적으로 증가할 수 있다.", $tr_check)?>
					<br>

				



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->


		<!-- page 14 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->
				<? h(20); ?>

				<h5><b> 肝炎病毒&#26631;志物&#26816;&#26597;</b></h5>
					<br>
<!--					
					<b>- 甲型肝炎病毒(HAV)&#26816;&#26597;</b>
<br>  甲型肝炎病毒主要是通&#36807;&#32463;口感染而&#20256;播。在&#22269;&#20869;，大部分的&#23156;幼&#20799;及少&#20799;期&#20250;和感冒一&#26679;不是太&#20005;重，10&#23681;以后的成人大部分具有甲型肝炎抗&#20307;。甲型肝炎具有&#28508;伏期，有&#26102;&#20250;无任何症&#29366;，有&#26102;&#20250;&#24102;有一般的&#20020;床症&#29366;。一般的&#20020;床症&#29366;是突然出&#29616;高&#28909;、倦&#24577;、食欲不振、腹部不舒服、黑褐色尿、&#40644;疸等。不易&#19982;其他型的病毒感染&#21306;分。&#20020;床症&#29366;大&#32422;&#20250;持&#32493;2&#20010;月以上后自然治愈。&#30830;&#35748;血&#28165;&#26816;&#26597;后的HAV IgM抗&#20307;，可以&#30830;&#35786;是否&#23646;于急性肝炎。感染后的4~6&#20010;星期&#20869;&#24320;始出&#29616;HAV IgG抗&#20307;，然后&#32456;生持有抗&#20307;，可有效&#39044;防疾病。

<? h(20); ?>
-->
<b><br>- 乙型肝炎病毒（HBV）&#26816;&#26597;</b>
<br>肝炎中最成&#20026;&#38382;&#39064;的乙型肝炎&#19982;甲型肝炎不同，成&#20026;慢性肝炎的可能性&#36739;高。我&#22269;成人的HBs Ag&#38451;性率大&#32422;是6%左右。HBs Ag可以&#20174;病毒携&#24102;者的血液、小便、唾液、精液、&#38452;道分泌物、初乳、胃液及其他&#20307;液中&#21457;&#29616;，但大便一般是不能&#21457;&#29616;。主要的&#20256;播渠道是&#36755;入&#27745;染的血液和打&#38024;&#26102;的&#32463;皮感染，&#36824;有垂直&#20256;播(周&#20135;期感染)、性接&#35302;、暴露于&#27745;染的&#20307;液(唾液等)等的原因。
<br><br>  HBs抗原&#20026;&#38451;性&#26102;：已&#32463;&#36827;展&#20026;急性感染期或其后的慢性化&#26102;，HBs抗原是&#38451;性。乙型肝炎一般&#20250;&#36827;展&#20026;慢性化，HBs抗原6&#20010;月以上是&#38451;性，就&#31216;之&#20026;“慢性病毒携&#24102;者”。此&#26102;，感染&#24403;&#26102;的年&#40836;比&#36739;重要。成人感染&#26102;，10%以下&#20250;是慢性病毒携&#24102;者。但少&#20799;是25%&#20250;成&#20026;慢性病毒携&#24102;者，&#20174;孕&#22919;垂直&#20256;播&#32473;新生&#20799;&#26102;，90%&#20250;成&#20026;慢性病毒携&#24102;者。慢性乙型肝炎病毒携&#24102;者的&#31181;&#31867;是HBs Ag是&#38451;性，有肝功能&#27809;有&#24322;常的健康病毒携&#24102;者、&#39044;后&#36739;好的慢性持&#32493;性肝炎、&#39044;后不理想的慢性活&#21160;性肝炎等。如果是&#38451;性，必&#39035;要定期&#26816;&#26597;肝功能及&#30830;&#35748;活&#21160;性，如果活&#21160;性增加或肝功能降低，就&#24212;&#35813;&#19982;&#19987;家&#21307;生&#21327;商后接受适&#24403;的治&#30103;。&#36824;有需要&#35266;察乙型肝炎病毒抗&#20307;是否形成。
<br><br>  HBs Ab&#20026;&#38451;性&#26102;，可以&#35270;&#20026;已&#32463;形成了&#23545;乙型肝炎病毒的免疫抗&#20307;。因此Ag&#20026;&#38452;性，&#27809;有形成抗&#20307;的人是&#27809;有防御感染的功能。此&#26102;可以通&#36807;&#39044;防&#38024;&#26469;形成防御抗&#20307;。打完三次的&#39044;防&#38024;后，要在六&#20010;月&#20869;&#26816;&#26597;是否生成抗&#20307;。如果打了&#20960;次&#39044;防&#38024;后&#36824;是不出&#29616;抗&#20307;，就&#24212;&#35813;是&#20307;&#36136;本身不生成乙型感染防御抗&#20307;。如果抗&#20307;已&#32463;生成，&#32463;1~2年后&#26816;&#26597;&#26102;&#21363;使是&#38452;性，但&#23545;乙型病毒肝炎的防御力是一直保持。

<br><br>  HBe抗原抗&#20307;&#26816;&#26597; &#8211; &#36825;是HBs抗原&#20026;&#38451;性&#26102;需要的&#26816;&#26597;，主要是&#35780;价病毒繁殖力和因此而形成的感染力&#26102;使用。HBe抗原&#38451;性意味着病毒在&#32487;&#32493;繁殖，此&#26102;的血液感染力&#36739;高。HBe抗&#20307;&#38451;性&#23646;于恢&#22797;期或&#32463;&#36807;急性期的&#29366;&#24577;，大部分是病毒的繁殖&#20943;少，肝功能&#26816;&#26597;可以&#21457;&#29616;得到好&#36716;。
<br><br>  HBc抗&#20307;&#26816;&#26597; &#8211; 比HBs抗&#20307;早出&#29616;，&#20250;&#32500;持&#25968;年。&#36825;&#24182;非是&#39044;防感染的防御抗&#20307;。
HBc IgM抗&#20307;是&#26174;&#29616;最近感染的指&#26631;，急性感染&#26102;力价&#36739;高，&#32463;&#36807;6~8&#20010;月后就&#20250;消失。出&#29616;在慢性肝炎患者身上，意味着病毒的&#22797;&#21457;等，此&#26102;患者的症&#29366;&#20250;&#24694;化。

<? h(30); ?>

<b>- 丙型肝炎病毒(HCV)&#26816;&#26597;</b>
<br>  &#36825;是一般因&#36755;血等的原因而引起肝炎病毒，全&#22269;民的1%左右是丙型肝炎病毒携&#24102;者。和B型肝炎相比，垂直感染或&#19982;配偶的性交等而&#20256;染的可能性&#36739;低，但慢性化&#39057;率更高(大&#32422;80%)。&#31579;&#36873;&#26816;&#26597;做HCV抗&#20307;&#26816;&#26597;，HCV抗&#20307;&#20026;&#38451;性，意味着感染了C型肝炎病毒，因此不意味着具有防御力。感染初期是&#38452;性，所以&#21457;&#29616;症&#29366;后&#36807;了15&#20010;星期左右后，才能&#20174;血液&#26816;&#27979;出。HCV抗&#20307;&#26816;&#26597;&#24182;非是&#30830;&#35786;&#26816;&#26597;，因此HCV抗&#20307;&#20026;&#38451;性&#26102;，&#24212;&#35813;&#36827;行&#26816;&#26597;C型病毒的HCV RNA&#26816;&#26597;。
					

				



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->



		<!-- page  15 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<? h(10); ?>
	<p15>				
					<h5><b> AFP(肝癌&#26816;&#26597;)</b></h5>

					<br> &#23646;于胎&#20799;蛋白之一的AFP主要以&#36739;高的&#27987;度存在于胎&#20799;的血&#28165;和羊水等的&#20307;液，出生18&#20010;月以后&#24320;始在血液中微量存在。因此，少&#20799;及成人的血&#28165;AFP上升，可以&#24576;疑肝&#32454;胞癌、生殖系&#32479;&#32959;瘤、胃&#32928;道癌。有慢性肝炎、肝硬&#21464;等的&#38451;性疾病&#26102;，也&#20250;增加。孕期是正常地增加。
 增加&#26102;&#24576;疑的疾病 - 肝母&#32454;胞瘤、肝&#32454;胞癌、&#36716;移性肝癌、肝硬&#21464;、慢性肝炎、&#24576;孕后期等。



<br>肝功能&#26816;&#26597;&#32508;合判&#26029;
<br>  上述&#26816;&#26597;&#39033;目&#23646;于一般的肝功能&#26816;&#26597;，是需要&#35786;&#30103;或&#20307;&#26816;&#26102;&#36827;行的重要的&#26816;&#26597;。除了肝&#33039;以外，其他人&#20307;器官&#21457;生&#24322;常&#26102;也&#20250;出&#29616;&#24322;常&#20540;。因此&#20026;了&#36827;行适&#24403;的判&#26029;，需要&#32508;合性地解&#37322;所有的&#26816;&#26597;。肝病可以按照病&#24577;&#21306;分&#20026;以下&#20960;&#31181;。

<div style="margin-left: 1em;">

 第一，有因&#20026;病毒或&#33647;&#21058;等而使肝&#32454;胞&#25439;&#20260;的情&#20917;。肝&#32454;胞受&#25439;
后，肝&#32454;胞&#20869;的各&#31181;&#37238;&#20250;流入血液中，因此血液的ALT、 AST、GGT等&#27979;定&#20540;&#20250;上升。

<br> 第二，&#32966;石、&#32959;瘤、&#33647;&#21058;等，&#32966;汁的排出渠道&#21457;生障碍，&#20174;而&#23548;致&#40644;疸的出&#29616;。此&#26102;，&#32966;&#32418;素、ALP、GGT、LAP等的&#27979;定&#20540;&#20250;上升。
<br>  第三，因&#20026;肝硬&#21464;和肝癌，肝功能受到&#24191;范&#22260;的障碍，代&#35874;功能受到抑制。此&#26102;，在肝&#33039;合成的白蛋白、&#32966;固醇、CHE、血液凝固因子等&#20250;&#20943;少。
<br>  第四，患有慢性肝炎和肝硬&#21464;等的慢性疾病，球蛋白的生成&#20250;容易出&#29616;&#24322;常。&#32467;果，血&#28165;伽&#39532;球蛋白或免疫球蛋白的&#25968;&#20540;&#21464;高，&#33014;&#20307;反&#24212;有&#21457;生&#24322;常。



和上面的&#20869;容一&#26679;，肝病按照各病&#24577;有特定的&#26816;&#26597;所&#35265;，因此需要&#32508;合性地判&#26029;肝功能&#26816;&#26597;，才能正&#30830;&#30830;&#35748;病&#24577;。&#36824;有，&#26816;&#26597;&#25968;&#20540;的&#24322;常程度&#20250;有助于了解病情的&#20005;重程度、&#36827;展程度和治&#30103;效果等。
</div>

					<? h(20); ?>
					<h5><b>超&#22768;波&#26816;&#26597;</b></h5>

					<br>猫&#22836;&#40560;或海豚通&#36807;&#21457;生超&#22768;波的方式&#36827;行&#23545;&#35805;。超&#22768;波具有&#36739;高的&#39057;&#24102;，一般人是无法感&#24212;。&#23558;超&#22768;波射在人&#20307;，接&#35302;人&#20307;各器官后，&#32463;反射、吸收、曲折等的&#36807;程，&#20250;再次返回到&#21457;射点。此&#26102;&#20250;用探&#38024;收回反射波后分析，然后使用于&#20020;床&#35786;&#26029;。超&#22768;波&#26816;&#26597;&#23545;人&#20307;无害&#22788;，孕&#22919;可以通&#36807;超&#22768;波&#36827;行&#19982;&#22919;&#20135;科有&#20851;的&#26816;&#26597;。而且，&#19982;&#30005;&#33041;&#26029;&#23618;&#26816;&#26597;或磁共振成象等相比，价格低廉，&#26816;&#26597;方法&#31616;&#21333;，&#22242;&#20307;&#36827;行&#20307;&#26816;&#26102;也能快速&#36827;行&#26816;&#26597;，因此使用在&#24191;范&#22260;的&#20020;床&#35786;&#26029;治&#30103;方面。

<br><br>&#26816;&#26597;前准&#22791;事&#39033;
<br>&nbsp;&nbsp;1) 上腹部&#26816;&#26597;

<div style="margin-left: 1em;">
&#26816;&#26597;&#24403;天不得吃早&#39277;，一般是在上午&#36827;行。&#25668;取食物，&#32966;囊&#20250;&#32553;小，或者胃壁看似&#36739;厚，因此&#38590;以&#37492;&#21035;病&#24577;。用餐后或下午消化管&#20250;&#21457;生大量的&#27668;&#20307;，因此&#38590;以&#35266;察&#33008;&#33039;或&#32966;囊。&#26816;&#26597;前避免&#25668;取&#20250;&#32553;小&#32966;囊的牛&#22902;、&#21654;&#21857;&#22902;油、&#22902;昔等。


<br>2) 下腹部&#26816;&#26597;
<br>
膀胱&#31215;&#28385;小便&#26102;才能&#36827;行&#26816;&#26597;，因此早晨大便后需要&#24971;尿。

</div>


<br>腹部超&#22768;波 
<div style="margin-left: 1em;">

 不&#20165;能&#35266;察肝&#33039;、&#32966;道、&#33008;&#33039;、&#32958;&#33039;、脾&#33039;等的&#23454;&#36136;器官，&#36824;能&#35266;察血管、&#32454;&#32966;管以及&#33008;腺管。
<br>  &#9830; 肝&#33039; - 肝囊&#32959;、脂肪肝、肝硬&#21464;、肝血管瘤、肝&#32454;胞癌、慢性肝疾病等
<br> &#9830; &#32966;道及&#32966;囊 - &#32966;囊息肉及&#32467;石、&#32966;管&#32467;石、&#32966;囊炎（急性、慢性）、&#32966;囊腺肌症、&#32966;囊癌
<br> &#9830; &#33008;&#33039; - 囊&#32959;（假性囊&#32959;、&#21333;&#32431;囊&#32959;）、&#33008;&#33039;炎（急性、慢性）、&#33008;&#33039;癌
<br> &#9830; &#32958;&#33039; &#8211; &#32958;囊&#32959;、&#32958;&#31215;水、血管平滑肌脂肪瘤、&#32958;&#33039;及尿道&#32467;石的&#36741;助&#35786;&#26029;、
&#32958;功能衰竭（急性、慢性）
<br> &#9830; 脾&#33039; - 脾囊&#32959;、脾&#32959;大、血管瘤、&#38041;化、&#36716;移性脾&#32959;瘤
</div>
				</p15>



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->


		<!-- page  16 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<div class="table_list_01">
				<? h(20); ?>
					< <?=tr_cn("간기능검사", $tr_check)?> >
					<br><? h(10); ?>
					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("총단백", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Total_Protein])?> </td>
							<td align=center> <?=$esti_check["Total_Protein"]?> </td>
							<td align=center> </td>
							<td align=center><?=$data_esti[Total_Protein]?></td>
						</tr>

						
						<tr>
							<td align=center> <?=tr_cn("알부민", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Albumin])?> </td>
							<td align=center> <?=$esti_check["Albumin"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[Albumin]?></td>
						</tr>



						<tr>
							<td align=center> <?=tr_cn("글로부린", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Globulin_])?> </td>
							<td align=center> <?=$esti_check["Globulin_"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[Globulin_]?></td>
						</tr>


<!--
						<tr>
							<td align=center> <?=tr_cn("A/G비율", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[A_GRatio_])?> </td>
							<td align=center> <?=$esti_check["A_GRatio_"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[A_GRatio_]?></td>
						</tr>
-->


						<tr>
							<td align=center> <?=tr_cn("총빌리루빈", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[TBilirubin])?> </td>
							<td align=center> <?=$esti_check["TBilirubin"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[TBilirubin]?></td>
						</tr>



						<tr>
							<td align=center> <?=tr_cn("직접빌리루빈", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[DBilirubin])?> </td>
							<td align=center> <?=$esti_check["DBilirubin"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[DBilirubin]?></td>
						</tr>



						<tr>
							<td align=center> <?=tr_cn("간접빌리루빈", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[BilirubinINDIR_])?> </td>
							<td align=center> <?=$esti_check["BilirubinINDIR_"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[BilirubinINDIR_]?></td>
						</tr>



						<tr>
							<td align=center> <?=tr_cn("AST(SGOT)", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[SGOT_AST_])?> </td>
							<td align=center> <?=$esti_check["SGOT_AST_"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[SGOT_AST_]?></td>
						</tr>



						<tr>
							<td align=center> <?=tr_cn("ALT(SGPT)", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[SGPT_ALT_])?> </td>
							<td align=center> <?=$esti_check["SGPT_ALT_"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[SGPT_ALT_]?></td>
						</tr>



						<tr>
							<td align=center> <?=tr_cn("GGT(r-GTP)", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[r_GTP])?> </td>
							<td align=center> <?=$esti_check["r_GTP"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[r_GTP]?></td>
						</tr>



						<tr>
							<td align=center> <?=tr_cn("ALP", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Alkphosphat])?> </td>
							<td align=center> <?=$esti_check[Alkphosphat]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[Alkphosphat]?></td>
						</tr>



						

					</table>

					<br><? h(20); ?>
					< <?=tr_cn("간암검사", $tr_check)?> >
					<br>
					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("AFP(간암검사)", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[AFP_CLIA_])?> </td>
							<td align=center> <?=$esti_check["AFP_CLIA_"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[AFP_CLIA_]?> </td>
						</tr>
					</table>
					
					<br><? h(20); ?>
					< <?=tr_cn("간염검사", $tr_check)?> >
					<br>
					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>
<!--
						<tr>
							<td align=center> <?=tr_cn("A형간염", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[HAVIgG])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center><?=$data_esti[HAVIgG]?></td>
						</tr>
-->
						<tr>
							<td align=center> <?=tr_cn("B형간염 항원", $tr_check)?> </td>
							<td align=center><?=tr_cn( $data[HBsAg])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center>  <?=$data_esti[HBsAg]?></td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("B형간염 항체", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[HBsAb])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center>  <?=$data_esti[HBsAb]?></td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("C형간염", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[HCV_Ab])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center>  <?=tr_cn($data_esti[HCV_Ab])?></td>
						</tr>
					</table>


					<br><? h(20); ?>
					< <?=tr_cn("복부초음파", $tr_check)?> >
					<br>
					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("상복부초음파", $tr_check)?> </td>
							<td align=center><?=tr_cn( $data[상복부초음파])?> </td>
							<td align=center> </td>
						</tr>

						
					</table>

					
				
				</div>

				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->

<!------------------ 2016 0922 수정 -------------------------->
<!------------------------------------------------------------>
	


		

		


<!-- page  20 / 19---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4>&#32958;尿路&#26816;&#26597;（泌尿系&#32479;&#26816;&#26597;）</h4> <!-- 신장요로검사(비뇨기계검사) -->

<p15>
				&#32958;&#33039;是形成尿液的器官，位于腹腔后上部，上&#36798;胸12椎&#20307;，下至第3腰椎，&#21452;&#32958;位于脊柱&#20004;&#20391;。&#32958;&#33039;具有&#35843;&#33410;人&#20307;&#20307;液和血液、排泄代&#35874;&#20135;物，&#21442;&#19982;造血等作用。在&#32958;&#33039;生成的尿液通&#36807;&#36755;尿管&#20648;存在膀胱&#20869;，膀胱的尿量&#36798;到一定程度就&#20250;向大&#33041;&#21457;出信息，沿尿道排到&#20307;外。
<br>
<br><h5>肌&#37200; (Creatinine)</h5>
<br>肌&#37200;和尿素&#27694;一&#26679;，是蛋白&#36136;代&#35874;&#20135;物之一。尿素&#27694;&#20250;受到&#36807;量&#25668;取食物蛋白&#36136;、胃&#32928;道出血等&#32958;&#33039;以外因素的影&#21709;，但肌&#37200;主要&#19982;&#32958;&#33039;功能有&#20851;，因此更加适合&#26816;&#26597;&#32958;&#33039;。肌&#37200;通&#36807;&#32958;小球&#36807;&#28388;后，不&#20250;再次被&#32958;小管吸收，而是直接排出到&#20307;外。因此&#32958;&#33039;的排泄功能降低或流向&#32958;&#33039;的血流量&#20943;少，肌&#37200;的血液&#27987;度就&#20250;增加。
<br>&#32958;功能不全、&#32958;功能衰竭、充血性心&#33039;衰竭、肢端肥大症、肌肉疾病(肌肉萎&#32553;或多&#21457;性肌炎)&#26102;，&#35813;成分&#20250;增加。肌&#33829;&#20859;不良、尿崩症、甲&#29366;腺功能低下、孕期，&#35813;成分&#20250;&#20943;少。
<br>
<br><h5>&#32958;小球&#36807;&#28388;率</h5>
<br>&#32958;小球是&#28388;&#36807;血液中代&#35874;&#20135;物和水分的&#32958;&#33039;&#20869;&#36807;&#28388;&#35013;置。&#32958;小球&#28388;&#36807;率的定&#20041;&#20026;&#32958;&#33039;在一定&#26102;&#38388;&#20869;完全去除特定物&#36136;&#26102;的血&#27974;容量。此&#39033;&#26816;&#26597;是&#35780;价&#32958;功能及&#32958;小球疾病的重要指&#26631;。&#27979;量&#32958;小球&#28388;&#36807;率的主要指&#26631;是肌&#37200;。因此，&#20020;床上肌&#37200;&#28165;除率和&#32958;小球&#28388;&#36807;率具有相同的意&#20041;。
<br>孕期或糖尿病初期、&#20005;重的&#36816;&#21160;&#26102;&#32958;小球&#28388;&#36807;率&#20250;升高，&#32958;小球炎、&#32958;&#33039;功能衰竭、充血性心&#33039;衰竭、尿路&#38381;&#38145;&#26102;降低。
<br>
<br><h5>尿常&#35268;</h5>
<br>人&#20204;&#25668;取的水分在大&#32928;吸收，通&#36807;血液&#36755;送到&#32958;&#33039;而生成尿液。尿液除了&#23558;&#20307;&#20869;生成的尿素、肌&#37200;等代&#35874;&#20135;物排出之外，在人&#20307;患病&#26102;漏出的葡萄糖、蛋白&#36136;、&#32500;生素、激素、&#38048;、&#38078;、血&#32454;胞、尿路系&#32454;胞等各&#31181;物&#36136;一同排出。&#32958;&#33039;，&#36755;尿管、膀胱、尿道任一部位&#21457;生&#24322;常，尿量或成分就&#20250;&#21457;生&#21464;化。糖尿病、高血&#21387;、骨髓瘤、白血病、&#33014;原病患者，尿液&#26816;&#26597;呈&#29616;&#24322;常。尿液&#26816;&#26597;比&#36739;&#31616;&#21333;，无痛，在短&#26102;&#38388;&#20869;可以得到&#32467;果，&#20026;&#35786;&#26029;疾病提供有效的依据。<br>
尿糖&#8211;是&#37492;&#21035;有无糖代&#35874;疾病的&#31579;&#36873;&#26816;&#26597;。尿糖&#38451;性可&#20026;血糖&#27987;度升高引起，或&#20026;&#32958;&#33039;&#32958;小管重吸收功能低下所致。如果有高血糖，尿糖&#20250;出&#29616;&#38451;性反&#24212;，可以是I型糖尿病和II型糖尿病、&#33008;腺疾病、&#20869;分泌疾病、中&#26530;神&#32463;功能障碍、重症肝病、心肌梗塞&#21457;作后、肥&#32982;等。血糖&#25968;&#20540;正常，但尿糖&#20026;&#38451;性，可能&#20026;&#24576;孕、重金&#23646;中毒、&#32958;性糖尿。
尿&#32966;&#32418;素&#8211;尿&#32966;&#32418;素&#38451;性，意味着直接&#32966;&#32418;素的增加。梗阻性&#40644;疸&#26102;呈&#38451;性，在恢&#22797;期比肝&#32966;系疾病恢&#22797;正常前就可呈&#38452;性。
尿&#37230;&#8211;在糖尿病、&#39269;&#39295;、&#36807;度的&#36816;&#21160;、&#21457;&#28909;&#26102;，脂肪&#32452;&#32455;的游&#31163;脂肪酸增加，肝的&#37230;生成量就&#20250;增加。&#37230;&#20307;是脂肪的分解&#20135;物。&#37230;&#20307;增加的疾病&#31216;之&#20026;&#37230;症。&#37230;症意味着比糖消耗更多的脂&#36136;。糖尿病患者在做血&#28165;&#23398;&#26816;&#26597;和尿&#37230;&#20307;&#24182;行&#26816;&#26597;&#26102;，若&#37230;&#20307;&#20026;&#38452;性就意味着血糖&#35843;&#33410;得比&#36739;好
尿比重&#8211;慢性&#32958;炎或尿崩症患者的尿比重降低。&#33073;水、糖尿、&#38745;&#33033;&#20869;注入造影&#21058;&#26102;，尿比重增加。 
<br>	尿酸度&#8211;尿液一般是酸性，但&#24182;非所有的&#30897;性尿都&#20026;病&#21464;所致，多次新&#40092;尿呈&#30897;性意味着患有膀胱炎或保存在膀胱&#20869;的尿素已在&#20307;&#20869;分解。尿蛋白&#8211;在正常人的尿液中无法&#26816;&#27979;出。只有在急、慢性&#32958;炎、&#32958;&#32467;核、重金&#23646;中毒症等疾病&#26102;，才能&#26816;出。
				
				

</p15>				



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->


	<!-- page  21 / 20---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->
				<? h(10); ?>
				
	
血尿&#8211;尿&#28508;血反&#24212;是用化&#23398;方法&#26816;&#27979;用肉眼不能&#37492;&#21035;的尿液微量&#32418;&#32454;胞和血&#32418;蛋白的&#26816;&#26597;。大部分的&#32958;&#33039;疾病和&#36755;尿管、膀胱、尿道的各&#31181;疾病均可&#35265;血尿。但有&#26102;可&#20026;&#38452;性，因此需要反&#22797;&#26816;&#26597;。
尿白&#32454;胞&#8211;正常人的尿液可含少量白&#32454;胞。但尿液的白&#32454;胞增多，就&#31216;之&#20026;&#33043;尿。用&#26174;微&#38236;&#35266;察&#33043;尿，可&#21457;&#29616;&#24456;多白&#32454;胞和&#32454;菌。&#20026;了&#30830;定尿液的白&#32454;胞，要&#31163;心分&#31163;尿液后，用&#26174;微&#38236;&#35266;察。
尿&#32966;素原&#8211;患有&#32966;汁无法&#36827;入&#32928;道&#20869;的&#32966;道梗阻性疾病&#26102;，&#35813;成分&#20250;&#20943;少。患有溶血性&#36139;血等&#32966;汁生成色素增多的疾病&#26102;，&#35813;成分&#20250;增加。
<br>&#20122;硝酸&#30416;&#8211;尿液排泄的硝酸&#30416;被&#32454;菌&#36824;原&#20026;&#20122;硝酸&#30416;，因此在&#35786;&#26029;泌尿系&#32479;是否感染&#32454;菌&#26102;，&#20250;&#27979;量&#20122;硝酸&#30416;含量。

<br><? h(20); ?>
				< <?=tr_cn("신장기능", $tr_check)?><?=tr_cn("검사", $tr_check)?> >
					<br>
				<div class="table_list_01 table_list_01_10">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("Creatinine", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Creatinine])?> </td>
							<td align=center> <?=$esti_check["Creatinine"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["Creatinine"]?> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("BUN", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[BUN])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["BUN"]?></td>
						</tr>
					</table>


					

					<? h(20); ?>
					< <?=tr_cn("신장초음파검사", $tr_check)?> >
					<br><? h(10); ?>


					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("신장초음파검사", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[KidneySONO_신장_])?> </td>
							<td align=center>&nbsp; </td>
						</tr>
					

					</table>

					<? h(20); ?>
					< <?=tr_cn("신장검사", $tr_check)?> >
					<br><? h(10); ?>


					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("요당", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Glucose_U_])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["Glucose_U_"])?></td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("요빌리루빈", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Bilirubin])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["Bilirubin"])?></td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("요케톤", $tr_check)?> </td>
							<td align=center><?=tr_cn( $data[KetoneBodies])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center><?=tr_cn($data_esti["KetoneBodies"])?> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("요비중", $tr_check)?> </td>
							<td align=center><?=tr_cn( $data[SpecificG])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["SpecificG"])?></td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("요산도", $tr_check)?> </td>
							<td align=center><?=tr_cn( $data[PH_U_])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center><?=tr_cn($data_esti["PH_U_"])?> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("요단백", $tr_check)?> </td>
							<td align=center><?=tr_cn( $data[Protein_U_])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["Protein_U_"])?></td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("요적혈구", $tr_check)?> </td>
							<td align=center><?=tr_cn( $data[Blood_U_])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["Blood_U_"])?></td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("요백혈구", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[WBC_U_])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center><?=tr_cn($data_esti["WBC_U_"])?></td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("유로빌리노겐", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Urobilinogen])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["Urobilinogen"])?></td>
						</tr>
						<!--
						<tr>
							<td align=center> <?=tr_cn("아질산염", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Nitrite])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["Nitrite"])?></td>
						</tr>
						-->

						<tr>
							<td align=center> <?=tr_cn("요잠혈", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[요잠혈])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["요잠혈"])?></td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("백혈구", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Nitrite])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["Nitrite"])?></td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("질산염", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[질산염])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["질산염"])?></td>
						</tr>

						
						<tr>
							<td align=center> <?=tr_cn("박테리아(소변)", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[박테리아_소변_])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["박테리아_소변_"])?></td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("편평상피(소변)", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[편평상피_소변_])?> </td>
							<td align=center> </td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["편평상피_소변_"])?></td>
						</tr>


					</table>
				
				</div>



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->


		

		<!-- page 23 / 22 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4>循 &#29615; 系 &#32479;</h4> <!--순 환 기 계 -->


人的心&#33039;如本人的拳&#22836;大，位于&#27178;膈之上，&#20004;肺之&#38388;略偏左。心&#33039;向人&#20307;各器官供&#24212;血液&#20869;的&#33829;&#20859;和&#27687;&#27668;，是&#32500;持人&#20307;功能不可缺少的器官。

					<? h(20); ?>
					
					<h5><b><?=tr_cn("혈압", $tr_check)?></b></h5>

<br>	人&#31867;的心&#33039;通&#36807;每一分&#38047;大&#32422;50－100次的收&#32553;和舒&#24352;&#36816;&#21160;，&#23558;血液中的&#33829;&#20859;和&#27687;&#27668;等&#36755;送到人&#20307;各部位。此&#26102;&#39034;着血管流&#21160;的血液&#21387;力就是血&#21387;。在上臂部套上袖套后，用&#27893;注入空&#27668;，&#32553;&#32039;上臂部后，抽出空&#27668;&#26102;&#27979;量血&#21387;。一般是&#27979;量左臂或右臂，但有&#26102;需要&#27979;量&#20004;臂部。&#20026;了&#27979;量正&#30830;的血&#21387;，&#24212;&#35813;在身心&#31283;定的情&#20917;下一天&#27979;量三次以上。&#27979;量最高血&#21387;(收&#32553;期血&#21387;)和最低血&#21387;(舒&#24352;期血&#21387;)后，血&#21387;高&#26102;需要治&#30103;。血&#21387;&#32500;持正常范&#22260;&#20869;，才能保&#25252;心&#33039;和&#21160;&#33033;。正常血&#21387;是120/80以下，121∼139/81∼89是正常高&#20540;，此&#26102;&#24320;始需要&#36816;&#21160;以及改善生活方式。140/90以上&#23646;于高血&#21387;，需要服用&#33647;物。尤其，患有糖尿病或&#33041;血管疾病&#26102;，需要更加&#24910;重管理血&#21387;。高血&#21387;&#20250;&#23548;致心&#33039;和&#32958;&#33039;疾病。&#24403;&#33041;血管有&#36739;弱的部位，&#20250;因&#33041;出血等&#33041;血管疾病而&#20007;失性命或&#32456;生因&#27531;疾而受痛苦。&#36816;&#21160;或&#21387;力、服用&#33647;物等的各&#31181;因素&#20250;使血&#21387;波&#21160;，因此&#24576;疑有高血&#21387;&#26102;，&#24212;&#35813;在身心&#31283;定的情&#20917;下&#27979;量血&#21387;后，用平均血&#21387;&#26469;判&#26029;是否有高血&#21387;。			




				<? h(10); ?>	
					< 高血&#21387;&#35786;&#26029;&#26631;准(18&#23681;以上的成人) ><br>
					
					<div class="table_list_02 table_list_01_7 ">
					<table width="100%" border="0">
						<tr>
							<th> 分&#31867; </th>
							<th> 收&#32553;期血&#21387;(mmHg) </th>
							<th> 舒&#24352;期血&#21387;(mmHg) </th>
						</tr>
						<tr>
							<td align=center>正常血&#21387; </td>
							<td align=center> 120以下</td>
							<td align=center>80以下 </td>
						</tr>
						<tr>
							<td align=center> 高血&#21387;正常高&#20540;</td>
							<td align=center> 120~139</td>
							<td align=center>80~89 </td>
						</tr>
						<tr>
							<td align=center>高血&#21387;1期(&#36731;度) </td>
							<td align=center> 140~159</td>
							<td align=center> 90~99</td>
						</tr>
						<tr>
							<td align=center>高血&#21387;2期(中度)</td>
							<td align=center> 160~179</td>
							<td align=center> 100~109</td>
						</tr>
						<tr>
							<td align=center>高血&#21387;3期(重度) </td>
							<td align=center> 180~209</td>
							<td align=center> 110~119</td>
						</tr>
						<tr>
							<td align=center>高血&#21387;4期(高重度) </td>
							<td align=center>201以上 </td>
							<td align=center> 120以上</td>
						</tr>
					</table>
					</div>

<? h(20); ?>

					<h5><b><?=tr_cn("심전도 검사", $tr_check)?></b></h5>
<br>心&#30005;&#22270;一般略&#20889;&#20026;ECG（ElectroCardioGram）或EKG。是心&#33039;收&#32553;及舒&#24352;&#36816;&#21160;&#26102;&#21160;&#38745;&#33033;&#21457;生的心肌&#20852;&#22859;&#35825;&#23548;到&#30005;流，用&#22270;表&#26174;示心&#33039;活&#21160;&#30005;流的&#26816;&#26597;。
<br>心&#30005;&#22270;&#26816;&#26597;目的是&#35266;察健康心&#33039;的&#29366;&#24577;和反&#24212;及&#35786;&#26029;心&#32478;痛等冠&#29366;&#21160;&#33033;疾病、各&#31181;心律失常、&#30005;解&#36136;&#24322;常等，&#36824;可在&#26415;中&#30830;&#35748;心&#33039;有无&#24322;常。
<br><? h(20); ?>	
<h5><b>&#24635;&#32966;固醇(Total　Cholesterol)</b></h5>
<br>&#24635;&#32966;固醇是血液中所有脂蛋白(LDL,HDL,VLDL)所含&#32966;固醇之合。&#24635;&#32966;固醇高&#26102;，&#24212;具&#20307;&#26816;&#27979;LDL-&#32966;固醇和HDL-&#32966;固醇量，&#35266;察&#21738;一&#20010;脂蛋白的&#32966;固醇高后，&#23558;此&#35270;&#20026;治&#30103;(&#39278;食&#30103;法、&#36816;&#21160;&#30103;法、&#33647;物&#30103;法)的指&#26631;。&#32966;固醇和甘油三&#37231;、脂蛋白同&#23646;于脂肪成分，&#19982;&#39278;食生活有着&#36739;大的&#20851;系，血液&#32966;固醇&#20540;高，&#21457;生高血&#21387;、&#21160;&#33033;硬化等的&#27010;率就&#20250;高。偶&#23572;&#20250;因&#36951;&#20256;性脂&#36136;代&#35874;的&#24322;常而&#23548;致血液&#32966;固醇的增加。<br>
&#24635;&#32966;固醇&#26816;&#26597;&#32467;果&#25968;&#20540;升高，可能&#20026;&#21160;&#33033;硬化、糖尿病、甲&#29366;腺功能低下。降低&#26102;，可能&#20026;甲&#29366;腺功能亢&#36827;症、&#33829;&#20859;不良。

				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->


	

		


		<!-- page 25/24  ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<? h(20); ?>

					
				
<br>
<br><h5>HDL-&#32966;固醇，LDL-&#32966;固醇</h5>
<br>HDL-&#32966;固醇是主要&#19982;&#36733;脂蛋白A&#32467;合的&#32966;固醇，&#23427;能&#24110;助&#32966;固醇代&#35874;，其含量越高越能防止&#21160;&#33033;硬化。LDL-&#32966;固醇是&#19982;&#36733;脂蛋白B&#32467;合的&#32966;固醇，其作用&#19982;前者相反，易引起&#21160;&#33033;硬化症、心&#33041;血管疾病。
<br>HDL-&#32966;固醇可通&#36807;适&#24403;的&#36816;&#21160;和&#20307;重的&#35843;&#33410;而增加。HDL-&#32966;固醇比正常&#25968;&#20540;低，就&#20250;&#35825;&#21457;&#21160;&#33033;硬化、高血&#21387;、糖尿病、高脂血症、心肌梗塞等。
<br>LDL-&#32966;固醇比正常&#25968;&#20540;高，脂肪容易&#27785;&#31215;于血管&#20869;膜，&#20174;而&#35825;&#21457;&#21160;&#33033;硬化。
<br>
<br><h5>甘油三&#37231;(TG)</h5>
<br>是&#20307;&#20869;各&#31181;脂肪&#32452;&#32455;的主要成分，和&#20307;&#20869;能量的保存有着密切&#32852;系。大部分通&#36807;食物&#25668;取，和&#39278;食生活有着&#36739;大的&#20851;系，是比&#32966;固醇更加重要的&#23548;致&#21160;&#33033;硬化的原因。血中甘油三&#37231;增多，就&#20250;和&#32966;固醇一&#26679;成&#20026;&#21160;&#33033;硬化的危&#38505;因子，&#20174;而&#35825;&#21457;心肌梗塞。甘油三&#37231;受食物&#25668;取量和&#26102;&#38388;的影&#21709;，因此要禁食12－13小&#26102;以上后采血。
<br>甘油三&#37231;增加，可能&#20026;高甘油三&#37231;血症(家族型高脂血症)、肥&#32982;、脂肪肝、梗阻性&#40644;疸、糖尿病等，&#36824;可能&#20026;重症肝&#23454;&#36136;&#25439;&#20260;、甲&#29366;腺功能亢&#36827;症等。
				
<? h(20); ?>

					< <?=tr_cn("혈압측정", $tr_check)?> >
					<br>


					<div class="table_list_01 table_list_01_13">

					<table width="100%" border="0">
						<tr>
							<th colspan=2> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("비고", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center rowspan=2>血&#21387; </td>
							<td align=center>收&#32553;期 </td>
							<td align=center><?=tr_cn($data[혈압_고_BP])?>
 mmHg</td>
							<td align=center> mmHg</td>
							<td align=center> <?=$data_esti["혈압_고_BP"]?></td>
						</tr>

						<tr>
							<td align=center>舒&#24352;期 </td>
							<td align=center> <?=tr_cn($data[혈압_저_BP])?>
 mmHg</td>
							<td align=center> mmHg</td>
							<td align=center> <?=$data_esti["혈압_저_BP"]?></td>
						</tr>

						<tr>
							<td align=center colspan=2> 心跳次&#25968;</td>
							<td align=center> <?=tr_cn($data[심박수])?> 次/分 </td>
							<td align=center> 次/分</td>
							<td align=center> </td>
						</tr>
						<tr>
							<td align=center colspan=2>心&#30005;&#22270; </td>
							<td align=center><?=tr_cn($data[EKG_심전도_])?>
 </td>
							<td align=center> </td>
							<td align=center> </td>
						</tr>

					</table>


					<? h(30); ?>
					< <?=tr_cn("고지혈증 및 심혈관검사", $tr_check)?> >
					<br>


						<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>

						<tr>
							<td align=center> &#24635;&#32966;固醇(T. Cholesterol)</td>
							<td align=center> <?=tr_cn($data[Cholesterol])?>
</td>
							<td align=center> <?=$esti_check["Cholesterol"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["Cholesterol"]?></td>
						</tr>
						<tr>
							<td align=center>HDL-&#32966;固醇 </td>
							<td align=center> <?=tr_cn($data[HDL_Cholesterol])?>
</td>
							<td align=center> <?=$esti_check["HDL_Cholesterol"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["HDL_Cholesterol"]?> </td>
						</tr>
						<tr>
							<td align=center> LDL-&#32966;固醇</td>
							<td align=center><?=tr_cn($data[LDL_Cholesterol_])?>
 </td>
							<td align=center> <?=$esti_check["LDL_Cholesterol_"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["LDL_Cholesterol_"]?> </td>
						</tr>
						<tr>
							<td align=center> 甘油 三&#37231;(Triglyceride)</td>
							<td align=center> <?=tr_cn($data[Triglyceride])?>
</td>
							<td align=center> <?=$esti_check["Triglyceride"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["Triglyceride"]?></td>
						</tr>


					</table>


					

				
					</div>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->


		





<!-- page 34/33 -- 13p ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4>一般血液&#26816;&#26597;</h4> <!-- 一般血液&#26816;&#26597; -->

<p15>

<br>				血液是&#32500;持健康所需要的重要的液&#20307;物&#36136;。血液占据&#20307;重的十三分之一，向包括末梢血管在&#20869;的人&#20307;各器官供&#24212;&#27687;&#27668;和&#33829;&#20859;，&#24182;向&#20307;外排出新&#38472;代&#35874;&#20135;物二&#27687;化&#30899;等。
<br>血液以含有各&#31181;&#33829;&#20859;的血&#27974;和在骨髓制成的&#32418;&#32454;胞、白&#32454;胞、血小板&#32452;成。缺乏&#33829;&#20859;或出血引起的&#32418;&#32454;胞缺少症，血液&#32452;成成分中&#32418;&#32454;胞的&#32477;&#23545;量和&#27687;&#27668;搬&#36816;能力的&#20943;少，&#31216;之&#20026;&#36139;血；制造血&#32454;胞的骨髓&#21457;生病&#21464;，白&#32454;胞&#24322;常增殖就&#31216;之&#20026;白血病。

<br><br>&#36139;血占据&#32418;&#32454;胞大&#32422;98%的血&#32418;蛋白搬&#36816;的&#27687;&#27668;供&#24212;量有着&#36739;深的&#20851;系。
<br>&#32418;&#32454;胞大部分是在骨髓制成，&#23551;命&#32422;&#20026;120天，完成自己的使命后&#20250;在脾&#33039;破&#22351;。
<br>&#36139;血&#20250;因&#20026;血&#32418;蛋白的&#24322;常、&#32418;&#32454;胞的&#25439;失等而&#21457;生。
<br>&#36139;血大&#20307;分&#20026;缺&#38081;或&#38081;成分利用障碍、缺少&#32418;&#32454;胞&#32452;成成分、出血引起的&#32418;&#32454;胞的&#25439;失、&#32418;&#32454;胞容易破&#22351;等四&#20010;&#31867;型。其中最常&#35265;的原因是血液的&#20002;失引起的&#36139;血，&#36825;&#31181;&#36139;血&#32463;常&#20250;&#21457;生在&#32463;期的女性。

<br><br>男性是胃炎或胃&#28291;&#30113;等消化道出血&#20026;主要原因。血液的&#25439;失引起的&#36139;血最&#32456;&#20250;成&#20026;缺&#38081;性&#36139;血的原因，因此缺&#38081;性&#36139;血重要的原因是出血，其次是&#38081;&#25668;取不足。
<br>此外，&#32418;&#32454;胞功能障碍引起的&#24694;性&#36139;血、免疫系&#32479;的&#24322;常、&#32958;盂&#32958;炎等的慢性感染、&#39118;&#28287;性&#20851;&#33410;炎等的慢性炎症、乳腺癌或肺癌等的&#24694;性&#32959;瘤也&#20250;&#23548;致&#36139;血。

<br><br> 白&#32454;胞&#8211;白&#32454;胞是主要&#36127;&#36131;免疫功能的血&#32454;胞，按照形&#29366;和功能分&#20026;嗜中性粒、淋巴&#32454;胞、&#21333;核&#32454;胞、嗜酸性粒&#32454;胞、嗜&#30897;性粒&#32454;胞。
<br>&#32418;&#32454;胞&#8211;&#32418;&#32454;胞是&#19982;搬&#36816;&#27687;&#27668;的作用有&#20851;的&#32454;胞。&#32418;&#32454;胞&#25968;和血色素量&#24182;非&#20026;&#20005;格的&#32447;性&#20851;系。&#20026;了掌握有无&#36139;血或&#32418;&#32454;胞增多症以及&#32418;&#32454;胞增多程度，需要同&#26102;&#27979;量血色素。
<br>血色素&#8211;血色素是&#32418;&#32454;胞的主要成分，起着搬&#36816;&#27687;&#27668;和二&#27687;化&#30899;的作用。姿&#21183;和肌肉活&#21160;量&#20250;&#23545;&#26816;&#26597;&#32467;果造成影&#21709;，通常立位或坐位的&#25968;&#20540;比&#21351;位&#26102;要高，&#21478;，肌肉活&#21160;量增加&#26102;其&#25968;&#20540;也&#20250;升高。&#28165;晨最高，夜&#38388;最低，平均差&#24322;大&#32422;是8%左右。
<br><br>&#32418;&#32454;胞指&#25968;(MCV,MCH,MCHC)&#8211;&#32418;&#32454;胞指&#25968;是掌握&#32418;&#32454;胞、血色素、血&#32454;胞&#21387;&#31215;相&#20851;&#20851;系，正&#30830;&#26174;示&#32418;&#32454;胞&#29366;&#24577;的指&#26631;。
  <br>

</p15>	
<? h(20); ?>
				
					
					<div class="table_list_01 ">

					
					</div>



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->


	<!-- page ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->
					<br>
				<div class="table_list_01">
				< <?=tr_cn("일반혈액검사", $tr_check)?> >
					<br>
				<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>

						<tr>
							<td align=center>白血球 </td>
							<td align=center><?=tr_cn($data[WBC])?>
 </td>
							<td align=center> <?=$esti_check["WBC"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["WBC"]?></td>
						</tr>
						


						<tr>
							<td align=center> <?=tr_cn("호중구", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[호중구]")?>
							</td>
							<td align=center> <?=$esti_check["호중구"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["호중구"]?></td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("림프절", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[림프절]")?>
							</td>
							<td align=center> <?=$esti_check["림프절"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["림프절"]?></td>
						</tr>


						<tr>
							<td align=center> <?=tr_cn("Mono", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[Monocyte]")?>
							</td>
							<td align=center> <?=$esti_check["Monocyte"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["Monocyte"]?> </td>
						</tr>


						<tr>
							<td align=center> <?=tr_cn("Eosin", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn(" $data[Eosinophil]")?>
							</td>
							<td align=center> <?=$esti_check["Eosinophil"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["Eosinophil"]?> </td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("Baso", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[Basophil]")?>
							</td>
							<td align=center> <?=$esti_check["Basophil"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["Basophil"]?></td>
						</tr>

						<tr>
							<td align=center>&#32418;血球 </td>
							<td align=center><?=tr_cn($data[RBC])?>
 </td>
							<td align=center> <?=$esti_check["RBC"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["RBC"]?></td>
						</tr>
						
						<tr>
							<td align=center> 血色素</td>
							<td align=center> <?=tr_cn($data[Hemoglobin])?>
</td>
							<td align=center> <?=$esti_check["Hemoglobin"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["Hemoglobin"]?></td>
						</tr>


						<tr>
							<td align=center> <?=tr_cn("헤마토크리트", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[HCT]")?>
							</td>
							<td align=center> <?=$esti_check["HCT"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["HCT"]?> </td>
						</tr>
						<tr>
							<td align=center>MCV </td>
							<td align=center><?=tr_cn($data[MCV])?>
						 </td>
							<td align=center><?=$esti_check["MCV"]?> </td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["MCV"]?></td>
						</tr>

						<tr>
							<td align=center>MCH </td>
							<td align=center><?=tr_cn($data[MCH])?>
							 </td>
							<td align=center> <?=$esti_check["MCH"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["MCH"]?></td>
						</tr>
						<tr>
							<td align=center> MCHC</td>
							<td align=center><?=tr_cn($data[MCHC])?>
							 </td>
							<td align=center> <?=$esti_check["MCHC"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["MCHC"]?></td>
						</tr>

						
						

						

						<tr>
							<td align=center> <?=tr_cn("RDW", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[RDW]")?>
							</td>
							<td align=center><?=$esti_check["RDW"]?> </td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["RDW"]?></td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("PDW", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[PDW]")?>
							</td>
							<td align=center> <?=$esti_check["PDW"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["PDW"]?></td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("PCT", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[pct]")?>
							</td>
							<td align=center> <?=$esti_check["pct"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["pct"]?></td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("Platelets", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[Platelet]")?>
							</td>
							<td align=center> <?=$esti_check["Platelet"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["Platelet"]?></td>
						</tr>

						<!--
						<tr>
							<td align=center> <?=tr_cn("MPV", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[MPV]")?>
							</td>
							<td align=center> <?=$esti_check["MPV"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["MPV"]?></td>
						</tr>
						-->

						<tr>
							<td align=center> <?=tr_cn("ESR", $tr_check)?></td>
							<td align=center> 
									<?=tr_cn("$data[ESR]")?>
							</td>
							<td align=center> <?=$esti_check["ESR"]?></td>
							<td align=center> </td>
							<td align=center> <?=$data_esti["ESR"]?></td>
						</tr>

						





					</table>


<?= h(30); ?>
<  <?=tr_cn("혈액형검사", $tr_check)?> >
					<br>
					
					

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center>ABO<?=tr_cn("혈액형", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[ABO혈액형])?>
 </td>
							<td align=center> <?=$esti_check["ABO혈액형"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["ABO혈액형"]?></td>
						</tr>
						<tr>
							<td align=center>RH<?=tr_cn("혈액형", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[RH혈액형])?>
 </td>
							<td align=center> <?=$esti_check["RH혈액형"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["RH혈액형"]?></td>
						</tr>
						


					</table>

				</div>
				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->


<!---start--------------- 2016 0922 수정 -------------------------->
<!---start--------------------------------------------------------->

	<!-- page  18 / 17---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->
				
				<h4> &#33008; &#33039; 及 糖 尿 </h4> <!-- 췌 장 과 당 뇨 -->

					<? h(10); ?>
					
					&#33008;&#33039;是位于胃后面的&#38271;形分泌器官。&#33008;&#33039;分泌消化器官需要的消化液，&#36824;分泌人&#20307;需要的荷&#23572;蒙。&#33008;&#33039;生成分解脂肪、&#30899;水化合物、蛋白&#36136;的消化&#37238;，在小&#32928;用分泌&#20026;消化液。&#33008;&#33039;&#36824;向血液分泌&#33008;&#23707;素和&#33008;增血糖素，&#35843;整血糖。&#33008;&#33039;的功能大&#20307;&#21306;分&#20026;&#20004;&#31181;。一&#20010;是生成可以消化&#25668;取食物的消化&#37238;的外分泌&#32447;功能，&#21478;外一&#20010;是分泌可以&#32500;持血糖的&#33008;&#23707;素的&#20869;分泌功能。因此&#33008;&#33039;&#21457;生炎症，就&#20250;出&#29616;各&#31181;症&#29366;。&#33008;&#33039;炎或&#33008;&#33039;癌等&#33008;&#33039;疾病&#19982;&#25668;取&#36807;多的酒精或高脂肪食物、&#32966;石症等有&#36739;深的&#20851;系。



					

					<? h(20); ?>


					<h5><b><?=tr_cn("혈당", $tr_check)?>(Glucose)</b></h5>
					
<br>血糖是用生物&#20307;的能源&#32500;持生命的必不可少的物&#36136;。用餐后或社&#21306;糖分后，血糖&#20250;增加相&#24403;大的量，&#36807;了&#20004;&#20010;小&#26102;酒&#20250;恢&#22797;正常范&#22260;。&#36807;多的血糖&#20250;在肝&#33039;或肌肉以糖原保存，必要&#26102;&#20250;&#36824;原后使用&#20026;能源。血糖是通&#36807;&#33008;&#23707;素、&#33008;高血糖素等的荷&#23572;蒙&#35843;&#33410;，&#36825;&#20010;&#36807;程&#21457;生&#24322;常，就&#20250;&#21457;生高血糖或低血糖。糖尿病是高血糖&#20026;最常&#35265;的原因，空腹&#26816;&#26597;血糖是&#35786;&#26029;糖尿病的最基本的&#26816;&#26597;。空腹&#27979;量的血糖&#20004;次以上&#20026;126mg/dL&#26102;，&#31216;之&#20026;“糖耐量&#24322;常”，是&#36827;展位糖尿病的前一&#38454;段。&#36825;一&#26102;期通&#36807;&#35843;&#33410;&#20307;重或&#39278;食&#30103;法等，可以防止或延&#36831;糖尿病的&#21457;生。空腹血糖&#26816;&#26597;必&#39035;要禁食6~8&#20010;小&#26102;后&#36827;行。
<br>  糖尿病、糖耐量&#24322;常、甲&#29366;腺功能亢&#36827;症、&#33008;&#33039;受&#25439;疾病、&#20869;分泌障碍、&#36807;多的&#21387;力&#20250;使血糖增加。肝障碍、&#33008;&#23707;素&#36807;量症等&#20250;使血糖降低。

					<? h(20); ?>


					<h5><b><?=tr_cn("식후 2시간 혈당", $tr_check)?></b></h5>
<br>餐后&#20004;小&#26102;血糖的&#27979;量是&#35786;&#26029;糖尿病、糖耐量&#24322;常或治&#30103;糖尿病患者&#26102;，&#20026;了了解血糖&#35843;&#33410;能力而&#36827;行的&#26816;&#26597;。餐后好&#20004;小&#26102;血糖在200mg/dL以上，就能&#35786;&#26029;&#20026;糖尿病，如果是140~200mg/dL，可以&#35786;&#26029;&#20026;糖耐量&#24322;常。糖尿病、&#32958;功能衰竭、&#36807;量服用阿司匹林&#26102;&#20250;增加，有溶血性&#36139;血或低蛋白血症&#26102;&#20250;&#20943;少。
					
				
					<br>

				<? h(20); ?>
					
					<h5><b><?=tr_cn("당화단백", $tr_check)?></b></h5>

 <br> 糖基化蛋白是血液&#20869;的多余葡萄糖&#19982;白蛋白&#32467;合而形成，主要反映最近2~3&#20010;星期的血
糖&#35843;&#33410;。因此，具有比糖化血&#32418;蛋白更加迅速得知血糖&#35843;&#33410;失&#36133;或通&#36807;治&#30103;的改善等&#32467;果的&#20248;点，因此&#19982;糖化血&#32418;蛋白一同使用&#20026;血糖&#35843;&#33410;指&#26631;。
 &#24182;且，&#23646;于糖尿病&#26816;&#26597;的血糖&#26816;&#26597;或尿糖&#26816;&#26597;&#19982;&#25668;取的食物有密切的&#20851;系。
<br>  但糖基化蛋白是&#36825;&#31181;&#20851;系比&#36739;少，因此适合&#36319;踪&#26816;&#26597;糖尿病患者。
  但&#23545;和&#32958;病&#32508;合症、肝硬&#21464;一&#26679;蛋白&#27987;度低或急性期炎症一&#26679;蛋白&#27987;度急&#21095;&#21464;化的患者
&#26469;&#35762;&#23454;效性比&#36739;低。

<? h(20); ?>


					<h5><b><?=tr_cn("당화 혈색소", $tr_check)?></b></h5>

<br>  糖化血&#32418;蛋白是血&#32418;蛋白的一&#20010;部分&#19982;葡萄糖&#32467;合而形成。
  糖化血&#32418;蛋白的&#27987;度&#19982;&#32418;血球的&#23551;命有着&#32039;密地&#20851;系。
  血糖越高，糖化血&#32418;蛋白的&#27987;度就&#20250;越高。考&#34385;&#32418;血球&#23551;命&#26102;，糖化血&#32418;蛋白的&#27987;度是
最近6~8&#20010;星期的&#32508;合血糖&#29366;&#24577;。
 不受&#36816;&#21160;或食物&#25668;取的影&#21709;，因此使用&#20026;&#35843;&#33410;&#35780;价血糖的指&#26631;。
  一般糖尿病患者最理想的血糖&#35843;&#33410;目&#26631;是糖化血&#32418;蛋白&#27987;度&#32500;持7%以下。
  糖尿病患者的糖化血&#32418;蛋白&#20250;增加。					
				
					<br>

				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->




		<!-- page  19 /18 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				
					
					<? h(30); ?>
					< <?=tr_cn("혈당관련검사", $tr_check)?> >
					<br>


				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>
					<!--
						<tr>
							<td align=center> <?=tr_cn("아밀라제", $tr_check)?> </td>
							<td align=center><?=tr_cn( $data[Amylase])?> </td>
							<td align=center> <?=$esti_check["Amylase"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[Amylase]?> </td>
						</tr>
					-->
						
						<tr>
							<td align=center> <?=tr_cn("혈당", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Glucose])?> </td>
							<td align=center> <?=$esti_check["Glucose"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[Glucose]?> </td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("당화혈색소", $tr_check)?> </td>
								<td align=center><?=tr_cn($data[HbA1C])?> </td>
							<td align=center> <?=$esti_check["HbA1C"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti[HbA1C]?> </td>
						</tr>
					</table>


					<br>
					<? h(30); ?>
					< <?=tr_cn("복부초음파검사:췌장", $tr_check)?> >
					<br>

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("췌장초음파검사", $tr_check)?> </td>
							<td align=center><?=tr_cn( $data[PancreasSONO_췌장_])?> </td>
							<td align=center> </td>
						</tr>
					</table>


					<? h(30); ?>
					< <?=tr_cn("췌장암검사", $tr_check)?> >
					<br>

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("ca19-9", $tr_check)?> </td>
							<td align=center><?=tr_cn( $data[ca19-9])?> </td>
							<td align=center> </td>
							<td align=center><?=$data_esti['ca19-9']?> </td>
						</tr>
					</table>

				
				</div>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->

<!-- end---------------- 2016 0922 수정 -------------------------->
<!-- end---------------------------------------------------------->




	<!-- page   유방 관련  ---------------------------- ------------------------------------------->
		<?
		if($data[Mammogram_유방촬영_] || $data[BreastSONO_유방_])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!--순 환 기 계 -->
				<? h(10); ?>

				<h5> - 乳 房 &#26816; &#26597;;  </h5>

<br>乳房是指男性和女性的左右&#20004;&#20010;胸部。乳房在解剖&#23398;上&#24182;非是生殖器官，但分娩后分泌母乳或在性行&#20026;方面起着重要的功能，因此可以包括&#20026;生殖器官。不管是男性&#36824;是女性，乳房都具有性方面的意&#20041;。尤其&#23545;女性&#26469;&#35762;，乳房完成&#20307;型，不&#20165;象征着女性的美&#20029;，而且是&#20915;定穿衣形&#24577;的重要因素。在&#36807;去，&#38889;&#22269;女性的乳癌&#21457;生率非常少，但&#38543;着生活方式的西方化，其比率逐&#28176;在增高。
<br><br>

				乳腺癌
<br>乳腺癌是女性最常&#35265;的&#24694;性&#32959;瘤之一。 乳腺癌是家族性的, 如有一位近&#20146;患乳腺癌，&#21017;患病的危&#38505;性增加&#20960;倍。 
有些人患乳腺癌&#39118;&#38505;高，比如&#35828;，&#32463;常&#25668;取比&#36739;高&#28909;量食物、高脂肪或高&#21160;物性脂肪的女性，&#36807;于肥&#32982;的女性，初次月&#32463;&#36739;早或者&#32477;&#32463;&#36739;&#26202;女性，未生育或者&#26202;育女性。
<br>
<br>症&#29366;
<br>早期乳腺癌&#27809;有感&#35273;到不适症&#29366;，以后，可&#35302;及&#34453;豆大小的&#32959;&#22359;。 乳腺外形改&#21464;， 可&#35265;&#32959;&#22359;&#22788;皮&#32932;隆起，有的局部皮&#32932;呈橘皮&#29366;，甚至水&#32959;、&#21464;色、&#28287;疹&#26679;改&#21464;等。
甚至 病情&#24456;&#20005;重，感&#35273;不到任何疼痛。
					
					<br>

					<? h(30); ?>
					<h5><b><?=tr_cn("유방촬영", $tr_check)?></b></h5>

<br>通&#36807;&#35813;&#26816;&#26597;可以早期&#37492;&#21035;和&#35786;&#26029;乳房的&#32467;&#33410;或&#32959;瘤及其他疾病。可&#35266;察&#32959;瘤的尺寸、形&#29366;、表皮尺寸、乳腺&#25193;&#24352;、微&#32454;&#38041;化等。尤其，乳房有凝&#22359;或&#30105;&#30249;，或乳房皮&#32932;萎 &#32553;而凹陷，或乳&#22836;凹陷或有分泌物&#26102;，必&#39035;要&#36827;行乳房X&#32447;&#26816;&#26597;，&#30830;&#35748;有无&#32959;瘤。乳房X&#32447;&#26816;&#26597;可以&#25214;出&#38041;化病&#21464;，&#36824;容易掌握乳房全面&#32467;&#26500;的非正常或不&#23545;&#31216;病&#21464;，因此其重要性更是得到了&#20851;注。

					<? h(30); ?>
					<h5><b><?=tr_cn("유방초음파", $tr_check)?></b></h5>
<br>&#36825;是适合能用手摸出&#30105;&#30249;或有血性乳&#22836;分泌症&#29366;的女性、30&#23681;以下的年&#36731;女性、孕期或哺乳期女性的&#26816;&#26597;方法。乳房超&#22768;波&#23646;于&#26029;&#23618;&#25195;描，&#20943;少了&#32467;&#26500;物重&#21472;&#29616;象，有助于&#35780;价&#38590;以包括在&#25195;描的病&#21464;部位和腋&#31389;部以及&#36739;深&#22788;的病&#21464;，&#36824;有助于&#35825;&#23548;病&#21464;的活&#26816;。尤其，&#25195;描&#26415;的敏感度&#20943;少的密集乳房，作&#20026;乳癌&#31579;&#36873;&#26816;&#26597;，起着重要的作用。
				
					<br>
					<? h(20); ?>

					<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("유방촬영", $tr_check)?> </td>
							<td align=center><?=tr_cn("$data[Mammogram_유방촬영_]")?> </td>
							<td align=center> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("유방초음파", $tr_check)?> </td>
							<td align=center><?=tr_cn("$data[BreastSONO_유방_]")?> </td>
							<td align=center> </td>
						</tr>
					</table>
				</div>
			

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data[복부지방율Waisthipratio])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!--순 환 기 계 -->
				<? h(10); ?>

				<h5> - &#20307;成分&#26816;&#26597;  </h5>

<br>		&#32452;成人&#20307;的主要成分有水、蛋白&#36136;、无机&#30416;等，&#36825;些成分之合就是&#20307;重。健康&#26102;，各成分形成均衡，患病&#26102;，&#36825;些成分就&#20250;失衡。就是&#35828;，&#20307;脂肪&#21464;多而形成肥&#32982;，缺少蛋白&#36136;而&#21457;生&#33829;&#20859;不良，&#32454;胞外液增加而&#23548;致浮&#32959;，缺少无机&#30416;而&#21457;生骨&#36136;疏松症。
<br>通&#36807;&#20307;成分&#26816;&#26597;，可以&#26816;&#26597;身&#20307;&#21457;育程度和肥&#32982;程度，而且能&#39044;先&#35786;&#26029;&#24182;&#39044;防相&#20851;疾病。
<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("체성분검사", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data[복부지방율Waisthipratio])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
			

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data[LungCT_흉부_xxxxxxxx])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4>  追加&#26816;&#26597; </h4> <!-- 흉부컴퓨터 촬영 -->
				<? h(10); ?>

				<h5>  - 胸部CT&#26816;&#26597;  </h5>


<br>CT是&#23558;人&#20307;放入有X-&#32447;&#21457;生&#35013;置的&#22278;形大型器械&#20869;&#36827;行的&#26816;&#26597;，不同于&#21333;&#32431;的X-&#32447;&#26816;&#26597;，可以&#33719;取人&#20307;&#27178;截面的影像，&#20943;少了&#32452;&#32455;&#32467;&#26500;之&#38388;的重&#21472;影&#21709;，可以更加&#28165;&#26224;地&#35266;察病&#21464;。&#36825;是一般&#24576;疑某一器官法神病&#21464;&#26102;，&#20026;了精密&#26816;&#26597;而&#36827;行的最基本的&#26816;&#26597;。
			
				<? h(20); ?>

				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("흉부컴퓨터촬영", $tr_check)?>  </td>
							<td align=center> <?=tr_cn("$data[LungCT_흉부_]")?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				
				
				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["폐활량진단PFTest11"]) //== 201608 추가
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!--폐기능검사 -->
				<? h(10); ?>

				<h5>  肺功能&#26816;&#26597; </h5>


<br>肺是向人&#20307;各部位供&#24212;&#27687;&#27668;的器官，和心&#33039;一&#26679;是人&#20307;最重要的器官之一。
<br>吸&#27668;&#26102;吸入&#27687;&#27668;，呼&#27668;&#26102;排放二&#27687;化&#30899;。通&#36807;分析肺活量和肺容&#31215;、最大通&#27668;量、最大用力呼&#27668;量等，可以&#37492;&#21035;肺功能。
<br>肺功能&#26816;&#26597;&#23646;于通&#27668;功能&#26816;&#26597;，是利用肺活量&#35745;&#35780;价肺功能。
			
				<? h(20); ?>
			
	
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("폐기능검사", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data[폐활량진단PFTest])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				
				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["위장조영촬영"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 위장조영검사 -->
				<? h(10); ?>

				<h5>  - 胃&#32928;道&#26816;&#26597;  </h5>

<br>
<br>胃是在人&#20307;消化器官中肌肉最&#21457;&#36798;和血管最&#20016;富的器官。
<br>平&#26102;胃&#20250;&#32553;小，但食物&#39034;着食管移&#21160;到胃部&#26102;，胃壁就&#20250;舒&#24352;，可&#26242;&#26102;保存食物，&#24182;分泌各&#31181;消化&#37238;和胃酸，&#20174;而起到消化和&#26432;菌的作用。
<br>
<br>胃&#32928;造影&#26816;&#26597;
<br>胃&#32928;造影&#26816;&#26597;是服用无法透射放射&#32447;的造影&#21058;后，使其&#28034;抹或&#22635;充到病&#21464;&#22788;，&#35266;察有无&#28291;&#30113;、&#32959;瘤、炎症性疾病等的&#26816;&#26597;方法。胃造影&#26816;&#26597;是&#35753;患者服用含&#38049;混&#24748;液，用&#26174;示器<br>&#35266;察和&#26816;&#26597;胃和十二指&#32928;的形&#29366;及病&#21464;。&#26816;&#26597;大&#32422;需要15~20分&#38047;，&#26816;&#26597;前一天的&#26202;9&#26102;以后要禁食(包括水、&#33647;、&#39278;料、烟等)。
			
				<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("위장조영검사", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["위장조영촬영"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->


		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["Endoscopy_위내시경_"] || $data["위수면내시경"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 위내시경 -->
				<? h(10); ?>

				<h5>  - 胃, 大&#32928;&#26816;&#26597;  </h5>


<br>  利用特殊用具用肉眼&#35266;察身&#20307;&#20869;部器官&#21457;生的病&#21464;的&#26816;&#26597;&#31216;之&#20026;&#20869;&#31397;&#38236;&#26816;&#26597;
&#20026;了&#37492;&#21035;&#32928;胃病的&#20869;&#31397;&#38236;一般是使用&#32420;&#32500;&#38236;的&#20869;&#31397;&#38236;。&#32420;&#32500;&#38236;比&#36739;&#32454;，容易&#21534;咽，敏感的患者可以注入一些&#33647;物后，在睡眠&#29366;&#24577;下&#36827;行，&#36825;&#31181;方式&#31216;之&#20026;睡眠胃&#38236;。
<br>&#20869;&#31397;&#38236;&#26816;&#26597;&#36824;使用&#20026;生&#26816;的&#30830;&#35748;&#35786;&#26029;，可采取&#24576;疑有癌&#32454;胞的部分&#32452;&#32455;。
如果是小癌&#32454;胞，可以用激光&#28903;掉。如果腹部感到&#38590;受、上腹&#32960;、&#21589;吐或消化不良，必&#39035;要&#36827;行胃&#38236;&#26816;&#26597;。胃癌初期一般不&#20250;有特&#21035;的症&#29366;，因此最好是每年做一次胃&#38236;&#26816;&#26597;。
<br>&#20307;&#26816;者前一天&#31616;&#21333;吃&#26202;&#39277;后，要禁食和禁烟，痰不得&#21534;咽，要吐出&#26469;，而且要&#32500;持平&#38745;的心情。通&#36807;胃&#38236;&#26816;&#26597;可以&#21457;&#29616;胃炎、胃&#31964;&#28866;、十二指&#32928;炎、胃&#28291;&#30113;、十二指&#32928;&#28291;&#30113;、&#32928;上皮化生、胃癌等。

<br>
<br>1. 胃癌
<br>按照胃癌侵犯胃壁的深&#27973;,被分&#20026;早期胃癌&#19982;&#36827;展期胃癌。
<br>- 早期胃癌是指局限而深度不超&#36807;粘膜下&#23618;的胃癌。
<br>- &#36827;展期胃癌深度超&#36807;粘膜下&#23618;，已侵入肌&#23618;者&#31216;中期，已侵及&#27974;膜&#23618;或&#27974;膜&#23618;外&#32452;&#32455;者&#31216;&#26202;期。
<br>早期胃癌手&#26415;后的治愈率可&#36798;90&#65130;。
<br>


<br>2.大&#32928;癌
<br>原因 ： 西方化的&#39278;食&#20064;&#24815;、&#36807;多的&#25668;取了&#21160;物性脂肪以及蛋白&#36136;、 &#36951;&#20256;因素都是&#23548;致大&#32928;癌的原因。
<br>&#36825;些因素容易引起大&#32928;癌。 
	<br>1）有大&#32928;息肉史的人，大部分大&#32928;癌是&#20174;小的癌前病&#21464;&#21457;展而&#26469;的 
	<br>2）有大&#32928;癌症家族史的人 
	<br>3）有&#28291;&#30113;性&#32467;&#32928;炎性疾病史的人。
<br>通&#36807;大&#32928;&#20869;&#35270;&#38236;在精密度&#26816;&#27979;中，&#24635;是容易被&#21457;&#29616;。
<br>

<br>大&#32928;&#20869;&#31397;&#38236;分&#20026;可到&#36798;乙&#29366;&#32467;&#32928;的乙&#29366;&#32467;&#32928;&#38236;和能&#26816;&#26597;整&#20010;大&#32928;及回&#22330;末端的大&#32928;&#20869;&#31397;&#38236;&#26816;&#26597;。
<br>乙&#29366;&#32467;&#32928;&#38236;可&#26816;&#26597;包括直&#32928;在&#20869;的大&#32928;下端四分之一到三分之一&#22788;，因此只要灌&#32928;就能&#36827;行。大&#32928;癌或&#32959;瘤的60%左右&#21457;生在直&#32928;和乙&#29366;&#32467;&#32928;。
<br>&#28291;&#30113;性大&#32928;炎也主要&#21457;生在直&#32928;及其上端，因此乙&#29366;&#32467;&#32928;&#38236;&#26816;&#26597;非常有用。在大&#32928;下端&#21457;生&#24322;常，大&#32928;上端&#21457;生病&#21464;的可能性&#36739;高，因此通&#36807;乙&#29366;&#32467;&#32928;&#38236;&#26816;&#26597;&#21457;&#29616;了病&#21464;，需要&#36827;行全面大&#32928;&#20869;&#31397;&#38236;&#26816;&#26597;。除了特殊情&#20917;，最好是&#36827;行全面大&#32928;&#20869;&#31397;&#38236;&#26816;&#26597;。
<br>大&#32928;&#20869;&#31397;&#38236;&#26816;&#26597;可以和胃&#38236;&#26816;&#26597;一&#26679;，&#21457;&#29616;&#32959;瘤后立&#21363;切除或切取，因此可以&#33719;得&#35786;&#26029;、治&#30103;以及&#39044;防大&#32928;癌的一箭三雕的效果。
			
				


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->




		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["대장수면내시경"] || $data["대장내시경Colonoscopy"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 대장내시경 -->
				<? h(10); ?>

				<!--<h5>  - 大&#32928;&#20869;&#31397;&#38236; </h5>-->


				<div class="table_list_01">

				<? h(20); ?>
				< <?=tr_cn("위암", $tr_check)?><?=tr_cn("검사", $tr_check)?> >
				<br>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("위내시경", $tr_check)?>   </td>
							<td align=center> <?=tr_cn($data["Endoscopy_위내시경_"])?> <?=tr_cn($data["위수면내시경"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>

				<? h(40); ?>
				< <?=tr_cn("대장암", $tr_check)?><?=tr_cn("검사", $tr_check)?> >
				<br>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>
						<?
							if($data[대장수면내시경])
							{
						?>
							<tr>
								<td align=center> <?=tr_cn("대장내시경", $tr_check)?>  </td>
								<td align=center> <?=tr_cn($data[대장수면내시경])?></td>
								<td align=center>&nbsp;  </td>
								<td align=center>&nbsp;  </td>
							</tr>
						<?	
							}
							else if($data[대장내시경Colonoscopy])
							{
						?>

							<tr>
								<td align=center> <?=tr_cn("대장내시경Colonoscopy", $tr_check)?>  </td>
								<td align=center> <?=tr_cn($data[대장내시경Colonoscopy])?></td>
								<td align=center>&nbsp;  </td>
								<td align=center>&nbsp;  </td>
							</tr>
						<?
							}
						?>


						<tr>
							<td align=center> <?=tr_cn("CEA", $tr_check)?> </td>
							<td align=center><?=tr_cn("$data[CEA]")?> </td>
							<td align=center><?=$esti_check["CEA"]?> </td>

							<td align=center> <?=$data_esti["CEA"]?></td>
						</tr>
					</table>

				</div>
				

				

				</div>
				

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->




		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["CarotidSONO_경동맥_"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 경동맥초음파 -->
				<? h(10); ?>

				<h5> - &#39048;&#21160;&#33033;超&#22768;  </h5>


<br>流入&#33041;部的血液80%通&#36807;&#39048;&#21160;&#33033;，&#39048;&#21160;&#33033;是&#39048;部重要的血管。
<br>利用超&#22768;&#26816;&#26597;&#27979;量&#39048;&#21160;&#33033;壁的厚度、&#39048;&#21160;&#33033;&#20869;血流速度及血流方向和每小&#26102;血流量等，可以&#26816;&#27979;出&#39048;&#21160;&#33033;&#29421;窄、血栓、血流&#24322;常等。
<br>在代&#35874;&#20135;物的&#27785;&#31215;而&#21464;&#29421;窄的血管中，血液速度&#20250;增加，因此通&#36807;&#35813;&#26816;&#26597;可以&#35780;价&#29421;窄程度。&#39048;&#21160;&#33033;超&#22768;&#26816;&#26597;除了&#39048;&#21160;&#33033;以外，&#36824;能&#26816;&#26597;其他血管的&#29366;&#24577;。
<br>因此适合了解&#21160;&#33033;硬化以及疾病&#36827;展&#36807;程。患有糖尿病、高血&#21387;、高&#32966;固醇血症等的50&#23681;以上的成人&#20250;&#21457;&#29616;&#24322;常所&#35265;，因此有高血&#21387;或糖尿病的50&#23681;以上成人，&#24212;&#35813;定期做&#39048;&#21160;&#33033;超&#22768;&#26816;&#26597;，以&#39044;防&#33041;中&#39118;等的血管疾病。
			
				<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("경동맥초음파", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["CarotidSONO_경동맥_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["HeartCT심장_SmartScore_"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 심장컴퓨터단층촬영-->
				<? h(10); ?>

				<h5>  - 心&#33039;CT&#26816;&#26597; </h5>

<br>心&#33039;CT&#26816;&#26597;可以按是否使用造影&#21058;分&#20026;平&#25195;和增强。
<br>１）心&#33039;&#38041;化CT&#26816;&#26597;
&#21160;&#33033;粥&#26679;斑&#22359;是急性冠&#29366;&#21160;&#33033;&#32508;合症的主要原因，在其&#36827;展的&#36807;程中通常&#24102;有&#38041;化。因此冠&#29366;&#21160;&#33033;的&#38041;化意味着有斑&#22359;。&#36825;&#31181;&#38041;化程度&#19982;冠&#29366;&#21160;&#33033;的斑&#22359;<br>量具有&#32447;性&#20851;系。无需&#23545;比增强，可&#36873;用心&#30005;&#38376;控技&#26415;。
<br>２）心&#33039;血管CT&#26816;&#26597;
<br>用于&#26816;&#26597;冠&#29366;&#21160;&#33033;疾病，&#21363;，引起心&#32478;痛和心肌梗塞的三&#20010;主要冠&#29366;&#21160;&#33033;。&#26816;&#26597;&#26102;，&#23558;造影&#21058;注入血管&#20869;，可更加仔&#32454;地&#35266;察心&#33039;的血管。
			
				<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("심장컴퓨터단층촬영", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["HeartCT심장_SmartScore_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["EchocardioSONO_심장_"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!--심장초음파검사 -->
				<? h(10); ?>

				<h5>  - 心&#33039;超&#22768;波  </h5>


<br>&#36825;是&#35780;价心&#33039;&#32467;&#26500;和功能的最好的方法，通&#36807;&#35813;&#26816;&#26597;，可一眼掌握&#32467;&#26500;和功能。
<br>可以&#35780;价&#32467;&#26500;部分、&#36807;去的心肌梗塞痕迹或心肌梗塞引起的左心室功能衰竭、心&#33039;病等。
<br>&#36824;能掌握心房和心室的大小及瓣膜的&#24322;常、畸形、逆流等，用血流量和速度&#35786;&#26029;疾病。

			
				<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("심장초음파검사", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["EchocardioSONO_심장_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["FreeT3"] || $data["FreeT4"] || $data["TSH"] )
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 갑상선 -->
				<? h(10); ?>

				<h5> - 甲&#29366;腺&#26816;&#26597;  </h5>

<br>甲&#29366;腺位于&#39048;部前端，位于&#39048;部前中央凸出部分(甲&#29366;腺&#36719;骨)的2－3ｃm以下，&#23646;于人&#20307;最大的&#20869;分泌腺。甲&#29366;腺主要合成和&#20648;存甲&#29366;腺激素，必要&#26102;&#23558;甲&#29366;腺激素&#37322;放到血液中。甲&#29366;腺激素是人&#20307;不可缺少的物&#36136;，促&#36827;人&#20307;代&#35874;&#36807;程，&#32500;持恒定的&#20307;&#28201;，&#36824;具有&#24110;助胎&#20799;和新生&#20799;大&#33041;和骨&#39612;&#21457;育成&#38271;的作用。
<br>

<br>FT₄(游&#31163;四&#30872;甲腺原&#27688;酸)
<br>T₃在外周由T₄&#36716;&#25442;而&#26469;，相反T₄是100%在甲&#29366;腺生成，因此直接反&#24212;甲&#29366;腺激素的合成能力。T₄和T₃一&#26679;在血&#27974;中以&#32467;合的形式存在，因此&#27979;量游&#31163;型FT₄更有助于&#35780;价甲&#29366;腺功能。&#26816;&#26597;&#32467;果&#25968;&#20540;升高，可能&#20026;甲&#29366;腺功能亢&#36827;症、&#24576;孕、急性肝炎等。&#25968;&#20540;降低，可能&#20026;甲&#29366;腺功能低下症、&#32958;病&#32508;合症等。
<br>
<br>TSH(甲&#29366;腺刺激激素)
<br>TSH是&#33041;垂&#20307;分泌的激素，&#35813;成分刺激甲&#29366;腺分泌T₃、T₄。TSH是通&#36807;下丘&#33041;分泌的TRH&#26469;&#35843;&#33410;。TSH分泌&#20943;少，TRH分泌就&#20250;增加，&#20174;而促&#36827;TSH的分泌。甲&#29366;腺分泌的T₃或T₄&#20250;使垂&#20307;的TSH分泌&#20943;少。T₃、T₄作用于下丘&#33041;，抑制TRH分泌。因此血液中的TSH比&#36739;敏感地反&#24212;下丘&#33041;-垂&#20307;-甲&#29366;腺的&#35843;&#33410;机制是否正常起作用，是甲&#29366;腺功能&#26816;&#26597;方面最重要的&#26816;&#26597;。原&#21457;性甲&#29366;腺功能低下症、完全摘除甲&#29366;腺、有缺&#30872;症&#29366;等&#26102;，&#25968;&#20540;&#20250;升高。有原&#21457;性甲&#29366;腺功能亢&#36827;症或垂&#20307;性甲&#29366;腺功能低下症&#26102;，&#25968;&#20540;&#20250;&#21464;低。
			
				<? h(20); ?>
				< 甲&#29366;腺相&#20851;&#26816;&#26597; > <br>

				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>
						<!--
						<tr>
							<td align=center width=200>三&#30872;甲腺原&#27688;酸 </td>
							<td align=center><?=$data[FreeT3]?> </td>
							<td align=center> <?=$esti_check["FreeT3"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["FreeT3"]?></td>
						</tr>
						-->
						<tr>
							<td align=center> 游&#31163;四&#30872;甲腺原&#27688;酸</td>
							<td align=center> <?=$data[FreeT4]?></td>
							<td align=center> <?=$esti_check["FreeT4"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["FreeT4"]?></td>
						</tr>
							<tr>
							<td align=center> 甲&#29366;腺刺激激素</td>
							<td align=center> <?= $data[TSH]?></td>
							<td align=center> <?=$esti_check["TSH"]?></td>
							<td align=center> </td>
							<td align=center><?=$data_esti["TSH"]?></td>
						</tr>
					</table>


				
				</div>
				

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["ThyroidSONO_갑상선_"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 갑상선초음파 -->
				<? h(10); ?>

				<h5> - 甲&#29366;腺超&#22768;&#26816;&#26597;   </h5>

			
<br>&#36825;是&#35780;价甲&#29366;腺及周&#22260;器官形&#24577;&#24322;常的&#26816;&#26597;方法，&#23545;于甲&#29366;腺&#32467;&#33410;的&#35786;&#26029;&#20248;于其他任何&#26816;&#26597;。通&#36807;&#35813;&#26816;&#26597;可以&#35786;&#26029;甲&#29366;腺&#21457;育&#24322;常、甲&#29366;腺&#24357;漫性病&#21464;（亢&#36827;症、&#20943;退症）、甲&#29366;腺&#32467;&#33410;疾病（囊&#32959;或增生&#32467;&#33410;等）及&#24694;性&#32467;&#33410;疾病（乳&#22836;&#29366;癌和&#28388;泡&#29366;癌等）。

				<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("갑상선초음파검사", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["ThyroidSONO_갑상선_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["BrainMRI_뇌_"]  || $data["BrainMRA_뇌_"] || $data["BrainCT_뇌_"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- -->
				<? h(10); ?>

				<h5>  - &#33041;、血管及脊椎&#26816;&#26597; </h5>


<br>  &#33041;是由大量的神&#32463;&#32454;胞集合而成，是中&#26530;神&#32463;系&#32479;的器官。&#33041;在生命活&#21160;中起着重要的作用，人&#20307;各器官的所有信息都先&#27719;集在&#33041;部后，&#20174;&#33041;部再向其他各器官&#21457;出活&#21160;或&#35843;整的命令。大&#33041;&#21327;&#35843;大部分的&#21160;作和行&#21160;，&#32500;持身&#20307;恒常性。就是&#35828;，&#32500;持一定的心跳、血&#21387;、血液&#20869;&#27987;度、提&#38382;等。&#33041;有&#35748;知、感情、&#35760;&#24518;、&#23398;&#20064;等作用。

<br>
<br>&#33041;MRI
<br>  磁共振成像(MRI)是&#23558;人&#20307;放入&#20135;生磁&#22330;的&#32447;圈&#20869;，&#21457;射高&#39057;&#33033;&#20914;信&#21495;使人&#20307;各部位的&#27682;原子核&#20135;生共振后， 通&#36807;&#30005;&#33041;重&#32452;后成像的技&#26415;。
<br>&#36825;是在&#21307;&#30103;成像&#26816;&#26597;中最能表&#29616;人&#20307;解剖生理&#23398;信息的&#26816;&#26597;。&#35813;&#26816;&#26597;可以&#26816;出&#24456;小的病&#21464;，在&#33041;部、脊髓、椎&#38388;&#30424;神&#32463;根&#26816;&#26597;方面是非常重要的&#26816;&#26597;。此外，&#36824;用于&#26816;&#26597;&#20851;&#33410;、&#36719;骨、&#38887;&#24102;、肌肉等，&#20248;点在于可&#26816;&#26597;其他方法&#38590;以&#37492;&#21035;的病&#21464;和手&#26415;前后的&#23545;比&#26816;&#26597;。MRI是影像&#21307;&#23398;&#26816;&#26597;方面和超&#22768;&#26816;&#26597;一&#26679;是无害于人&#20307;的安全的&#26816;&#26597;。


<br>&#33041;MRA
<br>  &#33041;MRA(MagneticResonanceAngiography，磁共振血管造影)&#23646;于&#33041;MRI的一&#31181;，可以&#26816;&#26597;&#28165;&#26224;&#26174;示&#32420;&#32454;的&#33041;血管形&#24577;及血流&#29366;&#24577;。主要&#35786;&#26029;&#33041;梗塞、&#33041;出血等&#24576;疑有&#33041;中&#39118;的患者的血管&#24322;常。
<br>
<br>&#33041;CT
<br>  &#33041;CT是用X射&#32447;束&#23545;&#22836;部一定厚度的&#23618;面&#36827;行&#25195;描，由探&#27979;器接收透&#36807;&#35813;&#23618;面的X射&#32447;，&#36716;&#21464;&#20026;可&#35265;光后，由光&#30005;&#36716;&#25442;&#21464;&#20026;&#30005;信&#21495;，再&#32463;模&#25311;/&#25968;字&#36716;&#25442;器&#36716;&#20026;&#25968;字 。&#33041;CT&#26816;&#26597;需要的&#25195;描&#26102;&#38388;短，可&#35786;&#26029;MRI&#36739;&#38590;分辨的&#33041;出血和骨&#39612;系&#32479;&#29366;&#24577;。近年&#26469;，CT血管&#25195;描技&#26415;(CTAngiography)、三&#32500;CT(3DCT)等的&#24212;用范&#22260;&#21464;得非常&#24191;。可以&#35786;&#26029;&#33041;梗塞、&#33041;出血、&#33041;&#32959;瘤、炎症性疾病、&#33041;&#21160;&#33033;瘤、&#39045;骨骨折、&#22836;痛、睡眠障碍等。
			
				<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("뇌MRI", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["BrainMRI_뇌_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("뇌MRA", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["BrainMRA_뇌_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("뇌CT", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["BrainCT_뇌_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["C_SpineAP_Lat_요추촬영_"] || $data["C_SpineAP_Lat_경추촬영_"] || $data["CervicalCT_경추_"]  || $data["CervicaMRI_경추_"] || $data["LumbarCT_요추_"] || $data["CervicaMRI_요추_"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 척추 -->
				<? h(10); ?>

				<h5>- 脊柱   </h5>


<br>起着支撑上&#20307;&#20307;重的人&#20307;支柱作用。通&#36807;&#24367;曲和伸展&#36816;&#21160;，起着&#19982;上下肢一同完成各&#31181;&#21160;作的作用，&#24182;可保&#25252;脊髓和周&#22260;神&#32463;的脊椎神&#32463;根，同&#26102;&#36824;&#36142;存人&#20307;需要的无机&#30416;-&#38041;。
<br>正常的脊椎&#20174;&#20391;面&#35266;察&#26102;是S型，呈&#24367;曲&#29366;，&#36825;在人&#20307;&#21160;力&#23398;方面有着重要的意&#20041;。脊椎的&#32452;成是&#20174;上面&#24320;始有7&#20010;&#39048;椎、12&#20010;胸椎、5&#20010;腰椎以及臀部的&#39606;尾椎。
<br>通常，脊柱&#38388;的&#38388;&#30424;(Disc：椎&#38388;&#30424;，&#22278;&#30424;)引起的椎&#38388;&#30424;突出症是脊椎疾病中最常&#35265;的疾病。
<br>
<br>&#39048;椎后前位/&#20391;位，&#39048;椎CT
<br>&#39048;椎以7&#20010;脊椎&#32452;成。上面的2&#20010;&#39048;椎形&#29366;有些特&#21035;，被&#31216;之&#20026;非典型性&#39048;椎，下面的5&#20010;&#39048;椎是典型性&#39048;椎。第一&#39048;椎的上部有支撑&#22836;盖骨的&#20851;&#33410;面，第一&#39048;椎和第二&#39048;椎主要&#21457;生旋<br>&#36716;&#36816;&#21160;。&#39048;椎不同于其他脊椎，&#20004;&#20391;均有&#21160;&#33033;，&#36825;&#23545;&#21160;&#33033;具有供&#24212;部分大&#33041;血液的作用。通&#36807;&#35813;&#26816;&#26597;可以&#37492;&#21035;&#39048;椎有无&#24322;常和椎&#38388;&#30424;疾病。
<br>
<br>腰椎后前位/&#20391;位，腰椎CT
<br>腰椎以5&#20010;脊椎&#32452;成，向腹部方向&#24367;曲。腰椎&#20960;乎不&#21457;生旋&#36716;&#36816;&#21160;，主要按照脊椎的&#20851;&#33410;面向前后&#24367;曲。
			
				<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("경추CT", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["CervicalCT_경추_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("경추", $tr_check)?> MRI </td>
							<td align=center> <?=tr_cn($data["CervicaMRI_경추_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("경추 AP/Lat", $tr_check)?> </td>
							<td align=center><?=tr_cn($data["C_SpineAP_Lat_경추촬영_"])?></td>
							<td align=center> </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("요추CT", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["LumbarCT_요추_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("요추", $tr_check)?> MRI </td>
							<td align=center> <?=tr_cn($data["CervicaMRI_요추_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("요추 AP/Lat", $tr_check)?> </td>
							<td align=center><?=tr_cn($data["C_SpineAP_Lat_요추촬영_"])?></td>
							<td align=center> </td>
						</tr>
					</table>

				</div>
				

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["PSA_CLIA_"] || $data["ProstateSONO_전립선_"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 생식기계검사  -->
				<? h(10); ?>

				<h5>  - 生殖系&#32479;&#26816;&#26597;  </h5>

			
<br>男性 &#8211; 前列腺
<br>前列腺位于膀胱下方，大小&#20026;4x3x3cm，大&#32422;20g左右的栗子形&#29366;的&#32452;&#32455;。前列腺通&#36807;尿道&#19982;膀胱&#36830;接。因此前列腺肥大或&#21457;生炎症，就&#20250;尿&#39057;、尿急、尿痛，而且&#20250;有排尿不&#20928;感。前列腺癌有排尿障碍，&#19982;其他疾病不同的是，癌症&#26102;症&#29366;&#20250;快速&#24694;化。
<br>
<br>前列腺特&#24322;抗原(PSA)
<br>PSA主要在前列腺上皮&#32454;胞合成，因&#32452;&#32455;特&#24322;性及敏感性，用于&#35786;&#26029;前列腺癌、&#39044;&#27979;癌危&#38505;度及&#30417;&#27979;&#22797;&#21457;的&#26631;志物。&#35813;成分是&#36804;今&#20026;止&#21457;&#29616;的&#32959;瘤&#26631;志物中最&#32463;常使用的<br>&#26631;志物。患有前列腺肥大、急性前列腺炎及梗塞等&#38451;性疾病&#26102;，PSA&#20250;增加。患有前列腺癌、前列腺炎、前列腺肥大症&#26102;，&#35813;成分&#20250;增多。
				<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("PSA", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["PSA_CLIA_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				

				<? h(20); ?>


<br>前列腺超&#22768;
<br>&#36825;是&#20026;了&#30830;&#35748;包括前列腺、精囊和膀胱在&#20869;的盆腔&#20869;器官在形&#24577;方面有无&#24322;常的&#26816;&#26597;。可以&#35786;&#26029;前列腺肥大症、前列腺癌等。

				<? h(20); ?>




					<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("전립선 초음파(남)", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["ProstateSONO_전립선_"])?></td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->



		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["CA_125"] || $data["PelvisSONO_골반_"] || $data["Pap"] )
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- -->
				<? h(10); ?>

				<h5>  - 生殖系&#32479;&#26816;&#26597;  </h5>

<br>女性 - 子&#23467;和卵巢
<br>人&#31867;具有&#32500;持&#31181;族所需要的生殖器官。女性的生殖器官有&#20135;生卵子的卵巢、供卵子移&#21160;的&#36755;卵管、供受精卵&#21457;育的子&#23467;、及&#19982;&#20307;外&#36830;接的&#38452;道&#32452;成。此外，&#36824;有分泌的催乳素的哺乳器官。女性的生殖器官和哺乳器官是容易因&#32454;菌的感染而&#21457;生疾病或&#21457;生各&#31181;癌症的脆弱的器官。
<br>
<br>CA125
<br>CA-125&#23646;于高分子糖蛋白，患有卵巢癌、子&#23467;&#20869;膜癌、肺癌、&#33008;腺癌、乳腺癌、大&#32928;癌、胃&#32928;道癌&#26102;，&#35813;成分&#20250;增加，是有助于判&#26029;子&#23467;&#20869;膜癌&#39044;后的&#26631;志物。CA-125&#23545;于不能作&#20026;卵巢癌的&#31579;&#36873;&#26816;&#26597;。但&#23545;于已&#32463;&#30830;&#35786;&#20026;卵巢癌的患者，CA-125&#27987;度&#19982;卵巢癌的大小、分期及生存率有着一定相&#20851;性。
			
				<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th> <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("CA 125", $tr_check)?>  </td>
							<td align=center> <?=tr_cn($data["CA_125"])?></td>
							<td align=center>&nbsp;  </td>
							<td align=center> <?=$data_esti['CA_125']?></td>

							
						</tr>
					</table>

				</div>
				
				<? h(10); ?>

<!--
<br>子&#23467;超&#22768;，卵巢超&#22768;
<br>
<br>通&#36807;&#35813;&#26816;&#26597;可以&#30830;&#35748;包括子&#23467;、卵巢和膀胱在&#20869;的盆腔&#20869;器官在形&#24577;方面有无&#24322;常。可以&#35786;&#26029;卵巢囊&#32959;性疾病及子&#23467;肌瘤、卵巢癌、子&#23467;癌、子&#23467;&#20869;膜癌、膀胱癌等。	

			<? h(10); ?>
			
			<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("자궁 초음파(여)", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[VaginalSONO_질_])?> </td>
							<td align=center> </td>
						</tr>
					</table>

				</div>


			<? h(10); ?>

<br>			&#23467;&#39048;癌&#32454;胞&#26816;&#26597;
<br>刮取子&#23467;部位的&#32454;胞后，&#36827;行&#22270;片染色，然后用&#26174;微&#38236;&#26816;&#26597;。通&#36807;&#35813;&#26816;&#26597;方法主要&#35786;&#26029;&#23467;&#39048;炎、&#24322;型&#32454;胞、&#23467;&#39048;癌。

Pap
			<? h(10); ?>


				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("자궁경부암세포검사", $tr_check)?> </td>
							<td align=center><?=tr_cn($data[Pap])?> </td>
							<td align=center> </td>
						</tr>
					</table>

				</div>
-->

			<? h(10); ?>

				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->

		<!-- page   201608 추가 ---------------------------- ------------------------------------------->
		<?
		
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 양전자방출단층촬영 -->
				<? h(5); ?>
<!--
				<h5> <?=tr_cn("여성 질환 ", $tr_check)?><br></h5>

				乳腺癌
<br>乳腺癌是女性最常&#35265;的&#24694;性&#32959;瘤之一。 乳腺癌是家族性的, 如有一位近&#20146;患乳腺癌，&#21017;患病的危&#38505;性增加&#20960;倍。 
<br>有些人患乳腺癌&#39118;&#38505;高，比如&#35828;，&#32463;常&#25668;取比&#36739;高&#28909;量食物、高脂肪或高&#21160;物性脂肪的女性，&#36807;于肥&#32982;的女性，初次月&#32463;&#36739;早或者&#32477;&#32463;&#36739;&#26202;女性，未生育或者&#26202;育女性。
<br>
<br>症&#29366;
<br>早期乳腺癌&#27809;有感&#35273;到不适症&#29366;，以后，可&#35302;及&#34453;豆大小的&#32959;&#22359;。 乳腺外形改&#21464;， 可&#35265;&#32959;&#22359;&#22788;皮&#32932;隆起，有的局部皮<br>&#32932;呈橘皮&#29366;，甚至水&#32959;、&#21464;色、&#28287;疹&#26679;改&#21464;等
<br>甚至 病情&#24456;&#20005;重，感&#35273;不到任何疼痛。

-->

<!--				
				<? h(10); ?>
				
				<div class="table_list_01">

					
					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("유방촬영", $tr_check)?>  </td>
							<td align=center><?=tr_cn("$data[Mammogram_유방촬영_]")?> </td>
							<td align=center>&nbsp;  </td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("유방초음파", $tr_check)?>  </td>
							<td align=center><?=tr_cn("$data[BreastSONO_유방_]")?> </td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>
		

				</div>
				

				<? h(10); ?>
			-->

				<h5> <?=tr_cn("골다공증", $tr_check)?><br></h5>

<br>骨&#36136;疏松症是由于&#32477;&#32463;、老化等多&#31181;原因&#23548;致的骨密度和股&#36136;量下降、股&#20026;&#32467;&#26500;破&#22351;、造成骨脆性增加，&#20174;而容易&#21457;生骨折的全身性骨病。
<br>主要是女人&#32477;&#32463;后&#23548;致骨&#36136;疏松速度&#36739;快，到老年期遭受骨&#36136;疏松症之害的危&#38505;&#39134;速增加 。&#20174;而&#32477;&#32463;后3名&#22919;女一生中就&#20250;有1人患上骨&#36136;疏松。
<br>
<br>原因
<br>老年性骨&#36136;疏松症主要&#19982;老&#40836;化有&#20851;
<br>
<br>症&#29366;
<br>腰疼，降低身高， 活力&#20943;少，骨&#20851;&#33410;等患有各&#31181;各&#26679;的疾病。
<br>
<br>&#39044;防保健措施
<br>- &#25668;取含&#38041;&#20016;富的&#22902;制品（&#20912;淇淋、&#22902;酪、牛&#22902;、酸&#22902;）
<br>- &#25668;入富含&#32500;生素D的食物（&#40481;蛋、 沙丁&#40060;、 &#40060;肝油）
<br>- 做&#39044;防骨&#36136;疏松症的&#36816;&#21160;（走路、上台&#38454;、&#36305;步）
<br>- 戒烟，戒酒
<br>- 早&#32477;&#32463;的或者&#32477;&#32463;后骨密度&#36739;低以及罹患骨&#36136;疏松症可能性大的女性必&#39035;得&#36827;行雌激素治&#30103;。

				
				<? h(5); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th> <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("골다공증", $tr_check)?>  </td>
							<td align=center> <?=tr_cn("$data[골다공증]")?> </td>
							<td align=center>&nbsp;  </td>
							<td align=center> <?=$data_esti[골다공증]?> </td>
							
						</tr>
					</table>

				

				<? h(10); ?>

				<? h(30); ?>
					<h5><b><?=tr_cn("요추 AP/lat", $tr_check)?></b></h5>

<br>  腰椎以5&#20010;脊椎&#32452;成，向腹部方向鼓起。腰椎&#20960;乎不&#21457;生旋&#36716;&#36816;&#21160;，主要按照脊椎的&#20851;&#33410;面向前后&#24367;曲。
				
					<? h(10); ?>

					
					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>

						
						<tr>
							<td align=center> <?=tr_cn("요추 AP/Lat", $tr_check)?> </td>
							<td align=center> <?=tr_cn($data["CervicalCT_요추_"])?></td>
							<td align=center> </td>
						</tr>
						

					</table>
</div>
<!--
				<h5> <?=tr_cn("위", $tr_check)?> <?=tr_cn("대장질환", $tr_check)?> <br></h5>


				
				<? h(5); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("", $tr_check)?>  </td>
							<td align=center><?=tr_cn("$data[x]")?> </td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				

-->
				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		//}
		?>
		<!--------------------------------------- ------------------------------------------->

		<!-- page   201608 추가 ---------------------------- ------------------------------------------->
		<?
/*		
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 양전자방출단층촬영 -->
				<? h(10); ?>

		
				<h5> <?=tr_cn("위", $tr_check)?> <?=tr_cn("대장질환", $tr_check)?> <br></h5>
<br>1. 胃癌
<br>按照胃癌侵犯胃壁的深&#27973;,被分&#20026;早期胃癌&#19982;&#36827;展期胃癌。
<br>- 早期胃癌是指局限而深度不超&#36807;粘膜下&#23618;的胃癌。
<br>- &#36827;展期胃癌深度超&#36807;粘膜下&#23618;，已侵入肌&#23618;者&#31216;中期，已侵及&#27974;膜&#23618;或&#27974;膜&#23618;外&#32452;&#32455;者&#31216;&#26202;期。
<br>早期胃癌手&#26415;后的治愈率可&#36798;90&#65130;。
<br>


<br>2.大&#32928;癌
<br>原因 ： 西方化的&#39278;食&#20064;&#24815;、&#36807;多的&#25668;取了&#21160;物性脂肪以及蛋白&#36136;、 &#36951;&#20256;因素都是&#23548;致大&#32928;癌的原因。
<br>&#36825;些因素容易引起大&#32928;癌。 
	<br>1）有大&#32928;息肉史的人，大部分大&#32928;癌是&#20174;小的癌前病&#21464;&#21457;展而&#26469;的 
	<br>2）有大&#32928;癌症家族史的人 
	<br>3）有&#28291;&#30113;性&#32467;&#32928;炎性疾病史的人。
<br>通&#36807;大&#32928;&#20869;&#35270;&#38236;在精密度&#26816;&#27979;中，&#24635;是容易被&#21457;&#29616;。
<br>
<br>&#40644;&#32467;&#32928; [10%]
<br>盲&#32928;及升&#32467;&#32928; [23%]
<br>肛&#38376;。
<br>根据大&#32928;的各&#20010;部分患癌的&#21457;病率
<br>直&#32928;及S&#29366;&#32467;&#32928; [60%] 
<br>降&#32467;&#32928;[7%]


				
				<? h(10); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("위내시경", $tr_check)?>  </td>
							<td align=center><?=tr_cn("$data[Endoscopy_위내시경_]")?> </td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		//}
		?>
		<!--------------------------------------- ------------------------------------------->

<? */ /*
		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["Brain_torsoPET"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- 양전자방출단층촬영 -->
				<? h(10); ?>

				<h5> <?=tr_cn("양전자방출단층촬영", $tr_check)?><br> (PET-Positron Emission Tomography)  </h5>

<br>&#36825;是利用葡萄糖添加放射性&#27679;的&#33647;物，&#27979;量&#20307;&#20869;各&#32452;&#32455;&#32454;胞糖代&#35874;的最尖端&#26816;&#26597;方式。之前的&#30005;&#33041;&#26029;&#23618;&#26816;&#26597;或磁共振成像是按照器官及病&#21464;(癌或&#32959;&#22359;)的方式&#35786;&#26029;。但PET&#26816;&#26597;是&#35780;价癌&#32454;胞代&#35874;量，就是其活性度，因此&#21363;使是小小的癌&#32454;胞，只要&#23646;于&#24694;性癌&#32454;胞，就能正&#30830;&#26816;&#27979;出。&#36824;有PET&#26816;&#26597;&#19982;其他&#26816;&#26597;不同，可以形象化身&#20307;的全部(大&#33041;底部到下肢&#20026;止)，所以在&#37492;&#21035;人&#20307;某&#20010;部位&#20250;&#21457;生的癌症及治&#30103;后的&#22797;&#21457;率、治&#30103;效果的判&#26029;方面比&#36739;有效，近&#20960;年在&#21457;&#36798;&#22269;家也急&#21095;增加&#36825;&#31181;&#26816;&#26597;方法。PET是直接&#30830;&#35748;人&#20307;代&#35874;&#21464;化的敏感的&#26816;&#26597;方法，但&#38590;以正&#30830;掌握病&#28790;的位置。PET-CT&#20026;了克服&#36825;&#31181;缺点，&#35266;察&#32467;&#26500;方面&#21457;生&#21464;化的同&#26102;，提高了&#26816;&#26597;正&#30830;性。完善采用PET的&#20248;点和CT的&#20248;点，&#32553;短了&#26816;&#26597;&#26102;&#38388;。&#36825;是早期&#21457;&#29616;全身癌&#32454;胞、&#30830;&#35748;有无&#36716;移、正&#30830;了解病&#28790;位置的尖端精密&#35786;&#26029;方法。
<br><br>
<br><font color=blue>◈  PET-CT&#26816;&#26597;目的 </font>
<br>⊙ &#37492;&#21035;人&#20307;有无癌&#32454;胞和&#30830;&#35748;癌&#32454;胞的&#31181;&#31867;和位置。
<br>⊙ &#30830;&#35748;癌&#32454;胞是否&#36716;移。
<br>⊙ &#20915;定癌症的病期。(1期、2期、3期、4期)
<br>⊙ &#35266;察抗癌治&#30103;后的&#32467;果。(好&#36716; / &#24694;化)
<br>
<br><font color=blue>▣ &#26816;&#26597;原理(FDG&#38745;&#33033;注射)  </font>
<br>  萄糖&#23646;于人&#20307;重要的能量，活&#21160;旺盛的癌&#32454;胞&#25668;取葡萄糖的量多于正常&#32454;胞。
<br>一般其量&#20250;比正常&#32454;胞多出100倍。使用在&#26816;&#26597;的&#33647;&#21058;是葡萄糖添加&#27679;而制成的&#33647;&#21058;，癌&#32454;胞大量&#25668;取葡萄糖&#26102;，&#27679;也&#20250;被癌&#32454;胞&#25668;取后反映在成像中。			
				<? h(20); ?>
				
				<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검사항목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
						</tr>
						<tr>
							<td align=center> <?=tr_cn("양전자방출단층촬영", $tr_check)?>  </td>
							<td align=center><?=tr_cn("$data[Brain_torsoPET]")?> </td>
							<td align=center>&nbsp;  </td>
						</tr>
					</table>

				</div>
				

				<? h(10); ?>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->
<?
*/
?>

		<!-- page    ---------------------------- ------------------------------------------->
		<?
		if($data["말초혈액순환검사xxx"] ||  $data["스트레스측정xxx"])
		{
			$num ++ ; 

		?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				<h4> 追加&#26816;&#26597; </h4> <!-- -->
				<? h(10); ?>

					<h5>- STRESS TEST</h5><br>

					<div class="table_list_01">

					<table width="100%" border="0">
						<tr>
							<td > 
<br>
<br>
						<?=tr_cn("$data[스트레스측정]")?> 
<br>
<br>
							</td>
						</tr>
				</table>

				<br>
< PERIPHERAL CIRCULATION REPORT >  <br>

<table width="100%" border="0">
						<tr>
							<td >
<br>

<?=tr_cn(" $data[말초혈액순환검사]")?> 
<br>
<br>

							</td>
						</tr>
				</table>

				</div>



				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>

		<?
		}
		?>
		<!--------------------------------------- ------------------------------------------->


		
<!-- page 37/36 ---------------------------- ------------------------------------------->
			<? $num ++ ; ?>
			<div class="page page_bg_A" id="<?=$num?>">

				<div class="cont_box">
				<!----------------- 시작 -------------------------->

				
<h4>其他血液&#26816;&#26597;</h4> <!-- 기 타 혈 액 검 사 -->

&#39118;&#28287;病是血液中的尿酸增加，形成&#32467;晶&#20307;，&#35813;&#32467;晶&#20307;&#31215;在&#20851;&#33410;后引起炎症的疾病，又名“高尿酸血症”。
<br>  &#39118;&#28287;病无任何&#39044;先征兆，突然有一天脚拇指、耳&#36718;、脚腕、膝盖等&#20851;&#33410;部位出&#29616;&#21095;痛。痛症一般&#32500;持一段&#26102;&#38388;后有所好&#36716;，然后再次反&#22797;出&#29616;，如果不治&#30103;就&#20250;&#35825;&#21457;心&#33039;或&#32958;&#33039;等疾病。&#39118;&#28287;病患者的90%以上是男性，女性一般是&#38381;&#32463;期后出&#29616;。&#36825;是因&#20026;女性荷&#23572;蒙雌激素起&#39044;防尿酸累&#31215;的作用。
				
					

					<? h(30); ?>
					<h5><b><?=tr_cn("류마티스인자", $tr_check)?> (RF)</b></h5>

<br>  &#31867;&#39118;&#28287;因子&#23646;于自身抗&#20307;的一&#31181;，成人&#39118;&#28287;性&#20851;&#33410;炎患者的70%以上&#20250;&#21457;&#29616;&#35813;成分，是&#35786;&#26029;&#39118;&#28287;性&#20851;&#33410;炎的代表性的&#26816;&#26597;。但&#31867;&#39118;&#28287;因子&#24182;非只出&#29616;在&#39118;&#28287;性&#20851;&#33410;炎，健康人的大&#32422;5%也&#20250;出&#29616;&#31867;&#39118;&#28287;因子。尤其，&#38543;着年&#40836;的增&#38271;，其&#39057;率在增加，65&#23681;以上的老年人是10~20%&#20026;&#38451;性。


					


					<? h(30); ?>
					<h5><b><?=tr_cn("매독검사", $tr_check)?></b></h5>
<br>  梅毒是因&#20026;梅毒螺旋&#20307;而&#21457;生的性病。主要是通&#36807;性&#20851;系而&#20256;播，
有&#26102;&#20250;&#20174;母&#20307;&#20256;播到胎&#20799;。梅毒&#20250;引起身&#20307;器官的炎症性疾病。

					<? h(30); ?>
					<h5><b><?=tr_cn("에이즈", $tr_check)?></b></h5>
	
<br>  艾滋病因&#20026;HIV而&#21457;生。患上艾滋病后，&#20307;&#20869;的免疫功能&#20250;慢慢降低，
最&#32456;&#20250;因&#20026;&#32454;菌和病毒的感染而死亡。艾滋病是被病毒感染后，具有6&#20010;月到5~8年的&#28508;伏期，因此需要定期&#26816;&#26597;。				
					<br>
					<? h(30); ?>

					<div class="table_list_01">
					<table width="100%" border="0">
						<tr>
							<th> <?=tr_cn("검 사 항 목", $tr_check)?> </th>
							<th> <?=tr_cn("검사결과", $tr_check)?> </th>
							<th>  <?=tr_cn("판정", $tr_check)?> </th>
							<th> <?=tr_cn("이전결과", $tr_check)?> </th>
							<th>  <?=tr_cn("임상참고치", $tr_check)?> </th>
						</tr>

						
						<tr>
							<td align=center> <?=tr_cn("류마티스인자", $tr_check)?>(RF)</td>
							<td align=center><?=tr_cn("$data[RAFactor]")?> </td>
							<td align=center> <?=$esti_check["RAFactor"]?></td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["RAFactor"])?></td>
						</tr>


						<tr>
							<td align=center> <?=tr_cn("매독검사", $tr_check)?> </td>
							<td align=center><?=tr_cn("$data[VDRL_RPR_정밀]")?> </td>
							<td align=center><?=$esti_check["VDRL_RPR_정밀"]?> </td>
							<td align=center> </td>
							<td align=center><?=tr_cn($data_esti["VDRL_RPR_정밀"])?> </td>
						</tr>

						<tr>
							<td align=center> <?=tr_cn("에이즈", $tr_check)?> </td>
							<td align=center><?=tr_cn("$data[AIDS]")?> </td>
							<td align=center> <?=$esti_check["AIDS"]?></td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["AIDS"])?> </td>
						</tr>

						
<!--
						<tr>
							<td align=center> <?=tr_cn("HIV Ab", $tr_check)?> </td>
							<td align=center><?=tr_cn("$data[HCV_Ab]")?> </td>
							<td align=center> <?=$esti_check["HCV_Ab"]?></td>
							<td align=center> </td>
							<td align=center> <?=tr_cn($data_esti["HCV_Ab"])?> </td>
						</tr>

						-->

					

						


						
					</table>

					</div>


				<!----------------- 끝 ------------------------ -->
				</div>
				
				<div class="pageBox">
					<div class="pageNum"><?= $num  ?></div>
				</div>
			</div>
		<!--------------------------------------- ------------------------------------------->






		<!--=========================== 건강 정보지  ============================----------------------->
		<!-- 건강 정보지  ---------------------------- ------------------------------------------->
		<?
		$info_m = explode("/", $data[건강정보지]) ;

testing_dsp2("건강정보지 : $data[건강정보지]") ;
		$info_str  = "" ;

		$set_str = 99 ; // 한줄 기준 크기

//$mcount = count($info_m) ;


		for($i=0 ; $i < count($info_m) ; $i ++)
		{
			$info_no = $info_m[$i] ;



			$data= get_infoM($info_no) ;
			$title = $data[title] ;
			$desc = nl2br($data[desc]) ;

			$info_str .= "<h4> $title </h4>

					$desc \n\n " ;

		
		}

		if(strlen($info_str) > 10)  // 건강정보지가 있으면
		{
			
			$plus_line = 0 ;
			$arr = explode("\n", $info_str);

			for( $i =0; $i < count($arr); ++$i )
			{

				$plus_line += $ppp = floor( strlen($arr[$i]) / $set_str );
				$plus_line ++ ;

				//$test .= "plus : $plus_line ||| $ppp <br> $arr[$i]<br>" ;

				$dsp_str .= "$arr[$i] \n" ;

				if($plus_line > 47) 
				{
					
					$dsp_arr[] = $dsp_str ;

					$dsp_str = "" ;
					$plus_line = 0 ;
						
				}

			}

			$dsp_arr[] = $dsp_str ;



			for( $i =0; $i < count($dsp_arr); ++$i )
			{
	
			
		?>

		   <? $num ++ ; ?>
		   <div class="page page_bg_A" id="<?=$num?>">

			<div class="cont_box">
			<!----------------- 시작 -------------------------->

					
			<?
				
				echo "$dsp_arr[$i]" ;


				//$count = substr_count($info_str ,"\n");
				//echo "줄수는 $count 임 || 한줄은 $str_l 임 <br>" ;
				
				//echo "$info_str" ;

				//echo "$dsp_str" ;
				//echo "$test" ;
				
				/*
				$data= get_infoM($info_no) ;
				$title = $data[title] ;
				$desc = nl2br($data[desc]) ;

				echo "
					<h4> $title </h4>
					$desc 
				" ;
				*/

				
				
				
				
				
			?>

			<!----------------- 끝 ------------------------ -->
			</div>
			
			<div class="pageBox">
			 <div class="pageNum"><?= $num  ?></div>
			</div>
		   </div>
		  <!--------------------------------------- ------------------------------------------->
	

	<?		}
		}
	?>
	









		</div>
	</div>


	<!-- 다음 페이지 이동 -->
	<script>

		if(!location.hash) location = "#first_page" ;

		function gonext() 
		{
			var url = location.hash ;

			if(location.hash =="#first_page") location = "#1" ;
			else {

				var go = url.substr(1) ;
				
				go = parseInt(go) + 1 ;

				if(go >= 100) alert('page end') ;
				
				gourl = "#" + go  ;
				
				location = gourl ;
			}
		}

		function goback() 
		{
			var url = location.hash ;

			if(location.hash =="#1") location = "#first_page" ;
			else if(location.hash =="#first_page") {} 
			else {

				var go = url.substr(1) ;
				
				go = parseInt(go) - 1 ;
				
				gourl = "#" + go  ;
				
				location = gourl ;
			}
		}

	</script>

	<div class="page_control clearfix">
		<ul>
			<li>PAGES</li>
			<li><a onclick="goback();"><i class="fa fa-backward"></i></a></li>
			<li>
			
			<script> 
				var url2 = location.hash ;
				var page_num = url2.substr(1) ;
				//document.write(page_num) ;
			</script>
			
			</li>
			<!--<li><a href="./#page<?=$page_next?>"><i class="fa fa-forward"></i></a></li>-->

			<li><a onclick="gonext();"><i class="fa fa-forward"></i></a></li>

		</ul>
		<button type="button" class="btn_print" onClick="printPage()"><i class="fa fa-print"></i> PRINT</button>
		<button type="button" class="btn_print" onClick="location='./data.php?del_ses=Y'" style="margin-left: 380px;">LOGOUT</button>
	</div>
	
</div>
</body>
</html>
