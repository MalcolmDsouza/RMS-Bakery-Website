
<!DOCTYPE html>
<html>
<head>
	<title>RMS Bakery</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="icon" href="logo.jpg" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<body>
	<header>
		<nav>
			<div class="row clearfix">
				<a href="index.html"><img src="images/logo.jpg" class="logo"></a>
				<ul class="main-nav animated slideInDown" id="check-class">
					<li><a href="index.html">home</a></li>
					<li><a href="cake.html">Cakes</a></li>
					<li><a href="choco.html">Chocolates</a></li>
					<li><a href="donut.html">Donuts</a></li>
					<li><a href="signup.html">Sign Up</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href=""><img src="images/cart.png" id="img-cart"></a></li>
					
				</ul>
				<a href="#" class="mobile-icon" onclick="slideshow()"><i class="fa fa-bars"></i></a>
			</div>
		</nav>
		<div class="main-content-header">
		<h1>WELCOME TO <span class="colorchange">RMS Bakery</span>. <br>
			BAKED WITH LOVE.</h1>
		<a href="about.html" class="btn btn-full">About Us</a>
		<a href="uploade.php" class="btn btn-nav">Upload Recipes</a>	
	</div>

	</header>



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