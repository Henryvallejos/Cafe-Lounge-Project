<?php
echo "<pre>";


	print_r($_POST);
		
	$username = $_POST['name'];
	$userEmail = $_POST['email'];
	$messageSubject = $_POST['subject'];
	$message = $_POST['message'];



echo </pre>;



?>


<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<!-- Google Font below -->
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
	<!-- Google Fonts code above -->
	<!-- Font Awesome Code Below -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
	
		<!-- Navigation -->
<nav>
		<div class="logo">
	    <img src="images/CafeLoungeLogo.png"  alt="Coffee Lounge Logo" class="logo"/> 
		</div>
		<ul class="nav-links">
			<li><a href="index.html">Home</a></li>
			<li><a href="shop.html">Shop</a></li>
			<li class="cart"><a href="cart.html">Cart <i class="fas fa-shopping-cart"></i><span> 0</span></a></li>
			<li><a href="contact.html">Contact Us</a></li>
		</ul>
		<div class="togglebutton">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</nav>
	
	<!-- Main Content Area -->
	
	<div class="containerform">
		<form action="contact.php" method="POST" class="form">
			<div class="form-group">
			<label for="name" class="form-label">Name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" tabindex="1" required>
			</div>
			<div class="form-group">
				<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="yourname@email.com" tabindex="2" required>
			</div>
			<div class="form-group"
				 ><label for="subject" class="form-label">Subject</label>
			<input type="text" class="form-control" id="subject" name="subject" placeholder="Nature of Business" tabindex="3" required>
			</div>
			<div class="form-group">
				<label for="message" class="form-label">Message</label>
				<textarea row="5" cols="50" id="message" name="message" placeholder="Comments are made here" tabindex="4" class="form-control"></textarea>
			</div>
			<div>
				<button class="contentbutton" type="button" style="vertical-align: middle"><span>Send Email</span></button>
			</div>
		</form>
	</div>
	
	
	
	
			<!-- Footer Area -->
	<footer>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-square"></i></a>
			<a href="#"><i class="fab fa-instagram-square"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
			<a href="#"><i class="fab fa-twitter-square"></i></a>
		</div>
		<ul class="list">
			<li><a href="#">Home</a></li>
			<li><a href="#">Careers</a></li>
			<li><a href="#">Terms</a></li>
			<li><a href="#">Policy</a></li>
		</ul>
		<p class="copyright">&copy Cafe Lounge 2021, All Rights Reserved.</p>
	</footer>
	
	
<!-- Script Link Below -->
	<script src="script.js"></script>
	<script src="shop.js"></script>
	
</body>
</html>
