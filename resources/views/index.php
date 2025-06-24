<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Bootstrap demo</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		.btn-sign {
			margin: 0px 20px;
			padding: 10px 20px;
			border: 1px solid black;
			border-radius: 8%;
			text-decoration: none;
			color: black;
		}
		.btn-sign:hover{
			background-color: lightgray;
		}
		.btn-home{
			text-decoration: none;
			font-size: 50px;
			color: black;
		}
		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			margin: 12% 20%;
			Color: darkorange;
		}
		h1 {
			font-size: 100px;
			margin-bottom: 2%;
		}
		p {
			font-size: 25px;
			margin: 0% 3%;
			color: black;
		}
		span {
			background-color: orange;
			border: 1px solid white;
			border-radius: 10px;
			padding: 5px 10px;
		}
	</style>
</head>
<header>
	<nav style="display: flex; justify-content: space-between; margin-top: 1%;">
		<div style="margin-left: 5%;">
		<a class="btn-home" href="#"><span>Fun</span>Pic</a>
		</div>
		<div style="margin-right: 5%; display: flex; justify-content: space-around; align-items: center;">
			<?php
				if(isset($_COOKIE['username']))
					echo "<div><a href=\"sign-up.php\" class=\"btn-sign\">Sign In</a></div>";
				else{
					echo "<div><a href=\"sign-in.php\" class=\"btn-sign\">Sign In</a></div>";
					echo "<div><a href=\"sign-up.php\" class=\"btn-sign\">Sign Up</a></div>";
				}
			?>
		</div>
	</nav>
</header>
<body style="background-image: url('../../public/images/bg-main.jpg'); background-repeat: no-repeat; background-size: cover;">
	<div class="container">
    		<h1>Welcome To FunPic</h1>
		<p>the ultimate place to turn your photos into fun, creative memories! With FunPic, you can easily capture your best moments, mix them with other images, and create unique, unforgettable pictures. Whether you're taking a selfie, capturing a special event, or just having fun with friends, FunPic lets you express your creativity like never before. Enjoy the experience of transforming ordinary photos into extraordinary creations, and share your fun moments with the world!"</p>
	</div>
</body>
<footer>

</footer>
</html>
