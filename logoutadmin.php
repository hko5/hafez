<?php
include('config.php');
session_start();

unset($user);
session_destroy();
header('location:admlog.php');

?>