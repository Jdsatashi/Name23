<html>
<head>
	<title>JQuery Mobile Lab 2</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>
</head>

<body>
<h1> Welcome to page input data product</h1>
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
	
    $sql = 'SELECT pid, pname FROM "product" where pid=' .$_GET['pid'];
} else{
    $sql = 'select * from "product"';
}

$result = pg_query($link, $sql);
?>
<?php   
while ($row = pg_fetch_assoc($result)) { 
?>
	<form method="post" action="addinvoice.php">
Type Id customer:	<input type="text" name="cid" id="cid"><br>
Id product: <input type="text" name="pid" id="pid" value="<?php echo ['pid'];?>"><br>
Date: <input type="date" name="datebuy" id="datebuy"><br>
	<input type="submit">
<?php } ?>	
</form>

</body>
</html>