<?php
$host = "localhost";
$userName = "root";
$password = "";
$db = "pharmacy";

// Create database connection
$conn = mysqli_connect($host, $userName, $password, $db);

// Check connection
if ($conn) {
    echo "mubark ho aap connect ho chuke hai";
}
else{
    echo "na na na na na .........";
}
?>
