<?php
$action= "app_menu\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

// $result= new app_menu\lists;
// $result= $result->Init();

$list= new app_menu\lists;
$paging= $list->Init();


include("scripts/js.php");
?>