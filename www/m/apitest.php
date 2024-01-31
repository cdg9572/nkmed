<?php

$url = "http://1.214.232.188:8070/api/v1/";
$path01 = "time_reserve";

// $data01 = array(
// 			"cust_name"	=> "홍길동",
// 			"cust_phone"	=> "01012345678",
// 			"cust_birth"	=> "19750123"
// 		);

        

$data01 = array(
            "is_doct" => 10148,
            "is_date" => "20230711",
            "is_dept" => "PM"
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
$err = curl_error($curl);
if ($err) {
  echo 'cURL Error #:' . $err;
} else {
  echo $response;
}
?>