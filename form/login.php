<?php
$user = 'root';
$password = 'root';
$db = 'php';
$host = 'localhost';
$port = 8889;

//connection string
$conn = mysqli_connect($host, $user, $password, $db, $port );
if($conn){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "select * from user where username = '$username'";
    $execute = mysqli_query($conn, $query);
    $s = mysqli_fetch_array($execute);
    if($s<1){
        echo "login error";
    }
    else{
        header("location:welcome.php");
    }

}
else{
    echo  "not connected";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> SIGNUP FORM </h1>
    <form action="login.php" method="post">
    USERNAME: <input type="text" name="username"><br />
    PASSWORD: <input type="password" name="password"><br />
    <input type="submit" name="submit">
    </form>
</body>
</html>