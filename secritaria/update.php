<?php
include('../dbconfig.php');
// s1 for status1 *** and sd1 for id
date_default_timezone_set("Asia/Damascus");
$timestamp = time();
$date = date("Y/m/d h:i:s A", $timestamp);

if((isset($_GET['sd1']))){
   
    $updatestatus1=$database->prepare('UPDATE student SET status1=:status1 , SECNOTE=:note , st_update=:timeup , USER_UPDATE=:u_p WHERE ID=:id');
    $updatestatus1->bindParam('status1',$_GET['s1']);
    $updatestatus1->bindParam('id',$_GET['sd1']);
    $updatestatus1->bindParam('note',$_GET['secnote']);
    $updatestatus1->bindParam('timeup',$date);
    $updatestatus1->bindParam('u_p',$_GET['u_p']);
    $updatestatus1->execute();
    header('location:newstudents.php');
}

?>