<?php
$conn=mysqli_connect("localhost","root","","rmsbakery");

?>
<!DOCTYPE html>
<html>
<head>
<title>Signup form</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	 <link rel="icon" href="logo.jpg" type="image/x-icon"/>
<link rel="shortcut icon" href="index.html" type="image/x-icon"/>
<style type="text/css">
	@import url(https://weloveiconfonts.com/api/?family=entypo);
	#wrapper{
		width: 350px;
		height: 50px;
		margin: 50px;
	}
	.box{
		width: 50px;
		height: 50px;
		border-radius: 50px;
		font-family: entypo;
		color: #212121;
		background: #fff;
		text-align: center;
		line-height: 50px;
		font-family: 25px;
		display: block;
		cursor: pointer;
		margin: 10px;
		transition: 1s;
	}
	.box:hover{
		color: #fff;
		transform: scale(1.15);
		transition: 1s;
	}
	#facebook:hover{
		background-color: rgb(59, 89, 152);
		box-shadow: inset 0 0 0 22px #3A5795;
		transform: rotate(360deg) scale(1.15);
		transition: 1s;
	}
	#twitter:hover{
		background-color: rgb(85, 172, 238);
		box-shadow: inset 0 0 0 22px #3A5795;
		transform: rotate(360deg) scale(1.15);
		transition: 1s;
	}
	#google:hover{
		background-color: rgb(221, 75, 57);
		box-shadow: inset 0 0 0 22px #3A5795;
		transform: rotate(360deg) scale(1.15);
		transition: 1s;
	}
	#linkedin:hover{
		background-color: rgb(0,123,181);
		box-shadow: inset 0 0 0 22px #3A5795;
		transform: rotate(360deg) scale(1.15);
		transition: 1s;
	}

</style>
</head>
<body>
	<header>
		<nav>
			<div class="row clearfix">
				<img src="images/logo.jpg" class="logo">
				<ul class="main-nav animated slideInDown" id="check-class">
					<li><a href="index.html">home</a></li>
					<li><a href="cake.html">Cakes</a></li>
					<li><a href="choco.html">Chocolates</a></li>
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
		<br/>.
		<br/>
		<div class="main">
        <div class="products">
            <div class="column">
                <div class="card">
                </div>
            </div>
             <div class="column">
                <div class="card">
                  
                </div>
            </div>
            <div class="column">
                <div class="card">
                </div>
            </div>
            
           </div>
       </div>
		<?php
require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }
?>
		
	<form method="post" action="" onSubmit = "return checkPassword(this)" >
		<div id="login-box">
			<div class="left-box">
				<h1>Sign Up</h1>

				<input type="text" name="username"  placeholder="Enter Username" autofocus required pattern="[a-zA-Z]{3,}"/>
				<input type="email" name="email" placeholder="Enter Email" />
				<input type="tel" name="phoneNo" placeholder="Enter Mobile phoneNo" pattern="[0-9]{10}" required />
				<input type="password" name="password" id="password1" placeholder="Enter password"/ min="6" max="20">

				<input type="password" name="password2" id="password2" placeholder="Retype password" required />
				<input type="submit" name="Submit" value="Submit" />
			</div>
		</form>
			<div class="right-box">
				<span class="signinwith">Sign in with<br/>Social Network</span>
				<!--<div class="social">
		 <h3>Follow<h3>
            <ul>
                <div class="fb">
                    <li><i class="fab fa-facebook-square" style="transform: translateX(-23px);"></i><a href="#">Facebook</a></li>
                 </div>
                 <div class="twit">
                <li><i class="fab fa-twitter-square" style="transform: translateX(-23px);" ></i><a href="#">Twitter</a></li>
                 </div>
            <div class="ins">
                <li><i class="fab fa-instagram" style="transform: translateX(-23px);" ></i><a href="#">instagram</a></li>
            </div>
            <div class="linked">
                <li><i class="fab fa-linkedin"  style="transform: translateX(-23px);"  ></i><a href="#">Linkedin</a></li>  
                </div> 
            </ul>
    </div>-->  
    <div id="wrapper">
				<div class="box" id="facebook" >&#62220;</div>
				<div class="box" id="twitter">&#62217;</div>
				<div class="box" id="google">&#62223;</div>
				<div class="box" id="linkedin">&#62232;</div>
			</div>
			</div>
			
			<div class="or">OR</div>




		</div>
<script type="text/javascript">
   function checkPassword(form) { 
                password1 = form.password1.value; 
                password2 = form.password2.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    alert("Password Match: Welcome to RMS Bakery!") 
                    return true; 
                } 
            } 

        </script>
</script>
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