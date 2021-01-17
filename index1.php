<!-- db connect -->
<?php
$user = 'root';
$password = 'root';
$db = 'php';
$host = 'localhost';
$port = 8889;   //(FOR MAC USERS)
$conn = mysqli_connect($host, $user, $password, $db, $port );
?>



<!--PHP fetching data-->
<?php
//fetch query
$query = "select * from user";
//connection for query with db
$execute=mysqli_query($conn,$query);  //store in object form from result
//use the object result in associative array form
//iterate the array to display all result
while($row=mysqli_fetch_array($execute)){
    //display the data accordin to the db
    echo $row['id'];
    echo $row['user'];
    echo $row['pass']."<br>";
}
?>



<!-- HTML -->
<html>
<head>  </head>
<body>
<!-- html form -->
<!-- form action connecting page, method get or post -->
<form action="index1.php" method="GET">
<!-- input data -->
<input type="text" name="id">
<input type="password" name="pass">
<input type="submit" name="submit">
</form>
</body>
</html>