<?php
    include 'products/products/in.php';
	mysql_connect("localhost","root","");
	mysql_select_db("vending");
	$result = mysql_query("select * from users where email='$email';");
	$res = mysql_num_rows('$result');
	if($res == 1)
	{
		echo("success");
	}
	else
	{
		header("location: products/products/main.php");
	}
?>