<html>
<body>
<p><a href="insertpro.php">Back</a></p>
<h2>You have summitted the following to the server: </h2>
    <?php echo $_POST["cid"]; ?> <br>
    <?php echo $_POST["cname"]; ?> <br>
    <?php echo $_POST["phonenumber"]; ?> <br>
	<?php echo $_POST["address"]; ?> <br>
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

    $id = $_REQUEST["cid"];
    $name = $_REQUEST["cname"];
	$phone = $_REQUEST["phonenumber"];
    $add = $_REQUEST["address"];
/*
    $id = mysql_real_escape_string($link, $_REQUEST['pid']);
    $name = mysql_real_escape_string($link, $_REQUEST['pname']);
	$cate = mysql_real_escape_string($link, $_REQUEST['pcate']);
    $cost = mysql_real_escape_string($link, $_REQUEST['pcost']);
*/


$sql = 'INSERT INTO "customer"("cid","cname","phonenumber","address") VALUES ('."
			'$id'::character varying,'$name'::character varying,'$phone'::integer,'$add'::character varying)".
			 'returning "cid"';

    //$mysqlquery = "INSERT INTO Product(pid, pname, pcate, pcost) VALUES ('$id', '$name', '$cate', '$cost')";
    
	echo $sql;
	
    if(pg_query($link, $sql)){
		echo "Records added successfully.";
	} 
	pg_close($link);
    ?>

</body>
</html>