<?php

include 'connection.php';
session_start(); 							//session_start(); 							

$STAFF_ID = $_POST['STAFF_ID']; 					// assign textbox to variable


$query = "SELECT * FROM staff where STAFF_ID='$STAFF_ID'"; 
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
 if(mysqli_num_rows($result) <= 0)   			// check either result found or not
	   {
      echo "Staff data exist";// redirect to another page (data not found!)
	   }
	   else
	   {
		echo "Staff data does not exist";
	   }
mysqli_close($link);
?>