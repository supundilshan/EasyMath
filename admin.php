<!DOCTYPE html>
<html lang="en">
<head>
<title> EasyMath-Admin</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="">
<meta name="Description" content="">


<!-- == CSS == -->
<link rel="stylesheet" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" >
<link rel="stylesheet" href="css/about.css">
<link rel="stylesheet" href="css/bootstrap.css"><!--make ikons blue-->
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
<link rel="stylesheet" href="css/style2.css">        

<style>
table,tr,td {margin:20px;padding:10px;border:1px solid;}
</style>
<script src="jquery-3.3.1.min.js"></script>

</head>

<body style="background-color: #99ccff">
<div class="super_container">
<!-- Header-->
<div style="background-image:url(img/header_bg.jpg);background-repeat: no-repeat;background-attachment: fixed;">
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="header_content d-flex flex-row align-items-center justify-content-start">
					<div class="logo">
						<a href="index.html"><h2 style="color: white"><i>EASYMATH</i></h2></a>
					</div>

					<div style="padding-left: 30%">
						<select id="select-lan" onchange="changelan(this.value)">
							<option value="0" autofocus>  ENG </option>								
							<option value="1">  සිං </option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<div class="row" style="background-color:rgb(0,0,0,.4);">
		<div class="col">
			<div class="header_content d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="admin.php">Admin</a></li>
					<li><a href="#ft">Contact</a></li>
					<li><a href="#ft">Follow</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>	
<!-- End Header -->
<?php
function redirect($url){
	ob_start();
	header('Location:'.$url);
	ob_end_flush();
	die();
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$f_name=$_POST["name"];
	$f_pass=$_POST["pass"];
	$name="admin";
	$pass="admin";
	if($f_name===$name && $f_pass===$pass){
		$msg="success<br>";
		redirect("admin_home.php");
	}
	else{
		$msg="error<br>";
		
	}	
}
else{
	$msg="enter your<br>";
}

?>

<!-- ==== Form Area === -->
<div name="a-form" style="margin-bottom: 50px; padding: 20px;width: 100%; margin-left: 15% ;margin-top:200px">

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<span style="color:red"> <?php echo $msg; ?> </span>
		<!-- user Name -->
		<input id="name" name="name" type="text"   placeholder="User Name" required="required"><br><br>
		<!-- password -->
		<input id="pass" name="pass" type="password"   placeholder="Password" required="required"><br><br>
			
		<button id="send" class="contact_button button" >ENTER</button>
	</form>
		
</div>
<!-- ==== END Form Area === -->


<!-- Footer section  -->
<div style="background-color: #ffffb3; margin-bottom: 10px; margin-top: 50px; padding-top: 30px" id="ft">
	<footer class="footer-section set-bg">
		<div class="container" style="padding-left: 20%">
			<div class="row">
				
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-phone"></i>011 2658 254 </p>
						<p><i class="fa fa-envelope"></i>easymath@gmail.com</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="social">
						<h5 class="fw-title">FOLLOW US </h5>
						<ul>
							<li> <a href="#"><i class="fa fa-facebook"></i> Facebook </a> </li>
							<li> <a href="#"><i class="fa fa-instagram"></i> Instagram </a> </li>
							<li> <a href="#"><i class="fa fa-youtube"></i> Youtube </a> </li>
						</ul>
							
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="social">
						<h5 class="fw-title"> FOLLOW US </h5>
						<ul>
							<li> <a href="#"><i class="fa fa-twitter"></i> Twiter </a> </li>
							<li> <a href="#"><i class="fa fa-pinterest"></i> Pinterest </a> </li>
							<li> <a href="#"><i class="fa fa-linkedin"></i> Linkedin </a> </li>
						</ul>
							
					</div>
				</div>

			</div>
		</div>

		<div class="footer-bottom">
			<div class="col-lg-3 col-md-6 footer-widget">
				<div class="row">
					<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="index.html"><b>easymath.lk</b></a></p> 
				</div>
			</div>
		</div>
	</footer>
</div>
<!-- End Footer section  -->
</div><!-- =====  supper container  ==== -->


<!-- == script == -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="js/about.js"></script>       
<script src="js/stellar.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/theme.js"></script>




</body>
</html>