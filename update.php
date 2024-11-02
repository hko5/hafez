<?php
include('config.php');
if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'. $image_name);
    $image_up = "images/".$image_name;
    $sqll = "UPDATE admin SET name='$name', price='$price' , img='$image_up' WHERE id=$ID";
    mysqli_query($con , $sqll);
    header("Location: ad_pro.php");
}
?>