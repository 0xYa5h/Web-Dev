<?php 


if(isset($_POST["Submit"])){
$Username=$_POST["Username"];
$Password=$_POST["Password"];

if($Username == "Yash" && $Password == "yash"){
	 echo "<h1>Welcome: {$_POST["Username"]} </h1> "; 
}
else
	echo "Username not registered";

}
else{
	echo "<h2> Login Required</h2>";
}

?>


<!DOCTYPE>

<!DOCTYPE html>
<html>
<head>
	<title>FORM1</title>
</head>
<body>
<?php ?>

<fieldset>
	<legend>HTML 5 Form</legend>
<form action="login2.php" method="POST"> 
<label for="Username">Username:</label>
<input id="Username" type="text" name="Username"> <br> <br>
<label for="Password">Password: </label>
<input id="Password" type="Password" name="Password"><br><br>
<input type="Submit" name="Submit" value="Submitted">



</form>
</fieldset>
</body>
</html>
