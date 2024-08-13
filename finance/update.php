<?php
include('../dbconfig.php');
// s1 for status1 *** and sd1 for id
$timestamp = time();
$date = date("Y/m/d h:i:s A", $timestamp);

if((isset($_GET['sd1']))){
   
    $updatestatus1=$database->prepare('UPDATE student SET status3=:status1 , PAYSTATUS=:pay , st_update2=:timeup ,CODEST=:codest WHERE ID=:id');
    $updatestatus1->bindParam('status1',$_GET['s1']);
    $updatestatus1->bindParam('id',$_GET['sd1']);
    $updatestatus1->bindParam('pay',$_GET['payst']);
    $updatestatus1->bindParam('timeup',$date);
    $updatestatus1->bindParam('codest',$_GET['codest']);

    $updatestatus1->execute();
    header('location:newstudents.php');
}

?>
