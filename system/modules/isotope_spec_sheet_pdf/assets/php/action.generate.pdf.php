<?php

	/*************************************/
	/* TEST SCRIPT - GENERATE SAMPLE PDF */
	/*************************************/
	
	session_start();
	
	$product_id = $_POST['product_id'];
	
	// mandatory to get all of our composer goodness
	require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

	// Use what we need
	use Dompdf\Dompdf;
    use Dompdf\Options;

    // Create our options
    $options = new Options();

    // Set our options
    $options->set("defaultFont", "Helvetica");
    $options->set("isRemoteEnabled", "true");

	// Initialize dompdf with our options
	$dompdf = new Dompdf($options);
	
	
	// Get our product information that is stored in the session
  	$product_data = unserialize($_SESSION['pdf_data'][$product_id]);
  	
  	$img_src = "https://" . $_SERVER['SERVER_NAME'] . "/" . $_POST['product_image'];
  	
  	//$product_image = '<img src="'.$product_image_src.'" width="200" height="200" alt="Beauty Shot alt" title="Temporary Beauty Shot"><br><br>';
	
	
	
	
	
	
	

    // Load our HTML template
    $html = file_get_contents('../templates/product_type_'.$product_data->type.'.html', true);
    
    
    // Replace our tags with the proper values
    $html = str_replace("{{img_src}}", $img_src, $html);
    
    
    
    
    
    
    
    

    // Load our HTML into dompdf
	$dompdf->loadHtml($html);
	//$dompdf->loadHtml($specifications);
	
	
	// Set our paper size and orientation
	$dompdf->setPaper('A4', 'portrait');
	
	// Render our PDF using the loaded HTML
	$dompdf->render();
	
	// Output the generated PDF to Browser
	$dompdf->stream("spec_sheet.pdf");

?>
