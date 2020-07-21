<?php //comentario
	
	header("Content_Type: image/png");
	$imgg = imagecreate(50,30);
	$background = imagecolorallocate($imgg, 24, 74, 108);
	$fontt = imagecolorallocate($imgg, 41,129,191);

	function SecurityCode(){
		$text = "";
		$values= "1234567890abcdefghihklmnopqrstuvwxyzABCDEFHIJKLMNOPQRSTUVWXYZ";
		$count = strlen($values)-1;	
	 	
	 	for($i=0;$i <5;$i++){
	 		$text .= $values{mt_rand(0,$count)};
	 }
	 return $text;
	}
	$captcha = SecurityCode();

	imagettftext($imgg, 20, 10, 5, 10, $fontt, 'ReenieBeanie-Regular.ttf', $captcha);
	imagepng($imgg);
?>