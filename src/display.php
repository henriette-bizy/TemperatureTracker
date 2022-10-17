<?php 
include ('displaying.php');
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMP</title>
    <link rel="stylesheet" href="./assets/index.css">
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    
</head>
<body>
    
<div class="contain">
    <div class="left-side">
    <h1>Tempecc.</h1>
    </div>

    <div class="right-side">
 
     
     <div class="cards-board">
     <div class ="card">
      <p>17 records</p>
     </div>
     <div class ="card">
      <p>10 measures</p>
     </div>
     <div class ="card">
      <p>8 devices</p>
     </div>
     </div>

    <div class="chart">
                    <div class="row">
                        <canvas  id="chartjs_bar"></canvas> 
                 </div>
</div>      
      </div>
</div>


</body>
</html>

<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($devices); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($temperatures); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 15,
                        }
                    },
 
 
                }
                });
    </script>



