<?php 
/*
BY-SHIN - 2019-06-11
*/
error_reporting(E_ALL^E_NOTICE);
ini_set("display_errors", 1);

include "include/head.php";

define("IN_AUTH",true);
define("LAYOUT",true);
define("NEED_LOGIN",false);

$root_path = "";

include $root_path."include/common.php";
include $root_path."include/count_inc.php";
if($_SESSION['suserid']) $C_Func->go_url("/v3/");
$js->load_script("/v3/controller/js/join.js");


$tpl->define("main","join.tpl");

$tpl->assign(array(
));

include $root_path."include/footer.php";
?>

