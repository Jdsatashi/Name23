<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/Logoweb.jfif" type="image/png" />
		<meta charset="utf-8" />
		<title>
			Figure Shop JDsatashi
		</title>
		</title>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">

<link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">

<script src="bootstrap/bootstrap.min.js"></script>

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
  max-width: 800px;
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
  background-color: #FCFCFC;
  color: grey;
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
  background-color: #EDEDEE;
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
  <h1 class="tim" 65px>Website Selling Toys Vietnam</h1>
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

 </div>
 
<?php
ini_set('display_errors', 0);
error_reporting(E_ERROR); 

    $host = "ec2-34-201-248-246.compute-1.amazonaws.com";
    $dbname = "da79i3d6vat4tl";
    $port = "5432";
    $user = "tapdzjqevixblx";
    $pass = "adbd7cd24cae262eaf82c03725969b97984d969afbd7cac9637f9008bcc4f8ec";
    $ssl = "require";
	$link = pg_connect("host=".$host." dbname=".$dbname." port=".$port." user=".$user." password=".$pass." sslmode=".$ssl);
	
if ($_GET['pid']>0){
	
    $sql = 'SELECT pid, pimg, pname, pdetail, pcost FROM "product" where pid=' .$_GET['pid'];
} else{
    $sql = 'select * from "product"';
}

$result = pg_query($link, $sql);
?>


<div class="row">
<?php   
while ($row = pg_fetch_assoc($result)) { 
?>
  <div class="col-md-6">
    <div class="thumbnail">
      <img src="<?php echo $row['pimg'];?>">
      <div class="caption">
        <h3><?php echo $row['pname'];?></h3>
        <h6>Toys <?php echo $row['pname'];?> is the best quality was made in Vietnam.</h6>
		<h6><?php echo $row['pdetail'];?></h6>
		<h6>Price: <?php echo $row['pcost'];?> ¥ (yen)</h6>
		        <h6><a href="insertinv.php?pid=<?php echo $row['pid']?>"><button type="button" class="btn btn-info">Buy now</button></a></h6>
      </div>
    </div>		
  </div>
<?php } ?>
</div>

<footer>
	<div class="container-fluid" id="copyright">
		<div class="row">
			<div class="booter">
			<p>Copyright @ 2020 Designed by <a href="https://www.facebook.com/Jd.Trinh.Tathan">Vĩnh Duy Trụ - JD Trịnh Tathan</a> | <a href="Web.php">Powered by Super Toys Vietnam</a>	</p>
			</div>
		</div>
	</div>
</footer>
</body>
</html>