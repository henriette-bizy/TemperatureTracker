<?php 
$server = "localhost";
$user = "root";
$database = "tempTracker";
$password = "12345qwerty";

$connect = mysqli_connect($server,$user,$password,$database);

if(!$connect){
    echo mysqli_connect_error();
}
?>