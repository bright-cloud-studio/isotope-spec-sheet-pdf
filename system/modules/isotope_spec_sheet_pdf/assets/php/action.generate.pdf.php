<?php

	/*************************************/
	/* TEST SCRIPT - GENERATE SAMPLE PDF */
	/*************************************/
	
	// mandatory to get all of our composer goodness
	require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

	// Use what we need
	use Dompdf\Dompdf;
    use Dompdf\Options;

    // Create our options
    $options = new Options();

    // Set our options
    $options->set("defaultFont", "Helvetica");

	// Initialize dompdf with our options
	$dompdf = new Dompdf($options);

    // Build our HTML
    $html = "";
    $html .= '<h1>Spec Sheet</h1><br>';
    $html .= '<h2>Spec Sheet</h2><br>';
    $html .= '<h3>Spec Sheet</h3><br>';
    $html .= '<h4>Spec Sheet</h4><br>';

    // Load our HTML into dompdf
	$dompdf->loadHtml($_POST['html_template']);
	
	// Set our paper size and orientation
	$dompdf->setPaper('A4', 'portrait');
	
	// Render our PDF using the loaded HTML
	$dompdf->render();
	
	// Output the generated PDF to Browser
	$dompdf->stream("spec_sheet.pdf");

?>
