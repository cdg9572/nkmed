<?
if($_POST["dr_idx"]) {
    //시간 보여주기
	include_once  '../_init.php';
	include_once($GP -> CLS."/class.doctor.php");	
	$C_Doctor 	= new Doctor;
	$args['dr_idx'] = $_POST['dr_idx'];
	$data = "";
	$data = $C_Doctor->Doctor_Info($args);    
	extract($data);
  
    $url = "http://1.214.232.188:8070/api/v1/";
    $path01 = "time_reserve";                                              

    // $data01 = array(
    //             "is_doct" => 10148 ,
    //             "is_date" => "$nDate" ,
    //             "is_dept" => "PM"
    //             );
    
    $data01 = array(
            "is_doct" => $_POST['dr_mcode'] ,            
            "is_dept" => $_POST['dr_mtreat_no'],
            "is_date" => $_POST["nday"]
            );       
    
    $json_data = json_encode($data01);
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => $url.$path01,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_POSTFIELDS => $json_data,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'),
    ));
    $response = curl_exec($curl);                  
    $data = json_decode($response, true);

    //echo "echo : ". print_r($data);    
    for($i=0;$i<count($data["data"]);$i++){ 
		if( substr($data['data'][$i]['reserv_time'],0,2) < "09" ) continue;

        $vTime = substr($data['data'][$i]['reserv_time'],0,2)."시 ".substr( $data['data'][$i]['reserv_time'],-2,2)."분";
		echo "<option value='".$data['data'][$i]['reserv_time']."'>".$vTime;     
    } 	    
	
}else{
//날짜 보여주기


	$dr_mtreat_no 		= $_POST["dr_mtreat_no"];
	$dr_mcode		= $_POST["dr_mcode"];
    $is_month		= $_POST["is_month"];
    
    $url = "http://1.214.232.188:8070/api/v1/";
    $path01 = "date_reserve";                                          

    $data01 = array(       
        "is_dept" => $dr_mtreat_no, //진료과코드
        "is_doct" =>  $dr_mcode,//의사코드      
        "is_month" => $is_month
    );      
    //php이용하여 202307  2023-07-01 로 바꾸기
    $is_month2 = substr($data01["is_month"],0,4)."-".substr($data01["is_month"],4,2)."-01";
    

    $json_data = json_encode($data01);
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => $url.$path01,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_POSTFIELDS => $json_data,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'),
    ));
    $response = curl_exec($curl);                  
    $data02 = json_decode($response, true);

    $data03 = "";
    for	($i=0; $i<count($data02["data"]); $i++) {			
        $data03 .=  '"' .date("Y-m-d", strtotime($data02["data"][$i])) .'"' ;
        //마지막 만 빼고 , 붙이기
        if($i != count($data02["data"])-1) $data03 .= ",";	                
    }

    //  echo "data01:<pre>"; print_r($data01); echo "</pre><br>" ;
    // echo "data02:<pre>"; print_r($data02); echo "</pre><br>" ;
    // echo "data03:<pre>"; print_r($data03); echo "</pre><br>" ;
    ?>     
    <script>
        callDatePick('online_date');

        function callDatePick(id) {            
            // 특정 날짜 배열 생성
            var enabledDates = [<?=$data03?>];
        
            var dates = $("#" + id).datepicker({
                defaultDate: '<?=$is_month2?>',
                beforeShowDay: function(date) {
                    var string = $.datepicker.formatDate('yy-mm-dd', date);
                    return [enabledDates.indexOf(string) != -1];
                },
                onSelect: function(dateText, inst) {
                // 날짜 선택시 실행할 코드                 
                        time_sel('<?=$dr_mtreat_no?>','<?=$dr_mcode?>',dateText);             
                },
                onChangeMonthYear: function(year, month, inst) {  
                    var m_month = '<?=$_POST["month"]?>';   
                    var month2 = month.toString().padStart(2, '0');
                    var is_month = year + month2;                                          
                    if (m_month > month) {  //현재달이 클릭한 달보다 크면 = 다음달 클릭
                        var datecheck = "prev";
                    } else if (m_month < month) { //현재달이 클릭한 달보다 작으면        
                        var datecheck = "next";
                    }  
                    ch_cal('<?=$dr_mtreat_no?>','<?=$dr_mcode?>',is_month,month,datecheck);                         
                 //   console.log( m_month + " / " + month + " / " +  datecheck );                                                              
                },
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
                dayNames: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
                dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
                dateFormat: 'yy-mm-dd',
                showMonthAfterYear: true,
                yearSuffix: '년'
            });
        }
    </script>
<?}?>