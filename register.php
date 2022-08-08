<?php
include "connection.php";

$STAFF_ID=$_POST['STAFF_ID'];
$PASSWORD=$_POST['PASSWORD'];
$STAFF_NAME=$_POST['STAFF_NAME'];
$STAFF_PHONE_NUM=$_POST['STAFF_PHONE_NUM'];

$input= "INSERT INTO staff (STAFF_ID,PASSWORD,STAFF_NAME,STAFF_PHONE_NUM)VALUES('$STAFF_ID','$PASSWORD','$STAFF_NAME','$STAFF_PHONE_NUM')";
$result = mysqli_query( $link,$input) or die("Query failed");

if ($result)
{
	echo " Add Successfully !";	
}	
else
{
	echo "Problem occured !"; 	
}
mysqli_close($link);
?>
