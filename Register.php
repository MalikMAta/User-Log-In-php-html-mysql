<?php

$data = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($data, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE DATABASE jslogin";

$query = mysqli_query($conn, $sql);

if($query === TRUE){
	echo "Database Created successfully";

}
echo "<br>";

$db = mysqli_select_db($conn,'jslogin');

#$sqlOne = "CREATE TABLE credentials(

#id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
#name VARCHAR(30) NOT NULL,
#password VARCHAR(30) NOT NULL,
#reg_date TIMESTAMP
#)";


#$queryOne = mysqli_query($conn, $sqlOne);

#if($queryOne === TRUE){
#	echo "Database Created successfully";

#}

#else{
#	echo"failed";
#}

// Before using $_POST['value'] 

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}




if (isset($_POST['password'])) {
    $password = $_POST['password'];
}







  if(isset($_POST['submit']))
{


	$sql = "SELECT name, password from credentials where name = '$name' and 
	password = '$password' ";

    $query = mysqli_query($conn, $sql);


	if($row = mysqli_fetch_array($query)){
	if ($name == $row['name'] && $name == $row['name']) {
	echo"Username Already Exist";

}

	
}
else{


    $queryOne = "INSERT INTO credentials (name, password)
    VALUES ('$name', '$password')";


$result = mysqli_query($conn, $queryOne);
  
}}


?>

<!DOCTYPE html>


<html>

<head>

<title> Javascipt list manipulation </title>

<link rel = "stylesheet" type = "css/text" href = style.css>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>







</head>




<body>
	
<div class ="container" style="background-color: white; height: 700px; width: 475px; margin-top: 100px; border-style: solid; border-radius: 5px;  box-shadow: 5px 5px 10px 10px;">


<h1 style="color: black; text-align: center; font-family:Times New Roman;"> Register </h1>

  <div class = "col-sm-12"  style=" height: 600px; background-color: white; border-style: groove; border-radius: 5px">


<div id ="top" style="margin-top: 50px; text-align: center; " >

<form action="register.php" method="post">
<input type="text" name="name" placeholder="Enter Name">
<br>
<br>
<input type="password" name="password" placeholder="Enter Password">
<br>
<hr>
<input type="submit" name="submit"> 

<br>
<hr>

<a href="login.php">Already Registered</a>



</form>

</div>

</div>







</div>


</body>






</html>