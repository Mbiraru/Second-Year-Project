<?php
$username = $POST['username'];
$password = $POST['password'];

mysql_connect("localhost", "root", "");
mysql_select_db("person");

$result = mysql_query("select * from login where username = '$username' and password = '$password'") 
or die("Fail");
?>