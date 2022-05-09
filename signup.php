<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dewdrops";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$uname = $_GET['username1'];
$email = $_GET['email'];
$password = $_GET['password1'];

$sql = "INSERT INTO signup (name,email,password) VALUES ('$uname','$email','$password')";

if ($conn->query($sql)===TRUE) {
    echo "<H1>Records inserted successfully</H1>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>