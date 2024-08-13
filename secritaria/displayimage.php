<?php
// بداية الجلسة
session_start();

// الكود الخاص بك
header("Content-type: image/jpeg"); 
echo base64_decode($_SESSION['image']);
?>
