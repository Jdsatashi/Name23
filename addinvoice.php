<html>
<head>
<style>
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 30px;
}
</style>
</head>
<body>
<p><a href="insertpro.php">Back</a></p>

<h1>Payment successfully. Here are your bill </h1>

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

    $cid = $_REQUEST["cid"];
    $pid = $_REQUEST["pid"];
	$price = $_REQUEST["price"];
    $date = $_REQUEST["datebuy"];
/*
    $id = mysql_real_escape_string($link, $_REQUEST['pid']);
    $name = mysql_real_escape_string($link, $_REQUEST['pname']);
	$cate = mysql_real_escape_string($link, $_REQUEST['pcate']);
    $cost = mysql_real_escape_string($link, $_REQUEST['pcost']);
*/


$sql = 'INSERT INTO "invoice"("pid","cid","price","datebuy") VALUES ('."
			'$cid'::integer,'$pid'::integer,'$price'::integer,'$date'::date)".
			 'returning "invid"';

    //$mysqlquery = "INSERT INTO Product(pid, pname, pcate, pcost) VALUES ('$id', '$name', '$cate', '$cost')";
    
$query = 'SELECT pname,pcost, cname, phonenumber, invid from "product","customer", "invoice" where product.pid = invoice.pid';

    $prod = pg_query($link, $query);
	?>




    if(pg_query($link, $sql)){
		echo "...";
	} 
	pg_close($link);
    ?>

</body>
</html>