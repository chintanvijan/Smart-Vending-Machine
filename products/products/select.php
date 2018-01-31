<?php
include 'in.php';
if(isset($_POST['n1']))
{
$msg = "\r\t Pepsi,";
$fo = fopen('$email',"a");
fwrite($fo,$msg);
fclose($fo);	
echo '<script language="javascript">alert("Added to cart");</script>';
}
else if(isset($_POST['n2']))
{
	$msg = "\r\t Redbull,";
$fo = fopen('$email',"a");
fwrite($fo,$msg);
fclose($fo);
echo '<script language="javascript">';
echo'alert("Added to cart")';
echo'</script>';
}	
else if(isset($_POST['n3']))
{
	$msg = "\r\t Hidenseek,";
$fo = fopen('$email',"a");
fwrite($fo,$msg);
fclose($fo);
echo '<script language="javascript">alert("Added to cart");</script>';
}	
else if(isset($_POST['n4']))
{
	$msg = "\r\t Kurkure,";
$fo = fopen('$email',"a");
fwrite($fo,$msg);
fclose($fo);
echo '<script language="javascript">alert("Added to cart");</script>';
}	
header("location:main.php");

?>