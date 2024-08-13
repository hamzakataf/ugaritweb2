<?php

$username="root";
$password="";
$host="mysql:=localhost:8080;dbname=ugarit";
try{
    $database= new PDO($host,$username,$password);
}catch (PDOException $e) {
    echo "". $e->getMessage();

}

?>