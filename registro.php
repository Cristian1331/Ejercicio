<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/registroCss.css">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
</html>
<?php
	$error = array();
	$firstName='';
	$lastName='';
	$email='';
	$cardTipe='';
	$cardHolder='';
	$cardNumber='';
	$cardNumber2='';
	$cardNumber3='';
	$cardNumber4='';
	$cvv2='';
	// $expMonth=$_POST['expMonth'];
	// $expYear=$_POST['expYear'];
	$streetAddress='';
	$city='';
	$continent='';
	$phone='';

	$num = "1234567890";
	$nunCharacters = '';
	
	function validateString($text){
		$num = "1234567890";
		$notText = false;
	 	for($i=0;$i <strlen($num);$i++){
	 		$number = substr($num, $i,1);
	 		for($x=0;$x<strlen($text);$x++){
	 			$letter = substr($text,$x,1);
	 			if($number == $letter){
	 				$notText = true;
	 			}
	 		}
	 	}
	 	return $notText;
	}

	if(isset($_POST['submit'])){
		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$email=$_POST['email'];
		$cardTipe=$_POST['cardTipe'];
		$cardHolder=$_POST['cardHolder'];
		$cardNumber=$_POST['cardNumber'];
		$cardNumber2=$_POST['cardNumber2'];
		$cardNumber3=$_POST['cardNumber3'];
		$cardNumber4=$_POST['cardNumber4'];
		$cvv2=$_POST['cvv2'];
		// $expMonth=$_POST['expMonth'];
		// $expYear=$_POST['expYear'];
		$streetAddress=$_POST['streetAddress'];
		$city=$_POST['city'];
		$continent=$_POST['continent'];
		$phone=$_POST['phone'];
		if(!empty($firstName)){
			$firstName= filter_var($firstName,FILTER_SANITIZE_STRING);
			$text = validateString($firstName);
			if ($text === true) {
				array_push($error, 'The name field is a text, not a number');
			}
		}

		if(!empty($lastName)){
			$lastName= filter_var($lastName,FILTER_SANITIZE_STRING);
			$text = validateString($lastName);
			if ($text === true) {
				array_push($error, 'The name field is a text, not a number');
			}
		}
		
		if(!empty($email)){
			$email=filter_var($email,FILTER_SANITIZE_EMAIL);
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			}
			else{
				array_push($error, 'Type a valid email');
			}
		}

		if($cardTipe == ''){
			array_push($error, 'choose a card tipe');	
		}

		if (!empty($cardHolder)) {
			$cardHolder=filter_var($cardHolder,FILTER_SANITIZE_STRING);
			$text = validateString($cardHolder);
			if ($text === true) {
				array_push($error, 'the card holder cannot contain numbers');
			}
		}


		if(!empty($cardNumber)&&!empty($cardNumber2)&&!empty($cardNumber3)&&!empty($cardNumber4)){
			$cardNumber=filter_var($cardNumber,FILTER_SANITIZE_STRING);
			$cardNumber2=filter_var($cardNumber2,FILTER_SANITIZE_STRING);
			$cardNumber3=filter_var($cardNumber3,FILTER_SANITIZE_STRING);
			$cardNumber4=filter_var($cardNumber4,FILTER_SANITIZE_STRING);
			if(!(filter_var($cardNumber,FILTER_VALIDATE_INT)&&filter_var($cardNumber2,FILTER_VALIDATE_INT)&&filter_var($cardNumber3,FILTER_VALIDATE_INT)&&filter_var($cardNumber,FILTER_VALIDATE_INT))){
				array_push($error, 'Card number is a number');
			}
			if (strlen($cardNumber) !=4 || strlen($cardNumber2) !=4 || strlen($cardNumber3) !=4 || strlen($cardNumber4) !=4){
				array_push($error, 'The card number cannot be different than four digits');
			}
		}

		if(!empty($cvv2)){
			$cvv2=filter_var($cvv2,FILTER_SANITIZE_STRING);

			if(!filter_var($cvv2,FILTER_VALIDATE_INT)){
				array_push($error, 'CVV2 must be a number');
			}
			if (strlen($cvv2) !=4){
				array_push($error, 'The CVV2 cannot be different than four digits');
			}
			echo $cvv2;
		}

		if(!empty($streetAddress)){
			$streetAddress=filter_var($streetAddress,FILTER_SANITIZE_STRING);
		}

		if(!empty($city)){
			$city=filter_var($city,FILTER_SANITIZE_STRING);
			$text = validateString($city);
			if ($text === true) {
				array_push($error, 'The city is a text, not a number');
			}
		}

		if($continent == ''){
			array_push($error, 'choose a continent');	
		}

		if (!empty($phone)) {
			if (!filter_var($phone,FILTER_VALIDATE_INT)) {
				array_push($error, 'Phone is a number, not a text');
				$phone = '';
			}
		}
	}

	//Validar si hay errores
	function Validate($error)
	{
		if(isset($_POST['submit']))
		{
			if (count($error)>0) {
				for($i=0;$i<count($error);$i++){
					echo "<div class='error'>";
					echo "<li> $error[$i] </li>";
				}
			}else{
				echo "<div class='correct'>";
				echo "<li> The date intered is correct </li>";
			}
			echo "</div>";
		}
	}

	require 'view/registroView.php';
?>