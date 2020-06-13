<!DOCTYPE html>
<html>
<head>
	<title>Landlord Page</title>
	<link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
	<style type="text/css">
		*{
      margin: 0;
      padding: 0;
    }
    body{
      background-image: url(House.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      font-family: Arial, sans-serif;
    }
    .button{
      display: block;
      width: 180px;
      height: 60px;
      position: relative;
      border: 2px solid #04a;
      margin: 200px auto;
      border-radius: 5px;
      background-color: #06c;
    }
    .button .content{
      display: block;
      position: absolute;
      bottom: 6px;
      width: 100%;
      height: 100%;
      line-height: 60px;
      background-color: #09f;
      text-align: center;
      color: #fff;
      text-transform: uppercase;
      box-shadow: 0 6px 0 #06c;
      border-radius: 5px;
      transition: all 0.1s linear;
    }
    .button:active .content{
      bottom: 0;
      box-shadow: 0 0 0 #06c;
    }
    .logo{
      color: #fff;
      font-family: 'Abel', sans-serif;
      font-size: 30px;
      padding: 20px;
    }
	</style>
</head>
<body>
<a href="landlord_home.php" class="button">
       <span class="content">Rent House</span>
     </a>
      <a href="addtenant.html" class="button">
       <span class="content">Add Tenant</span>
     </a>
</body>
</html>