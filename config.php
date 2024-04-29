<?php

function connection() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=sms_php", $username, $password);
    // set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Youpiiiii you're connected"; 
	}
	catch(PDOException $e)
	{
		echo "Planta: " . $e->getMessage();
	}

	return $conn;
}
?>
