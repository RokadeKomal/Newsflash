<?php 
    include_once'post_details.php';
?>
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
        <form method="post" action="post_details.php" enctype="multipart/form-data" >
            <h1>Publish</h1>
        <div class="input">
            Title :<input type="text" name="Name" placeholder="Enter The Title" required>
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
        
        
        <button class="button" name="submit"><b>submit</b></button>
    </form>
</div>
</body>
</html>

