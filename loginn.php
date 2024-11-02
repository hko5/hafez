<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="ad.css">
    <?php
    include('config.php');
    session_start();
    $ans = "";
    if(isset($_GET['check'])){
        $ans = $_GET['check'];
    }
    ?>
</head>
<body>
    <center>
        <div class="main">
            <form action="logdet.php" method="post" enctype="multipart/form-data">
                <h2>Admin Page</h2>
                <img src="Administrator-PNG-File.png" alt="logo" width="70px" height="70px">
                <br><br>
                <!-- <i class="bi bi-person"></i> -->
                <input type="text" name='email' placeholder="Email">
                <!-- <br> -->
                <input type="text" name='pass' placeholder="Password">
                <input type="text" name='check' readonly style="border:0px solid #a39276; background-color:#a39276" value="<?php echo $ans; ?>">
                <!-- <label name='check' style="background-color: #a39276; color:black; display:block;"><?php// echo $ans; ?></label> -->
                <button name='upload'>Login</button>
                <!-- <button class="buttonload">
                <i class="fa fa-spinner fa-spin"></i>Loading
                </button> -->
                <br><br>
            </form>
        </div>
        
    </center>
</body>
</html>