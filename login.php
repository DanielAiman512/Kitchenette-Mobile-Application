
<?php

include 'connection.php';
session_start(); 							//session_start(); 							

$STAFF_ID = $_POST['STAFF_ID']; 					// assign textbox to variable
$PASSWORD = $_POST['PASSWORD'];

$query = "SELECT * FROM Staff WHERE STAFF_ID='$STAFF_ID' AND PASSWORD='$PASSWORD'"; 
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
 if(mysqli_num_rows($result) > 0)   			// check either result found or not
	   {			
	    echo "Successfully login";
	   }
	   else
	   {
		echo "Failed to login";
	   }
mysqli_close($link);
?>