<?php
include 'dbconnect.php';

$sql = "
SELECT value, vdatetime FROM ( 
SELECT @row := @row +1 AS rownum, value, vdatetime
FROM (
SELECT @row :=0) r, value 
WHERE id_sensor = 1
ORDER BY vdatetime DESC LIMIT 60
) tmp
WHERE rownum MOD 5 = 0
";

$result = mysqli_query($conn, $sql);

$yourArray = array(); // make a new array to hold all your data
$index = 0;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $yourArray[$index] = $row;
     	$index++;
    }

	$json = json_encode($yourArray); 

	echo $json;
} else {
    echo "0 results";
}



?>