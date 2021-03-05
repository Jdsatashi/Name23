<html>
<body>
<h2>You have summitted the following to the server: </h2>
    <?php echo $_POST["pid"]; ?> <br>
    <?php echo $_POST["pname"]; ?> <br>
    <?php echo $_POST["pcost"]; ?> <br>
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
    $id = $_REQUEST['pid'];
    $name = $_REQUEST['pname'];
	$cate = $_REQUEST['pcate'];
    $cost = $_REQUEST['pcost'];
    /*
    $id = mysql_real_escape_string($link, $_REQUEST['pid']);
    $name = mysql_real_escape_string($link, $_REQUEST['pname']);
	$cate = mysqli_real_escape_string($link, $_REQUEST['pcate']);
    $cost = mysql_real_escape_string($link, $_REQUEST['pcost']);
    */
    echo $id; 
	<p>
	</p>
    echo $name;
	<p>
	</p>
    echo $cost;
	<p>
	</p>

    $mysql = "INSERT INTO public."Product" (pid, pname, pcate, pcost) VALUES ('$id', '$name', '$cate', '$cost')";
    <p>
	</p>
	echo $mysqlquery;
    
    if(pg_query($link, $mysqlquery)){
		echo "Records added successfully.";
	} else{
		echo "ERROR: Could not able to execute $mysqlquery. " . pg_error($link);
	}
    ?>

</body>
</html>