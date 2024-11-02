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
    include('config.php');
    session_start();
    if($_SESSION['user'] == NULL){
        header("Location: admlog.php");
    }
    ?>
</head>
<body>
    <center>
        <div class="main">
            <form action="products.php" method="post" enctype="multipart/form-data">
                <h2>Admin Page</h2>
                <img src="Administrator-PNG-File.png" alt="logo" width="70px" height="70px">
                <input type="text" name='name' placeholder="Product Name">
                <br>
                <input type="text" name='price' placeholder="Product Price">
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file" style="border-radius:10px; display:block; width:38%;">Select Image</label>
                <br>
                <button name='upload' style="width:42%;">Upload Product</button>
                <br><br>
                <a name='logoutadmin.php' href='logoutadmin.php' style="width:42%;">Log out</a>
                <br><br>
                <a href="ad_pro.php" >Show All products</a>
            </form>
        </div>
        
    </center>
</body>
</html>