<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="ad.css">
    <?php
    
    ?>
</head>
<body>
    <center>
        <?php
        include('config.php');
        $ID=$_GET['id'];
        // echo $ID;
        $sqls = mysqli_query($con , "SELECT * FROM admin WHERE id=$ID");
        $data = mysqli_fetch_array($sqls);
        ?>
        <div class="main">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <h2>Admin Page</h2>
                <!-- <img src="Administrator-PNG-File.png" alt="logo" width="70px" height="70px"> -->
                <input type="text" name='id' placeholder="id" value="<?php echo $data['id']; ?>">
                <br>
                <input type="text" name='name' placeholder="Product Name" value="<?php echo $data['name']; ?>">
                <br>
                <input type="text" name='price' placeholder="Product Price" value="<?php echo $data['price']; ?>">
                <br>
                <input type="file" id="file" name='image' style='display:none;' value="<?php echo $data['img']; ?>">
                <label for="file" style="border-radius:10px; display:block; width:38%;">Select Image</label>
                <br>
                <button name='update' style="width:42%;">Edit Product</button>
                <br><br>
                <a href="ad_pro.php" >Show All products</a>
            </form>
        </div>
        
    </center>
</body>
</html>