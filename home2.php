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

    
?>

    <!DOCTYPE html>
<html>
	<head>
		<title>News Flash</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
	<!--<div class="img">		
		<img src="img1.jpg" style="width:10%""height:10%">
	</div>-->
		<h1>
			"Everything's Not Always About You..."
		</h1>
	

	<div class="topnav" id="myTopnav">
		<a href="post.php" class="active">Publish</a>
		<a href="manage.php">Manage Publication</a> 
  		<a href="logout.php">Logout</a> 
	  	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i></a>
	</div>
<?php
$sql=mysqli_query($db,"SELECT * FROM post");
	$num=mysqli_num_rows($sql);
	if($num==0){
    	echo "no post yet";
	}
	else
	{
    	while($rows=mysqli_fetch_assoc($sql))
    	{
	        $id=$rows['id'];
	        $Name=$rows['Name'];
	        $Description=$rows['Description'];
	        $Website=$rows['Website'];
	        $image=$rows['Image'];
      	
?>

		<div class="display">
			<div class="Image">
		   		<?php echo "<img src=data:image/jpg;base64,$image width=20%>";?>
		    </div>
		</div>
		<div class="display2">
			<div class="Title">
	   			<?php echo $Name;?>
		    </div>
		    <div class="Comment">
		   		<?php echo $Description;?>
		    </div>
			<div class="Website">
		   		<?php echo $Website;?>
		    </div>
		    <div class="Date">
		    	<?php echo date("d/m/y");?>
		    </div>
		</div>
	</body>
</html>

<?php
	}}
?>