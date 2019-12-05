<?php 
/*
Plugin Name: Cpdf protected
Description: Créer un pdf codé avec un mot de passe 
Author: Fabricelifaa / kamgoko
Author URI:  https://kamgoko.tech
Version: 0.1
*/
require "Proctectpdf.php";

	function create_pdf( $html, $filename, $password ){
		require_once __DIR__ . '/vendor/autoload.php';

		if (! is_string($html) || ! is_string($filename) || ! is_string($password) ) {
			# code...
			return false;
		}

    	if (strlen($password)<8) {
			# code...
			return false;
		}
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML($html);
		$mpdf->Output( __DIR__ .'/output/'. $filename .'.pdf', \Mpdf\Output\Destination::FILE );
		$pdf = new Proctectpdf( __DIR__ .'/output/'. $filename .'.pdf', $password);
		// save PDF as file on the server
		$pdf->setTitle("Test PDF")->output('F', __DIR__ .'/output/'. $filename .'.pdf');
		return array(
			"path"=> __DIR__ .'/output/'. $filename . ".pdf",
			"filename" => $filename . ".pdf"
		);

	}
