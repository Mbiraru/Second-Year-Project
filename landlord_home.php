<?php
$con = mysqli_connect('localhost','root','','rental');
session_start();
if(!$_SESSION['username']){
echo "<script>window.open('login.php','self')</script>";
}
elseif ($_SESSION['type']!=='landlord') {
echo "<script>window.open('login.php','self')</script>";
}
else{
	 $username=$_SESSION['username'];
}
?>
<?php
include 'connection.php';
error_reporting(0);

$name = $_POST['name'];
$PhoneNumber = $_POST['PhoneNumber'];
$location = $_POST['location'];
$bedrooms = $_POST['bedrooms'];
$rent = $_POST['rent'];
$address = $_POST['address'];
$type = $_POST['type'];

if(!$_POST['submit']){
	
echo "<p style='color:black; text-align:center; font-size:40px;'>All fields must be filled</p>";
  
}

else {
	$sql = "INSERT INTO landlord (name,PhoneNumber,location,bedrooms,rent,address,type) VALUES('$name','$PhoneNumber', '$location', '$bedrooms', '$rent', '$address', '$type')";
	if (mysqli_query($conn, $sql)) {
    echo "<h1><center>New record created successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body{
	    background-image: url(House3.jpg);
	    background-repeat: no-repeat;
	     background-size: cover;
    }
	#content{
			width: 50%;
			margin: 20px auto;
	}
	form{
			width: 50%;
			margin: 20px auto;
			color: #FFFFFF;
	}
	form div{
			margin-top: 5px;
	}
	#img div{
        width: 80%;
        padding: 5px;
        margin: 15px auto;
        border: 1px solid #cbcbcb;
	}
	input{
		padding: 10px;
		font-size: inherit;
		border-radius: 10px;
	}
	input[type="text"]{
		display: block;
		margin-bottom: 25px;
		width: 100%;
		border:2px solid steelblue;
		background: #FAF6D9;
	}
	input[type="number"]{
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
	.logo{
      color: #fff;
      font-family: 'Abel', sans-serif;
      font-size: 30px;
      padding: 0;
     margin-top: 1px;
     margin-left: 1px;
     top: 0;
     left: 0;
      position: absolute;
    }
    .logout{
    line-height: 12px;
     width: 18px;
     font-size: 8pt;
     font-family: tahoma;
     margin-top: 1px;
     margin-right: 1px;
     position:absolute;
     top:0;
     right:0;
    }
	</style>
</head>
<body>
<div class="logo">Landlord Page</div>
<div class="logout"><a href="Login.php"><button>Logout</button></a></div>
<div id="content">
	<form method="POST" action="landlord_home.php">
		<div>
			Name:<br>
			<input type="text" name="name" autocomplete="off" required/><br>
		</div>	
		<div>
			PhoneNumber:<br>
			<input type="text" name="PhoneNumber" autocomplete="off" required/><br>
		</div>
		<div>
			Location:<br>
			<input type="text" name="location" autocomplete="off" required/><br>
		</div>
		<div>
			Bedrooms:<br>
			<input type="number" name="bedrooms" autocomplete="off" required/><br>
		</div>
		<div>
			Rent:<br>
			<input type="text" name="rent" autocomplete="off" required/><br>
		</div>
		<div>
			Address:<br>
			<input type="text" name="address" autocomplete="off" required/><br>
		</div>
		<div>
			Type:<br>
			<input type="text" name="type" autocomplete="off" required><br>
		</div>
		<div>
			<input type="submit" name="submit" value="submit">
		</div>
	</form>
</div>
</body>
</html>
