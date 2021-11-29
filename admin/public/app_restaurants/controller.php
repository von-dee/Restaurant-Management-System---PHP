<?php
$action= "app_restaurants\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

// $result= new app_restaurants\lists;
// $result= $result->Init();

$list= new app_restaurants\lists;
$paging= $list->Init();


include("scripts/js.php");
?>