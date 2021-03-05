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

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
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

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 18px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>

<body>
<h1> Welcome to page input data product</h1>

	<form method="post" action="addproduct1.php">
	<input type="hidden" id="controlUpdate" name="controlUpdate" value="<?php echo $isUpdated?>" />
  <div class="row">
    <div class="col-25">
      <label for="name">Product Id</label>
    </div>
    <div class="col-75">
      <input type="text" id="id" name="id" value="<?php echo $id?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="product id...">
    </div>	
  </div>
    <div class="row">
    <div class="col-25">
      <label for="name">Product Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" value="<?php echo $name?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="product name...">
    </div>	
  </div>
    <div class="row">
    <div class="col-25">
      <label for="name">Product Category</label>
    </div>
    <div class="col-75">
      <input type="text" id="category" name="category" value="<?php echo $category?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="product category...">
    </div>	
  </div>
    <div class="row">
    <div class="col-25">
      <label for="name">Product Price</label>
    </div>
    <div class="col-75">
      <input type="text" id="price" name="price" value="<?php echo $price?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="product price...">
    </div>	
  </div>
	<input type="submit">
</form>

</body>
</html>