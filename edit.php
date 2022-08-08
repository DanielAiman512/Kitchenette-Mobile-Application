<?php
include 'connection.php';
       
	    $id=$_POST['STAFF_ID']; 
		$PASSWORD=$_POST['PASSWORD'];
		$STAFF_NAME= $_POST['STAFF_NAME'];
		$STAFF_PHONE_NUM= $_POST['STAFF_PHONE_NUM'];
       
	   
       //Update data   
	   $result = mysqli_query($link,"select * from staff where STAFF_ID = '$id'") or die("Query failed");
	  
        if (mysqli_num_rows($result) > 0)
		{ 
			$query=mysqli_query($link,"Update staff set PASSWORD='$PASSWORD',STAFF_NAME='$STAFF_NAME',STAFF_PHONE_NUM='$STAFF_PHONE_NUM' where STAFF_ID = '$id'");
			echo " Updated Successfully ! "; 
		}
		   else
		{ echo "Problem occured !"; }
        mysqli_close($link);	
?>
