<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "dewdrops";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

$sql="DROP TABLE review";

echo"table dropped";

?>