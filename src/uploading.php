<?php
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
 
  if($_POST['device'] && $_POST['temperature'] ){

   $device = $_POST['device'];
   echo $device;
   $temperature =  $_POST['temperature'];
   $query = mysqli_query($connect,"INSERT into temps(device,temperature,timestamp) VALUES('$device','$temperature', NOW())");

   if($query){
      echo "<h3>Registered successfully</h3>";
   }
   else{
      echo "Error Occurred: ".mysqli_error($connect);
   }
   }
  }
         
?>

