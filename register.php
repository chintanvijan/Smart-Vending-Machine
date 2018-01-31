<?php
    $email = $_POST['email'];
	$sex = $_POST['sex'];
    $pno = $_POST['pno'];
	$pwd = $_POST['pwd'];
	$pass =  $_POST['pass'];
	
	if($pass == $pwd)
	{
	mysql_connect("localhost","root","");
	mysql_select_db("vending");
	$pas = md5('$pass');
	mysql_query("Insert into users values('$email','$sex','$pno','$pas');");
	}
	else
	{
		header("location: error.php");
	}
?>