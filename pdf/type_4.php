<?php
	require_once '../dompdf/autoload.inc.php';

	use Dompdf\Dompdf;

	set_time_limit(-1);

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$fileContent = file_get_contents( "http://localhost/pdf_dot/template_4.html" ) ;
	$dompdf->loadHtml($fileContent);

	// // (Optional) Setup the paper size and orientation
	$dompdf->setPaper('letter', 'portrait');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream("type_4.pdf", array("Attachment"=>0));

?>