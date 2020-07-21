<?php 

try{

	$conection = new PDO ('mysql:host=localhost;dbname=phpdatabase','root','');

	$sql = "SELECT * FROM user";

	foreach($conection -> query($sql) as $row){
		print_r($row);
		echo "<br/>";
	}

	$conection = null;

}catch(PDOException $e){
	echo 'conection off' . $e-> getMessage();
	die();
}

?>