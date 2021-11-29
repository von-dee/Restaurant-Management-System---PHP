<?php
$action= "app_largeorders\\".(($class_call)? $class_call :"lists"); 
$result= new $action;
$result= $result->Init(); 


$list= new app_largeorders\lists;
$paging= $list->Init();


include("scripts/js.php");
?>