<?php

include('config.php');
$ID = $_GET['id'];

mysqli_query($con , "DELETE FROM admin WHERE id=$ID");
header("Location: ad_pro.php");

?>