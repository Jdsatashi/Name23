<?php
$host = "";
$dbname = "";
$port = "";
$user = "";
$pass = "";
$ssl = "";

$link = pg_connect("host=".$host." dbname=".$dbname." port=".$port." user=".$user." password=".$pass." sslmode".ssl);

if($link === false){
	die("ERROR: Could not connect.");
}	else {
	echo "Connection to Heroku Postgres has been established";
}
$id = mysql_real_escape_string($link, $_REQUEST['id']);

	$id= $_REQUEST["id"];
	$name = $_REQUEST['productname'];
	$cat = $_REQUEST['category'];
	$price = $_REQUEST['price'];
	$desc = $_REQUEST['description'];
	
	//$pid = mysqli_real_escape_string($link, $_REQUEST['id']);
	//$pname = mysqli_real_escape_string($link, $_REQUEST['name']);
	//$pcat = mysqli_real_escape_string($link, $_REQUEST['cat']);
	//$pdate = mysqli_real_escape_string($link, $_REQUEST['date']);
	//$pprice = mysqli_real_escape_string($link, $_REQUEST['price']);
	//$pdescription = mysqli_real_escape_string($link, $_REQUEST['description']);
	
	echo $id;
	echo $name;
	echo $cat;
	echo $price;
	echo $desc;
	
?>