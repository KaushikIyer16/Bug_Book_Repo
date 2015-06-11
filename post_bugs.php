<?php
echo "Stage 1<br>";
$username = "kaushik";
$password = "].uZ-ATV!_!b";
$servername = "localhost"; 
$dbname = "bugs_database";

echo "Stage 2<br>";


$str = $_REQUEST['message'];
$message = (explode("|",$str));

$description=$message[0];
$functionality=$message[1];
$severity=$message[2];
$project=$message[3];
date_default_timezone_set("Asia/Calcutta");
$date=date("l jS \of F Y h:i:s A");

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "CONNECTION SUCCESSFUL";

$sql = "INSERT INTO `bugs_table`(`description`, `functionality`, `severity`, `datetime`, `projectname`) VALUES ('$description', '$functionality', '$severity', '$date', '$project')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>