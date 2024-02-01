<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("localhost", "root", "", "musicpedia");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>



// <?php
// $server = "your_server_name"; // replace with your SQL Server server name
// $database = "your_database_name"; // replace with your database name
// $username = "your_username"; // replace with your SQL Server username
// $password = "your_password"; // replace with your SQL Server password
// 
// try {
//     $conn = new PDO("sqlsrv:Server=$server;Database=$database", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
// ?>
