<?php
	include_once  $_SERVER[DOCUMENT_ROOT].'/_init.php';
	include_once($GP -> CLS."class.filedown.php");

	$C_FileDown = new FileDownload;
	$file			= $_GET['file'];			//file ��� + file��
	$name			= $_GET['name'];			//�ٿ���� ���ϸ�
	$downview = $_GET['downview'];

	if($_GET['speed']){
		$speed		= $_GET['speed'];
	}else{
		$speed = "5";
	}

	$limit		= $_GET['limit'];
	//$file = $file . '/' . $name;

	$rst = $C_FileDown -> fDown($file, $name, $downview, $speed, $limit);
	exit;
?>