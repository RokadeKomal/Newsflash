<!DOCTYPE html>
<html>
<head>
    <title>News Flash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
<?php
	 include "connection.php";
	 if(isset($_GET['id'])){
	 	$id=$_GET['id'];
	 	//echo $id;

	 	$select=mysqli_query($db,"SELECT * FROM post WHERE id='$id'");
	 	$num=mysqli_num_rows($select);
	 	if($select){
	 		//echo "hii";
	 		if($num==1){
	 			while($r=mysqli_fetch_assoc($select)){
	 				$id=$r['id'];
	 				$name=$r['Name'];
	 				$des=$r['Description'];
	 				$image=$r['Image'];
	 				$website=$r['Website'];
	 				//echo $website;
	 				?>

        <form method="post" action="post_details.php" enctype="multipart/form-data" >
            <h1>Publish</h1>
        <div class="input">
            Title :<input type="text" name="Name" value="<?php echo $name; ?>" required>
        </div>
        <div class="input">
            Comment :<input type="text" name="Description" placeholder="Enter The Description" required>
        </div>
        <div class="input-group">
            Image :<input type="file" name="image" id="fileSelect" >
        </div>
            
        <div class="input">
            Website Link :<input type="url" name="link" placeholder="Enter Website Link" required>
        </div> 
        
        <!--<div class="input">
            contact :<input type="number" name="contact" placeholder="Enter Contact Number" required>
        </div>
        <div class="input">
            email :<input type="email" name="email" placeholder="Enter Email id" required>
        </div>-->

        <button class="button" name="submit"><b>submit</b></button>
    </form>
</div>
	 				<?php
	 			}

	 		}else{
	 			echo"no post id like that";
	 		}

	 	}else{
	 		echo $db->error;
	 	}
	 }
?>