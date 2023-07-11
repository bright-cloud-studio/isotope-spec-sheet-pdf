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

    $html = "";
    $html .= '<h1>Spec Sheet</h1><br>';
    $html .= '<h2>Spec Sheet</h2><br>';
    $html .= '<h3>Spec Sheet</h3><br>';
    $html .= '<h4>Spec Sheet</h4><br>';


	$dompdf->loadHtml('<h1>Spec Sheet</h1>');
	
	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'portrait');
	
	// Render the HTML as PDF
	$dompdf->render();
	
	// Output the generated PDF to Browser
	$dompdf->stream("spec_sheet.pdf");

?>
