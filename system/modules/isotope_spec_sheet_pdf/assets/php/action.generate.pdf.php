<?php

	/*************************************/
	/* TEST SCRIPT - GENERATE SAMPLE PDF */
	/*************************************/
	
	// mandatory to get all of our composer goodness
	require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
	
	
	
	
	// reference the Dompdf namespace
	use Dompdf\Dompdf;
	
	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$dompdf->loadHtml('<h1>hello world</h1>');
	
	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'portrait');
	
	// Render the HTML as PDF
	$dompdf->render();
	
	// Output the generated PDF to Browser
	$dompdf->stream("spec_sheet.pdf");

?>
