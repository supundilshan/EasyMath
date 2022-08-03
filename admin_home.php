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
table,tr,th,td {margin:20px;padding:10px;border:1px solid;}
</style>
<script src="jquery-3.3.1.min.js"></script>

</head>
<script> 
function hide_file(){
	document.getElementById("qarea").style.display="none";
	document.getElementById("img").style.display="none";
	document.getElementById("pdf-file").style.display="none";
}
function view(table,path) {
	document.getElementById("qarea").style.display="block";
	
	var s_name=table.cells[2].innerHTML;
	var file=table.cells[3].innerHTML;
	var ext=table.cells[4].innerHTML;
	var s_email=table.cells[5].innerHTML;
	var f_path=path+file+"."+ext;
	var t_path=path+file+".txt";
	
	document.getElementById("name").innerHTML=s_name;
	document.getElementById("email").innerHTML=s_email;
	
	if(ext==""){
		document.getElementById("img").style.display="none";
		document.getElementById("pdf-file").style.display="none";
	}
	else if(ext=="pdf"){
		document.getElementById("img").style.display="none";
		document.getElementById("pdf-file").style.display="block";	
		document.getElementById("pdf-file").data=f_path;	
	}
	else{
	document.getElementById("pdf-file").style.display="none";
	document.getElementById("img").style.display="block";
	document.getElementById("img").src=f_path;
	}
				
	jQuery.get(t_path,function(data){
	$('#p03').html(data);
	});
	
}
function view_al(x){		
		var table=document.getElementById("alevel").rows[x];
		var path="grades/a-level/user_uploads/";
		view(table,path);
}
function view_ol(x){		
		var table=document.getElementById("olevel").rows[x];
		var path="grades/o-level/user_uploads/";
		view(table,path);
}
function view_9(x){		
		var table=document.getElementById("grade9").rows[x];
		var path="grades/grade-9/user_uploads/";
		view(table,path);
}
function view_8(x){		
		var table=document.getElementById("grade8").rows[x];
		var path="grades/grade-8/user_uploads/";
		view(table,path);
}
function view_7(x){		
		var table=document.getElementById("grade7").rows[x];
		var path="grades/grade-7/user_uploads/";
		view(table,path);
}
function view_6(x){		
		var table=document.getElementById("grade6").rows[x];
		var path="grades/grade-6/user_uploads/";
		view(table,path);
}
function hide_tables(){
	document.getElementById("a-level").style.display="none";
	document.getElementById("o-level").style.display="none";
	document.getElementById("grade9").style.display="none";
	document.getElementById("grade8").style.display="none";
	document.getElementById("grade7").style.display="none";	
	document.getElementById("grade6").style.display="none";
}
function display_grade(value){
	if(value=="hide"){
	hide_file();
	hide_tables();
	}
	if(value=="al"){
	hide_file();
	hide_tables();
	document.getElementById("a-level").style.display="block";
	}
	if(value=="ol"){
	hide_file();
	hide_tables();
	document.getElementById("o-level").style.display="block";
	}
	if(value=="g9"){
	hide_file();
	hide_tables();
	document.getElementById("grade9").style.display="block";
	}
	if(value=="g8"){
	hide_file();
	hide_tables();
	document.getElementById("grade8").style.display="block";
	}
	if(value=="g7"){
	hide_file();
	hide_tables();
	document.getElementById("grade7").style.display="block";	
	}
	if(value=="g6"){
	hide_file();
	hide_tables();	
	document.getElementById("grade6").style.display="block";
	}
}
</script>
<body style="background-color: #99ccff ;height:100%" onload="display_grade('hide')">
<div class="super_container">
<!-- Header-->
<div style="background-image:url(img/header_bg.jpg);background-repeat: no-repeat;background-attachment: fixed; padding-top:10px">
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

<!-- ==== article section ===== -->

<article id="article" style="margin-top: 250px ;padding: 50px; margin-left:10px;margin-right: 10px;border: 1px solid;background-image:url('img/bg.jpg');background-attachment: fixed;">
<div class="container">
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="uploads";

//create connecion
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	echo "failed - ".$conn->connect_error;
}
else{
	echo "connected to database";
}
echo "<br>";
?>

<div class="row" >
	<p style="margin-left:10px;margin-top:8px;margin-right:15px" > Select Grade </p>
	<select id="select-grade" onchange="display_grade(this.value)">
			<option value="al">  A/L </option>								
			<option value="ol">  O/L </option>
			<option value="g9">  Grade 9 </option>								
			<option value="g8">  Grade 8 </option>
			<option value="g7">  Grade 7 </option>								
			<option value="g6">  Grade 6 </option>
	</select>
</div>

<?php
//a level=========================================
echo "<div id='a-level'>";
$var=1;
$sql="select * from alevel; ";
$result=$conn->query($sql);

if($result==true){
	echo "connected to table alevel";
}
else {
	echo "error " .$sql ."<br>".$conn->error; 
}

if($result->num_rows>0){
	echo "<table id='alevel'>";
	echo "<tr> <th>No</th> <th>Date</th> <th>Name</th> <th>File Name</th> <th>Attached File</th> <th>Email</th> <th>Action</th> </tr>";
	while($row=$result->fetch_assoc()){
		
	echo "<tr><td>".$row["number"]."</td><td>".$row["up_date"]."</td><td>".$row["s_name"]."</td><td>".$row["text_file"]."</td><td>".$row["attach_file"]."</td><td>".$row["email"]."</td><td> <button type='button' onclick='view_al(".$var.")'>view</button></td></tr>";
	$var++;
	}
	echo "</table>";
}
echo "</div>";

//o level=========================================
echo "<div id='o-level'>";
$var=1;
$sql="select * from olevel; ";
$result=$conn->query($sql);

if($result==true){
	echo "connected to table olevel";
}
else {
	echo "error " .$sql ."<br>".$conn->error; 
}

if($result->num_rows>0){
	echo "<table id='olevel'>";
	echo "<tr> <th>No</th> <th>Date</th> <th>Name</th> <th>File Name</th> <th>Attached File</th> <th>Email</th> <th>Action</th> </tr>";
	while($row=$result->fetch_assoc()){
		
	echo "<tr><td>".$row["number"]."</td><td>".$row["up_date"]."</td><td>".$row["s_name"]."</td><td>".$row["text_file"]."</td><td>".$row["attach_file"]."</td><td>".$row["email"]."</td><td> <button type='button' onclick='view_ol(".$var.")'>view</button></td></tr>";
	$var++;
	}
	echo "</table>";
}
echo "</div>";
//grade 9========================================
echo "<div id='grade9'>";
$var=1;
$sql="select * from grade9; ";
$result=$conn->query($sql);

if($result==true){
	echo "connected to table grade9";
}
else {
	echo "error " .$sql ."<br>".$conn->error; 
}

if($result->num_rows>0){
	echo "<table id='grade9'>";
	echo "<tr> <th>No</th> <th>Date</th> <th>Name</th> <th>File Name</th> <th>Attached File</th> <th>Email</th> <th>Action</th> </tr>";
	while($row=$result->fetch_assoc()){
		
	echo "<tr><td>".$row["number"]."</td><td>".$row["up_date"]."</td><td>".$row["s_name"]."</td><td>".$row["text_file"]."</td><td>".$row["attach_file"]."</td><td>".$row["email"]."</td><td> <button type='button' onclick='view_9(".$var.")'>view</button></td></tr>";
	$var++;
	}
	echo "</table>";
}
echo "</div>";
//grade8====================================
echo "<div id='grade8'>";
$var=1;
$sql="select * from grade8; ";
$result=$conn->query($sql);

if($result==true){
	echo "connected to table grade8";
}
else {
	echo "error " .$sql ."<br>".$conn->error; 
}

if($result->num_rows>0){
	echo "<table id='grade8'>";
	echo "<tr> <th>No</th> <th>Date</th> <th>Name</th> <th>File Name</th> <th>Attached File</th> <th>Email</th> <th>Action</th> </tr>";
	while($row=$result->fetch_assoc()){
		
	echo "<tr><td>".$row["number"]."</td><td>".$row["up_date"]."</td><td>".$row["s_name"]."</td><td>".$row["text_file"]."</td><td>".$row["attach_file"]."</td><td>".$row["email"]."</td><td> <button type='button' onclick='view_8(".$var.")'>view</button></td></tr>";
	$var++;
	}
	echo "</table>";
}
echo "</div>";
//grade7======================================
echo "<div id='grade7'>";
$var=1;
$sql="select * from grade7; ";
$result=$conn->query($sql);

if($result==true){
	echo "connected to table grade7";
}
else {
	echo "error " .$sql ."<br>".$conn->error; 
}

if($result->num_rows>0){
	echo "<table id='grade7'>";
	echo "<tr> <th>No</th> <th>Date</th> <th>Name</th> <th>File Name</th> <th>Attached File</th> <th>Email</th> <th>Action</th> </tr>";
	while($row=$result->fetch_assoc()){
		
	echo "<tr><td>".$row["number"]."</td><td>".$row["up_date"]."</td><td>".$row["s_name"]."</td><td>".$row["text_file"]."</td><td>".$row["attach_file"]."</td><td>".$row["email"]."</td><td> <button type='button' onclick='view_7(".$var.")'>view</button></td></tr>";
	$var++;
	}
	echo "</table>";
}
echo "</div>";
//grade6====================================
echo "<div id='grade6'>";
$var=1;
$sql="select * from grade6; ";
$result=$conn->query($sql);

if($result==true){
	echo "connected to table grade6";
}
else {
	echo "error " .$sql ."<br>".$conn->error; 
}

if($result->num_rows>0){
	echo "<table id='grade6'>";
	echo "<tr> <th>No</th> <th>Date</th> <th>Name</th> <th>File Name</th> <th>Attached File</th> <th>Email</th> <th>Action</th> </tr>";
	while($row=$result->fetch_assoc()){
		
	echo "<tr><td>".$row["number"]."</td><td>".$row["up_date"]."</td><td>".$row["s_name"]."</td><td>".$row["text_file"]."</td><td>".$row["attach_file"]."</td><td>".$row["email"]."</td><td> <button type='button' onclick='view_6(".$var.")'>view</button></td></tr>";
	$var++;
	}
	echo "</table>";
}
echo "</div>";
//=======================================
echo "<br><br>";

?>
<div id="qarea">
<div class="row" style="margin-left:10px">
<p style="color:red">Student Name : </p>
<p id="name" style="color:blue"></p>
</div>
<div class="row" style="margin-left:10px">
<p style="color:red">Student E-mail : </p>
<p id="email" style="color:blue"></p>
</div>
<h4>Question</h4>
<pre id="p03" style="font-size: 17px;font-family: Arial"></pre>
</div>
<img id="img" src="" alt="image" width="75%" height="70%">
<object id="pdf-file" data="" type="application/pdf" style="min-width:300px ;min-height:300px ;width:800px ;height:800px"> </object>
</div>
</article>


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