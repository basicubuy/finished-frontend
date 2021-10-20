<?php
include_once("endpoints/constant.php");
if($_SESSION['user_role'] == 'customer'){
    require_once 'inc/customer-header.php';
    require_once 'customer-dashboard.php';
}else{
    require_once("inc/pro-header.php");
    require_once("pro-dashboard.php");
}


?>




