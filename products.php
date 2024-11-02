<?php

include('config.php');

if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'. $image_name);
    $image_up = "images/".$image_name;
    $insert = "INSERT INTO  admin (name, price ,img) VALUES ('$name','$price','$image_up')";
    mysqli_query($con, $insert);
    header('location: admin.php');
}



?>