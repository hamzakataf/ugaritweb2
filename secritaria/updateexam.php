<?php
include('../dbconfig.php');
// s1 for status1 *** and sd1 for id
date_default_timezone_set("Asia/Damascus");
$timestamp = time();
$date = date("Y/m/d h:i:s A", $timestamp);
$st1_2=1;
if((isset($_GET['sd1']))){
    $updatestatus1=$database->prepare('UPDATE student SET CLASS=:class , GRADE=:grade , status1_2=:st1_2  WHERE ID=:id');
    $updatestatus1->bindParam('id',$_GET['sd1']);
    $updatestatus1->bindParam('class',$_GET['class']);
    $updatestatus1->bindParam('grade',$_GET['grade']);
    $updatestatus1->bindParam('st1_2',$st1_2);
    $updatestatus1->execute();
    header('location:studentexam.php');
}

?>