<?php 





 ?>
<!DOCTYPE html>
<html>
<head>
	<title>RMS Bakery</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="icon" href="logo.jpg" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<style type="text/css">
	.loginbox input[type="file"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.loginbox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background:#904403;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
</style>
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
						<li><a href="../index.html">Log Out</a></li>
					<li><a href="contact.php">Contact</a></li>
				
					
				</ul>
				<a href="#" class="mobile-icon" onclick="slideshow()"><i class="fa fa-bars"></i></a>
			</div>
		</nav>
		<br/>
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
       <br/>
         <h1 style="text-align: center;">Upload your recipes</h1>
         <div style="text-align: center;">
          <video loop id="myVideo" autoplay="true" >
  <source src="vid/rmsbk.mp4" type="video/mp4" style="text-align: centre;">
</video>
</div>
<br>
<div class="loginbox" style="text-align: center; ">
 <form method="POST" enctype="multipart/form-data" action="upload.php">
&nbsp <input style="position:relative;" type="file" name="file">

<input type="submit" name="upload" value="Upload">
<br/>
<p>please upload your recipies in pdf format or img</p>

  </form>
</div>
  <br/>
  <br/>
  
<h1 style="text-align: left;">Uploaded files</h1>
<!--<audio controls autoplay="true">
	<source src="Kalimba.mp3" type="audio/mpeg">
</audio>-->
</div>
       
  <?php

  $files=scandir("../uploads");
  for ($a=2; $a < count($files); $a++) { 

  	?>
  	<h3 style="text-align: left;">
  	<tr><a style="position:centre; color:white;" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a></tr></table><br/>
  	</h3>
  	<?php
  }
  ?>