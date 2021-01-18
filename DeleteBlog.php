<?php

		include_once'connection.php';
		
	
		$ID = $_GET["id"];

		/* file remove from folder*/
		$FileQuery="SELECT file_name From blogs where id=' $ID ' ";
		$Execute2=mysqli_Query($con,$FileQuery);

		 $row = mysqli_fetch_array($Execute2);

		 $src=$row['file_name'];
  
         $tmpfile = 'Upload/'. $src;
         unlink($tmpfile);

         /*Delete file data form database table*/
		$Delete_Query="DELETE From blogs where id='  $ID  ' ";
		$Execute=mysqli_Query($con,$Delete_Query);

		if($Execute)
		{
			
			header("location: blog_loginUser.php");

		}
		else
		{
			echo "Error..Not Deleted.";
		}
	?>