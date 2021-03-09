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

	<form method="post" action="addinvoice.php">
Type Id product:		<input type="text" name="pid" id="pid"><br>
Type Id customer:	<input type="text" name="cid" id="cid"><br>
Type number of product:		<input type="text" name="numb" id="numb"><br>
	<input type="submit">
</form>

</body>
</html>