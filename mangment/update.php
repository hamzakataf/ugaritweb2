<?php
include('../dbconfig.php');
// s1 for status1 *** and sd1 for id
$timestamp = time();
$date = date("Y/m/d h:i:s A", $timestamp);
if((isset($_GET['sd1']))){
   if ($_GET['exam']==0) {
    $status2_1=1;
    $up=$database->prepare('UPDATE student SET status1_2=:status1_2 WHERE ID=:id');
    $up->bindParam('status1_2',$status2_1);
    $up->bindParam('id',$_GET['sd1']);
    $up->execute();

   }
    $updatestatus1=$database->prepare('UPDATE student SET status2=:status2 , MANGMENTNOTE=:note , EXAMSTATUS=:exam , CLASS=:class , st_update2=:timeup WHERE ID=:id');
    $updatestatus1->bindParam('status2',$_GET['s1']);
    $updatestatus1->bindParam('id',$_GET['sd1']);
    $updatestatus1->bindParam('note',$_GET['mangenote']);
    $updatestatus1->bindParam('exam',$_GET['exam']);
    $updatestatus1->bindParam('class',$_GET['class']);
    $updatestatus1->bindParam('timeup',$date);


    $updatestatus1->execute();
    header('location:newstudents.php');
}

?>
