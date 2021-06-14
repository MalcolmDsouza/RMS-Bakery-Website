<?php
$conn=mysqli_connect("localhost","root","","register");

error_reporting(0);
$_GET['email'];
$_GET['password'];
?>
<html>
<head>
<title>Login form</title>
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
	
	<form method="get" >
		<h1>Update your Password?</h1>
		<p>Registered Email-id</p>
		<input type="email" name="email" placeholder="Enter Email-id" required style="border: none;border-bottom: 1px solid #fff;background: transparent;outline: none;height: 40px;color: #fff;font-size: 16px;">
		<p>New Password</p>
		<input type="Password" name="password" placeholder="Enter the new Password" required>
		<input type="submit" name="submit" value="Submit" >
	</form></div>
	<?php
	if($_GET['submit']){
	$email=$_GET['email'];
	$password=$_GET['password'];
	$query = "UPDATE users SET password='".md5($password)."' WHERE email='$email'";
	$data=mysqli_query($conn, $query);
	if($data){
	echo"record updated sucessfully";
	
	header("location:login.php");
}
else{
	echo"record not updated";

}
}
?>
		
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
