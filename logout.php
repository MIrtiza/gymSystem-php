<?php
session_start();
session_destroy();
echo "logout succesfully";
header("location:login.php");
?>