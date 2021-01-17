<!-- db connect -->
<?php
$user = 'root';
$password = 'root';
$db = 'php';
$host = 'localhost';
$port = 8889;

//connection string
$conn = mysqli_connect($host, $user, $password, $db, $port );
//connection check
if($conn) echo "done";
else
echo "error";
?>