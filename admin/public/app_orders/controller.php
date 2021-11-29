<?php
$action= "app_orders\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 


$list= new app_orders\lists;
$paging= $list->Init();


include("scripts/js.php");
?>