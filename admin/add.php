<?php
 
include 'connection.php';
 error_reporting(0);
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $pass = $_POST['Pass'];
  $role = $_POST['Role'];
  
if(!$_POST['submit']){
	
echo "<p style='color:black; text-align:center; font-size:40px;'>All fields must be filled</p>";
  
}

else {
 
$sql = "INSERT INTO tenants (name,email,pass,role)
VALUES ('$name', '$email', '$pass', '$role')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>New record created successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>Add Data</title>
<style type="text/css">
	body{
		background-color: #e8f3f8;
	}
	h2{
		text-align: center;
		font-size: 50px;
		color: steelblue;
	}
	form{
		margin: 20px auto;
		width: 320px;
		color: steelblue;
	}
	input{
		padding: 10px;
		font-size: inherit;
	}
	input[type="text"]{
		display: block;
		margin-bottom: 25px;
		width: 100%;
		border:2px solid steelblue;
		background: #FAF6D9;
	}
	input[type="password"]{
        display: block;
		margin-bottom: 25px;
		width: 100%;
		border:2px solid steelblue;
		background: #FAF6D9;
	}
	input[type="email"]{
        display: block;
		margin-bottom: 25px;
		width: 100%;
		border:2px solid steelblue;
		background: #FAF6D9;
	}
	input[type="submit"]{
		width: 344px;
		height: 45px;
        border: none;
		background: steelblue;
	}
	input:focus {
        background: white; 
	}
</style>
</head>

<body>
   
	<h2>Add Updates from this menu</h2>
		<form action="add.php" method="POST">
			Name: <input type="text" name="Name" autocomplete="off" value="" required><br><br>
			Email: <input type="email" name="Email" autocomplete="off" value="" required><br><br>
			Password: <input type="Password" name="Pass" autocomplete="off" value="" required><br><br>
			Role: <input type="text" name="Role" autocomplete="off" value="" required><br>
	<br>
			<input type="submit" name="submit" value="add"/></center>
</body>
</html>