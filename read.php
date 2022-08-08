<?php 
include "connection.php";

$data= mysqli_query ($link, "select * from order_detail");

while ($result= mysqli_fetch_array ($data)){
echo "Order ID: ";
echo $result ["ORDER_ID"];
echo"||";
echo "Customer Name: ";
echo $result ["CUST_NAME"];
echo"||";
echo "Phone Number: ";
echo $result ["CUST_PHONE_NUM"];
echo"||";
echo "Package: ";
echo $result ["PACKAGE"];
echo"||";
echo "Price: ";
echo $result ["PACKAGE_PRICE"];
echo"||";
echo "Room Width: ";
echo $result ["ROOM_WIDTH"];
echo"||";
echo "Room Height: ";
echo $result ["ROOM_LENGTH"];
echo"||";
echo"||";

}
?>