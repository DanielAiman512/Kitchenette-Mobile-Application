<?php 
 include 'connection.php';
       //delete data
       $delete_id=$_POST['STAFF_ID']; 

	   $query = "SELECT * FROM staff WHERE STAFF_ID='$delete_id'";

	   $result = mysqli_query($link,$query) or die("Query failed");

	   $data = mysqli_num_rows($result);

       if ($data>0)
	   {

	   $input = mysqli_query($link,"DELETE FROM staff WHERE STAFF_ID='$delete_id'") or die("Query failed");
	   echo " Delete Successfully!"; 

	   }
	     else
		{

	   echo "ID is invalid!"; 

		}
?>
