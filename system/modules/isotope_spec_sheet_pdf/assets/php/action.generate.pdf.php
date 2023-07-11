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
    $html = "<html>
	<head>
		<style>
			body {
				display: flex;
				flex-flow: row wrap;
			}
			.section_1 {
				background-color: red;
				width: 100%;
			}
			.section_2 {
				background-color: green;
				width: 50%;
			}
			.section_3 {
				background-color: blue;
				width: 50%;
			}
			.section_4 {
				background-color: orange;
				width: 100%;
			}
			.section_5 {
				background-color: yellow;
				width: 100%;
			}
		</style>
	</head>
	<body>

		<div class='section_1'>
			Logo
		</div>
		
		<div class='section_2'>
			Product Image
		</div>
		
		<div class='section_3'>
			Product Details
		</div>
		
		<div class='section_4'>
			Colors
		</div>
		
		<div class='section_5'>
			Specs
		</div>
		
	</body>
</html>
";

    // Load our HTML into dompdf
	$dompdf->loadHtml($html);
	
	// Set our paper size and orientation
	$dompdf->setPaper('A4', 'portrait');
	
	// Render our PDF using the loaded HTML
	$dompdf->render();
	
	// Output the generated PDF to Browser
	$dompdf->stream("spec_sheet.pdf");

?>
