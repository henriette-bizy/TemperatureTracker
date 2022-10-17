<?php  
include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
   $sql ="SELECT * FROM temps";
   $result = mysqli_query($connect,$sql);
   $chart_data="";
    while ($row = mysqli_fetch_array($result)) { 
   
       $devices[]  = $row['device'];
       $temperatures[] = $row['temperature'];
    }
   }
?>