<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #7f8c8d">

     <div id = "wrapper">
     	<center>
     	   <h2>Registration Form</h2>
     	   <img src="download.png" class="download"/>
     	</center>
     
     <form class="myform" action="" method="post">
     	<label><b>Username</b></label><br>
     	<input type="text" class="inputvalues" name="username" placeholder="Type your username" autocomplete="off" required/><br>
     	<label><b>Password</b></label><br>
     	<input type="Password" class="inputvalues" name="password" placeholder="Type your password" autocomplete="off" required/><br>
        <select name="role"><option value="" selected>Select Role</option><br>
        <option value="admin">Admin</option>
        <option value="landlord">Landlord</option>
        <option value="tenant">Tenant</option></select>
        <input type="Submit" id="signup_btn" name = "save" value = "Sign Up"/><br>
        <a href="HouseRental.html"  id="back_btn" class="button">
       <span  id="back_btn" value = "Back">Back</span>
     </a>
        </form>
     </div>   
</body>
<?php

$con = mysqli_connect('localhost','root','','rental');
if(isset($_POST['save'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $type = $_POST['role'];

    $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
    if(mysqli_num_rows($query) > 0){
        echo "<p style='color:black;text-align:center; font-family: Arial, Helvetica, sans-serif; font-weight: bold;'>Username already exists !</p>";
    }
    else{
       mysqli_query($con, "INSERT INTO user(username,password,role)values('$username','$pass','$type')"); 
    }
}
?>
</html>
