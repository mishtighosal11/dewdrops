<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dewdrops";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$address1 = $_GET['address1'];
$dob = $_GET['date'];
$email = $_GET['email'];
$phno = $_GET['phone'];
$req = $_GET['req'];
$pincode = $_GET['pincode'];

$sql = "INSERT INTO customer (id,firstname,lastname,address1,dob,email,phone,pincode,requests) VALUES ('1','$firstname','$lastname','$address1','$dob','$email','$phno','$pincode','$req')";

if ($conn->query($sql)===TRUE) {
    echo "<H1>Records inserted successfully</H1>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>