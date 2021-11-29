<?php 


	include("../../../../config.php");
	include("excelReport.php");
	
	$engine = new Engine();
	$excel = new excelReport();
	
	

	$data = $engine->getDataDecrypt($keys);
	
	//$excel->ReportHeader($header);
	$header = array('No.', 'Requestor Name', 'Requestor\'s Phone', 'Rider Name', 'Rider\'s Phone', 'Item Type', 'Quantity', 'Origin (From)', 'Destination (To)', 'Pickup Date & Time', 'Total (GHC)');
	
	$excel->ReportHeader($header);


	$excel->registeredData($data['data'],$data['company'],$data['person'],$data['from'],$data['to'],$data['dateprinted']);
	

	ob_end_clean();



?>