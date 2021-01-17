<!-- db connect -->
<?php
$user = 'root';
$password = 'root';
$db = 'php';
$host = 'localhost';
$port = 8889;  //(FOR MAC USERS)
$conn = mysqli_connect($host, $user, $password, $db, $port );
?>


<!--PHP fetching data-->
<?php
//fetching data from text-box and transfer into variables
$user = $_GET['id'];
//update query 
//set the updated data and where to select the data to be updated
$query = "delete from user where user = '$user' ";
//connection for query with db
$execute = mysqli_query($conn,$query);  //store the data in database
?>


<!-- HTML -->
<html>
<head>  </head>
<body>
<!-- html form -->
<!-- form action connecting page, method get or post -->
<form action="index4.php" method="GET">
<!-- input data -->
<input type="text" name="id">
<input type="password" name="pass">
<input type="submit" name="submit">
</form>
</body>
</html>