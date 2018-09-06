<?php
include 'dbconnect.php';

//$sql = "INSERT INTO value VALUES (default, ".$_GET['id_sensor'].", '".$_GET['value']."', now())";

$sensor = $_GET['your-name']; 
$sensorvalue = $_GET['your-email']; 


  	$sql = "INSERT INTO value VALUES (default, ?, ?, now());";

	if ($stmt = $conn->prepare($sql)) {
	    $stmt->bind_param('ss', $sensor, $sensorvalue);
	    $stmt->execute();
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
?>
