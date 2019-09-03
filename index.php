<!DOCTYPE html>
<html>
	<head>
		<title>News Flash</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" type="text/css" href="style.css">

	</head>
<body>
	<div class="container">
		<div class="row">
    		<div class="col-sm-4">
				<img src="img1.jpg" style="width:20%""height:20%">
			</div>
			<div class="col-sm-8">
				<h1><b><i>"Everything's Not Always About You..."</i></b></h1>
			</div>
		</div>

	<div class="topnav" id="myTopnav">
		<a href="#home" class="active"><i class="fa fa-fw fa-home"></i>Home</a>
		<a href="home.php"><i class="fa fa-fw fa-search"></i> Publication</a> 
  		<a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  		<!--<a href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>-->
	  	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i></a>
	</div>


	<div class="slideshow-container">

	<div class="mySlides fade">
	  <img src="img2.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	  <img src="img3.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	  <img src="img4.jpg" style="width:100%">
	</div>
	<div class="mySlides fade">
	  <img src="img5.jpg" style="width:100%">
	</div>
	

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span>
	  <span class="dot"></span> 
 
	</div>
	
	<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}
	
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
	    dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
	</script>
</body>
</html> 
