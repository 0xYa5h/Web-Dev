<!DOCTYPE html>
<html>
<head>
	<title>Form2</title>
</head>
<body>
<?php
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$Submit=$_POST["Submit"];
if(isset($_POST["Submit"]) && !empty($Password) && !empty($Username)){
	echo "<h2>Successful Login as {$_POST["Username"]}</h2>";
}else{
	echo "<h2> Login Failed</h2>";
}


?>
</body>
</html>