<?php
$host="localhost";
$user="root";
$password="";
$db="phptutorial";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "failed to connect DB".$conn->connect_error;
}
?>