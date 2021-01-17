<?php
$user = 'root';
$password = 'root';
$db = 'php';
$host = 'localhost';
$port = 8889;

//connection string
$conn = mysqli_connect($host, $user, $password, $db, $port );
if($conn){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "insert into user values( NULL, '$name', '$username', '$password' )";
    $execute = mysqli_query($conn, $query);
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
    <form action="signup.php" method="post">
    NAME: <input type="text" name="name"><br />
    USERNAME: <input type="text" name="username"><br />
    PASSWORD: <input type="password" name="password"><br />
    <input type="submit" name="submit">
    </form>
</body>
</html>