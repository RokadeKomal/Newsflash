<?php
include 'connection.php'; 

error_reporting(E_ALL);
if(isset($_POST['login'])){
	$name=$_POST['name'];
	$password=$_POST['password'];
	
    //echo $name;
    //echo $password;

	$upload="INSERT INTO user(Name,Password) VALUES('$name','$password')";
    if(mysqli_query($db,$upload)){
        header('location:home2.php');
    }
    else{
        echo $db->error;
    }
}
?>
<?php
include_once'home2.php';
?>