<?php
$conn=mysqli_connect("localhost","root","","register");

?>
<!DOCTYPE html>
<html>
<head>
	<title>RMS Bakery</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
  
<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="icon" href="logo.jpg" type="image/x-icon"/>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
     <style>
        
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

@media only screen and (max-width:768px){
  h1{font-size: 180%}
  .main-nav{display:none;}
  .mobile-icon{
    display: inline-block;
    color: #fff;
    float: right;
    margin-top: 30px;f
    margin-right: 20px;
  }
  .main-nav{float:right;}
  .main-nav li{
    
    display:block;
    margin-top: 10px;

  }
.and{width: 200px; 
  float:left; 
  height:200px;
   background:transparent;
    margin:5px;
  }
  .contact-title{
  margin-top: 20px;
  color:#fff;
  text-transform: uppercase;
  transition: all 4s ease-in-out;
 
}
.contact-title h1{
  font-size: 20px;
  line-height: 5px;
  text-align: center;
}
.contact-title h3{
  font-size: 9px;
  text-align: center;
}
.form{
  margin-top: 25px;
  transition: all 4s ease-in-out;
}
.form-control{
  width: 200px;
  background:transparent;
  border:none;
  outline: none;
  border-bottom: 1px solid gray;
  color: #fff;
  font-size: 18px;
  margin-bottom: 16px; 
}
input{
  height: 25px;
}
.contact-title input[type="submit"]
{
  border: none;
  outline: none;
  height: 20px;
  background:#904403;
  color: #fff;
  font-size: 10px;
  border-radius: 20px;
}
.contact-title input[type="submit"]:hover
{
  cursor: pointer;
  background:#ECC36A;
  color: #000;
}
}}

/*body {font-family: Arial, Helvetica, sans-serif;}*/
* {box-sizing: border-box;}


.contact-title{
  margin-top: 20px;
  color:#fff;
  text-transform: uppercase;
  transition: all 4s ease-in-out;
 
}
.contact-title h1{
  font-size: 32px;
  line-height: 10px;
  text-align: center;
}
.contact-title h3{
  font-size: 16px;
  text-align: center;
}
.form{
  margin-top: 50px;
  transition: all 4s ease-in-out;
}
.form-control{
  width: 400px;
  background:transparent;
  border:none;
  outline: none;
  border-bottom: 1px solid gray;
  color: #fff;
  font-size: 18px;
  margin-bottom: 16px; 
}
input{
  height: 45px;
}
.contact-title input[type="submit"]
{
  border: none;
  outline: none;
  height: 40px;
  background:#904403;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}
.contact-title input[type="submit"]:hover
{
  cursor: pointer;
  background:#ECC36A;
  color: #000;
}
/p////

.socialWrapper { display: block; text-align: center; height: 50vh; padding-top: 15%; color: #fff; letter-spacing: 2px; font-family: 'Bangers', cursive; text-shadow: 1px 1px #222; background: #7B1FA2; -webkit-transition: all 0.2s ease-out; -moz-transition: all 0.2s ease-out; -o-transition: all 0.2s ease-out; transition: all 0.2s ease-out; }
.socialWrapper h1 { font-size: 28px; }
ul.social { list-style: none; display: inline-block; margin: 0; padding: 0; }
.social li { float: right; size: 20px; }
.social li a { color: #e2e2e2; margin-right: 10px; }
.hide { display: none; }
.socialActive1 { background: #3b5998; }
.socialActive2 { background: #00aced; }
.socialActive4 { background: #222222; }
.socialActive5 { background: #0077B5; }
.socialActive3 { background: #d34836; }
.socialWrapper .default { display: block; }
.socialWrapper.socialActive1 .default, .socialWrapper.socialActive2 .default, .socialWrapper.socialActive3 .default, .socialWrapper.socialActive4 .default, .socialWrapper.socialActive5 .default { display: none; }
.socialWrapper.socialActive1 .head1, .socialWrapper.socialActive2 .head2, .socialWrapper.socialActive3 .head3, .socialWrapper.socialActive4 .head4, .socialWrapper.socialActive5 .head5 { display: block; }


</style>
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
        <br/>
        <br/>
        <br/>
<span class="colorchange"><h1 align=center>Special <strong>20%</strong> discount on Sunday's</h1></span>
       


<div style="width: 400px; float:left; height:400px; background:transparent; margin:10px">
<div class="contact-title" style="width: 400px;height: 500px;">
  
  <h1>Feedback</h1>
  <h3>We are always ready to serve you!!!</h3>
      <?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];
 

  

$query="insert into feed(name,email,message)values('$name','$email','$message')";
$run=mysqli_query($conn,$query);

if($run){
  echo "";
}
else{
  echo"error:".mysqli_error($conn);
}
}
?>
    <form id="contact-form" method="post" action="">
      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
      <input type="email" name="email" class="form-control" placeholder="Your Email" required>
      <textarea name="message" class="form-control" placeholder="Message" rows="4" required=""></textarea>
      <div class="container" style="width:600px;">
   <h2 align="left">Your favourite branch</h2><br /><br />
   <select name="country" style="color: black; background-color: white" id="country" class="form-control input-lg">
    <option value="" style="color: black; background-color: white">Select country</option>
   </select>
   <br />
   <select name="state" style="color: black; background-color: white" id="state" class="form-control input-lg">
    <option value="" style="color: black; background-color: white">Select state</option>
   </select>
   <br />
   <select name="city" style="color: black; background-color: white"id="city" class="form-control input-lg">
    <option value="" style="color: black; background-color: white">Select city</option>
   </select>
  </div>
      <input type="submit" name="submit" class="form-control submit" value="SEND MESSAGE">


    </form>

<div class="socialWrapper">
      <h3>
        <span class="hide default" style="text-align: left;">Connect with us</span>
        <span class="hide head1" style="position: centre;">facebook</span>
        <span class="hide head2">twitter</span>
        <span class="hide head3">google+</span>
        <span class="hide head4">github</span>
        <span class="hide head5">linkedin</span>
      </h3>
      <ul class="social">

        <li><a href="https://facebook.com/arximughal"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <li><a href="https://twitter.com/arximughal"><i class="fa fa-twitter-square fa-2x"></i></a></li>
        <li><a href="https://plus.google.com/+ArslanAslam123"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
        <li><a href="https://github.com/arximughal"><i class="fa fa-github-square fa-2x"></i></a></li>
        <li><a href="https://pk.linkedin.com/in/marslanaslam"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
      </ul>
    </div>


</div>
</div>

<div id="and" style="width: 400px; float:left; height:400px; background:transparent; margin:10px;" 
>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
 
                      <p><h2  style="text-align: center;">RMS Bakery</h2></p>
                      <p style="text-align: center;">3rd floor,Pheonix mall,Kurla west</p>
                      <br/>
                     

                     <p> <h2 style="text-align: center;">Business hours</h2></p>
                     <p style="text-align: center;">Monday-Friday : 9am - 9pm</p>
                     <p style="text-align: center;">Saturday : 9am - 7pm</p>
                     <p style="text-align: center;">Sunday closed</p>
                     <br/>
                   
                      <p><h2 style="text-align: center;">Trick-or-Treat Downtown</h2></p>
                      <p style="text-align: center;">Saturday, October 19: 3:30pm - 5pm</p>
</div>
<div style="width: 400px; float:left; height:500px; background:transparent; margin:10px">
  <section class="geolocation">
            <h1 style="font-size: 32px; line-height: 10px;
  text-align: center; margin-top: 20px;">Our location</h1>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.4870746536744!2d72.88661361418524!3d19.08627658708201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c887efb78b9f%3A0x9f9dc99c3119470a!2sPhoenix%20Marketcity%2C%20Mumbai!5e0!3m2!1sen!2sin!4v1566977815827!5m2!1sen!2sin" width="400" height="280" frameborder="0" style="border:2;" allowfullscreen=""></iframe>

</section>
<h1 style="text-align: left;">Our Branches</h1>

<button type="button" onclick="loadDoc()" position="centre">Click here for Branches</button>
<br><br>
<table id="demo"></table>
  </div>
  <script>
$(document).ready(function(){

 load_json_data('country');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('country_state_city.json', function(data){

   html_code += '<option value="">Select '+id+'</option>';
   $.each(data, function(key, value){
    if(id == 'country')
    {
     if(value.parent_id == '0')
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#country', function(){
  var country_id = $(this).val();
  if(country_id != '')
  {
   load_json_data('state', country_id);
  }
  else
  {
   $('#state').html('<option value="">Select state</option>');
   $('#city').html('<option value="">Select city</option>');
  }
 });
 $(document).on('change', '#state', function(){
  var state_id = $(this).val();
  if(state_id != '')
  {
   load_json_data('city', state_id);
  }
  else
  {
   $('#city').html('<option value="">Select city</option>');
  }
 });
});
</script>
<br/>
<div class="main">
        <div class="products">
            <div class="column">
                <div class="card">
                    <ul>
                                    
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
            <div class="column">
                <div class="card">
                    
                </div>
            </div>
            <div class="column">
                <div class="card">
                    
                </div>
            </div>
          



<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "cd_catalog.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>City</th><th>Area</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>
 

        <div class="main">
        <div class="products">
            <div class="column">
                <div class="card">
                    <ul>
                                    
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
        
                      <!--  <section class="geolocation">
            <h1>Our location</h1>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.4870746536744!2d72.88661361418524!3d19.08627658708201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c887efb78b9f%3A0x9f9dc99c3119470a!2sPhoenix%20Marketcity%2C%20Mumbai!5e0!3m2!1sen!2sin!4v1566977815827!5m2!1sen!2sin" width="300" height="250" frameborder="0" style="border:2;" allowfullscreen=""></iframe>

</section>
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
             <div class="column">
                <div class="card">
                </div>
            </div>
             <div class="column">
                <div class="card">
                    <h2>Address</h2><br/>
                   <p><b>Phoenix Marketcity</b>, Mumbai LBS Rd, Kamani, Kurla West, Kurla, Mumbai, Maharashtra 400070</p>
                </div>
            </div>
        </div>
        </div>
    </div>
    -->


    <script type="text/javascript">
      $(".social li a").each(function(i){
        $(this).hover(function(){
          $(".socialWrapper").toggleClass("socialActive"+(i+1));
        });
      });
    </script>
<!--<div class="socialWrapper">
      <h2>
        <span class="hide default" style="text-align: left;">Connect with us</span>
        <span class="hide head1" style="position: centre;">facebook</span>
        <span class="hide head2">twitter</span>
        <span class="hide head3">google+</span>
        <span class="hide head4">github</span>
        <span class="hide head5">linkedin</span>
      </h2>
      <ul class="social">

        <li><a href="https://facebook.com/arximughal"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <li><a href="https://twitter.com/arximughal"><i class="fa fa-twitter-square fa-2x"></i></a></li>
        <li><a href="https://plus.google.com/+ArslanAslam123"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
        <li><a href="https://github.com/arximughal"><i class="fa fa-github-square fa-2x"></i></a></li>
        <li><a href="https://pk.linkedin.com/in/marslanaslam"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
      </ul>
    </div>-->
		

   <!--<footer><p style="margin-left:500px; font-size:12px; font-family:arial; color:'white'">&nbsp; &copy 2019 RMS Bakery. All rights reserved. <a href="privacy.html" style="text-decoration:none" target="_blank"><font color="white">Privacy Policy</font></a> | <a href="terms.html" target="_blank" style="text-decoration: none"> <font color="white">Terms of Use</font></a></p></footer> -->

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
