<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="registroCss.css">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=0,maximum-scale=1,user-scalable=no">
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<form action="">
		<h1>Login</h1>
		<div class="formBox">
			<label for="">Email</label>
			<input type="text" required value="<?php echo $email; ?>" name="firstName">
		</div>
		<div class="formBox">
			<label for="">CVV2</label>
			<input type="password" required  name="lastName">
		</div>
		<div class="formBox">
			<label for="">confirm CVV2</label>
			<input type="password" required name="cvv2Confirm">
		</div>
		</div>
			<div id="submiBox">	
			<input id="submi" type="submit" name="submit">
		</div>
	</form>
</body>
</html>