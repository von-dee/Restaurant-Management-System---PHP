<?php
$action= "app_invoice\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 

$list= new app_invoice\lists;
$paging= $list->Init();


include("scripts/js.php");
?>