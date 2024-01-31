<?php

    include_once $_SERVER['DOCUMENT_ROOT'] ."/_init.php";
    include_once($GP->CLS."class.conversion.php");

    $C_Conversion = new Conversion;

    ($cv_check)?  $cv_check : $cv_check = $_GET['cv_check'] ;  
    ($cv_type)?  $cv_type : $cv_type = $_GET['cv_type'] ;  
    ($cv_gubun)?  $cv_gubun : $cv_gubun = $_GET['cv_gubun'] ;  
    
    
    $args['cv_check']		= $cv_check;
    $args['cv_type']		= $cv_type;
    $args['cv_gubun']		= $cv_gubun;   
    //echo "echo:"; print_r($args); echo "<br>" ;
	
	$rst = $C_Conversion->conversion_insert($args);

	if($rst['cnt'] > 0)
	{
	//	echo "false";
		// exit();
	}
	else
	{
	//	echo "true";
		// exit();
	}

?>