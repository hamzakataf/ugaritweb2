<?php
session_start();


header("Content-type: image/jpeg"); 
echo base64_decode($_SESSION['image']);
?>
