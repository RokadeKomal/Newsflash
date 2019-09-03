<!DOCTYPE html>
<html>
      <title>form</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slim.min.js"></script>

</head>
<body>
<?php
 include 'connection.php';
 if(isset($_POST['submit'])){
      $id=$_POST['show'];
 echo $id;
 $select=mysqli_query($db,"SELECT * FROM post WHERE id='$id'");
  if ($select) {

  while($rows=mysqli_fetch_assoc($select))
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
        <button type="submit"><a href="update.php?id=<?php echo $id;?>">update</button>
    </div>
<?php
  }
   echo "</body>";
  }
  else
  {
    echo $db->error;
  }
}
?>
</html>
