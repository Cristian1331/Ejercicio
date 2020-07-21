<?php

  $captchaImagen = imagecreate(100,35); 

  $captchaFondo = imagecolorallocate($captchaImagen,127,6,255);

  $captchaTexto = imagecolorallocate($captchaImagen,197,115,250);

function SecurityCode(){
		$captchaText = "";
		$captchaValues= "1234567890abcdefghihklmnopqrstuvwxyzABCDEFHIJKLMNOPQRSTUVWXYZ";
		$captchaCount = strlen($captchaValues)-1;	
	 	
	 	for($i=0;$i <5;$i++){
	 		$captchaText .= $captchaValues{mt_rand(0,$captchaCount)};
	 }
	 return $captchaText;
	}
	$captchaAleatorio = SecurityCode();

  imagefill($captchaImagen,50,0,$captchaFondo);

imagestring($captchaImagen,80,0,0,$captchaAleatorio,$captchaTexto);

header('content-type: image/png ');

imagepng($captchaImagen);
?>