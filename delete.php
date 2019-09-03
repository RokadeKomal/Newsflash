<?php
session_start();
 if(isset($_GET['id']))
 	{
 		$id=$_GET['id'];
 		if(isset($_SESSION['id']))
 		{
			$userid=$_SESSION['id'];
			$conn=mysqli_connect('localhost','root','','news');
				if(!$conn)
				{
					echo "connection failed";
				}
		}
		else
		{
			echo "<script language='Javascript'>";
		 	echo "document.location.replace('./login.php')";
		 	echo "</script>";
  		}
  			$delete=mysqli_query($conn,"DELETE FROM post where id='$id'");
  				echo "<script language='Javascript'>";
		 		echo "document.location.replace('./home.php')";
		 		echo "</script>";
	}
?>