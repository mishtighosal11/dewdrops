<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dewdrops";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_GET['username']);

    $pass = validate($_GET['password']);

    if (empty($username)) {

        header("Location: index(1).html?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index(1).html?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM 'login' WHERE 'username'='$username' AND 'password'='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: index.html");

                exit();

            }else{

                header("Location: index(1).html?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index(1).html?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.html");

    exit();

}

?>