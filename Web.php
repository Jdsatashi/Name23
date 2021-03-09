<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/Logoweb.jfif" type="image/png" />
		<meta charset="utf-8" />
		<title>
			Figure Shop JDsatashi
		</title>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="crossorigin="anonymous">

<link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css"crossorigin="anonymous">

<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.boder{
border-top: #ff0000 dashed 5px
}
.new1{
color: none;
}
.tim{
color: purple;
}

.header {
  padding: 5px;
  text-align: center;
  background-color: #e9d8f4;
  color: #A41BFF;
  font-size: 20px;
}
.booter {
  padding: 1px;
  text-align: center;
  background-color: #88FF84;
  color: #FF0000;
  font-size: 15px;
}
body {
  margin: 0 1% 0;
}
{
  box-sizing:border-box
}
h2 {
  text-align: center;
}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.mySlides {
    display: none;
}

.text {
  color: #FF0000;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
 
.dot {
  cursor:pointer;
  height: 12px;
  width: 12px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 4s ease;
}

.active, .dot:hover {
  background-color: #717171;
}
 
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 4s;
  animation-name: fade;
  animation-duration: 4s;
}
 
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
 
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.dropbtn {
  background-color: #D9D9D9;
  color: white;
  padding: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #D9D9D9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #D9D9D9;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #D9D9D9;
}
</style>
</head>

<body>

<div class="boder">

<div class="header">
  <h1 class="tim" 65px>Website Trading Figure Japan</h1>
  <h2 class="tim" 40px>JDsatashi</h2>
</div>

<style>
body {
    background-color: #B0FFEE;
}
</style>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="img/Logoweb.jfif">
	  <img  src="img/Logoweb.jfif" alt="" width="30px" height="30px"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
  <li><a href="Web.php">HOME</a></li>
  <li><a href="#">NEWS</a></li>
  <div class="dropdown">
  <button class="dropbtn">LIST CATEGORY</button>
  <div class="dropdown-content">
 <a href="#">
  All product</a>
 <a href="#">
  Category Male Figure</a>
 <a href="#">
  Category Female Figure</a>
</div>
</div>
      
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
	  <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
        <li> <a href="#"> Login </a></li>
      
      </ul>
    </div>
  </div>
</nav>

<h3 class="bg-primary">JDsatashi Figure Shop have the best figures of Vietnam.</h3>

<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="img/lego.jpg" style="width:100%">
    <div class="text">Otaku JD Satashi is Master of this web and this shop, the product is the best of the world, it could be Mlem!</div>
  </div>
 
  <div class="mySlides fade">
    <img src="img/rubik.jpg" style="width:100%">
    <div class="text">Otaku JD Satashi is Master of this web and this shop, the product is the best of the world, it could be Mlem!</div>
  </div>
 
  <div class="mySlides fade">
    <img src="img/chess1.jpg" style="width:100%">
    <div class="text">Otaku JD Satashi is Master of this web and this shop, the product is the best of the world, it could be Mlem!</div>
  </div>
</div>
<br>
 
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(0)"></span> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
</div>

<script>
  var slideIndex;
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      slideIndex++;
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      setTimeout(showSlides, 4010);
  }
  showSlides(slideIndex = 0);
	function currentSlide(n) {
    showSlides(slideIndex = n);
  }
</script>
<h3 class="bg-primary">What toys you want owned? Let's searching toys you like most.</h3>
    <?php
    $host = "ec2-34-201-248-246.compute-1.amazonaws.com";
    $dbname = "da79i3d6vat4tl";
    $port = "5432";
    $user = "tapdzjqevixblx";
    $pass = "adbd7cd24cae262eaf82c03725969b97984d969afbd7cac9637f9008bcc4f8ec";
    $ssl = "require";

    $link = pg_connect("host=".$host." dbname=".$dbname." port=".$port." user=".$user." password=".$pass." sslmode=".$ssl) or die ("Could not connect to server\n");

	$query = 'SELECT pid, pimg, pname, pcost FROM "product" ORDER BY "pid"';
	
    $prod = pg_query($link, $query)or die("Cannot execute query: $query\n");
	?>
	<?php   
while ($row = pg_fetch_row($prod)) {
  echo "$row[0] $row[1] $row[2]\n";
}
?>
pg_close($con); 

  </div>
<footer>
	<div class="container-fluid" id="copyright">
		<div class="row">
			<div class="booter">
				<p>Copyright @ 2020 Designed by <a href="https://www.facebook.com/Jd.Trinh.Tathan">Vĩnh Duy Trụ</a> | <a href="Web.php">Powered by Japan Figure</a>	</p>
			</div>
		</div>
	</div>
</footer>
</body>
</html>