<?php
$servername="localhost";
$username="root";
$password="";
$dbname="news";

$db=mysqli_connect('localhost','root','','news');
if($db){
	echo"connected successfully";
}else{
	$db->error;
}
?>