<!-- PHP-->
<?php
//fetching the element from html using name
$a = $_GET['id'];
$b = $_REQUEST['pass'];
//displaying the data
echo "Hello ".$a.$b;
?>

<!-- HTML -->
<html>
<head> </head>
<body>
<!-- html form -->
<!-- form action - connecting page, method - get or post -->
<form action="index.php" method="GET">
<!-- input data -->
<input type="text" name="id">
<input type="password" name="pass">
<input type="submit" name="submit">
</form>
</body>
</html>