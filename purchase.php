<?php
include "connection.php";

$ORDER_ID=$_POST['ORDER_ID'];
$CUST_ID=$_POST['CUST_ID'];
$CUST_NAME=$_POST['CUST_NAME'];
$CUST_PHONE_NUM=$_POST['CUST_PHONE_NUM'];
$PACKAGE=$_POST['PACKAGE'];
$PACKAGE_PRICE=$_POST['PACKAGE_PRICE'];
$ROOM_WIDTH=$_POST['ROOM_WIDTH'];
$ROOM_LENGTH=$_POST['ROOM_LENGTH'];
$STAFF_ID=$_POST['STAFF_ID'];

$input= "INSERT INTO order_detail(ORDER_ID,CUST_ID,CUST_NAME,CUST_PHONE_NUM,PACKAGE,PACKAGE_PRICE,ROOM_WIDTH,ROOM_LENGTH,STAFF_ID)VALUES('$ORDER_ID','$CUST_ID','$CUST_NAME','$CUST_PHONE_NUM','$PACKAGE','$PACKAGE_PRICE','$ROOM_WIDTH','$ROOM_LENGTH','$STAFF_ID')";
$result = mysqli_query($link,$input) or die("Query failed");

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
