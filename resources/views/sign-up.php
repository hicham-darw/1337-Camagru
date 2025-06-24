<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			background-image: url('../../public/images/bg-sign.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
		.container {
			margin-	
		}
		
		.form {
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 1% 0%;
		}
		.form div label{
			font-size: 40px;
			width: 300px;
			height: auto;
			color: white;
		}
		.form div input {
			width: 300px;
			height: 30px;
			margin-bottom: 10%;
			border-radius: 20px;
			border: 3px solid transparent;
		}
		.form div input:hover {
			border: 3px solid lightgreen;
			transition: border 0.5s ease;
		}
		.form div button {
			padding: 10px 40px;
			border-radius: 20px;
			border: 2px solid black;
		}
		.form div button:hover {
			border: 2px solid lightgreen;
			background-color: rgba(210, 210, 210, 1);
		}
		.btn-home{
			text-decoration: none;
			font-size: 50px;
			color: white;
		}
		span {
			background-color: orange;
			border: 1px solid white;
			border-radius: 10px;
			padding: 5px 10px;
		}
		.header {
			margin-top: 5%;
			margin-left: 20%;
			margin-right: 20%;
			display: flex;
			justify-content: center;
			font-size: 40px;
			color: darkorange;
		}
		.header h1 {
			font-size: 60px;
		}
	</style>
  </head>
  <body>
	<div>
  		<nav style="display: flex; justify-content: space-between; margin-top: 1%;">
			<div style="margin-left: 5%;">
				<a class="btn-home" href="#"><span>Fun</span>Pic</a>
			</div>
		</nav>
	</div>
	<div class="header">
		<h1> create your account and be part of something awesome!</h1>
	</div>
    	<div class="container">
		<!--   implement Controller don't forget this !!!!!-->
		<form action="../../controllers/UserController.php" method="POST" class="form">
			<div>
				<label for="username">Username</label><br>
				<input type="text" name="username" placeholder="  username" required><br>
			</div>
			<div>
				<label for="email">Email</label><br>
				<input type="email" name="email" placeholder="  email" required>
			</div>
			<div>
				<label for="password">Password</label><br>
				<input type="password" name="password" placeholder="  password" required><br>
			</div>
			<div>
				<button type="submit">Sign Up</button>
			</div>
		</form>	
 	<div>
  </body>
</html>
