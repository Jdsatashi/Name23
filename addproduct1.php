<html>
<body>
<h2>You have summitted the following to the server: </h2>
    <?php echo $_POST["id"]; ?> <br>
    <?php echo $_POST["name"]; ?> <br>
    <?php echo $_POST["price"]; ?> <br>
    <?php
    $host = "ec2-34-201-248-246.compute-1.amazonaws.com";
    $dbname = "da79i3d6vat4tl";
    $port = "5432";
    $user = "tapdzjqevixblx";
    $pass = "adbd7cd24cae262eaf82c03725969b97984d969afbd7cac9637f9008bcc4f8ec";
    $ssl = "require";

    $link = pg_connect("host=".$host." dbname=".$dbname." port=".$port." user=".$user." password=".$pass." sslmode=".$ssl);
    
    if($link === false){
		die("ERROR: Could not connect.");
	} else {
		echo "Connection to Heroku Postgres has been established";
	}
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
	$cat = $_REQUEST['category'];
    $price = $_REQUEST['price'];
    /*
    $id = mysql_real_escape_string($link, $_REQUEST['id']);
    $name = mysql_real_escape_string($link, $_REQUEST['name']);
    $price = mysql_real_escape_string($link, $_REQUEST['price']);
	$cat = mysqli_real_escape_string($link, $_REQUEST['cat']);
    */
    echo $id;
    echo $name;
    echo $price;

    $mysqlquery = "INSERT INTO Product (id, name, category, price) VALUES ('$id', '$name', '$cat', '$price')";
    echo $mysqlquery;
    
    if(pg_query($link, $mysqlquery)){
		echo "Records added successfully.";
	} else{
		echo "ERROR: Could not able to execute $mysqlquery. " . pg_error($link);
	}
		pg_close($link);
    ?>
<p><a  href="product.php"> Back page insert product</a></p>
</body>
</html>