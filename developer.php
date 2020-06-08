<!DOCTYPE html>
<html>
<head>
	<title>Social Media Handles</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			font-family: Source Sans Pro;
			background:#282828; 
			background:linear-gradient(-45deg,#EE7752,#E73C7E,#23A6D5,#23D5AB);
			background-size: 400% 400%;
			animation: Gradient 15s ease infinite;
		}
		@-webkit-keyframes Gradient{
			0%{
				background-position: 0% 50%
			}
			50%{
				background-position: 100% 50%
			}
			100%{
				background-position: 0% 50%
			}
		}
		h1{
			font-weight: lighter;
			font-size: 80px;
			color: #fff;
			text-align: center;
			padding-top: 50px;
			margin-bottom: 0;
		}
		p{
            color: #fff;
            text-align: center;
            font-family: Source Sans Pro;
            font-weight: lighter;
			font-size: 20px;
			margin-top: 0;
		}
		.media{
			position: absolute;
			top: 40%;
			left: 50%;
			transform: translate(-53%, -50%);
		}
		li{
			list-style: none;
			margin: 10px 30px;
			display: inline-block;
			font-size: 20px;
			padding: 20px 20px;
			color: #fff;
			border: 1px solid #fff;
			border-radius: 50%;
			transition: .5s;
		}
		li:hover{
			color: #292929;
			border: 1px solid #292929;
			transition: .5s;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<h1>Socialize</h1>
		<p>Social Media platforms</p>
		<div class="media">
		<ul>
			<a href="https://www.facebook.com/"><li><i class="fa fa-facebook-official" aria-hidden="true"></i></li></a>
			<a href="https://twitter.com/login"><li><i class="fa fa-twitter-square" aria-hidden="true"></i></li></a>
			<a href="https://www.instagram.com/accounts/login/"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
			<a href="https://www.whatsapp.com/"><li><i class="fa fa-whatsapp" aria-hidden="true"></i></li></a>
			<a href="https://github.com/Mbiraru"><li><i class="fa fa-github-square" aria-hidden="true"></i></li></a>
		</ul>
		</div>
	</div>
</body>
</html>