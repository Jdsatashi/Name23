<html>
<body>
<h1> You have summitted the following to the server: </h1>
<p> Id:     <?php echo $_POST["id"]; ?> <br> </p>
<p> Name product:     <?php echo $_POST["name"]; ?> <br> </p>
<p> Price:     <?php echo $_POST["price"]; ?> <br>

<?php
$host = "ec2-34-201-248-246.compute-1.amazonaws.com";
$dbname = "da79i3d6vat4tl";
$port = "5432";
$user = "tapdzjqevixblx";
$pass = "adbd7cd24cae262eaf82c03725969b97984d969afbd7cac9637f9008bcc4f8ec";
$ssl = "require";

$link = pg_connect("host=".$host." dbname=".$dbname." port=".$port." user=".$user." password=".$pass." sslmode".ssl);
	if($link === false){
		die("ERROR: Could not connect.");
	} else {
		echo "Connection to Heroku Postgres has been established";
	}
$id = mysql_real_escape_string($link, $_REQUEST['id']);

	$id= $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$cat = $_REQUEST['category'];
	$price = $_REQUEST['price'];
	
	//$id = mysqli_real_escape_string($link, $_REQUEST['id']);
	//$name = mysqli_real_escape_string($link, $_REQUEST['name']);
	//$cat = mysqli_real_escape_string($link, $_REQUEST['cat']);
	//$price = mysqli_real_escape_string($link, $_REQUEST['price']);
	
	echo $id;
	echo $name;
	echo $cat;
	echo $price;
	
	//$sql4 = "INSERT INTO Product (id, name, category, price) VALUES ('$id', '$name', '$cat', '$price')";

	$sql4 = 'INSERT INTO public."Product" ("id", "name", "category", "price",) VALUES ('."'$id': :character varying,
	'$name': :character varying, '$cat': :character varying, '$price': :integer)".
	' returning "id"';
	
	echo $sql4;
	
	if(pg_query($link, $sql4)){
		echo "Records added successfully.";
	} else {
		echo "ERROR: Could not able to execute $sql4. " . pg_error($link);
	}
		pg_close($link);
?>
</body>
</html>