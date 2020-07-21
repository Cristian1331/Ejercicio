
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="../css/registroCss.css">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=0,maximum-scale=1,user-scalable=no">
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>" method="POST">
		<div class="validate">
			<?php
				Validate($error);
			?>
		</div>
		<h1>Register</h1>
		<label class="formTitle">Personal information</label>
		<div class="formBox">
			<label for="">Fist name</label>
			<input type="text" required value="<?php echo $firstName; ?>" name="firstName">
		</div>
		<div class="formBox">
			<label for="">Last name</label>
			<input type="text" required value="<?php echo $lastName; ?>" name="lastName">
		</div>
		<div class="formBox">
			<label for="">Email</label>
			<input type="text" required name="email" value="<?php echo $email; ?>">
		</div>
		<label class="formTitle">Credit card information</label>
		<div class="formBox">
			<label>Credit Card Tipe</label>
			<select name="cardTipe">
				<option value="">Select a type</option>
				<option value="masterCard" <?php if($cardTipe == 'masterCard') echo 'selected';?>>Master Card</option>
				<option value="dinnerClub" <?php if($cardTipe == 'dinnerClub') echo 'selected';?>>Dinner Club</option>
				<option value="visa" <?php if($cardTipe == 'visa') echo 'selected';?>>Visa</option>
				<option value="americanExpress" <?php if($cardTipe == 'americanExpress') echo 'selected';?>>American Express</option>
			</select>
		</div>
		<div class="formBox">
			<label for="">Card holder</label>
			<input type="text" required name="cardHolder" value="<?php echo $cardHolder; ?>">
		</div>
		<div class="formBox">
			<label for="">Card number</label>
			<input class='cardNumber' type="text" required name="cardNumber" value="<?php echo $cardNumber; ?>">
			<input class='cardNumber' type="text" required name="cardNumber2" value="<?php echo $cardNumber2; ?>">
			<input class='cardNumber' type="text" required name="cardNumber3" value="<?php echo $cardNumber3; ?>">
			<input class='cardNumber' type="text" required name="cardNumber4" value="<?php echo $cardNumber4; ?>">
		</div>
		<div class="formBox">
			<label for="">CVV2</label>
			<input type="password" id="cvv" name="cvv2" required>
		</div>
		<div class="formBox">
			<label for="">Exp date</label>
			<select name="expMonth" id="">
				<?php 
					for($i=1;$i<=12;$i++){
						echo "<option value='$i'>$i</option>";
					}
				?>
			</select>
			<select name="ExpYear" id="">
				<?php 
					for($i=2020;$i<=2050;$i++){
						echo "<option value='$i'>$i</option>";
					}
				?>
			</select>
		</div>
		<label class="formTitle">Billing address</label>
		<div class="formBox">
			<label for="">Street address</label>
			<input type="text" required name="streetAddress" value="<?php echo $streetAddress; ?>">
		</div>
		<div class="formBox">
			<label for="">City</label>
			<input type="text" required name="city" value="<?php echo $city; ?>">
		</div>
		<div class="formBox">
			<label for="">Continent</label>
			<select name="continent" id="">
				<option value="">Select a continent</option>
				<option value="america" <?php if($continent == 'america') echo 'selected';?>>America</option>
				<option value="europe" <?php if($continent == 'europe') echo 'selected';?>>Europe</option>
				<option value="africa" <?php if($continent == 'africa') echo 'selected';?>>Africa</option>
				<option value="asia" <?php if($continent == 'asia') echo 'selected';?>>Asia</option>
				<option value="australia" <?php if($continent == 'australia') echo 'selected';?>>Australia</option>
			</select>
		</div>
		<div class="formBox">
			<label for="">Phone</label>
			<input type="text" required name="phone" value="<?php echo $phone; ?>">
		</div>
		<div class="formBox">
			<label for="">Enter security code</label>
			<img src="captcha.php">
			<input name='' id="captch" required type="text">
		</div>
			<div id="submiBox">	
			<input id="submi" type="submit" name="submit">
		</div>
	</form>
</body>
</html>