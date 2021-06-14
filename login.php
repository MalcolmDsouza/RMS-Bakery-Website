<?php
$conn=mysqli_connect("localhost","root","","rmsbakery");
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
	<div class="loginbox" style="background-color: transparent;">
		<br/>
	<img src="avatare.png" class="avatar" >
		<?php
require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: bak_login/index.html"); // Redirect user to index.php
            }else{
				echo "<script>alert('Username/Password incorrect');</script>";
				}
    }else{
}


?>
	<form method="post" onLogin="return Hello(this)">
		<h1>Login here</h1>
		<p>Username</p>
		<input type="text" name="username" placeholder="Enter Username" required>
		<p>Password</p>
		<input type="Password" name="password" placeholder="Enter Password" required>
		<input type="submit" name="submit" value="Login">
	</form>
		<a href="forgot.php">Update Your password?</a><br>
		<a href="signup.php">Don't have an account</a><br>
		<a href="delete.php">Delete account</a>
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
