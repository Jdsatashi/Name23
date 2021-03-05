<html>
<body>
<p> You have summitted the following to the server: </p>
    <?php echo $_POST["id"]; ?> <br>
    <?php echo $_POST["name"]; ?> <br>
    <?php echo $_POST["price"]; ?> <br>

<?php
$link = pg_connect("host=ec2-34-201-248-246.compute-1.amazonaws.com dbname=da79i3d6vat4tl port=5432 user=tapdzjqevixblx password=adbd7cd24cae262eaf82c03725969b97984d969afbd7cac9637f9008bcc4f8ec sslmode=require");

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
	
	$id = mysqli_real_escape_string($link, $_REQUEST['id']);
	$name = mysqli_real_escape_string($link, $_REQUEST['name']);
	$cat = mysqli_real_escape_string($link, $_REQUEST['cat']);
	$price = mysqli_real_escape_string($link, $_REQUEST['price']);
	
	echo $id;
	echo $name;
	echo $cat;
	echo $price;
	
	$mysqlquery = "INSERT INTO Product (id, name, category, price, description) VALUES ('$id', '$name', '$cat', '$price')";

	$mysqlquery = 'INSERT INTO public."Product" ("id", "name", "category", "price",) VALUES ('."'$id': :character varying,
	'$name': :character varying, '$cat': :character varying, '$price': :integer)".
	' returning "id"';
	
	echo $mysqlquery;
	
	if(pg_query($link, $mysqlquery)){
		echo "Records added successfully.";
	} else {
		echo "ERROR: Could not able to execute $mysqlquery. " . pg_error($link);
	}
?>
</body>
</html>