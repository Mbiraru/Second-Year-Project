<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #7f8c8d">

     <div id = "wrapper">
     	<center>
     	   <h2>Login Form</h2>
     	   <img src="download.png" class="download"/>
     	</center>
     
     <form class="myform" action="login.php" method="post">
     	<label><b>Username</b></label><br>
     	<input type="text" name="username" class="inputvalues" placeholder="Type your username" autocomplete="off" required/><br>
     	<label><b>Password</b></label><br>
     	<input type="Password" class="inputvalues" name="password" placeholder="Type your password" autocomplete="off" required/><br>
        <input type="Submit" name="login" id="login_btn" value = "Login"/><br>
     </form>
     </div>
</body>
<?php
session_start();
$con = mysqli_connect('localhost','root','','rental');
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = mysqli_query($con,"select * from user where username = '$username' AND password = '$password'");
    $row = mysqli_fetch_array($q);
    $type = $row['role'];

    $isexist = mysqli_query($con,"select * from user where username = '$username' AND password = '$password'");
    $check_user = mysqli_num_rows($isexist);

    if($check_user==1){
        $_SESSION["type"] = $row['role'];
        $_SESSION["username"] = $row['username'];

        if($type=="admin"){
        echo "<script>window.open('admin_panel.php','_self')</script>";
        }
        else if($type == "landlord"){
        echo "<script>window.open('landlord.php','_self')</script>"; 
        }
        else{
            echo "<script>window.open('tenant_home.php','_self')</script>";
        }
    }
        else{
            echo "<p style='color:black;text-align:center; font-family: Arial, Helvetica, sans-serif; font-weight: bold;'>Invalid</p>";
        }
}
?>
</html>