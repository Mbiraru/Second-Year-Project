<html>
<head>
<?php 
error_reporting(0);
include 'connection.php';
$name = $_POST['user'];
 
$sql = "DELETE from tenants where id = $name";

if($_POST['submit']){
	if(mysqli_query($conn, $sql)){
echo "<p style='color:black; text-align:center; font-size:40px;'>Data deleted successfully</p>";
	}
  else{
echo "Try Again";
  }
}
?>
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
<form action = "delete.php" method = "POST">
<h2>Provide ID to delete user data.</h2>

ID: <input type="text" name="user" autocomplete="off" required>
<input type="submit" name="submit" value="Delete">
</form>
</body>
</html>