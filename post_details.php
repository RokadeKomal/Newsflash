<?php
include('connection.php');

$db=mysqli_connect($servername,$username,$password,$dbname);

    //check connection 
    if($db->connect_error){
        die("connection failed:".$db);
    }
    /*else{
        echo"connected";
    }*/
   

if(isset($_POST['submit'])){
	$Name=$_POST['Name'];
	$Description=$_POST['Description'];
	$imagepath=$_FILES['image']['tmp_name'];
	$Website=$_POST['link'];
	

	if(!empty($imagepath))
	{
		$img_binary=fread(fopen($imagepath,"r"),filesize($imagepath));
		$picture=base64_encode($img_binary);
	}
	

	$upload="INSERT INTO post(Name,Description,Image,Website) VALUES('$Name','$Description','$picture','$Website')";
    if(mysqli_query($db,$upload)){
        header('location:home2.php');
    }
}
?>