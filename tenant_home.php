<?php
$con = mysqli_connect('localhost','root','','rental');
session_start();
if(!$_SESSION['username']){
echo "<script>window.open('login.php','self')</script>";
}
elseif ($_SESSION['type']!=='tenant') {
echo "<script>window.open('login.php','self')</script>";
}
else{
	$username=$_SESSION['username'];
}
?>

<?php
/*if($_POST['location'] !== ''){*/
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db 	= "rental";
	
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
	
	if($conn->connect_error){
		echo "Connection was failed";
	}
?>

<html>
<head>
	<style type="text/css">
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
	<link rel="stylesheet" type="text/css" href="products.css">
	<link rel="stylesheet" type="text/css" href="product.css"/>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		function active() {
			var searchBar = document.getElementById('searchBar');

			if(searchBar.value == 'Search...'){
            searchBar.value = ''
            searchBar.placeholder = 'Search...'
			}
		}
		function inactive() {
			var searchBar = document.getElementById('searchBar');

			if(searchBar.value == ''){
            searchBar.value = 'Search...'
            searchBar.placeholder = ''
			}
		}
	</script>
	<title>Tenants Page</title>
</head>
<body>
<div class="logout"><a href="Login.php"><button>Logout</button></a></div>
<form action="search.php" method="POST" id="searchForm" />
	<input type="text"  name="search" id="searchBar" placeholder="" value="Search..." maxlength="25" autocomplete="off" onmousedown="active();" onblur="inactive();"/><input type="submit" name="submit-search" id="searchBtn" value="Search"/>
</form>
<?php
$sql = "SELECT * FROM landlord";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);

if($queryResults > 0)
{
while($row = mysqli_fetch_assoc($result))
{
echo "<div>
<h3>".$row['name']."</h3>
<h3>".$row['PhoneNumber']."</h3>
<h3>".$row['location']."</h3>
<h3>".$row['bedrooms']."</h3>
<h3>".$row['rent']."</h3>
<h3>".$row['address']."</h3>
<h3>".$row['type']."</h3>
</div>";
}
}
?>
</body>
</html>