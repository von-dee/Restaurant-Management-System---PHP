<?php
$action= "app_assetsmanagement\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

// $result= new app_assetsmanagement\lists;
// $result= $result->Init();

$list= new app_assetsmanagement\lists;
$paging= $list->Init();


include("scripts/js.php");
?>