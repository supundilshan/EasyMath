<!DOCTYPE html>
<html lang="en">
<head>
<title> EasyMath-Insert-GRADE6</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="easymath,math,maths,mathematics,ansver,solutions,question,grade 6">
<meta name="Description" content="Ansver your any questions and we are ready to help you.">


<!-- ===CSS===-->
<link rel="stylesheet" href="../../css/contact.css">
<link rel="stylesheet" href="../../plugins/font-awesome-4.7.0/css/font-awesome.min.css" >
<link rel="stylesheet" href="../../css/about.css">
<link rel="stylesheet" href="../../vendors/nice-select/css/nice-select.css">
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="../../css/style2.css">
<style>
	.testi_item {background-color:rgb(128, 204, 255,.5)}
</style>
</head>

<body style="background-color: #99ccff" onload="on_load(0)"> 

<div class="super_container">
<!-- Header-->
<div style="background-image:url(../../img/header_bg.jpg);background-repeat: no-repeat;background-attachment: fixed;">
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="header_content d-flex flex-row align-items-center justify-content-start">
					<div class="logo">
						<a href="../../index.html"><h2 style="color: white"><i>EASYMATH</i></h2></a>
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
					<li><a href="../../index.html">Home</a></li>
					<li><a href="../../admin.php">Admin</a></li>
					<li><a href="#ft">Contact</a></li>
					<li><a href="#ft">Follow</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>	
<!-- End Header -->


<!--================projects Area =================-->
<!--=========english=========-->
<div id="projects-eng" style="margin-top: 150px; margin-bottom: 50px">
 <section class="testimonials_area p_120" style="background-color: rgb(204, 255, 255,.5)">
    <div class="container">
        <div class="testi_inner row">
        	<div class="col-lg-3">
        		<div class="test_title">
        			<h3>SEE</h3>
        			<h3>OUR</h3>
        			<h3>LATEST</h3>
        			<h3>POST</h3>
        		</div>
        	</div>

        	<div class="col-lg-9">
        		<div class="testi_slider owl-carousel">

        			<div class="item">
        				<a href="page1.html" target="_blank">
	        				<div class="testi_item">
	        					<h4>NO POST YET</h4>
								<p>sorry! there are no post</p>
							</div>
        				</a>
        			</div>

        			<div class="item">
        				<a href="page1.html" target="_blank">
        					<div class="testi_item">
								<h4>NO POST YET</h4>
								<p>sorry! there are no post</p>
							</div>
        				</a>
        			</div>

        			<div class="item">
        				<a href="page1.html" target="_blank">
        					<div class="testi_item">
								<h4>NO POST YET</h4>
								<p>sorry! there are no post</p>
							</div>
        				</a>
        			</div>

        		</div>
        	</div>
        </div>
    </div>
</section>
</div>
<!--=========sinhala=========-->
<div id="projects-sin" style="margin-top: 150px; margin-bottom: 50px">
 <section class="testimonials_area p_120" style="background-color: rgb(204, 255, 255,.5)">
    <div class="container">
        <div class="testi_inner row">
        	<div class="col-lg-3">
        		<div class="test_title">
        			<h3>අපගේ </h3>
        			<h3>නවතම </h3>
        			<h3>ගණිත </h3>
        			<h3>විසඳුම්</h3>
        		</div>
        	</div>

        	<div class="col-lg-9">
        		<div class="testi_slider owl-carousel">

        			<div class="item">
        				<a href="page1.html" target="_blank">
	        				<div class="testi_item">
	        					<h4> ගටලු  නැත </h4>
								<p> කනගාටුයි! දැනට ගටලු ඉදිරිපත්වි  නැත.</p>
							</div>
        				</a>
        			</div>

        			<div class="item">
        				<a href="page1.html" target="_blank">
        					<div class="testi_item">
								<h4> ගටලු  නැත </h4>
								<p> කනගාටුයි! දැනට ගටලු ඉදිරිපත්වි  නැත.</p>
							</div>
        				</a>
        			</div>

        			<div class="item">
        				<a href="page1.html" target="_blank">
        					<div class="testi_item">
								<h4> ගටලු  නැත </h4>
								<p> කනගාටුයි! දැනට ගටලු ඉදිරිපත්වි  නැත.</p>
							</div>
        				</a>
        			</div>

        		</div>
        	</div>
        </div>
    </div>
</section>
</div>
</div>
<!--================End projects Area =================-->

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
$s_name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$question=$_POST["t-area"];
$date=date("ymd");

$filename=date("y-m-d")."_".$s_name."_".$subject;

/*open text file to put question*/
$myfile = fopen("user_uploads/".$filename.".txt", "w") or die("Unable to open file!");
fwrite($myfile, $question);
fclose($myfile);
/*open text file to put question*/

/*upload attached file*/
if(!empty($_FILES['fileToUpload'])){
	$target_dir = "user_uploads/";
	$target_file = $target_dir . $_FILES["fileToUpload"]["name"];

	//get the file type
	$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if($FileType){
		$attach_file=$FileType;
	}
	else{
		$attach_file="";
	}

	//rename file before save
	$new_name=$target_dir.$filename.".".$FileType ;

	//save file targeted directry
	$save=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $new_name);

	$msg= "File uploaded.<br>";	
}
//database part
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	
	// check database is exist
	if(mysqli_select_db($conn,'uploads')){
		
		// check table is exist
		if(!$conn->query("DESCRIBE grade6")){
			$create_tb="create table grade6 (number int AUTO_INCREMENT PRIMARY KEY, up_date date not null, s_name varchar(200) not null,text_file varchar(250) not null,attach_file varchar(250),email varchar(250));";
			$tb=$conn->query($create_tb);	
		}
	}
	else{
		//Create DB
		$create_db="create database uploads";
		$db=$conn->query($create_db);
		
		//connect DB
		$conn_2=mysqli_select_db($conn,'uploads');
		//CREATE TABLE
		$create_tb="create table grade6 (number int AUTO_INCREMENT PRIMARY KEY, up_date date not null, s_name varchar(200) not null,text_file varchar(250) not null,attach_file varchar(250),email varchar(250));";
		$tb=$conn->query($create_tb);
	}
//enter data
$sql="insert into grade6 ( up_date , s_name ,text_file ,attach_file ,email ) values ($date,'$s_name','$filename','$attach_file','$email');";
$conn->query($sql);
}
else{
	$msg="";
}
?>

<!-- ==== Form Area === -->
<div style="background-image:url(../../img/project_bg.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size:auto;">

<div name="q-form" class="col-lg-8" style="margin-bottom: 50px; background-color: rgb(255,225, 255,.3); padding: 20px;width: 100%; margin-left: 15%">
	<div class="contact_form_container">
		<form class="contact_form" id="contact_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
			<h4 id="fh" style="color:black"> Enter your details and question.</h4>
			<span style="color:white"> <?php echo $msg; ?> </span>
			<div class="row">
				<!-- Name -->
				<div class="col-lg-6 contact_name_col">
					<input id="name" name="name" type="text" name="name" class="contact_input" placeholder="Name" required="required">
				</div>
				<!-- Email -->
				<div class="col-lg-6">
					<input id="email" name="email" type="email" name="email" class="contact_input" placeholder="E-mail">
				</div>
			</div>
			<!-- subject -->
			<div>
				<input id="subject" name="subject" list="subjects" class="contact_input" placeholder="Subject" required>
				<datalist id="subjects" >
					<option id="v1" value="derivation"> Derivation </option>
					<option id="v2" value="integration"> Integration </option>
					<option id="v3" value="series"> Series </option>
					<option id="v4" value="trigonomitry"> Trigonomitry </option>
					<option id="v5" value="vectors"> Vectors </option>
				</datalist>
			</div>
			<!-- Question -->
			<div>
				<textarea id="t-area" name="t-area" class="contact_textarea contact_input" placeholder="Your Question" required="required"></textarea>
			</div>
			<!-- FIle -->
			
			<div class="col-lg-6">
				<p id="ata-im" style="color:blue"> Attach File (JPG,JPEG,PNG,GIF,PDF) max size 3mb </p>
				<input type="file" name="fileToUpload" id="fileToUpload" onchange="previewFile()" class="contact_input" > <br>
				<img id="uploadimage" src="" height="100%" width="100%" alt="preview"> <br>
				<object id="pdf-file" data="" type="application/pdf" width="800" height="1000"> </object> <br>
			</div>

			<button id="send" class="contact_button button">send</button>
		</form>
	</div>	
</div>

</div>
<!-- ==== END Form Area === -->

<!-- Footer section -->
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
					<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="../../index.html"><b>easymath.lk</b></a></p> 
				</div>
			</div>
		</div>
	</footer>
</div>
<!-- End Footer section -->	
</div><!-- =====  supper container  ==== -->


<!-- == script == -->
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../../js/about.js"></script>
<script src="../../js/stellar.js"></script>
<script src="../../vendors/lightbox/simpleLightbox.min.js"></script>
<script src="../../vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="../../js/jquery.ajaxchimp.min.js"></script>
<script src="../../vendors/counter-up/jquery.counterup.js"></script>
<script src="../../js/theme.js"></script>

<!-- script for onload-->
<script>
function hide_files(){
	document.getElementById('pdf-file').style.display="none";
	document.getElementById('uploadimage').style.display="none";	
}

function on_load(){
	hide_files();
	document.getElementById("projects-sin").style.display="none";
}
	

</script>

<!-- === script for view file === -->
<script>
function previewFile(){
	var file=document.getElementById('fileToUpload');
	var name=document.getElementById('fileToUpload').value;
	var ext=name.substr(name.lastIndexOf(".")+1);
	
	if(file.files[0].size>3000000){
		alert("Your file is too lrge");
		file.value=null;
		hide_files();
	}
	if(ext!="jpg" && ext!="jpeg" && ext!="png" && ext!="gif" && ext!="pdf" ){
		alert("Invalid file format");
		file.value=null;
		hide_files();
		
	}
	if(ext=="pdf") {
		
		document.getElementById('pdf-file').style.display="block";
		document.getElementById('uploadimage').style.display="none";
		
		var preview = document.querySelector('object'); //selects the query named img
		var file    = document.querySelector('input[type=file]').files[0]; //sames as here
		var reader  = new FileReader();

		reader.onloadend = function () {
		preview.data = reader.result;
		}

		if (file) {
			reader.readAsDataURL(file); //reads the data as a URL
		} 
		else {
			preview.data = "";
		}
		
	}
	if(ext=="jpg" || ext=="jpeg" || ext=="png" || ext=="gif"){
		
		document.getElementById('uploadimage').style.display="block";
		document.getElementById('pdf-file').style.display="none";
		
		var preview = document.querySelector('img'); //selects the query named img
		var file    = document.querySelector('input[type=file]').files[0]; //sames as here
		var reader  = new FileReader();

		reader.onloadend = function () {
		preview.src = reader.result;
		}

		if (file) {
			reader.readAsDataURL(file); //reads the data as a URL
		} 
		else {
			preview.src = "";
		}	
	}
}
previewFile();  //calls the function named previewFile()

</script>

<!-- === script for change language === -->
<script>
	/*===change language ===*/
	function changelan(x){
		if(x==0){
			document.getElementById("fh").innerHTML="Enter your details and question.";
			//article area-english
			document.getElementById("projects-eng").style.display="block";
			document.getElementById("projects-sin").style.display="none";
			
			document.getElementById("name").placeholder="Name";
			document.getElementById("email").placeholder="E-mail";
			document.getElementById("subject").placeholder="Subject";

			document.getElementById("v1").innerHTML="Derivation";
			document.getElementById("v2").innerHTML="Integration";
			document.getElementById("v3").innerHTML="Series";
			document.getElementById("v4").innerHTML="Trigonomitry";
			document.getElementById("v5").innerHTML="Vectors";

			document.getElementById("t-area").placeholder="Your Question";

			document.getElementById("ata-im").innerHTML="Attach File (JPG,JPEG,PNG,GIF,PDF) max size 3mb";

			document.getElementById("send").innerHTML="send";
			
		}
		if(x==1){
			document.getElementById("fh").innerHTML="ඔබේ විස්තර සහ ගැටලුව ඉදිරිපත් කරන්න .";
			//article area-sinhala
			document.getElementById("projects-eng").style.display="none";
			document.getElementById("projects-sin").style.display="block";
			
			document.getElementById("name").placeholder="නම";
			document.getElementById("email").placeholder="විද්‍යුත් තැපෑල";
			document.getElementById("subject").placeholder="විශය";

			document.getElementById("v1").innerHTML="අවකලනය";
			document.getElementById("v2").innerHTML="අනුකලනය ";
			document.getElementById("v3").innerHTML="ශ්‍රේණි ";
			document.getElementById("v4").innerHTML="ත්‍රිකෝණමිතිය ";
			document.getElementById("v5").innerHTML="දෛශික ";

			document.getElementById("t-area").placeholder="ඔබේ ගැටලුව";

			document.getElementById("ata-im").innerHTML="අමතර ගොනුවක් එකතුකරන්න (JPG,JPEG,PNG,GIF,PDF) උපරිම විශාලත්වය 3mb ";

			document.getElementById("send").innerHTML="යවන්න";
			
		}
	}
</script>

</body>
</html>