<?php
	session_start();
	
	$conn=mysqli_connect("localhost","root","","register");
	if(isset($_POST["username"])){

			$username=$_POST['username'];	
		
		
			$password=$_POST['password'];

		$query="DELETE FROM users WHERE username='$username'";
		$data=mysqli_query($conn,$query);
		if($data){
			echo "<script>alert('successfully deleted')</script>";
		}

		
		}
	
	
	
?>
<html>
<head>
<title>Delete form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	 <link rel="icon" href="logo.jpg" type="image/x-icon"/>
<link rel="shortcut icon" href="index.html" type="image/x-icon"/>
<body>
	<header>
		<nav>
			<div class="row clearfix">
				<a href="index.html"><img src="images/logo.jpg" class="logo"></a>
				<ul class="main-nav animated slideInDown" id="check-class">
					<li><a href="index.html">home</a></li>
					<li><a href="cake.html">Cakes</a></li>
					<li><a href="cookie.html">Cookies</a></li>
					<li><a href="donut.html">Donuts</a></li>
					<li><a href="signup.php">Sign Up</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="contact.php">Contact</a></li>
		
					
				</ul>
				<a href="#" class="mobile-icon"   onclick="slideshow()"> <i class="fa fa-bars"></i></a>
			</div>
		</nav>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
				<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	<div class="loginbox">
		<br/>
	<img src="avatare.png" class="avatar" >
	
	<form method="post" action="delete.php">
		<h1>Delete account</h1>
		<p>Username</p>
		<input type="text" name="username" placeholder="Enter Username" required>
		<p>Password</p>
		<input type="Password" name="password" placeholder="Enter Password" required>
		<input type="submit" name="submiit" value="Delete Account" >
	</form>
	
	</div>

<script type="text/javascript">
	function slideshow(){
		var x =document.getElementById('check-class');
		if(x.style.display==="none"){
			x.style.display="block";

		}
		else{
			x.style.display="none";
		}

	}
	</script>
</body>
</html>