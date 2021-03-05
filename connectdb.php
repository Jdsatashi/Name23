<?php
    $host = "ec2-54-225-190-241.compute-1.amazonaws.com";
    $dbname = "deo68284g86ml9";
    $port = "5432";
    $user = "zsbowtuipocfvd";
    $pass = "aa4e1d3fefe353a1ffb6c457704b3432ffddd24cca3a929da46a25d93969e1b6";
	$ssl = "require";
$conn=mysqli_connect($host,$dbname,$port,$user,$pass,$ssl);
mysqli_query($conn,"SET NAMES 'utf8'");
if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}	} else {
		echo "Connection to Heroku Postgres has been established";
	}
		pg_close($link);
?>