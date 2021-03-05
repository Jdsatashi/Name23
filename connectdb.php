<html>
<body>
<h1> You have summitted the following to the server: </h1>
<p> Id:     <?php echo $_POST["id"]; ?> <br> </p>
<p> Name product:     <?php echo $_POST["name"]; ?> <br> </p>
<p> Price:     <?php echo $_POST["price"]; ?> <br>

<?php
/* Attempt Heroku Postgres connection 
	Assuming you are running Heroku Postgres add-on
	with default setting*/
	$link = pg_connect("host=ec2-34-201-248-246.compute-1.amazonaws.com dbname=da79i3d6vat4tl port=5432 user=tapdzjqevixblx password=adbd7cd24cae262eaf82c03725969b97984d969afbd7cac9637f9008bcc4f8ec sslmode=require");
	 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect.");
	} else {
		echo "Connection to Heroku Postgres has been established";
	}
	
	 
	// Escape user inputs for security
	//$id = mysqli_real_escape_string($link, $_REQUEST['id']);
	//$name = mysqli_real_escape_string($link, $_REQUEST['name']);
	//$cat = mysqli_real_escape_string($link, $_REQUEST['cat']);
	//$date = mysqli_real_escape_string($link, $_REQUEST['date']);
	//$price = mysqli_real_escape_string($link, $_REQUEST['price']);
	//$description = mysqli_real_escape_string($link, $_REQUEST['description']);

	$id = "001";
	$name = "My Product";
	$cat = "Default";
	$date = "04-24-2020";
	$price = "100";
	$desc = "Default";
	 
	// Attempt insert query execution
	$sql4 = 'INSERT INTO public."Product" (
			"id","product_name","category","date","price","descriptions") VALUES ('."
			'$id'::character varying,'$name'::character varying,'$cat'::character varying,'$date'::date,'$price'::integer,'$desc'::character varying)".
			 'returning "id"';
	
	//$sql = "INSERT INTO public.Product (id, product_name, category, date, price, descriptions) VALUES			('001','My Product','Default','04/24/2020','100','Default')";
	
	if(pg_query($link, $sql4)){
		echo "Records added successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . pg_error($link);
	}
	
	// Close connection
	pg_close($link);
?>
</body>
</html>