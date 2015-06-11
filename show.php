<!DOCTYPE html>
<html>
<body>

<?php
$username = "kaushik";
$password = "].uZ-ATV!_!b";
$servername = "localhost"; 
$dbname = "bugs_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT description, functionality ,severity, projectname, datetime FROM bugs_table";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " Date and Time: " . $row["datetime"]. "<br> Description: " . $row["description"]. "<br> Functionality: " . $row["functionality"]. "<br> Severity: " . $row["severity"]. "<br> Project Name: " . $row["projectname"] . "<br>" . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>  

</body>
</html>