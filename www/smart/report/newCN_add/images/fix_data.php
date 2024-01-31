<?


//========================= 수정사항 

if( $data[접수번호키] == "1410067165" ) $data[말초혈액순환검사] = "혈관상태?3,4단계" ;



else if( $data[접수번호키] == "1410067165" ) 
{
	$data[AIDS] = "0.06(Negative)" ;
	$data_esti["AIDS"] = "0~0.999" ;

	$data[말초혈액순환검사] = "血管&#29366;&#24577; - 3,4&#38454;段" ;

}


else if( $data[접수번호키] == "1509117018" ) 
{
	$data[AIDS] = "0.13(Negative)" ;
}

else if( $data[접수번호키] == "1509117019" ) 
{
	$data[AIDS] = " 0.07(Negative)" ;
}

else if( $data[접수번호키] == "1509117025" ) 
{
	$data[AIDS] = "0.16(Negative)" ;
}


else if( $data[접수번호키] == "1511097281" ) 
{
	$data[AIDS] = "0.20(Negative)" ;
}

else if( $data[접수번호키] == "1511107027" ) 
{
	$data[AIDS] = "0.08(Negative)" ;
}

else if( $data[접수번호키] == "1511107029" ) 
{
	$data[AIDS] = "0.11(Negative)" ;
}

//========================= 수정사항 


?>